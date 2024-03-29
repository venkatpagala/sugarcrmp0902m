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
require_once('include/utils.php');
require_once('modules/ProspectLists/ProspectList.php');

class CampaignLog extends SugarBean {

	var $table_name = 'campaign_log';
	var $object_name = 'CampaignLog';
	var $module_dir = 'CampaignLog';
	
	var $new_schema = true;
		
	var $campaign_id;
	var $target_tracker_key;
	var $target_id;
	var $target_type;
	var $activity_type;
	var $activity_date;
	var $related_id;
	var $related_type;
	var $deleted;
	var $list_id;
	var $hits;
	var $more_information;
	var $marketing_id;
	function CampaignLog() {
		global $sugar_config;
		parent::SugarBean();
		




	}	

    function get_list_view_data(){
        global $locale;
        $temp_array = $this->get_list_view_array();
        //make sure that both items in array are set to some value, else return null
        if(!(isset($temp_array['TARGET_TYPE']) && $temp_array['TARGET_TYPE']!= '') || !(isset($temp_array['TARGET_ID']) && $temp_array['TARGET_ID']!= ''))
        {   //needed values to construct query are empty/null, so return null
            $GLOBALS['log']->debug("CampaignLog.php:get_list_view_data duntion: temp_array['TARGET_TYPE'] and/or temp_array['TARGET_ID'] are empty, return null");
            $emptyArr = array();
            return $emptyArr; 
        }
        if ( ( $this->db->dbType == 'mysql' ) or ( $this->db->dbType == 'oci8' ) )
        {           
            $query="select first_name, last_name, CONCAT(CONCAT(first_name, ' '), last_name) name from ".strtolower($temp_array['TARGET_TYPE']) .  " where id ='{$temp_array['TARGET_ID']}'";           
        }
        if($this->db->dbType == 'mssql')
        {   
            $query="select first_name, last_name, (first_name + ' ' + last_name) name from ".strtolower($temp_array['TARGET_TYPE']) .  " where id ='{$temp_array['TARGET_ID']}'";
        }

        $result=$this->db->query($query);
        $row=$this->db->fetchByAssoc($result);

        if ($row) {
            $full_name = $locale->getLocaleFormattedName($row['first_name'], $row['last_name'], '');
            $temp_array['RECIPIENT_NAME']=$full_name;   
        }
        $temp_array['RECIPIENT_EMAIL']=$this->retrieve_email_address($temp_array['TARGET_ID']);

        return $temp_array;
    }
    
    function retrieve_email_address($trgt_id = ''){
        $return_str = '';
        if(!empty($trgt_id)){
            $qry  = " select eabr.primary_address, ea.email_address";
            $qry .= " from email_addresses ea ";
            $qry .= " Left Join email_addr_bean_rel eabr on eabr.email_address_id = ea.id ";
            $qry .= " where eabr.bean_id = '{$trgt_id}' ";
            $qry .= " and ea.deleted = 0 ";
            $qry .= " and eabr.deleted = 0" ;
            $qry .= " order by primary_address desc ";
    
            $result=$this->db->query($qry);
            $row=$this->db->fetchByAssoc($result);
    
            if (!empty($row['email_address'])){
                $return_str = $row['email_address'];
            }
        }
        return $return_str;
    }
    	
	function create_list_query($order_by, $where, $show_deleted=0) {
	
		$query  = "SELECT campaign_log.*, campaigns.name campaign_name, campaigns.objective campaign_objective, campaigns.content campaign_content";
		$query .= " FROM campaign_log";
		$query .= " LEFT JOIN campaigns ON campaigns.id = campaign_id AND campaigns.deleted=0";

        if(!empty($where))
			$query .= " WHERE ($where) ";

        if(!empty($order_by))
			$query .= " ORDER BY $order_by";

		return $query;
	}

	//this function is called statically by the campaing_log subpanel.
	 function get_related_name($related_id, $related_type) {
        global $locale;
	 	$db= DBManagerFactory::getInstance();
	 	if ($related_type == 'Emails') {
	 		$query="SELECT name from emails where id='$related_id'";
	 		$result=$db->query($query);
	 		$row=$db->fetchByAssoc($result);
	 		if ($row != null) {
	 			return $row['name'];
	 		}
	 	}
	 	if ($related_type == 'Contacts') {
	 		$query="SELECT first_name, last_name from contacts where id='$related_id'";
	 		$result=$db->query($query);
	 		$row=$db->fetchByAssoc($result);
	 		if ($row != null) {
	 			return $full_name = $locale->getLocaleFormattedName($row['first_name'], $row['last_name']);
	 		}
	 	}
        if ($related_type == 'Leads') {
            $query="SELECT first_name, last_name from leads where id='$related_id'";
            $result=$db->query($query);
            $row=$db->fetchByAssoc($result);
            if ($row != null) {
                return $full_name = $locale->getLocaleFormattedName($row['first_name'], $row['last_name']);
            }
        }        
        if ($related_type == 'Prospects') {
	 		$query="SELECT first_name, last_name from prospects where id='$related_id'";
	 		$result=$db->query($query);
	 		$row=$db->fetchByAssoc($result);
	 		if ($row != null) {
	 			return $full_name = $locale->getLocaleFormattedName($row['first_name'], $row['last_name']);
	 		}
	 	}
	 	if ($related_type == 'CampaignTrackers') {
	 		$query="SELECT tracker_url from campaign_trkrs where id='$related_id'";
	 		$result=$db->query($query);
	 		$row=$db->fetchByAssoc($result);
	 		if ($row != null) {
	 			return $row['tracker_url'] ;
	 		}
	 	}

		return $related_id.$related_type;
	}
	
}

?>
