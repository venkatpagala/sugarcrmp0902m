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



/**
 * Backs-up files that are targeted for patch/upgrade to a restore directory
 * @param string rest_dir Full path to the directory containing the original, replaced files.
 * @param string install_file Full path to the uploaded patch/upgrade zip file
 * @param string unzip_dir Full path to the unzipped files in a temporary directory
 * @param string zip_from_dir Name of directory that the unzipped files containing the actuall replacement files
 * @param array errors Collection of errors to be displayed at end of process
 * @param string path Optional full path to the log file.
 * @return array errors
 */
function commitMakeBackupFiles($rest_dir, $install_file, $unzip_dir, $zip_from_dir, $errors, $path='') {
	global $mod_strings;
	// create restore file directory
	mkdir_recursive($rest_dir);

	logThis('backing up files to be overwritten...', $path);
	$newFiles = findAllFiles(clean_path($unzip_dir . '/' . $zip_from_dir), array());

	// keep this around for canceling
	$_SESSION['uw_restore_dir'] = clean_path($rest_dir);

    if(file_exists($rest_dir) && is_dir($rest_dir)){
		logThis('backing up files to be overwritten...', $path);
		$newFiles = findAllFiles(clean_path($unzip_dir . '/' . $zip_from_dir), array());

		// keep this around for canceling
		$_SESSION['uw_restore_dir'] = clean_path($rest_dir);

		foreach ($newFiles as $file) {
			if (strpos($file, 'md5'))
				continue;

			// get name of current file to place in restore directory
			$cleanFile = str_replace(clean_path($unzip_dir . '/' . $zip_from_dir), '', $file);

			// make sure the directory exists
			$cleanDir = $rest_dir . '/' . dirname($cleanFile);
			if (!is_dir($cleanDir)) {
				mkdir_recursive($cleanDir);
			}

			$oldFile = clean_path(getcwd() . '/' . $cleanFile);

			// only copy restore files for replacements - ignore new files from patch
			if (is_file($oldFile)) {
				if (is_writable($rest_dir)) {
					logThis('Backing up file: ' . $oldFile, $path);
					if (!copy($oldFile, $rest_dir . '/' . $cleanFile)) {
						logThis('*** ERROR: could not backup file: ' . $oldFile, $path);
						$errors[] = "{$mod_strings['LBL_UW_BACKUP']}::{$mod_strings['ERR_UW_FILE_NOT_COPIED']}: {$oldFile}";
					} else {
						$backupFilesExist = true;
					}

				} else {
					logThis('*** ERROR: directory not writable: ' . $rest_dir, $path);
					$errors[] = "{$mod_strings['LBL_UW_BACKUP']}::{$mod_strings['ERR_UW_DIR_NOT_WRITABLE']}: {$oldFile}";
				}
			}
		}
    }
	logThis('file backup done.', $path);
	return $errors;
}

/**
 * Copies files from the unzipped patch to the destination.
 * @param string unzip_dir Full path to the temporary directory created during unzip operation.
 * @param string zip_from_dir Name of folder containing the unzipped files; usually the name of the Patch without the
 * extension.
 * @param string path Optional full path to alternate upgradeWizard log file.
 * @return array Two element array containing to $copiedFiles and $skippedFiles.
 */



function commitCopyNewFiles($unzip_dir, $zip_from_dir, $path='') {
	logThis('Starting file copy process...', $path);
	global $sugar_version;
	$backwardModules='';
    if(substr($sugar_version,0,1) >= 5){
    	$modules = getAllModules();
			$backwardModules = array();
			foreach($modules as $mod){
				if(is_dir(clean_path(getcwd().'/modules/'.$mod.'/.500'))){
					$files = array();
			    	$files= findAllFiles(clean_path(getcwd().'/modules/'.$mod.'/.500'),$files);
			    	if(sizeof($files) >0){
			    		//backward compatibility is on
						$backwardModules[] = $mod;
			    	}
			   }
			}
       }

	$newFiles = findAllFiles(clean_path($unzip_dir . '/' . $zip_from_dir), array());
	$zipPath = clean_path($unzip_dir . '/' . $zip_from_dir);

	// handle special do-not-overwrite conditions
	$doNotOverwrite = array();
	$doNotOverwrite[] = '__stub';
	if(isset($_REQUEST['overwrite_files_serial'])) {
		$doNotOverwrite = explode('::', $_REQUEST['overwrite_files_serial']);
	}

	$copiedFiles = array();
	$skippedFiles = array();

	foreach($newFiles as $file) {
		$cleanFile = str_replace($zipPath, '', $file);
		$srcFile = $zipPath . $cleanFile;
		$targetFile = clean_path(getcwd() . '/' . $cleanFile);
		if($backwardModules != null && sizeof($backwardModules) >0){
			foreach($backwardModules as $mod){
				$splitPath = explode('/',trim($cleanFile));
				if('modules' == trim($splitPath[1]) && $mod == trim($splitPath[2])){
					$cleanFile = str_replace('/modules/'.$mod, '/modules/'.$mod.'/.500', $cleanFile);
					$targetFile = clean_path(getcwd() . '/' . $cleanFile);
				}
			}
		}
		if(!is_dir(dirname($targetFile))) {
			mkdir_recursive(dirname($targetFile)); // make sure the directory exists
		}

		if((!file_exists($targetFile)) || /* brand new file */
			(!in_array($targetFile, $doNotOverwrite)) /* manual diff file */
			) {
			// handle sugar_version.php
			if(strpos($targetFile, 'sugar_version.php') !== false) {
				logThis('Skipping "sugar_version.php" - file copy will occur at end of successful upgrade', $path);
				$_SESSION['sugar_version_file'] = $srcFile;
				continue;
			}

			logThis('Copying file to destination: ' . $targetFile, $path);

			if(!copy($srcFile, $targetFile)) {
				logThis('*** ERROR: could not copy file: ' . $targetFile, $path);
			} else {
				$copiedFiles[] = $targetFile;
			}
		} else {
			logThis('Skipping file: ' . $targetFile, $path);
			$skippedFiles[] = $targetFile;
		}
	}
	logThis('File copy done.', $path);

	$ret = array();
	$ret['copiedFiles'] = $copiedFiles;
	$ret['skippedFiles'] = $skippedFiles;

	return $ret;
}


//On cancel put back the copied files from 500 to 451 state
function copyFilesOnCancel($step){
//place hoder for cancel action

}


function removeFileFromPath($file,$path, $deleteNot=array()){
		$removed = 0;
		$cur = $path . '/' . $file;
		if(file_exists($cur)){
			$del = true;
			foreach($deleteNot as $dn){
				if($cur == $dn){
					$del = false;
				}
			}
			if($del){
				unlink($cur);
				$removed++;
			}
		}
		if(!file_exists($path))return $removed;
		$d = dir($path);
		while($e = $d->read()){
			$next = $path . '/'. $e;
			if(substr($e, 0, 1) != '.' && is_dir($next)){
				$removed += removeFileFromPath($file, $next, $deleteNot);
			}
		}
		return $removed;
	}

/**
 * This function copies/overwrites between directories
 *
 * @param string the directory name to remove
 * @param boolean whether to just empty the given directory, without deleting the given directory.
 * @return boolean True/False whether the directory was deleted.
 */

function copyRecursiveBetweenDirectories($from,$to){
	if(file_exists($from)){
		$modifiedFiles = array();
		$modifiedFiles = findAllFiles(clean_path($from), $modifiedFiles);
	 	$cwd = clean_path(getcwd());
		foreach($modifiedFiles as $file) {
			$srcFile = clean_path($file);
			//$targetFile = clean_path(getcwd() . '/' . $srcFile);
            if (strpos($srcFile,".svn") !== false) {
			  //do nothing
	    	 }
	    	else{
	    		$targetFile = str_replace($from, $to, $srcFile);

				if(!is_dir(dirname($targetFile))) {
					mkdir_recursive(dirname($targetFile)); // make sure the directory exists
				}

					// handle sugar_version.php
					if(strpos($targetFile, 'sugar_version.php') !== false) {
						logThis('Skipping "sugar_version.php" - file copy will occur at end of successful upgrade', $path);
						$_SESSION['sugar_version_file'] = $srcFile;
						continue;
					}

					logThis('Copying file to destination: ' . $targetFile);

					if(!copy($srcFile, $targetFile)) {
						logThis('*** ERROR: could not copy file: ' . $targetFile);
					} else {
						logThis('Copied file: ' . $targetFile);
						//$copiedFiles[] = $targetFile;
					}

	    	}
		 }
	}
}

function deleteDirectory($dirname,$only_empty=false) {
    if (!is_dir($dirname))
        return false;
    $dscan = array(realpath($dirname));
    $darr = array();
    while (!empty($dscan)) {
        $dcur = array_pop($dscan);
        $darr[] = $dcur;
        if ($d=opendir($dcur)) {
            while ($f=readdir($d)) {
                if ($f=='.' || $f=='..')
                    continue;
                $f=$dcur.'/'.$f;
                if (is_dir($f))
                    $dscan[] = $f;
                else
                    unlink($f);
            }
            closedir($d);
        }
    }
    $i_until = ($only_empty)? 1 : 0;
    for ($i=count($darr)-1; $i>=$i_until; $i--) {
        //echo "\nDeleting '".$darr[$i]."' ... ";
        if (rmdir($darr[$i]))
            logThis('Success :Copying file to destination: ' . $darr[$i]);
        else
            logThis('Copy problem:Copying file to destination: ' . $darr[$i]);
    }
    return (($only_empty)? (count(scandir)<=2) : (!is_dir($dirname)));
}
/**
 * Get all the customized modules. Compare the file md5s with the base md5s
 * If a file has been modified then put the module in the list of customized
 * modules. Show the list in the preflight check UI.
 */

function deleteAndOverWriteSelectedFiles($unzip_dir, $zip_from_dir,$delete_dirs){
	if($delete_dirs != null){
		foreach($delete_dirs as $del_dir){
			deleteDirectory($del_dir);
			$newFiles = findAllFiles(clean_path($unzip_dir . '/' . $zip_from_dir.'/'.$del_dir), array());
			$zipPath = clean_path($unzip_dir . '/' . $zip_from_dir.'/'.$del_dir);
			$copiedFiles = array();
			$skippedFiles = array();

			foreach($newFiles as $file) {
				$cleanFile = str_replace($zipPath, '', $file);
				$srcFile = $zipPath . $cleanFile;
				$targetFile = clean_path(getcwd() . '/' . $cleanFile);

				if(!is_dir(dirname($targetFile))) {
					mkdir_recursive(dirname($targetFile)); // make sure the directory exists
				}

				if(!file_exists($targetFile)){
					// handle sugar_version.php
					if(strpos($targetFile, 'sugar_version.php') !== false) {
						logThis('Skipping sugar_version.php - file copy will occur at end of successful upgrade');
						$_SESSION['sugar_version_file'] = $srcFile;
						continue;
					}

					logThis('Copying file to destination: ' . $targetFile);

					if(!copy($srcFile, $targetFile)) {
						logThis('*** ERROR: could not copy file: ' . $targetFile);
					} else {
						$copiedFiles[] = $targetFile;
					}
				} else {
					logThis('Skipping file: ' . $targetFile);
					$skippedFiles[] = $targetFile;
				}
			  }
		}
	}
	$ret = array();
	$ret['copiedFiles'] = $copiedFiles;
	$ret['skippedFiles'] = $skippedFiles;

	return $ret;
}

//Default is empty the directory. For removing set it to false
// to use this function to totally remove a directory, write:
// recursive_remove_directory('path/to/directory/to/delete',FALSE);

// to use this function to empty a directory, write:
// recursive_remove_directory('path/to/full_directory');

function recursive_empty_or_remove_directory($directory, $exclude_dirs=null,$exclude_files=null,$empty=TRUE)
{
	// if the path has a slash at the end we remove it here
	if(substr($directory,-1) == '/')
	{
		$directory = substr($directory,0,-1);
	}

	// if the path is not valid or is not a directory ...
	if(!file_exists($directory) || !is_dir($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... if the path is not readable
	}elseif(!is_readable($directory))
	{
		// ... we return false and exit the function
		return FALSE;

	// ... else if the path is readable
	}else{

		// we open the directory
		$handle = opendir($directory);

		// and scan through the items inside
		while (FALSE !== ($item = readdir($handle)))
		{
			// if the filepointer is not the current directory
			// or the parent directory
			if($item != '.' && $item != '..')
			{
				// we build the new path to delete
				$path = $directory.'/'.$item;

				// if the new path is a directory
				//add another check if the dir is in the list to exclude delete
				if(is_dir($path) && $exclude_dirs != null && in_array($path,$exclude_dirs)){
				    //do nothing
				}
				else if(is_dir($path))
				{
					// we call this function with the new path
					recursive_empty_or_remove_directory($path);
				}
				// if the new path is a file
				else{
					// we remove the file
					if($exclude_files != null && in_array($path,$exclude_files)){
                           //do nothing
					}
					else{
						unlink($path);
				    }
				}
			}
		}
		// close the directory
		closedir($handle);

		// if the option to empty is not set to true
		if($empty == FALSE)
		{
			// try to delete the now empty directory
			if(!rmdir($directory))
			{
				// return false if not possible
				return FALSE;
			}
		}
		// return success
		return TRUE;
	}
}
// ------------------------------------------------------------




function getAllCustomizedModules() {
		require_once('include/dir_inc.php');
		require_once('files.md5');

	    $return_array = array();
	    $modules = getAllModules();
	    foreach($modules as $mod) {
	    	   //find all files in each module if the files have been modified
	    	   //as compared to the base version then add the module to the
	    	   //customized modules array
	    	   $modFiles = findAllFiles(clean_path(getcwd())."/modules/$mod", array());
               foreach($modFiles as $file){
             	  $fileContents = file_get_contents($file);
             	   $file = str_replace(clean_path(getcwd()),'',$file);
               	  if($md5_string['./' . $file]){
	               	  if(md5($fileContents) != $md5_string['./' . $file]) {
	               	     //A file has been customized in the module. Put the module into the
	               	     // customized modules array.
	               	     echo 'Changed File'.$file;
	               	  	  $return_array[$mod];
	               	  	  break;
	               	  }
               	  }
               	  else{
               	  	// This is a new file in user's version and indicates that module has been
               	  	//customized. Put the module in the customized array.
                       echo 'New File'.$file;
                       $return_array[$mod];
                       break;
               	  }
               }
	    } //foreach

		return $return_array;
	}

    /**
     * Array of all Modules in the version bein upgraded
     * This method returns an Array of all modules
     * @return $modules Array of modules.
     */
	function getAllModules() {
		$modules = array();
		$d = dir('modules');
		while($e = $d->read()){
			if(substr($e, 0, 1) == '.' || !is_dir('modules/' . $e))continue;
			$modules[] = $e;
		}
		return $modules;
	}

//Remove files with the smae md5

function removeMd5MatchingFiles($deleteNot=array()){
    require_once('include/dir_inc.php');
	$md5_string = array();
	if(file_exists(clean_path(getcwd().'/files.md5'))){
		require(clean_path(getcwd().'/files.md5'));
	}
    $modulesAll = getAllModules();
     foreach($modulesAll as $mod){
	      $allModFiles = array();
	      if(is_dir('modules/'.$mod)){
	      $allModFiles = findAllFiles('modules/'.$mod,$allModFiles);
	       foreach($allModFiles as $file){
	           	if(file_exists($file) && !in_array(basename($file),$deleteNot)){
		       		 if(isset($md5_string['./'.$file])) {
		                  $fileContents = file_get_contents($file);
		               	  if(md5($fileContents) == $md5_string['./'.$file]) {
		               	  	unlink($file);
		               	  }
		              }
	            }
           }
	   }
   }
}

/**
 * Handles requirements for creating reminder Tasks and Emails
 * @param array skippedFiles Array of files that were not overwriten and must be manually mereged.
 * @param string path Optional full path to alternate upgradeWizard log.
 */
function commitHandleReminders($skippedFiles, $path='') {
	global $mod_strings;
	global $current_user;

	if(empty($mod_strings))
		$mod_strings = return_module_language('en_us', 'UpgradeWizard');

	if(empty($current_user->id)) {
		$current_user->getSystemUser();
	}

	if(count($skippedFiles) > 0) {
		$desc = $mod_strings['LBL_UW_COMMIT_ADD_TASK_OVERVIEW'] . "\n\n";
		$desc .= $mod_strings['LBL_UW_COMMIT_ADD_TASK_DESC_1'];
		$desc .= $_SESSION['uw_restore_dir'] . "\n\n";
		$desc .= $mod_strings['LBL_UW_COMMIT_ADD_TASK_DESC_2'] . "\n\n";

		foreach($skippedFiles as $file) {
			$desc .= $file . "\n";
		}

		//MFH #13468
		$nowDate = gmdate($timedate->dbDateFormat);
		$nowTime = gmdate($timedate->dbTimeFormat);
		$nowDateTime = $nowDate . ' ' . $nowTime;

		if($_REQUEST['addTaskReminder'] == 'remind') {
			logThis('Adding Task for admin for manual merge.', $path);
			require_once('modules/Tasks/Task.php');
			$task = new Task();
			$task->name = $mod_strings['LBL_UW_COMMIT_ADD_TASK_NAME'];
			$task->description = $desc;
			$task->date_due = $nowDate;
			$task->time_due = $nowTime;
			$task->priority = 'High';
			$task->status = 'Not Started';
			$task->assigned_user_id = $current_user->id;
			$task->created_by = $current_user->id;
			$task->date_entered = $nowDateTime;
			$task->date_modified = $nowDateTime;



			$task->save();
		}

		if($_REQUEST['addEmailReminder'] == 'remind') {
			logThis('Sending Reminder for admin for manual merge.', $path);
			require_once('modules/Emails/Email.php');
			$email = new Email();
			$email->assigned_user_id = $current_user->id;
			$email->name = $mod_strings['LBL_UW_COMMIT_ADD_TASK_NAME'];
			$email->description = $desc;
			$email->description_html = nl2br($desc);
			$email->from_name = $current_user->full_name;
			$email->from_addr = $current_user->email1;
			$email->to_addrs_arr = $email->parse_addrs($current_user->email1, '', '', '');
			$email->cc_addrs_arr = array();
			$email->bcc_addrs_arr = array();
			$email->date_entered = $nowDateTime;
			$email->date_modified = $nowDateTime;



			$email->send();
			$email->save();
		}
	}
}

function deleteCache(){
	//Clean modules from cache
	if(is_dir('cache/modules')){
		$allModFiles = array();
		$allModFiles = findAllFiles('cache/modules',$allModFiles);
	   foreach($allModFiles as $file){
	       	if(file_exists($file)){
				unlink($file);
	       	}
	   }
	}
	//Clean jsLanguage from cache
	if(is_dir('cache/jsLanguage')){
		$allModFiles = array();
		$allModFiles = findAllFiles('cache/jsLanguage',$allModFiles);
	   foreach($allModFiles as $file){
		   	if(file_exists($file)){
				unlink($file);
		   	}
		}
	}
	//Clean smarty from cache
	if(is_dir('cache/smarty')){
		$allModFiles = array();
		$allModFiles = findAllFiles('cache/smarty',$allModFiles);
	   foreach($allModFiles as $file){
	       	if(file_exists($file)){
				unlink($file);
	       	}
	   }
	}
}

function deleteChance(){
	//Clean folder from cache
	if(is_dir('include/SugarObjects/templates/chance')){
		rmdir_recursive('include/SugarObjects/templates/chance');
	 }
	if(is_dir('include/SugarObjects/templates/chance')){
		if(!isset($_SESSION['chance'])){
			$_SESSION['chance'] = '';
		}
		$_SESSION['chance'] = 'include/SugarObjects/templates/chance';
		//rename('include/SugarObjects/templates/chance','include/SugarObjects/templates/chance_removeit');
	}
}



/**
 * copies upgrade wizard files from new patch if that dir exists
 * @param	string file Path to uploaded zip file
 */
function upgradeUWFiles($file) {
	global $sugar_config;
	// file = getcwd().'/'.$sugar_config['upload_dir'].$_FILES['upgrade_zip']['name'];

	$cacheUploadUpgradesTemp = clean_path(mk_temp_dir("{$sugar_config['upload_dir']}upgrades/temp"));

	unzip($file, $cacheUploadUpgradesTemp);

	if(!file_exists(clean_path("{$cacheUploadUpgradesTemp}/manifest.php"))) {
		logThis("*** ERROR: no manifest file detected while bootstraping upgrade wizard files!");
		return;
	} else {
		include(clean_path("{$cacheUploadUpgradesTemp}/manifest.php"));
	}

	$allFiles = array();
	// upgradeWizard
	if(file_exists(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/modules/UpgradeWizard"))) {
		$allFiles = findAllFiles(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/modules/UpgradeWizard"), $allFiles);
	}
	// moduleInstaller
	if(file_exists(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/ModuleInstall"))) {
		$allFiles = findAllFiles(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/ModuleInstall"), $allFiles);
	}
	if(file_exists(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/include/javascript/yui"))) {
		$allFiles = findAllFiles(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/include/javascript/yui"), $allFiles);
	}
	if(file_exists(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/HandleAjaxCall.php"))) {
		$allFiles[] = clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/HandleAjaxCall.php");
	}

	/*
	 * /home/chris/workspace/maint450/cache/upload/upgrades/temp/DlNnqP/
	 * SugarEnt-Patch-4.5.0c/modules/Leads/ConvertLead.html
	 */
	$cwd = clean_path(getcwd());

	foreach($allFiles as $k => $file) {
		$file = clean_path($file);
		$destFile = str_replace(clean_path($cacheUploadUpgradesTemp.'/'.$manifest['copy_files']['from_dir']), $cwd, $file);
       if(!is_dir(dirname($destFile))) {
			mkdir_recursive(dirname($destFile)); // make sure the directory exists
		}
		logThis('updating UpgradeWizard code: '.$destFile);
		copy_recursive($file, $destFile);
	}
	logThis ('is sugar_file_util there '.file_exists(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/include/utils/sugar_file_utils.php")));
	if(file_exists(clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/include/utils/sugar_file_utils.php"))) {
		$file = clean_path("{$cacheUploadUpgradesTemp}/{$manifest['copy_files']['from_dir']}/include/utils/sugar_file_utils.php");
		$destFile = str_replace(clean_path($cacheUploadUpgradesTemp.'/'.$manifest['copy_files']['from_dir']), $cwd, $file);
        copy($file,$destFile);
	}
}



/**
 * gets valid patch file names that exist in upload/upgrade/patch/
 */
function getValidPatchName($returnFull = true) {
	global $base_upgrade_dir;
	global $mod_strings;
	global $uh;
	global $sugar_version;
    global $sugar_config;
    $uh = new UpgradeHistory();
    $base_upgrade_dir = $sugar_config['upload_dir'] . "upgrades";
	$return = array();

	// scan for new files (that are not installed)
	logThis('finding new files for upgrade');
	$upgrade_content = '';
	$upgrade_contents = findAllFiles($base_upgrade_dir, array(), false, 'zip');
	//other variations of zip file i.e. ZIP, zIp,zIP,Zip,ZIp,ZiP
    $extns = array('ZIP','ZIp','ZiP','Zip','zIP','zIp','ziP');
    foreach($extns as $extn){
    	$upgrade_contents = array_merge($upgrade_contents,findAllFiles( "$base_upgrade_dir", array() , false, $extn));
    }
	$upgrades_available = 0;
	$ready = "<ul>\n";
	$ready .= "
		<table>
			<tr>
				<th></th>
				<th align=left>
					{$mod_strings['LBL_ML_NAME']}
				</th>
				<th>
					{$mod_strings['LBL_ML_TYPE']}
				</th>
				<th>
					{$mod_strings['LBL_ML_VERSION']}
				</th>
				<th>
					{$mod_strings['LBL_ML_PUBLISHED']}
				</th>
				<th>
					{$mod_strings['LBL_ML_UNINSTALLABLE']}
				</th>
				<th>
					{$mod_strings['LBL_ML_DESCRIPTION']}
				</th>
			</tr>";
	$disabled = '';

	// assume old patches are there.
	$upgradeToVersion = array(); // fill with valid patches - we will only use the latest qualified found patch

	// cn: bug 10609 - notices for uninitialized variables
	$icon = '';
	$name = '';
	$type = '';
	$version = '';
	$published_date = '';
	$uninstallable = '';
	$description = '';
	$disabled = '';

	foreach($upgrade_contents as $upgrade_content) {
		if(!preg_match("#.*\.zip\$#i", strtolower($upgrade_content))) {
			continue;
		}

		$upgrade_content = clean_path($upgrade_content);
		$the_base = basename($upgrade_content);
		$the_md5 = md5_file($upgrade_content);

		$md5_matches = $uh->findByMd5($the_md5);

		/* If a patch is in the /patch dir AND has no record in the upgrade_history table we assume that it's the one we want.
		 * Edge-case: manual upgrade with a FTP of a patch; UH table has no entry for it.  Assume nothing. :( */
		if(0 == sizeof($md5_matches)) {
			$target_manifest = remove_file_extension( $upgrade_content ) . '-manifest.php';
			require_once($target_manifest);

			if(empty($manifest['version'])) {
				logThis("*** Potential error: patch found with no version [ {$upgrade_content} ]");
				continue;
			}
			if(!isset($manifest['type']) || $manifest['type'] != 'patch') {
				logThis("*** Potential error: patch found with either no 'type' or non-patch type [ {$upgrade_content} ]");
				continue;
			}

			$upgradeToVersion[$manifest['version']] = urlencode($upgrade_content);

			$name = empty($manifest['name']) ? $upgrade_content : $manifest['name'];
			$version = empty($manifest['version']) ? '' : $manifest['version'];
			$published_date = empty($manifest['published_date']) ? '' : $manifest['published_date'];
			$icon = '';
			$description = empty($manifest['description']) ? 'None' : $manifest['description'];
			$uninstallable = empty($manifest['is_uninstallable']) ? 'No' : 'Yes';
			$type = getUITextForType( $manifest['type'] );
			$manifest_type = $manifest['type'];

			if(empty($manifest['icon'])) {
				$icon = getImageForType( $manifest['type'] );
			} else {
				$path_parts = pathinfo( $manifest['icon'] );
				$icon = "<img src=\"" . remove_file_extension( $upgrade_content ) . "-icon." . $path_parts['extension'] . "\">";
			}

			if($upgrades_available > 1) {
				logThis('Potential error: found more than 1 qualified upgrade file!');
				$stop = true; // more than 1 upgrade?!?
			} else {
				logThis('found a valid upgrade file: '.$upgrade_content);
				$stop = false;
			}
	    }
	}

	// cn: bug 10488 use the NEWEST upgrade/patch available when running upgrade wizard.
	ksort($upgradeToVersion);
	$upgradeToVersion = array_values($upgradeToVersion);
	$newest = array_pop($upgradeToVersion);
	$_SESSION['install_file'] = urldecode($newest); // in-case it was there from a prior.
	logThis("*** UW using [ {$_SESSION['install_file']} ] as source for patch files.");

	$ready .= "<tr><td>$icon</td><td>$name</td><td>$type</td><td>$version</td><td>$published_date</td><td>$uninstallable</td><td>$description</td>\n";
	$cleanUpgradeContent = urlencode($_SESSION['install_file']);

	// cn: 10606 - cannot upload a patch file since this returned always.
	if(!empty($cleanUpgradeContent)) {
		$ready .=<<<eoq
	        <td>
				<form action="index.php" method="post">
					<input type="hidden" name="module" value="UpgradeWizard">
					<input type="hidden" name="action" value="index">
					<input type="hidden" name="step" value="{$_REQUEST['step']}">
					<input type="hidden" name="run" value="delete">
	        		<input type=hidden name="install_file" value="{$cleanUpgradeContent}" />
	        		<input type=submit value="{$mod_strings['LBL_BUTTON_DELETE']}" />
				</form>
			</td>
eoq;
		$disabled = "DISABLED";
	}

	$ready .= "</table>\n";

	if( $upgrades_available == 0 ){
	    $ready .= "<i>None</i><br>\n";
	}
	$ready .= "</ul>\n";

	$return['ready'] = $ready;
	$return['disabled'] = $disabled;

	if($returnFull) {
		return $return;
	}
}


/**
 * finalizes upgrade by setting upgrade versions in DB (config table) and sugar_version.php
 * @return bool true on success
 */
function updateVersions($version) {
	global $db;
	global $sugar_config;
	global $path;

	logThis('At updateVersions()... updating config table and sugar_version.php.', $path);

	// handle file copy
	if(isset($_SESSION['sugar_version_file']) && !empty($_SESSION['sugar_version_file'])) {
		if(!copy($_SESSION['sugar_version_file'], clean_path(getcwd().'/sugar_version.php'))) {
			logThis('*** ERROR: sugar_version.php could not be copied to destination! Cannot complete upgrade', $path);
			return false;
		} else {
			logThis('sugar_version.php successfully updated!', $path);
		}
	} else {
		logThis('*** ERROR: no sugar_version.php file location found! - cannot complete upgrade...', $path);
		return false;
	}

	// handle config table
	if($db->dbType == 'mysql') {
		$q1 = "DELETE FROM `config` WHERE `category` = 'info' AND `name` = 'sugar_version'";
		$q2 = "INSERT INTO `config` (`category`, `name`, `value`) VALUES ('info', 'sugar_version', '{$version}')";
	} elseif($db->dbType == 'oci8' || $db->dbType == 'oracle') {




	} elseif($db->dbType == 'mssql') {
		$q1 = "DELETE FROM config WHERE category = 'info' AND name = 'sugar_version'";
		$q2 = "INSERT INTO config (category, name, value) VALUES ('info', 'sugar_version', '{$version}')";
	}

	logThis('Deleting old DB version info from config table.', $path);
	$db->query($q1);

	logThis('Inserting updated version info into config table.', $path);
	$db->query($q2);

	logThis('updateVersions() complete.', $path);
	return true;
}



/**
 * gets a module's lang pack - does not need to be a SugarModule
 * @param lang string Language
 * @param module string Path to language folder
 * @return array mod_strings
 */
function getModuleLanguagePack($lang, $module) {
	$mod_strings = array();

	if(!empty($lang) && !empty($module)) {
		$langPack = clean_path(getcwd().'/'.$module.'/language/'.$lang.'.lang.php');
		$langPackEn = clean_path(getcwd().'/'.$module.'/language/en_us.lang.php');

		if(file_exists($langPack))
			include_once($langPack);
		elseif(file_exists($langPackEn))
			include_once($langPackEn);
	}

	return $mod_strings;
}
/**
 * checks system compliance for 4.5+ codebase
 * @return array Mixed values
 */
function checkSystemCompliance() {
	global $sugar_config;
	global $current_language;
	global $db;
	global $mod_strings;

	if(!defined('SUGARCRM_MIN_MEM')) {
		define('SUGARCRM_MIN_MEM', 40);
	}

	$installer_mod_strings = getModuleLanguagePack($current_language, './install');
	$ret = array();
	$ret['error_found'] = false;

	// PHP version
	$php_version = constant('PHP_VERSION');
	$check_php_version_result = check_php_version($php_version);

	switch($check_php_version_result) {
		case -1:
			$ret['phpVersion'] = "<b><span class=stop>{$installer_mod_strings['ERR_CHECKSYS_PHP_INVALID_VER']} {$php_version} )</span></b>";
			$ret['error_found'] = true;
			break;
		case 0:
			$ret['phpVersion'] = "<b><span class=go>{$installer_mod_strings['ERR_CHECKSYS_PHP_UNSUPPORTED']} {$php_version} )</span></b>";
			break;
		case 1:
			$ret['phpVersion'] = "<b><span class=go>{$installer_mod_strings['LBL_CHECKSYS_PHP_OK']} {$php_version} )</span></b>";
			break;
	}

	// database and connect
	switch($sugar_config['dbconfig']['db_type']){
	    case 'mysql':
	        // mysql version
	        $q = "SELECT version();";
	        $r = $db->query($q);
	        $a = $db->fetchByAssoc($r);
	        if(version_compare($a['version()'], '4.1.2') < 0) {
	        	$ret['error_found'] = true;
	        	$ret['mysqlVersion'] = "<b><span class=stop>".$mod_strings['ERR_UW_MYSQL_VERSION'].$a['version()']."</span></b>";
	        }

	        break;
		case 'mssql':
			// Magic Quotes & SQL Server
			$ret['mssqlStatus'] = '';
			if(ini_get('magic_quotes_gpc') == 1) {
				// cn: this setting will break the connection string to SQL Server Express 2005
				$ret['mssqlMagicQuotes'] = "<b><span class=stop>{$installer_mod_strings['ERR_CHECKSYS_MSSQL_MQGPC']}</span></b>";
				$ret['error_found'] = true;
			}
	        break;
	    case 'oci8':


	        break;
	}




	// XML Parsing
	if(function_exists('xml_parser_create')) {
		$ret['xmlStatus'] = "<b><span class=go>{$installer_mod_strings['LBL_CHECKSYS_OK']}</span></b>";
	} else {
		$ret['xmlStatus'] = "<b><span class=stop>{$installer_mod_strings['LBL_CHECKSYS_NOT_AVAILABLE']}</span></b>";
		$ret['error_found'] = true;
	}

	// cURL
	if(function_exists('curl_init')) {
		$ret['curlStatus'] = "<b><span class=go>{$installer_mod_strings['LBL_CHECKSYS_OK']}</font></b>";
	} else {
		$ret['curlStatus'] = "<b><span class=go>{$installer_mod_strings['ERR_CHECKSYS_CURL']}</font></b>";
		$ret['error_found'] = false;
	}

	// mbstrings
	if(function_exists('mb_strlen')) {
		$ret['mbstringStatus'] = "<b><span class=go>{$installer_mod_strings['LBL_CHECKSYS_OK']}</font></b>";
	} else {
		$ret['mbstringStatus'] = "<b><span class=stop>{$installer_mod_strings['ERR_CHECKSYS_MBSTRING']}</font></b>";
		$ret['error_found'] = true;
	}

	// imap
	if(function_exists('imap_open')) {
		$ret['imapStatus'] = "<b><span class=go>{$installer_mod_strings['LBL_CHECKSYS_OK']}</span></b>";
	} else {
		$ret['imapStatus'] = "<b><span class=go>{$installer_mod_strings['ERR_CHECKSYS_IMAP']}</span></b>";
		$ret['error_found'] = false;
	}


	// safe mode
	if('1' == ini_get('safe_mode')) {
		$ret['safeModeStatus'] = "<b><span class=stop>{$installer_mod_strings['ERR_CHECKSYS_SAFE_MODE']}</span></b>";
		$ret['error_found'] = true;
	} else {
		$ret['safeModeStatus'] = "<b><span class=go>{$installer_mod_strings['LBL_CHECKSYS_OK']}</span></b>";
	}


	// call time pass by ref
    if('1' == ini_get('allow_call_time_pass_reference')) {
		$ret['callTimeStatus'] = "<b><span class=stop>{$installer_mod_strings['ERR_CHECKSYS_CALL_TIME']}</span></b>";
		//continue upgrading
	} else {
		$ret['callTimeStatus'] = "<b><span class=go>{$installer_mod_strings['LBL_CHECKSYS_OK']}</span></b>";
	}

	// memory limit
	$ret['memory_msg']     = "";
	$memory_limit   = "-1";//ini_get('memory_limit');
	$sugarMinMem = constant('SUGARCRM_MIN_MEM');
	// logic based on: http://us2.php.net/manual/en/ini.core.php#ini.memory-limit
	if( $memory_limit == "" ){          // memory_limit disabled at compile time, no memory limit
	    $ret['memory_msg'] = "<b><span class=\"go\">{$installer_mod_strings['LBL_CHECKSYS_MEM_OK']}</span></b>";
	} elseif( $memory_limit == "-1" ){   // memory_limit enabled, but set to unlimited
	    $ret['memory_msg'] = "<b><span class=\"go\">{$installer_mod_strings['LBL_CHECKSYS_MEM_UNLIMITED']}</span></b>";
	} else {
	    rtrim($memory_limit, 'M');
	    $memory_limit_int = (int) $memory_limit;
	    if( $memory_limit_int < constant('SUGARCRM_MIN_MEM') ){
	        $ret['memory_msg'] = "<b><span class=\"stop\">{$installer_mod_strings['ERR_CHECKSYS_MEM_LIMIT_1']}" . constant('SUGARCRM_MIN_MEM') . "{$installer_mod_strings['ERR_CHECKSYS_MEM_LIMIT_2']}</span></b>";
			$ret['error_found'] = true;
	    } else {
			$ret['memory_msg'] = "<b><span class=\"go\">{$installer_mod_strings['LBL_CHECKSYS_OK']} ({$memory_limit})</span></b>";
	    }
	}

	/* mbstring.func_overload
	$ret['mbstring.func_overload'] = '';
	$mb = ini_get('mbstring.func_overload');

	if($mb > 1) {
		$ret['mbstring.func_overload'] = "<b><span class=\"stop\">{$mod_strings['ERR_UW_MBSTRING_FUNC_OVERLOAD']}</b>";
		$ret['error_found'] = true;
	}
	*/
	return $ret;
}



function checkMysqlConnection(){
	global $sugar_config;
	$configOptions = $sugar_config['dbconfig'];
	if($sugar_config['dbconfig']['db_type'] == 'mysql'){
    	@mysql_ping($GLOBALS['db']->database);
    }
}

/**
 * is a file that we blow away automagically
 */
function isAutoOverwriteFile($file) {
	$overwriteDirs = array(
		'./sugar_version.php',
		'./modules/UpgradeWizard/uw_main.tpl',
	);
	$file = trim('.'.str_replace(clean_path(getcwd()), '', $file));

	if(in_array($file, $overwriteDirs)) {
		return true;
	}

	$fileExtension = substr(strrchr($file, "."), 1);
	if($fileExtension == 'tpl' || $fileExtension == 'html') {
		return false;
	}

	return true;
}

/**
 * flatfile logger
 */
function logThis($entry, $path='') {
	global $mod_strings;
	if(file_exists('include/utils/sugar_file_utils.php')){
		require_once('include/utils/sugar_file_utils.php');
	}
		$log = empty($path) ? clean_path(getcwd().'/upgradeWizard.log') : clean_path($path);

		// create if not exists
		if(!file_exists($log)) {
			if(function_exists('sugar_fopen')){
				$fp = @sugar_fopen($log, 'w+'); // attempts to create file
		     }
		     else{
				$fp = fopen($log, 'w+'); // attempts to create file
		     }
			if(!is_resource($fp)) {
				$GLOBALS['log']->fatal('UpgradeWizard could not create the upgradeWizard.log file');
				die($mod_strings['ERR_UW_LOG_FILE_UNWRITABLE']);
			}
		} else {
			if(function_exists('sugar_fopen')){
				$fp = @sugar_fopen($log, 'a+'); // write pointer at end of file
		     }
		     else{
				$fp = @fopen($log, 'a+'); // write pointer at end of file
		     }

			if(!is_resource($fp)) {
				$GLOBALS['log']->fatal('UpgradeWizard could not open/lock upgradeWizard.log file');
				die($mod_strings['ERR_UW_LOG_FILE_UNWRITABLE']);
			}
		}

		$line = date('r').' [UpgradeWizard] - '.$entry."\n";

		if(@fwrite($fp, $line) === false) {
			$GLOBALS['log']->fatal('UpgradeWizard could not write to upgradeWizard.log: '.$entry);
			die($mod_strings['ERR_UW_LOG_FILE_UNWRITABLE']);
		}

		if(is_resource($fp)) {
			fclose($fp);
		}
}


/**
 * tries to validate the query based on type
 * @param string query The query to verify
 * @param string dbType The DB type
 * @return string error Non-empty string on error
 */
function verifySqlStatement($query, $dbType, &$newTables) {
	$error = '';
	logThis('verifying SQL statement');

	$table	= getTableFromQuery($query);

	switch(strtoupper(substr($query, 0, 10))) {
		// ignore DROPs
		case 'ALTER TABL':
			// get ddl
			$error = testQueryAlter($table, $dbType, strtoupper($query), $newTables);
		break;

		case 'CREATE TAB':
			$error = testQueryCreate($table, $dbType, $query, $newTables);
		break;

		case 'DELETE FRO':
			$error = testQueryDelete($table, $dbType, $query);
		break;

		case 'DROP TABLE':
			$error = testQueryDrop($table, $dbType, $query);
		break;

		case 'INSERT INT':
			$error = testQueryInsert($table, $dbType, $query);
		break;

		case (strtoupper(substr($query, 0, 6)) == 'UPDATE'):
			$error = testQueryUpdate($table, $dbType, $query);
		break;






	}

	return $error;
}


/**
	*  @params : none
	*  @author: nsingh
	*  @desc This function is to be used in the upgrade process to preserve changes/customaizations made to pre 5.1 quickcreate layout.
	*  Prior to 5.1 we have been using editviewdefs as the base for quickcreatedefs. If a custom field was added to edit view layout, it
	*  was automatically picked up by the quick create. [Addresses Bug 21469]
	*  This function will check if customizations were made, and will create quickcreatedefs.php in the /cutom/working/$module_name directory.
	**/
function updateQuickCreateDefs(){
	$d = dir('modules');
	$studio_modules = array();

	while($e = $d->read()){ //collect all studio modules.
		if(substr($e, 0, 1) == '.' || !is_dir('modules/' . $e))continue;
		if(file_exists('modules/' . $e . '/metadata/studio.php'))
		{
			array_push($studio_modules, $e);
		}
	}

	foreach( $studio_modules as $modname ){ //for each studio enabled module
		//Check !exists modules/$modname/metadata/quickcreatedefs.php &&
		//exists custom/$modname/editviewdefs.php (module was customized) &&
		//!exists custom/$modname/quickcreateviewdefs.php

		$editviewdefs = "custom/working/modules/".$modname."/metadata/editviewdefs.php";
		$quickcreatedefs = "custom/working/modules/".$modname."/metadata/quickcreatedefs.php";

		if ( !file_exists("modules/".$modname."/metadata/quickcreatedefs.php") &&
			 file_exists($editviewdefs) &&
			 !file_exists($quickcreatedefs) ){
				//clone editviewdef and save it in custom/working/modules/metadata
				$GLOBALS['log']->debug("Copying editviewdefs.php as quickcreatedefs.php for the $modname module in custom/working/modules/$modname/metadata!");
				if(copy( $editviewdefs, $quickcreatedefs)){
					if(file_exists($quickcreatedefs) && is_readable($quickcreatedefs)){
						$file = file($quickcreatedefs);
						//replace 'EditView' with 'QuickCreate'
						$fp = fopen($quickcreatedefs,'w');
						foreach($file as &$line){
							if(preg_match("/^\s*'EditView'\s*=>\s*$/", $line) > 0){
								$line = "'QuickCreate' =>\n";
							}
							fwrite($fp, $line);
						}
						//write back.
						fclose($fp);
					}
					else{
						$GLOBALS['log']->debug("Failed to replace 'EditView' with QuickCreate because $quickcreatedefs is either not readable or does not exist.");
					}
				}else{
					$GLOBALS['log']->debug("Failed to copy $editviewdefs to $quickcreatedefs!");
				}
		}
	}
}


function cleanQuery($query, $oci8=false) {
	$bad = array(
			"&#039;",
			"&quot;",
			);
	$good = array(
			'"',
			"",
			);

	$q = str_replace($bad, $good, $query);








	return $q;
}

/**
 * test perms for CREATE queries
 */
function testPermsCreate($type, $out) {
	logThis('Checking CREATE TABLE permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
		case 'mssql':
			$db->query('CREATE TABLE temp (id varchar(36))');
			if($db->checkError()) {
				logThis('cannot CREATE TABLE!');
				$out['db']['dbNoCreate'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_CREATE']}</span></td></tr>";
			}
		break;

		case 'oci8':



















		break;
	}

	return $out;
}

/**
 * test perms for INSERT
 */
function testPermsInsert($type, $out, $skip=false) {
	logThis('Checking INSERT INTO permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
		case 'mssql':
			if(!$skip) {
				$db->query("INSERT INTO temp (id) VALUES ('abcdef0123456789abcdef0123456789abcd')");
				if($db->checkError()) {
					logThis('cannot INSERT INTO!');
					$out['db']['dbNoInsert'] = true;
					$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_INSERT']}</span></td></tr>";
				}
			}
		break;

		case 'oci8':




















		break;
	}

	return $out;
}


/**
 * test perms for UPDATE TABLE
 */
function testPermsUpdate($type, $out, $skip=false) {
	logThis('Checking UPDATE TABLE permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
		case 'mssql':
			if(!$skip) {
				$db->query("UPDATE temp SET id = '000000000000000000000000000000000000' WHERE id = 'abcdef0123456789abcdef0123456789abcd'");
				if($db->checkError()) {
					logThis('cannot UPDATE TABLE!');
					$out['db']['dbNoUpdate'] = true;
					$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_UPDATE']}</span></td></tr>";
				}
			}
		break;

		case 'oci8':



















		break;
	}

	return $out;
}


/**
 * test perms for SELECT
 */
function testPermsSelect($type, $out, $skip=false) {
	logThis('Checking SELECT permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
		case 'mssql':
			$r = $db->query('SELECT id FROM temp');
			if($db->checkError()) {
				logThis('cannot SELECT!');
				$out['db']['dbNoSelect'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_SELECT']}</span></td></tr>";
			}
			logThis('Checking validity of SELECT results');
			while($a = $db->fetchByAssoc($r)) {
				if($a['id'] != '000000000000000000000000000000000000') {
					logThis('results DO NOT MATCH! got: '.$a['id']);
					$out['db'][] = 'selectFailed';
					$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_INSERT_FAILED']}</span></td></tr>";
				}
			}
		break;

		case 'oci8':



















		break;
	}

	return $out;
}



/**
 * test perms for DELETE
 */
function testPermsDelete($type, $out, $skip=false) {
	logThis('Checking DELETE FROM permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
		case 'mssql':
			$db->query("DELETE FROM temp WHERE id = '000000000000000000000000000000000000'");
			if($db->checkError()) {
				logThis('cannot DELETE FROM!');
				$out['db']['dbNoDelete'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_DELETE']}</span></td></tr>";
			}
		break;

		case 'oci8':



















		break;
	}

	return $out;
}


/**
 * test perms for ALTER TABLE ADD COLUMN
 */
function testPermsAlterTableAdd($type, $out, $skip=false) {
	logThis('Checking ALTER TABLE ADD COLUMN permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
			$db->query('ALTER TABLE temp ADD COLUMN test varchar(100)');
			if($db->checkError()) {
				logThis('cannot ADD COLUMN!');
				$out['db']['dbNoAddColumn'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_ADD_COLUMN']}</span></td></tr>";
			}
		break;

		case 'mssql':
			$db->query('ALTER TABLE [temp] ADD [test] [varchar] (100)');
			if($db->checkError()) {
				logThis('cannot ADD COLUMN!');
				$out['db']['dbNoAddColumn'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_ADD_COLUMN']}</span></td></tr>";
			}
		break;

		case 'oci8':




















		break;
	}

	return $out;
}




/**
 * test perms for ALTER TABLE ADD COLUMN
 */
function testPermsAlterTableChange($type, $out, $skip=false) {
	logThis('Checking ALTER TABLE CHANGE COLUMN permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
			$db->query('ALTER TABLE temp CHANGE COLUMN test test varchar(100)');
			if($db->checkError()) {
				logThis('cannot CHANGE COLUMN!');
				$out['db']['dbNoChangeColumn'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_CHANGE_COLUMN']}</span></td></tr>";
			}
		break;

		case 'mssql':
			$db->query('ALTER TABLE [temp] ALTER COLUMN [test] [varchar] (100)');
			if($db->checkError()) {
				logThis('cannot CHANGE COLUMN!');
				$out['db']['dbNoChangeColumn'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_CHANGE_COLUMN']}</span></td></tr>";
			}
		break;

		case 'oci8':



















		break;
	}

	return $out;
}



/**
 * test perms for ALTER TABLE DROP COLUMN
 */
function testPermsAlterTableDrop($type, $out, $skip=false) {
	logThis('Checking ALTER TABLE DROP COLUMN permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
		case 'mssql':
			$db->query('ALTER TABLE temp DROP COLUMN test');
			if($db->checkError()) {
				logThis('cannot DROP COLUMN!');
				$out['db']['dbNoDropColumn'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_DROP_COLUMN']}</span></td></tr>";
			}
		break;

		case 'oci8':



















		break;
	}

	return $out;
}


/**
 * test perms for DROP TABLE
 */
function testPermsDropTable($type, $out, $skip=false) {
	logThis('Checking DROP TABLE permissions...');
	global $db;
	global $mod_strings;

	switch($type) {
		case 'mysql':
		case 'mssql':
			$db->query('DROP TABLE temp');
			if($db->checkError()) {
				logThis('cannot DROP TABLE!');
				$out['db']['dbNoDropTable'] = true;
				$out['dbOut'] .= "<tr><td align='left'><span class='error'>{$mod_strings['LBL_UW_DB_NO_DROP_TABLE']}</span></td></tr>";
			}
		break;

		case 'oci8':




















		break;
	}

	return $out;
}













































































































































function createMSSQLTemp($table) {
	global $sugar_config;
	global $db;

	$qtest = "SELECT TABLE_NAME tn FROM information.tables WHERE TABLE_NAME = '{$table}__UW_TEMP'";
	$rtest = $db->query($qtest);
	$atest = $db->fetchByAssoc($rtest);

	if(empty($atest)) {
		$tempTable = "CREATE TABLE {$table}__UW_TEMP AS ".$db->limitQuerySql("SELECT * FROM {$table}",0,8);
		logThis("Creating temp table for {$table}: {$tempTable}");
		$db->query($tempTable);
	}
	else {
		logThis("Found {$table}__UW_TEMP - skipping temp table creation.");
	}
}

/**
 * Tests an ALTER TABLE query
 * @param string table The table name to get DDL
 * @param string dbType MySQL, MSSQL, etc.
 * @param string query The query to test.
 * @return string Non-empty if error found
 */
function testQueryAlter($table, $dbType, $query, $newTables) {
	logThis('verifying ALTER statement...');
	global $db;
	global $sugar_config;

	if(empty($db)) {
		$db = &DBManagerFactory::getInstance();
	}

	// Skipping ALTER TABLE [table] DROP PRIMARY KEY because primary keys are not being copied
	// over to the temp tables
	if(strpos(strtoupper($query), 'DROP PRIMARY KEY') !== false) {
		logThis('Skipping DROP PRIMARY KEY verification');
		return '';
	}

	if ($dbType == 'mysql'){
		mysql_error(); // initialize errors
	}
	$error = '';

	if(!in_array($table, $newTables)) {
		switch($dbType) {
			case 'mysql':
				// get DDL
				logThis('creating temp table for ['.$table.']...');
				$q = "SHOW CREATE TABLE {$table}";
				$r = $db->query($q);
				$a = $db->fetchByAssoc($r);

				// rewrite DDL with _temp name
				$cleanQuery = cleanQuery($a['Create Table']);
				$tempTableQuery = str_replace("CREATE TABLE `{$table}`", "CREATE TABLE `{$table}__uw_temp`", $cleanQuery);
				$r2 = $db->query($tempTableQuery);

				// get sample data into the temp table to test for data/constraint conflicts
				logThis('inserting temp dataset...');
				$q3 = "INSERT INTO `{$table}__uw_temp` SELECT * FROM `{$table}` LIMIT 10";
				$r3 = $db->query($q3, false, "Preflight Failed for: {$query}");

				// test the query on the test table
				logThis('testing query: ['.$query.']');
				$tempTableTestQuery = str_replace("ALTER TABLE `{$table}`", "ALTER TABLE `{$table}__uw_temp`", $query);
				if (strpos($tempTableTestQuery, 'idx') === false) {
					if(isRunningAgainstTrueTable($tempTableTestQuery)) {
						$error = getFormattedError('Could not use a temp table to test query!', $query);
						return $error;
					}

					logThis('testing query on temp table: ['.$tempTableTestQuery.']');
					$r4 = $db->query($tempTableTestQuery, false, "Preflight Failed for: {$query}");
				}
				else {
					// test insertion of an index on a table
					$tempTableTestQuery_idx = str_replace("ADD INDEX `idx_", "ADD INDEX `temp_idx_", $tempTableTestQuery);
					logThis('testing query on temp table: ['.$tempTableTestQuery_idx.']');
					$r4 = $db->query($tempTableTestQuery_idx, false, "Preflight Failed for: {$query}");
				}
				$mysqlError = mysql_error(); // empty on no-errors
				if(!empty($mysqlError)) {
					logThis('*** ERROR: query failed: '.$mysqlError);
					$error = getFormattedError($mysqlError, $query);
				}


				// clean up moved to end of preflight
			break;

			case 'mssql':
				logThis('mssql found: skipping test query - ['.$query.']');
			break;

			case 'oci8':
				logThis('Oracle found: skipping test query - ['.$query.']');
			break;
		} // end switch()
	} else {
		logThis($table . ' is a new table');
	}

	logThis('verification done.');
	return $error;
}

/**
 * Tests an CREATE TABLE query
 * @param string table The table name to get DDL
 * @param string dbType MySQL, MSSQL, etc.
 * @param string query The query to test.
 * @return string Non-empty if error found
 */
function testQueryCreate($table, $dbType, $query, &$newTables) {
	logThis('verifying CREATE statement...');
	global $db;
	if(empty($db)) {
		$db = &DBManagerFactory::getInstance();
	}

	$error = '';
	switch($dbType) {
		case 'mysql':
			// rewrite DDL with _temp name
			logThis('testing query: ['.$query.']');
			$tempTableQuery = str_replace("CREATE TABLE `{$table}`", "CREATE TABLE `{$table}__uw_temp`", $query);

			if(isRunningAgainstTrueTable($tempTableQuery)) {
				$error = getFormattedError('Could not use a temp table to test query!', $query);
				return $error;
			}

			$r4 = $db->query($tempTableQuery, false, "Preflight Failed for: {$query}");

			$error = mysql_error(); // empty on no-errors
			if(!empty($error)) {
				logThis('*** ERROR: query failed.');
				$error = getFormattedError($error, $query);
			}

			// check if table exists
			logThis('testing for table: '.$table);
			$q1 = "DESC `{$table}`";
			$r1 = $db->query($q1);

			$mysqlError = mysql_error();
			if(empty($mysqlError)) {
				logThis('*** ERROR: table already exists!: '.$table);
				$error = getFormattedError('table exists', $query);
			}
			else {
				logThis('NEW TABLE: '.$query);
				$newTables[] = $table;
			}
		break;

		case 'mssql':
			logThis('mssql found: skipping test query - ['.$query.']');
		break;

		case 'oci8':
				logThis('Oracle found: skipping test query - ['.$query.']');
			break;
	}
	return $error;
}

/**
 * Tests an DELETE FROM query
 * @param string table The table name to get DDL
 * @param string dbType MySQL, MSSQL, etc.
 * @param string query The query to test.
 * @return string Non-empty if error found
 */
function testQueryDelete($table, $dbType, $query) {
	logThis('verifying DELETE statements');
	global $db;
	if(empty($db)) {
		$db = &DBManagerFactory::getInstance();
	}

	$error = '';

	switch($dbType) {
		case 'mysql':
			// get DDL
			logThis('creating temp table...');
			$q = "SHOW CREATE TABLE {$table}";
			$r = $db->query($q);
			$a = $db->fetchByAssoc($r);

			// rewrite DDL with _temp name
			$cleanQuery = cleanQuery($a['Create Table']);
			$tempTableQuery = str_replace("CREATE TABLE `{$table}`", "CREATE TABLE `{$table}__uw_temp`", $cleanQuery);
			$r2 = $db->query($tempTableQuery);

			// get sample data into the temp table to test for data/constraint conflicts
			logThis('inserting temp dataset...');
			$q3 = "INSERT INTO `{$table}__uw_temp` SELECT * FROM `{$table}` LIMIT 10";
			$r3 = $db->query($q3);

			// test the query on the test table
			logThis('testing query: ['.$query.']');
			$tempTableTestQuery = str_replace("DELETE FROM `{$table}`", "DELETE FROM `{$table}__uw_temp`", $query);

			if(isRunningAgainstTrueTable($tempTableTestQuery)) {
				$error = getFormattedError('Could not use a temp table to test query!', $tempTableTestQuery);
				return $error;
			}

			$r4 = $db->query($tempTableTestQuery, false, "Preflight Failed for: {$query}");
			$error = mysql_error(); // empty on no-errors
			if(!empty($error)) {
				logThis('*** ERROR: query failed.');
				$error = getFormattedError($error, $query);
			}
		break;

		case 'mssql':
			logThis('mssql found: skipping test query - ['.$query.']');
		break;

		case 'oci8':
				logThis('Oracle found: skipping test query - ['.$query.']');
			break;
	}
	logThis('verification done.');
	return $error;
}

/**
 * Tests a DROP TABLE query
 *
 */
function testQueryDrop($table, $dbType, $query) {
	logThis('verifying DROP TABLE statement');
	global $db;
	if(empty($db)) {
		$db = &DBManagerFactory::getInstance();
	}

	$error = '';

	switch($dbType) {
		case 'mysql':
			// get DDL
			logThis('creating temp table...');
			$q = "SHOW CREATE TABLE {$table}";
			$r = $db->query($q);
			$a = $db->fetchByAssoc($r);

			// rewrite DDL with _temp name
			$cleanQuery = cleanQuery($a['Create Table']);
			$tempTableQuery = str_replace("CREATE TABLE `{$table}`", "CREATE TABLE `{$table}__uw_temp`", $cleanQuery);
			$r2 = $db->query($tempTableQuery);

			// get sample data into the temp table to test for data/constraint conflicts
			logThis('inserting temp dataset...');
			$query = stripQuotes($query, $table);
			$q3 = "INSERT INTO `{$table}__uw_temp` SELECT * FROM `{$table}` LIMIT 10";
			$r3 = $db->query($q3);

			// test the query on the test table
			logThis('testing query: ['.$query.']');
			$tempTableTestQuery = str_replace("DROP TABLE `{$table}`", "DROP TABLE `{$table}__uw_temp`", $query);

			// make sure the test query is running against a temp table
			if(isRunningAgainstTrueTable($tempTableTestQuery)) {
				$error = getFormattedError('Could not use a temp table to test query!', $tempTableTestQuery);
				return $error;
			}

			$r4 = $db->query($tempTableTestQuery, false, "Preflight Failed for: {$query}");
			$error = mysql_error(); // empty on no-errors
			if(!empty($error)) {
				logThis('*** ERROR: query failed.');
				$error = getFormattedError($error, $query);
			}
		break;

		case 'mssql':
			logThis('mssql found: skipping test query - ['.$query.']');
		break;

		case 'oci8':
				logThis('Oracle found: skipping test query - ['.$query.']');
			break;
	}
	logThis('verification done.');
	return $error;
}

/**
 * Tests an INSERT INTO query
 * @param string table The table name to get DDL
 * @param string dbType MySQL, MSSQL, etc.
 * @param string query The query to test.
 * @return string Non-empty if error found
 */
function testQueryInsert($table, $dbType, $query) {
	logThis('verifying INSERT statement...');
	global $db;
	if(empty($db)) {
		$db = &DBManagerFactory::getInstance();
	}

	$error = '';

	switch($dbType) {
		case 'mysql':
			// get DDL
			$q = "SHOW CREATE TABLE {$table}";
			$r = $db->query($q);
			$a = $db->fetchByAssoc($r);

			// rewrite DDL with _temp name
			$cleanQuery = cleanQuery($a['Create Table']);
			$tempTableQuery = str_replace("CREATE TABLE `{$table}`", "CREATE TABLE `{$table}__uw_temp`", $cleanQuery);
			$r2 = $db->query($tempTableQuery);

			// test the query on the test table
			logThis('testing query: ['.$query.']');
			$tempTableTestQuery = str_replace("INSERT INTO `{$table}`", "INSERT INTO `{$table}__uw_temp`", $query);

			// make sure the test query is running against a temp table
			if(isRunningAgainstTrueTable($tempTableTestQuery)) {
				$error = getFormattedError('Could not use a temp table to test query!', $tempTableTestQuery);
				return $error;
			}

			$r4 = $db->query($tempTableTestQuery, false, "Preflight Failed for: {$query}");
			$error = mysql_error(); // empty on no-errors
			if(!empty($error)) {
				logThis('*** ERROR: query failed.');
				$error = getFormattedError($error, $query);
			}
		break;

		case 'mssql':
			logThis('mssql found: skipping test query - ['.$query.']');
		break;

		case 'oci8':
				logThis('Oracle found: skipping test query - ['.$query.']');
			break;
	}
	logThis('verification done.');
	return $error;
}


/**
 * Tests an UPDATE TABLE query
 * @param string table The table name to get DDL
 * @param string dbType MySQL, MSSQL, etc.
 * @param string query The query to test.
 * @return string Non-empty if error found
 */
function testQueryUpdate($table, $dbType, $query) {
	logThis('verifying UPDATE TABLE statement...');
	global $db;
	if(empty($db)) {
		$db = &DBManagerFactory::getInstance();
	}

	$error = '';

	switch($dbType) {
		case 'mysql':
			// get DDL
			$q = "SHOW CREATE TABLE {$table}";
			$r = $db->query($q);
			$a = $db->fetchByAssoc($r);

			// rewrite DDL with _temp name
			$cleanQuery = cleanQuery($a['Create Table']);
			$tempTableQuery = str_replace("CREATE TABLE `{$table}`", "CREATE TABLE `{$table}__uw_temp`", $cleanQuery);
			$r2 = $db->query($tempTableQuery);

			// get sample data into the temp table to test for data/constraint conflicts
			logThis('inserting temp dataset...');
			$q3 = "INSERT INTO `{$table}__uw_temp` SELECT * FROM `{$table}` LIMIT 10";
			$r3 = $db->query($q3, false, "Preflight Failed for: {$query}");

			// test the query on the test table
			logThis('testing query: ['.$query.']');
			$tempTableTestQuery = str_replace("UPDATE `{$table}`", "UPDATE `{$table}__uw_temp`", $query);

			// make sure the test query is running against a temp table
			if(isRunningAgainstTrueTable($tempTableTestQuery)) {
				$error = getFormattedError('Could not use a temp table to test query!', $tempTableTestQuery);
				return $error;
			}

			$r4 = $db->query($tempTableTestQuery, false, "Preflight Failed for: {$query}");
			$error = mysql_error(); // empty on no-errors
			if(!empty($error)) {
				logThis('*** ERROR: query failed.');
				$error = getFormattedError($error, $query);
			}
		break;

		case 'mssql':
		break;

		case 'oci8':
				logThis('Oracle found: skipping test query - ['.$query.']');
			break;
	}
	logThis('verification done.');
	return $error;
}


/**
 * strip queries of single and double quotes
 */
function stripQuotes($query, $table) {
	$queryStrip = '';

	$start = strpos($query, $table);

	if(substr($query, ($start - 1), 1) != ' ') {
		$queryStrip  = substr($query, 0, ($start-2));
		$queryStrip .= " {$table} ";
		$queryStrip .= substr($query, ($start + strlen($table) + 2), strlen($query));
	}

	return (empty($queryStrip)) ? $query : $queryStrip;
}

/**
 * ensures that a __UW_TEMP table test SQL is running against a temp table, not the real thing
 * @param string query
 * @return bool false if it is a good query
 */
function isRunningAgainstTrueTable($query) {
	$query = strtoupper($query);
	if(strpos($query, '__UW_TEMP') === false) {
		logThis('***ERROR: test query is NOT running against a temp table!!!! -> '.$query);
		return true;
	}
	return false;
}









/**
 * cleans up temp tables created during schema test phase
 */
function testCleanUp($dbType) {
	logThis('Cleaning up temporary tables...');

	global $db;
	if(empty($db)) {
		$db = &DBManagerFactory::getInstance();
	}

	$error = '';
	switch($dbType) {
		case 'mysql':
			$q = 'SHOW TABLES LIKE "%__uw_temp"';
			$r = $db->query($q, false, "Preflight Failed for: {$q}");

			// using raw mysql_command to use integer index
			while($a = $db->fetchByAssoc($r)) {
				logThis('Dropping table: '.$a[0]);
				$qClean = "DROP TABLE {$a[0]}";
				$rClean = $db->query($qClean);
			}
		break;

		case 'mssql':
		break;

		case 'oci8':








		break;
	}
	logThis('Done cleaning up temp tables.');
	return $error;
}


function getFormattedError($error, $query) {
	$error = "<div><b>".$error;
	$error .= "</b>::{$query}</div>";

	return $error;
}



/**
 * parses a query finding the table name
 * @param string query The query
 * @return string table The table
 */
function getTableFromQuery($query) {
	$standardQueries = array('ALTER TABLE', 'DROP TABLE', 'CREATE TABLE', 'INSERT INTO', 'UPDATE', 'DELETE FROM');
	$query = preg_replace("/[^A-Za-z0-9\_\s]/", "", $query);
	$query = trim(str_replace($standardQueries, '', $query));

	$firstSpc = strpos($query, " ");
	$end = ($firstSpc > 0) ? $firstSpc : strlen($query);
	$table = substr($query, 0, $end);

	return $table;
}

//prelicense check

function preLicenseCheck() {
	require_once('modules/UpgradeWizard/uw_files.php');

	global $sugar_config;
	global $mod_strings;
	global $sugar_version;

	if(!isset($sugar_version) || empty($sugar_version)) {
		require_once('./sugar_version.php');
	}

if(!isset($_SESSION['unzip_dir']) || empty($_SESSION['unzip_dir'])) {
		logThis('unzipping files in upgrade archive...');
		$errors					= array();
		$base_upgrade_dir		= $sugar_config['upload_dir'] . "/upgrades";
		$base_tmp_upgrade_dir	= "$base_upgrade_dir/temp";
		$unzip_dir = '';
		//also come up with mechanism to read from upgrade-progress file
		if(!isset($_SESSION['install_file']) || empty($_SESSION['install_file']) || !is_file($_SESSION['install_file'])) {
			/*
			if ($handle = opendir(clean_path($sugar_config['upload_dir']))) {
	    		while (false !== ($file = readdir($handle))) {
	    		if($file !="." && $file !="..")	{
				   $far = explode(".",$file);
				   if($far[sizeof($far)-1] == 'zip') {
				   		echo $sugar_config['upload_dir'].'/'.$file;
				   		$_SESSION['install_file'] =  $sugar_config['upload_dir'].'/'.$file;
				   }
		       	 }
	    		}
    		}
    		*/
			if (file_exists(clean_path($base_tmp_upgrade_dir)) && $handle = opendir(clean_path($base_tmp_upgrade_dir))) {
		    		while (false !== ($file = readdir($handle))) {
		    		if($file !="." && $file !="..")	{
					 //echo $base_tmp_upgrade_dir."/".$file.'</br>';
					 if(is_file($base_tmp_upgrade_dir."/".$file."/manifest.php")){
					 	require_once($base_tmp_upgrade_dir."/".$file."/manifest.php");
					 	$package_name= $manifest['copy_files']['from_dir'];
					 	//echo file_exists($base_tmp_upgrade_dir."/".$file."/".$package_name).'</br>';
					 	if(file_exists($base_tmp_upgrade_dir."/".$file."/".$package_name) && file_exists($base_tmp_upgrade_dir."/".$file."/scripts") && file_exists($base_tmp_upgrade_dir."/".$file."/manifest.php")){
					 		//echo 'Yeah this the directory '. $base_tmp_upgrade_dir."/".$file;
					 		$unzip_dir = $base_tmp_upgrade_dir."/".$file;
					 		if(file_exists($sugar_config['upload_dir'].'/upgrades/patch/'.$package_name.'.zip')){
					 			$_SESSION['install_file'] = $sugar_config['upload_dir'].'/upgrades/patch/'.$package_name.'.zip';
					 			break;
					 		}
						}
					  }
		    		}
		    	}
			}
		}
        if(!isset($_SESSION['install_file']) || empty($_SESSION['install_file'])){
        	unlinkTempFiles();
        	resetUwSession();
        	echo 'Upload File not found so redirecting to Upgrade Start ';
        	$redirect_new_wizard = $sugar_config['site_url' ].'/index.php?module=UpgradeWizard&action=index';
        	echo '<form name="redirect" action="' .$redirect_new_wizard. '"  method="POST">';
$upgrade_directories_not_found =<<<eoq
	<table cellpadding="3" cellspacing="0" border="0">
		<tr>
			<th colspan="2" align="left">
				<span class='error'><b>'Upload file missing or has been deleted. Refresh the page to go back to UpgradeWizard start'</b></span>
			</th>
		</tr>
	</table>
eoq;
$uwMain = $upgrade_directories_not_found;
				return '';
        }
		$install_file			= urldecode( $_SESSION['install_file'] );
		$show_files				= true;
		if(empty($unzip_dir)){
			$unzip_dir				= mk_temp_dir( $base_tmp_upgrade_dir );
		}
		$zip_from_dir			= ".";
		$zip_to_dir				= ".";
		$zip_force_copy			= array();

		if(!$unzip_dir){
			logThis('Could not create a temporary directory using mk_temp_dir( $base_tmp_upgrade_dir )');
			die($mod_strings['ERR_UW_NO_CREATE_TMP_DIR']);
		}

		//double check whether unzipped .
		if(file_exists($unzip_dir ."/scripts") && file_exists($unzip_dir."/manifest.php")){
        	//already unzipped
		}
		else{
			unzip( $install_file, $unzip_dir );
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
		if( !is_writable( "config.php" ) ){
			return $mod_strings['ERR_UW_CONFIG'];
		}

		$_SESSION['unzip_dir'] = clean_path($unzip_dir);
		$_SESSION['zip_from_dir'] = clean_path($zip_from_dir);
		logThis('unzip done.');
	} else {
		$unzip_dir = $_SESSION['unzip_dir'];
		$zip_from_dir = $_SESSION['zip_from_dir'];
	}

    //check if $_SESSION['unzip_dir'] and $_SESSION['zip_from_dir'] exist
	if(!isset($_SESSION['unzip_dir']) || !file_exists($_SESSION['unzip_dir'])
		|| !isset($_SESSION['install_file']) || empty($_SESSION['install_file']) || !file_exists($_SESSION['install_file'])){
		    //redirect to start
	    unlinkTempFiles();
		resetUwSession();
		echo 'Upload File not found so redirecting to Upgrade Start ';
		$redirect_new_wizard = $sugar_config['site_url' ].'/index.php?module=UpgradeWizard&action=index';
		echo '<form name="redirect" action="' .$redirect_new_wizard. '"  method="POST">';
$upgrade_directories_not_found =<<<eoq
	<table cellpadding="3" cellspacing="0" border="0">
		<tr>
			<th colspan="2" align="left">
				<span class='error'><b>'Upload file missing or has been deleted. Refresh the page to go back to UpgradeWizard start'</b></span>
			</th>
		</tr>
	</table>
eoq;
$uwMain = $upgrade_directories_not_found;
				return '';
	}

	$parserFiles = array();

	if(file_exists(clean_path($unzip_dir.'/'.$zip_from_dir."/include/SugarFields"))) {
		$parserFiles = findAllFiles(clean_path($unzip_dir.'/'.$zip_from_dir."/include/SugarFields"), $parserFiles);
	}

     $cwd = clean_path(getcwd());
	foreach($parserFiles as $file) {
		$srcFile = clean_path($file);
		//$targetFile = clean_path(getcwd() . '/' . $srcFile);
        if (strpos($srcFile,".svn") !== false) {
		  //do nothing
	    }
	    else{
	    $targetFile = str_replace(clean_path($unzip_dir.'/'.$zip_from_dir), $cwd, $srcFile);

		if(!is_dir(dirname($targetFile))) {
			mkdir_recursive(dirname($targetFile)); // make sure the directory exists
		}

		if(!file_exists($targetFile))
		 {
			// handle sugar_version.php
			if(strpos($targetFile, 'sugar_version.php') !== false) {
				logThis('Skipping "sugar_version.php" - file copy will occur at end of successful upgrade', $path);
				$_SESSION['sugar_version_file'] = $srcFile;
				continue;
			}

			logThis('Copying file to destination: ' . $targetFile);

			if(!copy($srcFile, $targetFile)) {
				logThis('*** ERROR: could not copy file: ' . $targetFile);
			} else {
				$copiedFiles[] = $targetFile;
			}
		} else {
			logThis('Skipping file: ' . $targetFile);
			//$skippedFiles[] = $targetFile;
		}
	   }
	 }

    //Also copy the SugarMerge files
 	if(file_exists(clean_path($unzip_dir.'/'.$zip_from_dir."/UpgradeWizard510Files"))) {
		$parserFiles = findAllFiles(clean_path($unzip_dir.'/'.$zip_from_dir."/UpgradeWizard510Files"), $parserFiles);
		foreach($parserFiles as $file) {
			$srcFile = clean_path($file);
			//$targetFile = clean_path(getcwd() . '/' . $srcFile);
	        if (strpos($srcFile,".svn") !== false) {
			  //do nothing
		    }
		    else{
			    $targetFile = str_replace(clean_path($unzip_dir.'/'.$zip_from_dir."/UpgradeWizard510Files"), $cwd, $srcFile);
				if(!is_dir(dirname($targetFile))) {
					mkdir_recursive(dirname($targetFile)); // make sure the directory exists
				}
				logThis('updating UpgradeWizard code: '.$targetFile);
				copy_recursive($file, $targetFile);
		    }
	 	}
    }
    logThis ('is SugarConfig there '.file_exists(clean_path($unzip_dir.'/'.$zip_from_dir."/include/SugarObjects/SugarConfig.php")));
	if(file_exists(clean_path($unzip_dir.'/'.$zip_from_dir."/include/SugarObjects/SugarConfig.php"))) {
		$file = clean_path($unzip_dir.'/'.$zip_from_dir."/include/SugarObjects/SugarConfig.php");
		$destFile = str_replace(clean_path($unzip_dir.'/'.$zip_from_dir), $cwd, $file);
		if(!is_dir(dirname($destFile))) {
			mkdir_recursive(dirname($destFile)); // make sure the directory exists
		}
        copy($file,$destFile);
        //also copy include utils array utils
        $file = clean_path($unzip_dir.'/'.$zip_from_dir."/include/utils/array_utils.php");
		$destFile = str_replace(clean_path($unzip_dir.'/'.$zip_from_dir), $cwd, $file);
		if(!is_dir(dirname($destFile))) {
			mkdir_recursive(dirname($destFile)); // make sure the directory exists
		}
        copy($file,$destFile);
	}
}


function preflightCheck() {
	require_once('modules/UpgradeWizard/uw_files.php');

	global $sugar_config;
	global $mod_strings;
	global $sugar_version;

	if(!isset($sugar_version) || empty($sugar_version)) {
		require_once('./sugar_version.php');
	}

	unset($_SESSION['rebuild_relationships']);
	unset($_SESSION['rebuild_extensions']);

	// don't bother if are rechecking
	$manualDiff			= array();
	if(!isset($_SESSION['unzip_dir']) || empty($_SESSION['unzip_dir'])) {
		logThis('unzipping files in upgrade archive...');
		$errors					= array();
		$base_upgrade_dir		= $sugar_config['upload_dir'] . "/upgrades";
		$base_tmp_upgrade_dir	= "$base_upgrade_dir/temp";
		$unzip_dir = '';
		//Following is if User logged out unexpectedly and then logged into UpgradeWizard again.
		//also come up with mechanism to read from upgrade-progress file.
		if(!isset($_SESSION['install_file']) || empty($_SESSION['install_file']) || !is_file($_SESSION['install_file'])) {
			if (file_exists(clean_path($base_tmp_upgrade_dir)) && $handle = opendir(clean_path($base_tmp_upgrade_dir))) {
		    	while (false !== ($file = readdir($handle))) {
		    		if($file !="." && $file !="..")	{
					 //echo $base_tmp_upgrade_dir."/".$file.'</br>';
					 if(is_file($base_tmp_upgrade_dir."/".$file."/manifest.php")){
					 	require_once($base_tmp_upgrade_dir."/".$file."/manifest.php");
					 	$package_name= $manifest['copy_files']['from_dir'];
					 	//echo file_exists($base_tmp_upgrade_dir."/".$file."/".$package_name).'</br>';
					 	if(file_exists($base_tmp_upgrade_dir."/".$file."/".$package_name) && file_exists($base_tmp_upgrade_dir."/".$file."/scripts") && file_exists($base_tmp_upgrade_dir."/".$file."/manifest.php")){
					 		//echo 'Yeah this the directory '. $base_tmp_upgrade_dir."/".$file;
					 		$unzip_dir = $base_tmp_upgrade_dir."/".$file;
					 		if(file_exists($sugar_config['upload_dir'].'/upgrades/patch/'.$package_name.'.zip')){
					 			$_SESSION['install_file'] = $sugar_config['upload_dir'].'/upgrades/patch/'.$package_name.'.zip';
					 			break;
					 		}
						}
					  }
		    		}
		    	}
			}
		}
        if(!isset($_SESSION['install_file']) || empty($_SESSION['install_file'])){
        	unlinkTempFiles();
        	resetUwSession();
        	echo 'Upload File not found so redirecting to Upgrade Start ';
        	$redirect_new_wizard = $sugar_config['site_url' ].'/index.php?module=UpgradeWizard&action=index';
        	echo '<form name="redirect" action="' .$redirect_new_wizard. '"  method="POST">';
$upgrade_directories_not_found =<<<eoq
	<table cellpadding="3" cellspacing="0" border="0">
		<tr>
			<th colspan="2" align="left">
				<span class='error'><b>'Upload file missing or has been deleted. Refresh the page to go back to UpgradeWizard start'</b></span>
			</th>
		</tr>
	</table>
eoq;
$uwMain = $upgrade_directories_not_found;
				return '';

        }
		$install_file			= urldecode( $_SESSION['install_file'] );
		$show_files				= true;
		if(empty($unzip_dir)){
			$unzip_dir				= mk_temp_dir( $base_tmp_upgrade_dir );
		}
		$zip_from_dir			= ".";
		$zip_to_dir				= ".";
		$zip_force_copy			= array();

		if(!$unzip_dir){
			logThis('Could not create a temporary directory using mk_temp_dir( $base_tmp_upgrade_dir )');
			die($mod_strings['ERR_UW_NO_CREATE_TMP_DIR']);
		}

		//double check whether unzipped .
		if(file_exists($unzip_dir ."/scripts") && file_exists($unzip_dir."/manifest.php")){
        	//already unzipped
		}
		else{
			unzip( $install_file, $unzip_dir );
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
		if( !is_writable( "config.php" ) ){
			return $mod_strings['ERR_UW_CONFIG'];
		}

		$_SESSION['unzip_dir'] = clean_path($unzip_dir);
		$_SESSION['zip_from_dir'] = clean_path($zip_from_dir);

	 //logThis('unzip done.');
	} else {
		$unzip_dir = $_SESSION['unzip_dir'];
		$zip_from_dir = $_SESSION['zip_from_dir'];
	}
	//check if $_SESSION['unzip_dir'] and $_SESSION['zip_from_dir'] exist
	if(!isset($_SESSION['unzip_dir']) || !file_exists($_SESSION['unzip_dir'])
		|| !isset($_SESSION['install_file']) || empty($_SESSION['install_file']) || !file_exists($_SESSION['install_file'])){
		    //redirect to start
	    unlinkTempFiles();
		resetUwSession();
		echo 'Upload File not found so redirecting to Upgrade Start ';
		$redirect_new_wizard = $sugar_config['site_url' ].'/index.php?module=UpgradeWizard&action=index';
		echo '<form name="redirect" action="' .$redirect_new_wizard. '"  method="POST">';
$upgrade_directories_not_found =<<<eoq
	<table cellpadding="3" cellspacing="0" border="0">
		<tr>
			<th colspan="2" align="left">
				<span class='error'><b>'Upload file missing or has been deleted. Refresh the page to go back to UpgradeWizard start'</b></span>
			</th>
		</tr>
	</table>
eoq;
$uwMain = $upgrade_directories_not_found;
				return '';
	}
	//copy minimum required files
	fileCopy('include/utils/sugar_file_utils.php');


	if(file_exists('include/utils/file_utils.php')){
		require_once('include/utils/file_utils.php');
	}
	$upgradeFiles = findAllFiles(clean_path("$unzip_dir/$zip_from_dir"), array());
	$cache_html_files= array();
	if(is_dir("cache/layout")){
	 //$cache_html_files = findAllFilesRelative( "cache/layout", array());
	}

	// get md5 sums
	$md5_string = array();
	if(file_exists(clean_path(getcwd().'/files.md5'))){
		require(clean_path(getcwd().'/files.md5'));
	}

	// file preflight checks
	logThis('verifying md5 checksums for files...');
	foreach($upgradeFiles as $file) {
		if(in_array(str_replace(clean_path("$unzip_dir/$zip_from_dir") . "/", '', $file), $uw_files))
			continue; // skip already loaded files

		if(strpos($file, '.md5'))
			continue; // skip md5 file

		// normalize file paths
		$file = clean_path($file);

		// check that we can move/delete the upgraded file
		if(!is_writable($file)) {
			$errors[] = $mod_strings['ERR_UW_FILE_NOT_WRITABLE'].": ".$file;
		}
		// check that destination files are writable
		$destFile = getcwd().str_replace(clean_path($unzip_dir.'/'.$zip_from_dir), '', $file);

		if(is_file($destFile)) { // of course it needs to exist first...
			if(!is_writable($destFile)) {
				$errors[] = $mod_strings['ERR_UW_FILE_NOT_WRITABLE'].": ".$destFile;
			}
		}

		///////////////////////////////////////////////////////////////////////
		////	DIFFS
		// compare md5s and build up a manual merge list
		$targetFile = clean_path(".".str_replace(getcwd(),'',$destFile));
		$targetMd5 = '0';
		if(is_file($destFile)) {
			if(strpos($targetFile, '.php')) {
				// handle PHP files that were hit with the security regex
				$fp = '';
				if(function_exists('sugar_fopen')){
					$fp = sugar_fopen($destFile, 'r');
				}
				else{
					$fp = fopen($destFile, 'r');
				}
				$filesize = filesize($destFile);
				if($filesize > 0) {
					$fileContents = fread($fp, $filesize);
					$targetMd5 = md5($fileContents);
				}
			} else {
				$targetMd5 = md5_file($destFile);
			}
		}

		if(isset($md5_string[$targetFile]) && $md5_string[$targetFile] != $targetMd5) {
			logThis('found a file with a differing md5: ['.$targetFile.']');
			$manualDiff[] = $destFile;
		}
		////	END DIFFS
		///////////////////////////////////////////////////////////////////////
	}
	logThis('md5 verification done.');
	$errors['manual'] = $manualDiff;

	return $errors;
}

function fileCopy($file_path){
	if(file_exists(clean_path($_SESSION['unzip_dir'].'/'.$_SESSION['zip_from_dir'].'/'.$file_path))) {
		$file = clean_path($_SESSION['unzip_dir'].'/'.$_SESSION['zip_from_dir'].'/'.$file_path);
		$destFile = str_replace(clean_path($_SESSION['unzip_dir'].'/'.$_SESSION['zip_from_dir']),  clean_path(getcwd()), $file);
	if(!is_dir(dirname($destFile))) {
		mkdir_recursive(dirname($destFile)); // make sure the directory exists
		}
		copy_recursive($file,$destFile);
	}
}
function getChecklist($steps, $step) {
	global $mod_strings;

	$skip = array('start', 'cancel', 'uninstall');
	$j=0;
	$i=1;
	$ret  = '<table cellpadding="3" cellspacing="0" border="0">';
	$ret .= '<tr><th colspan="3" align="left">'.$mod_strings['LBL_UW_CHECKLIST'].':</th></tr>';
	foreach($steps['desc'] as $k => $desc) {
		if(in_array($steps['files'][$j], $skip)) {
			$j++;
			continue;
		}

		//$status = "<span class='error'>{$mod_strings['LBL_UW_INCOMPLETE']}</span>";
		$status = '';
		if(isset($_SESSION['step'][$steps['files'][$k]]) && $_SESSION['step'][$steps['files'][$k]] == 'success') {
			$status = $mod_strings['LBL_UW_COMPLETE'];
		}

		if($k == $_REQUEST['step']) {
			$status = $mod_strings['LBL_UW_IN_PROGRESS'];
		}

		$ret .= "<tr><td>&nbsp;</td><td><b>{$i}: {$desc}</b></td>";
		$ret .= "<td id={$steps['files'][$j]}><i>{$status}</i></td></tr>";
		$i++;
		$j++;
	}
	$ret .= "</table>";
	return $ret;
}

function prepSystemForUpgrade() {
	global $sugar_config;
	global $sugar_flavor;
	global $mod_strings;
	global $subdirs;
	global $base_upgrade_dir;
	global $base_tmp_upgrade_dir;

	///////////////////////////////////////////////////////////////////////////////
	////	Make sure variables exist
	if(!isset($base_upgrade_dir) || empty($base_upgrade_dir)){
		$base_upgrade_dir       = getcwd().'/'.$sugar_config['upload_dir'] . "upgrades";
	}
	if(!isset($base_tmp_upgrade_dir) || empty($base_tmp_upgrade_dir)){
		$base_tmp_upgrade_dir   = "$base_upgrade_dir/temp";
	}
	if(!isset($subdirs) || empty($subdirs)){
		$subdirs = array('full', 'langpack', 'module', 'patch', 'theme', 'temp');
	}

    $upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
    $upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
    if(file_exists($upgrade_progress_file)){
    	if(function_exists('get_upgrade_progress') && function_exists('didThisStepRunBefore')){
    		if(didThisStepRunBefore('end')){
    			include($upgrade_progress_file);
    			unset($upgrade_config);
    			unlink($upgrade_progress_file);
    		}
    	}
    }

    // increase the cuttoff time to 1 hour
	ini_set("max_execution_time", "3600");

    // make sure dirs exist
	if($subdirs != null){
		foreach($subdirs as $subdir) {
		    mkdir_recursive("$base_upgrade_dir/$subdir");
		}
	}
	// array of special scripts that are executed during (un)installation-- key is type of script, value is filename
	if(!defined('SUGARCRM_PRE_INSTALL_FILE')) {
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

	// check that the upload limit is set to 6M or greater
	define('SUGARCRM_MIN_UPLOAD_MAX_FILESIZE_BYTES', 6 * 1024 * 1024);  // 6 Megabytes
	$upload_max_filesize = ini_get('upload_max_filesize');
	$upload_max_filesize_bytes = return_bytes($upload_max_filesize);

	if($upload_max_filesize_bytes < constant('SUGARCRM_MIN_UPLOAD_MAX_FILESIZE_BYTES')) {
		$GLOBALS['log']->debug("detected upload_max_filesize: $upload_max_filesize");

		echo '<p class="error">'.$mod_strings['MSG_INCREASE_UPLOAD_MAX_FILESIZE'].' '.get_cfg_var('cfg_file_path')."</p>\n";
	}
}

function extractFile($zip_file, $file_in_zip) {
    global $base_tmp_upgrade_dir;

	// strip cwd
	$absolute_base_tmp_upgrade_dir = clean_path($base_tmp_upgrade_dir);
	$relative_base_tmp_upgrade_dir = clean_path(str_replace(clean_path(getcwd()), '', $absolute_base_tmp_upgrade_dir));

    // mk_temp_dir expects relative pathing
    $my_zip_dir = mk_temp_dir($relative_base_tmp_upgrade_dir);

    unzip_file($zip_file, $file_in_zip, $my_zip_dir);

    return("$my_zip_dir/$file_in_zip");
}

function extractManifest($zip_file) {
	logThis('extracting manifest.');
    return(extractFile($zip_file, "manifest.php"));
}


function getInstallType($type_string) {
    // detect file type
    global $subdirs;
	$subdirs = array('full', 'langpack', 'module', 'patch', 'theme', 'temp');
    foreach($subdirs as $subdir) {
        if(preg_match("#/$subdir/#", $type_string)) {
            return($subdir);
        }
    }
    // return empty if no match
    return("");
}

function getImageForType($type) {
    global $image_path;
    $icon = "";
    switch($type) {
        case "full":
            $icon = get_image($image_path . "Upgrade", "");
            break;
        case "langpack":
            $icon = get_image($image_path . "LanguagePacks", "");
            break;
        case "module":
            $icon = get_image($image_path . "ModuleLoader", "");
            break;
        case "patch":
            $icon = get_image($image_path . "PatchUpgrades", "");
            break;
        case "theme":
            $icon = get_image($image_path . "Themes", "");
            break;
        default:
            break;
    }
    return($icon);
}

function getLanguagePackName($the_file) {
    require_once("$the_file");
    if(isset($app_list_strings["language_pack_name"])) {
        return($app_list_strings["language_pack_name"]);
    }
    return("");
}

function getUITextForType($type) {
    if($type == "full") {
        return("Full Upgrade");
    }
    if($type == "langpack") {
        return("Language Pack");
    }
    if($type == "module") {
        return("Module");
    }
    if($type == "patch") {
        return("Patch");
    }
    if($type == "theme") {
        return("Theme");
    }
}

function run_upgrade_wizard_sql($script) {
    global $unzip_dir;
    global $sugar_config;

    $db_type = $sugar_config['dbconfig']['db_type'];
    $script = str_replace("%db_type%", $db_type, $script);
    if(!run_sql_file("$unzip_dir/$script")) {
        die("Error running sql file: $unzip_dir/$script");
    }
}

/**
 * Verifies a manifest from a patch or module to be compatible with the current Sugar version and flavor
 * @param array manifest Standard manifest array
 * @return string Error message, blank on success
 */
function validate_manifest($manifest) {
	logThis('validating manifest.php file');
    // takes a manifest.php manifest array and validates contents
    global $subdirs;
    global $sugar_version;
    global $sugar_flavor;
	global $mod_strings;

    if(!isset($manifest['type'])) {
        return $mod_strings['ERROR_MANIFEST_TYPE'];
    }

    $type = $manifest['type'];

    if(getInstallType("/$type/") == "") {
		return $mod_strings['ERROR_PACKAGE_TYPE']. ": '" . $type . "'.";
    }

    if(isset($manifest['acceptable_sugar_versions'])) {
        $version_ok = false;
        $matches_empty = true;
        if(isset($manifest['acceptable_sugar_versions']['exact_matches'])) {
            $matches_empty = false;
            foreach($manifest['acceptable_sugar_versions']['exact_matches'] as $match) {
                if($match == $sugar_version) {
                    $version_ok = true;
                }
            }
        }
        if(!$version_ok && isset($manifest['acceptable_sugar_versions']['regex_matches'])) {
            $matches_empty = false;
            foreach($manifest['acceptable_sugar_versions']['regex_matches'] as $match) {
                if(preg_match("/$match/", $sugar_version)) {
                    $version_ok = true;
                }
            }
        }

        if(!$matches_empty && !$version_ok) {
            return $mod_strings['ERROR_VERSION_INCOMPATIBLE']."<br />".
            $mod_strings['ERR_UW_VERSION'].$sugar_version;
        }
    }

    if(isset($manifest['acceptable_sugar_flavors']) && sizeof($manifest['acceptable_sugar_flavors']) > 0) {
        $flavor_ok = false;
        foreach($manifest['acceptable_sugar_flavors'] as $match) {
            if($match == $sugar_flavor) {
                $flavor_ok = true;
            }
        }
        if(!$flavor_ok) {
            return $mod_strings['ERROR_FLAVOR_INCOMPATIBLE']."<br />".
            $mod_strings['ERR_UW_FLAVOR'].$sugar_flavor."<br />".
            $mod_strings['ERR_UW_FLAVOR_2'].$manifest['acceptable_sugar_flavors'][0];
        }
    }

    return '';
}


function unlinkUploadFiles() {
	return;
//	logThis('at unlinkUploadFiles()');
//
//	if(isset($_SESSION['install_file']) && !empty($_SESSION['install_file'])) {
//		$upload = $_SESSION['install_file'];
//
//		if(is_file($upload)) {
//			logThis('unlinking ['.$upload.']');
//			@unlink($upload);
//		}
//	}
}

/**
 * deletes files created by unzipping a package
 */

function unlinkTempFiles() {
	global $sugar_config;
	global $path;

	logThis('at unlinkTempFiles()');
	$tempDir='';
	if(isset($sugar_config['upload_dir']) && $sugar_config['upload_dir'] != null && $sugar_config['upload_dir']=='cache/upload/'){
		$tempDir = clean_path(getcwd().'/'.$sugar_config['upload_dir'].'upgrades/temp');
	}
	else{
		$uploadDir = getcwd()."/".'cache/upload/';
		$tempDir = clean_path(getcwd().'/'.$uploadDir.'upgrades/temp');
	}
	if(file_exists($tempDir) && is_dir($tempDir)){
		$files = findAllFiles($tempDir, array(), false);
		rsort($files);
		foreach($files as $file) {
			if(!is_dir($file)) {
				logThis('unlinking ['.$file.']', $path);
				@unlink($file);
			}
		}
		// now do dirs
		$files = findAllFiles($tempDir, array(), true);
		foreach($files as $dir) {
			if(is_dir($dir)) {
				logThis('removing dir ['.$dir.']', $path);
				@rmdir($dir);
			}
		}
		$cacheFile = "modules/UpgradeWizard/_persistence.php";
		if(is_file($cacheFile)) {
			logThis("Unlinking Upgrade cache file: '_persistence.php'", $path);
			@unlink($cacheFile);
		}
	}
}


/**
 * finds all files in the passed path, but skips select directories
 * @param string dir Relative path
 * @param array the_array Collections of found files/dirs
 * @param bool include_dir True if we want to include directories in the
 * returned collection
 */
function uwFindAllFiles($dir, $the_array, $include_dirs=false, $skip_dirs=array(), $echo=false) {
	// check skips
	foreach($skip_dirs as $skipMe) {
		if(strpos(clean_path($dir), $skipMe) !== false) {
			return $the_array;
		}
	}

	$d = dir($dir);

	while($f = $d->read()) {
	    if($f == "." || $f == "..") { // skip *nix self/parent
	        continue;
	    }

		// for AJAX length count
    	if($echo) {
	    	echo '.';
	    	ob_flush();
    	}

	    if(is_dir("$dir/$f")) {
			if($include_dirs) { // add the directory if flagged
				$the_array[] = clean_path("$dir/$f");
			}

			// recurse in
	        $the_array = uwFindAllFiles("$dir/$f/", $the_array, $include_dirs, $skip_dirs, $echo);
	    } else {
	        $the_array[] = clean_path("$dir/$f");
	    }


	}
	rsort($the_array);
	return $the_array;
}



/**
 * unset's UW's Session Vars
 */
function resetUwSession() {
	logThis('resetting $_SESSION');

	if(isset($_SESSION['committed']))
		unset($_SESSION['committed']);
	if(isset($_SESSION['sugar_version_file']))
		unset($_SESSION['sugar_version_file']);
	if(isset($_SESSION['upgrade_complete']))
		unset($_SESSION['upgrade_complete']);
	if(isset($_SESSION['allTables']))
		unset($_SESSION['allTables']);
	if(isset($_SESSION['alterCustomTableQueries']))
		unset($_SESSION['alterCustomTableQueries']);
	if(isset($_SESSION['skip_zip_upload']))
		unset($_SESSION['skip_zip_upload']);
	if(isset($_SESSION['sugar_version_file']))
		unset($_SESSION['sugar_version_file']);
	if(isset($_SESSION['install_file']))
		unset($_SESSION['install_file']);
	if(isset($_SESSION['unzip_dir']))
		unset($_SESSION['unzip_dir']);
	if(isset($_SESSION['zip_from_dir']))
		unset($_SESSION['zip_from_dir']);
	if(isset($_SESSION['overwrite_files']))
		unset($_SESSION['overwrite_files']);
	if(isset($_SESSION['schema_change']))
		unset($_SESSION['schema_change']);
	if(isset($_SESSION['uw_restore_dir']))
		unset($_SESSION['uw_restore_dir']);
	if(isset($_SESSION['step']))
		unset($_SESSION['step']);
	if(isset($_SESSION['files']))
		unset($_SESSION['files']);
	if(isset($_SESSION['Upgraded451Wizard'])){
		unset($_SESSION['Upgraded451Wizard']);
	}
	if(isset($_SESSION['Initial_451to500_Step'])){
		unset($_SESSION['Initial_451to500_Step']);
	}
	if(isset($_SESSION['license_shown']))
		unset($_SESSION['license_shown']);

}

/**
 * runs rebuild scripts
 */
function UWrebuild() {
	global $db;
	global $path;

	logThis('Rebuilding everything...', $path);
	require_once('ModuleInstall/ModuleInstaller.php');
	$mi = new ModuleInstaller();
	$mi->rebuild_all(true);

	$query = "DELETE FROM versions WHERE name='Rebuild Extensions'";
	$db->query($query);
	logThis('Registering rebuild record: '.$query, $path);
	logThis('Rebuild done.', $path);

	// insert a new database row to show the rebuild extensions is done
	$id = create_guid();
	$gmdate = gmdate($GLOBALS['timedate']->get_db_date_time_format());
	$date_entered = db_convert("'$gmdate'", 'datetime');
	$query = 'INSERT INTO versions (id, deleted, date_entered, date_modified, modified_user_id, created_by, name, file_version, db_version) '
		. "VALUES ('$id', '0', $date_entered, $date_entered, '1', '1', 'Rebuild Extensions', '4.0.0', '4.0.0')";
	$db->query($query);
	logThis('Registering rebuild record in versions table: '.$query, $path);
}

function getCustomTables($dbType) {
	global $db;

	$customTables = array();

    switch($dbType) {
		case 'mysql':
    		$query = "SHOW tables LIKE '%_cstm'";
        	$result = $db->query($query);//, true, 'Error getting custom tables');
            while ($row = $db->fetchByAssoc($result)){
            	$customTables[] = array_pop($row);
            }
            break;
	}
    return $customTables;
}

function alterCustomTables($dbType, $customTables)
{
	switch($dbType) {
		case 'mysql':
			$i = 0;
			while( $i < count($customTables) ) {
				$alterCustomTableSql[] = "ALTER TABLE " . $customTables[$i] . " CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci";
				$i++;
			}
			break;
		case 'oci8':
			break;
	}
	return $alterCustomTableSql;
}

function executeAlterCustomTablesSql($dbType, $queries) {
	global $db;

	foreach($queries as $query){
		if(!empty($query)){
			logThis("Sending query: ".$query);
	            if($db->dbType == 'oci8') {



     	        } else {
                    $query_result = $db->query($query);//.';', true, "An error has occured while performing db query.  See log file for details.<br>");
                }
         }
	}
	return true;
}

function getAllTables($dbType) {
	global $db;

	$tables = array();

    switch($dbType) {
		case 'mysql':
    		$query = "SHOW tables";
        	$result = $db->query($query, true, 'Error getting custom tables');
            while ($row = $db->fetchByAssoc($result)){
            	$tables[] = array_pop($row);
            }
            break;
	}
    return $tables;
}

function printAlterTableSql($tables)
{
	$alterTableSql = '';

	foreach($tables as $table)
		$alterTableSql .= "ALTER TABLE " . $table . " CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci;" . "\n";

	return $alterTableSql;
}

function executeConvertTablesSql($dbType, $tables) {
	global $db;

	foreach($tables as $table){
		$query = "ALTER TABLE " . $table . " CONVERT TO CHARACTER SET utf8 COLLATE utf8_general_ci";
		if(!empty($table)){
			logThis("Sending query: ".$query);
	            if($db->dbType == 'oci8') {



     	        } else {
                    $query_result = $db->query($query);//.';', true, "An error has occured while performing db query.  See log file for details.<br>");
                }
         }
	}
	return true;
}

function testThis() {
	$files = uwFindAllFiles(getcwd().'/test', array());

	$out = "<table cellpadding='1' cellspacing='0' border='0'>\n";

	$priorPath = '';
	foreach($files as $file) {
		$relativeFile = clean_path(str_replace(getcwd().'/test', '', $file));
		$relativeFile = ($relativeFile{0} == '/') ? substr($relativeFile, 1, strlen($relativeFile)) : $relativeFile;

		$relativePath = dirname($relativeFile);

		if($relativePath == $priorPath) { // same dir, new file
			$out .= "<tr><td>".basename($relativeFile)."</td></tr>";
			$priorPath = $relativePath;
		} else { // new dir

		}
	}

	$out .= "</table>";

	echo $out;
}




function testThis2($dir, $id=0, $hide=false) {
	$path = $dir;
	$dh = opendir($dir);
	rewinddir($dh);

	$doHide = ($hide) ? 'none' : '';
	$out = "<div id='{$id}' style='display:{$doHide};'>";
	$out .= "<table cellpadding='1' cellspacing='0' border='0' style='border:0px solid #ccc'>\n";

	while($file = readdir($dh)) {
		if($file == '.' || $file == '..' || $file == 'CVS' || $file == '.cvsignore')
			continue;

		if(is_dir($path.'/'.$file)) {
			$file = $path.'/'.$file;
			$newI = create_guid();
			$out .= "<tr><td valign='top'><a href='javascript:toggleNwFiles(\"{$newI}\");'><img border='0' src='themes/default/images/Workflow.gif'></a></td>\n";
			$out .= "<td valign='top'><b><a href='javascript:toggleNwFiles(\"{$newI}\");'>".basename($file)."</a></b></td></tr>";
			$out .= "<tr><td></td><td valign='top'>".testThis2($file, $newI, true)."</td></tr>";
		} else {
			$out .= "<tr><td valign='top'>&nbsp;</td>\n";
			$out .= "<td valign='top'>".basename($file)."</td></tr>";
		}
	}

	$out .= "</tr></table>";
	$out .= "</div>";

	closedir($dh);
	return $out;
}





function testThis3(&$files, $id, $hide, $previousPath = '') {
	if(!is_array($files) || empty($files))
		return '';

_pp($files);
	$out = '';

	// expecting full path here
	foreach($files as $k => $file) {
		$file = str_replace(getcwd(), '', $file);
		$path = dirname($file);
		$fileName = basename($file);

		if($fileName == 'CVS' || $fileName == '.cvsignore')
			continue;

		if($path == $previousPath) { // same directory
			// new row for each file
			$out .= "<tr><td valign='top' align='left'>&nbsp;</td>";
			$out .= "<td valign='top' align='left'>{$fileName}</td></tr>";
		} else { // new directory
			$newI = $k;
			$out .= "<tr><td valign='top'><a href='javascript:toggleNwFiles(\"{$newI}\");'><img border='0' src='themes/default/images/Workflow.gif'></a></td>\n";
			$out .= "<td valign='top'><b><a href='javascript:toggleNwFiles(\"{$newI}\");'>".$fileName."</a></b></td></tr>";
			$recurse = testThis3($files, $newI, true, $previousPath);
			_ppd($recurse);
			$out .= "<tr><td></td><td valign='top'>".$recurse."</td></tr>";
		}

		$previousPath = $path;
	}
	$display = ($hide) ? 'none' : '';
	$ret = <<<eoq
	<div id="{$id}" style="display:{$display}">
	<table cellpadding='1' cellspacing='0' border='0' style='border:1px solid #ccc'>
		{$out}
	</table>
	</div>
eoq;
	return $ret;
}


function testThis4($filePath, $fileNodes=array(), $fileName='') {
	$path = dirname($filePath);
	$file = basename($filePath);

	$exFile = explode('/', $path);

	foreach($exFile as $pathSegment) {
		if(is_array($fileNodes[$pathSegment])) { // path already processed

		} else { // newly found path
			$fileNodes[$pathSegment] = array();
		}

		if($fileName != '') {
			$fileNodes[$pathSegment][] = $fileName;
		}
	}

	return $fileNodes;
}



///////////////////////////////////////////////////////////////////////////////
////	SYSTEM CHECK FUNCTIONS
/**
 * generates an array with all files in the SugarCRM root directory, skipping
 * cache/
 * @return array files Array of files with absolute paths
 */
function getFilesForPermsCheck() {
	global $sugar_config;

	logThis('Got JSON call to find all files...');
	$filesNotWritable = array();
	$filesNWPerms = array();

	// add directories here that should be skipped when doing file permissions checks (cache/upload is the nasty one)
	$skipDirs = array(
		$sugar_config['upload_dir'],
	);
	$files = uwFindAllFiles(getcwd(), array(), true, $skipDirs, true);
	return $files;
}

/**
 * checks files for permissions
 * @param array files Array of files with absolute paths
 * @return string result of check
 */
function checkFiles($files, $echo=false) {
	global $mod_strings;
	$filesNotWritable = array();
	$i=0;
	$filesOut = "
		<a href='javascript:void(0); toggleNwFiles(\"filesNw\");'>{$mod_strings['LBL_UW_SHOW_NW_FILES']}</a>
		<div id='filesNw' style='display:none;'>
		<table cellpadding='3' cellspacing='0' border='0'>
		<tr>
			<th align='left'>{$mod_strings['LBL_UW_FILE']}</th>
			<th align='left'>{$mod_strings['LBL_UW_FILE_PERMS']}</th>
			<th align='left'>{$mod_strings['LBL_UW_FILE_OWNER']}</th>
			<th align='left'>{$mod_strings['LBL_UW_FILE_GROUP']}</th>
		</tr>";

	$isWindows = is_windows();
	foreach($files as $file) {

		if($isWindows) {
			if(!is_writable_windows($file)) {
				logThis('WINDOWS: File ['.$file.'] not readable - saving for display');
				// don't warn yet - we're going to use this to check against replacement files
	// aw: commented out; it's a hack to allow upgrade wizard to continue on windows... will fix later
				/*$filesNotWritable[$i] = $file;
				$filesNWPerms[$i] = substr(sprintf('%o',fileperms($file)), -4);
				$filesOut .= "<tr>".
								"<td><span class='error'>{$file}</span></td>".
								"<td>{$filesNWPerms[$i]}</td>".
								"<td>".$mod_strings['ERR_UW_CANNOT_DETERMINE_USER']."</td>".
								"<td>".$mod_strings['ERR_UW_CANNOT_DETERMINE_GROUP']."</td>".
							  "</tr>";*/
			}
		} else {
			if(!is_writable($file)) {
				logThis('File ['.$file.'] not writable - saving for display');
				// don't warn yet - we're going to use this to check against replacement files
				$filesNotWritable[$i] = $file;
				$filesNWPerms[$i] = substr(sprintf('%o',fileperms($file)), -4);
				$owner = posix_getpwuid(fileowner($file));
				$group = posix_getgrgid(filegroup($file));
				$filesOut .= "<tr>".
								"<td><span class='error'>{$file}</span></td>".
								"<td>{$filesNWPerms[$i]}</td>".
								"<td>".$owner['name']."</td>".
								"<td>".$group['name']."</td>".
							  "</tr>";
			}
		}
		$i++;
	}

	$filesOut .= '</table></div>';
	// not a stop error
	$errors['files']['filesNotWritable'] = (count($filesNotWritable) > 0) ? true : false;
	if(count($filesNotWritable) < 1) {
		$filesOut = "{$mod_strings['LBL_UW_FILE_NO_ERRORS']}";
	}

	return $filesOut;
}

function deletePackageOnCancel(){
	global $mod_strings;
	global $sugar_config;
	logThis('running delete');
    if(!isset($_SESSION['install_file']) || ($_SESSION['install_file'] == "")) {
    	logThis('ERROR: trying to delete non-existent file: ['.$_REQUEST['install_file'].']');
        $error = $mod_strings['ERR_UW_NO_FILE_UPLOADED'];
    }
    // delete file in upgrades/patch
    $delete_me = urldecode( $_SESSION['install_file'] );
    if(@unlink($delete_me)) {
    	logThis('unlinking: '.$delete_me);
        $out = basename($delete_me).$mod_strings['LBL_UW_FILE_DELETED'];
    } else {
    	logThis('ERROR: could not delete ['.$delete_me.']');
		$error = $mod_strings['ERR_UW_FILE_NOT_DELETED'].$delete_me;
    }

    // delete file in cache/upload
    $fileS = explode('/', $delete_me);
    $c = count($fileS);
    $fileName = (isset($fileS[$c-1]) && !empty($fileS[$c-1])) ? $fileS[$c-1] : $fileS[$c-2];
    $deleteUpload = getcwd().'/'.$sugar_config['upload_dir'].$fileName;
    logThis('Trying to delete '.$deleteUpload);
    if(!@unlink($deleteUpload)) {
    	logThis('ERROR: could not delete: ['.$deleteUpload.']');
    	$error = $mod_strings['ERR_UW_FILE_NOT_DELETED'].$sugar_config['upload_dir'].$fileName;
    }
    if(!empty($error)) {
		$out = "<b><span class='error'>{$error}</span></b><br />";
    }
}


function parseAndExecuteSqlFile($sqlScript,$forStepQuery='',$resumeFromQuery=''){
	global $sugar_config;
	$alterTableSchema = '';
	$sqlErrors = array();
	if(!isset($_SESSION['sqlSkippedQueries'])){
	 	$_SESSION['sqlSkippedQueries'] = array();
	 }
	$db = & DBManagerFactory::getInstance();
    if(strpos($resumeFromQuery,",") != false){
    	$resumeFromQuery = explode(",",$resumeFromQuery);
    	if(is_array($resumeFromQuery)){
    		//print_r('RES ARRAY '.$resumeFromQuery[0].'</br>');
    	}
    }
	if(file_exists($sqlScript)) {
		$fp = fopen($sqlScript, 'r');
		$contents = fread($fp, filesize($sqlScript));
	    $anyScriptChanges =$contents;
	    $resumeAfterFound = false;
		if(rewind($fp)) {
			$completeLine = '';
			$count = 0;
			while($line = fgets($fp)) {
				if(strpos($line, '--') === false) {
					$completeLine .= " ".trim($line);
					if(strpos($line, ';') !== false) {
						$query = '';
						$query = str_replace(';','',$completeLine);
						//if resume from query is not null then find out from where
						//it should start executing the query.

						if($query != null && $resumeFromQuery != null){
							if(!$resumeAfterFound){
								if(strpos($query,",") != false){
									$queArray = array();
									$queArray = explode(",",$query);
									for($i=0;$i<sizeof($resumeFromQuery);$i++){
										if(strcmp(strtolower(trim($resumeFromQuery[$i])),strtolower(trim($queArray[$i])))==0){
											//echo 'mat found '.$queArray[$i].'</br>';
											$resumeAfterFound = true;
										}
										else{
											$resumeAfterFound = false;
											break;
										}
									}//for

								}
								elseif(strcmp(strtolower(trim($resumeFromQuery)),strtolower(trim($query)))==0){
									$resumeAfterFound = true;
								}
							}
							if($resumeAfterFound){
								$count++;
							}
							// if $count=1 means it is just found so skip the query. Run the next one
	                        if($query != null && $resumeAfterFound && $count >1){
		                        $db->query($query);
		                        $progQuery[$forStepQuery]=$query;
		                        post_install_progress($progQuery,$action='set');
		                        if($db->checkError()){
		                            //put in the array to use later on
		                            $_SESSION['sqlSkippedQueries'][] = $query;
		                        }
	                        }//if
						}
						elseif($query != null){
		                        $db->query($query);
		                        $progQuery[$forStepQuery]=$query;
		                        post_install_progress($progQuery,$action='set');
		                        if($db->checkError()){
		                            //put in the array to use later on
		                            $_SESSION['sqlSkippedQueries'][] = $query;
		                        }
	                        }
	                   	$completeLine = '';
					}
				}
			}//while
		}
	}
}

function set_upgrade_vars(){
	logThis('setting session variables...');
	$upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
	if(!is_dir($upgrade_progress_dir)){
		mkdir_recursive($upgrade_progress_dir);
	}
	$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
	if(file_exists($upgrade_progress_file)){
		include($upgrade_progress_file);
	}
	else{
		fopen($upgrade_progress_file, 'w+');
	}
	if(!isset($upgrade_config) || $upgrade_config == null){
		$upgrade_config = array();
		$upgrade_config[1]['upgrade_vars']=array();
	}
    if(!is_array($upgrade_config[1]['upgrade_vars'])){
    	$upgrade_config[1]['upgrade_vars'] = array();
    }

	if(!isset($upgrade_vars) || $upgrade_vars == NULL){
		$upgrade_vars = array();
	}
	if(isset($_SESSION['unzip_dir']) && !empty($_SESSION['unzip_dir']) && file_exists($_SESSION['unzip_dir'])){
		$upgrade_vars['unzip_dir']=$_SESSION['unzip_dir'];
	}
	if(isset($_SESSION['install_file']) && !empty($_SESSION['install_file']) && file_exists($_SESSION['install_file'])){
		$upgrade_vars['install_file']=$_SESSION['install_file'];
	}
	if(isset($_SESSION['Upgraded451Wizard']) && !empty($_SESSION['Upgraded451Wizard'])){
		$upgrade_vars['Upgraded451Wizard']=$_SESSION['Upgraded451Wizard'];
	}
	if(isset($_SESSION['license_shown']) && !empty($_SESSION['license_shown'])){
		$upgrade_vars['license_shown']=$_SESSION['license_shown'];
	}
	if(isset($_SESSION['Initial_451to500_Step']) && !empty($_SESSION['Initial_451to500_Step'])){
		$upgrade_vars['Initial_451to500_Step']=$_SESSION['Initial_451to500_Step'];
	}
	if(isset($_SESSION['zip_from_dir']) && !empty($_SESSION['zip_from_dir'])){
		$upgrade_vars['zip_from_dir']=$_SESSION['zip_from_dir'];
	}
	//place into the upgrade_config array and rewrite config array only if new values are being inserted
	if(isset($upgrade_vars) && $upgrade_vars != null && sizeof($upgrade_vars) > 0){
		foreach($upgrade_vars as $key=>$val){
			if($key != null && $val != null){
				$upgrade_config[1]['upgrade_vars'][$key]=$upgrade_vars[$key];
			}
		}
		ksort($upgrade_config);
		if(is_writable($upgrade_progress_file) && write_array_to_file( "upgrade_config", $upgrade_config,
			$upgrade_progress_file)) {
		       //writing to the file
		}
    }
}

function initialize_session_vars(){
  $upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
  $upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
  if(file_exists($upgrade_progress_file)){
  	include($upgrade_progress_file);
  	if(isset($upgrade_config) && $upgrade_config != null && is_array($upgrade_config) && sizeof($upgrade_config) >0){
	  	$currVarsArray=$upgrade_config[1]['upgrade_vars'];
	  	//print_r($currVarsArray);
	  	if(isset($currVarsArray) && $currVarsArray != null && is_array($currVarsArray) && sizeof($currVarsArray)>0){
	  		foreach($currVarsArray as $key=>$val){
	  			if($key != null && $val !=null){
		  			//set session variables
		  			$_SESSION[$key]=$val;
		  			//set varibales
					"$".$key=$val;
	  			}
	  		}
	  	}
  	}
  }
}
//track the upgrade progress on each step
//track the upgrade progress on each step
function set_upgrade_progress($currStep,$currState,$currStepSub='',$currStepSubState=''){

	$upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
	if(!is_dir($upgrade_progress_dir)){
		mkdir_recursive($upgrade_progress_dir);
	}
	$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
	if(file_exists($upgrade_progress_file)){
		include($upgrade_progress_file);
	}
	else{
		if(function_exists('sugar_fopen')){
			sugar_fopen($upgrade_progress_file, 'w+');
		}
		else{
			fopen($upgrade_progress_file, 'w+');
		}
	}
	if(!isset($upgrade_config) || $upgrade_config == null){
		$upgrade_config = array();
		$upgrade_config[1]['upgrade_vars']=array();
	}
    if(!is_array($upgrade_config[1]['upgrade_vars'])){
    	$upgrade_config[1]['upgrade_vars'] = array();
    }
   	if($currStep != null && $currState != null){
		if(sizeof($upgrade_config) > 0){
			if($currStepSub != null && $currStepSubState !=null){
				//check if new status to be set or update
				//get the latest in array. since it has sub components prepare an array
				if(is_array($upgrade_config[sizeof($upgrade_config)][$currStep])){
					$latestStepSub = currSubStep($upgrade_config[sizeof($upgrade_config)][$currStep]);
					if($latestStepSub == $currStepSub){
						$upgrade_config[sizeof($upgrade_config)][$currStep][$latestStepSub]=$currStepSubState;
						$upgrade_config[sizeof($upgrade_config)][$currStep][$currStep] = $currState;
					}
					else{
						$upgrade_config[sizeof($upgrade_config)][$currStep][$currStepSub]=$currStepSubState;
						$upgrade_config[sizeof($upgrade_config)][$currStep][$currStep] = $currState;
					}
				}
				else{
					$currArray = array();
					$currArray[$currStep] = $currState;
					$currArray[$currStepSub] = $currStepSubState;
					$upgrade_config[sizeof($upgrade_config)+1][$currStep] = $currArray;
				}
			}
          else{
				//get the current upgrade progress
				$latestStep = get_upgrade_progress();
				//set the upgrade progress
				//echo 'latest '.$latestStep;
				if($latestStep == $currStep){
					//update the current step with new progress status
					//echo 'update it';
					$upgrade_config[sizeof($upgrade_config)][$latestStep]=$currState;
				}
				else{
					//it's a new step
					//echo 'new it';
					$upgrade_config[sizeof($upgrade_config)+1][$currStep]=$currState;
				}
	            // now check if there elements within array substeps
          }
		}
		else{
			//set the upgrade progress  (just starting)
			$upgrade_config[sizeof($upgrade_config)+1][$currStep]= $currState;
		}

		if(is_writable($upgrade_progress_file) && write_array_to_file( "upgrade_config", $upgrade_config,
		$upgrade_progress_file)) {
	       //writing to the file
		}

   	}
}

function get_upgrade_progress(){
	$upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
	$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
	$currState = '';
	$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';

	if(file_exists($upgrade_progress_file)){
		include($upgrade_progress_file);
		//echo 	'upconf '.$upgrade_config;
		if(!isset($upgrade_config) || $upgrade_config == null){
			$upgrade_config = array();
		}
		if($upgrade_config != null && sizeof($upgrade_config) >1){
			$currArr = $upgrade_config[sizeof($upgrade_config)];
				//echo 'size of '.sizeof($upgrade_config);
			if(is_array($currArr)){
			   foreach($currArr as $key=>$val){
					$currState = $key;
				}
			}
		}
	}
	return $currState;
}
function currSubStep($currStep){
	$currSubStep = '';
	if(is_array($currStep)){
       foreach($currStep as $key=>$val){
		    if($key != null){
			$currState = $key;
		  	}
	   }
	}
	return $currState;
}
function currUpgradeState($currState){
	$currState = '';
	if(is_array($currState)){
       foreach($currState as $key=>$val){
			if(is_array($val)){
			  	foreach($val as $k=>$v){
			  		if($k != null){
						$currState = $k;
			  		}
			  	}
			}
			else{
				$currState = $key;
			}
		}
	}
	return $currState;
}

function didThisStepRunBefore($step,$SubStep=''){
	if($step == null) return;
	$upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
	$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
	$currState = '';
	$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
	$stepRan = false;
	if(file_exists($upgrade_progress_file)){
		include($upgrade_progress_file);
		if(isset($upgrade_config) && $upgrade_config != null && is_array($upgrade_config) && sizeof($upgrade_config) >0){
			for($i=1;$i<=sizeof($upgrade_config);$i++){
			  if(is_array($upgrade_config[$i])){
					foreach($upgrade_config[$i] as $key=>$val){
						if($key==$step){
							if(is_array($upgrade_config[$i][$step])){
								//now process
								foreach ($upgrade_config[$i][$step] as $k=>$v){
									if(is_array($v)){
										foreach($v as $k1=>$v1){
											if($SubStep != null){
												if($SubStep ==$k1 && $v1=='done'){
													//echo 'Found Inside '.$k1;
													$stepRan = true;
													break;
												}
											}
										}//foreach
									}
									elseif($SubStep !=null){
										if($SubStep==$k && $v=='done'){
											//echo 'Found1 '.$k;
											$stepRan = true;
											break;
										}
									}
									elseif($step==$k && $v=='done'){
										//echo 'Found2 '.$k;
										$stepRan = true;
										break;
									}
								}//foreach
							}
							elseif($val=='done'){
								//echo 'Foundmmmm '.$key;
								$stepRan = true;
							}
						}
					}//foreach
				}
		 	}//for
	   	}
	}
	return $stepRan;
}



//get and set post install status
function post_install_progress($progArray='',$action=''){
	if($action=='' || $action=='get'){
		//get the state of post install
		$upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
		$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
		if(file_exists($upgrade_progress_file)){
			include($upgrade_progress_file);
			if(is_array($upgrade_config[sizeof($upgrade_config)]['commit']['post_install']) && sizeof($upgrade_config[sizeof($upgrade_config)]['commit']['post_install'])>0){
				$currProg = array();
				foreach($upgrade_config[sizeof($upgrade_config)]['commit']['post_install'] as $k=>$v){
					$currProg[$k]=$v;
				}
			}
		}
		return $currProg;
	}
	elseif($action=='set'){
		$upgrade_progress_dir = getcwd().'/cache/upload/upgrades/temp';
		if(!is_dir($upgrade_progress_dir)){
			mkdir($upgrade_progress_dir);
		}
		$upgrade_progress_file = $upgrade_progress_dir.'/upgrade_progress.php';
		if(file_exists($upgrade_progress_file)){
			include($upgrade_progress_file);
		}
		else{
			fopen($upgrade_progress_file, 'w+');
		}
		if(!is_array($upgrade_config[sizeof($upgrade_config)]['commit']['post_install'])){
			$upgrade_config[sizeof($upgrade_config)]['commit']['post_install']=array();
			$upgrade_config[sizeof($upgrade_config)]['commit']['post_install']['post_install'] = 'in_progress';
		}
		if($progArray != null && is_array($progArray)){
			foreach($progArray as $key=>$val){
				$upgrade_config[sizeof($upgrade_config)]['commit']['post_install'][$key]=$val;
			}
		}
		if(is_writable($upgrade_progress_file) && write_array_to_file( "upgrade_config", $upgrade_config,
		$upgrade_progress_file)) {
	       //writing to the file
		}
	}
}


// parse and run sql file
function parseAndExecuteSqlFileExtended($sqlScript){
	global $sugar_config;
	$alterTableSchema = '';
	$db = & DBManagerFactory::getInstance();
	if(is_file($sqlScript)) {
		$fp = fopen($sqlScript, 'r');
		$contents = fread($fp, filesize($sqlScript));
	    $anyScriptChanges =$contents;
		if(rewind($fp)) {
			$completeLine = '';
			$count = 0;
			while($line = fgets($fp)) {
				if(strpos($line, '--') === false) {
					$completeLine .= " ".trim($line);
					if(strpos($line, ';') !== false) {
						$completeLine = str_replace(';','',$completeLine);
	                    $currLine = explode(",",$completeLine);
	                    //check if multiple statements are clubbed
	                    if(sizeof($currLine) >1){
	                    	$qarr = explode(" ",trim($currLine[0]));
	                    	if(strtoupper(trim($qarr[0])) == 'CREATE' && strtoupper(trim($qarr[1])) == 'TABLE'){
	                            if(strtoupper(trim($qarr[2]) != null)){
	                            	if($sugar_config['dbconfig']['db_type'] == 'oci8'){
	                            		$query= "select table_name from user_tables where table_name=strtoupper(trim($qarr[2]))";
										$result = $db->query($query);
										$row = $db->fetchByAssociation($result);
										if($row['table_name'] != null){
											//already exists
										}
										else{
											//create table
											$query= $completeLine;
											$db->query($query);
										}
	                            	}

	                            }

	                    	}
	                    	else{
	                    		$qType =trim($qarr[0])." ".trim($qarr[1])." ".trim($qarr[2]);
		                    	echo trim($currLine[0])."<br />";
	                            for ($i = 1; $i <= sizeof($currLine)-1; $i++) {
	 							   $query = $qType." ".trim($currLine[$i]);
	 							   echo $query."<br />";
								}
	                    	}

	                    }
	                    else{
	                    	echo  trim($currLine[0]);
	                    }


                        //$q3 = $completeLine;
						//''$r3 = $GLOBALS['db']->query($q3, false, "Preflight Failed for:");
                        //echo mysql_error();
						$completeLine = '';
						//break;
					}
				}
			}
		} else {

			//$sqlErrors[] = $mod_strings['ERR_UW_FILE_NOT_READABLE'].'::'.$sqlScript;
		}
	}
}
function createTable(){
	if($sugar_config['dbconfig']['db_type'] == 'oci8'){
		$query= "select table_name from user_tables where table_name=strtoupper(trim($qarr[2]))";
		$result = $db->query($query);
		$row = $db->fetchByAssociation($result);
		if($row['table_name'] != null){
			//already exists
		}
		else{
			//create table
			$query= $completeLine;
			$db->query($query);
		}
	}
}


function repairDBForUpgrade($execute=false,$path=''){
	require_once ('modules/Relationships/Relationship.php');
	global $current_user, $beanFiles;
	global $dictionary;
	set_time_limit(3600);
	include_once ('include/database/DBManagerFactory.php');
	$db = &DBManagerFactory::getInstance();
	$sql = '';
	VardefManager::clearVardef();
	foreach ($beanFiles as $bean => $file) {
		require_once ($file);
		$focus = new $bean ();
		$sql .= $db->repairTable($focus, $execute);

	}
	//echo $sql;
	$olddictionary = $dictionary;
	unset ($dictionary);
	include ('modules/TableDictionary.php');
	foreach ($dictionary as $meta) {
		$tablename = $meta['table'];
		$fielddefs = $meta['fields'];
		$indices = $meta['indices'];
		$sql .= $db->repairTableParams($tablename, $fielddefs, $indices, $execute);
	}
	 $qry_str = "";
	  foreach (split("\n", $sql) as $line) {
		  if (!empty ($line) && substr($line, -2) != "*/") {
		  	$line .= ";";
		  }
	  	  $qry_str .= $line . "\n";
	   }
	  $sql = str_replace(
	  array(
	  	"\n",
		'&#039;',
	   ),
	  array(
	  	'',
		"'",
	  ),
	  preg_replace('#(/\*.+?\*/\n*)#', '', $qry_str)
	  );
	 logThis("*******START EXECUTING DB UPGRADE QUERIES***************",$path);
	 	logThis($sql,$path);
	 logThis("*******END EXECUTING DB UPGRADE QUERIES****************",$path);
	 if(!$execute){
	 	return $sql;
	 }
}















































































































































































































































































































?>
