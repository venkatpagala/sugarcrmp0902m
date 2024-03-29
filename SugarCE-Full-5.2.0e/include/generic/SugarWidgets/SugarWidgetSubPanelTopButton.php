<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * SugarWidgetSubPanelTopButton
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



require_once('include/generic/SugarWidgets/SugarWidget.php');

class SugarWidgetSubPanelTopButton extends SugarWidget
{
    var $module;
	var $title;
	var $access_key;
	var $form_value;
	var $additional_form_fields;
	var $acl;

//TODO rename defines to layout defs and make it a member variable instead of passing it multiple layers with extra copying.
	
	/** Take the keys for the strings and look them up.  Module is literal, the rest are label keys
	*/
	function SugarWidgetSubPanelTopButton($module='', $title='', $access_key='', $form_value='')
	{
		global $app_strings;

		if(is_array($module))
		{
			// it is really the class details from the mapping
			$class_details = $module;
			
			// If keys were passed into the constructor, translate them from keys to values.
			if(!empty($class_details['module']))
				$this->module = $class_details['module'];
			if(!empty($class_details['title']))
				$this->title = $app_strings[$class_details['title']];
			if(!empty($class_details['access_key']))
				$this->access_key = $app_strings[$class_details['access_key']];
			if(!empty($class_details['form_value']))
				$this->form_value = translate($class_details['form_value'], $this->module);
			if(!empty($class_details['additional_form_fields']))
				$this->additional_form_fields = $class_details['additional_form_fields'];
			if(!empty($class_details['ACL'])){
				$this->acl = $class_details['ACL'];
			}
		}
		else
		{
			$this->module = $module;
		
			// If keys were passed into the constructor, translate them from keys to values.
			if(!empty($title))
				$this->title = $app_strings[$title];
			if(!empty($access_key))
				$this->access_key = $app_strings[$access_key];
			if(!empty($form_value))
				$this->form_value = translate($form_value, $module);
		}
	}
	
    function &_get_form($defines, $additionalFormFields = null)
    {
        global $app_strings;
        global $currentModule;

        // Create the additional form fields with real values if they were not passed in
        if(empty($additionalFormFields) && $this->additional_form_fields)
        {
            foreach($this->additional_form_fields as $key=>$value)
            {
                if(!empty($defines['focus']->$value))
                {
                    $additionalFormFields[$key] = $defines['focus']->$value;
                }
                else
                {
                    $additionalFormFields[$key] = '';
                }
            }
        }
        
        
		if(!empty($this->module))
        {
            $defines['child_module_name'] = $this->module;
        }
        else
        {
            $defines['child_module_name'] = $defines['module'];
        }

        $defines['parent_bean_name'] = get_class( $defines['focus']);
		$relationship_name = $this->get_subpanel_relationship_name($defines);
        
        $form = 'form' . $relationship_name;
        $button = '<form action="index.php" method="post" name="form" id="' . $form . "\">\n";

        //module_button is used to override the value of module name
        $button .= "<input type='hidden' name='module' value='".$defines['child_module_name']."'>\n";
        $button .= "<input type='hidden' name='".strtolower($defines['parent_bean_name'])."_id' value='".$defines['focus']->id."'>\n";

        if(isset($defines['focus']->name))
        {
            $button .= "<input type='hidden' name='".strtolower($defines['parent_bean_name'])."_name' value='".$defines['focus']->name."'>";
            #26451,add these fields for custom one-to-many relate field.
            if(!empty($defines['child_module_name'])){
            	$button .= "<input type='hidden' name='". $relationship_name ."_name' value='".$defines['focus']->name."'>";
            	$childFocusName = !empty($GLOBALS['beanList'][$defines['child_module_name']]) ? $GLOBALS['beanList'][$defines['child_module_name']] : "";
            	if(!empty($GLOBALS['dictionary'][ $childFocusName ]["fields"][$relationship_name .'_name']['id_name'])){
            		$button .= "<input type='hidden' name='". $GLOBALS['dictionary'][ $childFocusName ]["fields"][$relationship_name .'_name']['id_name'] ."' value='".$defines['focus']->id."'>";
            	}
            }
        }

        $button .= '<input type="hidden" name="return_module" value="' . $currentModule . "\" />\n";

        if($currentModule == 'Campaigns'){
            $button .= '<input type="hidden" name="return_action" value="DetailView" />';
        }
        elseif($defines['action'] == 'SubPanelViewer'){
            $button .= "<input type=\"hidden\" name=\"return_action\" value=\"DetailView\" />\n";
        }
        else{
            $button .= '<input type="hidden" name="return_action" value="' . $defines['action'] . "\" />\n";    
        }
        
        $button .= '<input type="hidden" name="return_id" value="' . $defines['focus']->id . "\" />\n";
        $button .= '<input type="hidden" name="return_relationship" value="' . $relationship_name . "\" />\n";        
        switch ( strtolower( $currentModule ) )
        {
            case 'prospects' :
                $name = $defines['focus']->account_name ;
                break ;
            case 'documents' :
                $name = $defines['focus']->document_name ;
                break ;
            case 'kbdocuments' :
                $name = $defines['focus']->kbdocument_name ;
                break ;
            case 'leads' :
            case 'contacts' : 
                $name = $defines['focus']->first_name . " " .$defines['focus']->last_name ;
                break ;
            default :
               $name = (isset($defines['focus']->name)) ? $defines['focus']->name : "";
        }
        $button .= '<input type="hidden" name="return_name" value="' . $name . "\" />\n";
        
        // TODO: move this out and get $additionalFormFields working properly
        if(empty($additionalFormFields['parent_type']))
        {
            if($defines['focus']->object_name=='Contact') {
                $additionalFormFields['parent_type'] = 'Accounts';
            }
            else {
                $additionalFormFields['parent_type'] = $defines['focus']->module_dir;
            }
        }
        if(empty($additionalFormFields['parent_name']))
        {
            if($defines['focus']->object_name=='Contact') {
                $additionalFormFields['parent_name'] = $defines['focus']->account_name;
                $additionalFormFields['account_name'] = $defines['focus']->account_name;
            }
            else {
                $additionalFormFields['parent_name'] = $defines['focus']->name;
            }
        }
        if(empty($additionalFormFields['parent_id']))
        {
            if($defines['focus']->object_name=='Contact') {
                $additionalFormFields['parent_id'] = $defines['focus']->account_id;
                $additionalFormFields['account_id'] = $defines['focus']->account_id;
            } else if($defines['focus']->object_name=='Contract') {
            	$additionalFormFields['contract_id'] = $defines['focus']->id;
            } else {
                $additionalFormFields['parent_id'] = $defines['focus']->id;
            }
        }

        if ($defines['focus']->object_name=='Opportunity') {
            $additionalFormFields['account_id'] = $defines['focus']->account_id;
            $additionalFormFields['account_name'] = $defines['focus']->account_name;
        }

        if (!empty($defines['child_module_name']) and $defines['child_module_name']=='Contacts' and !empty($defines['parent_bean_name']) and $defines['parent_bean_name']=='contact' ) {
            if (!empty($defines['focus']->id ) and !empty($defines['focus']->name)) {
                $button .= '<input type="hidden" name="reports_to_id" value="'. $defines['focus']->id .'"  />' . "\n";
                $button .= '<input type="hidden" name="reports_to_name" value="'. $defines['focus']->name .'"  />' . "\n";
            }
        }
        $button .= '<input type="hidden" name="action" value="EditView" />' . "\n";
        
        // fill in additional form fields for all but action
        foreach($additionalFormFields as $key => $value)
        {
            if($key != 'action')
            {
                $button .= '<input type="hidden" name="' . $key . '" value="' . $value . '" />' . "\n";
            }
        }

        return $button;
    }

	/** This default function is used to create the HTML for a simple button */
	function display($defines, $additionalFormFields = null)
	{
		$temp='';
		if(!empty($this->acl) && ACLController::moduleSupportsACL($defines['module'])  &&  !ACLController::checkAccess($defines['module'], $this->acl, true)){
			$button = "<input title='$this->title'  class='button' type='button' name='" . $this->getWidgetId() . "_create_button' value='  $this->form_value  ' disabled/>\n</form>";
			return $temp;
		}
		
		global $app_strings;
		
		$button = $this->_get_form($defines, $additionalFormFields);
		$button .= "<input title='$this->title' accesskey='$this->access_key' class='button' type='submit' name='" . $this->getWidgetId() . "_create_button' value='  $this->form_value  ' />\n</form>";
		return $button;
	}

	/**
	 * Returns a string that is the JSON encoded version of the popup request.
	 * Perhaps this function should be moved to a more globally accessible location?
	 */
	function _create_json_encoded_popup_request($popup_request_data)
	{
		$popup_request_array = array();
		
		if(!empty($popup_request_data['call_back_function']))
		{
			$popup_request_array[] = '"call_back_function":"' . $popup_request_data['call_back_function'] . '"';
		}

		if(!empty($popup_request_data['form_name']))
		{
			$popup_request_array[] = '"form_name":"' . $popup_request_data['form_name'] . '"';
		}
		
		if(!empty($popup_request_data['field_to_name_array']))
		{
			$field_to_name_array = array();
			foreach($popup_request_data['field_to_name_array'] as $field => $name)
			{
				$field_to_name_array[] = '"' . $field . '":"' . $name . '"';
			}
			
			$popup_request_array[] = '"field_to_name_array":{' . implode(',', $field_to_name_array) . '}';
		}

		if(!empty($popup_request_data['passthru_data']))
		{
			$passthru_array = array();
			foreach($popup_request_data['passthru_data'] as $field => $name)
			{
				$passthru_array[] = '"' . $field . '":"' . $name . '"';
			}
			
			$popup_request_array[] = '"passthru_data":{' . implode(',', $passthru_array) . '}';
		}

		$encoded_popup_request = '{' . implode(',', $popup_request_array) . '}';
		
		return $encoded_popup_request;
	}
	
	/**
	 * get_subpanel_relationship_name
	 * Get the relationship name based on the subapnel definition
	 * @param mixed $defines The subpanel definition
	 */
	function get_subpanel_relationship_name($defines) {
		 $relationship_name = '';
		 if(!empty($defines)) {
		 	$relationship_name = isset($defines['module']) ? $defines['module'] : '';
	     	$dataSource = $defines['subpanel_definition']->get_data_source_name() ;
         	if (!empty($dataSource)) {
				$relationship_name = $dataSource;
				//Try to set the relationship name to the real relationship, not the link.
				if (!empty($defines['subpanel_definition']->parent_bean->field_defs[$dataSource])
				 && !empty($defines['subpanel_definition']->parent_bean->field_defs[$dataSource]['relationship']))
				{
					$relationship_name = $defines['subpanel_definition']->parent_bean->field_defs[$dataSource]['relationship'];
				}
			}
		 }
		 return $relationship_name;
	}
	
}
?>
