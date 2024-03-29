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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('include/templates/TemplateGroupChooser.php');
require_once('include/Sugar_Smarty.php');
        
class SavedSearch extends SugarBean {
	var $db;
    var $field_name_map;

	// Stored fields
	var $id;
	var $date_entered;
	var $date_modified;
	var $assigned_user_id;
	var $assigned_user_name;
	var $modified_by_name;




	var $name;
	var $description;
	var $content;
	var $search_module;
	
	var $object_name = 'SavedSearch';
	var $table_name = 'saved_search';

	var $module_dir = 'SavedSearch';
	var $field_defs = array();
	var $field_defs_map = array();

    var $columns;
    
	function SavedSearch($columns = array(), $orderBy = null, $sortOrder = 'DESC') {
		parent::SugarBean();
        $this->columns = $columns;
        $this->orderBy = $orderBy;
        $this->sortOrder = $sortOrder;
		$this->setupCustomFields('SavedSearch');
		foreach ($this->field_defs as $field) {
			$this->field_name_map[$field['name']] = $field;
		}




	}

	// Saved Search Form
	function getForm($module, $inline = true) {
	    global $db, $current_user, $currentModule, $current_language, $app_strings, $image_path;
        $json = getJSONobj();
        
		$saved_search_mod_strings = return_module_language($current_language, 'SavedSearch');
                
		$query = 'SELECT id, name FROM saved_search 
				  WHERE 
					deleted = \'0\' AND
				  	assigned_user_id = \'' . $current_user->id . '\' AND 
					search_module =  \'' . $module . '\'
				  ORDER BY name';
	    $result = $db->query($query, true, "Error filling in saved search list: ");
		
		$savedSearchArray['_none'] = $app_strings['LBL_NONE'];
	    while ($row = $db->fetchByAssoc($result)) {
	        $savedSearchArray[$row['id']] = $row['name'];
	    }

		$sugarSmarty = new Sugar_Smarty();
		$sugarSmarty->assign('SEARCH_MODULE', $module);
		$sugarSmarty->assign('MOD', $saved_search_mod_strings);
		$sugarSmarty->assign('DELETE', $app_strings['LBL_DELETE_BUTTON_LABEL']);
        $sugarSmarty->assign('UPDATE', $app_strings['LBL_UPDATE']);
		$sugarSmarty->assign('SAVE', $app_strings['LBL_SAVE_BUTTON_LABEL']);
	    $sugarSmarty->assign('imagePath', $image_path);
        
        // Column Chooser
        $chooser = new TemplateGroupChooser();
        
        $chooser->args['id'] = 'edit_tabs';
        $chooser->args['left_size'] = 7;
        $chooser->args['right_size'] = 7;
        $chooser->args['values_array'][0] = array();
        $chooser->args['values_array'][1] = array();
        
        if(isset($_REQUEST['saved_search_select']) && $_REQUEST['saved_search_select']!='_none') {
            $this->retrieveSavedSearch($_REQUEST['saved_search_select']);
        }
        
        if((!empty($_REQUEST['displayColumns']) && $_REQUEST['displayColumns'] != 'undefined') || (isset($this->contents['displayColumns']) && $this->contents['displayColumns'] != 'undefined')) {
             // columns to display
             if(!empty($_REQUEST['displayColumns']) && $_REQUEST['displayColumns'] != 'undefined') $temp_displayColumns = $_REQUEST['displayColumns'];
             else $temp_displayColumns = $this->contents['displayColumns'];
             foreach(explode('|', $temp_displayColumns) as $num => $name) {  
             		if (!isset($this->columns[$name])) {
						// Ignore any column that is not on the list.
             			continue;
             		}
                    $chooser->args['values_array'][0][$name] = trim(translate($this->columns[$name]['label'], $module), ':');
             }
             // columns not displayed
             foreach(array_diff(array_keys($this->columns), array_values(explode('|', $temp_displayColumns))) as $num => $name) {
                    $chooser->args['values_array'][1][$name] = trim(translate($this->columns[$name]['label'], $module), ':');
             }
        }
        else {
             foreach($this->columns as $name => $val) {
                if(!empty($val['default']) && $val['default'])  
                    $chooser->args['values_array'][0][$name] = trim(translate($val['label'], $module), ':');
                else 
                    $chooser->args['values_array'][1][$name] = trim(translate($val['label'], $module), ':');
            }
        }
        
        if(!empty($_REQUEST['sortOrder'])) $this->sortOrder = $_REQUEST['sortOrder'];
        if(!empty($_REQUEST['orderBy'])) $this->orderBy = $_REQUEST['orderBy'];
        
        $chooser->args['left_name'] = 'display_tabs';
        $chooser->args['right_name'] = 'hide_tabs';
        $chooser->args['alt_tip'] = $app_strings['LBL_SORT'];
        
        $chooser->args['left_label'] =  $app_strings['LBL_DISPLAY_COLUMNS'];
        $chooser->args['right_label'] =  $app_strings['LBL_HIDE_COLUMNS'];
        $chooser->args['title'] =  '';
        $sugarSmarty->assign('columnChooser', $chooser->display());

        $sugarSmarty->assign('selectedOrderBy', $this->orderBy);
        if(empty($this->sortOrder)) $this->sortOrder = 'ASC';
        $sugarSmarty->assign('selectedSortOrder', $this->sortOrder);
         
        $lastSavedView = (empty($_SESSION['LastSavedView'][$module]) ? '' : $_SESSION['LastSavedView'][$module]);
        $sugarSmarty->assign('columnsMeta', $json->encode($this->columns));
        $sugarSmarty->assign('lastSavedView', $lastSavedView);
        $sugarSmarty->assign('SAVED_SEARCHES_OPTIONS', get_select_options_with_id($savedSearchArray, $lastSavedView));

        $json = getJSONobj();
        
        return $sugarSmarty->fetch('modules/SavedSearch/SavedSearchForm.tpl');
	}	
	
    function getSelect($module) {
        require_once('include/Sugar_Smarty.php');
        
        global $db, $current_user, $currentModule, $current_lang, $app_strings;
        $saved_search_mod_strings = return_module_language($current_lang, 'SavedSearch');

        $query = 'SELECT id, name FROM saved_search 
                  WHERE 
                    deleted = \'0\' AND
                    assigned_user_id = \'' . $current_user->id . '\' AND 
                    search_module =  \'' . $module . '\'
                  ORDER BY name';
        $result = $db->query($query, true, "Error filling in saved search list: ");
        
        $savedSearchArray['_none'] = $app_strings['LBL_NONE'];
        while ($row = $db->fetchByAssoc($result)) {
            $savedSearchArray[$row['id']] = $row['name'];
        }

        $sugarSmarty = new Sugar_Smarty();
        $sugarSmarty->assign('SEARCH_MODULE', $module);
        $sugarSmarty->assign('MOD', $saved_search_mod_strings);
        
        if(!empty($_SESSION['LastSavedView'][$module]) && (($_REQUEST['action'] == 'ListView') || ($_REQUEST['action'] == 'index')))
            $selectedSearch = $_SESSION['LastSavedView'][$module];
        else 
            $selectedSearch = '';

        $sugarSmarty->assign('SAVED_SEARCHES_OPTIONS', get_select_options_with_id($savedSearchArray, $selectedSearch));
        
        return $sugarSmarty->fetch('modules/SavedSearch/SavedSearchSelects.tpl');
    }
	
    function returnSavedSearch($id, $searchFormTab = 'advanced_search', $showDiv='no') {
        global $db, $current_user, $currentModule;
        $this->retrieveSavedSearch($id);
        
        $header = 'Location: index.php?action=index&module=';
        
        $saved_search_name = '';
        $header .= $this->contents['search_module'];
        if(empty($_SESSION['LastSavedView'])) $_SESSION['LastSavedView'] = array();
        $_SESSION['LastSavedView'][$this->contents['search_module']] = $id;
        $saved_search_id = $id;
        $saved_search_name = $this->name;
        $search_form_tab = $this->contents['searchFormTab'];
        $query = $this->contents['query'];
        $orderBy = empty($this->contents['orderBy'])? 'name' : $this->contents['orderBy'];
        //Reduce the params to avoid the problems caused by URL max length in IE.
        header($header . '&saved_search_select=' . $saved_search_id . '&saved_search_select_name=' . $saved_search_name . '&orderBy=' . $orderBy . '&sortOrder=' . $this->contents['sortOrder'] . '&query=' . $query . '&searchFormTab='. $search_form_tab .'&showSSDIV=' . $showDiv);
}
	
    function returnSavedSearchContents($id) {
		global $db, $current_user, $currentModule;
		$query = 'SELECT id, name, contents, search_module FROM saved_search 
				  WHERE 
				  	id = \'' . $id . '\'';
	    $result = $db->query($query, true, "Error filling in saved search list: ");
	    
	    $header = 'Location: index.php?action=index&module=';
	    $contents = '';
	    $saved_search_name = '';
	    while ($row = $db->fetchByAssoc($result, -1, false)) {
	        $header .= $row['search_module'];
            if(empty($_SESSION['LastSavedView'])) $_SESSION['LastSavedView'] = array();
            $_SESSION['LastSavedView'][$row['search_module']] = $row['id'];
	        $contents = unserialize(base64_decode($row['contents']));
	        $saved_search_id = $row['id'];
            $saved_search_name = $row['name'];
	    }
	    
	    return $contents;
	}	
	
	function handleDelete($id) {
		$this->mark_deleted($id);
		header("Location: index.php?action=index&module={$_REQUEST['search_module']}&advanced={$_REQUEST['advanced']}&query=true&clear_query=true");
	}
    
	function handleSave($prefix, $redirect = true, $useRequired = false, $id = null) { 
		require_once('include/SugarLogger/LoggerManager.php');

		global $current_user;
		$focus = new SavedSearch();
		if($id) $focus->retrieve($id);
        
		if($useRequired && !checkRequired($prefix, array_keys($focus->required_fields))) {
			return null;
		}
		
		$ignored_inputs = array('PHPSESSID', 'module', 'action', 'saved_search_name', 'saved_search_select', 'advanced', 'Calls_divs', 'ACLRoles_divs'); 

        $contents = $_REQUEST;
		if($id == null) $focus->name = $contents['saved_search_name'];
		$focus->search_module = $contents['search_module'];
		  
		foreach($contents as $input => $value) {
			if(in_array($input, $ignored_inputs)) unset($contents[$input]);
		}
		$contents['advanced'] = true;
        
		$focus->contents = base64_encode(serialize($contents));

		$focus->assigned_user_id = $current_user->id;
		$focus->new_schema = true;
		
		$saved_search_id = $focus->save();
		
		$GLOBALS['log']->debug("Saved record with id of " . $focus->id);	
		$orderBy = empty($contents['orderBy'])? 'name' : $contents['orderBy'];
        $search_query = "&orderBy=" . $orderBy . "&sortOrder=".$contents['sortOrder'] . "&query=" . $_REQUEST['query'] . "&searchFormTab=" . $_REQUEST['searchFormTab'].'&showSSDIV=' . $contents['showSSDIV'];
        
        $this->handleRedirect($focus->search_module, $search_query, $saved_search_id, 'true');
    }
	
	function handleRedirect($return_module, $search_query, $saved_search_id, $advanced = 'false') {
        $_SESSION['LastSavedView'][$return_module] = $saved_search_id;
        $return_action = 'index';
        //Reduce the params to avoid the problems caused by URL max length in IE ( the reduced params can be get from saved search according to saved_search_id).
        header("Location: index.php?action=$return_action&module=$return_module&saved_search_select={$saved_search_id}{$search_query}&advanced={$advanced}");
        die();
	}
	
	function fill_in_additional_list_fields() {
		global $app_list_strings;
		// Fill in the assigned_user_name
		$this->search_module = $app_list_strings['moduleList'][$this->contents['search_module']];
		$this->assigned_user_name = get_assigned_user_name($this->assigned_user_id);
	



	}

    
    function retrieveSavedSearch($id) {
        parent::retrieve($id);
        $this->contents = unserialize(base64_decode($this->contents));
    }
    
    function populateRequest(){
        foreach($this->contents as $key=>$val){
            // todo wp: remove this
            if($key != 'advanced' && $key != 'module' && !strpos($key, '_ORDER_BY') && $key != 'lvso') { // cn: bug 6546 storequery stomps correct value for 'module' in Activities
                $_REQUEST[$key] = $val;	
                $_GET[$key] = $val;	
            }
        }
    }
}

?>
