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

require_once('include/Dashlets/Dashlet.php');
require_once('include/Sugar_Smarty.php');

class ChartsDashlet extends Dashlet {
    var $width = '400';
    var $height = '480';
    var $report_id;

    /**
     * Constructor 
     * 
     * @global string current language
     * @param guid $id id for the current dashlet (assigned from Home module)
	 * @param report_id $report_id id of the saved report
     * @param array $def options saved for this dashlet
     */
    function ChartsDashlet($id, $report_id, $def) {
    	$this->report_id = $report_id;	
    	
        $this->loadLanguage('ChartsDashlet'); // load the language strings here

        parent::Dashlet($id); // call parent constructor

        $this->searchFields = array();
        $this->isConfigurable = true; // dashlet is configurable
        $this->hasScript = true;  // dashlet has javascript attached to it               
    }

    /**
     * Displays the dashlet
     * 
     * @return string html to display dashlet
     */
    function display() {
    	require_once("modules/Reports/Report.php");
		require_once("modules/Reports/SavedReport.php");	
	
		ajaxInit();
		
		$chartReport = new SavedReport();
		$chartExists = $chartReport->retrieve($this->report_id, false);
		
		if (!is_null($chartExists)){
	        $this->title = $chartReport->name;
				
			$reporter = new Report($chartReport->content);
			$reporter->is_saved_report = true;
			$reporter->saved_report_id = $chartReport->id;
			$reporter->run_chart_queries();
			
			require_once("modules/Reports/templates/templates_chart.php");
	
			ob_start();	
			template_chart($reporter, true, true, $this->id);
			$str = ob_get_contents();	
			ob_end_clean();
			
			$xmlFile = get_cache_file_name($reporter);
			
			$html = parent::display() . "<div align='center'>" . $str . "</div>" . "<br />"; // return parent::display for title and such
	
			$ss = new Sugar_Smarty();
	        $ss->assign('chartName', $this->id);
	        $ss->assign('chartXMLFile', $xmlFile);
	        $script = $ss->fetch('modules/Home/Dashlets/ChartsDashlet/ChartsDashletScript.tpl');
			$json = getJSONobj();
			
	        return parent::display() . "<div align='center'>" . $str . "</div>" . "<br />"; // return parent::display for title and such
		}
    }
    
    /**
     * Displays the javascript for the dashlet
     * 
     * @return string javascript to use with this dashlet
     */
    function displayScript() {
    	require_once("modules/Reports/Report.php");
		require_once("modules/Reports/SavedReport.php");	
	
		$chartReport = new SavedReport();		
		$chartExists = $chartReport->retrieve($this->report_id, false);
		
		if (!is_null($chartExists)){
	        $this->title = $chartReport->name;
				
			require_once("modules/Reports/templates/templates_chart.php");
			        
			$reporter = new Report($chartReport->content);
			$reporter->is_saved_report = true;
			$reporter->saved_report_id = $chartReport->id;
			$xmlFile = get_cache_file_name($reporter);
			
	    	$ss = new Sugar_Smarty();
	        $ss->assign('chartName', $this->id);
	        $ss->assign('chartXMLFile', $xmlFile);
	        
	        $ss->assign('chartStyleCSS', chartStyle());
	        $ss->assign('chartColorsXML', chartColors());
	        $ss->assign('chartLangFile', $GLOBALS['sugar_config']['tmp_dir'].'chart_strings.' . $GLOBALS['current_language'] .'.lang.xml');
	        
	        $str = $ss->fetch('modules/Home/Dashlets/ChartsDashlet/ChartsDashletScript.tpl');
	        return $str;
		}
    }
        
    /**
     * Displays the configuration form for the dashlet
     * 
     * @return string html to display form
     */
    function displayOptions() {
    }  

    /**
     * called to filter out $_REQUEST object when the user submits the configure dropdown
     * 
     * @param array $req $_REQUEST
     * @return array filtered options to save
     */  
    function saveOptions($req) {
    }
    
    function setConfigureIcon(){
    	global $image_path;
    	
        if($this->isConfigurable) 
            $additionalTitle = '<td nowrap width="1%"><div style="width: 100%;text-align:right"><a href="index.php?module=Reports&record=' . $this->report_id . '&action=ReportCriteriaResults&page=report" class="chartToolsLink">'
                               . get_image($image_path.'edit','title="' . translate('LBL_DASHLET_EDIT', 'Home') . '" alt="' . translate('LBL_DASHLET_EDIT', 'Home') . '"  border="0"  align="absmiddle"').'</a> ' 
                               . '';
        else 
            $additionalTitle = '<td nowrap width="1%"><div style="width: 100%;text-align:right">';    	
    	
    	return $additionalTitle;
    }    

    function setRefreshIcon(){
    	global $image_path;
    	
    	$additionalTitle = '';
        if($this->isRefreshable)
            $additionalTitle .= '<a href="#" onclick="SUGAR.mySugar.retrieveDashlet(\'' 
                                . $this->id . '\', \'chart\'); return false;"><img width="13" height="13" border="0" align="absmiddle" title="' . translate('LBL_DASHLET_REFRESH', 'Home') . '" alt="' . translate('LBL_DASHLET_REFRESH', 'Home') . '" src="' 
                                . $image_path . 'refresh.gif"/></a> ';	
        return $additionalTitle;
    }
    
}

?>
