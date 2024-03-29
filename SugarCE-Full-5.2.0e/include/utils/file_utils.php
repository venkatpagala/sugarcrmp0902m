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

require_once('include/utils/array_utils.php');
require_once('include/utils/sugar_file_utils.php');

function clean_path( $path )
{
    // clean directory/file path with a functional equivalent
    $appendpath = '';
    if ( is_windows() && strlen($path) >= 2 && $path[0].$path[1] == "\\\\" ) {
        $path = substr($path,2);
        $appendpath = "\\\\";
    }
    $path = str_replace( "\\", "/", $path );
    $path = str_replace( "//", "/", $path );
    $path = str_replace( "/./", "/", $path );
    return( $appendpath.$path );
}

function create_cache_directory($file)
{
    $paths = explode('/',$file);
    $dir = 'cache';
    if(!file_exists($dir))
    {
        sugar_mkdir($dir, 0775);
    }
    for($i = 0; $i < sizeof($paths) - 1; $i++)
    {
        $dir .= '/' . $paths[$i];
        if(!file_exists($dir))
        {
            sugar_mkdir($dir, 0775);
        }
    }
    return $dir . '/'. $paths[sizeof($paths) - 1];
}

function get_module_dir_list()
{
	$modules = array();
	$path = 'modules';
	$d = dir($path);
	while($entry = $d->read())
	{
		if($entry != '..' && $entry != '.')
		{
			if(is_dir($path. '/'. $entry))
			{
				$modules[$entry] = $entry;
			}
		}
	}
	return $modules;
}

function mk_temp_dir( $base_dir, $prefix="" )
{
    $temp_dir = tempnam( getcwd() .'/'. $base_dir, $prefix );
    if( !$temp_dir || !unlink( $temp_dir ) )
    {
        return( false );
    }

    if( sugar_mkdir( $temp_dir ) ){
        return( $temp_dir );
    }

    return( false );
}

function remove_file_extension( $filename )
{
    return( substr( $filename, 0, strrpos($filename, ".") ) );
}

function write_array_to_file( $the_name, $the_array, $the_file, $mode="w", $header='' )
{
    if(!empty($header) && ($mode != 'a' || !file_exists($the_file))){
		$the_string = $header;
	}else{
    	$the_string =   "<?php\n" .
                    '// created: ' . date('Y-m-d H:i:s') . "\n";
	}
    $the_string .=  "\$$the_name = " .
                    var_export_helper( $the_array ) .
                    ";\n?>\n";

    if( $fh = @sugar_fopen( $the_file, $mode ) )
    {
        fputs( $fh, $the_string);
        fclose( $fh );
        return( true );
    }
    else
    {
        return( false );
    }

}

function write_encoded_file( $soap_result, $write_to_dir, $write_to_file="" )
{
    // this function dies when encountering an error -- use with caution!
    // the path/file is returned upon success

    require_once('include/dir_inc.php');

    if( $write_to_file == "" )
    {
        $write_to_file = $write_to_dir . "/" . $soap_result['filename'];
    }

    $file = $soap_result['data'];
    $write_to_file = str_replace( "\\", "/", $write_to_file );

    $dir_to_make = dirname( $write_to_file );
    if( !is_dir( $dir_to_make ) )
    {
        mkdir_recursive( $dir_to_make );
    }
    $fh = sugar_fopen( $write_to_file, "wb" );
    fwrite( $fh, base64_decode( $file ) );
    fclose( $fh );

    if( md5_file( $write_to_file ) != $soap_result['md5'] )
    {
        die( "MD5 error after writing file $write_to_file" );
    }
    return( $write_to_file );
}

function create_custom_directory($file)
{
    $paths = explode('/',$file);
    $dir = 'custom';
    if(!file_exists($dir))
    {
        sugar_mkdir($dir, 0755);
    }
    for($i = 0; $i < sizeof($paths) - 1; $i++)
    {
        $dir .= '/' . $paths[$i];
        if(!file_exists($dir))
        {
            sugar_mkdir($dir, 0755);
        }
    }
    return $dir . '/'. $paths[sizeof($paths) - 1];
}

/**
 * This function will recursively generates md5s of files and returns an array of all md5s.
 *
 * @param	$path The path of the root directory to scan - must end with '/'
 * @param	$ignore_dirs array of filenames/directory names to ignore running md5 on - default 'cache' and 'upload'
 * @result	$md5_array an array containing path as key and md5 as value
 */
function generateMD5array($path, $ignore_dirs = array('cache', 'upload'))
{
	$dh  = opendir($path);
	while (false !== ($filename = readdir($dh)))
	{
		$current_dir_content[] = $filename;
	}

	// removes the ignored directories
	$current_dir_content = array_diff($current_dir_content, $ignore_dirs);

	sort($current_dir_content);
	$md5_array = array();

	foreach($current_dir_content as $file)
	{
		// make sure that it's not dir '.' or '..'
		if(strcmp($file, ".") && strcmp($file, ".."))
		{
			if(is_dir($path.$file))
			{
				// For testing purposes - uncomment to see all files and md5s
				//echo "<BR>Dir:  ".$path.$file."<br>";
				//generateMD5array($path.$file."/");

				$md5_array += generateMD5array($path.$file."/", $ignore_dirs);
			}
			else
			{
				// For testing purposes - uncomment to see all files and md5s
				//echo "   File: ".$path.$file."<br>";
				//echo md5_file($path.$file)."<BR>";

				$md5_array[$path.$file] = md5_file($path.$file);
			}
		}
	}

	return $md5_array;

}

/**
 * Function to compare two directory structures and return the items in path_a that didn't match in path_b
 *
 * @param	$path_a The path of the first root directory to scan - must end with '/'
 * @param	$path_b The path of the second root directory to scan - must end with '/'
 * @param	$ignore_dirs array of filenames/directory names to ignore running md5 on - default 'cache' and 'upload'
 * @result	array containing all the md5s of everything in $path_a that didn't have a match in $path_b
 */
function md5DirCompare($path_a, $path_b, $ignore_dirs = array('cache', 'upload'))
{
	$md5array_a = generateMD5array($path_a, $ignore_dirs);
	$md5array_b = generateMD5array($path_b, $ignore_dirs);

	$result = array_diff($md5array_a, $md5array_b);

	return $result;
}

/**
 * Function to retrieve all file names of matching pattern in a directory (and it's subdirectories)
 * example: getFiles($arr, './modules', '.+/EditView.php/'); // grabs all EditView.phps
 * @param array $arr return array to populate matches
 * @param string $dir directory to look in [ USE ./ in front of the $dir! ]
 * @param regex $pattern optional pattern to match against
 */
function getFiles(&$arr, $dir, $pattern = null) {
	if(!is_dir($dir))return;
 	$d = dir($dir);
 	while($e =$d->read()){
 		if(substr($e, 0, 1) == '.')continue;
 		$file = $dir . '/' . $e;
 		if(is_dir($file)){
 			getFiles($arr, $file, $pattern);
 		}else{
 			if(empty($pattern)) $arr[] = $file;
                else if(preg_match($pattern, $file))
                $arr[] = $file;
 		}
 	}
}

/**
 * Function to split up large files for download
 * used in download.php
 * @param string $filename
 * @param int $retbytes
 */
function readfile_chunked($filename,$retbytes=true)
{
   	$chunksize = 1*(1024*1024); // how many bytes per chunk
	$buffer = '';
	$cnt = 0;
	$handle = sugar_fopen($filename, 'rb');
	if ($handle === false)
	{
	    return false;
	}
	while (!feof($handle))
	{
	    $buffer = fread($handle, $chunksize);
	    echo $buffer;
	    flush();
	    if ($retbytes)
	    {
	        $cnt += strlen($buffer);
	    }
	}
	    $status = fclose($handle);
	if ($retbytes && $status)
	{
	    return $cnt; // return num. bytes delivered like readfile() does.
	}
	return $status;
}
/**
 * Renames a file. If $new_file already exists, it will first unlink it and then rename it.
 * used in SugarLogger.php
 * @param string $old_filename
 * @param string $new_filename
 */
function sugar_rename( $old_filename, $new_filename){
	if (empty($old_filename) || empty($new_filename)) return false;
	$success = false;
	if(file_exists($new_filename)) {
    	unlink($new_filename);
    	$success = rename($old_filename, $new_filename);
	}
	else {
		$success = rename($old_filename, $new_filename);
	}

	return $success;
}
?>
