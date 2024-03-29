<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
/*********************************************************************************

 * Description: view handler for step 4 of the import process
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
 
require_once('include/MVC/View/SugarView.php');
require_once('modules/Import/Forms.php');
require_once('modules/Import/ImportMap.php');
require_once('modules/Import/ImportFile.php');
require_once('modules/Import/ImportFileSplitter.php');
require_once('modules/Import/ImportCacheFiles.php');
require_once('modules/Import/ImportFieldSanitize.php');
require_once('modules/Import/ImportDuplicateCheck.php');
require_once('modules/Import/UsersLastImport.php');
require_once('modules/Trackers/TrackerManager.php');
require_once('include/utils.php');
require_once('modules/Currencies/Currency.php');
require_once('include/Localization/Localization.php');

class ImportViewStep4 extends SugarView 
{	
    /**
     * Constructor
     */
 	public function __construct()
    {
 		parent::SugarView();
 	}
 	/** 
     * display the form
     */
 	public function display()
    {
        global $sugar_config;
        
        // Increase the max_execution_time since this step can take awhile
        ini_set("max_execution_time", max($sugar_config['import_max_execution_time'],3600));
        
        // stop the tracker
        TrackerManager::getInstance()->pause();
        
        // use our own error handler
        set_error_handler('handleImportErrors',E_ALL);
        
        global $mod_strings, $app_strings, $current_user, $import_bean_map;
        global $current_language, $timedate, $rowValue;
        $app_list_strings = return_app_list_strings_language($current_language);
        
        $update_only = ( isset($_REQUEST['import_type']) && $_REQUEST['import_type'] == 'update' );
        $firstrow    = unserialize(base64_decode($_REQUEST['firstrow']));
        
        // All the Look Up Caches are initialized here
        $enum_lookup_cache=array();
        
        // Let's try and load the import bean
        $focus = loadImportBean($_REQUEST['import_module']);
        if ( !$focus ) {
            trigger_error($mod_strings['LBL_ERROR_IMPORTS_NOT_SET_UP'],E_USER_ERROR);
        }
        
        // setup the importable fields array.
        $importable_fields = $focus->get_importable_fields();
        
        // loop through all request variables
        $importColumns = array();
        foreach ($_REQUEST as $name => $value) {
            // only look for var names that start with "fieldNum"
            if (strncasecmp($name, "colnum_", 7) != 0) {
                continue;
            }
            
            // pull out the column position for this field name
            $pos = substr($name, 7);
            
            if ( isset($importable_fields[$value]) ) {
                // now mark that we've seen this field
                $importColumns[$pos] = $value;
            }
        }
        
        // set the default locale settings
        $ifs = new ImportFieldSanitize();
        $ifs->dateformat = $_REQUEST['importlocale_dateformat'];
        $ifs->timeformat = $_REQUEST['importlocale_timeformat'];
        $ifs->timezone = $_REQUEST['importlocale_timezone'];
        $currency = new Currency();
        $currency->retrieve($_REQUEST['importlocale_currency']);
        $ifs->currency_symbol = $currency->symbol;
        $ifs->default_currency_significant_digits 
            = $_REQUEST['importlocale_default_currency_significant_digits'];
        $ifs->num_grp_sep 
            = $_REQUEST['importlocale_num_grp_sep'];
        $ifs->dec_sep = $_REQUEST['importlocale_dec_sep'];
        $ifs->default_locale_name_format 
            = $_REQUEST['importlocale_default_locale_name_format'];
        
        // Check to be sure we are getting an import file that is in the right place
        if ( realpath(dirname($_REQUEST['tmp_file']).'/') != realpath($sugar_config['upload_dir']) )
            trigger_error($mod_strings['LBL_CANNOT_OPEN'],E_USER_ERROR);
        
        // Open the import file
        $importFile = new ImportFile(
                        $_REQUEST['tmp_file'],
                        $_REQUEST['custom_delimiter'],
                        html_entity_decode($_REQUEST['custom_enclosure'],ENT_QUOTES)
                        );
        
        if ( !$importFile->fileExists() ) {
            trigger_error($mod_strings['LBL_CANNOT_OPEN'],E_USER_ERROR);
        }
        
        $fieldDefs = $focus->getFieldDefinitions();
        
        unset($focus);
        
        while ( $row = $importFile->getNextRow() ) {
            $focus = loadImportBean($_REQUEST['import_module']);
            $focus->save_from_post = false;
            $focus->team_id = null;
            $ifs->createdBeans = array();
        
            $do_save = true;
            
            for ( $fieldNum = 0; $fieldNum < $_REQUEST['columncount']; $fieldNum++ ) {
                // loop if this column isn't set
                if ( !isset($importColumns[$fieldNum]) ) {
                    continue;
                }
                unset($defaultRowValue);
                // get this field's properties
                $field           = $importColumns[$fieldNum];
                $fieldDef        = $focus->getFieldDefinition($field);
                $fieldTranslated = translate((isset($fieldDef['vname'])?$fieldDef['vname']:$fieldDef['name']),
                                        $_REQUEST['module'])." (".$fieldDef['name'].")";
                
                // translate strings
                global $locale;
                if(empty($locale)) {
                    $locale = new Localization();
                }
                if ( isset($row[$fieldNum]) )
                    $rowValue = $locale->translateCharset(
                                    strip_tags(trim($row[$fieldNum])), 
                                    $_REQUEST['importlocale_charset'],
                                    $sugar_config['default_charset']
                                    );
                else
                    $rowValue = '';
                
                // If there is an default value then use it instead
                if ( !empty($_REQUEST[$field]) ) {
                    $defaultRowValue = $_REQUEST[$field];
                    // translate default values to the date/time format for the import file
                    if ( $fieldDef['type'] == 'date' 
                            && $ifs->dateformat != $timedate->get_date_format() )
                        $defaultRowValue = $timedate->swap_formats(
                            $defaultRowValue, $ifs->dateformat, $timedate->get_date_format());
                    if ( $fieldDef['type'] == 'time' 
                            && $ifs->timeformat != $timedate->get_time_format() )
                        $defaultRowValue = $timedate->swap_formats(
                            $defaultRowValue, $ifs->timeformat, $timedate->get_time_format());
                    if ( $fieldDef['type'] == 'datetime' 
                            && $ifs->dateformat.' '.$ifs->timeformat != $timedate->get_date_time_format() )
                        $defaultRowValue = $timedate->swap_formats(
                            $defaultRowValue, $ifs->dateformat.' '.$ifs->timeformat, 
                            $timedate->get_date_time_format());
                    if ( in_array($fieldDef['type'],array('currency','float','int','num'))
                            && $ifs->num_grp_sep != $current_user->getPreference('num_grp_sep') )
                        $defaultRowValue = str_replace($current_user->getPreference('num_grp_sep'),
                            $ifs->num_grp_sep,$defaultRowValue);
                    if ( in_array($fieldDef['type'],array('currency','float'))
                            && $ifs->dec_sep != $current_user->getPreference('dec_sep') )
                        $defaultRowValue = str_replace($current_user->getPreference('dec_sep'),
                            $ifs->dec_sep,$defaultRowValue);
                    $currency->retrieve('-99');
                    $user_currency_symbol = $currency->symbol;
                    if ( $fieldDef['type'] == 'currency' 
                            && $ifs->currency_symbol != $user_currency_symbol )
                        $defaultRowValue = str_replace($user_currency_symbol,
                            $ifs->currency_symbol,$defaultRowValue);
                    if ( empty($rowValue) ) {
                        $rowValue = $defaultRowValue;
                        unset($defaultRowValue);
                    }
                }
                
                // Bug 22705 - Don't update the First Name or Last Name value if Full Name is set
                if ( in_array($field, array('first_name','last_name')) && !empty($focus->full_name) )
                    continue;
                
                // loop if this value has not been set
                if ( !isset($rowValue) )
                    continue;
                
                // If the field is required and blank then error out
                if ( array_key_exists($field,$focus->get_import_required_fields())
                        && empty($rowValue) 
                        && $rowValue!='0') {
                    $importFile->writeError(
                        $mod_strings['LBL_REQUIRED_VALUE'],
                        $fieldTranslated,
                        'NULL'
                        );
                    $do_save = false;
                }
    
                // Handle the special case "Sync to Outlook"
                if ( $focus->object_name == "Contacts" && $field == 'sync_contact' ) {
                    $bad_names = array();
                    $returnValue = $ifs->synctooutlook(
                            $rowValue, 
                            $fieldDef, 
                            $bad_names);
                    // try the default value on fail
                    if ( !$returnValue && !empty($defaultRowValue) )
                        $returnValue = $ifs->synctooutlook(
                            $defaultRowValue, 
                            $fieldDef, 
                            $bad_names);
                    if ( !$returnValue ) {
                        $importFile->writeError(
                            $mod_strings['LBL_ERROR_SYNC_USERS'],
                            $fieldTranslated,
                            explode(",",$bad_names));
                        $do_save = 0;
                    }
                }
                
                // Handle email1 and email2 fields ( these don't have the type of email )
                if ( $field == 'email1' || $field == 'email2' ) {
                    $returnValue = $ifs->email($rowValue, $fieldDef);
                    // try the default value on fail
                    if ( !$returnValue && !empty($defaultRowValue) )
                        $returnValue = $ifs->email(
                            $defaultRowValue, 
                            $fieldDef);
                    if ( $returnValue === FALSE ) {
                        $do_save=0;
                        $importFile->writeError(
                            $mod_strings['LBL_ERROR_INVALID_EMAIL'],
                            $fieldTranslated,
                            $rowValue);
                    }
                    else {
                        $rowValue = $returnValue;
                        // check for current opt_out and invalid email settings for this email address
                        // if we find any, set them now
                        $emailres = $focus->db->query(
                            "SELECT opt_out, invalid_email FROM email_addresses 
                                WHERE email_address = '".$focus->db->quote($rowValue)."'");
                        if ( $emailrow = $focus->db->fetchByAssoc($emailres) ) {
                            $focus->email_opt_out = $emailrow['opt_out'];
                            $focus->invalid_email = $emailrow['invalid_email'];
                        }
                    }
                }
                
                // Handle splitting Full Name into First and Last Name parts
                if ( $field == 'full_name' && !empty($rowValue) ) {
                    $ifs->fullname(
                            $rowValue, 
                            $fieldDef,
                            $focus);
                }
                
                // to maintain 451 compatiblity
                if(!isset($fieldDef['module']) && $fieldDef['type']=='relate')
                    $fieldDef['module'] = ucfirst($fieldDef['table']);
    
                if(isset($fieldDef['custom_type']) && !empty($fieldDef['custom_type']))
                    $fieldDef['type'] = $fieldDef['custom_type'];
                
                // If the field is empty then there is no need to check the data
                if( !empty($rowValue) ) {  
                    switch ($fieldDef['type']) {
                    case 'enum':
                    case 'multienum':
                        if ( isset($fieldDef['type']) && $fieldDef['type'] == "multienum" ) 
                            $returnValue = $ifs->multienum($rowValue,$fieldDef);
                        else
                            $returnValue = $ifs->enum($rowValue,$fieldDef);
                        // try the default value on fail
                        if ( !$returnValue && !empty($defaultRowValue) )
                            if ( isset($fieldDef['type']) && $fieldDef['type'] == "multienum" ) 
                                $returnValue = $ifs->multienum($defaultRowValue,$fieldDef);
                            else
                                $returnValue = $ifs->enum($defaultRowValue,$fieldDef);
                        if ( $returnValue === FALSE ) {
                            $importFile->writeError(
                                $mod_strings['LBL_ERROR_NOT_IN_ENUM']
                                    . implode(",",$app_list_strings[$fieldDef['options']]),
                                $fieldTranslated,
                                $rowValue);
                            $do_save = 0;
                        }
                        else
                            $rowValue = $returnValue;
                        
                        break;
                    case 'relate':
                        $returnValue = $ifs->relate(
                            $rowValue, 
                            $fieldDef, 
                            $focus,
                            empty($defaultRowValue));
                        if ( !$returnValue && !empty($defaultRowValue) )
                            $returnValue = $ifs->relate(
                                $defaultRowValue, 
                                $fieldDef, 
                                $focus);
                        break;
                    default:
                        if ( method_exists('ImportFieldSanitize',$fieldDef['type']) ) {
                            $fieldtype = $fieldDef['type'];
                            $returnValue = $ifs->$fieldtype($rowValue, $fieldDef);
                            // try the default value on fail
                            if ( !$returnValue && !empty($defaultRowValue) )
                                $returnValue = $ifs->$fieldtype(
                                    $defaultRowValue, 
                                    $fieldDef);
                            if ( !$returnValue ) {
                                $do_save=0;
                                $importFile->writeError(
                                    $mod_strings['LBL_ERROR_INVALID_'.strtoupper($fieldDef['type'])],
                                    $fieldTranslated,
                                    $rowValue);
                            }
                            else
                                $rowValue = $returnValue;
                        }
                    }
                }
                $focus->$field = $rowValue;
            }
            
            // check to see that the indexes being entered are unique.
            if (isset($_REQUEST['display_tabs_def']) && $_REQUEST['display_tabs_def'] != ""){
                $idc = new ImportDuplicateCheck($focus);
                if ( $idc->isADuplicateRecord(explode('&', $_REQUEST['display_tabs_def'])) ){
                    $importFile->markRowAsDuplicate();
                    $this->_undoCreatedBeans($ifs->createdBeans);
                    continue;
                }
            }
        
            // if the id was specified
            $newRecord = true;
            if ( !empty($focus->id) ) {
                $focus->id = convert_id($focus->id);
        
                // check if it already exists
                $query = "SELECT * FROM {$focus->table_name} WHERE id='".$focus->db->quote($focus->id)."'";
                $result = $focus->db->query($query) 
                            or sugar_die("Error selecting sugarbean: ");
        
                $dbrow = $focus->db->fetchByAssoc($result);
        
                if (isset ($dbrow['id']) && $dbrow['id'] != -1) {
                    // if it exists but was deleted, just remove it
                    if (isset ($dbrow['deleted']) && $dbrow['deleted'] == 1 && $update_only==false) {
                        $query2 = "DELETE FROM {$focus->table_name} WHERE id='".$focus->db->quote($focus->id)."'";
                        $result2 = $focus->db->query($query2) or sugar_die($mod_strings['LBL_ERROR_DELETING_RECORD']." ".$focus->id);
                        if ($focus->hasCustomFields()) {
                            $query3 = "DELETE FROM {$focus->table_name}_cstm WHERE id_c='".$focus->db->quote($focus->id)."'";
                            $result2 = $focus->db->query($query3);
                        }
                        $focus->new_with_id = true;
                    } 
                    else {
                        if( !$update_only ) {
                            $do_save = 0;
                            $importFile->writeError($mod_strings['LBL_ID_EXISTS_ALREADY'],'ID',$focus->id);
                            $this->_undoCreatedBeans($ifs->createdBeans);
                            continue;
                        }
                        $existing_focus = loadImportBean($_REQUEST['import_module']);
                        $newRecord = false;
                        if ( !( $existing_focus->retrieve($dbrow['id']) instanceOf SugarBean ) ) {
                            $do_save = 0;
                            $importFile->writeError($mod_strings['LBL_RECORD_CANNOT_BE_UPDATED'],'ID',$focus->id);
                            $this->_undoCreatedBeans($ifs->createdBeans);
                            continue;
                        }
                        else {
                            $newData = $focus->toArray();
                            foreach ( $newData as $focus_key => $focus_value )
                                if ( in_array($focus_key,$importColumns) )
                                    $existing_focus->$focus_key = $focus_value;
                                                   
                            $focus = $existing_focus;
                        }
                        unset($existing_focus);
                    }
                }
                else {
                    $focus->new_with_id = true;
                }
            }
        
            if ($do_save) {
                if ( !isset($focus->assigned_user_id) || $focus->assigned_user_id == '' && $newRecord ) {
                    $focus->assigned_user_id = $current_user->id;
                }





                $focus->optimistic_lock = false;
                if ( $focus->object_name == "Contacts" && isset($focus->sync_contact) ) {
                    //copy the potential sync list to another varible
                    $list_of_users=$focus->sync_contact;
                    //and set it to false for the save
                    $focus->sync_contact=false;
                }
                $focus->save(false);
                if ( $focus->object_name == "Contacts" && isset($list_of_users) ) 
                    $focus->process_sync_to_outlook($list_of_users);
                // Add ID to User's Last Import records
                if ( $newRecord )
                    ImportFile::writeRowToLastImport(
                        $_REQUEST['import_module'],
                        ($focus->object_name == 'Case' ? 'aCase' : $focus->object_name),
                        $focus->id);
            }
            else
                $this->_undoCreatedBeans($ifs->createdBeans);
        }
        
        // save mapping if requested
        if ( isset($_REQUEST['save_map_as']) && $_REQUEST['save_map_as'] != '' ) {
            $mapping_file = new ImportMap();
            if ( isset($_REQUEST['has_header']) && $_REQUEST['has_header'] == 'on') {
                $header_to_field = array ();
                foreach ($importColumns as $pos => $field_name) {
                    if (isset ($firstrow[$pos]) && isset ($field_name)) {
                        $header_to_field[$firstrow[$pos]] = $field_name;
                    }
                }
                $mapping_file->setMapping($header_to_field);
            } 
            else {
                $mapping_file->setMapping($importColumns);
            }
            
            // save default fields
            $defaultValues = array();
            for ( $i = 0; $i < $_REQUEST['columncount']; $i++ )
                if ( isset($importColumns[$i]) && !empty($_REQUEST[$importColumns[$i]]) )
                    $defaultValues[$importColumns[$i]] = $_REQUEST[$importColumns[$i]];
            $mapping_file->setDefaultValues($defaultValues);
            
            $result = $mapping_file->save(
                $current_user->id, 
                $_REQUEST['save_map_as'], 
                $_REQUEST['import_module'], 
                $_REQUEST['source'],
                ( isset($_REQUEST['has_header']) && $_REQUEST['has_header'] == 'on'),
                $_REQUEST['custom_delimiter'],
                html_entity_decode($_REQUEST['custom_enclosure'],ENT_QUOTES)
                );
        }
        
        $importFile->writeStatus();
    }
    
    /**
     * If a bean save is not done for some reason, this method will undo any of the beans that were created
     *
     * @param array $ids ids of user_last_import records created
     */
    protected function _undoCreatedBeans(
        array $ids
        )
    {
        $focus = new UsersLastImport();
        foreach ($ids as $id)
            $focus->undo($id);
    }
}
