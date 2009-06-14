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
	'LBL_SEND_DATE_TIME'						=> 'Ngày gửi',
	'LBL_IN_QUEUE'								=> 'Xếp hạng trong?',
	'LBL_IN_QUEUE_DATE'							=> 'Ngày xếp hạng',

	'ERR_INT_ONLY_EMAIL_PER_RUN'				=> 'Chỉ sử dụng nguyên một giá trị để xác định số lượng các email được gửi cho mỗi đợt',

	'LBL_ATTACHMENT_AUDIT'						=> ' Đã gửi. Không lặp lại tại vùng để bảo tồn đĩa sử dụng.',
	'LBL_CONFIGURE_SETTINGS'					=> 'Cấu hình',
	'LBL_CUSTOM_LOCATION'						=> 'Xác định người sử dụng',
	'LBL_DEFAULT_LOCATION'						=> 'Mặc định',
	
	'LBL_DISCLOSURE_TITLE'						=> 'Thêm thông báo cho mỗi Email',
	'LBL_DISCLOSURE_TEXT_TITLE'					=> 'Nội dung miêu tả',
	'LBL_DISCLOSURE_TEXT_SAMPLE'				=> 'Chú ý: Email này là dành cho các tin nhắn, sử dụng nhằm mục đích nguời nhận và có thể chứa các thông tin bí mật và được quyền.Không được phép xem xét, sử dụng, tiết lộ, hoặc phân phối . Nếu bạn không phải là nguời nhận diện, xin vui lòng xóa bỏ tất cả các bản sao bài viết và thông báo cho nguời gửi đi.Cám ơn bạn.',',
	
	'LBL_EMAIL_DEFAULT_CHARSET'					=> 'Soạn tin nhắn trong các ký tự cài đặt sẵn',
	'LBL_EMAIL_DEFAULT_CLIENT'					=> 'Soạn tin nhắn gửi email ở định dạng này',
	'LBL_EMAIL_DEFAULT_EDITOR'					=> 'Soạn thư mà khách hàng này sử dụng',
	'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS'		=> 'Xoá liên các ghi chú có liên quan& xóa các tập tin đính kèm với email',
	'LBL_EMAIL_GMAIL_DEFAULTS'					=> 'Điền Gmail mặc định',
	'LBL_EMAIL_PER_RUN_REQ'						=> 'Số lượng Email gửi cho mỗi đợt:',
	'LBL_EMAIL_SMTP_SSL'						=> 'Kích hoạt tính năng SMTP qua SSL',
	'LBL_EMAIL_USER_TITLE'						=> 'Sử dụng Email mặc định',
	'LBL_EMAILS_PER_RUN'						=> 'Số lượng các email được gửi cho mỗi đợt:',
	'LBL_ID'									=> 'Id',
	'LBL_LIST_CAMPAIGN'							=> 'Chiến dịch',
	'LBL_LIST_FORM_PROCESSED_TITLE'				=> 'Quá trình',
	'LBL_LIST_FORM_TITLE'						=> 'Xêp hàng',
	'LBL_LIST_FROM_EMAIL'						=> 'Từ Email',
	'LBL_LIST_FROM_NAME'						=> 'Từ tên',
	'LBL_LIST_IN_QUEUE'							=> 'Trong quá trình',
	'LBL_LIST_MESSAGE_NAME'						=> 'Thông điệp tiếp thị',
	'LBL_LIST_RECIPIENT_EMAIL'					=> 'Người nhận Email',
	'LBL_LIST_RECIPIENT_NAME'					=> 'Tên người nhận',
	'LBL_LIST_SEND_ATTEMPTS'					=> 'Gửi ý',
	'LBL_LIST_SEND_DATE_TIME'					=> 'Ngày gửi',
	'LBL_LIST_USER_NAME'						=> 'Tên người sử dụng',
	'LBL_LOCATION_ONLY'							=> 'Địa phương',
	'LBL_LOCATION_TRACK'						=> 'Địa điểm theo dõi các tập tin (như campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY'                     => 'Giữ lại bản sao thông báo bài viết:',
    'LBL_CAMP_MESSAGE_COPY_DESC'                => 'Bạn có muốn lưu trữ đầy đủ các bản sao của <bold> mỗi </ bold> email được gửi trong khi tất các quá trình? <bold> Chúng tôi khuyên bạn nên để mặc định và không có </ bold>. Lựa chọn sẽ không có hàng chỉ có bản mẫu được gửi và sự cần thiết để biến lí các tin nhắn cá nhân.',
	'LBL_MAIL_SENDTYPE'							=> 'Nơi trung chuyển Email:',
	'LBL_MAIL_SMTPAUTH_REQ'						=> 'Sử dụng tính xác thực SMTP?',
	'LBL_MAIL_SMTPPASS'							=> 'Mật khẩu SMTP:',
	'LBL_MAIL_SMTPPORT'							=> 'Cổng SMTP:',
	'LBL_MAIL_SMTPSERVER'						=> 'SMTP Chủ:',
	'LBL_MAIL_SMTPUSER'							=> 'Tên người sử dụng SMTP:',
	'LBL_MARKETING_ID'							=> 'Marketing Id',
    'LBL_MODULE_ID'                             => 'EmailMan',
	'LBL_MODULE_NAME'							=> 'Cài đặt Email',
	'LBL_CAMP_MODULE_NAME'						=> 'Quá trình cài đặt Email',
	'LBL_MODULE_TITLE'							=> 'Quản lý xếp hạng Email ',
	'LBL_NOTIFICATION_ON_DESC' 					=> 'Gửi email thông báo khi hồ sơ được phân công.',
	'LBL_NOTIFY_FROMADDRESS' 					=> '"Từ" địa chỉ:',
	'LBL_NOTIFY_FROMNAME' 						=> '"Từ" Tên:',
	'LBL_NOTIFY_ON'								=> 'Thông báo về?',
	'LBL_NOTIFY_SEND_BY_DEFAULT'				=> 'Gửi thông báo mặc định cho người dùng mới?',
	'LBL_NOTIFY_TITLE'							=> 'Thông báo tùy chọn Email',
	'LBL_OLD_ID'								=> 'Id cũ',
	'LBL_OUTBOUND_EMAIL_TITLE'					=> 'Gửi Email tùy chọn',
	'LBL_RELATED_ID'							=> 'Liên quan đến Id',
	'LBL_RELATED_TYPE'							=> 'Loại liên quan',
	'LBL_SAVE_OUTBOUND_RAW'						=> 'Lưu Email ban đầu',
	'LBL_SEARCH_FORM_PROCESSED_TITLE'			=> 'Quá trình tìm kiếm',
	'LBL_SEARCH_FORM_TITLE'						=> 'Hạn định tìm kiếm',
	'LBL_VIEW_PROCESSED_EMAILS'					=> 'Xem quá trình tạo Emails',
	'LBL_VIEW_QUEUED_EMAILS'					=> 'Xem xếp hạng tạo Emails',
	'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'	=> 'Giá trị của Config.php cài đặt site_url',
	'TXT_REMOVE_ME_ALT'							=> 'Để loại bỏ tài khoản ra khỏi danh sách email này đến',
	'TXT_REMOVE_ME_CLICK'						=> 'Bấm vào đây',
	'TXT_REMOVE_ME'								=> 'Để loại bỏ tài khoản ra khỏi danh sách email này đến ',
	'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'		=> 'Gửi thông báo từ giao việc sử dụng\'s địa chỉ?',

	'LBL_SECURITY_TITLE'						=> 'Bảo mật cài đặt Email',
	'LBL_SECURITY_DESC'							=> 'Kiểm tra, sau đó không được cho phép trong InboundEmail hoặc thông qua các email được hiển thị trong mô-đun',
	'LBL_SECURITY_APPLET'						=> 'Applet tag',
	'LBL_SECURITY_BASE'							=> 'Base tag',
	'LBL_SECURITY_EMBED'						=> 'Embed tag',
	'LBL_SECURITY_FORM'							=> 'Form tag',
	'LBL_SECURITY_FRAME'						=> 'Frame tag',
	'LBL_SECURITY_FRAMESET'						=> 'Frameset tag',
	'LBL_SECURITY_IFRAME'						=> 'iFrame tag',
	'LBL_SECURITY_IMPORT'						=> 'Import tag',
	'LBL_SECURITY_LAYER'						=> 'Layer tag',
	'LBL_SECURITY_LINK'							=> 'Link tag',
	'LBL_SECURITY_OBJECT'						=> 'Object tag',
	'LBL_SECURITY_OUTLOOK_DEFAULTS'				=> 'Chọn Outlook mặc định tối thiểu cho an ninh phòng ngừa (lỗi trên bên là hiển thị đúng).',
	'LBL_SECURITY_PRESERVE_RAW'					=> 'Giữ nguyên thư điện tử mã nguồn, bao gồm các nội dung có khả năng gây hại.  Tùy chọn này sẽ chỉ giữ nguyên tin nhắn trong cơ sở dữ liệu; nó sẽ không cho phép unfiltered nội dung thông qua các SugarCRM UI. <br /> <span class="error"> Điều này có thể nguy cho hệ thống của bạn.</span>',
	'LBL_SECURITY_SCRIPT'						=> 'Script tag',
	'LBL_SECURITY_STYLE'						=> 'Style tag',
	'LBL_SECURITY_TOGGLE_ALL'					=> 'Chuyển tất cả các chế độ tùy chọn',
	'LBL_SECURITY_XMP'							=> 'Xmp tag',
    'LBL_YES'                                   => 'Có',
    'LBL_NO'                                    => 'Không',
    'LBL_PREPEND_TEST'                          => '[Test]: ',
	'LBL_SEND_ATTEMPTS'							=> 'Gửi ý',
);

?>
