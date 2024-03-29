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
$portal_modules = array('Contacts', 'Accounts', 'Cases', 'Bugs', 'Notes');




/*
BUGS
*/
require_once('modules/Notes/Note.php');
require_once('modules/Contacts/Contact.php');
require_once('modules/Bugs/Bug.php');






function get_bugs_in_contacts($in, $orderBy = '', $where='')
	{
		//bail if the in is empty
		if($in == '()')return;
		// First, get the list of IDs.
		

		$query = "SELECT bug_id as id from contacts_bugs where contact_id IN $in AND deleted=0";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}








		$sugar = new Contact();



		set_module_in($sugar->build_related_in($query), 'Bugs');
	}

function get_bugs_in_accounts($in, $orderBy = '', $where='')
	{
		//bail if the in is empty
		if($in == '()')return;
		// First, get the list of IDs.
		

	    $query = "SELECT bug_id as id from accounts_bugs where account_id IN $in AND deleted=0";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}








		$sugar = new Account();




		set_module_in($sugar->build_related_in($query), 'Bugs');
	}

/*
Cases
*/
require_once('modules/Cases/Case.php');
function get_cases_in_contacts($in, $orderBy = '')
	{
		//bail if the in is empty
		if($in == '()')return;
		// First, get the list of IDs.


		$query = "SELECT case_id as id from contacts_cases where contact_id IN $in AND deleted=0";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}








		$sugar = new Contact();



		set_module_in($sugar->build_related_in($query), 'Cases');
	}

function get_cases_in_accounts($in, $orderBy = '')
	{
		if(empty($_SESSION['viewable']['Accounts'])){
			return;
		}
		//bail if the in is empty
		if($in == '()')return;
		// First, get the list of IDs.

		$query = "SELECT id  from cases where account_id IN $in AND deleted=0";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}		







		
		$sugar = new Account();



		set_module_in($sugar->build_related_in($query), 'Cases');
	}



/*
NOTES
*/

require_once('modules/Accounts/Account.php');
function get_notes_in_contacts($in, $orderBy = '')
	{
		//bail if the in is empty
		if($in == '()')return;
		// First, get the list of IDs.
		$query = "SELECT id from notes where contact_id IN $in AND deleted=0 AND portal_flag=1";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}
			
		$contact = new Contact();



		$note = new Note();



		return $contact->build_related_list($query, $note);
	}

function get_notes_in_module($in, $module, $orderBy = '')
	{
		//bail if the in is empty
		if($in == '()')return;
		// First, get the list of IDs.
		$query = "SELECT id from notes where parent_id IN $in AND parent_type='$module' AND deleted=0 AND portal_flag = 1";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}
		global $beanList, $beanFiles;

		if(!empty($beanList[$module])){
			$class_name = $beanList[$module];
			require_once($beanFiles[$class_name]);
			$sugar = new $class_name();
		}else{
			return array();
		}




		$note = new Note();



		return $sugar->build_related_list($query, $note);
	}
    
    function get_related_in_module($in, $module, $rel_module, $orderBy = '', $row_offset = 0, $limit= -1)
    {
        global $beanList, $beanFiles;
         if(!empty($beanList[$rel_module])){
            $class_name = $beanList[$rel_module];
            require_once($beanFiles[$class_name]);
            $rel = new $class_name();
        }else{
            return array();
        }
        
        //bail if the in is empty
        if($in == '()')return;

        // First, get the list of IDs.
		if ($module == 'KBDocuments' || $module == 'DocumentRevisions') {
			$query = "SELECT dr.* from document_revisions dr
                      inner join kbdocument_revisions kr on kr.document_revision_id = dr.id AND kr.kbdocument_id IN ($in)
                      AND dr.file_mime_type is not null";
		} else {
			$query = "SELECT id from $rel->table_name where parent_id IN $in AND parent_type='$module' AND deleted=0 AND portal_flag = 1";
		}

        if(!empty($orderBy)){
            $query .= ' ORDER BY ' . $orderBy;
        }

        if(!empty($beanList[$module])){
            $class_name = $beanList[$module];
            require_once($beanFiles[$class_name]);
            $sugar = new $class_name();
        }else{
            return array();
        }
        






        
        $count_query = $sugar->create_list_count_query($query);
        if(!empty($count_query))
        {
            // We have a count query.  Run it and get the results.
            $result = $sugar->db->query($count_query, true, "Error running count query for $sugar->object_name List: ");
            $assoc = $sugar->db->fetchByAssoc($result);
            if(!empty($assoc['c']))
            {
                $rows_found = $assoc['c'];
            }
        }
        $list = $sugar->build_related_list($query, $rel, $row_offset, $limit);
        $list['result_count'] = $rows_found;
        return $list;
    }

function get_accounts_from_contact($contact_id, $orderBy = '')
	{
				// First, get the list of IDs.
		$query = "SELECT account_id as id from accounts_contacts where contact_id='$contact_id' AND deleted=0";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}
		$sugar = new Contact();



		set_module_in($sugar->build_related_in($query), 'Accounts');
	}

function get_contacts_from_account($account_id, $orderBy = '')
	{
		// First, get the list of IDs.
		$query = "SELECT contact_id as id from accounts_contacts where account_id='$account_id' AND deleted=0";
		if(!empty($orderBy)){
			$query .= ' ORDER BY ' . $orderBy;
		}
		$sugar = new Account();



		set_module_in($sugar->build_related_in($query), 'Contacts');
	}

function get_related_list($in, $template, $where, $order_by, $row_offset = 0, $limit = ""){

		$list = array();
		//bail if the in is empty
		if($in == '()')return $list;




		return $template->build_related_list_where('',$template, $where, $in, $order_by, $limit, $row_offset);


}

function build_relationship_tree($contact){
	global $sugar_config;
	$contact->retrieve($contact->id);




	get_accounts_from_contact($contact->id);

	set_module_in(array('list'=>array($contact->id), 'in'=> "('$contact->id')"), 'Contacts');

	$accounts = $_SESSION['viewable']['Accounts'];
	foreach($accounts as $id){
		if(!isset($sugar_config['portal_view']) || $sugar_config['portal_view'] != 'single_user'){
			get_contacts_from_account($id);
		}
	}
}

function get_contacts_in(){
	return $_SESSION['viewable']['contacts_in'];
}

function get_accounts_in(){
	return $_SESSION['viewable']['accounts_in'];
}

function get_module_in($module_name){
	if(!isset($_SESSION['viewable'][$module_name])){
		return '()';
	}

    $mod_in = "('" . join("','", array_keys($_SESSION['viewable'][$module_name])) . "')";
    $_SESSION['viewable'][strtolower($module_name).'_in'] = $mod_in;
    
	return $mod_in;
}

function set_module_in($arrayList, $module_name){

		if(!isset($_SESSION['viewable'][$module_name])){
			$_SESSION['viewable'][$module_name] = array();
		}
		foreach($arrayList['list'] as $id){
			$_SESSION['viewable'][$module_name][$id] = $id;
		}
		if($module_name == 'Accounts' && isset($id)){
			$_SESSION['account_id'] = $id;
		}

        if(!empty($_SESSION['viewable'][strtolower($module_name).'_in'])){
        	if($arrayList['in'] != '()') {
            	$_SESSION['viewable'][strtolower($module_name).'_in'] = "('" . implode("', '", $_SESSION['viewable'][strtolower($module_name).'_in']);
            	$_SESSION['viewable'][strtolower($module_name).'_in'] .= implode("', '", $arrayList['list']) . "')";
            }
		}else{
			$_SESSION['viewable'][strtolower($module_name).'_in'] = $arrayList['in'];
		}
}

/*
 * Given the user auth, attempt to log the user in.
 * used by SoapPortalUsers.php
 */
function login_user($portal_auth){
     $error = new SoapError();
     $user = new User();
     $user = $user->retrieve_by_string_fields(array('user_name'=>$portal_auth['user_name'],'user_hash'=>$portal_auth['password'], 'deleted'=>0, 'status'=>'Active', 'portal_only'=>1) );    
        
        if($user != null){
            global $current_user;
            $current_user = $user;








            return 'success';
        }else{
            return 'fail';
        }
}























































function portal_get_entry_list_limited($session, $module_name,$where, $order_by, $select_fields, $row_offset, $limit){
    global  $beanList, $beanFiles, $portal_modules;
    $error = new SoapError();
    if(! portal_validate_authenticated($session)){
        $error->set_error('invalid_session');
        return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
    }
    if($_SESSION['type'] == 'lead' ){
        $error->set_error('no_access');
        return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
    }
    if(empty($beanList[$module_name])){
        $error->set_error('no_module');
        return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());
    }
    if($module_name == 'Cases'){
        if(!isset($_SESSION['viewable'][$module_name])){
            get_cases_in_contacts(get_contacts_in());
            get_cases_in_accounts(get_accounts_in());
        }
         
        $sugar = new aCase();
        $list =  get_related_list(get_module_in($module_name), new aCase(), $where,$order_by, $row_offset, $limit);

    }else if($module_name == 'Contacts'){
            $sugar = new Contact();
            $list =  get_related_list(get_module_in($module_name), new Contact(), $where,$order_by);
    }else if($module_name == 'Accounts'){
            $sugar = new Account();
            $list =  get_related_list(get_module_in($module_name), new Account(), $where,$order_by);
    }else if($module_name == 'Bugs'){
            if(!isset($_SESSION['viewable'][$module_name])){
                get_bugs_in_contacts(get_contacts_in());
                get_bugs_in_accounts(get_accounts_in());
            }

            $list = get_related_list(get_module_in($module_name), new Bug(), $where, $order_by, $row_offset, $limit);
    } else if ($module_name == 'KBDocuments') {


























	} else if ($module_name == 'FAQ') {







    } else{
        $error->set_error('no_module_support');
        return array('result_count'=>-1, 'entry_list'=>array(), 'error'=>$error->get_soap_array());

    }

    $output_list = Array();
    $field_list = array();
    foreach($list as $value)
    {

        //$loga->fatal("Adding another account to the list");
        $output_list[] = get_return_value($value, $module_name);
        $_SESSION['viewable'][$module_name][$value->id] = $value->id;
        if(empty($field_list)){
            $field_list = get_field_list($value);
        }
    }
    $output_list = filter_return_list($output_list, $select_fields, $module_name);
    $field_list = filter_field_list($field_list,$select_fields, $module_name);

    return array('result_count'=>sizeof($output_list), 'next_offset'=>0,'field_list'=>$field_list, 'entry_list'=>$output_list, 'error'=>$error->get_soap_array());
}

$invalid_contact_fields = array('portal_name'=>1, 'portal_password'=>1, 'portal_active'=>1);
$valid_modules_for_contact = array('Contacts'=>1, 'Cases'=>1, 'Notes'=>1, 'Bugs'=>1, 'Accounts'=>1, 'Leads'=>1, 'KBDocuments'=>1);




?>
