<?php
if(!defined('sugarEntry') || !sugarEntry)
	die('Not A Valid Entry Point');
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
require_once ('include/upload_file.php');
require_once('modules/DocumentRevisions/DocumentRevision.php');

// User is used to store Forecast information.
class Document extends SugarBean {

	var $id;
	var $document_name;
	var $description;
	var $category_id;
	var $subcategory_id;
	var $status_id;
	var $status;
	var $created_by;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;



	var $active_date;
	var $exp_date;
	var $document_revision_id;
	var $filename;

	var $img_name;
	var $img_name_bare;
	var $related_doc_id;
	var $related_doc_name;
	var $related_doc_rev_id;
	var $related_doc_rev_number;
	var $is_template;
	var $template_type;

	//additional fields.
	var $revision;
	var $last_rev_create_date;
	var $last_rev_created_by;
	var $last_rev_created_name;
	var $file_url;
	var $file_url_noimage;

	var $table_name = "documents";
	var $object_name = "Document";
	var $user_preferences;

	var $encodeFields = Array ();

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array ('revision');
	
	var $new_schema = true;
	var $module_dir = 'Documents';
	
	var $save_file;

	var $relationship_fields = Array(
		'contract_id'=>'contracts',
	 );
	  

	function Document() {
		parent :: SugarBean();
		$this->setupCustomFields('Documents'); //parameter is module name
		$this->disable_row_level_security = false;
	}

	function save($check_notify = false) {
		return parent :: save($check_notify);
	}
	function get_summary_text() {
		return "$this->document_name";
	}

	function retrieve($id, $encode = false) {
		$ret = parent :: retrieve($id, $encode);
		return $ret;
	}

	function is_authenticated() {
		return $this->authenticated;
	}

	function fill_in_additional_list_fields() {
		$this->fill_in_additional_detail_fields();
	}

	function fill_in_additional_detail_fields() {
		global $theme;
		global $current_language;
		global $timedate;

		parent::fill_in_additional_detail_fields();
		
		$mod_strings = return_module_language($current_language, 'Documents');

		$query = "SELECT filename,revision,file_ext FROM document_revisions WHERE id='$this->document_revision_id'";

		$result = $this->db->query($query);
		$row = $this->db->fetchByAssoc($result);

		//popuplate filename
        if(isset($row['filename']))$this->filename = $row['filename'];
        //$this->latest_revision = $row['revision'];
        if(isset($row['revision']))$this->revision = $row['revision'];
        
		//populate the file url. 
		//image is selected based on the extension name <ext>_icon_inline, extension is stored in document_revisions.
		//if file is not found then default image file will be used.
		global $img_name;
		global $img_name_bare;
		if (!empty ($row['file_ext'])) {
			$img_name = "themes/".$theme."/images/".strtolower($row['file_ext'])."_image_inline.gif";
			$img_name_bare = strtolower($row['file_ext'])."_image_inline";
		}

		//set default file name.
		if (!empty ($img_name) && file_exists($img_name)) {
			$img_name = $img_name_bare;
		} else {
			$img_name = "def_image_inline"; //todo change the default image.						
		}
		if($this->ACLAccess('DetailView')){
    		$this->file_url = "<a href='index.php?entryPoint=download&id=".basename(UploadFile :: get_url($this->filename, $this->document_revision_id))."&type=Documents' target='_blank'>".get_image('themes/'.$theme.'/images/'.$img_name, 'alt="'.$mod_strings['LBL_LIST_VIEW_DOCUMENT'].'"  border="0"')."</a>";
    		$this->file_url_noimage = basename(UploadFile :: get_url($this->filename, $this->document_revision_id));
		}else{
            $this->file_url = "";
            $this->file_url_noimage = "";
		}
		
		//get last_rev_by user name.
		$query = "SELECT first_name,last_name, document_revisions.date_entered as rev_date FROM users, document_revisions WHERE users.id = document_revisions.created_by and document_revisions.id = '$this->document_revision_id'";
		$result = $this->db->query($query, true, "Eror fetching user name: ");
		$row = $this->db->fetchByAssoc($result);
		if (!empty ($row)) {
			$this->last_rev_created_name = $row['first_name'].' '.$row['last_name'];

			$this->last_rev_create_date = $timedate->to_display_date_time($row['rev_date']);
		}
		
		global $app_list_strings;
	    if(!empty($this->status_id)) {
	       //_pp($this->status_id);
	       $this->status = $app_list_strings['document_status_dom'][$this->status_id];
	    }
        $this->related_doc_name = Document::get_document_name($this->related_doc_id);
        $this->related_doc_rev_number = DocumentRevision::get_document_revision_name($this->related_doc_rev_id);
        $this->save_file = basename($this->file_url_noimage);
        
	}

	function list_view_parse_additional_sections(& $list_form, $xTemplateSection) {
		return $list_form;
	}

    function create_export_query(&$order_by, &$where, $relate_link_join='')
    {
        $custom_join = $this->custom_fields->getJOIN(true, true,$where);
		$custom_join['join'] .= $relate_link_join;
		$query = "SELECT
						documents.*";
		if($custom_join){
			$query .=  $custom_join['select'];
		}
		$query .= " FROM documents ";
		if($custom_join){
			$query .=  $custom_join['join'];
		}

		$where_auto = " documents.deleted = 0";

		if ($where != "")
			$query .= " WHERE $where AND ".$where_auto;
		else
			$query .= " WHERE ".$where_auto;

		if ($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY documents.document_name";

		return $query;
	}

	function create_list_query($order_by, $where, $show_deleted = 0) {
		$custom_join = false;
		if (isset ($this->custom_fields))
			$custom_join = $this->custom_fields->getJOIN();

		$query = "SELECT $this->table_name.* ";
		$query .= "  ,document_revisions.revision as latest_revision";
		$query .= "  ,document_revisions.date_entered as last_rev_create_date";
		$query .= "  ,document_revisions.file_mime_type as last_rev_mime_type";
		$query .= " ,document_revisions.created_by as last_rev_created_by";

		if ($custom_join) {
			$query .= $custom_join['select'];
		}
		$query .= " FROM document_revisions,$this->table_name  ";





		if ($custom_join) {
			$query .= $custom_join['join'];
		}
		$where_auto = '1=1';
		if ($show_deleted == 0) {
			$where_auto = " $this->table_name.deleted=0 ";
			$where_auto .= " AND ( accounts_contacts.deleted=0 AND accounts.deleted=0 ) ";
		} else
			if ($show_deleted == 1) {
				$where_auto = " $this->table_name.deleted=1 ";
			}
		if ($where != "")
			$query .= " where ($where) AND ";
		else
			$query .= " where ";
		$query .= $this->table_name.".deleted=0 AND document_revisions.deleted=0";
		$query .= " AND documents.document_revision_id = document_revisions.id";

		if (!empty ($order_by))
			$query .= " ORDER BY $order_by";

		return $query;
	}

	function get_list_view_data() {
		global $current_language;
		$app_list_strings = return_app_list_strings_language($current_language);

		$document_fields = $this->get_list_view_array();
		$document_fields['FILE_URL'] = $this->file_url;
		$document_fields['FILE_URL_NOIMAGE'] = $this->file_url_noimage;
		$document_fields['LAST_REV_CREATED_BY'] = $this->last_rev_created_name;
		$document_fields['CATEGORY_ID'] = empty ($this->category_id) ? "" : $app_list_strings['document_category_dom'][$this->category_id];
		$document_fields['SUBCATEGORY_ID'] = empty ($this->subcategory_id) ? "" : $app_list_strings['document_subcategory_dom'][$this->subcategory_id];

		$document_fields['DOCUMENT_NAME_JAVASCRIPT'] = $GLOBALS['db']->helper->escape_quote($document_fields['DOCUMENT_NAME']);
		return $document_fields;
	}
	function mark_relationships_deleted($id) {
		//do nothing, this call is here to avoid default delete processing since  
		//delete.php handles deletion of document revisions.
	}

	function bean_implements($interface) {
		switch ($interface) {
			case 'ACL' :
				return true;
		}
		return false;
	}
	
	//static function.
	function get_document_name($doc_id){
		if (empty($doc_id)) return null;
		
		$db = DBManagerFactory::getInstance();				
		$query="select document_name from documents where id='$doc_id'";
		$result=$db->query($query);
		if (!empty($result)) {
			$row=$db->fetchByAssoc($result);
			if (!empty($row)) {
				return $row['document_name'];
			}
		}
		return null;
	}
}
?>
