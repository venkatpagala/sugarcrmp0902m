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
require_once('modules/Calendar/Calendar.php');

class vCal extends SugarBean {
	// Stored fields
	var $id;
	var $date_modified;
	var $user_id;
	var $content;
	var $deleted;
	var $type;
	var $source;
	var $module_dir = "vCals";
	var $table_name = "vcals";

	var $object_name = "vCal";

	var $new_schema = true;

	var $field_defs = array(
	);

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = Array();

	function vCal() 
	{
		
		parent::SugarBean();
		$this->disable_row_level_security = true;
	}

	function get_summary_text()
	{
		return "";
	}

	function create_list_query($order_by, $where, $show_deleted = 0)
	{
	}

	function fill_in_additional_list_fields()
	{
	}

	function fill_in_additional_detail_fields() 
	{
	}

	function get_list_view_data()
	{
	}

        // combines all freebusy vcals and returns just the FREEBUSY lines as a string
	function get_freebusy_lines_cache(&$user_bean)
	{
		$str = '';
		// First, get the list of IDs.
		$query = "SELECT id from vcals where user_id='{$user_bean->id}' AND type='vfb' AND deleted=0";
		$vcal_arr = $this->build_related_list($query, new vCal());

		foreach ($vcal_arr as $focus)
		{
			if (empty($focus->content))
			{
				return '';
			}

			$lines = explode("\n",$focus->content);

			foreach ($lines as $line)
			{
				if ( preg_match('/^FREEBUSY[;:]/i',$line))
				{
					$str .= "$line\n";
				}
			}
		}

		return $str;
	}

	// query and create the FREEBUSY lines for SugarCRM Meetings and Calls and 
        // return the string	
	function create_sugar_freebusy(&$user_bean,&$start_date_time,&$end_date_time)
	{
		$str = '';
		global $DO_USER_TIME_OFFSET;

		$DO_USER_TIME_OFFSET = true;
		// get activities.. queries Meetings and Calls
		$acts_arr =
		CalendarActivity::get_activities($user_bean->id,
			false,
			$start_date_time,
			$end_date_time,
			'week');

		// loop thru each activity, get start/end time in UTC, and return FREEBUSY strings
		for ($i = 0;$i < count($acts_arr);$i++)
		{
			$act =$acts_arr[$i];
			$date_arr = array('ts'=>$act->start_time->ts );
			$start_time = new DateTimeUtil($date_arr,true);

			$date_arr = array('ts'=>$act->end_time->ts );
			$end_time = new DateTimeUtil($date_arr,true);

			$str .= "FREEBUSY:". $start_time->get_utc_date_time() ."/". $end_time->get_utc_date_time()."\n";

		}
    
		return $str;

	}

        // return a freebusy vcal string 
        function get_vcal_freebusy(&$user_focus,$cached=true)
        {
           $str = "BEGIN:VCALENDAR\n";
           $str .= "VERSION:2.0\n";
           $str .= "PRODID:-//SugarCRM//SugarCRM Calendar//EN\n";
           $str .= "BEGIN:VFREEBUSY\n";
                                                                                                   
           $name = $user_focus->first_name. " ". $user_focus->last_name;
           $email = $user_focus->email1;
                                                                                                   
                                                                                                   
           // get current time local
           $date_arr = array();
           $now_date_time_local = new DateTimeUtil($date_arr,true);
                                                                                                   
           // get current time GMT
           $date_arr = array('ts'=>$now_date_time_local->ts - $now_date_time_local->tz_offset);
           $now_date_time = new DateTimeUtil($date_arr,true);
                                                                                                   
           // get start date GMT ( 1 day ago )
           $date_arr = array(
             'day'=>$now_date_time->day - 1,
             'month'=>($now_date_time->month),
             'hour'=>($now_date_time->hour),
             'min'=>($now_date_time->min),
             'year'=>$now_date_time->year);
                                                                                                   
           $start_date_time = new DateTimeUtil($date_arr,true);
                                                                                                   
           // get date 2 months from start date
			global $sugar_config;
			$timeOffset = 0;
            if (isset($sugar_config['vcal_time']) && $sugar_config['vcal_time'] != 0 && $sugar_config['vcal_time'] < 13)
			{
				$timeOffset = $sugar_config['vcal_time'];
			}
           $date_arr = array(
             'day'=>$start_date_time->day,
             'month'=>($start_date_time->month + $timeOffset),
             'hour'=>($start_date_time->hour),
             'min'=>($start_date_time->min),
             'year'=>$start_date_time->year);
                                                                                                   
           $end_date_time = new DateTimeUtil($date_arr,true);
                                                                                                   
           // get UTC time format
           $utc_start_time = $start_date_time->get_utc_date_time();
           $utc_end_time = $end_date_time->get_utc_date_time();
           $utc_now_time = $now_date_time->get_utc_date_time();
                                                                                                   
           $str .= "ORGANIZER;CN=$name:$email\n";
           $str .= "DTSTART:$utc_start_time\n";
           $str .= "DTEND:$utc_end_time\n";
                                                                                                   
           // now insert the freebusy lines
           // retrieve cached freebusy lines from vcals
		   if ($timeOffset != 0)
		   {
		   	if ($cached == true)
			{
				$str .= $this->get_freebusy_lines_cache($user_focus);
			} 
           // generate freebusy from Meetings and Calls
			else
			{      
				$str .= $this->create_sugar_freebusy($user_focus,$start_date_time,$end_date_time);
			}
		   }
                                                                                                   
           // UID:20030724T213406Z-10358-1000-1-12@phoenix
           $str .= "DTSTAMP:$utc_now_time\n";
           $str .= "END:VFREEBUSY\n";
           $str .= "END:VCALENDAR\n";
           return $str;

	}

	// static function:
        // cache vcals
        function cache_sugar_vcal(&$user_focus)
        {
            vCal::cache_sugar_vcal_freebusy($user_focus);
        }

	// static function:
        // caches vcal for Activities in Sugar database
        function cache_sugar_vcal_freebusy(&$user_focus)
        {
            $focus = new vCal();
            // set freebusy members and save 
            $arr = array('user_id'=>$user_focus->id,'type'=>'vfb','source'=>'sugar');
            $focus->retrieve_by_string_fields($arr);
                                                                                                   
                                                                                                   
            $focus->content = $focus->get_vcal_freebusy($user_focus,false);
            $focus->type = 'vfb';
            $focus->date_modified = null;
            $focus->source = 'sugar';
            $focus->user_id = $user_focus->id;
            $focus->save();
        }


}

?>
