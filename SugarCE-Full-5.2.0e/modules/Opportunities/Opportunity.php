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
/*********************************************************************************

 * Description:
 ********************************************************************************/




require_once('data/SugarBean.php');
require_once('modules/Contacts/Contact.php');
require_once('modules/Tasks/Task.php');
require_once('modules/Notes/Note.php');
require_once('modules/Calls/Call.php');
require_once('modules/Leads/Lead.php');
require_once('modules/Emails/Email.php');
require_once('include/utils.php');

// Opportunity is used to store customer information.
class Opportunity extends SugarBean {
	var $field_name_map;
	// Stored fields
	var $id;
	var $lead_source;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $assigned_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $description;
	var $name;
	var $opportunity_type;
	var $amount;
	var $amount_usdollar;
	var $currency_id;
	var $date_closed;
	var $next_step;
	var $sales_stage;
	var $probability;
	var $campaign_id;






	// These are related
	var $account_name;
	var $account_id;
	var $contact_id;
	var $task_id;
	var $note_id;
	var $meeting_id;
	var $call_id;
	var $email_id;
	var $assigned_user_name;

	var $table_name = "opportunities";
	var $rel_account_table = "accounts_opportunities";
	var $rel_contact_table = "opportunities_contacts";
	var $module_dir = "Opportunities";



	
	var $importable = true;
	var $object_name = "Opportunity";

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array('assigned_user_name', 'assigned_user_id', 'account_name', 'account_id', 'contact_id', 'task_id', 'note_id', 'meeting_id', 'call_id', 'email_id'



	);

	var $relationship_fields = Array('task_id'=>'tasks', 'note_id'=>'notes', 'account_id'=>'accounts',
									'meeting_id'=>'meetings', 'call_id'=>'calls', 'email_id'=>'emails', 'project_id'=>'project',



									);
	
	function Opportunity() {
		parent::SugarBean();
		global $sugar_config;
		if(!$sugar_config['require_accounts']){
			unset($this->required_fields['account_name']);
		}
		global $current_user;








	}

	var $new_schema = true;

	

	function get_summary_text()
	{
		return "$this->name";
	}

	function create_list_query($order_by, $where, $show_deleted = 0)
	{
		
$custom_join = $this->custom_fields->getJOIN();
                $query = "SELECT ";
            
                $query .= "
                            accounts.id as account_id,
                            accounts.name as account_name,
                            accounts.assigned_user_id account_id_owner,
                            users.user_name as assigned_user_name ";



                            if($custom_join){
   								$query .= $custom_join['select'];
 							}
                            $query .= " ,opportunities.*
                            FROM opportunities ";






$query .= 			"LEFT JOIN users
                            ON opportunities.assigned_user_id=users.id ";



                            $query .= "LEFT JOIN $this->rel_account_table
                            ON opportunities.id=$this->rel_account_table.opportunity_id
                            LEFT JOIN accounts
                            ON $this->rel_account_table.account_id=accounts.id ";
			    if($custom_join){
  					$query .= $custom_join['join'];
				}
		$where_auto = '1=1';
		if($show_deleted == 0){	    
			$where_auto = "
			($this->rel_account_table.deleted is null OR $this->rel_account_table.deleted=0)
			AND (accounts.deleted is null OR accounts.deleted=0)  
			AND opportunities.deleted=0";
		}else 	if($show_deleted == 1){
				$where_auto = " opportunities.deleted=1";
		}

		if($where != "")
			$query .= "where ($where) AND ".$where_auto;
		else
			$query .= "where ".$where_auto;

		if($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY opportunities.name";

		return $query;
	}


    function create_export_query(&$order_by, &$where, $relate_link_join='')
    {
        $custom_join = $this->custom_fields->getJOIN(true, true,$where);
		$custom_join['join'] .= $relate_link_join;
                                $query = "SELECT
                                opportunities.*,
                                accounts.name as account_name,
                                users.user_name as assigned_user_name ";



								if($custom_join){
   									$query .= $custom_join['select'];
 								}
	                            $query .= " FROM opportunities ";




		$query .= 				"LEFT JOIN users
                                ON opportunities.assigned_user_id=users.id";



                                $query .= " LEFT JOIN $this->rel_account_table
                                ON opportunities.id=$this->rel_account_table.opportunity_id
                                LEFT JOIN accounts
                                ON $this->rel_account_table.account_id=accounts.id ";
								if($custom_join){
  									$query .= $custom_join['join'];
								}
		$where_auto = "
			($this->rel_account_table.deleted is null OR $this->rel_account_table.deleted=0)
			AND (accounts.deleted is null OR accounts.deleted=0)  
			AND opportunities.deleted=0";

        if($where != "")
                $query .= "where $where AND ".$where_auto;
        else
                $query .= "where ".$where_auto;

        if($order_by != "")
                $query .= " ORDER BY opportunities.$order_by";
        else
                $query .= " ORDER BY opportunities.name";
        return $query;
    }

	function fill_in_additional_list_fields()
	{
                if ( $this->force_load_details == true)
                {
                        $this->fill_in_additional_detail_fields();
                }
	}

	function fill_in_additional_detail_fields()
	{		
		parent::fill_in_additional_detail_fields();
		require_once('modules/Currencies/Currency.php');
		$currency = new Currency();
		$currency->retrieve($this->currency_id);
		if($currency->id != $this->currency_id || $currency->deleted == 1){
				$this->amount = $this->amount_usdollar;
				$this->currency_id = $currency->id;
		}
       //get campaign name
        require_once('modules/Campaigns/Campaign.php');
		$camp = new Campaign();
		$camp->retrieve($this->campaign_id);
        $this->campaign_name = $camp->name;
		
		$this->account_name = '';
		$this->account_id = '';
		$ret_values=Opportunity::get_account_detail($this->id);
		if (!empty($ret_values)) {
			$this->account_name=$ret_values['name'];
			$this->account_id=$ret_values['id'];
			$this->account_id_owner =$ret_values['assigned_user_id'];
		}

		}

	/** Returns a list of the associated contacts
	 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc..
	 * All Rights Reserved..
	 * Contributor(s): ______________________________________..
	*/
	function get_contacts()
	{
		$this->load_relationship('contacts');
		$query_array=$this->contacts->getQuery(true);
		
		//update the select clause in the retruned query.
		$query_array['select']="SELECT contacts.id, contacts.first_name, contacts.last_name, contacts.title, contacts.email1, contacts.phone_work, opportunities_contacts.contact_role as opportunity_role, opportunities_contacts.id as opportunity_rel_id ";
	
		$query='';
		foreach ($query_array as $qstring) {
			$query.=' '.$qstring;
		}	
	    $temp = Array('id', 'first_name', 'last_name', 'title', 'email1', 'phone_work', 'opportunity_role', 'opportunity_rel_id');
		return $this->build_related_list2($query, new Contact(), $temp);
	}

	function update_currency_id($fromid, $toid){
		$idequals = '';
		require_once('modules/Currencies/Currency.php');
		$currency = new Currency();
		$currency->retrieve($toid);
		foreach($fromid as $f){
			if(!empty($idequals)){
				$idequals .=' or ';
			}
			$idequals .= "currency_id='$f'";
		}

		if(!empty($idequals)){
			$query = "select amount, id from opportunities where (". $idequals. ") and deleted=0 and opportunities.sales_stage <> 'Closed Won' AND opportunities.sales_stage <> 'Closed Lost';";
			$result = $this->db->query($query);
			while($row = $this->db->fetchByAssoc($result)){

				$query = "update opportunities set currency_id='".$currency->id."', amount_usdollar='".$currency->convertToDollar($row['amount'])."' where id='".$row['id']."';";
				$this->db->query($query);

			}

	}
	}

	function get_list_view_data(){
		global $locale, $current_language, $current_user, $mod_strings, $app_list_strings, $sugar_config;
		$app_strings = return_application_language($current_language);
        $params = array();
		require_once('modules/Currencies/Currency.php');
		$temp_array = $this->get_list_view_array();
		$temp_array['SALES_STAGE'] = empty($temp_array['SALES_STAGE']) ? '' : $temp_array['SALES_STAGE'];
        $params = array('currency_id' => $this->currency_id, 'convert' => true);
		$temp_array['AMOUNT'] = currency_format_number($this->amount_usdollar, $params);  
		$temp_array["ENCODED_NAME"]=$this->name;
		return $temp_array;
	}

    function get_currency_symbol(){
           if(isset($this->currency_id)){
               $cur_qry = "select * from currencies where id ='".$this->currency_id."'";
               $cur_res = $this->db->query($cur_qry);
               if(!empty($cur_res)){
                    $cur_row = $this->db->fetchByAssoc($cur_res);
                        if(isset($cur_row['symbol'])){
                         return $cur_row['symbol'];   
                        }
               }
           }
           return '';
    } 

	
	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string) {
	$where_clauses = Array();
	$the_query_string = $GLOBALS['db']->quote($the_query_string);
	array_push($where_clauses, "opportunities.name like '$the_query_string%'");
	array_push($where_clauses, "accounts.name like '$the_query_string%'");

	$the_where = "";
	foreach($where_clauses as $clause)
	{
		if($the_where != "") $the_where .= " or ";
		$the_where .= $clause;
	}


	return $the_where;
}

	function save($check_notify = FALSE) {
		require_once('modules/Opportunities/SaveOverload.php');
		
		perform_save($this);
		return parent::save($check_notify);

	}
	
	function save_relationship_changes($is_update)
	{
		//if account_id was replaced unlink the previous account_id.
		//this rel_fields_before_value is populated by sugarbean during the retrieve call.
		if (!empty($this->account_id) and !empty($this->rel_fields_before_value['account_id']) and 
				(trim($this->account_id) != trim($this->rel_fields_before_value['account_id']))) {
				//unlink the old record.
				$this->load_relationship('accounts');							
				$this->accounts->delete($this->id,$this->rel_fields_before_value['account_id']);		    					    		    				
		}

		parent::save_relationship_changes($is_update);
		
		if (!empty($this->contact_id)) {
			$this->set_opportunity_contact_relationship($this->contact_id);
		}
	}

	function set_opportunity_contact_relationship($contact_id)
	{
		global $app_list_strings;
		$default = $app_list_strings['opportunity_relationship_type_default_key'];
		$this->load_relationship('contacts');
		$this->contacts->add($contact_id,array('contact_role'=>$default));
	}

	function set_notification_body($xtpl, $oppty)
	{
		global $app_list_strings;
		
		$xtpl->assign("OPPORTUNITY_NAME", $oppty->name);
		$xtpl->assign("OPPORTUNITY_AMOUNT", $oppty->amount);
		$xtpl->assign("OPPORTUNITY_CLOSEDATE", $oppty->date_closed);
		$xtpl->assign("OPPORTUNITY_STAGE", (isset($oppty->sales_stage)?$app_list_strings['sales_stage_dom'][$oppty->sales_stage]:""));
		$xtpl->assign("OPPORTUNITY_DESCRIPTION", $oppty->description);

		return $xtpl;
	}

	function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}
	function listviewACLHelper(){
		$array_assign = parent::listviewACLHelper();
		$is_owner = false;
		if(!empty($this->account_id)){
			
			if(!empty($this->account_id_owner)){
				global $current_user;
				$is_owner = $current_user->id == $this->account_id_owner;
			}
		}
			if(!ACLController::moduleSupportsACL('Accounts') || ACLController::checkAccess('Accounts', 'view', $is_owner)){
				$array_assign['ACCOUNT'] = 'a';
			}else{
				$array_assign['ACCOUNT'] = 'span';
			}
		
		return $array_assign;
	}
	
	/**
	 * Static helper function for getting releated account info.
	 */
	function get_account_detail($opp_id) {
		$ret_array = array();
		$db = DBManagerFactory::getInstance();
		$query = "SELECT acc.id, acc.name, acc.assigned_user_id "
			. "FROM accounts acc, accounts_opportunities a_o "
			. "WHERE acc.id=a_o.account_id"
			. " AND a_o.opportunity_id='$opp_id'"
			. " AND a_o.deleted=0"
			. " AND acc.deleted=0";
		$result = $db->query($query, true,"Error filling in opportunity account details: ");
		$row = $db->fetchByAssoc($result);
		if($row != null) {
			$ret_array['name'] = $row['name'];
			$ret_array['id'] = $row['id'];
			$ret_array['assigned_user_id'] = $row['assigned_user_id'];
		}
		return $ret_array;
	}
}
function getCurrencyType(){
	
}

?>
