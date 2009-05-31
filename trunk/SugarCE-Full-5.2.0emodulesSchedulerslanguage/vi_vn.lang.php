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
global $sugar_config;
 
$mod_strings = array (
// OOTB Scheduler Job Names:
'LBL_OOTB_WORKFLOW'		=> 'Quy trình xử lý luồng công việc',
'LBL_OOTB_REPORTS'		=> 'Chạy báo cáo lập biểu đồ công việc',
'LBL_OOTB_IE'			=> 'Kiểm tra hộp thư nội bộ',
'LBL_OOTB_BOUNCE'		=> 'Run Nightly Process Bounced Campaign Emails',
'LBL_OOTB_CAMPAIGN'		=> 'Run Nightly Mass Email Campaigns',
'LBL_OOTB_PRUNE'		=> 'Sửa dữ liệu vào ngày đầu tiên của tháng',
'LBL_OOTB_TRACKER'		=> 'Prune tracker tables',
'LBL_UPDATE_TRACKER_SESSIONS' => 'Update tracker_sessions table',






// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Tạm nghỉ:',
'LBL_LIST_LIST_ORDER' => 'Kết hoạch:',
'LBL_LIST_NAME' => 'Kế hoạch:',
'LBL_LIST_RANGE' => 'Khoảng:',
'LBL_LIST_REMOVE' => 'Xóa:',
'LBL_LIST_STATUS' => 'Trạng thái:',
'LBL_LIST_TITLE' => 'Danh sách kế hoạch:',
'LBL_LIST_EXECUTE_TIME' => 'Sẽ chạy lúc:',
// human readable:
'LBL_SUN'		=> 'Chủ nhật',
'LBL_MON'		=> 'Thứ hai',
'LBL_TUE'		=> 'Thứ ba',
'LBL_WED'		=> 'Thứ tư',
'LBL_THU'		=> 'Thứ năm',
'LBL_FRI'		=> 'Thứ sáu',
'LBL_SAT'		=> 'Thứ bảy',
'LBL_ALL'		=> 'Mỗi ngày',
'LBL_EVERY_DAY'	=> 'Mỗi ngày ',
'LBL_AT_THE'	=> 'Tại lúc ',
'LBL_EVERY'		=> 'Mỗi ',
'LBL_FROM'		=> 'Từ ',
'LBL_ON_THE'	=> 'Trên ',
'LBL_RANGE'		=> ' Đến ',
'LBL_AT' 		=> ' Tại ',
'LBL_IN'		=> ' Trong ',
'LBL_AND'		=> ' và ',
'LBL_MINUTES'	=> ' Phút ',
'LBL_HOUR'		=> ' Giờ',
'LBL_HOUR_SING'	=> ' giờ',
'LBL_MONTH'		=> ' tháng',
'LBL_OFTEN'		=> ' Càng nhiều càng tốt.',
'LBL_MIN_MARK'	=> ' đánh dấu phút',


// crontabs
'LBL_MINS' => 'phút',
'LBL_HOURS' => 'giờ',
'LBL_DAY_OF_MONTH' => 'ngày',
'LBL_MONTHS' => 'tháng',
'LBL_DAY_OF_WEEK' => 'ngày',
'LBL_CRONTAB_EXAMPLES' => 'The above uses standard crontab notation.',
// Labels
'LBL_ALWAYS' => 'Luôn luôn',
'LBL_CATCH_UP' => 'Thực thi nếu thiếu',
'LBL_CATCH_UP_WARNING' => 'Không chọn nếu việc này làm mất nhiều hơn vài phút.',
'LBL_DATE_TIME_END' => 'Ngày giờ kết thúc',
'LBL_DATE_TIME_START' => 'Ngày giờ bắt đầu',
'LBL_INTERVAL' => 'Tạm nghỉ',
'LBL_JOB' => 'Việc',
'LBL_LAST_RUN' => 'Lần cuối chạy thành công',
'LBL_MODULE_NAME' => 'Lịch trình Sugar',
'LBL_MODULE_TITLE' => 'Lập lịch trình',
'LBL_NAME' => 'Tên việc',
'LBL_NEVER' => 'Không bao giờ',
'LBL_NEW_FORM_TITLE' => 'Lịch trình mới',
'LBL_PERENNIAL' => 'Mãi mãi',
'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm người lập lịch trình',
'LBL_SCHEDULER' => 'Người lập lịch trình:',
'LBL_STATUS' => 'Trạng thái',
'LBL_TIME_FROM' => 'Hoạt động từ',
'LBL_TIME_TO' => 'Hoạt động đến',
'LBL_WARN_CURL_TITLE' => 'Cảnh báo cURL:',
'LBL_WARN_CURL' => 'Cảnh báo:',
'LBL_WARN_NO_CURL' => 'Hệ thống không chạy thư viện cURL/This system does not have the cURL libraries enabled/biên soạn vào các mô-đun PHP (--with-curl=/path/to/curl_library).  Xin hãy liên hệ tới người quản trị để Please contact your administrator to giải quyết vấn đề này.  Không có chức năng cURL, không thể lập lịch trình việc.',
'LBL_BASIC_OPTIONS' => 'Thiết lập cơ bản',
'LBL_ADV_OPTIONS'		=> 'Lựa chọn cao cấp',
'LBL_TOGGLE_ADV' => 'Lựa chọn cao cấp',
'LBL_TOGGLE_BASIC' => 'Lựa chọn cơ bản',
// Links
'LNK_LIST_SCHEDULER' => 'Người lập lịch trình',
'LNK_NEW_SCHEDULER' => 'Tạo người lập lịch trình',
'LNK_LIST_SCHEDULED' => 'Việc đã lên lịch trình',



// Messages
'SOCK_GREETING' => "\nĐây là giao diện cho dịch vụ lập lịch trình của SugarCRM. \n[ Những lệnh tiện ích có sẵn: start|restart|shutdown|status ]\nĐể thoát, gõ 'quit'.  Để tắt dịch vụ 'shutdown'.\n",
'ERR_DELETE_RECORD' => 'Bạn phải chỉ định số bản ghi để xóa lịch trình.',
'ERR_CRON_SYNTAX' => ' Cron syntax không hợp lệ',
'NTC_DELETE_CONFIRMATION' => 'Bạn có chắc là bạn muốn xóa bản ghi này không?',
'NTC_STATUS' => 'Set status to Inactive to remove this schedule from the Scheduler dropdown lists',
'NTC_LIST_ORDER' => 'Set the order this schedule will appear in the Scheduler dropdown lists',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Để cài đặt lịch trình cho Windows',
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Để cài đặt Crontab',
'LBL_CRON_LINUX_DESC' => 'Cho thêm dòng này vào crontab của bạn: ',
'LBL_CRON_WINDOWS_DESC' => 'Tạo một tệp bó với những lệnh sau: ',
'LBL_NO_PHP_CLI' => 'Nếu máy chủ của bạn không có sẵn PHP nhị phân, bạn có thể sử dụng wget hoặc curl để bắt đầu chạy your Jobs.<br>cho wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b><br>for curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1', 
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'	=> 'Job Log',
'LBL_EXECUTE_TIME'			=> 'Execute Time',
);

?>
