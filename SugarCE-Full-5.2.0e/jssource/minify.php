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



    /**get_exclude_files
     * 
     * This method returns a predefined array.  
     * The array holds the location of files/folders to be excluded  
     * if a prefix is passed in, then it is prepended to the key value in the array
     * @prefix string to be prepended to key value in array
     */
    function get_exclude_files($prefix = ''){
        //add slash to prefix if it is not empty
        if(!empty($prefix)){
            $prefix = $prefix . '/';
        }
      //add prefix to key if it was passed in  
      $compress_exempt_files = array(
            $prefix.'cache'                         => 'cache',
            $prefix.'include/javascript/tiny_mce'   => 'include/javascript/tiny_mce',
            $prefix.'jscalendar/lang'               => 'jscalendar/lang',
            $prefix.'modules/Emails'                => 'modules/Emails',
            $prefix.'jssource'                      => 'jssource',
            $prefix.'modules/ModuleBuilder'			=> 'modules/ModuleBuilder',
        );
        
        return $compress_exempt_files;
        
}    



    /**ConcatenateFiles($from_path)
     * 
     * This method takes in a string value of the root directory to begin processing  
     * it uses the predefined array of groupings to create a concatenated file for each grouping
     * and places the concatenated file in root directory
     * @from_path root directory where processing should take place
     */
    function ConcatenateFiles($from_path){

        $js_groupings = array();
        if(isset($_REQUEST['root_directory'])){
            require('jssource/JSGroupings.php');
        }else{
            require('JSGroupings.php');
        }
        //get array with file sources to concatenate
        $file_groups = $js_groupings;//from JSGroupings.php;
        $files_opened = array();
        $currPerm = '';

        //for each item in array, concatenate the source files
        foreach($file_groups as $fg){

            //process each group array
            foreach($fg as $loc=>$trgt){
                $relpath = $loc;
                $loc = $from_path.'/'.$loc;
                $trgt = $from_path.'/'.$trgt;
                                
                //check to see that source file exists, that it is a file, and is readable
                if(file_exists($loc) && is_file($loc)  && is_readable($loc)){
                    $currPerm = fileperms($loc);
                    //check to see if target exists, if it does then open file
                    if(file_exists($trgt)){
                        if(in_array($trgt, $files_opened)){
                            //open target file
                            if(function_exists('sugar_fopen')){
                                $trgt_handle = sugar_fopen($trgt, 'a');
                            }else{
                                $trgt_handle = fopen($trgt, 'a');
                            }
                        }else{
                            //open target file
                            if(function_exists('sugar_fopen')){
                                $trgt_handle = sugar_fopen($trgt, 'w');
                            }else{
                                $trgt_handle = fopen($trgt, 'w');
                            }    
                        }                    
                        
                    }else{
                        //create and open target file
                        if(function_exists('sugar_fopen')){
                                $trgt_handle = @sugar_fopen($trgt, 'w');
                        }else{
                            $trgt_handle = @fopen($trgt, 'w');
                        }
                        
                        // todo: make this failure more friendly.  Ideally, it will display a
                        //       warning to admin users and revert back to displaying all of the
                        //       Javascript files insted of displaying the minified versions.
                        if ($trgt_handle === false) {
                            $target_directory = dirname($trgt);
                            $base_name = realpath(dirname(__FILE__) . '/..') . '/';
                            $target_directory = substr($target_directory, strlen($base_name));
                            sugar_die("please make sure {$target_directory} is writable\n");
                        }
                   
                }
                $files_opened[] = $trgt;
                
                //make sure we have handles to both source and target file
                if ($trgt_handle) {
                        $buffer = file_get_contents($loc);
                        $buffer .= "// End of File $relpath
                                
";
                        $num = fwrite($trgt_handle, $buffer);
                        
                        if( $num=== false){
                         //log error, file did not get appended   
                         echo "Error while concatenating file $loc to target file $trgt \n";
                        }
                    //close file opened.
                    fclose($trgt_handle);
                    }
        
                }
            }

            //set permissions on this file
            if(!empty($currPerm) && $currPerm !== false){
                //if we can retrieve permissions from target files, use same 
                //permission on concatenated file
                if(function_exists('sugar_chmod')){ 
                    @sugar_chmod($trgt, $currPerm);
                }else{
                    @chmod($trgt, $currPerm);   
                }
            }else{
                //no permissions could be retrieved, so set to 777
                if(function_exists('sugar_chmod')){
                    @sugar_chmod($trgt, 0777);
                }else{
                    @chmod($trgt, 0777);   
                }
            }   
        }
    
    }

    function create_backup_folder($bu_path){
        $bu_path = str_replace('\\', '/', $bu_path);
        //get path after root
        $jpos = strpos($bu_path,'jssource');
        if($jpos===false){
            $process_path = $bu_path;
        }else{
            $process_path = substr($bu_path, $jpos);
            $prefix_process_path = substr($bu_path, 0, $jpos-1);         
        }
        //get rest of directories into array
        $bu_dir_arr = explode('/', $process_path);
        
        //iterate through each directory and create if needed    
        
        foreach($bu_dir_arr as $bu_dir){        
            if(!file_exists($prefix_process_path.'/'.$bu_dir)){
                if(function_exists('sugar_mkdir')){
                    sugar_mkdir($prefix_process_path.'/'.$bu_dir);
                }else{
                    mkdir($prefix_process_path.'/'.$bu_dir);
                }
            }
            $prefix_process_path = $prefix_process_path.'/'.$bu_dir;
        }
        
    }
    
    
    
    
    /**CompressFiles
     * This method will call jsmin libraries to minify passed in files
     * This method takes in 2 string values of the files to process  
     * Processing will back up javascript files and then minify the original javascript.
     * Back up javascript files will have an added .src extension 
     * @from_path file name and path to be processed
     * @to_path file name and path to be  used to place newly compressed contents
     */
    function CompressFiles($from_path,$to_path){
    if(!defined('JSMIN_AS_LIB')){
        define('JSMIN_AS_LIB', true);
    }
    //assumes jsmin.php is in same directory
    if(isset($_REQUEST['root_directory'])){
        require_once('jssource/jsmin.php');
    }else{
        require_once('jsmin.php');
    }    
    $nl='
 ';     

        //check to make sure from path and to path are not empty
        if(isset($from_path) && !empty($from_path)&&isset($to_path) && !empty($to_path)){
            $lic_str = '';
            $ReadNextLine = true;
            // Output a minified version of example.js.
            if(file_exists($from_path) && is_file($from_path)){
                //read in license script
                if(function_exists('sugar_fopen')){
                    $file_handle = sugar_fopen($from_path, 'r');
                }else{
                    $file_handle = fopen($from_path, 'r');
                }
                if($file_handle){
                    $beg = false;
                    
                    //Read the file until you hit a line with code.  This is meant to retrieve
                    //the initial license string found in the beginning comments of js code.
                    while (!feof($file_handle) && $ReadNextLine) {
                        $newLine = fgets($file_handle, 4096);
                        $newLine = trim($newLine);
                        //See if line contains open or closing comments
                        
                        //if opening comments are found, set $beg to true 
                        if(strpos($newLine, '/*')!== false){
                            $beg = true;
                        }
                        
                        //if closing comments are found, set $beg to false
                        if(strpos($newLine, '*/')!== false){
                            $beg = false;
                        }

                        //if line is not empty (has code) set the boolean to false
                        if(! empty($newLine)){$ReadNextLine = false;}
                        //If we are in a comment block, then set boolean back to true 
                        if($beg){
                            $ReadNextLine = true;
                            //add new line to license string
                            $lic_str .=trim($newLine).$nl;
                        }else{
                            //if we are here it means that uncommented and non blank line has been reached
                            //Check to see that ReadNextLine is true, if so then add the last line collected
                            //make sure the last line is either the end to a comment block, or starts with '//'
                            //else do not add as it is live code.
                            if(!empty($newLine) && ((strpos($newLine, '*/')!== false) || ($newLine{0}.$newLine{1}== '//'))){
                                //add new line to license string
                                $lic_str .=$newLine;
                            }                            
                            //set to false because $beg is false, which means the comment block has ended
                            $ReadNextLine = false;
                            
                        }
                    }
                    
                }                    
                if($file_handle){
                    fclose($file_handle);   
                }            
                
                //place license string into array for use with jsmin file.
                //this will preserve the license in the file
                $lic_arr = array($lic_str);

                //minify javascript
                $jMin = new JSMin($from_path,$to_path,$lic_arr);
                $jMin->minify();

            }else{
                 //log failure
                 echo"<B> COULD NOT COMPRESS $from_path, it is not a file \n";   
            }
            
        }else{
         //log failure
         echo"<B> COULD NOT COMPRESS $from_path, missing variables \n";   
        }
    }

    function reverseScripts($from_path,$to_path=''){
            $from_path = str_replace('\\', '/', $from_path);
            if(empty($to_path)){
                $to_path = $from_path;
            }
            $to_path = str_replace('\\', '/', $to_path);

            //check to see if provided paths are legit

            if (!file_exists("$from_path"))
            {
                //log error
                echo "JS Source directory at $from_path Does Not Exist<p>\n";
                return;
            }

            //get correct path for backup
            $bu_path = $to_path;
            $bu_path .= substr($from_path, strlen($to_path.'/jssource/src_files'));

            //if this is a directory, then read it and process files
            if(is_dir("$from_path")){     
                //grab file / directory and read it.
                $handle = opendir("$from_path");
                //loop over the directory and go into each child directory
                while (false !== ($dir = readdir($handle))) {

                  //make sure you go into directory tree and not out of tree
                  if($dir!= '.' && $dir!= '..'){
                    //make recursive call to process this directory
                    reverseScripts($from_path.'/'.$dir, $to_path );
                  }  
                }
            }

            //if this is not a directory, then 
            //check if this is a javascript file, then process
            $path_parts = pathinfo($from_path);
            if(is_file("$from_path") && isset($path_parts['extension']) && $path_parts['extension'] =='js'){

                    //create backup directory if needed
                    $bu_dir = dirname($bu_path);

                    if(!file_exists($bu_dir)){
                        //directory does not exist, log it and return
                        echo" directory $bu_dir does not exist, could not restore $bu_path";
                        return;
                    }

                    //delete backup src file if it exists already
                    if(file_exists($bu_path)){
                        unlink($bu_path);
                    }
                      copy($from_path, $bu_path);
                }                
        
        
    }
    
    /**BackUpAndCompressScriptFiles
     * 
     * This method takes in a string value of the root directory to begin processing  
     * it will process and iterate through all files and subdirectories 
     * under the passed in directory, ignoring directories and files from the predefined exclude array.  
     * Processing includes calling a method that will minify the javascript children files
     * @from_path root directory where processing should take place
     * @to_path root directory where processing should take place, this gets filled in dynamically
     */
    function BackUpAndCompressScriptFiles($from_path,$to_path = '', $backup = true){

            //check to see if provided paths are legit
            if (!file_exists("$from_path"))
            {
                //log error
                echo "The from directory, $from_path Does Not Exist<p>\n";
                return;
            }else{
                $from_path = str_replace('\\', '/', $from_path);   
            }        
            
            if(empty($to_path)){
                $to_path = $from_path;
            }elseif (!file_exists("$to_path"))
            {
                //log error
                echo "The to directory, $to_path Does Not Exist<p>\n";
                return;
            }        
            
            //now grab list of files to exclude from minifying            
            $exclude_files = get_exclude_files($to_path);
            
            //process only if file/directory is not in exclude list 
            if(!isset($exclude_files[$from_path])){

            //get correct path for backup
            $bu_path = $to_path.'/jssource/src_files';
            $bu_path .= substr($from_path, strlen($to_path));
            
                    //if this is a directory, then read it and process files
                    if(is_dir("$from_path")){     
                        //grab file / directory and read it.
                        $handle = opendir("$from_path");
                        //loop over the directory and go into each child directory
                        while (false !== ($dir = readdir($handle))) {

                          //make sure you go into directory tree and not out of tree
                          if($dir!= '.' && $dir!= '..'){
                            //make recursive call to process this directory
                            BackUpAndCompressScriptFiles($from_path.'/'.$dir, $to_path,$backup);
                          }  
                        }
                    }
    
        
                    //if this is not a directory, then 
                    //check if this is a javascript file, then process
                    $path_parts = pathinfo($from_path);
                    if(is_file("$from_path") && isset($path_parts['extension']) && $path_parts['extension'] =='js'){

                        if($backup){
                            $bu_dir = dirname($bu_path);
                            if(!file_exists($bu_dir)){
                                create_backup_folder($bu_dir);
                            }
                    
                            //delete backup src file if it exists already
                            if(file_exists($bu_path)){
                                unlink($bu_path);
                            }
                            //copy original file into a source file
                              rename($from_path, $bu_path);
                        }else{
                            //no need to backup, but remove file that is about to be copied
                            //if it exists in both backed up scripts and working directory
                            if(file_exists($from_path) && file_exists($bu_path)){unlink($from_path);}   
                        }
                                                    
                        //now make call to minify and overwrite the original file.
                        CompressFiles($bu_path, $from_path);
                                       
                    }                
                }        
            
        }

//if we are coming from browser
    
if(isset($_REQUEST['root_directory'])){
	if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
    require_once('include/utils.php');    
    require_once('include/utils/sugar_file_utils.php');
        
    //get the root directory to process
    $from = $_REQUEST['root_directory'];
    $forceReb = false;
    //make sure that the rebuild option has been chosen
    if(isset($_REQUEST['js_rebuild_concat'])){
        if($_REQUEST['js_rebuild_concat'] == 'rebuild'){
             //rebuild if files have changed
             $js_groupings = array();
            if(isset($_REQUEST['root_directory'])){
                require('jssource/JSGroupings.php');
            }else{
                require('JSGroupings.php');
            }

            //iterate through array of grouped files
            $grp_array = $js_groupings;//from JSGroupings.php;

            //for each item in array, concatenate the source files
            foreach($grp_array as $grp){
                foreach($grp as $original =>$concat){
                    //make sure both files are still valid
                    if(is_file($original)  &&  is_file($concat)){
                        //if individual file has been modifed date later than modified date of
                        //concatenated file, then force a rebuild
                        if(filemtime($original) > filemtime($concat)){
                            $forceReb = true;
                            //no need to continue, we will rebuild
                            break;
                        }
                    }else{
                        //if files are not valid, rebuild as one file could have been deleted
                        $forceReb = true; 
                        //no need to continue, we will rebuild
                        break;
                    }
                }
            }
         
        }
        //if boolean has been set, concatenate files
        if($forceReb){
        ConcatenateFiles("$from");
            
        }   

    }else{
        //We are only allowing rebuilding of concat files from browser.
            
    }        
    return;
}else{
    //run via command line
    //print_r($argv);
    $from="";

    if(isset($argv[1]) && !empty($argv[1])){
         $from = $argv[1];   
    }else{
     //Root Directory was not specified
     echo 'Root Directory Input was not provided';
     return;   
    }
    
//    require_once($argv[1].'/include/utils/sugar_file_utils.php');

    if($argv[1] == '-?'){
        $argv[2] = '-?';
    }

    //if second argument is set, then process commands    
    if(!empty($argv[2])){
    
           if($argv[2] == '-r'){
                //replace the compressed scripts with the backed up version
                reverseScripts("$from/jssource/src_files","$from");
                        
           }elseif($argv[2] == '-m'){
                //replace the scripts, and then minify the scripts again
                reverseScripts("$from/jssource/src_files","$from");
                BackUpAndCompressScriptFiles("$from","",false,true);        
            
           }elseif($argv[2] == '-c'){
                //replace the scripts, concatenate the files, and then minify the scripts again
                reverseScripts("$from/jssource/src_files","$from");
                BackUpAndCompressScriptFiles("$from","",false,true);        
                ConcatenateFiles("$from",true);           
           }elseif($argv[2] == '-mo'){
                //do not replace the scriptsjust minify the existing scripts again
                BackUpAndCompressScriptFiles("$from","",false,true);        
            
           }elseif($argv[2] == '-co'){
                //concatenate the files only
                ConcatenateFiles("$from",true);
            
           }elseif($argv[2] == '-?'){
                die("
    Usage : minify <root path> [[-r]|[-m]|[-c]]
    
    <root path> = path of directory to process.  Should be root of sugar instance.   
     -r  = replace javascript of root with scripts from backed up jssource/src_files directory   
     -m  = same as r, only the script is minified and then copied   
     -c  = same as m, only the concatenated files are processed again.
     -co = concatenates only the js files that are to be concatenated.  Main use is for development when files that make up a concatenated file have been modified.
     -mo = minifies only the existing js files.  Will not use source files and will not back up scripts.  Main use is for development, when changes have been made to working javascript and you wish to recompress your scripts.
            
    *** note that options are mutually exclusive.  You would use -r OR -m OR -c          
    
    examples: say your patch is located in 'c:/sugar'
    You wish to have files from root directory concatenated according to file grouping array, as well as all js files compressed and backed up:
        minify 'c:/sugar'                                
            
    You wish to have backed up jssource files replace your current javascript files:
        minify 'c:/sugar' -r                                
            
    You wish to have backed up jssource files minified, and replace your current javascript files:
        minify 'c:/sugar' -m                               
            
    You wish to have backed up jssource files concatenated, minified, and replace your current javascript files:
        minify 'c:/sugar' -c                               
                                        ");
                        
           }
           
    }else{
        //default is to concatenate the files, then back up and compress them
        if(empty($from)){
            echo("directory root to process was not specified");   
        }

        BackUpAndCompressScriptFiles("$from", '', true, true);        
        ConcatenateFiles("$from",true);        
        
    }
}


?>
