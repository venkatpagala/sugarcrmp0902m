<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * UpgradeWizard_prepare
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



require_once('modules/Administration/UpgradeWizardCommon.php');
require_once('modules/Administration/UpgradeHistory.php');
if(defined('TEMPLATE_URL'))SugarTemplateUtilities::disableCache();
unset($_SESSION['rebuild_relationships']);
unset($_SESSION['rebuild_extensions']);
// process commands
if(!isset($_REQUEST['install_file']) || ($_REQUEST['install_file'] == "")){
    die( "File to install not specified." );
}
if( !isset($_REQUEST['mode']) || ($_REQUEST['mode'] == "") ){
    die( "No mode specified." );
}

$unzip_dir      = mk_temp_dir( $base_tmp_upgrade_dir );
$install_file   = urldecode( $_REQUEST['install_file'] );    
$hidden_fields = "";
$new_lang_name = "";
$new_lang_desc = "";

$mode           = $_REQUEST['mode'];
$hidden_fields .= "<input type=hidden name=\"mode\" value=\"$mode\"/><br>\n";


$install_type   = getInstallType( $install_file );

$version        = "";
$previous_version = "";
$show_files     = true;

$zip_from_dir   = ".";
$zip_to_dir     = ".";
$zip_force_copy = array();
$license_file = $unzip_dir.'/LICENSE.txt';
$readme_file  = $unzip_dir.'/README.txt';
$require_license = false;
$found_readme = false;
$author = '';
$name = '';
$description = '';
$is_uninstallable = true;
$id_name = '';
$dependencies = array();
$remove_tables = 'true';

unzip( $install_file, $unzip_dir );
if($install_type == 'module' && $mode != 'Uninstall'){
   if(file_exists($license_file)){
        $require_license = true;
   }
}

// assumption -- already validated manifest.php at time of upload
require_once( "$unzip_dir/manifest.php" );

if( isset( $manifest['copy_files']['from_dir'] ) && $manifest['copy_files']['from_dir'] != "" ){
    $zip_from_dir   = $manifest['copy_files']['from_dir'];
}
if( isset( $manifest['copy_files']['to_dir'] ) && $manifest['copy_files']['to_dir'] != "" ){
    $zip_to_dir     = $manifest['copy_files']['to_dir'];
}
if( isset( $manifest['copy_files']['force_copy'] ) && $manifest['copy_files']['force_copy'] != "" ){
    $zip_force_copy     = $manifest['copy_files']['force_copy'];
}
if( isset( $manifest['version'] ) ){
    $version    = $manifest['version'];
}
if( isset( $manifest['author'] ) ){
    $author    = $manifest['author'];
}
if( isset( $manifest['name'] ) ){
    $name    = $manifest['name'];
}
if( isset( $manifest['description'] ) ){
    $description    = $manifest['description'];
}
if( isset( $manifest['is_uninstallable'] ) ){
    $is_uninstallable    = $manifest['is_uninstallable'];
}
if(isset($installdefs) && isset( $installdefs['id'] ) ){
    $id_name    = $installdefs['id'];
}
if( isset( $manifest['dependencies']) ){
    $dependencies    = $manifest['dependencies'];
}
if( isset( $manifest['remove_tables']) ){
    $remove_tables = $manifest['remove_tables'];
}
if($remove_tables != 'prompt'){
	$hidden_fields .= "<input type=hidden name=\"remove_tables\" value='".$remove_tables."'><br>\n";
}
if(file_exists($readme_file) || !empty($manifest['readme'])){
        $found_readme = true;
   }
$uh = new UpgradeHistory();
//check dependencies first
if(!empty($dependencies)){
	$not_found = $uh->checkDependencies($dependencies);
	if(!empty($not_found) && count($not_found) > 0){
			die( $mod_strings['ERR_UW_NO_DEPENDENCY']."[".implode(',', $not_found)."]");
	}//fi
}
switch( $install_type ){
    case "full":
    case "patch":
        if( !is_writable( "config.php" ) ){
            die( $mod_strings['ERR_UW_CONFIG'] );
        }
        break;
    case "theme":
        break;
    case "langpack":
        // find name of language pack: find single file in include/language/xx_xx.lang.php
        $d = dir( "$unzip_dir/$zip_from_dir/include/language" );
        while( $f = $d->read() ){
            if( $f == "." || $f == ".." ){
                continue;
            }
            else if( preg_match("/(.*)\.lang\.php\$/", $f, $match) ){
                $new_lang_name = $match[1];
            }
        }
        if( $new_lang_name == "" ){
            die( $mod_strings['ERR_UW_NO_LANGPACK'].$install_file );
        }
        $hidden_fields .= "<input type=hidden name=\"new_lang_name\" value=\"$new_lang_name\"/><br>\n";

        $new_lang_desc = getLanguagePackName( "$unzip_dir/$zip_from_dir/include/language/$new_lang_name.lang.php" );
        if( $new_lang_desc == "" ){
            die( $mod_strings['ERR_UW_NO_LANG_DESC_1']."include/language/$new_lang_name.lang.php".$mod_strings['ERR_UW_NO_LANG_DESC_2']."$install_file." );
        }
        $hidden_fields .= "<input type=hidden name=\"new_lang_desc\" value=\"$new_lang_desc\"/><br>\n";

        if( !is_writable( "config.php" ) ){
            die( $mod_strings['ERR_UW_CONFIG'] );
        }
        break;
    case "module":
    	$previous_install = array();
    	if(!empty($id_name) & !empty($version))
    		$previous_install = $uh->determineIfUpgrade($id_name, $version);
    	$previous_version = (empty($previous_install['version'])) ? '' : $previous_install['version'];
    	$previous_id = (empty($previous_install['id'])) ? '' : $previous_install['id'];
        $show_files = false;
        //rrs pull out unique_key
         $hidden_fields .= "<input type=hidden name=\"author\" value=\"$author\"/><br>\n";
         $hidden_fields .= "<input type=hidden name=\"name\" value=\"$name\"/><br>\n";
         $hidden_fields .= "<input type=hidden name=\"description\" value=\"$description\"/><br>\n";
         $hidden_fields .= "<input type=hidden name=\"is_uninstallable\" value=\"$is_uninstallable\"/><br>\n";
         $hidden_fields .= "<input type=hidden name=\"id_name\" value=\"$id_name\"/><br>\n";
         $hidden_fields .= "<input type=hidden name=\"previous_version\" value=\"$previous_version\"/><br>\n";
         $hidden_fields .= "<input type=hidden name=\"previous_id\" value=\"$previous_id\"/><br>\n";
        break;
    default:
        die( $mod_strings['ERR_UW_WRONG_TYPE'].$install_type );
}


$new_files      = findAllFilesRelative( "$unzip_dir/$zip_from_dir", array() );
$hidden_fields .= "<input type=hidden name=\"version\" value=\"$version\"/><br>\n";
$serial_manifest = array();
$serial_manifest['manifest'] = (isset($manifest) ? $manifest : '');
$serial_manifest['installdefs'] = (isset($installdefs) ? $installdefs : '');
$serial_manifest['upgrade_manifest'] = (isset($upgrade_manifest) ? $upgrade_manifest : '');
$hidden_fields .= "<input type=hidden name=\"s_manifest\" value='".base64_encode(serialize($serial_manifest))."'><br>\n";
// present list to user
?>
<form action="<?php print( $form_action . "_commit" ); ?>" name="files" method="post"  onSubmit="return validateForm(<?php print($require_license); ?>);">
<?php
    switch( $mode ){
        case "Install":
            if( $install_type == "module" ){
                print( $mod_strings['LBL_UW_MODULE_READY'] );
            }
            else{
?>






<?php
            }
            break;
        case "Uninstall":
            if( $install_type == "module" ){
                print( $mod_strings['LBL_UW_MODULE_READY_UNISTALL'] );
            }
            else{
                print( $mod_strings['LBL_UW_FILES_REMOVED'] );
            }
            break;
        case "Disable":
 			print( $mod_strings['LBL_UW_MODULE_READY_DISABLE'] );        
            break;
        case "Enable":
                print( $mod_strings['LBL_UW_MODULE_READY_ENABLE'] );           
            break;
    }

echo "<br><br>";
foreach ($script_files as $script_name => $script_filename) {
	if (is_file("{$unzip_dir}/{$script_filename}")) {
   		//echo "Found {$script_name} script: <i>{$script_filename}</i><br>";
   	}
}
?>

<p>

<?php
$count = 0;
    if( $show_files == true ){
        $count = 0;
        
        $new_studio_mod_files = array();
        $new_sugar_mod_files = array();

		  $cache_html_files = findAllFilesRelative( "cache/layout", array());
		  
        foreach($new_files as $the_file) {
          if(substr(strtolower($the_file), -5, 5) == '.html' && in_array($the_file, $cache_html_files))
            array_push($new_studio_mod_files, $the_file);
          else
            array_push($new_sugar_mod_files, $the_file);
        }

     echo '<script>
            function toggle_these(start, end, ca) {
              while(start < end) {
                elem = eval("document.forms.files.copy_" + start);
                if(!ca.checked) elem.checked = false;
                else elem.checked = true;
                start++;
              }
            }
			</script>';

        if(empty($new_studio_mod_files)) {
           echo $mod_strings['LBL_UW_PATCH_READY'];
        }
		  else {
		  	echo $mod_strings['LBL_UW_PATCH_READY2'];
			echo '<input type="checkbox" onclick="toggle_these(0, ' . count($new_studio_mod_files) . ', this)"> '.$mod_strings['LBL_UW_CHECK_ALL'];
			foreach($new_studio_mod_files as $the_file) {
                $new_file   = clean_path( "$zip_to_dir/$the_file" );
                print( "<li><input id=\"copy_$count\" name=\"copy_$count\" type=\"checkbox\" value=\"" . $the_file . "\"> " . $new_file . "</li>");
                $count++;
          }
        }

        global $theme;
        echo '</ul><br><br>';
        echo '<div style="text-align: right; cursor: hand; cursor: pointer; text-decoration: underline;" onclick=\'this.style.display="none"; toggleDisplay("more");\'id="all_text">
'.$mod_strings['LBL_UW_SHOW_DETAILS'].' <img src="themes/' . $theme . '/images/advanced_search.gif"></div><div id=\'more\' style=\'display: none\'>
              <div style="text-align: right; cursor: hand; cursor: pointer; text-decoration: underline;" onclick=\'document.getElementById("all_text").style.display=""; toggleDisplay("more");\'>'
              .$mod_strings['LBL_UW_HIDE_DETAILS'].' <img name="options" src="themes/' . $theme . '/images/basic_search.gif"></div><br>';
		  echo '<input type="checkbox" checked onclick="toggle_these(' . count($new_studio_mod_files) . ',' . count($new_files) . ', this)"> '.$mod_strings['LBL_UW_CHECK_ALL'];
		  echo '<ul>';
        foreach( $new_sugar_mod_files as $the_file ){
            $highlight_start    = "";
            $highlight_end      = "";
            $checked            = "";
            $disabled           = "";
            $unzip_file = "$unzip_dir/$zip_from_dir/$the_file";
            $new_file   = clean_path( "$zip_to_dir/$the_file" );
            $forced_copy    = false;

            if( $mode == "Install" ){
                $checked = "checked";
                foreach( $zip_force_copy as $pattern ){
                    if( preg_match("#" . $pattern . "#", $unzip_file) ){
                        $disabled = "disabled=\"true\"";
                        $forced_copy = true;
                    }
                }
                if( !$forced_copy && is_file( $new_file ) && (md5_file( $unzip_file ) == md5_file( $new_file )) ){
                    $disabled = "disabled=\"true\"";
                    //$checked = "";
                }







                if( $checked != "" && $disabled != "" ){    // need to put a hidden field
                    print( "<input name=\"copy_$count\" type=\"hidden\" value=\"" . $the_file . "\">\n" );
                }
                print( "<li><input id=\"copy_$count\" name=\"copy_$count\" type=\"checkbox\" value=\"" . $the_file . "\" $checked $disabled > " . $highlight_start . $new_file . $highlight_end );
                if( $checked == "" && $disabled != "" ){    // need to explain this file hasn't changed
                    print( " (no changes)" );
                }
                print( "<br>\n" );
            }
            else if( $mode == "Uninstall" && file_exists( $new_file ) ){
                if( md5_file( $unzip_file ) == md5_file( $new_file ) ){
                    $checked = "checked=\"true\"";
                }
                else{
                    $highlight_start    = "<font color=red>";
                    $highlight_end      = "</font>";
                }
                print( "<li><input name=\"copy_$count\" type=\"checkbox\" value=\"" . $the_file . "\" $checked $disabled > " . $highlight_start . $new_file . $highlight_end . "<br>\n" );
            }
            $count++;
        }
        print( "</ul>\n" );
    }
    echo '</div>';
    if($mode == "Disable" || $mode == "Enable"){
    	//check to see if any files have been modified
    	$modified_files = getDiffFiles($unzip_dir, $install_file, ($mode == 'Enable'), $previous_version);
    	if(count($modified_files) > 0){
    		//we need to tell the user that some files have been modified since they last did an install
    		   echo '<script>' .
                'function handleFileChange(){';
               if(count($modified_files) > 0){
        			echo 'if(document.getElementById("radio_overwrite_files") != null && document.getElementById("radio_do_not_overwrite_files") != null){
                			var overwrite = false;
                			if(document.getElementById("radio_overwrite_files").checked){
                   			 overwrite = true   
                			}   
            			}    
        				return true;';
    			}else{
    				echo 'return true;';
    			}
    			echo '}</script>';
    			print('<b>'.$mod_strings['ML_LBL_OVERWRITE_FILES'].'</b>');
    			print('<table><td align="left" valign="top" colspan=2>');
        		print("<input type='radio' id='radio_overwrite_files' name='radio_overwrite' value='overwrite'>{$mod_strings['LBL_OVERWRITE_FILES']}&nbsp;"); 
        		print("<input type='radio' id='radio_do_not_overwrite_files' name='radio_overwrite' value='do_not_overwrite' checked>{$mod_strings['LBL_DO_OVERWRITE_FILES']}");
        		print("</td></tr></table>");
    			print('<ul>');
    			foreach($modified_files as $modified_file){
    				print('<li>'.$modified_file.'</li>');
    			}
    			print('</ul>');
    	}else{
	    	echo '<script>' .
	        'function handleFileChange(){';
	    	echo 'return true;';
	    	echo '}</script>';
    	}
    }else{
    	echo '<script>' .
        'function handleFileChange(){';
    	echo 'return true;';
    	echo '}</script>';
    }
         echo '<script>' .
         		'function validateForm(process){'.
         			'return (handleCommit(process) && handleFileChange());'.
         		'}'.
                'function handleCommit(process){
        if(process == 1) {
            if(document.getElementById("radio_license_agreement_reject") != null && document.getElementById("radio_license_agreement_accept") != null){
                var accept = false;
                if(document.getElementById("radio_license_agreement_accept").checked){
                    accept = true   
                }
                if(!accept){
                    //do not allow the form to submit
                    alert("'.$mod_strings['ERR_UW_ACCEPT_LICENSE'].'");
                    return false;   
                }    
            }    
        }
        return true;
    }
    var keys = [ "license","readme"]; 
    function selectTabCSS(key){ 
            	for( var i=0; i<keys.length;i++)
              	{
                	var liclass = "";
                	var linkclass = "";
            
                	if ( key == keys[i])
                	{
                    	var liclass = "active";
                    	var linkclass = "current";
                    	document.getElementById(keys[i]+"_div").style.display = "block";
                	}else{
                    	document.getElementById(keys[i]+"_div").style.display = "none";
                	}
                	document.getElementById(keys[i]+"_li").className = liclass;
                	document.getElementById(keys[i]+"_link").className = linkclass;
            	}
                tabPreviousKey = key;
            }
      </script>';
    if($require_license){
            $fh = sugar_fopen($license_file, 'r');
            $contents = fread($fh, filesize($license_file));
            fclose($fh);
            $readme_contents = '';
            if($found_readme){
	            if(file_exists($readme_file) && filesize($readme_file) > 0){
            		$fh = sugar_fopen($readme_file, 'r');
	            	$readme_contents = fread($fh, filesize($readme_file));
	            	fclose($fh);
	            }elseif(!empty($manifest['readme'])){
	            	$readme_contents = $manifest['readme'];
	            }
            }
$license_final =<<<eoq2
<table width='100%'>
	<tr>
        <td colspan="3"><ul class="tablist">
<li id="license_li" class="active"><a id="license_link"  class="current" href="javascript:selectTabCSS('license');">{$mod_strings['LBL_LICENSE']}</a></li>  
<li class="active" id="readme_li"><a id="readme_link" href="javascript:selectTabCSS('readme');">{$mod_strings['LBL_README']}</a></li> 
</ul></td>
    </tr>
    </table>
    <div id='license_div'>
    <table>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td align="left" valign="top" colspan=2>
            <b>{$mod_strings['LBL_MODULE_LICENSE']}</b>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top" colspan=2>
        <textarea cols="100" rows="8" readonly>{$contents}</textarea>  
        </td>
       
    </tr>
    <tr>
        <td align="left" valign="top" colspan=2>
        <input type='radio' id='radio_license_agreement_accept' name='radio_license_agreement' value='accept'>{$mod_strings['LBL_ACCEPT']}&nbsp; 
        <input type='radio' id='radio_license_agreement_reject' name='radio_license_agreement' value='reject' checked>{$mod_strings['LBL_DENY']}
        </td>
       
    </tr></table>
</div>
<div id='readme_div' style='display: none;'>
<table>
    <tr>
        <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
        <td align="left" valign="top" colspan=2>
            <b>{$mod_strings['LBL_README']}</b>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top" colspan=2>
        <textarea cols="100" rows="8" readonly>{$readme_contents}</textarea>  
        </td>
       
    </tr>
</table>
</div>

eoq2;
echo $license_final;           
            }
    
?>
	<br>
    <?php
    if($remove_tables == 'prompt' && $mode == 'Uninstall'){
    	print ("<input type='radio' id='remove_tables_true' name='remove_tables' value='true' checked>".$mod_strings['ML_LBL_REMOVE_TABLES']."&nbsp;"); 
    	print ("<input type='radio' id='remove_tables_false' name='remove_tables' value='false'>".$mod_strings['ML_LBL_DO_NOT_REMOVE_TABLES']."<br>");	
    }
    ?>
    <input type=submit value="<?php echo $mod_strings['LBL_ML_COMMIT'];?>" class="button" />
    <input type=button value="<?php echo $mod_strings['LBL_ML_CANCEL'];?>" class="button" onClick="location.href='index.php?module=Administration&action=UpgradeWizard&view=module';"/>
    <?php print( $hidden_fields ); ?>
    <input type=hidden name="copy_count" value="<?php print( $count );?>"/>
    <input type=hidden name="run" value="commit" />
    <input type=hidden name="install_file"  value="<?php print( urlencode( $install_file ) ); ?>" />
    <input type=hidden name="unzip_dir"     value="<?php echo $unzip_dir; ?>" />
    <input type=hidden name="zip_from_dir"  value="<?php echo $zip_from_dir; ?>" />
    <input type=hidden name="zip_to_dir"    value="<?php echo $zip_to_dir; ?>" />
</form>

<?php
    $GLOBALS['log']->info( "Upgrade Wizard patches" );
?>
