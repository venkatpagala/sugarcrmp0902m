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

 * Description:  Saves an Account record and then redirects the browser to the
 * defined return URL.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('modules/Tasks/Task.php');

$focus = new Task();
if (!isset($prefix)) $prefix='';

global $timedate;
$time_format = $timedate->get_user_time_format();
$time_separator = ":";
if(preg_match('/\d+([^\d])\d+([^\d]*)/s', $time_format, $match)) {
   $time_separator = $match[1];
}

if(!empty($_POST[$prefix.'due_meridiem'])) {
	$_POST[$prefix.'time_due'] = $timedate->merge_time_meridiem($_POST[$prefix.'time_due'],$timedate->get_time_format(true), $_POST[$prefix.'due_meridiem']);
}

if(!empty($_POST[$prefix.'start_meridiem'])) {
	$_POST[$prefix.'time_start'] = $timedate->merge_time_meridiem($_POST[$prefix.'time_start'],$timedate->get_time_format(true), $_POST[$prefix.'start_meridiem']);
}

if(isset($_POST[$prefix.'time_due']) && !empty($_POST[$prefix.'time_due'])) {
   $_POST[$prefix.'date_due'] = $_POST[$prefix.'date_due'] . ' ' . $_POST[$prefix.'time_due'];
}

if(isset($_POST[$prefix.'time_start']) && !empty($_POST[$prefix.'time_start'])) {
   $_POST[$prefix.'date_start'] = $_POST[$prefix.'date_start'] . ' ' . $_POST[$prefix.'time_start'];
}

require_once('include/formbase.php');

$focus = populateFromPost('', $focus);

if(!$focus->ACLAccess('Save')){
		ACLController::displayNoAccess(true);
		sugar_cleanup(true);
}

if (isCloseAndCreateNewPressed()) $focus->status = 'Completed';
if (!isset($_POST['date_due_flag'])) $focus->date_due_flag = 0;
if (!isset($_POST['date_start_flag'])) $focus->date_start_flag = 0;

//if only the time is passed in, without a date, then string length will be 7
if (isset($_REQUEST['date_due']) && strlen(trim($_REQUEST['date_due']))<8 ){
    //no date set, so clear out field, and set the rest flag to true
    $focus->date_due_flag = 1;
    $focus->date_due = '';    
}

//if only the time is passed in, without a date, then string length will be 7
if (isset($_REQUEST['date_start']) && strlen(trim($_REQUEST['date_start']))<8){
    //no date set, so clear out field, and set the rest flag to true
    $focus->date_start_flag = 1;
    $focus->date_start = '';
}



///////////////////////////////////////////////////////////////////////////////
////	INBOUND EMAIL HANDLING
///////////////////////////////////////////////////////////////////////////////
if(isset($_REQUEST['inbound_email_id']) && !empty($_REQUEST['inbound_email_id'])) {
	// fake this case like it's already saved.
	$focus->save();
	require_once('modules/Emails/Email.php');
	$email = new Email();
	$email->retrieve($_REQUEST['inbound_email_id']);
	$email->parent_type = 'Tasks';
	$email->parent_id = $focus->id;
	$email->assigned_user_id = $current_user->id;
	$email->status = 'read';
	$email->save();
	$email->load_relationship('tasks');
	$email->tasks->add($focus->id);
	
	header("Location: index.php?&module=Emails&action=EditView&type=out&inbound_email_id=".$_REQUEST['inbound_email_id']."&parent_id=".$email->parent_id."&parent_type=".$email->parent_type.'&start='.$_REQUEST['start'].'&assigned_user_id='.$current_user->id);
	exit();
}
////	END INBOUND EMAIL HANDLING
///////////////////////////////////////////////////////////////////////////////	


// avoid undefined index
if (!isset($GLOBALS['check_notify'])) {
	$GLOBALS['check_notify'] = false;
}
$focus->save($GLOBALS['check_notify']);
$return_id = $focus->id;

handleRedirect($return_id,'Tasks');
?>
