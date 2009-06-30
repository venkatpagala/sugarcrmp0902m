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

 * Description:  Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array (
		  //Labels for methods in the TrackerReporter.php file that are shown in TrackerDashlet
		  'ShowActiveUsers'      => 'Hiển thị người dùng kích hoạt',
		  'ShowLastModifiedRecords' => '10 bản ghi được chỉnh sửa gần nhất',
		  'ShowTopUser' => 'Top Người dùng',
		  'ShowMyModuleUsage' => 'Cách dùng module của tôi',
		  'ShowMyWeeklyActivities' => 'Hoạt động hàng tuần của tôi',
		  'ShowTop3ModulesUsed' => 'Top 3 module dùng của tôi',
		  'ShowLoggedInUserCount' => 'Kích hoạt tài khoản người dùng',
		  'ShowMyCumulativeLoggedInTime' => 'Tổng thời gian đăng nhập của tôi (Tuần này)',
		  'ShowUsersCumulativeLoggedInTime' => 'Tổng thời gian đăng nhập của người dùng (Tuần này)',
		  
		  //Column header mapping
		  'action' => 'Hành động',
		  'active_users' => 'Kích hoạt đếm người dùng',
		  'date_modified' => 'Ngày của hành động cuối cùng',
		  'different_modules_accessed' => 'Số module truy cập',
		  'first_name' => 'Tên',
		  'item_id' => 'ID',
		  'item_summary' => 'Họ và tên',
		  'last_action' => 'Ngày/Giờ hành động gần nhất',
		  'last_name' => 'Họ',
		  'module_name' => 'Tên module',
		  'records_modified' => 'Tổng số bản ghi chỉnh sửa',
		  'top_module' => 'Top module truy cập',
		  'total_count' => 'Tổng trang xem',
		  'total_login_time' => 'Giờ (hh:mm:ss)',
		  'user_name' => 'Tên người dùng',
		  'users' => 'Người dùng',
		  
		  //Administration related labels
		  'LBL_ENABLE' => 'Cho phép',
		  'LBL_MODULE_NAME_TITLE' => 'Bộ dò',
		  'LBL_TRACKER_SETTINGS' => 'Cài đặt bộ dò',
		  'LBL_TRACKER_QUERIES_DESC' => 'Truy vấn bộ dò',
		  'LBL_TRACKER_QUERIES_HELP' => 'Track SQL statements when "Log slow queries" is enabled and the query execution time exceeds the "Slow query time threshold" value',
		  'LBL_TRACKER_PERF_DESC' => 'Tracker Performance',
		  'LBL_TRACKER_PERF_HELP' => 'Track database roundtrips, files accessed and memory usage',
		  'LBL_TRACKER_SESSIONS_DESC' => 'Phiên bộ dò',
		  'LBL_TRACKER_SESSIONS_HELP' => 'Track active users and users&rsquo; session information',
		  'LBL_TRACKER_DESC' => 'Hành động bộ dò',
		  'LBL_TRACKER_HELP' => 'Track user&rsquo;s page views (modules and records accessed) and record saves',
		  'LBL_TRACKER_PRUNE_INTERVAL' => 'Number of days of Tracker data to store when Scheduler prunes the tables',
		  'LBL_TRACKER_PRUNE_RANGE' => 'Số ngày',
);
?>
