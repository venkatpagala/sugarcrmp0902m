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

 * Description: TODO:  To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
require_once('XTemplate/xtpl.php');

require_once('modules/EmailTemplates/EmailTemplate.php');
require_once('modules/EmailTemplates/Forms.php');
require_once('modules/Campaigns/utils.php');

//if campaign_id is passed then we assume this is being invoked from the campaign module and in a popup.
$has_campaign=true;
$inboundEmail=true;  
if (!isset($_REQUEST['campaign_id']) || empty($_REQUEST['campaign_id'])) {
	$has_campaign=false;
}
if (!isset($_REQUEST['inboundEmail']) || empty($_REQUEST['inboundEmail'])) {
    $inboundEmail=false;
}
$focus = new EmailTemplate();

if(isset($_REQUEST['record'])) {
    $focus->retrieve($_REQUEST['record']);
}

$old_id = '';
if(isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true') {
    $old_id = $focus->id; // for attachments down below
    $focus->id = "";
}



//setting default flag value so due date and time not required
if(!isset($focus->id)) $focus->date_due_flag = 1;

//needed when creating a new case with default values passed in
if(isset($_REQUEST['contact_name']) && is_null($focus->contact_name)) {
    $focus->contact_name = $_REQUEST['contact_name'];
}
if(isset($_REQUEST['contact_id']) && is_null($focus->contact_id)) {
    $focus->contact_id = $_REQUEST['contact_id'];
}
if(isset($_REQUEST['parent_name']) && is_null($focus->parent_name)) {
    $focus->parent_name = $_REQUEST['parent_name'];
}
if(isset($_REQUEST['parent_id']) && is_null($focus->parent_id)) {
    $focus->parent_id = $_REQUEST['parent_id'];
}
if(isset($_REQUEST['parent_type'])) {
    $focus->parent_type = $_REQUEST['parent_type'];
}
elseif(!isset($focus->parent_type)) {
    $focus->parent_type = $app_list_strings['record_type_default_key'];
}
if(isset($_REQUEST['filename']) && $_REQUEST['isDuplicate'] != 'true') {
        $focus->filename = $_REQUEST['filename'];
}

$theme_path="themes/".$theme."/";
$image_path=$theme_path."images/";
//

if($has_campaign || $inboundEmail) {
    insert_popup_header($theme);
}

echo "\n<p>\n";
echo get_module_title($mod_strings['LBL_MODULE_NAME'], $mod_strings['LBL_MODULE_NAME'].": ".$focus->name, true); 
echo "\n</p>\n";

$GLOBALS['log']->info("EmailTemplate detail view");

if($has_campaign || $inboundEmail) {
	$xtpl=new XTemplate ('modules/EmailTemplates/EditView.html');
} else {
	$xtpl=new XTemplate ('modules/EmailTemplates/EditViewMain.html');
} // else
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);

$xtpl->assign("LBL_ACCOUNT",$app_list_strings['moduleList']['Accounts']);
$xtpl->parse("main.variable_option");

if(isset($_REQUEST['return_module'])) $xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
if(isset($_REQUEST['return_action'])) $xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
if(isset($_REQUEST['return_id'])) $xtpl->assign("RETURN_ID", $_REQUEST['return_id']);
// handle Create $module then Cancel
if(empty($_REQUEST['return_id'])) {
    $xtpl->assign("RETURN_ACTION", 'index');
}

if ($has_campaign || $inboundEmail ) {
    $cancel_script="window.close();";
}else {
    $cancel_script="this.form.action.value='{$_REQUEST['return_action']}'; this.form.module.value='{$_REQUEST['return_module']}';
    this.form.record.value=";
    if(empty($_REQUEST['return_id'])) {
        $cancel_script="this.form.action.value='index'; this.form.module.value='{$_REQUEST['return_module']}';this.form.name.value='';this.form.description.value=''"; 
    } else {
        $cancel_script.="'{$_REQUEST['return_id']}'";
    }
}

$xtpl->assign("CANCEL_SCRIPT", $cancel_script);
$xtpl->assign("THEME", $theme);
$xtpl->assign("IMAGE_PATH", $image_path);$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
$xtpl->assign("JAVASCRIPT", get_set_focus_js().get_validate_record_js());

if(!is_file($GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $GLOBALS['current_language'] . '.js')) {
    require_once('include/language/jsLanguage.php');
    jsLanguage::createAppStringsCache($GLOBALS['current_language']);
}
$jsLang = '<script type="text/javascript" src="' . $GLOBALS['sugar_config']['cache_dir'] . 'jsLanguage/' . $GLOBALS['current_language'] . '.js?s=' . $GLOBALS['sugar_version'] . '&c=' . $GLOBALS['sugar_config']['js_custom_version'] . '&j=' . $GLOBALS['sugar_config']['js_lang_version'] . '"></script>';
$xtpl->assign("JSLANG", $jsLang);

$xtpl->assign("ID", $focus->id);
if(isset($focus->name)) $xtpl->assign("NAME", $focus->name); else $xtpl->assign("NAME", "");
if(isset($focus->description)) $xtpl->assign("DESCRIPTION", $focus->description); else $xtpl->assign("DESCRIPTION", "");
if(isset($focus->subject)) $xtpl->assign("SUBJECT", $focus->subject); else $xtpl->assign("SUBJECT", "");
if( $focus->published == 'on')
{
$xtpl->assign("PUBLISHED","CHECKED");
}
//if text only is set to true, then make sure input is checked and value set to 1
if(isset($focus->text_only) && $focus->text_only){
    $xtpl->assign("TEXTONLY_CHECKED","CHECKED");
    $xtpl->assign("TEXTONLY_VALUE","1");
}else{//set value to 0
    $xtpl->assign("TEXTONLY_VALUE","0");
}







$xtpl->assign("FIELD_DEFS_JS", $focus->generateFieldDefsJS());
$xtpl->assign("LBL_CONTACT",$app_list_strings['moduleList']['Contacts']);

global $current_user;
if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])) { 
    $record = '';
    if(!empty($_REQUEST['record'])) {
        $record =   $_REQUEST['record'];
    }
    $xtpl->assign("ADMIN_EDIT","<a href='index.php?action=index&module=DynamicLayout&from_action=" . $_REQUEST['action']
	."&from_module=".$_REQUEST['module'] ."&record=".$record. "'>".get_image($image_path."EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>");    
}
if(isset($focus->parent_type) && $focus->parent_type != "") {
    $change_parent_button = "<input title='".$app_strings['LBL_SELECT_BUTTON_TITLE']."' accessKey='".$app_strings['LBL_SELECT_BUTTON_KEY']."'
tabindex='3' type='button' class='button' value='".$app_strings['LBL_SELECT_BUTTON_LABEL']."' name='button' LANGUAGE=javascript onclick='return
window.open(\"index.php?module=\"+ document.EditView.parent_type.value +
\"&action=Popup&html=Popup_picker&form=TasksEditView\",\"test\",\"width=600,height=400,resizable=1,scrollbars=1\");'>";
    $xtpl->assign("CHANGE_PARENT_BUTTON", $change_parent_button);
}
if($focus->parent_type == "Account") {
	$xtpl->assign("DEFAULT_SEARCH","&query=true&account_id=$focus->parent_id&account_name=".urlencode($focus->parent_name));
}

$xtpl->assign("DESCRIPTION", $focus->description);
$xtpl->assign("TYPE_OPTIONS", get_select_options_with_id($app_list_strings['record_type_display'], $focus->parent_type));
//$xtpl->assign("DEFAULT_MODULE","Accounts");

if(isset($focus->body)) $xtpl->assign("BODY", $focus->body); else $xtpl->assign("BODY", "");
if(isset($focus->body_html)) $xtpl->assign("BODY_HTML", $focus->body_html); else $xtpl->assign("BODY_HTML", "");


if(true) {
	require_once("include/SugarTinyMCE.php");
	$tiny = new SugarTinyMCE();
    $tiny->defaultConfig['cleanup_on_startup']=true;
	$tinyHtml = $tiny->getInstance();
	$xtpl->assign("tiny", $tinyHtml);
	
	///////////////////////////////////////
	////	MACRO VARS
	$xtpl->assign("INSERT_VARIABLE_ONCLICK", "insert_variable(document.EditView.variable_text.value)");
	if(!$inboundEmail){
		$xtpl->parse("main.NoInbound.variable_button");
	}
	///////////////////////////////////////
	////	CAMPAIGNS
	if($has_campaign || $inboundEmail) {
		$xtpl->assign("INPOPUPWINDOW",'true');	
		$xtpl->assign("INSERT_URL_ONCLICK", "insert_variable_html_link(document.EditView.tracker_url.value)");
		if($has_campaign){
		  $campaign_urls=get_campaign_urls($_REQUEST['campaign_id']);
		}
		if(!empty($campaign_urls)) {
			$xtpl->assign("DEFAULT_URL_TEXT",key($campaign_urls)); 
	  	}
	    if($has_campaign){
		  $xtpl->assign("TRACKER_KEY_OPTIONS", get_select_options_with_id($campaign_urls, null));
		  $xtpl->parse("main.NoInbound.tracker_url");
	    }
	}
	
	// The insert variable drodown should be conditionally displayed.
	// If it's campaign then hide the Account. 
	if($has_campaign) {
	    $dropdown="<option value='Contacts'>
						".$mod_strings['LBL_CONTACT_AND_OTHERS']."
			       </option>";
	     $xtpl->assign("DROPDOWN",$dropdown);
	     $xtpl->assign("DEFAULT_MODULE",'Contacts');
         //$xtpl->assign("CAMPAIGN_POPUP_JS", '<script type="text/javascript" src="include/javascript/sugar_3.js"></script>');                  	 
	} else {
	     $dropdown="<option value='Accounts'>
						".$mod_strings['LBL_ACCOUNT']."
		  	       </option>
			       <option value='Contacts'>
						".$mod_strings['LBL_CONTACT_AND_OTHERS']."
			       </option>
			       <option value='Users'>
						".$mod_strings['LBL_USERS']."
			       </option>";
		$xtpl->assign("DROPDOWN",$dropdown);      
		$xtpl->assign("DEFAULT_MODULE",'Accounts');   
	}
	////	END CAMPAIGNS
	///////////////////////////////////////

	///////////////////////////////////////
	////    ATTACHMENTS
	$attachments = '';
	if(!empty($focus->id)) {
	    $etid = $focus->id;
	} elseif(!empty($old_id)) {
	    $xtpl->assign('OLD_ID', $old_id);
	    $etid = $old_id;
	}
	if(!empty($etid)) {
	    $note = new Note();
	    $where = "notes.parent_id='{$etid}' AND notes.filename IS NOT NULL";
	    $notes_list = $note->get_full_list("", $where,true);
	
	    if(!isset($notes_list)) {
	        $notes_list = array();
	    }
	    for($i = 0;$i < count($notes_list);$i++) {
	        $the_note = $notes_list[$i];
	        if( empty($the_note->filename)) {
	            continue;
	        }
	        $attachments .= '<input type="checkbox" name="remove_attachment[]" value="'.$the_note->id.'"> '.$app_strings['LNK_REMOVE'].'&nbsp;&nbsp;';
	        $attachments .= '<a href="'.UploadFile::get_url($the_note->filename,$the_note->id).'" target="_blank">'. $the_note->filename .'</a><br>';
	    }
	}
	$attJs  = '<script type="text/javascript">';
	$attJs .= 'var file_path = "'.$sugar_config['site_url'].'/'.$sugar_config['upload_dir'].'";';
	$attJs .= 'var lnk_remove = "'.$app_strings['LNK_REMOVE'].'";';
	$attJs .= '</script>';
	$xtpl->assign('ATTACHMENTS', $attachments);
	$xtpl->assign('ATTACHMENTS_JAVASCRIPT', $attJs);

	////    END ATTACHMENTS
	///////////////////////////////////////
	
	// done and parse
	$xtpl->parse("main.textarea");
}

//Add Custom Fields
require_once('modules/DynamicFields/templates/Files/EditView.php');
if(!$inboundEmail){
    $xtpl->parse("main.NoInbound");
    $xtpl->parse("main.NoInbound1");
    $xtpl->parse("main.NoInbound2");
    $xtpl->parse("main.NoInbound3");
    $xtpl->parse("main.NoInbound4");
    $xtpl->parse("main.NoInbound5");
}
$xtpl->parse("main");

$xtpl->out("main");
require_once('include/javascript/javascript.php');
$javascript = new javascript();
$javascript->setFormName('EditView');
$javascript->setSugarBean($focus);
$javascript->addAllFields('');
echo $javascript->getScript();
?>
