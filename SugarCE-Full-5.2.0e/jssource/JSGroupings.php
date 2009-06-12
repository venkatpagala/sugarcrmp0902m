<?php
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
/* 
 * This is the array that is used to determine how to group/concatenate js files together
 * The format is to define the location of the file to be concatenated as the array element key
 * and the location of the file to be created that holds the child files as the array element value.
 * So: $original_file_location => $Concatenated_file_location
 * 
 * If you wish to add a grouping that contains a file that is part of another group already,
 * add a '.' after the .js in order to make the element key unique.  Make sure you pare the extension out
 *    
 */

       $js_groupings = array(
           $sugar_grp1 = array(
                //scripts loaded on first page
                'include/javascript/sugar_3.js'         => 'include/javascript/sugar_grp1.js',
                'include/javascript/cookie.js'          => 'include/javascript/sugar_grp1.js',
                'jscalendar/calendar.js'                => 'include/javascript/sugar_grp1.js',
                //'jscalendar/lang/calendar-en.js'        => 'include/javascript/sugar_grp1.js',
                'jscalendar/calendar-setup_3.js'        => 'include/javascript/sugar_grp1.js',
                'include/javascript/ext-2.0/ext-quicksearch.js' => 'include/javascript/sugar_grp1.js',
                'include/javascript/quicksearch.js'    => 'include/javascript/sugar_grp1.js',
            ),            
            
            $sugar_grp1_yui = array(
            //YUI scripts loaded on first page
            'include/javascript/yui/YAHOO.js'       => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/log.js'         => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/dom.js'         => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/event.js'       => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/animation.js'   => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/connection.js'  => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/dragdrop.js'    => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/container.js'   => 'include/javascript/sugar_grp1_yui.js',
            'include/javascript/yui/ygDDList.js'    => 'include/javascript/sugar_grp1_yui.js',
            ),            
            
            $sugar_grp_yui_ext = array(
            //YUI-EXT scripts loaded     
            'include/javascript/yui/ext/yui-ext.js'                 => 'include/javascript/sugar_grp_yui_ext.js',
            'include/javascript/yui/ext/ddgrid.js'                  => 'include/javascript/sugar_grp_yui_ext.js',
            'include/javascript/yui/ext/data/XMLChildDataModel.js'  => 'include/javascript/sugar_grp_yui_ext.js',
            'include/javascript/yui/ext/grid/ChildGridView.js'      => 'include/javascript/sugar_grp_yui_ext.js',
            ),            
            
            $sugar_grp_yui2 = array(
            //YUI combination 2     
            'include/javascript/yui/dragdrop.js'    => 'include/javascript/sugar_grp_yui2.js',
            'include/javascript/yui/container.js'   => 'include/javascript/sugar_grp_yui2.js',
            ),            
            
            $sugar_grp_overlib = array(            
            //overlib combination            
            'include/javascript/overlibmws.js'              => 'include/javascript/sugar_grp_overlib.js',
            'include/javascript/overlibmws_iframe.js'       => 'include/javascript/sugar_grp_overlib.js',
            ),            
            
            $sugar_grp_ytree = array(
            //ytree files
            'include/ytree/TreeView/TreeView.js'        => 'include/javascript/sugar_grp_ytree.js',
            'include/ytree/TreeView/TaskNode.js'        => 'include/javascript/sugar_grp_ytree.js',
            'include/ytree/treeutil.js'                 => 'include/javascript/sugar_grp_ytree.js',
            ),             
        );
        
?>
