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

///////////////////////////////////////////////////////////////////////////////
////	CANCEL HANDLING
if(!isset($_REQUEST['record']) || empty($_REQUEST['record'])) {
	header("Location: index.php?module=Emails&action=index");
}
////	CANCEL HANDLING
///////////////////////////////////////////////////////////////////////////////


require_once('XTemplate/xtpl.php');

require_once('modules/Emails/Email.php');
require_once('modules/Emails/Forms.php');
require_once('modules/Notes/Note.php');
require_once('include/DetailView/DetailView.php');
global $theme;
global $app_strings;
$theme_path="themes/".$theme."/";
$image_path=$theme_path."images/";


// SETTING DEFAULTS
$focus		= new Email();
$detailView	= new DetailView();
$offset		= 0;
$email_type	= 'archived';

///////////////////////////////////////////////////////////////////////////////
////	TO HANDLE 'NEXT FREE'
if(!empty($_REQUEST['next_free']) && $_REQUEST['next_free'] == true) {
	$_REQUEST['record'] = $focus->getNextFree();
}
////	END 'NEXT FREE'
///////////////////////////////////////////////////////////////////////////////

if (isset($_REQUEST['offset']) or isset($_REQUEST['record'])) {
	$result = $detailView->processSugarBean("EMAIL", $focus, $offset);
	if($result == null) {
	    sugar_die($app_strings['ERROR_NO_RECORD']);
	}
	$focus=$result;
} else {
	header("Location: index.php?module=Emails&action=index");
	die();
}

/* if the Email status is draft, say as a saved draft to a Lead/Case/etc.,
 * don't show detail view. go directly to EditView */
if($focus->status == 'draft') {
	//header('Location: index.php?module=Emails&action=EditView&record='.$_REQUEST['record']);
	//die();
}


//needed when creating a new email with default values passed in
if (isset($_REQUEST['contact_name']) && is_null($focus->contact_name)) {
	$focus->contact_name = $_REQUEST['contact_name'];
}
if (isset($_REQUEST['contact_id']) && is_null($focus->contact_id)) {
	$focus->contact_id = $_REQUEST['contact_id'];
}
if (isset($_REQUEST['opportunity_name']) && is_null($focus->parent_name)) {
	$focus->parent_name = $_REQUEST['opportunity_name'];
}
if (isset($_REQUEST['opportunity_id']) && is_null($focus->parent_id)) {
	$focus->parent_id = $_REQUEST['opportunity_id'];
}
if (isset($_REQUEST['account_name']) && is_null($focus->parent_name)) {
	$focus->parent_name = $_REQUEST['account_name'];
}
if (isset($_REQUEST['account_id']) && is_null($focus->parent_id)) {
	$focus->parent_id = $_REQUEST['account_id'];
}

// un/READ flags
if (!empty($focus->status)) {
	// "Read" flag for InboundEmail
	if($focus->status == 'unread') {
		// creating a new instance here to avoid data corruption below
		$e = new Email();
		$e->retrieve($focus->id);
		$e->status = 'read';
		$e->save();
		$email_type = $e->status;
	} else {
		$email_type = $focus->status;
	}

} elseif (!empty($_REQUEST['type'])) {
	$email_type = $_REQUEST['type'];
}

///////////////////////////////////////////////////////////////////////////////
////	OUTPUT
///////////////////////////////////////////////////////////////////////////////
echo "\n<p>\n";
$GLOBALS['log']->info("Email detail view");
if ($email_type == 'archived') {
	echo get_module_title('Emails', $mod_strings['LBL_ARCHIVED_EMAIL'].": ".$focus->name, true);
	$xtpl=new XTemplate ('modules/Emails/DetailView.html');
} else {
	$xtpl=new XTemplate ('modules/Emails/DetailViewSent.html');
	if($focus->type == 'out') {
		echo get_module_title('Emails', $mod_strings['LBL_SENT_MODULE_NAME'].": ".$focus->name, true);
		//$xtpl->assign('DISABLE_REPLY_BUTTON', 'NONE');
	} elseif ($focus->type == 'draft') {
		$xtpl->assign('DISABLE_FORWARD_BUTTON', 'NONE');
		echo get_module_title('Emails', $mod_strings['LBL_LIST_FORM_DRAFTS_TITLE'].": ".$focus->name, true);
	} elseif($focus->type == 'inbound') {
		echo get_module_title('Emails', $mod_strings['LBL_INBOUND_TITLE'].": ".$focus->name, true);
	}
}
echo "\n</p>\n";



///////////////////////////////////////////////////////////////////////////////
////	RETURN NAVIGATION
$uri = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
$start = $focus->getStartPage($uri);
if (isset($_REQUEST['return_id'])) { // coming from a subpanel, return_module|action is not set
	$xtpl->assign('RETURN_ID', $_REQUEST['return_id']);
	if (isset($_REQUEST['return_module']))	$xtpl->assign('RETURN_MODULE', $_REQUEST['return_module']);
	else $xtpl->assign('RETURN_MODULE', 'Emails');
	if (isset($_REQUEST['return_action']))	$xtpl->assign('RETURN_ACTION', $_REQUEST['return_action']);
	else $xtpl->assign('RETURN_ACTION', 'DetailView');
}

if(isset($start['action']) && !empty($start['action'])) {
	$xtpl->assign('DELETE_RETURN_ACTION', $start['action']);
}
if(isset($start['module']) && !empty($start['module'])) {
	$xtpl->assign('DELETE_RETURN_MODULE', $start['module']);
}
if(isset($start['record']) && !empty($start['record'])) {
	$xtpl->assign('DELETE_RETURN_ID', $start['record']);
}
// this is to support returning to My Inbox
if(isset($start['type']) && !empty($start['type'])) {
	$xtpl->assign('DELETE_RETURN_TYPE', $start['type']);
}
if(isset($start['assigned_user_id']) && !empty($start['assigned_user_id'])) {
	$xtpl->assign('DELETE_RETURN_ASSIGNED_USER_ID', $start['assigned_user_id']);
}



////	END RETURN NAVIGATION
///////////////////////////////////////////////////////////////////////////////


// DEFAULT TO TEXT IF NO HTML CONTENT:
$html = trim(from_html($focus->description_html));
if(empty($html)) {
	$xtpl->assign('SHOW_PLAINTEXT', 'true');
	$description = nl2br($focus->description);
} else {
	$xtpl->assign('SHOW_PLAINTEXT', 'false');
	$description = from_html($focus->description_html);
}

//if the email is of type campaign, process the macros...using the values stored in the relationship table.
//this is is part of the feature that adds support for one email per campaign.
$show_subpanels=true;
if ($focus->type=='campaign' and !empty($_REQUEST['parent_id']) and !empty($_REQUEST['parent_module'])) {
    $show_subpanels=false;
    $parent_id=$_REQUEST['parent_id'];

	// cn: bug 14300 - emails_beans schema refactor - fixing query
	$query="SELECT * FROM emails_beans WHERE email_id='{$focus->id}' AND bean_id='{$parent_id}' AND bean_module = '{$_REQUEST['parent_module']}' " ;

    $res=$focus->db->query($query);
    $row=$focus->db->fetchByAssoc($res);
    if (!empty($row)) {
        $campaign_data=$row['campaign_data'];
        $macro_values=array();
        if (!empty($campaign_data)) {
            $macro_values=unserialize(from_html($campaign_data));
        }

        if (count($macro_values) > 0) {
            $m_keys=array_keys($macro_values);
            $m_values=array_values($macro_values);

            $focus->name = str_replace($m_keys,$m_values,$focus->name);
            $focus->description = str_replace($m_keys,$m_values,$focus->description);
            $focus->description_html = str_replace($m_keys,$m_values,$focus->description_html);
            if (!empty($macro_values['sugar_to_email_address'])) {
                $focus->to_addrs=$macro_values['sugar_to_email_address'];
            }
        }
    }
}

//if not empty or set to test (from test campaigns)
if (!empty($focus->parent_type) && $focus->parent_type !='test') {
	$xtpl->assign('PARENT_MODULE', $focus->parent_type);
	$xtpl->assign('PARENT_TYPE_UNTRANSLATE', $focus->parent_type);
    $xtpl->assign('PARENT_TYPE', $app_list_strings['record_type_display'][$focus->parent_type]);
}
//#21650 jchi@07/18/2008
global $current_user;
if ($current_user->getPreference('gridline') == 'on'){
	$gridline = 1;
} else {
	$gridline = 0;
}

$xtpl->assign('MOD', $mod_strings);
$xtpl->assign('APP', $app_strings);
$xtpl->assign('THEME', $theme);
$xtpl->assign('GRIDLINE', $gridline);
$xtpl->assign('IMAGE_PATH', $image_path);
$xtpl->assign('PRINT_URL', 'index.php?'.$GLOBALS['request_string']);
$xtpl->assign('ID', $focus->id);
$xtpl->assign('TYPE', $email_type);
$xtpl->assign('PARENT_NAME', $focus->parent_name);
$xtpl->assign('PARENT_ID', $focus->parent_id);
$xtpl->assign('NAME', $focus->name);
$xtpl->assign('ASSIGNED_TO', $focus->assigned_user_name);
$xtpl->assign('DATE_MODIFIED', $focus->date_modified);
$xtpl->assign('DATE_ENTERED', $focus->date_entered);
$xtpl->assign('DATE_START', $focus->date_start);
$xtpl->assign('TIME_START', $focus->time_start);
$xtpl->assign('FROM', $focus->from_addr);
$xtpl->assign('TO', nl2br($focus->to_addrs));
$xtpl->assign('CC', nl2br($focus->cc_addrs));
$xtpl->assign('BCC', nl2br($focus->bcc_addrs));
$xtpl->assign('CREATED_BY', $focus->created_by_name);
$xtpl->assign('MODIFIED_BY', $focus->modified_by_name);
$xtpl->assign('DESCRIPTION', nl2br($focus->description));
$xtpl->assign('DESCRIPTION_HTML', from_html($focus->description_html));
$xtpl->assign('DATE_SENT', $focus->date_entered);
$xtpl->assign('EMAIL_NAME', 'RE: '.$focus->name);
$xtpl->assign("TAG", $focus->listviewACLHelper());
if(!empty($focus->raw_source)) {
	$xtpl->assign("RAW_METADATA", $focus->id);
} else {
	$xtpl->assign("DISABLE_RAW_BUTTON", 'none');
}

if(!empty($focus->reply_to_email)) {
	$replyTo = "
		<tr>
        <td class=\"tabDetailViewDL\"><slot>".$mod_strings['LBL_REPLY_TO_NAME']."</slot></td>
        <td colspan=3 class=\"tabDetailViewDF\"><slot>".$focus->reply_to_email."</slot></td>
        </tr>";
 	$xtpl->assign("REPLY_TO", $replyTo);
}

///////////////////////////////////////////////////////////////////////////////
////	JAVASCRIPT VARS
$jsVars  = '';
$jsVars .= "var showRaw = '{$mod_strings['LBL_BUTTON_RAW_LABEL']}';";
$jsVars .= "var hideRaw = '{$mod_strings['LBL_BUTTON_RAW_LABEL_HIDE']}';";
$xtpl->assign("JS_VARS", $jsVars);


// ADMIN EDIT
global $current_user;
if(is_admin($current_user) && $_REQUEST['module'] != 'DynamicLayout' && !empty($_SESSION['editinplace'])){
	$xtpl->assign("ADMIN_EDIT","<a href='index.php?action=index&module=DynamicLayout&from_action=".$_REQUEST['action'] ."&from_module=".$_REQUEST['module'] ."&record=".$_REQUEST['record']. "'>".get_image($image_path."EditLayout","border='0' alt='Edit Layout' align='bottom'")."</a>");
}

if(isset($_REQUEST['offset']) && !empty($_REQUEST['offset'])) { $offset = $_REQUEST['offset']; }
else $offset = 1;
$detailView->processListNavigation($xtpl, "EMAIL", $offset, false);



// adding custom fields:
require_once('modules/DynamicFields/templates/Files/DetailView.php');
$do_open = true;





if ($do_open) {
	$xtpl->parse("main.open_source");
}

///////////////////////////////////////////////////////////////////////////////
////	NOTES (attachements, etc.)
///////////////////////////////////////////////////////////////////////////////

$note = new Note();
$where = "notes.parent_id='{$focus->id}'";
//take in account if this is from campaign and the template id is stored in the macros.

if(isset($macro_values) && isset($macro_values['email_template_id'])){
    $where = "notes.parent_id='{$macro_values['email_template_id']}'";
}
$notes_list = $note->get_full_list("notes.name", $where, true);

if(! isset($notes_list)) {
	$notes_list = array();
}

$attachments = '';
for($i=0; $i<count($notes_list); $i++) {
	$the_note = $notes_list[$i];
	//$attachments .= "<a href=\"".UploadFile::get_url($the_note->filename,$the_note->id)."\" target=\"_blank\">".$the_note->name.$the_note->description ."</a><br>";
	$attachments .= "<a href=\"index.php?entryPoint=download&id=".$the_note->id."&type=Notes\">".$the_note->name."</a><br />";
}

$xtpl->assign("ATTACHMENTS", $attachments);
$xtpl->parse("main");
$xtpl->out("main");

$sub_xtpl = $xtpl;
$old_contents = ob_get_contents();
ob_end_clean();
ob_start();
echo $old_contents;

///////////////////////////////////////////////////////////////////////////////
////    SUBPANELS
///////////////////////////////////////////////////////////////////////////////
if ($show_subpanels) {
    require_once('include/SubPanel/SubPanelTiles.php');
    $subpanel = new SubPanelTiles($focus, 'Emails');
    echo $subpanel->display();
}
?>
