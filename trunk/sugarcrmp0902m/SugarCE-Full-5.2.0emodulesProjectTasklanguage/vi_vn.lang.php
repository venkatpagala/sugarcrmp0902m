<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * Default English language strings
 *
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
 */



$mod_strings = array (
	'LBL_MODULE_NAME' => 'Hoạt động dự án',
	'LBL_MODULE_TITLE' => 'Hoạt động dự án: Trang chủ',
	'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm hoạt động dự án',
	'LBL_LIST_FORM_TITLE'=> 'Danh sách hoạt động dự án',
    'LBL_EDIT_TASK_IN_GRID_TITLE'=> 'Sửa đổi công việc trong hệ thống',    
	
	'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => 'Id hoạt động dự án:',
    'LBL_PROJECT_ID' => 'Id dự án:',
	'LBL_DATE_ENTERED' => 'Ngày nhập:',
	'LBL_DATE_MODIFIED' => 'Ngày chỉnh sửa:',
	'LBL_ASSIGNED_USER_ID' => 'Gửi đến:',
	'LBL_MODIFIED_USER_ID' => 'Chỉnh sửa Id người dùng:',
	'LBL_CREATED_BY' => 'Tạo bởi:',
	'LBL_TEAM_ID' => 'Nhóm:',
	'LBL_NAME' => 'Tên:',
	'LBL_STATUS' => 'Trạng thái:',
	'LBL_DATE_DUE' => 'Đúng hạn:',
	'LBL_TIME_DUE' => 'Đúng giờ:',
    'LBL_RESOURCE' => 'Nguồn tài nguyên:',
    'LBL_PREDECESSORS' => 'Tiền nhiệm:',
	'LBL_DATE_START' => 'Ngày bắt đầu:',
    'LBL_DATE_FINISH' => 'Ngày kết thúc:',    
	'LBL_TIME_START' => 'Giờ bắt đầu:',
    'LBL_TIME_FINISH' => 'Giờ kết thúc:',
    'LBL_DURATION' => 'Thời gian:',
    'LBL_DURATION_UNIT' => 'Đơn vị thời gian:',
    'LBL_ACTUAL_DURATION' => 'Thời gian thực:',
	'LBL_PARENT_ID' => 'Dự án:',
    'LBL_PARENT_TASK_ID' => 'Id Hoạt động chính:',    
    'LBL_PERCENT_COMPLETE' => 'Phần trăm hoàn thành (%):',
	'LBL_PRIORITY' => 'Priority:',
	'LBL_DESCRIPTION' => 'Miêu tả:',
	'LBL_ORDER_NUMBER' => 'Đặt hàng:',
	'LBL_TASK_NUMBER' => 'Số nhiệm vụ:',
    'LBL_TASK_ID' => 'ID hoạt động:',
	'LBL_DEPENDS_ON_ID' => 'Phụ thuộc vào:',
	'LBL_MILESTONE_FLAG' => 'Sự kiện quan trọng:',
	'LBL_ESTIMATED_EFFORT' => 'Nỗ lực dự tính (Giờ):',
	'LBL_ACTUAL_EFFORT' => 'Nỗ lực thực sự (Giờ):',
	'LBL_UTILIZATION' => 'Tận dụng (%):',
	'LBL_DELETED' => 'Đã xóa:',

	'LBL_LIST_ORDER_NUMBER' => 'Đặt hàng',
	'LBL_LIST_NAME' => 'Tên',
    'LBL_LIST_DAYS' => 'ngày',
	'LBL_LIST_PARENT_NAME' => 'Dự án',
	'LBL_LIST_PERCENT_COMPLETE' => 'Phần trăm hoàn thành (%)',
	'LBL_LIST_STATUS' => 'Trạng thái',
    'LBL_LIST_DURATION' => 'Thời gian',
    'LBL_LIST_ACTUAL_DURATION' => 'Thời gian thực',
	'LBL_LIST_ASSIGNED_USER_ID' => 'Giao tới',
	'LBL_LIST_DATE_DUE' => 'Thời hạn',
	'LBL_LIST_DATE_START' => 'Ngày bắt đầu',
    'LBL_LIST_DATE_FINISH' => 'Ngày kết thúc',    
	'LBL_LIST_PRIORITY' => 'Ưu tiên',
	'LBL_LIST_CLOSE' => 'Đóng',
	'LBL_PROJECT_NAME' => 'Tên dự án',

	'LNK_NEW_PROJECT'	=> 'Tạo dự án',
	'LNK_PROJECT_LIST'	=> 'Danh sách dự án',
	'LNK_NEW_PROJECT_TASK'	=> 'Tạo hoạt động dự án',
	'LNK_PROJECT_TASK_LIST'	=> 'Hoạt động dự án',
	
	'LBL_LIST_MY_PROJECT_TASKS' => 'Hoạt động dự án của tôi',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hoạt động dự án',
	'LBL_NEW_FORM_TITLE' => 'Hoạt động mới của dự án',

	'LBL_ACTIVITIES_TITLE'=>'Hoạt động',
	'LBL_HISTORY_TITLE'=>'Lịch sử',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Hoạt động',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Lịch sử', 
	'DATE_JS_ERROR' => 'Xin vui lòng nhập một ngày tương ứng với thời gian nhập',

    'LBL_ASSIGNED_USER_NAME' => 'Giao tới',
    'LBL_PARENT_NAME' => 'Tên dự án',
    'LBL_LIST_PROJECT_NAME' => 'Dự án',
);
?>
