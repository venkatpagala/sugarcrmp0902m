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

$mod_strings = array(



	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Mật khẩu đăng nhập không đúng',
	'ERR_BODY_TOO_LONG'		=> '\rVăn bản Email quá dài.  Trimmed.',
	'ERR_INI_ZLIB'			=> 'Không thể Zlib tạm thời.  "Kiểm tra cài đặt" có thể thất bại.',
	'ERR_MAILBOX_FAIL'		=> 'Không thể lấy lại bất kỳ tài khoản Email nào.',
	'ERR_NO_IMAP'			=> 'Thư viên IMAP không được tìm thấy.  Xin vui lòng giải quyết này trước khi tiếp tục với Inbound Email',
	'ERR_NO_OPTS_SAVED'		=> 'Không có optimums đã được lưu với các tài khoản Inbound email của bạn . Xin vui lòng xem lại các cách cài đặt',
	'ERR_TEST_MAILBOX'		=> 'Xin vui lòng kiểm tra các thiết lập của bạn và thử lại.',

	'LBL_APPLY_OPTIMUMS'	=> 'Áp dụng Optimums',
	'LBL_ASSIGN_TO_USER'	=> 'Chỉ định người này',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Các chức năng trả lời tự động',
	'LBL_AUTOREPLY'			=> 'Các mẫu trả lời tự động',
	'LBL_BASIC'				=> 'Cài đặt cơ bản',
	'LBL_CASE_MACRO'		=> 'Macro cơ bản',
	'LBL_CASE_MACRO_DESC'	=> 'Đặt tổng quan sẽ được phân tích cú pháp và được sử dụng để liên kết nhập khẩu email đến một trường hợp.',
	'LBL_CASE_MACRO_DESC2'	=> 'Thiết lập này cho bất kỳ giá trị, nhưng bảo tồn <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Tập trung xác nhận của các máy chủ Email \s Giấy chứng nhận an toàn - nếu không sử dụng ký tự.',
	'LBL_CERT'				=> 'Giấy chứng nhận xác nhận tính hợp lệ',
	'LBL_CLOSE_POPUP'		=> 'Đóng cửa sổ',
	'LBL_CREATE_NEW_GROUP'	=> '--Tạo ra nhóm lưu trữ--',
	'LBL_CREATE_TEMPLATE'	=> 'Tạo ra',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Thủ tục đăng ký',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Mặc định: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'Mặc định: ',
	'LBL_DELETE_SEEN'		=> 'Xóa đọc Emails sau khi nhập vào',
	'LBL_EDIT_TEMPLATE'		=> 'Chỉnh sửa',
	'LBL_EMAIL_OPTIONS'		=> 'Tùy chọn xử lý Emails',
	'LBL_FILTER_DOMAIN_DESC'=> 'Không gửi bài trả lời tự động đến tên miền này.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Gán một tài khoản email vào một nhóm thư mục cho phép tự động nhập việc gửi email.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Tạo ra các tình huống tùy chọn, một nhóm thư mục phải được lựa chọn',
	'LBL_FILTER_DOMAIN'		=> 'Không tự động trả lời tên miền này',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>Tìm kết nối tối ưu.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Tìm cấu hình tối ưu',
	'LBL_FIND_SSL_WARN'		=> '<br>Kiểm tra SSL có thể mất một thời gian dài. Xin vui lòng kiên nhẫn.<br>',
	'LBL_FORCE_DESC'		=> 'Một số máy chủ yêu cầu đặc biệt IMAP/POP3. Tập trung kiểm tra bộ chuyển đổi ngược khi kết nối(i.e., /notls)',
	'LBL_FORCE'				=> 'Phủ định tập trung',
	'LBL_FOUND_MAILBOXES'	=> 'Được tìm thấy trong các thư mục sau đây.<br>Nhấp vào một trong các lựa chọn đó:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Tìm thấy cài đặt tối ưu.  Bấm nút dưới đây để áp dụng chúng vào tài khoản email của bạn.',
	'LBL_FROM_ADDR'			=> '"Từ" địa chỉ',
	'LBL_FROM_NAME_ADDR'	=> 'Từ tên/Email',
	'LBL_FROM_NAME'			=> '"Từ" Tên',
	'LBL_GROUP_QUEUE'		=> 'Chỉ định cho nhóm',
    'LBL_HOME'              => 'Trang',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Cách sử dụng tài khoản Email',
	'LBL_LIST_NAME'			=> 'Tên:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Nhóm/Cá nhân',
	'LBL_LIST_SERVER_URL'	=> 'Mail chủ:',
	'LBL_LIST_STATUS'		=> 'Tình trạng:',
	'LBL_LOGIN'				=> 'Tên người sử dụng',
	'LBL_MAILBOX_DEFAULT'	=> 'Trong hộp thư',
	'LBL_MAILBOX_SSL_DESC'	=> 'Sử dụng SSL khi kết nối. Nếu điều này không làm việc , hãy kiểm tra quá trình cài đặt PHP"--with-imap-ssl" trong configuration.',
	'LBL_MAILBOX_SSL'		=> 'Sử dụng SSL',
	'LBL_MAILBOX_TYPE'		=> 'Khả năng hành động',
	'LBL_DISTRIBUTION_METHOD' => 'Phương thức phân tán',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Tạo ra các mẫu trả lời tự động',
	'LBL_MAILBOX'			=> 'Theo dõi thư mục',
	'LBL_TRASH_FOLDER'		=> 'Thùng rác',
	'LBL_GET_TRASH_FOLDER'	=> 'Nhận thư mục trong thùng rác',
	'LBL_SENT_FOLDER'		=> 'Thư mục gửi',
	'LBL_GET_SENT_FOLDER'	=> 'Thư mục đã được gửi nhận',
	'LBL_SELECT'				=> 'Lựa chọn',
	'LBL_MARK_READ_DESC'	=> 'Đánh dấu các bài đã đọc viết trên thư trên máy khách hàng; không xóa.',
	'LBL_MARK_READ_NO'		=> 'Emails đã được nhập sau khi xóa',
	'LBL_MARK_READ_YES'		=> 'Emails tạo bản lưu trên máy chủ',
	'LBL_MARK_READ'			=> 'Để lại tin nhắn trên máy chủ',
	'LBL_MAX_AUTO_REPLIES'	=> 'Số tự động phản hồi',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Đặt số lượng tối đa tự động  hồi đáp để gửi đến một địa chỉ email duy nhất trong một khoảng thời gian 24 giờ.',
	'LBL_MODULE_NAME'		=> 'Cài đặt Inbound Email',
	'LBL_MODULE_TITLE'		=> 'Inbound Email',
	'LBL_NAME'				=> 'Tên',
    'LBL_NONE'              => 'Không có',
	'LBL_NO_OPTIMUMS'		=> 'Không tìm thấy optimums. Xin vui lòng kiểm tra các thiết lập của bạn và thử lại.',
	'LBL_ONLY_SINCE_DESC'	=> 'Khi sử dụng POP3, PHP có thể không cho các bộ lọc mới / Chưa đọc tin nhắn.  Điều này cho phép các yêu cầu cơ để kiểm tra xem có tin nhắn từ thời gian qua các tài khoản email đã được polled.Điều này sẽ cải thiện đáng kể hiệu suất của máy chủ thư của bạn không hỗ trợ IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Không.Kiểm tra lại tất cả các Emails trên máy chủ.',
	'LBL_ONLY_SINCE_YES'	=> 'Có.',
	'LBL_ONLY_SINCE'		=> 'Chỉ nhập khi có lần kiểm tra cuối cùng:',
	'LBL_OUTBOUND_SERVER'	=> 'Outgoing Mail Server',
	'LBL_PASSWORD_CHECK'	=> 'Kiểm tra mật khẩu',
	'LBL_PASSWORD'			=> 'Mật khẩu',
	'LBL_POP3_SUCCESS'		=> 'POP3 của bạn đã được kết nối thử nghiệm thành công.',
	'LBL_POPUP_FAILURE'		=> 'Kiểm tra kết nối không thành công. Các lỗi sẽ được hiển thị dưới đây.',
	'LBL_POPUP_SUCCESS'		=> 'Kiểm tra kết nối thành công. Các cài đặt của bạn đang làm việc.',
	'LBL_POPUP_TITLE'		=> 'Kiểm tra cài đặt',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Tạo danh sách thư mục',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Chọn thư mục được đăng ký(s)',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Chọn thư mục thùng rác',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Chọn thư mục đã gửi',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'Dưới đây là những thư mục (s)% s, hoặc không tồn tại hoặc đã bị xóa khỏi máy chủ',
	'LBL_PORT'				=> 'Cổng thư mục Mail máy chủ',
	'LBL_QUEUE'				=> 'Xếp hạng tài khoản Mail',
	'LBL_REPLY_NAME_ADDR'	=> 'Trả lời Tên/Email',
	'LBL_REPLY_TO_NAME'		=> '"Trả lời đến" Tên',
	'LBL_REPLY_TO_ADDR'		=> '"Trả lời đến" Địa chỉ',
	'LBL_SAME_AS_ABOVE'		=> 'Sử dụng Tên/Địa chỉ',
	'LBL_SAVE_RAW'			=> 'Lưu giữ nguồn ban đầu',
	'LBL_SAVE_RAW_DESC_1'	=> 'Chọn "Có" nếu bạn muốn giữ nguyên mỗi Email có dạng ban đầu.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Phần lớn các tài liệu đính kèm có thể gây ra sự cố với conservatively hoặc không chính xác cấu hình cơ sở dữ liệu.',
	'LBL_SERVER_OPTIONS'	=> 'Thiết lập nâng cao',
	'LBL_SERVER_TYPE'		=> 'Giao thức Mail chủ',
	'LBL_SERVER_URL'		=> 'Địa chỉ Mail chủ',
	'LBL_SSL_DESC'			=> 'Nếu máy chủ Email của bạn hỗ trợ ổ cắm kết nối an toàn, tạo điều kiện kết nối SSL khi nhập Emails.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'Việc chọn nhóm có quyền truy cập vào các tài khoản email. Nếu một nhóm thư mục được chọn, chỉ định cho nhóm overrides thư mục được lựa chọn đội ngũ.',
	'LBL_SSL'				=> 'Sử dụng SSL',
	'LBL_STATUS'			=> 'Trạng thái',
	'LBL_SYSTEM_DEFAULT'	=> 'Hệ thống mặc định',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Kiểm tra [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Kiểm tra cài đặt',
	'LBL_TEST_SUCCESSFUL'	=> 'Kết nối thành công.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Xin hãy đợi một phút...',
	'LBL_TLS_DESC'			=> 'Sử dụng các lớp bảo mật khi kết nối với máy chủ Email - chỉ sử dụng phương thức này nếu máy chủ Email của bạn hỗ trợ.,
	'LBL_TLS'				=> 'Sử dụng TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Tạm dừng Inbound Email',
	'LBL_WARN_IMAP'			=> 'Cảnh báo:',
	'LBL_WARN_NO_IMAP'		=> 'Inbound Email <b>không thể</b> function cùng với IMAP c-thư viện cho phép khách hàng/PHP biên soạn với các modul. Xin vui lòng liên hệ với quản trị viên của bạn để giải quyết vấn đề này.',

	'LNK_CREATE_GROUP'		=> 'Tạo một nhóm mới',
	'LNK_LIST_CREATE_NEW'	=> 'Giao diện tài khoản Email mới',
	'LNK_LIST_MAILBOXES'	=> 'Tất cả tài khoản Mail',
	'LNK_LIST_QUEUES'		=> 'Tất cả Queues',
	'LNK_LIST_SCHEDULER'	=> 'Lịch trình',
	'LNK_LIST_TEST_IMPORT'	=> 'Kiểm tra Email được nhập vào',
	'LNK_NEW_QUEUES'		=> 'Tạo hàng xếp mới',
	'LNK_SEED_QUEUES'		=> 'Giống Queues từ nhóm',
	'LBL_IS_PERSONAL'       => 'Tài khoản Mail cá nhân',
	'LBL_GROUPFOLDER_ID'	=> 'Nhóm thư mục Id',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Chỉ định nhóm thư mục',

    'LBL_STATUS_ACTIVE'     => 'Hoạt động',
    'LBL_STATUS_INACTIVE'   => 'Không hoạt động',
    'LBL_IS_PERSONAL' => 'Cá nhân',
    'LBL_IS_GROUP' => 'Nhóm',
);

?>
