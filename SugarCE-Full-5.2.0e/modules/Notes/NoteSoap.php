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
require_once('include/upload_file.php');
require_once('modules/Notes/Note.php');
require_once('include/upload_file.php');

class NoteSoap{
var $upload_file;
function NoteSoap(){
	$this->upload_file = new UploadFile('uploadfile');
}

function saveFile($note, $portal = false){
        global $sugar_config;

        $focus = new Note();








        if(!empty($note['id'])){
                $focus->retrieve($note['id']);
        }else{
                return '-1';
        }

        if(!empty($note['file'])){
                $decodedFile = base64_decode($note['file']);
                $this->upload_file->set_for_soap($note['filename'], $decodedFile);

                $ext_pos = strrpos($this->upload_file->stored_file_name, ".");
                $this->upload_file->file_ext = substr($this->upload_file->stored_file_name, $ext_pos + 1);
                if (in_array($this->upload_file->file_ext, $sugar_config['upload_badext'])) {
                        $this->upload_file->stored_file_name .= ".txt";
                        $this->upload_file->file_ext = "txt";
                }

                $focus->filename = $this->upload_file->get_stored_file_name();
                $focus->file_mime_type = $this->upload_file->getMimeSoap($focus->filename);
               	$focus->id = $note['id'];
                $return_id = $focus->save();
                $this->upload_file->final_move($focus->id);
        }else{
                return '-1';
        }
        return $return_id;
}

function retrieveFile($id, $filename){
	if(empty($filename)){
		return '';
	}


	$this->upload_file->stored_file_name = $filename;
	$filepath = $this->upload_file->get_upload_path($id);
	if(file_exists($filepath)){
		$fp = sugar_fopen($filepath, 'rb');
		$file = fread($fp, filesize($filepath));
		fclose($fp);
		return base64_encode($file);
	}

	return -1;




}

}




?>
