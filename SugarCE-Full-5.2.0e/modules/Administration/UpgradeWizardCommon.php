<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * UpgradeWizardCommon
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



require_once('include/utils/db_utils.php');
require_once('include/utils/file_utils.php');
require_once('include/utils/zip_utils.php');
require_once('modules/Administration/Administration.php');
require_once('modules/Administration/UpgradeHistory.php');
require_once('include/dir_inc.php');

// increase the cuttoff time to 1 hour
ini_set("max_execution_time", "3600");

if( isset( $_REQUEST['view'] ) && ($_REQUEST['view'] != "") ){
    $view = $_REQUEST['view'];
    if( $view != "default" && $view != "module" ){
        die($mod_strings['ERR_UW_INVALID_VIEW']);
    }
}
else{
    die($mod_strings['ERR_UW_NO_VIEW']);
}
$form_action = "index.php?module=Administration&view=" . $view . "&action=UpgradeWizard";


$base_upgrade_dir       = $sugar_config['upload_dir'] . "/upgrades";
$base_tmp_upgrade_dir   = "$base_upgrade_dir/temp";
$GLOBALS['subdirs'] = array('full', 'langpack', 'module', 'patch', 'theme', 'temp');
// array of special scripts that are executed during (un)installation-- key is type of script, value is filename

if(!defined('SUGARCRM_PRE_INSTALL_FILE'))
{
	define('SUGARCRM_PRE_INSTALL_FILE', 'scripts/pre_install.php');
	define('SUGARCRM_POST_INSTALL_FILE', 'scripts/post_install.php');
	define('SUGARCRM_PRE_UNINSTALL_FILE', 'scripts/pre_uninstall.php');
	define('SUGARCRM_POST_UNINSTALL_FILE', 'scripts/post_uninstall.php');
}
$script_files = array(
	"pre-install" => constant('SUGARCRM_PRE_INSTALL_FILE'),
	"post-install" => constant('SUGARCRM_POST_INSTALL_FILE'),
	"pre-uninstall" => constant('SUGARCRM_PRE_UNINSTALL_FILE'),
	"post-uninstall" => constant('SUGARCRM_POST_UNINSTALL_FILE'),
);


function extractFile( $zip_file, $file_in_zip ){
    global $base_tmp_upgrade_dir;
	if(empty($base_tmp_upgrade_dir)){
    	$base_tmp_upgrade_dir   = $GLOBALS['sugar_config']['upload_dir'] . "upgrades/temp";
    }
    $my_zip_dir = mk_temp_dir( $base_tmp_upgrade_dir );
    unzip_file( $zip_file, $file_in_zip, $my_zip_dir );
    return( "$my_zip_dir/$file_in_zip" );
}

function extractManifest( $zip_file ){
    return( extractFile( $zip_file, "manifest.php" ) );
}

function getInstallType( $type_string ){
    // detect file type
    global $subdirs;
	
    foreach( $subdirs as $subdir ){
        if( preg_match( "#/$subdir/#", $type_string ) ){
            return( $subdir );
        }
    }
    // return empty if no match
    return( "" );
}

function getImageForType( $type ){
    global $image_path;
    $icon = "";
    switch( $type ){
        case "full":
            $icon = get_image( $image_path . "Upgrade", "" );
            break;
        case "langpack":
            $icon = get_image( $image_path . "LanguagePacks", "" );
            break;
        case "module":
            $icon = get_image( $image_path . "ModuleLoader", "" );
            break;
        case "patch":
            $icon = get_image( $image_path . "PatchUpgrades", "" );
            break;
        case "theme":
            $icon = get_image( $image_path . "Themes", "" );
            break;
        default:
            break;
    }
    return( $icon );
}

function getLanguagePackName( $the_file ){
    require_once( "$the_file" );
    if( isset( $app_list_strings["language_pack_name"] ) ){
        return( $app_list_strings["language_pack_name"] );
    }
    return( "" );
}

function getUITextForType( $type ){
    if( $type == "full" ){
        return( "Full Upgrade" );
    }
    if( $type == "langpack" ){
        return( "Language Pack" );
    }
    if( $type == "module" ){
        return( "Module" );
    }
    if( $type == "patch" ){
        return( "Patch" );
    }
    if( $type == "theme" ){
        return( "Theme" );
    }
}

function run_upgrade_wizard_sql( $script ){
    global $unzip_dir;
    global $sugar_config;

    $db_type = $sugar_config['dbconfig']['db_type'];
    $script = str_replace( "%db_type%", $db_type, $script );
    if( !run_sql_file( "$unzip_dir/$script" ) ){
        die( "{$mod_strings['ERR_UW_RUN_SQL']} $unzip_dir/$script" );
    }
}

function validate_manifest( $manifest ){
    // takes a manifest.php manifest array and validates contents
    global $subdirs;
    global $sugar_version;
    global $sugar_flavor;
	global $mod_strings;

    if( !isset($manifest['type']) ){
        die($mod_strings['ERROR_MANIFEST_TYPE']);
    }
    $type = $manifest['type'];
    if( getInstallType( "/$type/" ) == "" ){
        die($mod_strings['ERROR_PACKAGE_TYPE']. ": '" . $type . "'." );
    }

    if( isset($manifest['acceptable_sugar_versions']) ){
        $version_ok = false;
        $matches_empty = true;
        if( isset($manifest['acceptable_sugar_versions']['exact_matches']) ){
            $matches_empty = false;
            foreach( $manifest['acceptable_sugar_versions']['exact_matches'] as $match ){
                if( $match == $sugar_version ){
                    $version_ok = true;
                }
            }
        }
        if( !$version_ok && isset($manifest['acceptable_sugar_versions']['regex_matches']) ){
            $matches_empty = false;
            foreach( $manifest['acceptable_sugar_versions']['regex_matches'] as $match ){
                if( preg_match( "/$match/", $sugar_version ) ){
                    $version_ok = true;
                }
            }
        }

        if( !$matches_empty && !$version_ok ){
            die( $mod_strings['ERROR_VERSION_INCOMPATIBLE'] . $sugar_version );
        }
    }

    if( isset($manifest['acceptable_sugar_flavors']) && sizeof($manifest['acceptable_sugar_flavors']) > 0 ){
        $flavor_ok = false;
        foreach( $manifest['acceptable_sugar_flavors'] as $match ){
            if( $match == $sugar_flavor ){
                $flavor_ok = true;
            }
        }
        if( !$flavor_ok ){
            die( $mod_strings['ERROR_FLAVOR_INCOMPATIBLE'] . $sugar_flavor );
        }
    }
}

function getDiffFiles($unzip_dir, $install_file, $is_install = true, $previous_version = ''){
	//require_once($unzip_dir . '/manifest.php');
	global $installdefs;
	if(!empty($previous_version)){
		//check if the upgrade path exists
		if(!empty($upgrade_manifest)){
			if(!empty($upgrade_manifest['upgrade_paths'])){
				if(!empty($upgrade_manifest['upgrade_paths'][$previous_version])){
					$installdefs = 	$upgrade_manifest['upgrade_paths'][$previous_version];
				}
			}//fi
		}//fi
	}//fi
	$modified_files = array();
	if(!empty($installdefs['copy'])){
		foreach($installdefs['copy'] as $cp){
			$cp['to'] = clean_path(str_replace('<basepath>', $unzip_dir, $cp['to']));
			$restore_path = remove_file_extension(urldecode($install_file))."-restore/";
			$backup_path = clean_path($restore_path.$cp['to'] );
			//check if this file exists in the -restore directory
			if(file_exists($backup_path)){
				//since the file exists, then we want do an md5 of the install version and the file system version
				$from = $backup_path;
				$needle = $restore_path;
				if(!$is_install){
					$from = str_replace('<basepath>', $unzip_dir, $cp['from']);
					$needle = $unzip_dir;
				}
				$files_found = md5DirCompare($from.'/', $cp['to'].'/', array('.svn'), false);
				if(count($files_found > 0)){
					foreach($files_found as $key=>$value){
						$modified_files[] = str_replace($needle, '', $key);
					}
				}
			}//fi
		}//rof
	}//fi
	return $modified_files;		
}
?>
