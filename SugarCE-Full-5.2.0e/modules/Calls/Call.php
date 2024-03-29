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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

require_once('data/SugarBean.php');
require_once('modules/Contacts/Contact.php');
require_once('modules/Users/User.php');
require_once('include/json_config.php');

// Call is used to store customer information.
class Call extends SugarBean {
	var $field_name_map;
	// Stored fields
	var $id;
	var $json_id;
	var $date_entered;
	var $date_modified;
	var $assigned_user_id;
	var $modified_user_id;



	var $description;
	var $name;
	var $status;
	var $date_start;
	var $time_start;
	var $duration_hours;
	var $duration_minutes;
	var $date_end;
	var $parent_type;
	var $parent_type_options;
	var $parent_id;
	var $contact_id;
	var $user_id;
	var $lead_id;
	var $direction;
	var $reminder_time;
	var $reminder_time_options;
	var $reminder_checked;
	var $required;
	var $accept_status;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $parent_name;
	var $contact_name;
	var $contact_phone;
	var $contact_email;
	var $account_id;
	var $opportunity_id;
	var $case_id;
	var $assigned_user_name;
	var $note_id;
    var $outlook_id;



	var $update_vcal = true;
	var $contacts_arr;
	var $users_arr;
	var $leads_arr;
	var $default_call_name_values = array('Assemble catalogs', 'Make travel arrangements', 'Send a letter', 'Send contract', 'Send fax', 'Send a follow-up letter', 'Send literature', 'Send proposal', 'Send quote');
	var $minutes_value_default = 15;
	var $minutes_values = array('0'=>'00','15'=>'15','30'=>'30','45'=>'45');
	var $table_name = "calls";
	var $rel_users_table = "calls_users";
	var $rel_contacts_table = "calls_contacts";
    var $rel_leads_table = "calls_leads";
	var $module_dir = 'Calls';
	var $object_name = "Call";
	var $new_schema = true;
	var $importable = true;

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = array('assigned_user_name', 'assigned_user_id', 'contact_id', 'user_id', 'contact_name');
	var $relationship_fields = array(	'account_id'		=> 'accounts',
										'opportunity_id'	=> 'opportunities',
										'contact_id'		=> 'contacts',
										'case_id'			=> 'cases',
										'user_id'			=> 'users',
										'assigned_user_id'	=> 'users',
										'note_id'			=> 'notes',
										'lead_id'			=> 'leads',
								);

	function Call() {
		parent::SugarBean();
		global $app_list_strings;

       	$this->setupCustomFields('Calls');

		foreach ($this->field_defs as $field) {
			$this->field_name_map[$field['name']] = $field;
		}






         if(!empty($GLOBALS['app_list_strings']['duration_intervals']))
        	$this->minutes_values = $GLOBALS['app_list_strings']['duration_intervals'];
	}

    // save date_end by calculating user input
    // this is for calendar
	function save($check_notify = FALSE) {
		global $timedate,$current_user;
		global $disable_date_format;

        if(	isset($this->date_start) &&
        	isset($this->duration_hours) &&
        	isset($this->duration_minutes) ) {


			$date_start_in_db_fmt=$timedate->swap_formats($this->date_start, $timedate->get_date_time_format(true, $current_user),  $timedate->get_db_date_time_format());
			$date_start_array=split(" ",trim($date_start_in_db_fmt));
			$date_time_start =DateTimeUtil::get_time_start($date_start_array[0],$date_start_array[1]);

			$date_start_timestamp=mktime($date_time_start->hour,$date_time_start->min,$date_time_start->sec,$date_time_start->month,$date_time_start->day);
			$date_start_timestamp+= (( $this->duration_hours * 3600 )+ ($this->duration_minutes * 60));

			$this->date_end=date ($timedate->get_date_time_format(true, $current_user),$date_start_timestamp);
			// Need to convert it to the db date right here so that we don't miss the time calculation
			$this->date_end = $timedate->to_db_date($this->date_end);
			if(empty($disable_date_format)){
				$this->date_end = $timedate->swap_formats($this->date_end, $timedate->dbDayFormat, $timedate->get_date_format());
			}
        }

		if(!empty($_REQUEST['send_invites']) && $_REQUEST['send_invites'] == '1') {
			$check_notify = true;
        } else {
			$check_notify = false;
        }
		if(empty($_REQUEST['send_invites'])) {
			if(!empty($this->id)) {
				$old_record = new Call();
				$old_record->retrieve($this->id);
				$old_assigned_user_id = $old_record->assigned_user_id;
			}
			if((empty($this->id) && isset($_REQUEST['assigned_user_id']) && !empty($_REQUEST['assigned_user_id']) && $GLOBALS['current_user']->id != $_REQUEST['assigned_user_id']) || (isset($old_assigned_user_id) && !empty($old_assigned_user_id) && isset($_REQUEST['assigned_user_id']) && !empty($_REQUEST['assigned_user_id']) && $old_assigned_user_id != $_REQUEST['assigned_user_id']) ){
				$this->special_notification = true;
				$check_notify = true;
                if(isset($_REQUEST['assigned_user_name'])) {
                    $this->new_assigned_user_name = $_REQUEST['assigned_user_name'];
                }
			}
		}        
        if (empty($this->status) ) {
            $mod_strings = return_module_language($GLOBALS['current_language'], $this->module_dir);
            $this->status = $mod_strings['LBL_DEFAULT_STATUS'];
        }
		/*nsingh 7/3/08  commenting out as bug #20814 is invalid
		if($current_user->getPreference('reminder_time')!= -1 &&  isset($_POST['reminder_checked']) && isset($_POST['reminder_time']) && $_POST['reminder_checked']==0  && $_POST['reminder_time']==-1){
			$this->reminder_checked = '1';
			$this->reminder_time = $current_user->getPreference('reminder_time');
		}*/
        parent::save($check_notify);
        global $current_user;
        require_once('modules/vCals/vCal.php');

        if($this->update_vcal) {
			vCal::cache_sugar_vcal($current_user);
        }
	}

	/** Returns a list of the associated contacts
	 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc..
	 * All Rights Reserved..
	 * Contributor(s): ______________________________________..
	*/
	function get_contacts()
	{
		// First, get the list of IDs.
		$query = "SELECT contact_id as id from calls_contacts where call_id='$this->id' AND deleted=0";

		return $this->build_related_list($query, new Contact());
	}


	function get_summary_text()
	{
		return "$this->name";
	}

	function create_list_query($order_by, $where, $show_deleted=0)
	{
		$custom_join = $this->custom_fields->getJOIN();
                $query = "SELECT ";
		$query .= "
			calls.*,";
			if ( preg_match("/calls_users\.user_id/",$where))
			{
				$query .= "calls_users.required,
				calls_users.accept_status,";
			}

			$query .= "
			users.user_name as assigned_user_name";



			if($custom_join){
   				$query .= $custom_join['select'];
 			}

			// this line will help generate a GMT-metric to compare to a locale's timezone

			if ( preg_match("/contacts/",$where)){
				$query .= ", contacts.first_name, contacts.last_name";
				$query .= ", contacts.assigned_user_id contact_name_owner";
			}
			$query .= " FROM calls ";

			/*
			if ( $this->db->dbType == 'mssql' )
			{
				$query .= ", calls.date_start ";
				if ( preg_match("/contacts/",$where)){
					$query .= ", contacts.first_name, contacts.last_name";
					$query .= ", contacts.assigned_user_id contact_name_owner";
				}
				$query .= " FROM calls ";
			}
			*/




			if ( preg_match("/contacts/",$where)){
				$query .=	"LEFT JOIN calls_contacts
	                    ON calls.id=calls_contacts.call_id
	                    LEFT JOIN contacts
	                    ON calls_contacts.contact_id=contacts.id ";
			}
			if ( preg_match("/calls_users\.user_id/",$where))
			{
		$query .= "LEFT JOIN calls_users
			ON calls.id=calls_users.call_id and calls_users.deleted=0 ";
			}



			$query .= "
			LEFT JOIN users
			ON calls.assigned_user_id=users.id ";
			if($custom_join){
  				$query .= $custom_join['join'];
			}
			$where_auto = '1=1';
       		 if($show_deleted == 0){
            	$where_auto = " $this->table_name.deleted=0  ";
			}else if($show_deleted == 1){
				$where_auto = " $this->table_name.deleted=1 ";
			}

			//$where_auto .= " GROUP BY calls.id";

		if($where != "")
			$query .= "where $where AND ".$where_auto;
		else
			$query .= "where ".$where_auto;

		if($order_by != "")
		$query .=  " ORDER BY ". $this->process_order_by($order_by, null);
		else
			$query .= " ORDER BY calls.name";
		return $query;
	}

        function create_export_query(&$order_by, &$where, $relate_link_join='')
        {
        	$custom_join = $this->custom_fields->getJOIN(true, true,$where);
			$custom_join['join'] .= $relate_link_join;
			$contact_required = ereg("contacts", $where);
            if($contact_required)
            {
                    $query = "SELECT calls.*, contacts.first_name, contacts.last_name";



                    if($custom_join){
   						$query .= $custom_join['select'];
 					}
                    $query .= " FROM contacts, calls, calls_contacts ";
                    $where_auto = "calls_contacts.contact_id = contacts.id AND calls_contacts.call_id = calls.id AND calls.deleted=0 AND contacts.deleted=0";
            }
            else
            {
                    $query = 'SELECT calls.*';



                   	if($custom_join){
   						$query .= $custom_join['select'];
 					}
                    $query .= ' FROM calls ';
                    $where_auto = "calls.deleted=0";
            }









			if($custom_join){
  				$query .= $custom_join['join'];
			}

			if($where != "")
                    $query .= "where $where AND ".$where_auto;
            else
                    $query .= "where ".$where_auto;

            if($order_by != "")
                    $query .=  " ORDER BY ". $this->process_order_by($order_by, null);
            else
                    $query .= " ORDER BY calls.name";

            return $query;
        }



	function fill_in_additional_list_fields()
	{
		parent::fill_in_additional_list_fields();
//		$this->fill_in_additional_detail_fields();
//		$this->fill_in_additional_parent_fields();
	}

	function fill_in_additional_detail_fields()
	{

		parent::fill_in_additional_detail_fields();
		$query  = "SELECT c.first_name, c.last_name, c.phone_work, c.id FROM contacts  c, calls_contacts  c_c ";
		$query .= "WHERE c_c.contact_id=c.id AND c_c.call_id='$this->id' AND c_c.deleted=0 AND c.deleted=0";
		$result = $this->db->query($query,true," Error filling in additional detail fields: ");

		// Get the id and the name.
		$row = Array();
		$row = $this->db->fetchByAssoc($result);

		$GLOBALS['log']->info("additional call fields $query");

		if($row != null)
		{
			$this->contact_name = return_name($row, 'first_name', 'last_name');
			$this->contact_phone = $row['phone_work'];
			$this->contact_id = $row['id'];
			$GLOBALS['log']->debug("Call($this->id): contact_name = $this->contact_name");
			$GLOBALS['log']->debug("Call($this->id): contact_phone = $this->contact_phone");
			$GLOBALS['log']->debug("Call($this->id): contact_id = $this->contact_id");
		}
		else {
			$this->contact_name = '';
			$this->contact_phone = '';
			$this->contact_id = '';
			$GLOBALS['log']->debug("Call($this->id): contact_name = $this->contact_name");
			$GLOBALS['log']->debug("Call($this->id): contact_phone = $this->contact_phone");
			$GLOBALS['log']->debug("Call($this->id): contact_id = $this->contact_id");
		}

		if (!isset($this->duration_minutes)) {
			$this->duration_minutes = $this->minutes_value_default;
		}

        global $timedate;
        //setting default date and time
		if (is_null($this->date_start)) {
			$this->date_start = $timedate->to_display_date_time(gmdate($GLOBALS['timedate']->get_db_date_time_format()));
		}

		if (is_null($this->duration_hours))
			$this->duration_hours = "0";
		if (is_null($this->duration_minutes))
			$this->duration_minutes = "1";

		$this->fill_in_additional_parent_fields();

		global $app_list_strings;
		$parent_types = $app_list_strings['record_type_display'];
		$disabled_parent_types = ACLController::disabledModuleList($parent_types,false, 'list');
		foreach($disabled_parent_types as $disabled_parent_type){
			if($disabled_parent_type != $this->parent_type){
				unset($parent_types[$disabled_parent_type]);
			}
		}

		$this->parent_type_options = get_select_options_with_id($parent_types, $this->parent_type);

		if (empty($this->reminder_time)) {
			$this->reminder_time = -1;
		}

		$this->reminder_checked = $this->reminder_time == -1 ? false : true;

		if (isset ($_REQUEST['parent_type'])) {
			$this->parent_type = $_REQUEST['parent_type'];
		} elseif (is_null($this->parent_type)) {
			$this->parent_type = $app_list_strings['record_type_default_key'];
		}
	}


	function fill_in_additional_parent_fields()
	{

		$this->parent_name = '';
		global $app_strings, $beanFiles, $beanList;
		if ( ! isset($beanList[$this->parent_type]))
		{
			$this->parent_name = '';
			return;
		}

	    $beanType = $beanList[$this->parent_type];
		require_once($beanFiles[$beanType]);
		$parent = new $beanType();

		if (is_subclass_of($parent, 'Person')) {
			$query = "SELECT first_name, last_name, assigned_user_id parent_name_owner from $parent->table_name where id = '$this->parent_id'";
		}
		else {

			$query = "SELECT name ";
			if(isset($parent->field_defs['assigned_user_id'])){
				$query .= " , assigned_user_id parent_name_owner ";
			}else{
				$query .= " , created_by parent_name_owner ";
			}
			$query .= " from $parent->table_name where id = '$this->parent_id'";
		}
		$result = $this->db->query($query,true," Error filling in additional detail fields: ");

		// Get the id and the name.
		$row = $this->db->fetchByAssoc($result);

		if ($row && !empty($row['parent_name_owner'])){
			$this->parent_name_owner = $row['parent_name_owner'];
			$this->parent_name_mod = $this->parent_type;
		}
		if (is_subclass_of($parent, 'Person') and $row != null)
		{
			$this->parent_name = '';
			if ($row['first_name'] != '') $this->parent_name .= stripslashes($row['first_name']). ' ';
			if ($row['last_name'] != '') $this->parent_name .= stripslashes($row['last_name']);
		}
		elseif($row != null)
		{
			$this->parent_name = stripslashes($row['name']);
		}
		else {
			$this->parent_name = '';
		}
	}

	function get_list_view_data(){
		$call_fields = $this->get_list_view_array();
		global $app_list_strings, $focus, $action, $currentModule, $image_path;
		if (isset($focus->id)) $id = $focus->id;
		else $id = '';
		if (isset($this->parent_type) && $this->parent_type != null)
		{
			$call_fields['PARENT_MODULE'] = $this->parent_type;
		}
		if ($this->status == "Planned") {
			//cn: added this if() to deal with sequential Closes in Meetings.  this is a hack to a hack (formbase.php->handleRedirect)
			if(empty($action)) { $action = "index"; }
			$call_fields['SET_COMPLETE'] = "<a href='index.php?return_module=$currentModule&return_action=$action&return_id=$id&action=EditView&status=Held&module=Calls&record=$this->id&status=Held'>".get_image($image_path."close_inline","title=".translate('LBL_LIST_CLOSE','Calls')." border='0'")."</a>";
		}
		global $timedate;
		$today = gmdate($GLOBALS['timedate']->get_db_date_time_format(), time());
		$nextday = gmdate($GLOBALS['timedate']->dbDayFormat, time() + 3600*24);
		$mergeTime = $call_fields['DATE_START']; //$timedate->merge_date_time($call_fields['DATE_START'], $call_fields['TIME_START']);
		$date_db = $timedate->to_db($mergeTime);
		if( $date_db	< $today){
			$call_fields['DATE_START']= "<font class='overdueTask'>".$call_fields['DATE_START']."</font>";
		}else if($date_db < $nextday){
			$call_fields['DATE_START'] = "<font class='todaysTask'>".$call_fields['DATE_START']."</font>";
		}else{
			$call_fields['DATE_START'] = "<font class='futureTask'>".$call_fields['DATE_START']."</font>";
		}
		$this->fill_in_additional_detail_fields();
        $call_fields['CONTACT_ID'] = $this->contact_id;
        $call_fields['CONTACT_NAME'] = $this->contact_name;

		$call_fields['PARENT_NAME'] = $this->parent_name;

		return $call_fields;
	}

	function set_notification_body($xtpl, $call) {
		global $sugar_config;
		global $app_list_strings;
		global $current_user;
		global $app_list_strings;
		global $timedate;

		$prefDate = User::getUserDateTimePreferences($call->current_notify_user);
		$x = date($prefDate['date']." ".$prefDate['time'], strtotime(($call->date_start . " " . $call->time_start)));
		$xOffset = $timedate->handle_offset($x, $prefDate['date']." ".$prefDate['time'], true, $current_user);

		if ( strtolower(get_class($call->current_notify_user)) == 'contact' ) {
			$xtpl->assign("ACCEPT_URL", $sugar_config['site_url'].
				  '/index.php?entryPoint=acceptDecline&module=Calls&contact_id='.$call->current_notify_user->id.'&record='.$call->id);
		} elseif ( strtolower(get_class($call->current_notify_user)) == 'lead' ) {
			$xtpl->assign("ACCEPT_URL", $sugar_config['site_url'].
				  '/index.php?entryPoint=acceptDecline&module=Calls&lead_id='.$call->current_notify_user->id.'&record='.$call->id);
		} else {
			$xtpl->assign("ACCEPT_URL", $sugar_config['site_url'].
				  '/index.php?entryPoint=acceptDecline&module=Calls&user_id='.$call->current_notify_user->id.'&record='.$call->id);
		}

		$xtpl->assign("CALL_TO", $call->current_notify_user->new_assigned_user_name);
		$xtpl->assign("CALL_SUBJECT", $call->name);
		$xtpl->assign("CALL_STARTDATE", $xOffset . " " . (!empty($app_list_strings['dom_timezones_extra'][$prefDate['userGmtOffset']]) ? $app_list_strings['dom_timezones_extra'][$prefDate['userGmtOffset']] : $prefDate['userGmt']));
		$xtpl->assign("CALL_HOURS", $call->duration_hours);
		$xtpl->assign("CALL_MINUTES", $call->duration_minutes);
		$xtpl->assign("CALL_STATUS", ((isset($call->status))?$app_list_strings['call_status_dom'][$call->status] : ""));
		$xtpl->assign("CALL_DESCRIPTION", $call->description);

		return $xtpl;
	}


	function get_call_users() {
		$template = new User();
		// First, get the list of IDs.
		$query = "SELECT calls_users.required, calls_users.accept_status, calls_users.user_id from calls_users where calls_users.call_id='$this->id' AND calls_users.deleted=0";
		$GLOBALS['log']->debug("Finding linked records $this->object_name: ".$query);
		$result = $this->db->query($query, true);
		$list = Array();

		while($row = $this->db->fetchByAssoc($result)) {
			$template = new User(); // PHP 5 will retrieve by reference, always over-writing the "old" one
			$record = $template->retrieve($row['user_id']);
			$template->required = $row['required'];
			$template->accept_status = $row['accept_status'];

			if($record != null) {
			    // this copies the object into the array
				$list[] = $template;
			}
		}
		return $list;
	}


  function get_invite_calls(&$user)
  {
    $template = $this;
    // First, get the list of IDs.
    $query = "SELECT calls_users.required, calls_users.accept_status, calls_users.call_id from calls_users where calls_users.user_id='$user->id' AND ( calls_users.accept_status IS NULL OR  calls_users.accept_status='none') AND calls_users.deleted=0";
    $GLOBALS['log']->debug("Finding linked records $this->object_name: ".$query);


    $result = $this->db->query($query, true);


    $list = Array();


    while($row = $this->db->fetchByAssoc($result))
    {
      $record = $template->retrieve($row['call_id']);
      $template->required = $row['required'];
      $template->accept_status = $row['accept_status'];


      if($record != null)
      {
        // this copies the object into the array
        $list[] = $template;
      }
    }
    return $list;

  }


  function set_accept_status(&$user,$status)
  {
    if ( $user->object_name == 'User')
    {
      $relate_values = array('user_id'=>$user->id,'call_id'=>$this->id);
      $data_values = array('accept_status'=>$status);
      $this->set_relationship($this->rel_users_table, $relate_values, true, true,$data_values);
      global $current_user;
      require_once('modules/vCals/vCal.php');
      if ( $this->update_vcal )
      {
        vCal::cache_sugar_vcal($user);
      }
    }
    else if ( $user->object_name == 'Contact')
    {
      $relate_values = array('contact_id'=>$user->id,'call_id'=>$this->id);
      $data_values = array('accept_status'=>$status);
      $this->set_relationship($this->rel_contacts_table, $relate_values, true, true,$data_values);
    }
    else if ( $user->object_name == 'Lead')
    {
      $relate_values = array('lead_id'=>$user->id,'call_id'=>$this->id);
      $data_values = array('accept_status'=>$status);
      $this->set_relationship($this->rel_leads_table, $relate_values, true, true,$data_values);
    }
  }



	function get_notification_recipients() {
		if($this->special_notification) {
			return parent::get_notification_recipients();
		}
		
//		$GLOBALS['log']->debug('Call.php->get_notification_recipients():'.print_r($this,true));
		$list = array();

		$notify_user = new User();
		$notify_user->retrieve($this->assigned_user_id);
		$notify_user->new_assigned_user_name = $notify_user->full_name;
		$GLOBALS['log']->info("Notifications: recipient is $notify_user->new_assigned_user_name");
		$list[] = $notify_user;

		if(!is_array($this->contacts_arr)) {
			$this->contacts_arr =	array();
		}

		if(!is_array($this->users_arr)) {
			$this->users_arr =	array();
		}

        if(!is_array($this->leads_arr)) {
			$this->leads_arr =	array();
		}

		foreach($this->users_arr as $user_id) {
			$notify_user = new User();
			$notify_user->retrieve($user_id);
			$notify_user->new_assigned_user_name = $notify_user->full_name;
			$GLOBALS['log']->info("Notifications: recipient is $notify_user->new_assigned_user_name");
			$list[] = $notify_user;
		}

		foreach($this->contacts_arr as $contact_id) {
			$notify_user = new Contact();
			$notify_user->retrieve($contact_id);
			$notify_user->new_assigned_user_name = $notify_user->full_name;
			$GLOBALS['log']->info("Notifications: recipient is $notify_user->new_assigned_user_name");
			$list[] = $notify_user;
		}

        foreach($this->leads_arr as $lead_id) {
			$notify_user = new Lead();
			$notify_user->retrieve($lead_id);
			$notify_user->new_assigned_user_name = $notify_user->full_name;
			$GLOBALS['log']->info("Notifications: recipient is $notify_user->new_assigned_user_name");
			$list[] = $notify_user;
		}
//		$GLOBALS['log']->debug('Call.php->get_notification_recipients():'.print_r($list,true));
		return $list;
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
		if(!empty($this->parent_name)){

			if(!empty($this->parent_name_owner)){
				global $current_user;
				$is_owner = $current_user->id == $this->parent_name_owner;
			}
		}
			if(!ACLController::moduleSupportsACL($this->parent_type) || ACLController::checkAccess($this->parent_type, 'view', $is_owner)){
				$array_assign['PARENT'] = 'a';
			}else{
				$array_assign['PARENT'] = 'span';
			}
		$is_owner = false;
		if(!empty($this->contact_name)){

			if(!empty($this->contact_name_owner)){
				global $current_user;
				$is_owner = $current_user->id == $this->contact_name_owner;
			}
		}
			if( ACLController::checkAccess('Contacts', 'view', $is_owner)){
				$array_assign['CONTACT'] = 'a';
			}else{
				$array_assign['CONTACT'] = 'span';
			}

		return $array_assign;
	}

	function save_relationship_changes($is_update) {
		parent::save_relationship_changes($is_update, array('lead_id', 'contact_id', 'user_id'));
	}

}

?>
