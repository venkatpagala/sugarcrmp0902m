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

require_once('XTemplate/xtpl.php');

require_once('modules/EmailTemplates/EmailTemplate.php');
require_once('modules/EmailTemplates/Forms.php');
require_once('modules/Notes/Note.php');
require_once('include/upload_file.php');
require_once('include/DetailView/DetailView.php');


global $app_strings;
global $mod_strings;

$focus = new EmailTemplate();

$detailView = new DetailView();
$offset=0;
if(isset($_REQUEST['offset']) or isset($_REQUEST['record'])) {
	$result = $detailView->processSugarBean("EMAIL_TEMPLATE", $focus, $offset);
	if($result == null) {
	    sugar_die($app_strings['ERROR_NO_RECORD']);
	}
	$focus=$result;
} else {
	header("Location: index.php?module=Accounts&action=index");
}
if(isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true') {
	$focus->id = "";
}

//needed when creating a new note with default values passed in
if(isset($_REQUEST['contact_name']) && is_null($focus->contact_name)) {
	$focus->contact_name = $_REQUEST['contact_name'];
}
if(isset($_REQUEST['contact_id']) && is_null($focus->contact_id)) {
	$focus->contact_id = $_REQUEST['contact_id'];
}
if(isset($_REQUEST['opportunity_name']) && is_null($focus->parent_name)) {
	$focus->parent_name = $_REQUEST['opportunity_name'];
}
if(isset($_REQUEST['opportunity_id']) && is_null($focus->parent_id)) {
	$focus->parent_id = $_REQUEST['opportunity_id'];
}
if(isset($_REQUEST['account_name']) && is_null($focus->parent_name)) {
	$focus->parent_name = $_REQUEST['account_name'];
}
if(isset($_REQUEST['account_id']) && is_null($focus->parent_id)) {
	$focus->parent_id = $_REQUEST['account_id'];
}

echo "\n<p>\n";
echo get_module_title($mod_strings['LBL_MODULE_NAME'], $mod_strings['LBL_MODULE_NAME'].": ".$focus->name, true);
echo "\n</p>\n";
global $theme;
$theme_path="themes/".$theme."/";
$image_path=$theme_path."images/";


$GLOBALS['log']->info("EmailTemplate detail view");

$xtpl=new XTemplate ('modules/EmailTemplates/DetailView.html');
$xtpl->assign("MOD", $mod_strings);
$xtpl->assign("APP", $app_strings);

if(isset($_REQUEST['return_module'])) $xtpl->assign("RETURN_MODULE", $_REQUEST['return_module']);
if(isset($_REQUEST['return_action'])) $xtpl->assign("RETURN_ACTION", $_REQUEST['return_action']);
if(isset($_REQUEST['return_id'])) $xtpl->assign("RETURN_ID", $_REQUEST['return_id']);
$xtpl->assign("THEME", $theme);
$xtpl->assign("GRIDLINE", $gridline);
$xtpl->assign("IMAGE_PATH", $image_path);$xtpl->assign("PRINT_URL", "index.php?".$GLOBALS['request_string']);
$xtpl->assign("ID", $focus->id);
$xtpl->assign("CREATED_BY", $focus->created_by_name);
$xtpl->assign("MODIFIED_BY", $focus->modified_by_name);
//if text only is set to true, then make sure input is checked and value set to 1
if(isset($focus->text_only) && $focus->text_only){
    $xtpl->assign("TEXT_ONLY_CHECKED","CHECKED");
}
$xtpl->assign("NAME", $focus->name);
$xtpl->assign("DESCRIPTION", $focus->description);
$xtpl->assign("SUBJECT", $focus->subject);
$xtpl->assign("BODY", $focus->body);
$xtpl->assign("BODY_HTML", from_html($focus->body_html));
$xtpl->assign("DATE_MODIFIED", $focus->date_modified);
$xtpl->assign("DATE_ENTERED", $focus->date_entered);



if(!empty($focus->body)) {
	$xtpl->assign('ALT_CHECKED', 'CHECKED');
} 
else 
	$xtpl->assign('ALT_CHECKED', '');
if( $focus->published == 'on')
{
$xtpl->assign("PUBLISHED","CHECKED");
}


///////////////////////////////////////////////////////////////////////////////
////	NOTES (attachements, etc.)
///////////////////////////////////////////////////////////////////////////////
$note = new Note();
$where = "notes.parent_id='{$focus->id}'";
$notes_list = $note->get_full_list("notes.name", $where,true);

if(! isset($notes_list)) {
	$notes_list = array();
}

$attachments = '';
for($i=0; $i<count($notes_list); $i++) {
	$the_note = $notes_list[$i];
	//$attachments .= "<a href=\"".UploadFile::get_url($the_note->filename,$the_note->id)."\" target=\"_blank\">". $the_note->filename ."</a><br>";
	$attachments .= "<a href=\"index.php?entryPoint=download&id=".$the_note->id."&type=Notes\">".$the_note->name.$the_note->description."</a><br />";
}

$xtpl->assign("ATTACHMENTS", $attachments);


global $current_user;
if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])) {

	$xtpl->assign("ADMIN_EDIT","<a href='index.php?action=index&module=DynamicLayout&from_action=".$_REQUEST['action'] ."&from_module=".$_REQUEST['module'] ."&record=".$_REQUEST['record']. "'>".get_image($image_path."EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>");
}

$xtpl->assign("DESCRIPTION", $focus->description);

$detailView->processListNavigation($xtpl, "EMAIL_TEMPLATE", $offset);
// adding custom fields:
require_once('modules/DynamicFields/templates/Files/DetailView.php');


$xtpl->parse("main");

$xtpl->out("main");

?>
