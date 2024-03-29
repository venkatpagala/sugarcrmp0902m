<?php
 if(!defined('sugarEntry'))define('sugarEntry', true);
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
//session_destroy();
if (version_compare(phpversion(),'5.1.0') < 0) {
	$msg = 'Minimum PHP version required is 5.1.0.  You are using PHP version  '. phpversion();
    die($msg);
}
session_start();
$GLOBALS['installing'] = true;
define('SUGARCRM_IS_INSTALLING', $GLOBALS['installing']);
$GLOBALS['sql_queries'] = 0;
require_once('include/SugarLogger/LoggerManager.php');
require_once('sugar_version.php');
require_once('include/utils.php');
require_once('install/install_utils.php');
require_once('install/install_defaults.php');
require_once('include/TimeDate.php');
require_once('include/Localization/Localization.php');

//check to see if the script files need to be rebuilt, add needed variables to request array
    $_REQUEST['root_directory'] = getcwd();
    $_REQUEST['js_rebuild_concat'] = 'rebuild';
    require_once('jssource/minify.php');

$timedate = new TimeDate();
// cn: set php.ini settings at entry points
setPhpIniSettings();
$locale = new Localization();

if(get_magic_quotes_gpc() == 1) {
   $_REQUEST = array_map("stripslashes_checkstrings", $_REQUEST);
   $_POST = array_map("stripslashes_checkstrings", $_POST);
   $_GET = array_map("stripslashes_checkstrings", $_GET);
}


$GLOBALS['log'] = LoggerManager::getLogger('SugarCRM');
$setup_sugar_version = $sugar_version;
$install_script = true;

///////////////////////////////////////////////////////////////////////////////
////	INSTALLER LANGUAGE

$supportedLanguages = array(
	'en_us'	=> 'English (US)',
	'ja'	=> 'Japanese - 日本語',
	'fr_fr'	=> 'French - Français',
//	'ge_ge'	=> 'German - Deutch',
//	'pt_br'	=> 'Portuguese (Brazil)',
//	'es_es'	=> 'Spanish (Spain) - Español',
);

// after install language is selected, use that pack
$default_lang = 'en_us';
if(!isset($_POST['language']) && (!isset($_SESSION['language']) && empty($_SESSION['language']))) {
	if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']) && !empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
		$lang = parseAcceptLanguage();
		if(isset($supportedLanguages[$lang])) {
			$_POST['language'] = $lang;
		} else {
			$_POST['language'] = $default_lang;
	    }
	}
}

if(isset($_POST['language'])) {
	$_SESSION['language'] = strtolower(str_replace('-','_',$_POST['language']));
}

$current_language = isset($_SESSION['language']) ? $_SESSION['language'] : $default_lang;

if(file_exists("install/language/{$current_language}.lang.php")) {
	require_once("install/language/{$current_language}.lang.php");
} else {
	require_once("install/language/{$default_lang}.lang.php");
}

if($current_language != 'en_us') {
	$my_mod_strings = $mod_strings;
	include('install/language/en_us.lang.php');
	$mod_strings = sugarArrayMerge($mod_strings, $my_mod_strings);
}
////	END INSTALLER LANGUAGE
///////////////////////////////////////////////////////////////////////////////

//get the url for the helper link
$help_url = get_help_button_url();



//if this license print, then redirect and exit,
if(isset($_REQUEST['page']) && $_REQUEST['page'] == 'licensePrint')
{
    include('install/licensePrint.php');
    exit ();
}

//check to see if mysqli is enabled
if(function_exists('mysqli_connect')){
    $_SESSION['mysql_type'] = 'mysqli';
}

//if this is a system check, then just run the check and return,
//this is an ajax call and there is no need for further processing
if(isset($_REQUEST['checkInstallSystem']) && ($_REQUEST['checkInstallSystem'])){
    require_once('install/installSystemCheck.php');
    echo runCheck($install_script, $mod_strings);
    return;
}

//if this is a DB Settings check, then just run the check and return,
//this is an ajax call and there is no need for further processing
if(isset($_REQUEST['checkDBSettings']) && ($_REQUEST['checkDBSettings'])){
    require_once('install/checkDBSettings.php');
    echo checkDBSettings();
    return;
}

//maintaining the install_type if earlier set to custom
if(isset($_REQUEST['install_type']) && $_REQUEST['install_type'] == 'custom'){
	$_SESSION['install_type'] = $_REQUEST['install_type'];
}

//set the default settings into session
foreach($installer_defaults as $key =>$val){
    if(!isset($_SESSION[$key])){
        $_SESSION[$key] = $val;
    }
}

// always perform
clean_special_arguments();
print_debug_comment();
$next_clicked = false;
$next_step = 0;

// use a simple array to map out the steps of the installer page flow
$workflow = array(  'welcome.php',
                    'license.php',
                    'installType.php',
);





$workflow[] =  'systemOptions.php';
$workflow[] = 'dbConfig_a.php';
//$workflow[] = 'dbConfig_b.php';

//define web root, which will be used as default for site_url
if($_SERVER['SERVER_PORT']=='80'){
    $web_root = $_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
}else{
    $web_root = $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['PHP_SELF'];
}
$web_root = str_replace("/install.php", "", $web_root);
$web_root = "http://$web_root";

 if(!isset($_SESSION['oc_install']) ||  $_SESSION['oc_install'] == false) {
    $workflow[] = 'siteConfig_a.php';
    if(isset($_SESSION['install_type'])  && !empty($_SESSION['install_type'])  && $_SESSION['install_type']=='custom'){
        $workflow[] = 'siteConfig_b.php';
    }
 } else {
    if(is_readable('config.php')) {
        require_once('config.php');












    }
 }

   // set the form's php var to the loaded config's var else default to sane settings
    if(!isset($_SESSION['setup_site_url'])  || empty($_SESSION['setup_site_url'])){
        if(isset($sugar_config['site_url']) && !empty($sugar_config['site_url'])){
            $_SESSION['setup_site_url']= $sugar_config['site_url'];
        }else{
         $_SESSION['setup_site_url']= $web_root;
        }
    }
    if(!isset($_SESSION['setup_system_name']) || empty($_SESSION['setup_system_name'])){$_SESSION['setup_system_name'] = 'SugarCRM';}
    if(!isset($_SESSION['setup_site_session_path']) || empty($_SESSION['setup_site_session_path'])){$_SESSION['setup_site_session_path']                = (isset($sugar_config['session_dir']))   ? $sugar_config['session_dir']  :  '';}
    if(!isset($_SESSION['setup_site_log_dir']) || empty($_SESSION['setup_site_log_dir'])){$_SESSION['setup_site_log_dir']                     = (isset($sugar_config['log_dir']))       ? $sugar_config['log_dir']      : '.';}
    if(!isset($_SESSION['setup_site_guid']) || empty($_SESSION['setup_site_guid'])){$_SESSION['setup_site_guid']                        = (isset($sugar_config['unique_key']))    ? $sugar_config['unique_key']   :  '';}

















  $workflow[] = 'localization.php';
  $workflow[] = 'confirmSettings.php';
  $workflow[] = 'performSetup.php';

  if(!isset($_SESSION['oc_install']) ||  $_SESSION['oc_install'] == false){
    if(isset($_SESSION['install_type'])  && !empty($_SESSION['install_type'])  && $_SESSION['install_type']=='custom'){
        //$workflow[] = 'download_patches.php';
        $workflow[] = 'download_modules.php';
    }
  }

    $workflow[] = 'register.php';


// increment/decrement the workflow pointer
if(!empty($_REQUEST['goto'])) {
    switch($_REQUEST['goto']) {
        case $mod_strings['LBL_CHECKSYS_RECHECK']:
            $next_step = $_REQUEST['current_step'];
            break;
        case $mod_strings['LBL_BACK']:
            $next_step = $_REQUEST['current_step'] - 1;
            break;
        case $mod_strings['LBL_NEXT']:
        case $mod_strings['LBL_START']:
            $next_step = $_REQUEST['current_step'] + 1;
            $next_clicked = true;
            break;
        case 'SilentInstall':
            $next_step = 9999;
            break;
		case 'oc_convert':
            $next_step = 9191;
            break;
    }
}







$exclude_files = array('register.php','download_modules.php');
if(isset($next_step) && !in_array($workflow[$next_step],$exclude_files) && isset($sugar_config['installer_locked']) && $sugar_config['installer_locked'] == true) {
    $the_file = 'installDisabled.php';
	$disabled_title = $mod_strings['LBL_DISABLED_DESCRIPTION'];
	$disabled_title_2 = $mod_strings['LBL_DISABLED_TITLE_2'];
	$disabled_text =<<<EOQ
		<p>{$mod_strings['LBL_DISABLED_DESCRIPTION']}</p>
		<pre>
			'installer_locked' => false,
		</pre>
		<p>{$mod_strings['LBL_DISABLED_DESCRIPTION_2']}</p>

		<p>{$mod_strings['LBL_DISABLED_HELP_1']} <a href="{$mod_strings['LBL_DISABLED_HELP_LNK']}" target="_blank">{$mod_strings['LBL_DISABLED_HELP_2']}</a>.</p>
EOQ;
}
else{
$validation_errors = array();
// process the data posted
if($next_clicked) {
	// store the submitted data because the 'Next' button was clicked
    switch($workflow[trim($_REQUEST['current_step'])]) {
        case 'welcome.php':
        break;
      case 'license.php':
                $_SESSION['setup_license_accept']   = get_boolean_from_request('setup_license_accept');
                $_SESSION['license_submitted']      = true;
                $_SESSION['language']               = $_REQUEST['language'];

           // eventually default all vars here, with overrides from config.php
            if(is_readable('config.php')) {
            	global $sugar_config;
                include_once('config.php');
            }

            $default_db_type = 'mysql';







            if(!isset($_SESSION['setup_db_type'])) {
                $_SESSION['setup_db_type'] = empty($sugar_config['dbconfig']['db_type']) ? $default_db_type : $sugar_config['dbconfig']['db_type'];
            }

            break;
        case 'installType.php':
            $_SESSION['install_type']   = $_REQUEST['install_type'];
            if(isset($_REQUEST['setup_license_key']) && !empty($_REQUEST['setup_license_key'])){
                $_SESSION['setup_license_key']  = $_REQUEST['setup_license_key'];
            }
            $_SESSION['licenseKey_submitted']      = true;












            break;

        case 'systemOptions.php':
            $_SESSION['setup_db_type'] = $_REQUEST['setup_db_type'];
            $validation_errors = validate_systemOptions();
            if(count($validation_errors) > 0) {
                $next_step--;
            }
            break;

        case 'dbConfig_a.php':
            //validation is now done through ajax call to checkDBSettings.php
            if(isset($_REQUEST['setup_db_drop_tables'])){
                $_SESSION['setup_db_drop_tables'] = $_REQUEST['setup_db_drop_tables'];
                if($_SESSION['setup_db_drop_tables']=== true || $_SESSION['setup_db_drop_tables'] == 'true'){
                    $_SESSION['setup_db_create_database'] = false;
                }
            }
            break;

        case 'siteConfig_a.php':
            if(isset($_REQUEST['setup_site_url'])){$_SESSION['setup_site_url']          = $_REQUEST['setup_site_url'];}
            if(isset($_REQUEST['setup_system_name'])){$_SESSION['setup_system_name']    = $_REQUEST['setup_system_name'];}
            $_SESSION['setup_site_admin_password']              = $_REQUEST['setup_site_admin_password'];
            $_SESSION['setup_site_admin_password_retype']       = $_REQUEST['setup_site_admin_password_retype'];
            $_SESSION['siteConfig_submitted']               = true;

            $validation_errors = array();
            $validation_errors = validate_siteConfig('a');
            if(count($validation_errors) > 0) {
                $next_step--;
            }
            break;
        case 'siteConfig_b.php':
            $_SESSION['setup_site_sugarbeet_automatic_checks'] = get_boolean_from_request('setup_site_sugarbeet_automatic_checks');

            $_SESSION['setup_site_custom_session_path']     = get_boolean_from_request('setup_site_custom_session_path');
            if($_SESSION['setup_site_custom_session_path']){
                $_SESSION['setup_site_session_path']            = $_REQUEST['setup_site_session_path'];
            }else{
                $_SESSION['setup_site_session_path'] = '';
            }

            $_SESSION['setup_site_custom_log_dir']          = get_boolean_from_request('setup_site_custom_log_dir');
            if($_SESSION['setup_site_custom_log_dir']){
                $_SESSION['setup_site_log_dir']                 = $_REQUEST['setup_site_log_dir'];
            }else{
                $_SESSION['setup_site_log_dir'] = '.';
            }

            $_SESSION['setup_site_specify_guid']            = get_boolean_from_request('setup_site_specify_guid');
            if($_SESSION['setup_site_specify_guid']){
                $_SESSION['setup_site_guid']                    = $_REQUEST['setup_site_guid'];
            }else{
                $_SESSION['setup_site_guid'] = '';
            }
            $_SESSION['siteConfig_submitted']               = true;
            if(isset($_REQUEST['setup_site_sugarbeet_anonymous_stats'])){
                $_SESSION['setup_site_sugarbeet_anonymous_stats'] = get_boolean_from_request('setup_site_sugarbeet_anonymous_stats');
            }else{
                $_SESSION['setup_site_sugarbeet_anonymous_stats'] = 0;
            }

            $validation_errors = array();
            $validation_errors = validate_siteConfig('b');
            if(count($validation_errors) > 0) {
                $next_step--;
            }
            break;





























        case 'localization.php':
        	$_SESSION['default_date_format'] = $_REQUEST['default_date_format'];
        	$_SESSION['default_time_format'] = $_REQUEST['default_time_format'];
        	if(isset($_REQUEST['default_language'])){$_SESSION['default_language'] = $_REQUEST['default_language'];}
        	if(isset($_REQUEST['default_locale_name_format'])){$_SESSION['default_locale_name_format'] = $_REQUEST['default_locale_name_format'];}
        	if(isset($_REQUEST['default_email_charset'])){$_SESSION['default_email_charset'] = $_REQUEST['default_email_charset'];}
        	if(isset($_REQUEST['default_export_charset'])){$_SESSION['default_export_charset'] = $_REQUEST['default_export_charset'];}
        	if(isset($_REQUEST['export_delimiter'])){$_SESSION['export_delimiter'] = $_REQUEST['export_delimiter'];}
        	$_SESSION['default_currency_name'] = $_REQUEST['default_currency_name'];
        	$_SESSION['default_currency_symbol'] = $_REQUEST['default_currency_symbol'];
        	$_SESSION['default_currency_iso4217'] = $_REQUEST['default_currency_iso4217'];
        	$_SESSION['default_currency_significant_digits'] = $_REQUEST['default_currency_significant_digits'];
        	$_SESSION['default_number_grouping_seperator'] = $_REQUEST['default_number_grouping_seperator'];
        	$_SESSION['default_decimal_seperator'] = $_REQUEST['default_decimal_seperator'];

			$validation_errors = validate_localization();
            $validation_errors = array();
			if(count($validation_errors) > 0) {
				$next_step--;
   			 }
        break;
}
    }

if($next_step == 9999) {
    $the_file = 'SilentInstall';
}else if($next_step == 9191) {
	$_SESSION['oc_server_url']	= $_REQUEST['oc_server_url'];
    $_SESSION['oc_username']    = $_REQUEST['oc_username'];
    $_SESSION['oc_password']   	= $_REQUEST['oc_password'];
    $the_file = 'oc_convert.php';
}
else{
        $the_file = $workflow[$next_step];

}

switch($the_file) {
    case 'welcome.php':
    case 'license.php':
        // check to see if installer has been disabled
        if(is_readable('config.php') && (filesize('config.php') > 0)) {
            include_once('config.php');

			//
			// Check to see if session variables are working properly
			//
			$_SESSION['test_session'] = 'sessions are available';
			session_write_close();
			unset($_SESSION['test_session']);
			session_start();

			if(!isset($_SESSION['test_session']))
			{
                $the_file = 'installDisabled.php';
				// PHP.ini location -
				$phpIniLocation = get_cfg_var("cfg_file_path");
				$disabled_title = $mod_strings['LBL_SESSION_ERR_TITLE'];
				$disabled_title_2 = $mod_strings['LBL_SESSION_ERR_TITLE'];
				$disabled_text = $mod_strings['LBL_SESSION_ERR_DESCRIPTION']."<pre>{$phpIniLocation}</pre>";
			}
            elseif(!isset($sugar_config['installer_locked']) || $sugar_config['installer_locked'] == true) {
                $the_file = 'installDisabled.php';
				$disabled_title = $mod_strings['LBL_DISABLED_DESCRIPTION'];
				$disabled_title_2 = $mod_strings['LBL_DISABLED_TITLE_2'];
				$disabled_text =<<<EOQ
					<p>{$mod_strings['LBL_DISABLED_DESCRIPTION']}</p>
					<pre>
						'installer_locked' => false,
					</pre>
					<p>{$mod_strings['LBL_DISABLED_DESCRIPTION_2']}</p>

					<p>{$mod_strings['LBL_DISABLED_HELP_1']} <a href="{$mod_strings['LBL_DISABLED_HELP_LNK']}" target="_blank">{$mod_strings['LBL_DISABLED_HELP_2']}</a>.</p>
EOQ;
				                //if this is an offline client installation but the conversion did not succeed,
                //then try to convert again
                if(isset($sugar_config['disc_client']) && $sugar_config['disc_client'] == true && isset($sugar_config['oc_converted']) && $sugar_config['oc_converted'] == false) {
					 header('Location: index.php?entryPoint=oc_convert&first_time=true');
					exit ();
                }
            }
        }
        break;
    case 'register.php':
        session_unset();
        break;
    case 'SilentInstall':
        $si_errors = false;
        pullSilentInstallVarsIntoSession();
        $validation_errors = validate_dbConfig('a');
        if(count($validation_errors) > 0) {
            $the_file = 'dbConfig_a.php';
            $si_errors = true;
        }
        $validation_errors = validate_siteConfig('a');
        if(count($validation_errors) > 0) {
            $the_file = 'siteConfig_a.php';
            $si_errors = true;
        }
        $validation_errors = validate_siteConfig('b');
        if(count($validation_errors) > 0) {
            $the_file = 'siteConfig_b.php';
            $si_errors = true;
        }

        if(!$si_errors){
            $the_file = 'performSetup.php';
        }
        //since this is a SilentInstall we still need to make sure that
        //the appropriate files are writable
        // config.php
        make_writable('./config.php');

        // custom dir
        make_writable('./custom');

        // modules dir
        recursive_make_writable('./modules');

        // data dir
        make_writable('./data');
        make_writable('./data/upload');

        // cache dir
        make_writable('./cache/custom_fields');
        make_writable('./cache/dyn_lay');
        make_writable('./cache/images');
        make_writable('./cache/import');
        make_writable('./cache/layout');
        make_writable('./cache/pdf');
        make_writable('./cache/upload');
        make_writable('./cache/xml');

        // check whether we're getting this request from a command line tool
        // we want to output brief messages if we're outputting to a command line tool
        $cli_mode = false;
        if(isset($_REQUEST['cli']) && ($_REQUEST['cli'] == 'true')) {
            $_SESSION['cli'] = true;
            // if we have errors, just shoot them back now
            if(count($validation_errors) > 0) {
                foreach($validation_errors as $error) {
                    print($mod_strings['ERR_ERROR_GENERAL']."\n");
                    print("    " . $error . "\n");
                    print("Exit 1\n");
                    exit(1);
                }
            }
        }










        break;
	}
}

$the_file = clean_string($the_file, 'FILE');
// change to require to get a good file load error message if the file is not available.
$css = 'install/install.css';
$icon = 'include/images/sugar_icon.ico';
$sugar_md = 'include/images/sugar_md.png';
$loginImage = 'include/images/sugarcrm_login.png';
$common = 'install/installCommon.js';
require('install/' . $the_file);

?>
