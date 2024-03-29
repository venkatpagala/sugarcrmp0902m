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
if(!is_admin($current_user)) sugar_die("Unauthorized access to administration.");

require_once('modules/Calls/Call.php');
require_once('modules/Meetings/Meeting.php');
global $timedate;

$callBean = new Call();
$callQuery = "SELECT * FROM calls where calls.status != 'Held' and calls.deleted=0";
//$callQuery = "SELECT * FROM calls where calls.name like '1' and calls.deleted=0";

$result = $callBean->db->query($callQuery, true, "");
$row = $callBean->db->fetchByAssoc($result);
while ($row != null) {
	
	$date_start = $row['date_start'];
	$date_start_array=split(" ",trim($date_start));
	if (count($date_start_array)==2) {
		$time_start = $date_start_array[1];
		$date_start=$date_start_array[0];
	}
	$date_time_start =DateTimeUtil::get_time_start($row['date_start'], $time_start);
    $date_time_end =DateTimeUtil::get_time_end($date_time_start,$row['duration_hours'], $row['duration_minutes']);
    $date_end = "{$date_time_end->year}-{$date_time_end->month}-{$date_time_end->day}";
	$updateQuery = "UPDATE calls set calls.date_end='{$date_end}' where calls.id='{$row['id']}'";
	$call = new Call();
    $call->db->query($updateQuery); 
    $row = $callBean->db->fetchByAssoc($result);
}

$meetingBean = new Meeting();
$meetingQuery = "SELECT * FROM meetings where meetings.status != 'Held' and meetings.deleted=0";
//$meetingQuery = "SELECT * FROM meetings where meetings.name like '1' and meetings.deleted=0";

$result = $meetingBean->db->query($meetingQuery, true, "");
$row = $meetingBean->db->fetchByAssoc($result);
while ($row != null) {
	
	$date_start = $row['date_start'];
	$date_start_array=split(" ",trim($date_start));
	if (count($date_start_array)==2) {
		$time_start = $date_start_array[1];
		$date_start=$date_start_array[0];
	}
	$date_time_start =DateTimeUtil::get_time_start($row['date_start'], $time_start);
    $date_time_end =DateTimeUtil::get_time_end($date_time_start,$row['duration_hours'], $row['duration_minutes']);
    $date_end = "{$date_time_end->year}-{$date_time_end->month}-{$date_time_end->day}";
	$updateQuery = "UPDATE meetings set meetings.date_end='{$date_end}' where meetings.id='{$row['id']}'";
	$call = new Call();
    $call->db->query($updateQuery); 
    $row = $callBean->db->fetchByAssoc($result);
}
echo $mod_strings['LBL_DIAGNOSTIC_DONE'];

