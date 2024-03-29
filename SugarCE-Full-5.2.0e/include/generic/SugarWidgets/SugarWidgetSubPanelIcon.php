<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * SugarWidgetSubPanelIcon
 *
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
 */



require_once('include/generic/SugarWidgets/SugarWidgetField.php');

class SugarWidgetSubPanelIcon extends SugarWidgetField
{
	function displayHeaderCell(&$layout_def)
	{
		return '&nbsp;';
	}

	function displayList(&$layout_def)
	{
		global $app_strings;
		global $image_path;
		global $app_list_strings;

		if(isset($layout_def['varname']))
		{
			$key = strtoupper($layout_def['varname']);
		}
		else
		{
			$key = $this->_get_column_alias($layout_def);
			$key = strtoupper($key);
		}
//add module image
		$module = $layout_def['module'];
		$action = 'DetailView';
		$record = $layout_def['fields']['ID'];
		$icon_img_html = get_image($image_path . $module . '', 'border="0" alt="' . $app_list_strings['moduleList'][$module] . '"');
		if (!empty($layout_def['attachment_image_only']) && $layout_def['attachment_image_only'] == true) {
			$ret="";
		}else { 
			$ret= '<a href="index.php?module=' . $module
				. '&action=' . $action
				. '&record=' . $record
				. '" class="listViewTdLinkS1">' . "$icon_img_html</a>";
		}
//if requested, add attachement icon.
		if(!empty($layout_def['image2']) && !empty($layout_def['image2_url_field'])){
			if (is_array($layout_def['image2_url_field'])) {
				$filepath="";
				//Generate file url.
				if (!empty($layout_def['fields'][strtoupper($layout_def['image2_url_field']['id_field'])])
				and !empty($layout_def['fields'][strtoupper($layout_def['image2_url_field']['filename_field'])]) ){
					
					$key=$layout_def['fields'][strtoupper($layout_def['image2_url_field']['id_field'])];
					$file=$layout_def['fields'][strtoupper($layout_def['image2_url_field']['filename_field'])];
					//$filepath=UploadFile :: get_url(from_html($file), $key);	
					$filepath="index.php?entryPoint=download&id=".$key."&type=".$layout_def['module'];
				}
			}
			else {
				if (!empty($layout_def['fields'][strtoupper($layout_def['image2_url_field'])])) {
					$filepath="index.php?entryPoint=download&id=".$layout_def['fields']['ID']."&type=".$layout_def['module'];						
				 }
			}
			$icon_img_html = get_image($image_path . $layout_def['image2'] . '', 'border="0" alt="' . $layout_def['image2'] . '"');
			$ret.= (empty($filepath)) ? '' : '<a href="' . $filepath. '" class="listViewTdLinkS1">' . "$icon_img_html</a>";	
		}
		// now handle attachments for Emails
		else if(!empty($layout_def['module']) && $layout_def['module'] == 'Emails' && !empty($layout_def['fields']['ATTACHMENT_IMAGE'])) {			
			$ret.= $layout_def['fields']['ATTACHMENT_IMAGE'];	
		}
		return $ret;
	}
}
?>
