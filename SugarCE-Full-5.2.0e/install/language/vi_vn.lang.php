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

	'LBL_SYSOPTS_1'						=> 'Select from the following system configuration options below.',
    'LBL_SYSOPTS_2'                     => 'What type of database will be used for the Sugar instance you are about to install?',
	'LBL_SYSOPTS_CONFIG'				=> 'System Configuration',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Specify Database Type',
    'LBL_SYSOPTS_DB_TITLE'              => 'Database Type',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Please fix the following errors before proceeding:',






































	'DEFAULT_CHARSET'					=> 'UTF-8',
	'ERR_ADMIN_PASS_BLANK'				=> 'Provide the password for the Sugar admin user. ',

    //'ERR_CHECKSYS_CALL_TIME'			=> 'Allow Call Time Pass Reference is Off (please enable in php.ini)',
    'ERR_CHECKSYS'                      => 'Errors have been detected during compatibility check.  In order for your SugarCRM Installation to function properly, please take the proper steps to address the issues listed below and either press the recheck button, or try installing again.',
    'ERR_CHECKSYS_CALL_TIME'            => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL'					=> 'Not found: Sugar Scheduler will run with limited functionality.',
	'ERR_CHECKSYS_IMAP'					=> 'Not found: InboundEmail and Campaigns (Email) require the IMAP libraries. Neither will be functional.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Magic Quotes GPC cannot be turned "On" when using MS SQL Server.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Warning: ',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> ' (Set this to ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M or larger in your php.ini file)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimum Version 4.1.2 - Found: ',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Failed to write and read session variables.  Unable to proceed with the installation.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Not A Valid Directory',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Warning: Not Writable',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Your version of PHP is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is ',
	'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Unsupported PHP Version Installed: ( ver',
    'LBL_DB_UNAVAILABLE'                => 'Database unavailable',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Database Support was not found.  Please make sure you have the necessary drivers for one of the following supported Database Types: MySQL, MS SQLServer, or Oracle.  You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP.  Please refer to your PHP Manual for more information on how to enable Database Support.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Functions associated with XML Parser Libraries that are needed by the Sugar application were not found.  You might need to uncomment the extension in the  php.ini file, or recompile with the right binary file, depending on your version of PHP.  Please refer to your PHP Manual for more information.',
    'ERR_CHECKSYS_MBSTRING'             => 'Functions associated with the Multibyte Strings PHP extension (mbstring) that are needed by the Sugar application were not found. <br/><br/>Generally, the mbstring module is not enabled by default in PHP and must be activated with --enable-mbstring when the PHP binary is built. Please refer to your PHP Manual for more information on how to enable mbstring support.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'The session.save_path setting in your php configuration file (php.ini) is not set or is set to a folder which did not exist. You might need to set the save_path setting in php.ini or verify that the folder sets in save_path exist.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'The session.save_path setting in your php configuration file (php.ini) is set to a folder which is not writeable.  Please take the necessary steps to make the folder writeable.  <br>Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'The config file exists but is not writeable.  Please take the necessary steps to make the file writeable.  Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'The Custom Directory exists but is not writeable.  You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System.  Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "The files or directories listed below are not writeable or are missing and cannot be created.  Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 766), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
	//'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode is On (please disable in php.ini)',
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Safe Mode is On (you may wish to disable in php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Not Found: SugarCRM reaps enormous performance benefits with zlib compression.',
	'ERR_DB_ADMIN'						=> 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established.  Please enter a valid user name and password.  (Error: ',
    'ERR_DB_ADMIN_MSSQL'                => 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established.  Please enter a valid user name and password.',
	'ERR_DB_EXISTS_NOT'					=> 'The specified database does not exist.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Database already exists with config data.  To run an install with the chosen database, please re-run the install and choose: "Drop and recreate existing SugarCRM tables?"  To upgrade, use the Upgrade Wizard in the Admin Console.  Please read the upgrade documentation located <a href="http://www.sugarforge.org/content/downloads/" target="_new">here</a>.',
	'ERR_DB_EXISTS'						=> 'The provided Database Name already exists -- cannot create another one with the same name.',
    'ERR_DB_EXISTS_PROCEED'             => 'The provided Database Name already exists.  You can<br>1.  hit the back button and choose a new database name <br>2.  click next and continue but all existing tables on this database will be dropped.  <strong>This means your tables and data will be blown away.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Host name cannot be blank.',
	'ERR_DB_INVALID'					=> 'Invalid database type selected.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'The provided database username and/or password is invalid, and a connection to the database could not be established.  Please enter a valid user name and password.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'The provided database username and/or password is invalid, and a connection to the database could not be established.  Please enter a valid user name and password.',
	'ERR_DB_MYSQL_VERSION1'				=> 'Your MySQL version (',
	'ERR_DB_MYSQL_VERSION2'				=> ') is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported MySQL versions.',
	'ERR_DB_NAME'						=> 'Database name cannot be blank.',
	'ERR_DB_NAME2'						=> "Database name cannot contain a '\\', '/', or '.'",
	'ERR_DB_PASSWORD'					=> 'The passwords provided for the Sugar database administrator do not match.  Please re-enter the same passwords in the password fields.',
	'ERR_DB_PRIV_USER'					=> 'Provide a database administrator user name.  The user is required for the initial connection to the database.',
	'ERR_DB_USER_EXISTS'				=> 'User name for Sugar database user already exists -- cannot create another one with the same name. Please enter a new user name.',
	'ERR_DB_USER'						=> 'Enter a user name for the Sugar database administrator.',
	'ERR_DBCONF_VALIDATION'				=> 'Please fix the following errors before proceeding:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'The passwords provided for the Sugar database user do not match. Please re-enter the same passwords in the password fields.',
	'ERR_ERROR_GENERAL'					=> 'The following errors were encountered:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Cannot delete file: ',
	'ERR_LANG_MISSING_FILE'				=> 'Cannot find file: ',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'No language pack file found at include/language inside: ',
	'ERR_LANG_UPLOAD_1'					=> 'There was a problem with your upload.  Please try again.',
	'ERR_LANG_UPLOAD_2'					=> 'Language Packs must be ZIP archives.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP could not move the temp file to the upgrade directory.',
	'ERR_LICENSE_MISSING'				=> 'Missing Required Fields',
	'ERR_LICENSE_NOT_FOUND'				=> 'License file not found!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Log directory provided is not a valid directory.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Log directory provided is not a writable directory.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Log directory is required if you wish to specify your own.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Unable to process script directly.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Cannot use the single quotation mark for ',
	'ERR_PASSWORD_MISMATCH'				=> 'The passwords provided for the Sugar admin user do not match.  Please re-enter the same passwords in the password fields.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Cannot write to the <span class=stop>config.php</span> file.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'You can continue this installation by manually creating the config.php file and pasting the configuration information below into the config.php file.  However, you <strong>must </strong>create the config.php file before you continue to the next step.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Did you remember to create the config.php file?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Warning: Could not write to config.php file.  Please ensure it exists.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Cannot write to the ',
	'ERR_PERFORM_HTACCESS_2'			=> ' file.',
	'ERR_PERFORM_HTACCESS_3'			=> 'If you want to secure your log file from being accessible via browser, create an .htaccess file in your log directory with the line:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>We could not detect an Internet connection.</b> When you do have a connection, please visit <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> to register with SugarCRM. By letting us know a little bit about how your company plans to use SugarCRM, we can ensure we are always delivering the right application for your business needs.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Session directory provided is not a valid directory.',
	'ERR_SESSION_DIRECTORY'				=> 'Session directory provided is not a writable directory.',
	'ERR_SESSION_PATH'					=> 'Session path is required if you wish to specify your own.',
	'ERR_SI_NO_CONFIG'					=> 'You did not include config_si.php in the document root, or you did not define $sugar_config_si in config.php',
	'ERR_SITE_GUID'						=> 'Application ID is required if you wish to specify your own.',
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Upload File Size',
	'ERR_URL_BLANK'						=> 'Provide the base URL for the Sugar instance.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Could not locate installation record of',
	'ERROR_FLAVOR_INCOMPATIBLE'			=> 'The uploaded file is not compatible with this flavor (Community Edition, Professional, or Enterprise) of Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Error: Your license expired ",
	'ERROR_LICENSE_EXPIRED2'			=> " day(s) ago.   Please go to the <a href='index.php?action=LicenseSettings&module=Administration'>'\"License Management\"</a>  in the Admin screen to enter your new license key.  If you do not enter a new license key within 30 days of your license key expiration, you will no longer be able to log in to this application.",
	'ERROR_MANIFEST_TYPE'				=> 'Manifest file must specify the package type.',
	'ERROR_PACKAGE_TYPE'				=> 'Manifest file specifies an unrecognized package type',
	'ERROR_VALIDATION_EXPIRED'			=> "Error: Your validation key expired ",
	'ERROR_VALIDATION_EXPIRED2'			=> " day(s) ago.   Please go to the <a href='index.php?action=LicenseSettings&module=Administration'>'\"License Management\"</a> in the Admin screen to enter your new validation key.  If you do not enter a new validation key within 30 days of your validation key expiration, you will no longer be able to log in to this application.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'The uploaded file is not compatible with this version of Sugar: ',

	'LBL_BACK'							=> 'Back',
    'LBL_CANCEL'                        => 'Cancel',
    'LBL_ACCEPT'                        => 'I Accept',
	'LBL_CHECKSYS_1'					=> 'In order for your SugarCRM installation to function properly, please ensure all of the system check items listed below are green. If any are red, please take the necessary steps to fix them.<BR><BR> For help on these system checks, please visit the <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Writable Cache Sub-Directories',
	//'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference Turned On',
    'LBL_DROP_DB_CONFIRM'               => 'The provided Database Name already exists.<br>You can either:<br>1.  Click on the Cancel button and choose a new database name, or <br>2.  Click the Accept button and continue.  All existing tables in the database will be dropped. <strong>This means that all of the tables and pre-existing data will be blown away.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP Allow Call Time Pass Reference Turned Off',
    'LBL_CHECKSYS_COMPONENT'			=> 'Component',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Optional Components',
	'LBL_CHECKSYS_CONFIG'				=> 'Writable SugarCRM Configuration File (config.php)',
	'LBL_CHECKSYS_CURL'					=> 'cURL Module',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Session Save Path Setting',
	'LBL_CHECKSYS_CUSTOM'				=> 'Writeable Custom Directory',
	'LBL_CHECKSYS_DATA'					=> 'Writable Data Sub-Directories',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP Module',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB Strings Module',
	'LBL_CHECKSYS_MEM_OK'				=> 'OK (No Limit)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'OK (Unlimited)',
	'LBL_CHECKSYS_MEM'					=> 'PHP Memory Limit >= ',
	'LBL_CHECKSYS_MODULE'				=> 'Writable Modules Sub-Directories and Files',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'MySQL Version',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Not Available',
	'LBL_CHECKSYS_OK'					=> 'OK',
	'LBL_CHECKSYS_PHP_INI'				=> '<b>Note:</b> Your php configuration file (php.ini) is located at:',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver ',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP Version',
	'LBL_CHECKSYS_RECHECK'				=> 'Re-check',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP Safe Mode Turned Off',
	'LBL_CHECKSYS_SESSION'				=> 'Writable Session Save Path (',
	'LBL_CHECKSYS_STATUS'				=> 'Status',
	'LBL_CHECKSYS_TITLE'				=> 'System Check Acceptance',
	'LBL_CHECKSYS_VER'					=> 'Được tìm thấy: (ver ',
	'LBL_CHECKSYS_XML'					=> 'XML Parsing',
	'LBL_CHECKSYS_ZLIB'					=> 'Module ZLIB nén',
    'LBL_CHECKSYS_FIX_FILES'            => 'Xin vui lòng sửa các tập tin hoặc thư mục trước khi tiếp tục:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Xin vui lòng sửa các module và thư mục các tập tin theo chúng trước khi tiếp tục:',
    'LBL_CLOSE'							=> 'Đóng',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'Được tạo',
	'LBL_CONFIRM_DB_TYPE'				=> 'Loại cơ sở dữ liệu',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Xin vui lòng xác nhận các cài đặt dưới đây. Nếu bạn muốn thay đổi bất kỳ giá trị, bấm vào nút "Quay lại" để chỉnh sửa. Nếu không, bấm vào "Tiếp tục" để bắt đầu cài đặt.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Giấy phép thông tin',
	'LBL_CONFIRM_NOT'					=> 'không',
	'LBL_CONFIRM_TITLE'					=> 'Xác nhận cài đặt',
	'LBL_CONFIRM_WILL'					=> 'Sẽ',
	'LBL_DBCONF_CREATE_DB'				=> 'Tạo cơ sở dữ liệu',
	'LBL_DBCONF_CREATE_USER'			=> 'Tạo user',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Thận trọng: Tất cả các đường dữ liệu sẽ được xoá hoàn toàn nếu <br> hộp này sẽ được kiểm tra.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Xóa và tạo lại các bảng đã tồn tại trong Sugar CRM?',
    'LBL_DBCONF_DB_DROP'                => 'Xóa bảng',
	'LBL_DBCONF_DB_NAME'				=> 'Tên cơ sở dữ liệu',
	'LBL_DBCONF_DB_PASSWORD'			=> 'Mật khẩu người dùng cơ sở dữ liệu Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Nhập lại cơ sở dữ liệu mật khẩu của người dùng',
	'LBL_DBCONF_DB_USER'				=> 'Cơ sở dữ liệu tên người dùng Sugar CRM',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'Cơ sở dữ liệu tên người dùng Sugar CRM',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Cơ sở dữ liệu người quản trị Sugar CRM',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Mật khẩu người quản trị Sugar CRM',
	'LBL_DBCONF_DEMO_DATA'				=> 'Cơ sở dữ liệu cùng với Demo Dữ liệu?',
    'LBL_DBCONF_DEMO_DATA_TITLE'              => 'Chọn Demo Dữ liệu',
	'LBL_DBCONF_HOST_NAME'				=> 'Tên máy chủ',
    'LBL_DBCONF_HOST_NAME_MSSQL'        => 'Tên máy chủ \ Máy chủ Instance',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Xin vui lòng nhập thông tin cấu hình cơ sở dữ liệu của bạn dưới đây. Nếu bạn không chắc chắn về những gì để điền vào trong, chúng tôi khuyên bạn nên sử dụng các giá trị mặc định.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Sử dụng nhiều byte dữ liệu văn bản trong bản giới thiệu?',
    'LBL_DBCONFIG_MSG2'                 => 'Tên của máy chủ trang web hoặc máy tính (máy chủ) mà trên đó các cơ sở dữ liệu nằm:',
    'LBL_DBCONFIG_MSG3'                 => 'Tên của cơ sở dữ liệu sẽ chứa dữ liệu Sugar để cài đặt:',
    'LBL_DBCONFIG_B_MSG1'               => 'Tên người dùng và mật khẩu của một người quản trị cơ sở dữ liệu có thể tạo bảng cơ sở dữ liệu và người dùng và những người có thể ghi vào cơ sở dữ liệu là cần thiết để lập Sugar CRM trong cơ sở dữ liệu.',
    'LBL_DBCONFIG_SECURITY'             => 'Đối với mục đích bảo mật, bạn có thể chỉ định một cơ sở dữ liệu người sử dụng độc quyền để kết nối vào cơ sở dữ liệu Sugar CRM. Người sử dụng này phải có khả năng viết, cập nhật và truy xuất dữ liệu trên cơ sở dữ liệu sẽ được tạo ra. Người sử dụng này có thể được cơ sở dữ liệu quản trị viên được chỉ định ở trên, hoặc bạn có thể cung cấp mới hoặc hiện có trong cơ sở dữ liệu thông tin người dùng.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Làm điều đó cho cá nhân',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Cung cấp cho người sử dụng hiện tại',
    'LBL_DBCONFIG_CREATE_DD'            => 'Xác định người sử dụng để tạo ra',
    'LBL_DBCONFIG_SAME_DD'              => 'Tương tự như người quản trị',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_MSSQL_FTS'                     => ' Tìm kiếm văn bản đầy đủ',
    'LBL_MSSQL_FTS_INSTALLED'           => 'Đã cài đặt',
    'LBL_MSSQL_FTS_INSTALLED_ERR1'      => 'Tìm kiếm văn bản đầy đủ có khả năng không được cài đặt.',
    'LBL_MSSQL_FTS_INSTALLED_ERR2'      => 'Bạn vẫn có thể cài đặt, nhưng sẽ không thể sử dụng chức năng tìm kiếm văn bản đầy đủ, trừ khi bạn cài đặt lại SQL Server với đầy đủ văn bản cho phép tìm kiếm. Xin vui lòng tham khảo tài liệu hướng dẫn cài đặt SQL Server làm cách nào để làm được điều này, hoặc liên hệ với Quản trị viên của bạn.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Cơ sở dữ liệu đặc quyền của người dùng Mật khẩu',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Cơ sở dữ liệu tài khoản trên đây là một đặc quyền người này?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Điều này đặc quyền cơ sở dữ liệu người dùng phải có quyền truy cập đúng để tạo ra một cơ sở dữ liệu, thả / tạo các bảng biểu, và tạo một người sử dụng. Điều này đặc quyền cơ sở dữ liệu người sử dụng sẽ chỉ được sử dụng để thực hiện các nhiệm vụ khi cần thiết trong tiến trình cài đặt. Bạn cũng có thể sử dụng cùng một cơ sở dữ liệu người sử dụng như nêu trên, nếu có người sử dụng đã có đầy đủ các quy định về.',
	'LBL_DBCONF_PRIV_USER'				=> 'Cơ sở dữ liệu đặc quyền người dùng',
	'LBL_DBCONF_TITLE'					=> 'Cấu hình cơ sở dữ liệu',
    'LBL_DBCONF_TITLE_NAME'             => 'Cung cấp cho tên cơ sở dữ liệu',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Cung cấp thông tin cơ sở dữ liệu cho người này',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Sau khi thay đổi này đã được thực hiện, bạn có thể nhấp vào nút "Bắt đầu" dưới đây để bắt đầu cài đặt của bạn. <i> Sau khi cài đặt hoàn tất, bạn sẽ muốn thay đổi giá trị cho \ Khóa cài đặt\ cho \ đúng \'. </ i>',
	'LBL_DISABLED_DESCRIPTION'			=> '	
Bộ cài đặt đã được chạy một lần. Với tư cách là một biện pháp an toàn, nó đã bị vô hiệu hoá từ chạy một lần thứ hai. Nếu bạn là hoàn toàn đảm bảo rằng bạn muốn chạy lại một lần nữa, xin vui lòng sử dụng tập tin config.php của bạn và vị trí (hay thêm) một biến gọi là \khóa người cài đạt\ và đặt nó vào \ sai \. Các dòng nên hình như:',
	'LBL_DISABLED_HELP_1'				=> 'Để cài đặt, giúp đỡ, xin vui lòng truy cập SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'Diễn đàn hỗ trợ',
	'LBL_DISABLED_TITLE_2'				=> 'SugarCRM đã được cài đặt vô hiệu hoá',
	'LBL_DISABLED_TITLE'				=> 'Đình chỉ cài đặt SugarCRM',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Đặt ký tự thường được sử dụng trong miền địa phương của bạn',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Cài đặt gửi email',
    'LBL_EMAIL_CHARSET_CONF'            => 'Đặt ký tự cho gửi Email',
	'LBL_HELP'							=> 'Trợ giúp',
    'LBL_INSTALL'                       => 'Cài đặt',
    'LBL_INSTALL_TYPE_TITLE'            => 'Công cụ cài đặt',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Chọn kiểu cài đặt',
    'LBL_INSTALL_TYPE_TYPICAL'          => ' <b>Loại cài đặt</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => ' <b>Chỉnh định cài đặt</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Các phím được yêu cầu chung cho các ứng dụng chức năng, nhưng nó không phải là cần thiết để cài đặt. Bạn không cần phải nhập mã khóa vào thời điểm này, nhưng bạn sẽ cần phải cung cấp các khoá sau khi bạn đã cài đặt ứng dụng.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Yêu cầu tối thiểu các thông tin cho tiến trình cài đặt. Khuyến khích cho người dùng mới.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Cung cấp thêm các tùy chọn để cài đặt trong khi cài đặt. Hầu hết các tùy chọn này cũng có sẵn sau khi cài đặt, trong màn hình: admin. Khuyến khích cho người dùng cao cấp.',
	'LBL_LANG_1'						=> 'Để sử dụng một ngôn ngữ trong Sugar khác với ngôn ngữ mặc định (US-Tiếng Anh), bạn có thể tải lên và cài đặt các gói ngôn ngữ tại thời điểm này. Bạn sẽ có thể được đăng tải và cài đặt gói ngôn ngữ từ bên trong cũng như ứng dụng Sugar. Nếu bạn muốn bỏ qua bước này, hãy nhấp vào bước tiếp theo.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Cài đặt',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Dỡ bỏ',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Gỡ bỏ',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Tải lên',
	'LBL_LANG_NO_PACKS'					=> 'none',
	'LBL_LANG_PACK_INSTALLED'			=> 'Dưới đây là những gói ngôn ngữ nào đã được cài đặt ',
	'LBL_LANG_PACK_READY'				=> 'Dưới đây là những gói ngôn ngữ đã sẵn sàng để được cài đặt: ',
	'LBL_LANG_SUCCESS'					=> 'Các gói ngôn ngữ đã được tải lên thành công.',
	'LBL_LANG_TITLE'			   		=> 'Gói ngôn ngữ',
	'LBL_LANG_UPLOAD'					=> 'Tải lên gói ngôn ngữ',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Giấy phép phụ',
    'LBL_LICENSE_CHECKING'              => 'Kiểm tra các hệ thống tương thích.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Kiểm tra môi trường',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Xác minh DB credentials.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Thông qua hệ thống kiểm tra tính tương thích.',
    'LBL_LICENSE_REDIRECT'              => 'Chuyển hướng trong ',
	'LBL_LICENSE_DIRECTIONS'			=> 'Nếu bạn có giấy phép thông tin của bạn, xin vui lòng nhập nó trong các trường dưới đây.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Tải về nhập khóa',
	'LBL_LICENSE_EXPIRY'				=> 'Ngày hết hạn',
	'LBL_LICENSE_I_ACCEPT'				=> 'Tôi chấp nhận',
	'LBL_LICENSE_NUM_USERS'				=> 'Số người sử dụng',
	'LBL_LICENSE_OC_DIRECTIONS'			=> 'Xin vui lòng nhập số lượng khách hàng mua offline.',
	'LBL_LICENSE_OC_NUM'				=> 'Số giấy phép khách hàng offline',
	'LBL_LICENSE_OC'					=> 'Hồ sơ khách hàng của offline',
	'LBL_LICENSE_PRINTABLE'				=> 'Liên kết xem ',
    'LBL_PRINT_SUMM'                    => 'In Sơ lược về khách sạn',
	'LBL_LICENSE_TITLE_2'				=> 'Giấy phép SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'Thông tin giấy phép',
	'LBL_LICENSE_USERS'					=> 'Người dùng được cấp phép',

	'LBL_LOCALE_CURRENCY'				=> 'Cài đặt tiền tệ',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Mặc định tiền tệ',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Biểu tượng tiền tệ',
	'LBL_LOCALE_CURR_ISO'				=> 'Mã số loại tiền tệ (theo tiêu chuẩn ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> '1000s Separator',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Decimal Separator',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Ví dụ',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Tín hiệu số',
	'LBL_LOCALE_DATEF'					=> 'Định dạng ngày mặc định',
	'LBL_LOCALE_DESC'					=> 'Việc xác định các cài đặt miền địa phương sẽ được phản ánh trên toàn cầu trong Suger CRM.',
	'LBL_LOCALE_EXPORT'					=> 'Đặt ký tự cho Nhập / Xuất <br> <i> (Thư điện tử,. Csv, vCard, PDF, dữ liệu nhập khẩu) </ i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Xuất (.csv) Delimiter',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Cài đặt xuất nhập',
	'LBL_LOCALE_LANG'					=> 'Ngôn ngữ mặc định',
	'LBL_LOCALE_NAMEF'					=> 'Định dạng tên mặc định',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = salutation<br />f = Họ<br />l = Tên ',
	'LBL_LOCALE_NAME_FIRST'				=> 'David',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Dr.',
	'LBL_LOCALE_TIMEF'					=> 'Định dạng thời gian mặc định',
	'LBL_LOCALE_TITLE'					=> 'Cài đặt miền địa phương',
    'LBL_CUSTOMIZE_LOCALE'              => 'Chỉnh định cài đặt địa phương',
	'LBL_LOCALE_UI'						=> 'Giao diện người dùng',

	'LBL_ML_ACTION'						=> 'Tác động',
	'LBL_ML_DESCRIPTION'				=> 'Mô tả',
	'LBL_ML_INSTALLED'					=> 'Ngày cài đặt',
	'LBL_ML_NAME'						=> 'Tên',
	'LBL_ML_PUBLISHED'					=> 'Ngày công bố',
	'LBL_ML_TYPE'						=> 'Loại',
	'LBL_ML_UNINSTALLABLE'				=> 'Dỡ bỏ',
	'LBL_ML_VERSION'					=> 'Phiên bản',
	'LBL_MSSQL'							=> 'SQL Server',
	'LBL_MSSQL2'                        => 'SQL Server (FreeTDS)',
	'LBL_MYSQL'							=> 'MySQL',
	'LBL_NEXT'							=> 'Tiếp tục',
	'LBL_NO'							=> 'Không',
	'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Cài đặt mật khẩu trang quản trị ',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'Bảng kiểm toán / ',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Tạo tập tin cấu hình Sugar CRM',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Tạo cơ sở dữ liệu</b> ',
	'LBL_PERFORM_CREATE_DB_2'			=> ' <b>on</b> ',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Tạo cơ sở dữ liệu tên người dùng và mật khẩu...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Tạo dữ liệu mặc định Sugar CRM',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Tạo cơ sở dữ liệu cho người dùng và mật khẩu trên máy chủ...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Tạo mối quan hệ trên các bảng Sugar',
	'LBL_PERFORM_CREATING'				=> 'Đang tạo / ',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Đang tạo báo cáo mặc định',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Đang tạo công việc mặc định',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Chèn cài đặt mặc định',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Tạo người dùng mặc định',
	'LBL_PERFORM_DEMO_DATA'				=> 'Phổ biến cơ sở dữ liệu giới thiệu với các bảng dữ liệu (điều này có thể mất một thời gian ngắn)',
	'LBL_PERFORM_DONE'					=> 'Đã làm<br>',
	'LBL_PERFORM_DROPPING'				=> 'Đang xóa / ',
	'LBL_PERFORM_FINISH'				=> 'Hoàn thành',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Đang cập nhật thông tin về cấp phép',
	'LBL_PERFORM_OUTRO_1'				=> 'Cài đặt Sugar ',
	'LBL_PERFORM_OUTRO_2'				=> ' bây giờ thì hoàn thành!',
	'LBL_PERFORM_OUTRO_3'				=> 'Tổng thời gian: ',
	'LBL_PERFORM_OUTRO_4'				=> ' giây.',
	'LBL_PERFORM_OUTRO_5'				=> 'Khoảng bộ nhớ được sử dụng: ',
	'LBL_PERFORM_OUTRO_6'				=> ' bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'Hệ thống của bạn bây giờ đã được cài đặt và cấu hình để sử dụng.',
	'LBL_PERFORM_REL_META'				=> 'mối quan hệ tiếp ... ',
	'LBL_PERFORM_SUCCESS'				=> 'Thành công!',
	'LBL_PERFORM_TABLES'				=> 'Sugar CRM tạo ra ứng dụng bảng biểu, bảng kiểm toán và mối quan hệ siêu dữ liệu',
	'LBL_PERFORM_TITLE'					=> 'Thực hiện các thiết lập',
	'LBL_PRINT'							=> 'In',
	'LBL_REG_CONF_1'					=> 'Please complete the short form below to receive product announcements, training news, special offers and special event invitations from SugarCRM. We do not sell, rent, share or otherwise distribute the information collected here to third parties.',
	'LBL_REG_CONF_2'					=> 'Tên và địa chỉ email của bạn là các trường bắt buộc duy nhất để đăng ký. Tất cả các trường khác là tùy chọn, nhưng rất có ích. Chúng tôi không bán, cho thuê, chia sẻ hay có bất kỳ hành động cung cấp thông tin thu thập được ở đây đối với bên thứ ba.',
	'LBL_REG_CONF_3'					=> 'Cảm ơn bạn đã đăng ký. Nhấn vào nút Hoàn thành để đăng nhập vào SugarCRM. Bạn sẽ cần đăng nhập bằng tài khoản "admin" và mật khẩu nhập ở bước 2 trong lần đăng nhập đầu tiên.',
	'LBL_REG_TITLE'						=> 'Đăng ký',
    'LBL_REG_NO_THANKS'                 => 'Không, cảm ơn',
    'LBL_REG_SKIP_THIS_STEP'            => 'Bỏ qua bước này',
	'LBL_REQUIRED'						=> '* Trường bắt buộc',

    'LBL_SITECFG_ADMIN_Name'            => 'Tên admin ứng dụng Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Nhập lại mật khẩu admin Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Chú ý: Sẽ ghi đè lên mật khẩu admin của các lần cài đặt trước.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'Mật khẩu admin Sugar',
	'LBL_SITECFG_APP_ID'				=> 'Mã ứng dụng',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Nếu lựa chọn, bạn phải cung cấp một mã ứng dụng để ghi đè lên mã tự sinh. Mã này đảm bảo cho các phiên làm việc của một thể hiện Sugar không bị sử dụng bởi các thể hiện khác.  Nếu bạn có một cụm cài đặt Sugar thì tất cả phải chia sẻ cùng mã ứng dụng.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Provide Your Own Application ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'If selected, you must specify a log directory to override the default directory for the Sugar log. Regardless of where the log file is located, access to it through a web browser will be restricted via an .htaccess redirect.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Use a Custom Log Directory',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'If selected, you must provide a secure folder for storing Sugar session information. This can be done to prevent session data from being vulnerable on shared servers.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Use a Custom Session Directory for Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'Please enter your site configuration information below. If you are unsure of the fields, we suggest that you use the default values.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Please fix the following errors before proceeding:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Thư mục Log',
	'LBL_SITECFG_SESSION_PATH'			=> 'Path to Session Directory<br>(must be writable)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Lựa chọn các tùy chọn bảo mật',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Nếu lựa chọn, hệ thống sẽ kiểm tra các bản cập nhật cho ứng dụng theo định kỳ.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Tự động kiểm tra cập nhật?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'Cấu hình Sugar Update',
	'LBL_SITECFG_TITLE'					=> 'Cấu hình Site',
    'LBL_SITECFG_TITLE2'                => 'Xác định thể hiện Sugar của bạn',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Bảo mật Site',
	'LBL_SITECFG_URL'					=> 'URL của thể hiện Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Sử dụng mặc định?',
	'LBL_SITECFG_ANONSTATS'             => 'Send Anonymous Usage Statistics?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'If selected, Sugar will send <b>anonymous</b> statistics about your installation to SugarCRM Inc. every time your system checks for new versions. This information will help us better understand how the application is used and guide improvements to the product.',
    'LBL_SITECFG_URL_MSG'               => 'Enter the URL that will be used to access the Sugar instance after installation. The URL will also be used as a base for the URLs in the Sugar application pages. The URL should include the web server or machine name or IP address.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Nhập vào tên cho hệ thống của bạn.  Tên này sẽ được hiển thị trong thanh tiêu đề của trình duyệt khi người sử dụng ghé thăm ứng dụng Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Sau khi cài đặt, bạn cần sử dụng tài khoản admin Sugar (Tên người dùng = admin) để đăng nhập vào Sugar. Nhập vào mật khẩu cho tài khoản quản trị này. Mật khẩu này có thể thay đổi sau khi đăng nhập.',
    'LBL_SYSTEM_CREDS'                  => 'Các chứng nhận hệ thống',
    'LBL_SYSTEM_ENV'                    => 'Môi trường hệ thống',
	'LBL_START'							=> 'Bắt đầu',
    'LBL_SHOW_PASS'                     => 'Hiện mật khẩu',
    'LBL_HIDE_PASS'                     => 'Ẩn mật khẩu',
    'LBL_HIDDEN'                        => '<i>(ẩn)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Lựa chọn ngôn ngữ</b>',
	'LBL_STEP'							=> 'Bước',
	'LBL_TITLE_WELCOME'					=> 'Chào mừng tới SugarCRM ',
	'LBL_WELCOME_1'						=> 'Việc cài đặt này tạo ra các bảng cơ sở dữ liệu Sugar và thiết lập các biến cấu hình bạn cần để bắt đầu. Toàn bộ quá trình sẽ mất khoảng 10 phút.',
	'LBL_WELCOME_2'						=> 'Để cài đặt tài liệu hướng dẫn, xin vui lòng tới <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> Bạn cũng có thể tìm thấy sự hỗ trợ từ cộng đồng Sugar ở <a href="http://www.sugarcrm.com/forums/" target="_blank">Sugar Forums</a>.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Bạn đã sẵn sàng cài đặt?',
    'REQUIRED_SYS_COMP' => 'Required System Components',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Trước khi bắt đầu, xin vui lòng đảm bảo rằng bạn có các phiên bản hỗ trợ các thành phần sau của hệ thống:<br>
                      <ul>
                      <li> Cơ sở dữ liệu/Hệ quản trị cơ sở dữ liệu (Ví dụ: MySQL, SQL Server, Oracle)</li>
                      <li> Máy chủ Web (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the Sugar version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'Initial System Check',
    'REQUIRED_SYS_CHK_MSG' =>
                    'When you begin the installation process, a system check will be performed on the web server on which the Sugar files are located in order to
                      make sure the system is configured properly and has all of the necessary components
                      to successfully complete the installation. <br><br>
                      The system checks all of the following:<br>
                      <ul>
                      <li><b>phiên bản PHP</b> &#8211; phải tương thích
                      với ứng dụng</li>
                                        <li><b>Session Variables</b> &#8211; must be working properly</li>
                                            <li> <b>MB Strings</b> &#8211; must be installed and enabled in php.ini</li>

                      <li> <b>Database Support</b> &#8211; must exist for MySQL, SQL
                      Server or Oracle</li>

                      <li> <b>Config.php</b> &#8211; must exist and must have the appropriate
                                  permissions to make it writeable</li>
					  <li>The following Sugar files must be writeable:<ul><li><b>/custom</li>
<li>/cache</li>
<li>/modules</b></li></ul></li></ul>
                                  If the check fails, you will not be able to proceed with the installation. An error message will be displayed, explaining why your system
                                  did not pass the check.
                                  After making any necessary changes, you can undergo the system
                                  check again to continue the installation.<br>',
    'REQUIRED_INSTALLTYPE' => 'Typical or Custom install',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    'After the system check is performed, you can choose either
                      the Typical or the Custom installation.<br><br>
                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br>
                      <ul>
                      <li> <b>Type of database</b> that will house the Sugar data <ul><li>Compatible database
                      types: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li>
                      <li> <b>Name of the web server</b> or machine (host) on which the database is located
                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your Sugar files.<br><br></li></ul></li>
                      <li><b>Name of the database</b> that you would like to use to house the Sugar data</li>
                        <ul>
                          <li> You might already have an existing database that you would like to use. If
                          you provide the name of an existing database, the tables in the database will
                          be dropped during installation when the schema for the Sugar database is defined.</li>
                          <li> If you do not already have a database, the name you provide will be used for
                          the new database that is created for the instance during installation.<br><br></li>
                        </ul>
                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to
                      contact your database administrator for this information if the database is
                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li>
                      <li> <b>Sugar database user name and password</b>
                      </li>
                        <ul>
                          <li> The user may be the database administrator, or you may provide the name of
                          another existing database user. </li>
                          <li> If you would like to create a new database user for this purpose, you will
                          be able to provide a new username and password during the installation process,
                          and the user will be created during installation. </li>
                        </ul></ul><p>

                      For the <b>Custom</b> setup, you might also need to know the following:<br>
                      <ul>
                      <li> <b>URL that will be used to access the Sugar instance</b> after it is installed.
                      This URL should include the web server or machine name or IP address.<br><br></li>
                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom
                                  session directory for Sugar information in order to prevent session data from
                                  being vulnerable on shared servers.<br><br></li>
                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the Sugar log.<br><br></li>
                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated
                                  ID that ensures that sessions of one Sugar instance are not used by other instances.<br><br></li>
                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul>
                                  For more detailed information, please consult the Installation Guide.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Xin vui lòng đọc thông tin quan trọng sau trước khi tiến hành cài đặt.  Thông tin này sẽ giúp bạn xác định đã sẵn sàng cài đặt ứng dụng vào thời điểm này hay chưa.',




	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Lựa chọn ngôn ngữ</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Setup Wizard',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Chào mừng tới SugarCRM ',
	'LBL_WELCOME_TITLE'					=> 'SugarCRM Setup Wizard',
	'LBL_WIZARD_TITLE'					=> 'Sugar Setup Wizard: ',
	'LBL_YES'							=> 'Yes',
    'LBL_YES_MULTI'                     => 'Yes - Multibyte',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Process Workflow Tasks',
	'LBL_OOTB_REPORTS'		=> 'Run Report Generation Scheduled Tasks',
	'LBL_OOTB_IE'			=> 'Check Inbound Mailboxes',
	'LBL_OOTB_BOUNCE'		=> 'Run Nightly Process Bounced Campaign Emails',
    'LBL_OOTB_CAMPAIGN'		=> 'Run Nightly Mass Email Campaigns',
	'LBL_OOTB_PRUNE'		=> 'Prune Database on 1st of Month',
    'LBL_OOTB_TRACKER'		=> 'Prune tracker tables',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Update tracker_sessions table',







    'LBL_PATCHES_TITLE'     => 'Cài đặt bản vá mới nhất',
    'LBL_MODULE_TITLE'      => 'Tải về và cài đặt gói ngôn ngữ',
    'LBL_PATCH_1'           => 'Nếu bạn muốn bỏ qua bước này, nhấn Tiếp tục.',
    'LBL_PATCH_TITLE'       => 'Bản vá hệ thống',
    'LBL_PATCH_READY'       => 'Các bản vá sau đã sãn sàng cài đặt:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM relies upon PHP sessions to store important information while connected to this web server.  Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory.  <br>
											<br> Xin vui lòng chỉnh sửa <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>cấu hình PHP</a> của bạn trong file php.ini ở địa chỉ sau.",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP Sessions Configuration Error',
	'LBL_SYSTEM_NAME'=>'Tên hệ thống',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Cung cấp tên hệ thống cho thể hiện Sugar.',
	'LBL_PATCH_UPLOAD' => 'Lựa chọn bản vá từ máy của bạn',
	'LBL_INCOMPATIBLE_PHP_VERSION' => 'Yêu cầu phiên bản PHP 5 hoặc cao hơn.',
	'LBL_MINIMUM_PHP_VERSION' => 'Yêu cầu phiên bản PHP tối thiểu là 5.1.0. Đề nghị phiên bản PHP 5.2.x.',
	'LBL_YOUR_PHP_VERSION' => '(Phiên bản PHP của bạn hiện tại là ',
	'LBL_RECOMMENDED_PHP_VERSION' =>' Đề nghị phiên bản PHP là 5.2.x)',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',
);

?>
