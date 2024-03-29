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

$js_loaded = false;
require_once("include/templates/Template.php");

class TemplateGroupChooser extends Template {
    var $args;
    var $js_loaded = false;
    var $display_hide_tabs = true;
    var $display_third_tabs = false;

    function TemplateGroupChooser() {
    }

    function display() {
        global $mod_strings, $image_path, $js_loaded;
        
        $left_size = (empty($this->args['left_size']) ? '10' : $this->args['left_size']);
        $right_size = (empty($this->args['right_size']) ? '10' : $this->args['right_size']);
        $third_size = (empty($this->args['third_size']) ? '10' : $this->args['third_size']);
        $max_left = (empty($this->args['max_left']) ? '' : $this->args['max_left']);
        $alt_tip = (empty($this->args['alt_tip']) ? '' : $this->args['alt_tip']);
        
        $str = '';
        if(empty($image_path)) {
            global $theme;
            $image_path = 'themes/' . $theme . '/images/';
        }
        if($js_loaded == false) {
//            $this->template_groups_chooser_js();
            $js_loaded = true;
        }
        if(!isset($this->args['display'])) {
            $table_style = "";
        }
        else {
            $table_style = "display: ".$this->args['display'];
        }

        $str .= "<div id=\"{$this->args['id']}\" style=\"{$table_style}\">";
        if(!empty($this->args['title'])) $str .= "<h4>{$this->args['title']}</h4>";
        $str .= <<<EOQ
        <table cellpadding="0" cellspacing="0" border="0">
        
        <tr>
            <td>&nbsp;</td>
            <td class="dataLabel" id="chooser_{$this->args['left_name']}_text" align="center"><nobr>{$this->args['left_label']}</nobr></td>
EOQ;

        if($this->display_hide_tabs == true) {
           $str .= <<<EOQ
            <td>&nbsp;</td>
            <td class="dataLabel" id="chooser_{$this->args['right_name']}" align="center"><nobr>{$this->args['right_label']}</nobr></td>
EOQ;
        }
        
        if($this->display_third_tabs == true) {
           $str .= <<<EOQ
            <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="dataLabel" id="chooser_{$this->args['third_name']}" align="center"><nobr>{$this->args['third_label']}</nobr></td>
EOQ;
        }
        
        $str .= '</tr><tr><td valign="top" style="padding-right: 2px; padding-left: 2px;" align="center">';
        if(!isset($this->args['disable'])) { 
            $str .= "<a onclick=\"return SUGAR.tabChooser.up('{$this->args['left_name']}','{$this->args['left_name']}','{$this->args['right_name']}');\">" .  get_image($image_path.'uparrow_big','border="0" style="margin-bottom: 1px;" alt="'.$alt_tip.'"') . "</a><br>
                     <a onclick=\"return SUGAR.tabChooser.down('{$this->args['left_name']}','{$this->args['left_name']}','{$this->args['right_name']}');\">" . get_image($image_path.'downarrow_big','border="0" style="margin-top: 1px;" alt="'.$alt_tip.'"') . "</a>";
        }
        
        $str .= <<<EOQ
                </td>    
                <td align="center">
                    <table border="0" cellspacing=0 cellpadding="0" align="center">
                        <tr>
                            <td id="{$this->args['left_name']}_td" align="center">
                            <select id="{$this->args['left_name']}" name="{$this->args['left_name']}[]" size=
EOQ;
        $str .=  '"' . (empty($this->args['left_size']) ? '10' : $this->args['left_size']) . '" multiple="multiple" ' . (isset($this->args['disable']) ?  "DISABLED" : '') . 'style="width: 150px;">';

        foreach($this->args['values_array'][0] as $key=>$value) {
            $str .= "<option value='{$key}'>{$value}</option>";
        }
        $str .= "</select></td>
            </tr>
            </table>
            </td>";
        if ($this->display_hide_tabs == true) {
            $str .= '<td valign="top" style="padding-right: 2px; padding-left: 2px;" align="center">';
            if(!isset($this->args['disable'])) { 
                $str .= "<a onclick=\"return SUGAR.tabChooser.right_to_left('{$this->args['left_name']}','{$this->args['right_name']}', '{$left_size}', '{$right_size}', '{$max_left}');\">" . get_image($image_path.'leftarrow_big','border="0" style="margin-right: 1px;" alt="'.$alt_tip.'"') . "</a><a onclick=\"return SUGAR.tabChooser.left_to_right('{$this->args['left_name']}','{$this->args['right_name']}', '{$left_size}', '{$right_size}');\">" . get_image($image_path.'rightarrow_big','border="0" style="margin-left: 1px;" alt="'.$alt_tip.'"') . "</a>";
            }
            $str .= "</td>
                <td id=\"{$this->args['right_name']}_td\" align=\"center\">
                <select id=\"{$this->args['right_name']}\" name=\"{$this->args['right_name']}[]\" size=\"" . (empty($this->args['right_size']) ? '10' : $this->args['right_size']) . "\" multiple=\"multiple\" " . (isset($this->args['disable']) ? "DISABLED" : '') . 'style="width: 150px;">';
            foreach($this->args['values_array'][1] as $key=>$value) {
                $str .= "<option value=\"{$key}\">{$value}</option>";
            }
            $str .= "</select></td><td valign=\"top\" style=\"padding-right: 2px; padding-left: 2px;\" align=\"center\">"
                    . "<script>var object_refs = new Object();object_refs['{$this->args['right_name']}'] = document.getElementById('{$this->args['right_name']}');</script>";
         }
         
         if ($this->display_third_tabs == true) {
            $str .= '<td valign="top" style="padding-right: 2px; padding-left: 2px;" align="center">';
            if(!isset($this->args['disable'])) { 
                $str .= "<a onclick=\"return SUGAR.tabChooser.right_to_left('{$this->args['right_name']}','{$this->args['third_name']}', '{$right_size}', '{$third_size}');\">" . get_image($image_path.'leftarrow_big','border="0" style="margin-right: 1px;" alt="'.$alt_tip.'"') . "</a><a onclick=\"return SUGAR.tabChooser.left_to_right('{$this->args['right_name']}','{$this->args['third_name']}', '{$right_size}', '{$third_size}');\">" . get_image($image_path.'rightarrow_big','border="0" style="margin-left: 1px;" alt="'.$alt_tip.'"') . "</a>";
            }
            $str .= "</td>
                <td id=\"{$this->args['third_name']}_td\" align=\"center\">
                <select id=\"{$this->args['third_name']}\" name=\"{$this->args['third_name']}[]\" size=\"" . (empty($this->args['third_size']) ? '10' : $this->args['third_size']) . "\" multiple=\"multiple\" " . (isset($this->args['disable']) ? "DISABLED" : '') . 'style="width: 150px;">';
            foreach($this->args['values_array'][2] as $key=>$value) {
                $str .= "<option value=\"{$key}\">{$value}</option>";
            }
            $str .= "</select>
                <script>
                    object_refs['{$this->args['third_name']}'] = document.getElementById('{$this->args['third_name']}');
                </script>
                <td valign=\"top\" style=\"padding-right: 2px; padding-left: 2px;\" align=\"center\">
                </td>";
         }
         $str .= "<script>
                object_refs['{$this->args['left_name']}'] = document.getElementById('{$this->args['left_name']}');
                </script></tr>
            </table>";

                
        return $str;
}



    /*
     * All Moved to sugar_3.js in class tabChooser;
     * Please follow style that Dashlet configuration is done.
     */ 
    function template_groups_chooser_js() {
        //return '<script>var object_refs = new Object();</script>';
    }

}

?>
