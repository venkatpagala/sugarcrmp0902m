<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * LayoutManager
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



require_once('include/generic/SugarWidgets/SugarWidgetSubPanelTopButton.php');
require_once('include/generic/SugarWidgets/SugarWidgetReportField.php');
require_once('include/database/DBHelper.php');

class LayoutManager
{
	var $defs = array();
	var $widget_prefix = 'SugarWidget';
	var $default_widget_name = 'Field';
	var $DBHelper;

	function LayoutManager()
	{
		// set a sane default for context
		$this->defs['context'] = 'Detail';
		$this->DBHelper = $GLOBALS['db']->getHelper();
	}	

	function setAttribute($key,$value)
	{
		$this->defs[$key] = $value;
	}	

	function setAttributePtr($key,&$value)
	{
		$this->defs[$key] = $value;
	}	

	function getAttribute($key)
	{
		if ( isset($this->defs[$key]))
		{
			return $this->defs[$key];
		} else {
			return null;
		}
	}	

	// Take the class name from the widget definition and use the class to look it up
	// $use_default will default classes to SugarWidgetFieldxxxxx
	function getClassFromWidgetDef($widget_def, $use_default = false)
	{
		static $class_map = array(
			'SugarWidgetSubPanelTopCreateButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopButton',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LBL_NEW_BUTTON_LABEL',
				'ACL'=>'edit',
			),
            'SugarWidgetSubPanelTopButtonQuickCreate' => array(
                'widget_class'=>'SugarWidgetSubPanelTopButtonQuickCreate',
                'title'=>'LBL_NEW_BUTTON_TITLE',
                'access_key'=>'LBL_NEW_BUTTON_KEY',
                'form_value'=>'LBL_NEW_BUTTON_LABEL',
                'ACL'=>'edit',
            ),
			'SugarWidgetSubPanelTopScheduleMeetingButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopScheduleMeetingButton',
				'module'=>'Meetings',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LNK_NEW_MEETING',
				'ACL'=>'edit',
			),
			'SugarWidgetSubPanelTopScheduleCallButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopScheduleCallButton',
				'module'=>'Calls',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LNK_NEW_CALL',
				'ACL'=>'edit',
			),
			'SugarWidgetSubPanelTopCreateTaskButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopCreateTaskButton',
				'module'=>'Tasks',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LNK_NEW_TASK',
				'ACL'=>'edit',
			),
			'SugarWidgetSubPanelTopCreateNoteButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopCreateNoteButton',
				'module'=>'Notes',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LNK_NEW_NOTE',
				'ACL'=>'edit',
			),	
			'SugarWidgetSubPanelTopCreateContactAccountButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopButton',
				'module'=>'Contacts',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LBL_NEW_BUTTON_LABEL',
        		'additional_form_fields' => array(
        			'primary_address_street' => 'shipping_address_street',
					'primary_address_city' => 'shipping_address_city',
					'primary_address_state' => 'shipping_address_state',
					'primary_address_country' => 'shipping_address_country',
					'primary_address_postalcode' => 'shipping_address_postalcode',
					'to_email_addrs' => 'email1'
					),
				'ACL'=>'edit',
			),
			'SugarWidgetSubPanelTopCreateContact' => array(
				'widget_class'=>'SugarWidgetSubPanelTopButton',
				'module'=>'Contacts',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LBL_NEW_BUTTON_LABEL',
        		'additional_form_fields' => array(
        			'account_id' => 'account_id',
					'account_name' => 'account_name',
				),
				'ACL'=>'edit',
			),
			'SugarWidgetSubPanelTopCreateRevisionButton'=> array(
				'widget_class'=>'SugarWidgetSubPanelTopButton',
				'module'=>'DocumentRevisions',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LBL_NEW_BUTTON_LABEL',
        		'additional_form_fields' => array(
        			'parent_name'=>'document_name',
					'document_name' => 'document_name',
					'document_revision' => 'latest_revision',
					'document_filename' => 'filename',
        			'document_revision_id' => 'document_revision_id',					
				),
				'ACL'=>'edit',
			),
			
			'SugarWidgetSubPanelTopCreateDirectReport' => array(
				'widget_class'=>'SugarWidgetSubPanelTopButton',
				'module'=>'Contacts',
				'title'=>'LBL_NEW_BUTTON_TITLE',
				'access_key'=>'LBL_NEW_BUTTON_KEY',
				'form_value'=>'LBL_NEW_BUTTON_LABEL',
        		'additional_form_fields' => array(
        			'reports_to_name' => 'name',
					'reports_to_id' => 'id',
				),
				'ACL'=>'edit',
			),
			'SugarWidgetSubPanelTopSelectFromReportButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopSelectButton',
				'module'=>'Reports',
				'title'=>'LBL_SELECT_REPORTS_BUTTON_LABEL',
				'access_key'=>'LBL_SELECT_BUTTON_KEY',
				'form_value'=>'LBL_SELECT_REPORTS_BUTTON_LABEL',
				'ACL'=>'edit',
				'add_to_passthru_data'=>array (
					'return_type'=>'report',
				)
			),
					
			'SugarWidgetSubPanelAddToProspectListButton' => array(
				'widget_class'=>'SugarWidgetSubPanelTopSelectButton',
				'module'=>'ProspectLists',
				'title'=>'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL',
				'access_key'=>'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY',
				'form_value'=>'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL',
				'ACL'=>'edit',
				'add_to_passthru_data'=>array (
					'return_type'=>'addtoprospectlist',
					'parent_module'=>'ProspectLists',
					'parent_type'=>'ProspectList',
					'child_id'=>'target_id',
					'link_attribute'=>'target_type',
					'link_type'=>'polymorphic',	 //polymorphic or default				
				)
			),		
		);			

		if($use_default) {
			switch($widget_def['name']) {
				case 'assigned_user_id':
					$widget_def['widget_class'] = 'Fielduser_name';
					break;





				default:
					$widget_def['widget_class'] = 'Field' . $this->DBHelper->getFieldType($widget_def);
			}
		}
		
		if(empty($widget_def['widget_class']))
		{
			// Default the class to SugarWidgetField
			$class_name = $this->widget_prefix.$this->default_widget_name;
		}
		else 
		{
			$class_name = $this->widget_prefix.$widget_def['widget_class'];
		}

		// Check to see if this is one of the known class mappings.
		if(!empty($class_map[$class_name]))
		{
			if (empty($class_map[$class_name]['widget_class'])) {
				$widget = new SugarWidgetSubPanelTopButton($class_map[$class_name]);				
			}  else {

				if (!class_exists($class_map[$class_name]['widget_class'])) {
					require_once('include/generic/SugarWidgets/'.$class_map[$class_name]['widget_class'].'.php');
				}

				$widget = new $class_map[$class_name]['widget_class']($class_map[$class_name]);
			}
			

			return $widget;
		}
		
		// At this point, we have a class name and we do not have a valid class defined.
		if(!class_exists($class_name))
		{

			// The class does not exist.  Try including it.
			if (file_exists('include/generic/SugarWidgets/'.$class_name.'.php'))
				require_once('include/generic/SugarWidgets/'.$class_name.'.php');
			
			if(!class_exists($class_name))
			{
				// If we still do not have a class, oops....
				die("LayoutManager: Class not found:".$class_name);
			}
		}
		
		$widget = new $class_name($this); // cache disabled $this->getClassFromCache($class_name);
		return $widget;
	}

	function widgetDisplay($widget_def, $use_default = false)
	{
		$theclass = $this->getClassFromWidgetDef($widget_def, $use_default);
 		$label = isset($widget_def['module']) ? $widget_def['module'] : '';
	    if (is_subclass_of($theclass, 'SugarWidgetSubPanelTopButton')) {
            $label = $theclass->get_subpanel_relationship_name($widget_def);    
	    }
		$theclass->setWidgetId($label);
		return $theclass->display($widget_def);
	}	

	function widgetQuery($widget_def, $use_default = false)
	{
		$theclass = $this->getClassFromWidgetDef($widget_def, $use_default);
//				_pp($theclass);
		return $theclass->query($widget_def);
	}
	
	// display an input field
	// module is the parent module of the def
	function widgetDisplayInput($widget_def, $use_default = false)
	{
		$theclass = $this->getClassFromWidgetDef($widget_def, $use_default);
		return $theclass->displayInput($widget_def);
	}	

}
?>
