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
require_once('include/utils.php');
require_once('include/Sugar_Smarty.php');
require_once('include/TemplateHandler/TemplateHandler.php');
require_once('modules/Currencies/Currency.php');
require_once('include/EditView/SugarVCR.php');
class EditView {

    var $th;
    var $tpl;
    var $notes;
    var $id;
    var $metadataFile;
    var $headerTpl;
    var $footerTpl;
    var $returnAction;
    var $returnModule;
    var $returnId;
    var $isDuplicate;
    var $focus;
    var $module;
    var $fieldDefs;
    var $sectionPanels;
    var $view = 'EditView';
    var $formatFields = true;
    var $showDetailData = true;
    var $showVCRControl = true;
    var $quickSearchCode;
    var $ss;
    var $offset = 0;
    var $populateBean = true;
    var $moduleTitleKey;

    /**
     * EditView constructor
     * This is the EditView constructor responsible for processing the new
     * Meta-Data framework
     *
     * @param $module String value of module this Edit view is for
     * @param $focus An empty sugarbean object of module
     * @param $id The record id to retrieve and populate data for
     * @param $metadataFile String value of file location to use in overriding default metadata file
     * @param tpl String value of file location to use in overriding default Smarty template
     *
     */
    function setup($module, $focus = null, $metadataFile = null, $tpl = 'include/EditView/EditView.tpl') {


        $this->th = new TemplateHandler();
        $this->th->ss =& $this->ss;
        $this->tpl = $tpl;
        $this->module = $module;
        $this->focus = $focus;
        $this->createFocus();
        if(empty($GLOBALS['sugar_config']['showDetailData'])) {
        	$this->showDetailData = false;
        }
        $this->metadataFile = $metadataFile;

        if(!empty($sugar_config['disable_vcr'])) {
           $this->showVCRControl = $sugar_config['disable_vcr'];
        }
        if(!empty($this->metadataFile) && file_exists($this->metadataFile)){
        	require_once($this->metadataFile);
        }else {
        	//If file doesn't exist we create a best guess
        	if(!file_exists("modules/$this->module/metadata/editviewdefs.php") &&
        	    file_exists("modules/$this->module/EditView.html")) {
        	    require_once('include/SugarFields/Parsers/EditViewMetaParser.php');
                global $dictionary;
        	    $htmlFile = "modules/" . $this->module . "/EditView.html";
        	    $parser = new EditViewMetaParser();
        	    if(!file_exists('modules/'.$this->module.'/metadata')) {
        	       sugar_mkdir('modules/'.$this->module.'/metadata');
        	    }
        	   	$fp = sugar_fopen('modules/'.$this->module.'/metadata/editviewdefs.php', 'w');
        	    fwrite($fp, $parser->parse($htmlFile, $dictionary[$focus->object_name]['fields'], $this->module));
        	    fclose($fp);
        	}

        	//Flag an error... we couldn't create the best guess meta-data file
        	if(!file_exists("modules/$this->module/metadata/editviewdefs.php")) {
        	   global $app_strings;
        	   $error = str_replace("[file]", "modules/$this->module/metadata/editviewdefs.php", $app_strings['ERR_CANNOT_CREATE_METADATA_FILE']);
        	   $GLOBALS['log']->fatal($error);
        	   echo $error;
        	   die();
        	}
            require_once("modules/$this->module/metadata/editviewdefs.php");
        }

        $this->defs = $viewdefs[$this->module][$this->view];
        $this->isDuplicate = isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] == 'true' && $this->focus->aclAccess('edit');
    }

    function createFocus(){
    	 global $beanList, $beanFiles;
    	if(empty($beanList[$this->module]))return;
    	if(!$this->focus ){
           $bean = $beanList[$this->module];
            require_once($beanFiles[$bean]);
           $obj = new $bean();
           $this->focus = $obj;
    	}

    	//If there is no idea, assume we are creating a new instance
    	//and call the fill_in_additional_detail_fields where initialization
    	//code has been moved to
    	if(empty($this->focus->id)) {
    	   global $current_user;
    	   $this->focus->fill_in_additional_detail_fields();
    	   $this->focus->assigned_user_id = $current_user->id;
    	}
    }

    function populateBean() {

        if(!empty($_REQUEST['record']) && $this->populateBean) {
           global $beanList;
           $bean = $beanList[$this->module];
           $obj = new $bean();
           $this->focus = $obj->retrieve($_REQUEST['record']);
        } else {
           $GLOBALS['log']->debug("Unable to populate bean, no record parameter found");
        }
    }

    function populateRelatedFields($relationship){
    	if(!empty($this->focus->id)){

    	}
    }


    /**
     * enableFormatting
     * This method is used to manually turn on/off the field formatting
     * @param $format boolean value to turn on/off field formatting
     */
    function enableFormatting($format = true) {
        $this->formatFields = $format;
    }


    function requiredFirst(){
    	 $panels = array('required'=>array());
    	 $reqCol = -1;
    	 $reqRow = 0;
    	foreach($this->defs['panels'] as $key=>$p){

		    	foreach($p as $row=>$rowDef) {
		            foreach($rowDef as $col => $colDef) {
		                $field = (is_array($p[$row][$col])) ? $p[$row][$col]['name'] : $p[$row][$col];
		                if((!empty($this->focus->field_defs[$field]) && !empty($this->focus->field_defs[$field]['required'])) || !empty($p[$row][$col]['displayParams']['required'])){
		                	$reqCol++;
		                	if($reqCol == $this->defs['templateMeta']['maxColumns']) {
		                		$reqCol = -1;
		                		$reqRow++;
		                	}
		                    $panels['required'][$reqRow][$reqCol] = $p[$row][$col];
		                }else{
		                	$panels[$key][$row][$col] = $p[$row][$col];
		                }

		            } //foreach
		    	} //foreach


		} //foreach
    	 $this->defs['panels'] = $panels;
    }

    function render(){
        $totalWidth = 0;
        foreach($this->defs['templateMeta']['widths'] as $col => $def) {
            foreach($def as $k => $value) $totalWidth += $value;
        }
        // calculate widths
        foreach($this->defs['templateMeta']['widths'] as $col => $def) {
            foreach($def as $k => $value)
                $this->defs['templateMeta']['widths'][$col][$k] = round($value / ($totalWidth / 100), 2);
        }

        $this->sectionPanels = array();
        $this->sectionLabels = array();
        if(!empty($this->defs['panels']) && count($this->defs['panels']) > 0) {
           $keys = array_keys($this->defs['panels']);
           if(is_numeric($keys[0])) {
           	  $defaultPanel = $this->defs['panels'];
           	  unset($this->defs['panels']); //blow away current value
              $this->defs['panels'][''] = $defaultPanel;
           }
        }
        if($this->view == 'EditView' && !empty($GLOBALS['sugar_config']['forms']['requireFirst'])){
        	$this->requiredFirst();
        }

        $maxColumns = isset($this->defs['templateMeta']['maxColumns']) ? $this->defs['templateMeta']['maxColumns'] : 2;
        $panelCount = 0;

		/* loop all the panels */
		foreach($this->defs['panels'] as $key=>$p)
		{
		        $panel = array();

                if(!is_array($this->defs['panels'][$key])) {
                   $this->sectionPanels[strtoupper($key)] = $p;
                } else {

			    	foreach($p as $row=>$rowDef) {
			            $columnsInRows = count($rowDef);
			            $columnsUsed = 0;
			            foreach($rowDef as $col => $colDef) {
			                $panel[$row][$col] = is_array($p[$row][$col]) ? array('field' => $p[$row][$col]) : array('field' => array('name'=>$p[$row][$col]));
			                $panel[$row][$col]['field']['tabindex'] = (isset($p[$row][$col]['tabindex'])) ? $p[$row][$col]['tabindex'] : ($panelCount*$maxColumns)+$col;

			                if($columnsInRows < $maxColumns) {
			                    if($col == $columnsInRows - 1) {
			                        $panel[$row][$col]['colspan'] = 2 * $maxColumns - ($columnsUsed + 1);
			                    } else {
			                        $panel[$row][$col]['colspan'] = floor(($maxColumns * 2 - $columnsInRows) / $columnsInRows);
			                        $columnsUsed = $panel[$row][$col]['colspan'];
			                    }

			                }
			            } //foreach
			    	} //foreach

			    	// Panel alignment will be off if the panel doesn't have a row with the max columns
			    	// It will not be aligned to the other panels so we add a filler row
			        $addFiller = true;
			        foreach($panel as $row) {
			        	if(count($row) == $this->defs['templateMeta']['maxColumns']) {
			        	   $addFiller = false;
			        	   break;
			        	}
			        }

			        if($addFiller) {
			           $filler = 0;
			    	   $rowCount = count($panel);
			    	   while($filler < $this->defs['templateMeta']['maxColumns']) {
			              $panel[$rowCount][$filler++] = array('field'=>array('name'=>''));
			    	   } //while
			        }


			    	$this->sectionPanels[strtoupper($key)] = $panel;
		        }

		$panelCount++;
		} //foreach

    }

    function process($checkFormName = false, $formName = '') {
        global $mod_strings, $sugar_config, $app_strings, $app_list_strings;

     	$this->focus->fill_in_relationship_fields();

        if(!$this->th->checkTemplate($this->module, $this->view, $checkFormName, $formName)){
        	$this->render();
        }
		if(isset($_REQUEST['offset'])) {
			$this->offset = $_REQUEST['offset'] - 1;
		} //if
        if($this->showVCRControl) {
        	$this->th->ss->assign('PAGINATION', SugarVCR::menu($this->module, $this->offset, $this->focus->is_AuditEnabled(), ($this->view == 'EditView')));
        } //if
        if(isset($_REQUEST['return_module'])) $this->returnModule = $_REQUEST['return_module'];
		if(isset($_REQUEST['return_action'])) $this->returnAction = $_REQUEST['return_action'];
		if(isset($_REQUEST['return_id'])) $this->returnId = $_REQUEST['return_id'];
		if(isset($_REQUEST['return_relationship'])) $this->returnRelationship = $_REQUEST['return_relationship'];
		if(isset($_REQUEST['return_name'])) $this->returnName = $this->getValueFromRequest($_REQUEST, 'return_name' ) ;

		// handle Create $module then Cancel
		if (empty($this->returnId)) {
			$this->returnAction = 'index';
		}

        $is_owner = $this->focus->isOwner($GLOBALS['current_user']->id);

        $this->fieldDefs = array();
		if($this->focus){

			global $current_user;

			/*if(empty($this->focus->assigned_user_id) ){
				$this->focus->assigned_user_id = $current_user->id;
			}*/

			if(!empty($this->focus->assigned_user_id)) {

			   $this->focus->assigned_user_name = get_assigned_user_name($this->focus->assigned_user_id);
			}













	        foreach($this->focus->toArray() as $name => $value) {

                $valueFormatted = false;
	        	//if($this->focus->field_defs[$name]['type']=='link')continue;

	        	if (!empty($this->fieldDefs[$name]) && !empty($this->fieldDefs[$name]['value']))
	               $this->fieldDefs[$name] = array_merge($this->focus->field_defs[$name] , $this->fieldDefs[$name] ) ;
	            else
                   $this->fieldDefs[$name] = $this->focus->field_defs[$name];

	            if(isset($this->fieldDefs[$name]['options']) && isset($app_list_strings[$this->fieldDefs[$name]['options']])) {
	                $this->fieldDefs[$name]['options'] = $app_list_strings[$this->fieldDefs[$name]['options']]; // fill in enums
	            } //if

	       	 	if(isset($this->fieldDefs[$name]['function'])) {
	       	 		$function = $this->fieldDefs[$name]['function'];
	       			if(is_array($function) && isset($function['name'])){
	       				$function = $this->fieldDefs[$name]['function']['name'];
	       			}else{
	       				$function = $this->fieldDefs[$name]['function'];
	       			}
					if(!empty($this->fieldDefs[$name]['function']['returns']) && $this->fieldDefs[$name]['function']['returns'] == 'html'){
						if(!empty($this->fieldDefs[$name]['function']['include'])){
								require_once($this->fieldDefs[$name]['function']['include']);
						}
						$value = $function($this->focus, $name, $value, $this->view);
						$valueFormatted = true;
					}else{
						$this->fieldDefs[$name]['options'] = $function($this->focus, $name, $value, $this->view);
					}
	       	 	}

	       	 	if(isset($this->fieldDefs[$name]['type']) && $this->fieldDefs[$name]['type'] == 'function' && isset($this->fieldDefs[$name]['function_name'])){
	       	 		$value = $this->callFunction($this->fieldDefs[$name]);
	       	 		$valueFormatted = true;
	       	 	}

	       	 	if(!$valueFormatted) {
	       	 	   $this->focus->format_field($this->focus->field_defs[$name]);
                   $value = isset($this->focus->$name) ? $this->focus->$name : '';
	       	 	}

	       	 	if (empty($this->fieldDefs[$name]['value']))
	       	 	{
	               $this->fieldDefs[$name]['value'] = $value;
	       	 	}









	            //This code is used for QuickCreates that go to Full Form view
	        	if($this->populateBean && empty($this->focus->id) && !isset($this->fieldDefs[$name]['function']) && isset($_REQUEST[$name])) {
	               $this->fieldDefs[$name]['value'] = $this->getValueFromRequest($_REQUEST, $name);
	            } //if

	            /*
                * Populate any relate fields that are linked by a relationship to the calling module.
                * Clicking the create button on a subpanel for example will populate three values in the $_REQUEST:
                * 1. return_module => the name of the calling module
                * 2. return_id => the id of the record in the calling module that the user was viewing and that should be associated with this new record
                * 3. return_name => the display value of the return_id record - the value to show in any relate field in this EditView
                * Only do if this fieldDef does not already have a value; if it does it will have been explicitly set, and that should overrule this less specific mechanism
                */
	            if (isset($this->returnModule) && isset($this->returnName) && empty($this->focus->id) && empty($this->fieldDefs['name']['value']) )
                {
	               if ( ($this->focus->field_defs[$name]['type'] == 'relate') && isset($this->focus->field_defs[$name][ 'module' ]) && $this->focus->field_defs[$name][ 'module' ] == $this->returnModule )
	               {
                       if (isset( $this->fieldDefs[$name]['id_name'])
                           && !empty($this->returnRelationship)
                           && isset($this->focus->field_defs[$this->fieldDefs[$name]['id_name']]['relationship'])
                           && ($this->returnRelationship == $this->focus->field_defs[$this->fieldDefs[$name]['id_name']]['relationship']))
	                   {
	                       $this->fieldDefs[$name]['value'] =  $this->returnName ;
	                       // set the hidden id field for this relate field to the correct value i.e., return_id
	                       $this->fieldDefs[$this->fieldDefs[$name]['id_name']]['value'] = $this->returnId ;
	                   }
	               }
                }

	        } //foreach

		} //if

		if(isset($this->focus->additional_meta_fields)) {
		    $this->fieldDefs = array_merge($this->fieldDefs, $this->focus->additional_meta_fields);
		}
    }

    /**
     * display
     * This method makes the Smarty variable assignments and then displays the
     * generated view.
     * @param $showTitle boolean value indicating whether or not to show a title on the resulting page
     * @param $ajaxSave boolean value indicating whether or not the operation is an Ajax save request
     * @return HTML display for view as String
     */
    function display($showTitle = true, $ajaxSave = false) {
        global $mod_strings, $sugar_config, $app_strings, $app_list_strings, $theme, $current_user;


        if(isset($this->defs['templateMeta']['javascript'])) {
           if(is_array($this->defs['templateMeta']['javascript'])) {
           	 $this->th->ss->assign('externalJSFile', 'modules/' . $this->module . '/metadata/editvewdefs.js');
           } else {
             $this->th->ss->assign('scriptBlocks', $this->defs['templateMeta']['javascript']);
           }
        }

        $this->th->ss->assign('id', $this->fieldDefs['id']['value']);
        $this->th->ss->assign('offset', $this->offset + 1);
        $this->th->ss->assign('APP', $app_strings);
        $this->th->ss->assign('MOD', $mod_strings);
        $this->th->ss->assign('fields', $this->fieldDefs);
        //_pp($this->fieldDefs);
        $this->th->ss->assign('sectionPanels', $this->sectionPanels);
        $this->th->ss->assign('returnModule', $this->returnModule);
        $this->th->ss->assign('returnAction', $this->returnAction);
        $this->th->ss->assign('returnId', $this->returnId);
        $this->th->ss->assign('isDuplicate', $this->isDuplicate);
        $this->th->ss->assign('def', $this->defs);
        $this->th->ss->assign('maxColumns', isset($this->defs['templateMeta']['maxColumns']) ? $this->defs['templateMeta']['maxColumns'] : 2);
        $this->th->ss->assign('module', $this->module);
        $this->th->ss->assign('headerTpl', isset($this->defs['templateMeta']['form']['headerTpl']) ? $this->defs['templateMeta']['form']['headerTpl'] : 'include/' . $this->view . '/header.tpl');
        $this->th->ss->assign('footerTpl', isset($this->defs['templateMeta']['form']['footerTpl']) ? $this->defs['templateMeta']['form']['footerTpl'] : 'include/' . $this->view . '/footer.tpl');
        $this->th->ss->assign('themePath', "themes/$theme/");
        $this->th->ss->assign('imagePath', "themes/$theme/images/");
        $this->th->ss->assign('current_user', $current_user);
        $this->th->ss->assign('bean', $this->focus);
        $this->th->ss->assign('isAuditEnabled', $this->focus->is_AuditEnabled());
        $this->th->ss->assign('gridline',$current_user->getPreference('gridline') == 'on' ? '1' : '0');

        global $js_custom_version;
        global $sugar_version;
        $this->th->ss->assign('SUGAR_VERSION', $sugar_version);
        $this->th->ss->assign('JS_CUSTOM_VERSION', $js_custom_version);

        //this is used for multiple forms on one page
        $form_id = $this->view;
        $form_name = $this->view;
        if($ajaxSave){
        	$form_id = 'form_'.$this->view .'_'.$this->module;
        	$form_name = $form_id;
        	$this->view = $form_name;
        	//$this->defs['templateMeta']['form']['buttons'] = array();
        	//$this->defs['templateMeta']['form']['buttons']['ajax_save'] = array('id' => 'AjaxSave', 'customCode'=>'<input type="button" class="button" value="Save" onclick="this.form.action.value=\'AjaxFormSave\';return saveForm(\''.$form_name.'\', \'multiedit_form_{$module}\', \'Saving {$module}...\');"/>');
        }

        if(isset($this->defs['templateMeta']['preForm'])) {
          $this->th->ss->assign('preForm', $this->defs['templateMeta']['preForm']);
        } //if
        if(isset($this->defs['templateMeta']['form']['closeFormBeforeCustomButtons'])) {
          $this->th->ss->assign('closeFormBeforeCustomButtons', $this->defs['templateMeta']['form']['closeFormBeforeCustomButtons']);
        }
        if(isset($this->defs['templateMeta']['form']['enctype'])) {
          $this->th->ss->assign('enctype', 'enctype="'.$this->defs['templateMeta']['form']['enctype'].'"');
        }
        $this->th->ss->assign('showDetailData', $this->showDetailData);
        $this->th->ss->assign('form_id', $form_id);
        $this->th->ss->assign('form_name', $form_name);
  		$this->th->ss->assign('set_focus_block', get_set_focus_js());
        $this->th->ss->assign('form', isset($this->defs['templateMeta']['form']) ? $this->defs['templateMeta']['form'] : null);
        $this->th->ss->assign('includes', isset($this->defs['templateMeta']['includes']) ? $this->defs['templateMeta']['includes'] : null);
		$this->th->ss->assign('view', $this->view);










        //Calculate time & date formatting (may need to calculate this depending on a setting)
        global $timedate;
        $this->th->ss->assign('CALENDAR_DATEFORMAT', $timedate->get_cal_date_format());
        $this->th->ss->assign('USER_DATEFORMAT', $timedate->get_user_date_format());
        $time_format = $timedate->get_user_time_format();
        $this->th->ss->assign('TIME_FORMAT', $time_format);

        $date_format = $timedate->get_cal_date_format();
        $time_separator = ":";
        if(preg_match('/\d+([^\d])\d+([^\d]*)/s', $time_format, $match)) {
           $time_separator = $match[1];
        }

        // Create Smarty variables for the Calendar picker widget
        $t23 = strpos($time_format, '23') !== false ? '%H' : '%I';
        if(!isset($match[2]) || $match[2] == '') {
          $this->th->ss->assign('CALENDAR_FORMAT', $date_format . ' ' . $t23 . $time_separator . "%M");
        } else {
          $pm = $match[2] == "pm" ? "%P" : "%p";
          $this->th->ss->assign('CALENDAR_FORMAT', $date_format . ' ' . $t23 . $time_separator . "%M" . $pm);
        }

        $this->th->ss->assign('TIME_SEPARATOR', $time_separator);

		$seps = get_number_seperators();
		$this->th->ss->assign('NUM_GRP_SEP', $seps[0]);
		$this->th->ss->assign('DEC_SEP', $seps[1]);
        $this->th->ss->assign('SHOW_VCR_CONTROL', $this->showVCRControl);

        //$str='';

        $str = $this->showTitle($showTitle);

        //Use the output filter to trim the whitespace
        $this->th->ss->load_filter('output', 'trimwhitespace');
        $str .= $this->th->displayTemplate($this->module, $this->view, $this->tpl, $ajaxSave, $this->defs);
		return $str;
    }

    function insertJavascript($javascript){
        $this->ss->assign('javascript', $javascript);
    }

    function callFunction($vardef){
		$can_execute = true;
		$execute_function = array();
		$execute_params = array();
		if(!empty($vardef['function_class'])){
			$execute_function[] = 	$vardef['function_class'];
			$execute_function[] = 	$vardef['function_name'];
		}else{
			$execute_function	= $vardef['function_name'];
		}
		foreach($vardef['function_params'] as $param ){
			if (empty($vardef['function_params_source']) or $vardef['function_params_source']=='parent'){
				if(empty($this->focus->$param)){
					$can_execute = false;
				}else{
					$execute_params[] = $this->focus->$param;
				}
			}else if ($vardef['function_params_source']=='this'){
				if(empty($this->focus->$param)){
					$can_execute = false;
				}else{
					$execute_params[] = $this->focus->$param;
				}
			}else{
				$can_execute = false;
			}

		}
		$value = '';
		if($can_execute){
			if(!empty($vardef['function_require'])){
				require_once($vardef['function_require']);
			}
			$value = call_user_func_array($execute_function, $execute_params);
		}
		return $value;
    }

    /**
     * getValueFromRequest
     * This is a helper method to extract a value from the request
     * Array.  We do some special processing for fields that start
     * with 'date_' by checking to see if they also include time
     * and meridiem values
     *
     * @param request The request Array
     * @param name The field name to extract value for
     * @return String value for given name
     */
    function getValueFromRequest($request, $name) {
        //Special processing for date values (combine to one field)
        if(preg_match('/^date_(.*)$/s', $name, $matches)) {
           $d = $request[$name];

           if(isset($request['time_' . $matches[1]])) {
           	   $d .= ' ' . $request['time_' . $matches[1]];
           	   if(isset($request[$matches[1] . '_meridiem'])) {
           	   	  $d .= $request[$matches[1] . '_meridiem'];
           	   }
           } else {
	           if(isset($request['time_hour_' . $matches[1]]) &&
	              isset($request['time_minute_' . $matches[1]])) {
	           	  $d .= ' ' . $request['time_hour_' . $matches[1]] . ':' . $request['time_minute_' . $matches[1]];
	           }
	           if(isset($request['meridiem'])) {
	           	  $d .= $request['meridiem'];
	           }
           }
           return $d;
        }

        return $request[$name];
    }

	/**
	 * Allow Subviews to overwrite this method to show custom titles.
	 * Examples: Projects & Project Templates.
	 * params: $showTitle: boolean for backwards compatibility.
	 */
    function showTitle($showTitle = false){
    	global $mod_strings;
    	if($showTitle) {
            $titleKey = (!empty($this->moduleTitleKey) && isset($this->moduleTitleKey)) ? $this->moduleTitleKey : 'LBL_MODULE_NAME';
            $title = $mod_strings[$titleKey] . ((empty($this->fieldDefs['name']['value'])



                ) ? '' : (': ' . $this->fieldDefs['name']['value']));
            return '<p>' . get_module_title($mod_strings[$titleKey], $title, true)  . '</p>';
        }
        return '';
    }
	/*Helper for setting Module Titles*/
    function setModuleTitleKey($key){
    	$this->moduleTitleKey = $key;
    }
}
