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

require_once('modules/Users/User.php');
require_once('modules/MySettings/TabController.php');

$display_tabs_def = urldecode($_REQUEST['display_tabs_def']);
$hide_tabs_def = urldecode($_REQUEST['hide_tabs_def']);
$remove_tabs_def = urldecode($_REQUEST['remove_tabs_def']);

$DISPLAY_ARR = array();
$HIDE_ARR = array();
$REMOVE_ARR = array();

parse_str($display_tabs_def,$DISPLAY_ARR);
parse_str($hide_tabs_def,$HIDE_ARR);
parse_str($remove_tabs_def,$REMOVE_ARR);

if (isset($_POST['record']) && !is_admin($current_user) && $_POST['record'] != $current_user->id) sugar_die("Unauthorized access to administration.");
elseif (!isset($_POST['record']) && !is_admin($current_user)) echo ("Unauthorized access to user administration.");

$focus = new User();
$focus->retrieve($_POST['record']);

// Flag to determine whether to save a new password or not.
if(empty($focus->id)) $newUser = true;
else $newUser = false;
	

if(!$current_user->is_admin && $current_user->id != $focus->id) {
	$GLOBALS['log']->fatal("SECURITY:Non-Admin ". $current_user->id . " attempted to change settings for user:". $focus->id);
	header("Location: index.php?module=Users&action=Logout");
	exit;
}
if(!$current_user->is_admin  && !empty($_POST['is_admin'])) {
	$GLOBALS['log']->fatal("SECURITY:Non-Admin ". $current_user->id . " attempted to change is_admin settings for user:". $focus->id);
	header("Location: index.php?module=Users&action=Logout");
	exit;
}


if(	(isset($_POST['user_name']) && !empty($_POST['user_name'])) && 
	isset($_POST['old_password']) && 
	(isset($_POST['new_password']) && !empty($_POST['new_password'])) && 
	(isset($_POST['password_change']) && $_POST['password_change'] == 'true') ) {
	if (!$focus->change_password($_POST['old_password'], $_POST['new_password'])) {
		header("Location: index.php?action=Error&module=Users&error_string=".urlencode($focus->error_string));
		exit;
	}
} else {
	// New user




	
	foreach($focus->column_fields as $field)
	{
		if(isset($_POST[$field]))
		{
			$value = $_POST[$field];
			$focus->$field = $value;
		}
	}

	foreach($focus->additional_column_fields as $field)
	{
		if(isset($_POST[$field]))
		{
			$value = $_POST[$field];
			$focus->$field = $value;

		}
	}

	// copy the user name over.  We renamed the field in order to ensure auto-complete would not change the value
	if(isset($_POST['sugar_user_name']))
	{
		$focus->user_name = $_POST['sugar_user_name'];
	}
	
	if(isset($_POST['is_admin']) && ($_POST['is_admin'] == 'on' || $_POST['is_admin'] == '1')) $focus->is_admin = 1;
	elseif(empty($_POST['is_admin'])) $focus->is_admin = 0;
	if(empty($_POST['portal_only']) || !empty($_POST['is_admin'])) $focus->portal_only = 0;
	if(empty($_POST['is_group'])    || !empty($_POST['is_admin'])) $focus->is_group = 0;
	if(empty($_POST['receive_notifications'])) $focus->receive_notifications = 0;
	if(isset($_POST['gridline'])) {
		$focus->setPreference('gridline','on', 0, 'global', $focus);
	} else {
		$focus->setPreference('gridline','off', 0, 'global', $focus);
	}
	
	if(isset($_POST['mailmerge_on']) && !empty($_POST['mailmerge_on'])) {
		$focus->setPreference('mailmerge_on','on', 0, 'global', $focus);
	} else {
		$focus->setPreference('mailmerge_on','off', 0, 'global', $focus);
	}

	if(isset($_POST['user_max_tabs']))
	{
		$focus->setPreference('max_tabs', $_POST['user_max_tabs'], 0, 'global', $focus);
	}
	
    if(isset($_POST['user_max_subtabs']))
    {
        $focus->setPreference('max_subtabs', $_POST['user_max_subtabs'], 0, 'global', $focus);
    }
    
    if(isset($_POST['user_swap_last_viewed']))
    {
        $focus->setPreference('swap_last_viewed', $_POST['user_swap_last_viewed'], 0, 'global', $focus);
    }
    else
    {
    	$focus->setPreference('swap_last_viewed', '', 0, 'global', $focus);
    }
    
    if(isset($_POST['user_swap_shortcuts']))
    {
        $focus->setPreference('swap_shortcuts', $_POST['user_swap_shortcuts'], 0, 'global', $focus);
    }
    else
    {
        $focus->setPreference('swap_shortcuts', '', 0, 'global', $focus);
    }
    
    if(isset($_POST['user_subpanel_tabs']))
    {
        $focus->setPreference('subpanel_tabs', $_POST['user_subpanel_tabs'], 0, 'global', $focus);
    }
    else
    {
        $focus->setPreference('subpanel_tabs', '', 0, 'global', $focus);
    }
    
    if(isset($_POST['user_subpanel_links']))
    {
        $focus->setPreference('subpanel_links', $_POST['user_subpanel_links'], 0, 'global', $focus);
    }
    else
    {
        $focus->setPreference('subpanel_links', '', 0, 'global', $focus);
    }
    
    if(isset($_POST['user_navigation_paradigm']))
    {
        $focus->setPreference('navigation_paradigm', $_POST['user_navigation_paradigm'], 0, 'global', $focus);
    }
    else
    {
        $focus->setPreference('navigation_paradigm', '', 0, 'global', $focus);
    }
    
	$tabs = new TabController();

	$tabs->set_user_tabs($DISPLAY_ARR['display_tabs'], $focus, 'display');
	if(isset($HIDE_ARR['hide_tabs'])){
		$tabs->set_user_tabs($HIDE_ARR['hide_tabs'], $focus, 'hide');
	
	}else{
		$tabs->set_user_tabs(array(), $focus, 'hide');	
	}
	if(is_admin($current_user)){
		if(isset($REMOVE_ARR['remove_tabs'])){
			$tabs->set_user_tabs($REMOVE_ARR['remove_tabs'], $focus, 'remove');
		}else{
			$tabs->set_user_tabs(array(), $focus, 'remove');		
		}
	}

    if(isset($_POST['no_opps'])) {
        $focus->setPreference('no_opps',$_POST['no_opps'], 0, 'global', $focus);
    }
    else {
        $focus->setPreference('no_opps','off', 0, 'global', $focus);
    }
    
	if(	isset($_POST['should_remind']) 
		&& $_POST['should_remind'] == '1' 
		&& isset($_POST['reminder_time'])) {
		$focus->setPreference('reminder_time', $_POST['reminder_time'], 0, 'global', $focus);
	} else {
		// cn: bug 5522, need to unset reminder time if unchecked.
		$focus->setPreference('reminder_time', -1, 0, 'global', $focus);
	}
	if(isset($_POST['timezone'])) $focus->setPreference('timezone',$_POST['timezone'], 0, 'global', $focus);
	if(isset($_POST['ut'])) $focus->setPreference('ut', '0', 0, 'global', $focus);
	else $focus->setPreference('ut', '1', 0, 'global', $focus);
	if(isset($_POST['currency'])) $focus->setPreference('currency',$_POST['currency'], 0, 'global', $focus);
	if(isset($_POST['default_currency_significant_digits'])) $focus->setPreference('default_currency_significant_digits',$_POST['default_currency_significant_digits'], 0, 'global', $focus);
	if(isset($_POST['num_grp_sep'])) $focus->setPreference('num_grp_sep', $_POST['num_grp_sep'], 0, 'global', $focus);
	if(isset($_POST['dec_sep'])) $focus->setPreference('dec_sep', $_POST['dec_sep'], 0, 'global', $focus);
	if(isset($_POST['dateformat'])) $focus->setPreference('datef',$_POST['dateformat'], 0, 'global', $focus);
	if(isset($_POST['timeformat'])) $focus->setPreference('timef',$_POST['timeformat'], 0, 'global', $focus);
	if(isset($_POST['timezone'])) $focus->setPreference('timezone',$_POST['timezone'], 0, 'global', $focus);
	if(isset($_POST['mail_fromname'])) $focus->setPreference('mail_fromname',$_POST['mail_fromname'], 0, 'global', $focus);
	if(isset($_POST['mail_fromaddress'])) $focus->setPreference('mail_fromaddress',$_POST['mail_fromaddress'], 0, 'global', $focus);
	if(isset($_POST['mail_sendtype'])) $focus->setPreference('mail_sendtype', $_POST['mail_sendtype'], 0, 'global', $focus);
	if(isset($_POST['mail_smtpserver'])) $focus->setPreference('mail_smtpserver',$_POST['mail_smtpserver'], 0, 'global', $focus);
	if(isset($_POST['mail_smtpport'])) $focus->setPreference('mail_smtpport',$_POST['mail_smtpport'], 0, 'global', $focus);
	if(isset($_POST['mail_smtpuser'])) $focus->setPreference('mail_smtpuser',$_POST['mail_smtpuser'], 0, 'global', $focus);
	if(isset($_POST['mail_smtppass'])) $focus->setPreference('mail_smtppass',$_POST['mail_smtppass'], 0, 'global', $focus);
	if(isset($_POST['default_locale_name_format'])) $focus->setPreference('default_locale_name_format',$_POST['default_locale_name_format'], 0, 'global', $focus);
	if(isset($_POST['export_delimiter'])) $focus->setPreference('export_delimiter', $_POST['export_delimiter'], 0, 'global', $focus);
	if(isset($_POST['default_export_charset'])) $focus->setPreference('default_export_charset', $_POST['default_export_charset'], 0, 'global', $focus);
	if(isset($_POST['use_real_names'])) $focus->setPreference('use_real_names', 'on', 0, 'global', $focus);
	else $focus->setPreference('use_real_names', 'off', 0, 'global', $focus);

	if(isset($_POST['mail_smtpauth_req'])) {
		$focus->setPreference('mail_smtpauth_req',$_POST['mail_smtpauth_req'] , 0, 'global', $focus);
	} else {
		$focus->setPreference('mail_smtpauth_req','', 0, 'global', $focus);
	}
	
	// SSL-enabled SMTP connection
	if(isset($_POST['mail_smtpssl'])) {
		$focus->setPreference('mail_smtpssl', 1, 0, 'global', $focus);
	} else {
		$focus->setPreference('mail_smtpssl', 0, 0, 'global', $focus);
	}
	
	///////////////////////////////////////////////////////////////////////////
	////	SIGNATURES
	if(isset($_POST['signature_id']))
		$focus->setPreference('signature_default', $_POST['signature_id'], 0, 'global', $focus);	
	
	if(isset($_POST['signature_prepend'])) $focus->setPreference('signature_prepend',$_POST['signature_prepend'], 0, 'global', $focus);
	else $focus->setPreference('signature_prepend', '', 0, 'global', $focus);
	////	END SIGNATURES
	///////////////////////////////////////////////////////////////////////////
	







	
	$focus->setPreference('email_link_type', $_REQUEST['email_link_type']);
	if(isset($_REQUEST['email_show_counts'])) {
		$focus->setPreference('email_show_counts', $_REQUEST['email_show_counts'], 0, 'global', $focus);
	} else {
		$focus->setPreference('email_show_counts', 0, 0, 'global', $focus);
	}
	if(isset($_REQUEST['email_editor_option']))
		$focus->setPreference('email_editor_option', $_REQUEST['email_editor_option'], 0, 'global', $focus);
	if(isset($_REQUEST['default_email_charset']))
		$focus->setPreference('default_email_charset', $_REQUEST['default_email_charset'], 0, 'global', $focus);

	if(isset($_POST['calendar_publish_key'])) $focus->setPreference('calendar_publish_key',$_POST['calendar_publish_key'], 0, 'global', $focus);

	if (!$focus->verify_data())
	{
		header("Location: index.php?action=Error&module=Users&error_string=".urlencode($focus->error_string));
		exit;
	}
	else
	{
		$focus->save();
		$return_id = $focus->id;
		$ieVerified = true;

		if($newUser == true && isset($_REQUEST['new_password1']) && isset($_REQUEST['new_password2']) && $_REQUEST['new_password1'] == $_REQUEST['new_password2']) {
			$focus->retrieve($return_id);
			$focus->change_password('', $_REQUEST['new_password1']);
		}
		///////////////////////////////////////////////////////////////////////////
		////	INBOUND EMAIL SAVES
		if(isset($_REQUEST['server_url']) && !empty($_REQUEST['server_url'])) {
			require_once('modules/InboundEmail/InboundEmail.php');
			$ie = new InboundEmail();
			if(false === $ie->savePersonalEmailAccount($return_id, $focus->user_name)) {
				header("Location: index.php?action=Error&module=Users&error_string=&ie_error=true&id=".$return_id);
				die(); // die here, else the header redirect below takes over.
			}
		} elseif(isset($_REQUEST['ie_id']) && !empty($_REQUEST['ie_id']) && empty($_REQUEST['server_url'])) {
			// user is deleting their I-E
			require_once('modules/InboundEmail/InboundEmail.php');
			$ie = new InboundEmail();
			$ie->deletePersonalEmailAccount($_REQUEST['ie_id'], $focus->user_name);
		}
		////	END INBOUND EMAIL SAVES	
		///////////////////////////////////////////////////////////////////////////








	}
}
if(isset($_REQUEST['return_module']) && $_REQUEST['return_module'] != "") $return_module = $_REQUEST['return_module'];
else $return_module = "Users";
if(isset($_REQUEST['return_action']) && $_REQUEST['return_action'] != "") $return_action = $_REQUEST['return_action'];
else $return_action = "DetailView";
if(isset($_REQUEST['return_id']) && $_REQUEST['return_id'] != "") $return_id = $_REQUEST['return_id'];

$GLOBALS['log']->debug("Saved record with id of ".$return_id);

$redirect = "index.php?action={$return_action}&module={$return_module}&record={$return_id}";
$redirect .= isset($_REQUEST['type']) ? "&type={$_REQUEST['type']}" : ''; // cn: bug 6897 - detect redirect to Email compose
$redirect .= isset($_REQUEST['return_id']) ? "&return_id={$_REQUEST['return_id']}" : '';
header("Location: {$redirect}");
?>
