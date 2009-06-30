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

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Module chỉ định đã được cài đặt:',
	'DESC_MODULES_QUEUED'						=> 'Module chỉ định đã được sẵn sàng để cài đặt:',

	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Không thể định nhóm',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Không thể định chủ quyền',
	'ERR_UW_CONFIG_WRITE'						=> 'Lỗi cập nhậP config.php với thông tin bản mới.',
	'ERR_UW_CONFIG'								=> 'Xin hãy làm cho tập tin config.php có thể ghi và tải lại trang này.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Đường dẫn không thể ghi',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Tập tin không thể sao chép',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Có vấn đề khi di dời gói',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Tập tin không thể đọc.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Tập tin không thể di dời hoặc ghi đến',
	'ERR_UW_FLAVOR_2'							=> 'Nâng cấp theo ý muốn: ',
	'ERR_UW_FLAVOR'								=> 'Hệ thống SugarCRM theo ý muốn: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log không thể tạo/ghi tới.  Xin hãy chỉnh sự cho phép tới đường dẫn SugarCRM của bạn.',
	'ERR_UW_MBSTRING_FUNC_OVERLOAD'				=> 'mbstring.func_overload được đặt giá trị cao hơn 1. Xin hãy thay đổi điều này trong php.ini và khởi động lại máy chủ web.',
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM đòi hỏi MySQL phiên bản 4.1.2 hoặc mới hơn.  Tìm thấy: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Hãy chỉ rõ một tập tin và thử lại!',
	'ERR_UW_NO_FILES'							=> 'Một lỗi phát sinh, không có tập tin tìm thấy để kiểm tra.',
	'ERR_UW_NO_MANIFEST'						=> 'Tập tin zip bị thiếu sót tập tin manifest.php .  Không thể xử lý.',
	'ERR_UW_NO_VIEW'							=> 'Xem chỉ định không hợp lệ.',
	'ERR_UW_NO_VIEW2'							=> 'Xem không được định nghĩa.  Xin hãy đến trang chủ Quản trị để đến được trang này.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Tải lên không hợp lệ.',
	'ERR_UW_NO_CREATE_TMP_DIR'					=> 'Không thể tạo đường dẫn tạm thời. Kiểm tra sự cho phép của tập tin.',
	'ERR_UW_ONLY_PATCHES'						=> 'Bạn chỉ có thể tải bản vá ở trang này.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'Lỗi trong khi kiểm tra chuẩn bị',
	'ERR_UW_UPLOAD_ERR'							=> 'Có một lỗi khi tải tập tin, xin hãy thử lại!<br>\n',
	'ERR_UW_VERSION'							=> 'Hệ thống SugarCRM phiên bản: ',
	'ERR_UW_WRONG_TYPE'							=> 'Trang này không dùng để chạy ',
	'ERR_UW_PHP_FILE_ERRORS'					=> array(
													1 => 'Tập tin tải lên quá giới hạn cho phép trong php.ini.',
													2 => 'Tập tin tải lên quá giới hạn cho phép trong mẫu HTML.',
													3 => 'Tập tin tải lên không hoàn chỉnh.',
													4 => 'Không có tập tin được tải lên.',
													5 => 'Lỗi không xác định.',
													6 => 'Thiếu thư mục dự phòng.',
													7 => 'Thất bại ghi ghi tập tin ra đĩa.',
													8 => 'Tập tin tải lên bị dừng do phần mở rộng.',
												),
	'LBL_BUTTON_BACK'							=> 'Trở lại',
	'LBL_BUTTON_CANCEL'							=> 'Thôi',
	'LBL_BUTTON_DELETE'							=> 'Xoá gói',
	'LBL_BUTTON_DONE'							=> 'Xong',
	'LBL_BUTTON_INSTALL'						=> 'Chuẩn bị nâng cấp',
	'LBL_BUTTON_NEXT'							=> 'Tiếp',
	'LBL_BUTTON_RECHECK'						=> 'Kiểm tra lại',

	'LBL_UPLOAD_UPGRADE'						=> 'Tải lên một nâng cấp: ',
	'LBL_UPLOAD_FILE_NOT_FOUND'					=> 'Không tìm thấy tập tin tải lên',
	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Tập tin dự phòng',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Tập tin dự phong từ nâng cấp này có thể tìm thấy tại',
	'LBL_UW_BACKUP'								=> 'Tập tin dự phòng',
	'LBL_UW_CANCEL_DESC'						=> 'Giao diện nâng cấp đã bị huỷ. Tất cả tập tin tạm thời và tập tin zip tải lên đã bị xoá.<br><br>Nhấn "Xong" để khởi động lại giao diện nâng cấp.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Giản đồ tập hợp ký tự đã thay đổi',
	'LBL_UW_CHECK_ALL'							=> 'Chọn tất',
	'LBL_UW_CHECKLIST'							=> 'Các bước nâng cấp',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Dự phòng của tập tin bị ghi đè trong đường dẫn sau đây: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Trộn bằng tay tập tin sau:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Qui trình nâng cấp: Trộn bằng tay ',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Please use whichever diff method is most familiar to you to merge these files.  Until this is complete, your SugarCRM installation will be in an uncertain state, and the upgrade incomplete.',
	'LBL_UW_COMPLETE'							=> 'Hoàn tất',
	'LBL_UW_CONTINUE_CONFIRMATION'              => 'Phiên bản mới này kèm theo giấy cho phép mới. Bạn có muốn tiếp tục không?',
	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Tất cả yêu cầu của hệ thống đã được đáp ứng',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'PHP cài đặt: Tham khảo',
	'LBL_UW_COMPLIANCE_CURL'					=> 'cURL Module',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'IMAP Module',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'MBStrings Module',
	'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD'	=> 'MBStrings mbstring.func_overload Parameter',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'PHP cái đặt: Giới hạn bộ nhớ',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Phiên bản MySQL tối thiểu',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Vị trí của php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Phiên bản PHP tối thiểu',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'PHP cài đặt: Chế độ an toàn',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Kiêm tra cài đặt máy chủ',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Cài đặt được xác định',
	'LBL_UW_COMPLIANCE_XML'						=> 'Phân tích XML',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Tập tin sao chép thành công',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Cá nhân hoá thay đổi bảng giản đồ',

	'LBL_UW_DB_CHOICE1'							=> 'Giao diện nâng cấp chạy SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Truy vấn SQL tay',
	'LBL_UW_DB_INSERT_FAILED'					=> 'INSERT failed - compared results differ',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Database Privileges',
	'LBL_UW_DB_ISSUES'							=> 'Database Issues',
	'LBL_UW_DB_METHOD'							=> 'Database Update Method',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'All Privileges Available',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Necessary Privilege',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'The following upgrades have been installed:',
	'LBL_UW_END_DESC'							=> 'Congratulations, your system is now upgraded.',
	'LBL_UW_END_DESC2'							=> 'If you have chosen to manually run any steps such as file merges or SQL queries, please do this now.  Your system will be in an unstable state until those steps are completed.',
	'LBL_UW_END_LOGOUT'							=> 'Please log out of your account if you plan on upgrading further than this patch/upgrade level.',
	'LBL_UW_END_LOGOUT2'						=> 'Logout',
	'LBL_UW_REPAIR_INDEX'						=> 'For database performance improvements, please run the <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Repair Index</a> script.',

	'LBL_UW_FILE_DELETED'						=> " đã bị dời đi.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Nhóm',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Cho phép của tập tin',
	'LBL_UW_FILE_ISSUES'						=> 'Đưa ra tập tin',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'File Requires Manual Diff',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>All Files Writable</b>',
	'LBL_UW_FILE_OWNER'							=> 'Owner',
	'LBL_UW_FILE_PERMS'							=> 'Permissions',
	'LBL_UW_FILE_UPLOADED'						=> ' has been uploaded',
	'LBL_UW_FILE'								=> 'File Name',
	'LBL_UW_FILES_QUEUED'						=> 'The following upgrades are ready to be installed:',
	'LBL_UW_FILES_REMOVED'						=> "The following files will be removed from the system:<br>\n",

	'LBL_UW_FROZEN'								=> 'Required steps must be completed before continuing.',
	'LBL_UW_HIDE_DETAILS'						=> 'Hide Details',
	'LBL_UW_IN_PROGRESS'						=> 'In Progress',
	'LBL_UW_INCLUDING'							=> 'Including',
	'LBL_UW_INCOMPLETE'							=> 'Incomplete',
	'LBL_UW_INSTALL'							=> 'File INSTALL',
	'LBL_UW_MANUAL_MERGE'						=> 'File Merge',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Module is ready to be uninstalled.  Click \"Commit\" to proceed with installation.<br>\n",
	'LBL_UW_MODULE_READY'						=> "Module is ready to be installed.  Click \"Commit\" to proceed with installation.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'No recorded Upgrades detected.',
	'LBL_UW_NONE'								=> 'None',
	'LBL_UW_NOT_AVAILABLE'						=> 'Not available',
	'LBL_UW_OVERWRITE_DESC'						=> "All changed files will be overwritten, including any code customizations and template changes you have made. Are you sure you want to proceed?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Overwrite All Files',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Manual Merge - Preserve All',
	'LBL_UW_OVERWRITE_FILES'					=> 'Merge Method',
	'LBL_UW_PATCH_READY'						=> 'The patch is ready to proceed. Click the "Commit" button below to complete the upgrade process.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Notice: Customized Layouts Found</h2><br />The following file(s) have new fields or modified screen layouts applied via the Studio. The patch you are about to install also contains changes to the file(s). For <u>each file</u> you may:<br><ul><li>[<b>Default</b>] Retain your version by leaving the checkbox blank. The patch modifications will be ignored.</li>or<li>Accept the updated files by selecting the checkbox. Your layouts will need to be re-applied via Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Create Task Item for Manual Merge?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Preflight Check',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Differentiated ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Email Yourself a Reminder for Manual Merge?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'The files listed below have been modified.  Uncheck items that require a manual merge. <i>Any detected layout changes are automatically unchecked; checkmark any that should be overwritten.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'No Manual File Merge Required.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Not needed.',
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Auto-preserved Files:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'All Preflight tests passed. Press "Next" to commit these changes.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Toggle All Files',

	'LBL_UW_REBUILD_TITLE'						=> 'Rebuild Result',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Schema Changes',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Show Detected Settings',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Show Missing Database Permissions',
	'LBL_UW_SHOW_DETAILS'						=> 'Show Details',
	'LBL_UW_SHOW_DIFFS'							=> 'Show Files Requiring Manual Merge',
	'LBL_UW_SHOW_NW_FILES'						=> 'Show Files with Bad Permissions',
	'LBL_UW_SHOW_SCHEMA'						=> 'Show Schema Change Script',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Show Bad Queries',
	'LBL_UW_SHOW'								=> 'Show',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Skipped Files',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Skipping File Overwrites - Manual Merge Selected.',
	'LBL_UW_SQL_RUN'							=> 'Check when SQL has been manually run',
	'LBL_UW_START_DESC'							=> 'Welcome to the SugarCRM Upgrade Wizard. This wizard is designed to assist administrators when upgrading their SugarCRM instances.  Please follow the instructions carefully.',
	'LBL_UW_START_DESC2'						=> 'We highly recommend that you perform the upgrade on a cloned instance of your production server first.  Please backup the database and the system files (all of the files in the SugarCRM folder) before performing this operation.',
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'The new Upgrade Wizard will now resume the upgrade process. Please continue your upgrade.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Welcome to the new Upgrade Wizard',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Now checking, please wait.  This could take up to 30 seconds.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Finding all pertinent files to check.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Tập tin',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Tìm',

	'LBL_UW_TITLE_CANCEL'						=> 'Thôi',
	'LBL_UW_TITLE_COMMIT'						=> 'Gửi nâng cấp',
	'LBL_UW_TITLE_END'							=> 'Báo cáo',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Kiểm tra chuẩn bị',
	'LBL_UW_TITLE_START'						=> 'Bắt đầu',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Kiểm tra hệ thống',
	'LBL_UW_TITLE_UPLOAD'						=> 'Tải nâng cấp lên',
	'LBL_UW_TITLE'								=> 'Giao diện nâng cấp',
	'LBL_UW_UNINSTALL'							=> 'Gỡ bỏ',
	//500 upgrade labels
	'LBL_UW_ACCEPT_THE_LICENSE' 				=> 'Giấy phép',
	'LBL_UW_CONVERT_THE_LICENSE' 				=> 'Chuyển đổi giấy phép',
	'LBL_UW_CUSTOMIZED_OR_UPGRADED_MODULES'     => 'Nâng cấp/Cá nhân hoá module',
	'LBL_UW_FOLLOWING_MODULES_CUSTOMIZED'       => 'The following modules are detected as customized and preserved',
	'LBL_UW_FOLLOWING_MODULES_UPGRADED'         => 'The following modules are detected as Studio-customized and have been upgraded',

	'LBL_UW_SUGAR_COMMUNITY_EDITION_LICENSE'    => 'The Sugar Community Edition 5.0 uses GNU General Public License Version 3. This upgrade will convert your existing license to the new license displayed below.',

	'LBL_START_UPGRADE_IN_PROGRESS'             => 'Start in progress',
	'LBL_SYSTEM_CHECKS_IN_PROGRESS'             => 'System Checks in progress',
	'LBL_LICENSE_CHECK_IN_PROGRESS'             => 'License Check in progress',
	'LBL_PREFLIGHT_CHECK_IN_PROGRESS'           => 'Preflight Check in progress',
	'LBL_COMMIT_UPGRADE_IN_PROGRESS'            => 'Commit Upgrade in progress',
	'LBL_UPGRADE_SUMMARY_IN_PROGRESS'			=> 'Upgrade Summary in progress',
	'LBL_UPGRADE_IN_PROGRESS'                   => 'in progress     ',
	'LBL_UPGRADE_TIME_ELAPSED'                  => 'Time elapsed',
	'LBL_UPGRADE_CANCEL_IN_PROGRESS'			=> 'Upgrade Cancel and Cleanup in progress',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE'      => 'Upgrade may take some time',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS'           => 'Upload checks in progress',
    'LBL_UPLOADING_UPGRADE_PACKAGE'      		=> 'Uploading upgrade package... ',
    'LBL_UW_DORP_THE_OLD_SCHMEA' 				=> 'Would you like Sugar to drop the depricated 451 Schema ?',
	'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD'			=> 'Upgrade Wizard Drops old 451 schema',
	'LBL_UW_DROP_SCHEMA_MANUAL'					=> 'Manual Drop Schema Post Upgrade',
	'LBL_UW_DROP_SCHEMA_METHOD'					=> 'Old Schema Drop Method',
	'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP'			=> 'Show Old Schema that could be dropped',
	'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST'      => 'Skipped Queries',
	'LBL_INCOMPATIBLE_PHP_VERSION'              => 'Php version 5 or above is required.',
	'ERR_CHECKSYS_PHP_INVALID_VER'      => 'Your version of PHP is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is ',
	'LBL_BACKWARD_COMPATIBILITY_ON' 			=> 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
	//including some strings from moduleinstall that are used in Upgrade
	'LBL_ML_ACTION' => 'Hành động',
    'LBL_ML_CANCEL'             => 'Thôi',
    'LBL_ML_COMMIT'=>'Cập nhật lên',
    'LBL_ML_DESCRIPTION' => 'Mô tả',
    'LBL_ML_INSTALLED' => 'Ngày cài đặt',
    'LBL_ML_NAME' => 'Tên',
    'LBL_ML_PUBLISHED' => 'Ngày công bố',
    'LBL_ML_TYPE' => 'Dạng',
    'LBL_ML_UNINSTALLABLE' => 'Có thể gỡ bỏ',
    'LBL_ML_VERSION' => 'Phiên bản',
	'LBL_ML_INSTALL'=>'Cài đặt',
	//adding the string used in tracker. copying from homepage
	'LBL_HOME_PAGE_4_NAME' => 'Bộ dò',
 );
?>
