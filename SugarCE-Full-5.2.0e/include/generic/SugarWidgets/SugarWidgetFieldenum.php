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

class SugarWidgetFieldEnum extends SugarWidgetReportField {

    function SugarWidgetFieldEnum(&$layout_manager) {
        parent::SugarWidgetReportField($layout_manager);
        $this->reporter = $this->layout_manager->getAttribute('reporter');  
    }
	
	function queryFilterEmpty(&$layout_def)
	{
        if( $this->reporter->db->dbType == 'mysql') {
	    	return '( '.$this->_get_column_select($layout_def).' IS NULL OR '.$this->_get_column_select($layout_def)."='' )\n";
        }		
        elseif( $this->reporter->db->dbType == 'mssql') {
	    	return '( '.$this->_get_column_select($layout_def).' IS NULL OR '.$this->_get_column_select($layout_def)." LIKE '' )\n";
        }





	}

	 function queryFilterNot_Empty(&$layout_def)
	 {
	    $reporter = $this->layout_manager->getAttribute("reporter");
        if( $this->reporter->db->dbType == 'mysql') {
	   		return '( '.$this->_get_column_select($layout_def).' IS NOT NULL AND '.$this->_get_column_select($layout_def)."<>'' )\n";
        }
        else if( $this->reporter->db->dbType == 'mssql') {
	        return $this->_get_column_select($layout_def).' IS NOT NULL ' . "\n";
        }






	 }
	
	    
	function queryFilteris(& $layout_def) {
		$input_name0 = $layout_def['input_name0'];
		if (is_array($layout_def['input_name0'])) {
			$input_name0 = $layout_def['input_name0'][0];
		}
		return $this->_get_column_select($layout_def)." = '".$GLOBALS['db']->quote($input_name0)."'\n";
	}

	function queryFilterone_of(& $layout_def) {
		$arr = array ();
		foreach ($layout_def['input_name0'] as $value) {
			$arr[] = "'".$GLOBALS['db']->quote($value)."'";
		}
	    $reporter = $this->layout_manager->getAttribute("reporter");
		$str = implode(",", $arr);
		return $this->_get_column_select($layout_def)." IN (".$str.")\n";
	}

	function & displayListPlain($layout_def) {
		$field_def = $this->reporter->all_fields[$layout_def['column_key']];
		
		if (empty ($field_def['fields']) || empty ($field_def['fields'][0]) || empty ($field_def['fields'][1]))
			$value = $this->_get_list_value($layout_def);
			$cell = translate($field_def['options'], $field_def['module'], $value);
		if (is_array($cell)) {
			//#22632  
			$value = explode('^,^',$value);
			$cell=array();
			foreach($value as $val){
				array_push( $cell, translate($field_def['options'],$field_def['module'],$val));
			}
			$cell = implode(", ",$cell);
		}
		return $cell;
	}


	function & queryOrderBy($layout_def) {
		$field_def = $this->reporter->all_fields[$layout_def['column_key']];
		if (!empty ($field_def['sort_on'])) {
			$order_by = $layout_def['table_alias'].".".$field_def['sort_on'];
		} else {





				$order_by = $this->_get_column_select($layout_def);



		}

		$list = translate($field_def['options'], $field_def['module']);

		$order_by_arr = array ();




















			if (empty ($layout_def['sort_dir']) || $layout_def['sort_dir'] == 'a') {
				$order_dir = " DESC";
			} else {
				$order_dir = " ASC";
			}

			foreach ($list as $key => $value) {
				array_push($order_by_arr, $order_by."='".$key."' $order_dir\n");
			}
			$thisarr = implode(',', $order_by_arr);
			return $thisarr;




    }
    
    function displayInput(&$layout_def) {
        global $app_list_strings;

        if(!empty($layout_def['remove_blank']) && $layout_def['remove_blank']) {
            if ( isset($layout_def['options']) &&  is_array($layout_def['options']) ) {
                $ops = $layout_def['options'];
            }
            elseif (isset($layout_def['options']) && isset($app_list_strings[$layout_def['options']])){ 
            	$ops = $app_list_strings[$layout_def['options']];
                if(array_key_exists('', $app_list_strings[$layout_def['options']])) {
             	   unset($ops['']);
	            }
            } 
            else{
            	$ops = array();
            }
        }
        else {
            $ops = $app_list_strings[$layout_def['options']];
        }
        
        $str = '<select multiple="true" size="3" name="' . $layout_def['name'] . '[]">';
        $str .= get_select_options_with_id($ops, $layout_def['input_name0']);
        $str .= '</select>';
        return $str;
    }
}
?>

