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
require_once('modules/DynamicFields/templates/Fields/TemplateText.php');
class TemplateURL extends TemplateText{
	
	var $type='url';
    function get_html_edit(){
        $this->prepare();
        return "<input type='text' name='". $this->name. "' id='".$this->name."' size='".$this->size."' title='{" . strtoupper($this->name) ."_HELP}' value='{". strtoupper($this->name). "}'>";
    }
    
    function get_html_detail(){
        $xtpl_var = strtoupper($this->name);
        return "<a href='{" . $xtpl_var . "}' class='listViewTdLinkS1' target='_blank'>{" . $xtpl_var . "}</a>";
    }
    
    function get_xtpl_detail(){
        $value = parent::get_xtpl_detail();
        if(!empty($value) && substr_count($value, '://') == 0 && substr($value ,0,8) != 'index.php'){
            $value = 'http://' . $value;
        }
        return $value;
    }

	function get_field_def(){
		$def = parent::get_field_def();
		//$def['options'] = !empty($this->options) ? $this->options : $this->ext1;
		$def['default'] = !empty($this->default) ? $this->default : $this->default_value;
		$def['len'] = $this->len;
		$def['dbType'] = 'varchar';
		$def['gen'] = !empty($this->gen) ? $this->gen : $this->ext3;
		return $def;	
	} 

}
?>
