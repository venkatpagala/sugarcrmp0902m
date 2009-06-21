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
  'LBL_MODULE_NAME' => 'Cơ hội',
  'LBL_MODULE_TITLE' => 'Cơ hội: Trang chủ',
  'LBL_SEARCH_FORM_TITLE' => 'Tìm kiếm cơ hội',
  'LBL_VIEW_FORM_TITLE' => 'Xem cơ hội',
  'LBL_LIST_FORM_TITLE' => 'Danh sách cơ hội',
  'LBL_OPPORTUNITY_NAME' => 'Tên cơ hội:',
  'LBL_OPPORTUNITY' => 'Cơ hội:',
  'LBL_NAME' => 'Tên cơ hội',
  'LBL_INVITEE' => 'Liên lạc',
  'LBL_CURRENCIES' => 'Tiền tệ',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Tên',
  'LBL_LIST_ACCOUNT_NAME' => 'Tên tài khoản',
  'LBL_LIST_AMOUNT' => 'Lượng',
  'LBL_LIST_DATE_CLOSED' => 'Đóng',
  'LBL_LIST_SALES_STAGE' => 'Giai đoạn bán hàng',
  'LBL_ACCOUNT_ID'=>'Tên đăng nhập tài khoản',
  'LBL_CURRENCY_ID'=>'ID tiền tệ',
  'LBL_CURRENCY_NAME'=>'Tên loại tiền tệ',
  'LBL_CURRENCY_SYMBOL'=>'Ký hiệu tiền tệ',



//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Cơ hội - Cập nhật tiền tệ',
  'UPDATE_DOLLARAMOUNTS' => 'Cập nhật lượng tiền đô la Mỹ',
  'UPDATE_VERIFY' => 'Xác minh lại số lượng',
  'UPDATE_VERIFY_TXT' => 'Xác minh lại lượng giá trị trong cơ hội là những số thập phân hợp lệ chỉ với các ký tự số(0-9) và ký hiệu thập phân(.)',
  'UPDATE_FIX' => 'Lượng cố định',
  'UPDATE_FIX_TXT' => 'Cố gắng sửa bất kỳ lượng không hợp lệ nào bằng cách tạo một số thập phân hợp lệ từ lượng hiện có. Bất kỳ lượng được chỉnh sửa nào cũng được dự phòng sẵn trong cơ sở dữ liệu dự phòng. Nếu bạn làm điều này, đừng quên chạy lại nó mà không khôi phục lại từ phần cơ sở dữ liệu dự phòng vì có thể nó sẽ viết lại phần dự phòng với số liệu không hợp lệ đó.',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Cập nhật lượng tiền đô la Mỹ cho cơ hội dựa trên sự thiết lập tỷ giá tiền tệ hiện tại. This value is used to calculate Graphs and List View Currency Amounts.',
  'UPDATE_CREATE_CURRENCY' => 'Tạo tiền tệ mới:',
  'UPDATE_VERIFY_FAIL' => 'Ghi lại những xác minh bị sai:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Giá trị hiện tại:',
  'UPDATE_VERIFY_FIX' => 'Running Fix would give',
  'UPDATE_INCLUDE_CLOSE' => 'Bao gồm cả những bản ghi đã đóng',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Lượng mới:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Tiền tệ mới:',
  'UPDATE_DONE' => 'Done',
  'UPDATE_BUG_COUNT' => 'Những lỗi được tìm thấy và những lần cố gắng để giải quyết:',
  'UPDATE_BUGFOUND_COUNT' => 'Những lỗi được tìm thấy:',
  'UPDATE_COUNT' => 'Bản ghi được cập nhật:',
  'UPDATE_RESTORE_COUNT' => 'Số bản ghi được khôi phục:',
  'UPDATE_RESTORE' => 'Khôi phục giá trị',
  'UPDATE_RESTORE_TXT' => 'Khôi phục lại lượng giá trị từ phần dự phòng trong quá trình sửa.',
  'UPDATE_FAIL' => 'Không thể cập nhật - ',
  'UPDATE_NULL_VALUE' => 'Lựong bằng KHÔNG được đặt là 0 -',
  'UPDATE_MERGE' => 'Kết hợp các loại tiền tệ',
  'UPDATE_MERGE_TXT' => 'Kết hợp các loại đa tiền tệ thành đơn tiền tệ. Nếu có nhiều bản ghi đa tiền tệ cho cùng một loại tiền tệ, hãy hợp nhất chúng lại với nhau. Điều này cũng làm hợp nhất các loại tiền tệ ở tất cả các module còn lại.',
  'LBL_ACCOUNT_NAME' => 'Tên tài khoản:',
  'LBL_AMOUNT' => 'Lượng:',
  'LBL_AMOUNT_USDOLLAR' => 'Lượng USD:',
  'LBL_CURRENCY' => 'Tiền tệ:',
  'LBL_DATE_CLOSED' => 'Ngày đóng mong đợi:',
  'LBL_TYPE' => 'Dạng:',
  'LBL_CAMPAIGN' => 'Chiến dịch:',
  'LBL_NEXT_STEP' => 'Bước tiếp theo:',
  'LBL_LEAD_SOURCE' => 'Nguồn tiềm năng:',
  'LBL_SALES_STAGE' => 'Giai đoạn bán hàng:',
  'LBL_PROBABILITY' => 'Xác suất (%):',
  'LBL_DESCRIPTION' => 'Mô tả:',
  'LBL_DUPLICATE' => 'Khả năng cơ hội bị trùng lặp',
  'MSG_DUPLICATE' => 'Bản ghi cơ hội bạn đang định lập bị trùng lặp với bản ghi cơ hội đang có. Bản ghi cơ hội bao gồm những tên tương tự được liệt kê ở dưới đây.<br>Nhấn Lưu để tiếp tục tạo cơ hội mới này, hoặc nhấn Hủy bỏ để quay trở về module mà không tạo cơ hội.',
  'LBL_NEW_FORM_TITLE' => 'Tạo cơ hội',
  'LNK_NEW_OPPORTUNITY' => 'Tạo cơ hội',



  'LNK_OPPORTUNITY_LIST' => 'Cơ hội',
  'ERR_DELETE_RECORD' => 'Số bản ghi phải được ghi rõ để xóa cơ hội.',
  'LBL_TOP_OPPORTUNITIES' => 'Những cơ hội mở hàng đầu của tôi',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Bạn có chắc là bạn muốn xóa liên lạc này ra khỏi cơ hội?',
	'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Bạn có chắc là bạn muốn bỏ cơ hội này ra khỏi dự án?',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cơ hội',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Hoạt động',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Lịch sử',
    'LBL_RAW_AMOUNT'=>'Raw Amount',
	
    'LBL_LEADS_SUBPANEL_TITLE' => 'Tiềm năng',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Liên lạc',



    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Dự án',
	'LBL_ASSIGNED_TO_NAME' => 'Chỉ định tới:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Người dùng được chỉ định',




  'LBL_LIST_SALES_STAGE' => 'Giai đoạn bán hàng',
  'LBL_MY_CLOSED_OPPORTUNITIES' => 'Những cơ hội đã kết thúc của tôi',
  'LBL_TOTAL_OPPORTUNITIES' => 'Tất cả các cơ hội',
  'LBL_CLOSED_WON_OPPORTUNITIES' => 'Những cơ hội đã kết thúc thành công',
  'LBL_ASSIGNED_TO_ID' =>'Chỉ định tới ID',
  'LBL_CREATED_ID'=>'Tạo bởi ID',
  'LBL_MODIFIED_ID'=>'Chỉnh sửa bởi ID',
  'LBL_MODIFIED_NAME'=>'Chỉnh sửa bởi tên người dùng',
    'LBL_CREATED_USER' => 'Người dùng được tạo',
    'LBL_MODIFIED_USER' => 'Người dùng được chỉnh sửa',
'LBL_CAMPAIGN_OPPORTUNITY' => 'Chiến dịch',
	
);

?>
