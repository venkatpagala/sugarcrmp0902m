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

/**
 * Retrieve field data for a provided SugarBean.
 *
 * @param SugarBean $value -- The bean to retrieve the field information for.
 * @return Array -- 'field'=>   'name' -- the name of the field
 *                              'type' -- the data type of the field
 *                              'label' -- the translation key for the label of the field
 *                              'required' -- Is the field required?
 *                              'options' -- Possible values for a drop down field
 */
function get_field_list(&$value, $translate=true){
	$list = array();

	if(!empty($value->field_defs)){

		foreach($value->field_defs as $var){
			if(isset($var['source']) && ($var['source'] != 'db' && $var['source'] != 'custom_fields') && $var['name'] != 'email1' && $var['name'] != 'email2' && (!isset($var['type'])|| $var['type'] != 'relate'))continue;
			$required = 0;
			$options_dom = array();
			$options_ret = array();
			// Apparently the only purpose of this check is to make sure we only return fields
			//   when we've read a record.  Otherwise this function is identical to get_module_field_list
			if(isset($value->required_fields) && key_exists($var['name'], $value->required_fields)){
				$required = 1;
			}
			if(isset($var['options'])){
				$options_dom = translate($var['options'], $value->module_dir);
				if(!is_array($options_dom)) $options_dom = array();
				foreach($options_dom as $key=>$oneOption)
					$options_ret[] = get_name_value($key,$oneOption);
			}

            if(!empty($var['dbType']) && $var['type'] == 'bool') {
                $options_ret[] = get_name_value('type', $var['dbType']);
            }

            $entry = array();
            $entry['name'] = $var['name'];
            $entry['type'] = $var['type'];
            if($translate) {
            $entry['label'] = isset($var['vname']) ? translate($var['vname'], $value->module_dir) : $var['name'];
            } else {
            $entry['label'] = isset($var['vname']) ? $var['vname'] : $var['name'];
            }
            $entry['required'] = $required;
            $entry['options'] = $options_ret;
			if(isset($var['default'])) {
			   $entry['default_value'] = $var['default'];
			}

			$list[$var['name']] = $entry;
		} //foreach
	} //if

	if($value->module_dir == 'Bugs'){
		require_once('modules/Releases/Release.php');
		$seedRelease = new Release();
		$options = $seedRelease->get_releases(TRUE, "Active");
		$options_ret = array();
		foreach($options as $name=>$value){
			$options_ret[] =  array('name'=> $name , 'value'=>$value);
		}
		if(isset($list['fixed_in_release'])){
			$list['fixed_in_release']['type'] = 'enum';
			$list['fixed_in_release']['options'] = $options_ret;
		}
		if(isset($list['release'])){
			$list['release']['type'] = 'enum';
			$list['release']['options'] = $options_ret;
		}
		if(isset($list['release_name'])){
			$list['release_name']['type'] = 'enum';
			$list['release_name']['options'] = $options_ret;
		}
	}
	if(isset($value->assigned_user_name) && isset($list['assigned_user_id'])) {
		$list['assigned_user_name'] = $list['assigned_user_id'];
		$list['assigned_user_name']['name'] = 'assigned_user_name';
	}






	if(isset($list['modified_user_id'])) {
		$list['modified_by_name'] = $list['modified_user_id'];
		$list['modified_by_name']['name'] = 'modified_by_name';
	}
	if(isset($list['created_by'])) {
		$list['created_by_name'] = $list['created_by'];
		$list['created_by_name']['name'] = 'created_by_name';
	}
	return $list;
}


function get_name_value($field,$value){
	return array('name'=>$field, 'value'=>$value);
}

function get_user_module_list($user){
	global $app_list_strings, $current_language;

	$app_list_strings = return_app_list_strings_language($current_language);
	$modules = query_module_access_list($user);
	ACLController :: filterModuleList($modules, false);
	global $modInvisList, $modInvisListActivities;

	foreach($modInvisList as $invis){
		$modules[$invis] = 'read_only';
	}

	if(isset($modules['Calendar']) || $modules['Activities']){
		foreach($modInvisListActivities as $invis){
				$modules[$invis] = $invis;
		}
	}

	return $modules;



}

function check_modules_access($user, $module_name, $action='write'){
	if(!isset($_SESSION['avail_modules'])){
		$_SESSION['avail_modules'] = get_user_module_list($user);
	}
	if(isset($_SESSION['avail_modules'][$module_name])){
		if($action == 'write' && $_SESSION['avail_modules'][$module_name] == 'read_only'){
			if(is_admin($user))return true;
			return false;
		}
		return true;
	}
	return false;

}

function get_name_value_list(&$value){
	global $app_list_strings;
	$list = array();
	if(!empty($value->field_defs)){
		if(isset($value->assigned_user_name)) {
			$list['assigned_user_name'] = get_name_value('assigned_user_name', $value->assigned_user_name);
		}





		if(isset($value->modified_by_name)) {
			$list['modified_by_name'] = get_name_value('modified_by_name', $value->modified_by_name);
		}
		if(isset($value->created_by_name)) {
			$list['created_by_name'] = get_name_value('created_by_name', $value->created_by_name);
		}
		foreach($value->field_defs as $var){
			if(isset($var['source']) && ($var['source'] != 'db' && $var['source'] != 'custom_fields') && $var['name'] != 'email1' && $var['name'] != 'email2' && (!isset($var['type'])|| $var['type'] != 'relate'))continue;

			if(isset($value->$var['name'])){
				$val = $value->$var['name'];
				$type = $var['type'];

				if(strcmp($type, 'date') == 0){
					$val = substr($val, 0, 10);
				}elseif(strcmp($type, 'enum') == 0 && !empty($var['options'])){
					$val = $app_list_strings[$var['options']][$val];
				}
				
				$list[$var['name']] = get_name_value($var['name'], $val);
			}
		}
	}
	return $list;

}

function array_get_name_value_list($array){
	$list = array();
	foreach($array as $name=>$value){

				$list[$name] = get_name_value($name, $value);
	}
	return $list;

}

function array_get_name_value_lists($array){
    $list = array();
    foreach($array as $name=>$value){
        $tmp_value=$value;
        if(is_array($value)){
            $tmp_value = array();
            foreach($value as $k=>$v){
                $tmp_value[] = get_name_value($k, $v);
            }
        }
        $list[] = get_name_value($name, $tmp_value);
    }
    return $list;
}

function name_value_lists_get_array($list){
    $array = array();
    foreach($list as $key=>$value){
        if(isset($value['value']) && isset($value['name'])){
            if(is_array($value['value'])){
                $array[$value['name']]=array();
                foreach($value['value'] as $v){
                    $array[$value['name']][$v['name']]=$v['value'];
                }
            }else{
                $array[$value['name']]=$value['value'];
            }
        }
    }
    return $array;
}

function array_get_return_value($array, $module){

	return Array('id'=>$array['id'],
				'module_name'=> $module,
				'name_value_list'=>array_get_name_value_list($array)
				);
}

function get_return_value(&$value, $module){
	global $module_name, $current_user;
	$module_name = $module;
	if($module == 'Users' && $value->id != $current_user->id){
		$value->user_hash = '';
	}
	return Array('id'=>$value->id,
				'module_name'=> $module,
				'name_value_list'=>get_name_value_list($value)
				);
}


























































function get_name_value_xml($val, $module_name){
	$xml = '<item>';
			$xml .= '<id>'.$val['id'].'</id>';
			$xml .= '<module>'.$module_name.'</module>';
			$xml .= '<name_value_list>';
			foreach($val['name_value_list'] as $name=>$nv){
				$xml .= '<name_value>';
				$xml .= '<name>'.htmlspecialchars($nv['name']).'</name>';
				$xml .= '<value>'.htmlspecialchars($nv['value']).'</value>';
				$xml .= '</name_value>';
			}
			$xml .= '</name_value_list>';
			$xml .= '</item>';
			return $xml;
}

/*
function get_module_field_list(&$value){
	$list = array();
	if(!empty($value->field_defs)){
		foreach($value->field_defs as $var){
			$required = 0;
			$options_dom = array();
			$translateOptions = false;

				if(isset($value->required_fields) && key_exists($var['name'], $value->required_fields)){
					$required = 1;
				}
				if(isset($var['options'])){
					$options_dom = $var['options'];
					$translateOptions = true;
				}
				if($value->module_dir == 'Bugs'){
					require_once('modules/Releases/Release.php');
					$seedRelease = new Release();
					$options = $seedRelease->get_releases(TRUE, "Active");
					if($var['name'] == 'fixed_in_release'){
						$var['type'] = 'enum';
						$translateOptions = false;
						foreach($options as $name=>$avalue){
							$options_dom[$avalue] =  $name;
						}
					}
					if($var['name'] == 'release'){
						$var['type'] = 'enum';
						$translateOptions = false;
						foreach($options as $name=>$avalue){
							$options_dom[$avalue] =  $name;
						}
					}
				}
				$list[$var['name']] = array('name'=>$var['name'],
											'type'=>$var['type'],
											'label'=>translate($var['vname'], $value->module_dir),
											'required'=>$required,
											'options'=>get_field_options($options_dom, $translateOptions) );

		}
		}

	return $list;
}
*/

function get_return_module_fields(&$value, $module, &$error, $translate=true){
	global $module_name;
	$module_name = $module;
	return Array('module_name'=>$module,
				'module_fields'=> get_field_list($value, $translate),
				'error'=>get_name_value_list($value)
				);
}

function get_return_error_value($error_num, $error_name, $error_description){
	return Array('number'=>$error_num,
				'name'=> $error_name,
				'description'=>	$error_description
				);
}

function filter_field_list(&$field_list, &$select_fields, $module_name){
	return filter_return_list($field_list, $select_fields, $module_name);
}


/**
 * Filter the results of a list query.  Limit the fields returned.
 *
 * @param Array $output_list -- The array of list data
 * @param Array $select_fields -- The list of fields that should be returned.  If this array is specfied, only the fields in the array will be returned.
 * @param String $module_name -- The name of the module this being worked on
 * @return The filtered array of list data.
 */
function filter_return_list(&$output_list, $select_fields, $module_name){

	for($sug = 0; $sug < sizeof($output_list) ; $sug++){
		if($module_name == 'Contacts'){
			global $invalid_contact_fields;
			if(is_array($invalid_contact_fields)){
				foreach($invalid_contact_fields as $name=>$val){
					unset($output_list[$sug]['field_list'][$name]);
					unset($output_list[$sug]['name_value_list'][$name]);

				}
			}
		}

		if( !empty($output_list[$sug]['name_value_list']) && is_array($output_list[$sug]['name_value_list']) && !empty($select_fields) && is_array($select_fields)){
			foreach($output_list[$sug]['name_value_list'] as $name=>$value)
					if(!in_array($value['name'], $select_fields)){
						unset($output_list[$sug]['name_value_list'][$name]);
						unset($output_list[$sug]['field_list'][$name]);
					}
		}
	}
	return $output_list;
}

function login_success(){
	global $current_language, $sugar_config, $app_strings, $app_list_strings;
	$current_language = $sugar_config['default_language'];
	$app_strings = return_application_language($current_language);
	$app_list_strings = return_app_list_strings_language($current_language);
}


/*
 *	Given an account_name, either create the account or assign to a contact.
 */
function add_create_account(&$seed)
{
	global $current_user;
	$account_name = $seed->account_name;
	$account_id = $seed->account_id;
	$assigned_user_id = $current_user->id;

	// check if it already exists
    $focus = new Account();
    if( $focus->ACLAccess('Save')){
		$class = get_class($seed);
		$temp = new $class();
		$temp->retrieve($seed->id);
		if ((! isset($account_name) || $account_name == ''))
		{
			return;
		}
		if (!isset($seed->accounts)){
		    	$seed->load_relationship('accounts');
		}
	
		if($seed->account_name = '' && isset($temp->account_id)){
			$seed->accounts->delete($seed->id, $temp->account_id);
			return;
		}
	
	    $arr = array();
	
		
	
	    $query = "select id, deleted from {$focus->table_name} WHERE name='".$seed->db->quote($account_name)."'";
	    $result = $seed->db->query($query) or sugar_die("Error selecting sugarbean: ".mysql_error());
	
	    $row = $seed->db->fetchByAssoc($result, -1, false);
	
		// we found a row with that id
	    if (isset($row['id']) && $row['id'] != -1)
	    {
	    	// if it exists but was deleted, just remove it entirely
	        if ( isset($row['deleted']) && $row['deleted'] == 1)
	        {
	            $query2 = "delete from {$focus->table_name} WHERE id='". $seed->db->quote($row['id'])."'";
	            $result2 = $seed->db->query($query2) or sugar_die("Error deleting existing sugarbean: ".mysql_error());
			}
			// else just use this id to link the contact to the account
	        else
	        {
	        	$focus->id = $row['id'];
	        }
	    }
	
		// if we didnt find the account, so create it
	    if (! isset($focus->id) || $focus->id == '')
	    {
	    	$focus->name = $account_name;
	
			if ( isset($assigned_user_id))
			{
	           $focus->assigned_user_id = $assigned_user_id;
	           $focus->modified_user_id = $assigned_user_id;
			}
	        $focus->save();
	    }
	
	    if($seed->accounts != null && $temp->account_id != null && $temp->account_id != $focus->id){
	    	$seed->accounts->delete($seed->id, $temp->account_id);
	    }
	
	    if(isset($focus->id) && $focus->id != ''){
			$seed->account_id = $focus->id;
		}
    }
}

function check_for_duplicate_contacts(&$seed){
	require_once('modules/Contacts/Contact.php');

	if(isset($seed->id)){
		return null;
	}

	$query = '';

	$trimmed_email = trim($seed->email1);
	$trimmed_last = trim($seed->last_name);
	$trimmed_first = trim($seed->first_name);
	if(!empty($trimmed_email)){

		//obtain a list of contacts which contain the same email address
		$contacts = $seed->emailAddress->getBeansByEmailAddress($trimmed_email);
		if(count($contacts) == 0){
			return null;
		}else{
			foreach($contacts as $contact){
				if(!empty($trimmed_last) && strcmp($trimmed_last, $contact->last_name) == 0){
					if(!empty($trimmed_email) && strcmp($trimmed_email, $contact->email1) == 0){
						if(!empty($trimmed_email)){
							if(strcmp($trimmed_email, $contact->email1) == 0)
								return $contact->id;
						}else
							return $contact->id;
					}
				}
			}
			return null;
		}
	}else{
	    $query = "contacts.last_name = '$trimmed_last'";
        $query .= " AND contacts.first_name = '$trimmed_first'";
        $contacts = $seed->get_list('', $query);
        if (count($contacts) == 0){
            return null;
        }else{
            foreach($contacts['list'] as $contact){
                if (empty($contact->email1)){
                    return $contact->id;
                }
            }
            return null;
        }
	}	
}

/*
 * Given a client version and a server version, determine if the right hand side(server version) is greater
 *
 * @param left           the client sugar version
 * @param right          the server version
 *
 * return               true if the server version is greater or they are equal
 *                      false if the client version is greater
 */
function is_server_version_greater($left, $right){
    if(count($left) == 0 && count($right) == 0){
        return false;
    }
    else if(count($left) == 0 || count($right) == 0){
        return true;
    }
    else if($left[0] == $right[0]){
        array_shift($left);
        array_shift($right);
        return is_server_version_greater($left, $right);
    }
    else if($left[0] < $right[0]){
       return true;
    }
    else
        return false;
}

function getFile( $zip_file, $file_in_zip ){
    global $sugar_config;
    $base_upgrade_dir = $sugar_config['upload_dir'] . "/upgrades";
    $base_tmp_upgrade_dir   = "$base_upgrade_dir/temp";
    $my_zip_dir = mk_temp_dir( $base_tmp_upgrade_dir );
    unzip_file( $zip_file, $file_in_zip, $my_zip_dir );
    return( "$my_zip_dir/$file_in_zip" );
}

function getManifest( $zip_file ){
    ini_set("max_execution_time", "3600");
    return( getFile( $zip_file, "manifest.php" ) );
}


/**
 * Use the same logic as in SugarAuthenticate to validate the ip address
 *
 * @param string $session_var
 * @return bool - true if the ip address is valid, false otherwise.
 */
function is_valid_ip_address($session_var){
	global $sugar_config;
	// grab client ip address
	$clientIP = query_client_ip();
	$classCheck = 0;
	// check to see if config entry is present, if not, verify client ip
	if (!isset ($sugar_config['verify_client_ip']) || $sugar_config['verify_client_ip'] == true) {
		// check to see if we've got a current ip address in $_SESSION
		// and check to see if the session has been hijacked by a foreign ip
		if (isset ($_SESSION[$session_var])) {
			$session_parts = explode(".", $_SESSION[$session_var]);
			$client_parts = explode(".", $clientIP);
            if(count($session_parts) < 4) {
             	$classCheck = 0;
            }else { 
    			// match class C IP addresses
    			for ($i = 0; $i < 3; $i ++) {
    				if ($session_parts[$i] == $client_parts[$i]) {
    					$classCheck = 1;
    						continue;
    				} else {
    					$classCheck = 0;
    					break;
    					}
    				}
                }
				// we have a different IP address
				if ($_SESSION[$session_var] != $clientIP && empty ($classCheck)) {
					$GLOBALS['log']->fatal("IP Address mismatch: SESSION IP: {$_SESSION[$session_var]} CLIENT IP: {$clientIP}");
					return false;
				}
			} else {
				return false;
			}
	}
	return true;
}


if(!function_exists("get_encoded")){
/*HELPER FUNCTIONS*/
function get_encoded($object){
		return  base64_encode(serialize($object));
}
function get_decoded($object){
		return  unserialize(base64_decode($object));

}

/**
 * decrypt a string use the TripleDES algorithm. This meant to be
 * modified if the end user chooses a different algorithm
 *
 * @param $string - the string to decrypt
 *
 * @return a decrypted string if we can decrypt, the original string otherwise
 */
function decrypt_string($string){
	if(function_exists('mcrypt_cbc')){
		require_once('modules/Administration/Administration.php');
		$focus = new Administration();
		$focus->retrieveSettings();
		$key = '';
		if(!empty($focus->settings['ldap_enc_key'])){
			$key = $focus->settings['ldap_enc_key'];
		}
		if(empty($key))
			return $string;
		$buffer = $string;
		$key = substr(md5($key),0,24);
	    $iv = "password";
	    return mcrypt_cbc(MCRYPT_3DES, $key, pack("H*", $buffer), MCRYPT_DECRYPT, $iv);
	}else{
		return $string;
	}
}

}

function canViewPath( $path, $base ){
  $path = realpath( $path );
  $base = realpath( $base );
  return 0 !== strncmp( $path, $base, strlen( $base ) );
}
/*END HELPER*/

?>
