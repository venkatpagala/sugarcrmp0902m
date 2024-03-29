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
 * *******************************************************************************/
/*********************************************************************************
 * $Id$
 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 *********************************************************************************/

class SugarChart {

	private $db;
	protected $ss;
	var $forceHideDataGroupLink = false;
	var $data_set = array();
	var $display_data = array();
	var $chart_properties = array();
	var $chart_yAxis = array();
	var $group_by = array();
	var $super_set = array();
	var $colors_list = array();
	var $base_url = array();
	var $url_params = array();
	
	var $currency_symbol;
	var $thousands_symbol;
	var $is_currency;
	
	public function __construct() {
		$this->db = &DBManagerFactory::getInstance();
		$this->ss = new Sugar_Smarty();
		
		$this->chart_yAxis['yMin'] = 0;		
		$this->chart_yAxis['yMax'] = 0;
		



		
		if ($GLOBALS['current_user']->getPreference('currency')){
		    require_once('modules/Currencies/Currency.php');
            $currency = new Currency();
            $currency->retrieve($GLOBALS['current_user']->getPreference('currency'));
            $this->div = $currency->conversion_rate;
            $this->currency_symbol = $currency->symbol;
        }
        else{
	        $this->currency_symbol = $GLOBALS['sugar_config']['default_currency_symbol'];
			$this->div = 1;
			$this->is_currency = false;
        }
	}
	
	function getData($query){
		$result = $this->db->query($query);
		
		$row = $this->db->fetchByAssoc($result);
		
		while ($row != null){
			$this->data_set[] = $row;
			$row = $this->db->fetchByAssoc($result);
		}
	}
	
	function constructBaseURL(){
		$numParams = 0;
		$url = 'index.php?';
		
		foreach ($this->base_url as $param => $value){
			if ($numParams == 0){
				$url .= $param . '=' . $value;
			}
			else{
				$url .= '&' .$param . '=' .$value;
			}
			$numParams++;
		}

		return $url;
	}
	
	function constructURL(){
		$url = $this->constructBaseURL();
		foreach ($this->url_params as $param => $value){
			if ($param == 'assigned_user_id') $param = 'assigned_user_id[]';
			if (is_array($value)){
				foreach($value as $multiple){
					$url .= '&' . $param . '=' . urlencode($multiple);
				}
			}
			else{
				$url .= '&' . $param . '=' . urlencode($value);
			}
		}
		return $url;
	}
	
	function setData($dataSet){
		$this->data_set = $dataSet;
	}
	
	function setProperties($title, $subtitle, $type, $legend='on', $labels='value', $print='on'){
		$this->chart_properties['title'] = $title;
		$this->chart_properties['subtitle'] = $subtitle;
		$this->chart_properties['type'] = $type;
		$this->chart_properties['legend'] = $legend;
		$this->chart_properties['labels'] = $labels;



	}
	
	function setDisplayProperty($property, $value){
		$this->chart_properties[$property] = $value;
	}
	
	function setColors($colors = array()){
		$this->colors_list = $colors;
	}
	
    /**
     * returns the header for the constructed xml file for sugarcharts
	 * 
     * @param 	nothing
     * @return	string $header XML header
     */
	function xmlHeader(){
		$header = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$header .= "<sugarcharts version=\"1.0\">\n";
		
		return $header;
	}

	/**
     * returns the footer for the constructed xml file for sugarcharts
	 * 
     * @param 	nothing
     * @return	string $footer XML footer
     */
	function xmlFooter(){
		$footer = "</sugarcharts>";
		
		return $footer;
	}

	/**
     * returns the properties tag for the constructed xml file for sugarcharts
	 * 
     * @param 	nothing
     * @return	string $properties XML properties tag
     */	
	function xmlProperties(){	
		// open the properties tag
		$properties = $this->tab("<properties>",1);
		
		// grab the property and value from the chart_properties variable
		foreach ($this->chart_properties as $key => $value){
			$properties .= $this->tab("<$key>$value</$key>",2);
		}
		
		if (!empty($this->colors_list)){
			// open the colors tag
			$properties .= $this->tab("<colors>",2);
			foreach ($this->colors_list as $color){
				$properties .= $this->tab("<color>$color</color>",3);
			}
			
			// close the colors tag
			$properties .= $this->tab("</colors>",2);
		}
		
		// close the properties tag
		$properties .= $this->tab("</properties>",1);
		
		return $properties;
	}
	
	/**
     * returns the y-axis values for the chart
	 * 
     * @param 	nothing
     * @return	string $yAxis XML yAxis tag
     */	
	function xmlYAxis(){
		$this->chart_yAxis['yStep'] = '100';
		$this->chart_yAxis['yLog'] = '1';
		$this->chart_yAxis['yMax'] = $this->is_currency ? $this->formatNumber($this->convertCurrency($this->chart_yAxis['yMax'])) : $this->chart_yAxis['yMax'];
		$max = $this->chart_yAxis['yMax'];
		$exp = ($max == 0) ? 1 : floor(log10($max));
		$baseval = $max / pow(10, $exp);
		
		// steps will be 10^n, 2*10^n, 5*10^n (where n >= 0)
		if ($baseval > 0 && $baseval <= 1){
			$step = 2 * pow(10, $exp-1);
		}
		else if ($baseval > 1 && $baseval <= 3){
			$step = 5 * pow(10, $exp-1);
		}		
		else if ($baseval > 3 && $baseval <= 6){
			$step = 10 * pow(10, $exp-1);
		}	
		else if ($baseval > 6 && $baseval <= 10){
			$step = 20 * pow(10, $exp-1);
		}	

		// edge cases for values less than 10
		if ($max == 0 || $step < 1){
			$step = 1;
		}
	
		$this->chart_yAxis['yStep'] = $step;
		
		// to compensate, the yMax should be at least one step above the max value



			$this->chart_yAxis['yMax'] += $this->chart_yAxis['yStep'];



		
		$yAxis = $this->tab("<yAxis>" ,1);
		
		foreach ($this->chart_yAxis as $key => $value){
			$yAxis .= $this->tab("<$key>$value</$key>", 2);
		}
		
		$yAxis .= $this->tab("</yAxis>" ,1);
		
		return $yAxis;
	}

	/**
     * returns the total amount value for the group by field
	 * 
     * @param 	group by field
     * @return	int $total total value
     */	
	function calculateTotal($group_by){
		$total = 0;	
		
		for($i =0; $i < count($this->data_set); $i++){
			if ($this->data_set[$i][$this->group_by[0]] == $group_by){
				$total += $this->data_set[$i]['total'];
			}
		}		
		return $total;
	}

	/**
     * returns text with tabs appended before it
	 * 
     * @param 	string $str input string
	 *			int $depth number of times to tab
     * @return	string with tabs appended before it
     */	
	function tab($str, $depth){
		return str_repeat("\t", $depth) . $str . "\n";	
	}
	
	/**
     * returns xml data format
	 * 
     * @param 	none
     * @return	string with xml data format
     */		
	function processData(){
		$data = array();

		$group_by = $this->group_by[0];
		if (isset($this->group_by[1])){
			$drill_down = $this->group_by[1];
		}
		
		$prev_group_by = '';

		for($i =0; $i < count($this->data_set); $i++){
			if ($this->data_set[$i][$group_by] != $prev_group_by){
				$prev_group_by = $this->data_set[$i][$group_by];
				$data[$this->data_set[$i][$group_by]] = array();
			}
            
            $data[$this->data_set[$i][$group_by]][] = $this->data_set[$i];
			
			// push new item onto legend items list
			if (isset($drill_down)){
				if (!in_array($this->data_set[$i][$drill_down], $this->super_set)){
					$this->super_set[] = $this->data_set[$i][$drill_down];
				}
			}
		}	

		return $data;
	}
	
	function processDataGroup($tablevel, $title, $value, $label, $link){
		$link = $this->forceHideDataGroupLink ? '' : $link;
		$data = $this->tab('<group>',$tablevel);
		$data .= $this->tab('<title>' . $title . '</title>',$tablevel+1);
		$data .= $this->tab('<value>' . $value . '</value>',$tablevel+1);
		$data .= $this->tab('<label>' . $label . '</label>',$tablevel+1);
		$data .= $this->tab('<link>' . $link . '</link>',$tablevel+1);
		$data .= $this->tab('</group>',$tablevel);
		return $data;
	}
	
	function calculateGroupByTotal($dataset){
		$total = 0;
		
		foreach ($dataset as $key => $value){
			$total += $value;
		}
		
		return $total;
	}
	
	function calculateSingleBarMax($dataset){
		$max = 0;		
		foreach ($dataset as $value){
			if ($value > $max){
				$max = $value;
			}
		}
		
		return $max;
	}

	/**
     * returns correct yAxis min/max
	 * 
     * @param 	value to check 
     * @return	yAxis min and max
     */			
	function checkYAxis($value){
		if ($value < $this->chart_yAxis['yMin']){
			$this->chart_yAxis['yMin'] = $value;
		}
		else if ($value > $this->chart_yAxis['yMax']){
			$this->chart_yAxis['yMax'] = $value;
		}
	}
	



























	
	function convertCurrency($to_convert){
		$amount = ($this->div == 1) ? $to_convert : round($to_convert * $this->div);
		
		return $amount;
	}
	
	function formatNumber($number, $decimals='2', $decimal_point='.', $thousands_sep=''){
		return number_format($number, $decimals, $decimal_point, $thousands_sep);
	}
	
	function getTotal(){
		$new_data = $this->processData();
		$total = 0;		
		foreach ($new_data as $groupByKey => $value){
			$total += $this->calculateTotal($groupByKey);
		}		
		
		return $total;
	}

	function xmlDataForGroupByChart(){
		$data = '';		
		foreach ($this->data_set as $key => $value){
			$amount = $this->is_currency ? $this->formatNumber($this->convertCurrency($this->calculateGroupByTotal($value))) : $this->calculateGroupByTotal($value);
            $label = $this->is_currency ? ($this->currency_symbol . $amount) : $amount;
            
			$data .= $this->tab('<group>',2);
			$data .= $this->tab('<title>' . $key . '</title>',3);
			$data .= $this->tab('<value>' . $amount . '</value>',3);
			$data .= $this->tab('<label>' . $label . '</label>',3);
			$data .= $this->tab('<link></link>',3);
			$data .= $this->tab('<subgroups>',3);
			
			foreach ($value as $k => $v){
                $amount = $this->is_currency ? $this->formatNumber($this->convertCurrency($v)) : $v;
                $label = $this->is_currency ? ($this->currency_symbol . $amount) : $amount;
                
				$data .= $this->tab('<group>',4);
				$data .= $this->tab('<title>' . $k . '</title>',5);
				$data .= $this->tab('<value>' . $amount . '</value>',5);
				$data .= $this->tab('<label>' . $label . '</label>',5);
				$data .= $this->tab('<link></link>',5);
				$data .= $this->tab('</group>',4);
				$this->checkYAxis($v);
			}
			$data .= $this->tab('</subgroups>',3);
			$data .= $this->tab('</group>',2);
		}
		
		return $data;		
	}
	
	function xmlDataForGaugeChart(){
		$data = '';		
		$gaugePosition = $this->data_set[0]['num'];
		$this->chart_yAxis['yMax'] = $this->chart_properties['gaugeTarget'];
		$this->chart_yAxis['yStep'] = 1;
		$data .= $this->processDataGroup(2, 'GaugePosition', $gaugePosition, $gaugePosition, '');
		$data .= $this->processGauge($gaugePosition, $this->chart_properties['gaugeTarget']);
		
		return $data;		
	}
	
	function xmlDataBarChart(){
		$data = '';
		$max = $this->calculateSingleBarMax($this->data_set);
		$this->checkYAxis($max);

		if (isset($this->group_by[0])){
			$group_by = $this->group_by[0];
			if (isset($this->group_by[1])){
				$drill_down = $this->group_by[1];
			}	
		}

		foreach ($this->data_set as $key => $value){
			if ($this->is_currency){
				$label = $this->currency_symbol;
				$label .= $this->formatNumber($this->convertCurrency($value));
				$label .= $this->thousands_symbol;
			}				
			else{
				$label = $value;
			}

			$data .= $this->tab('<group>', 2);
			$data .= $this->tab('<title>' . $key . '</title>', 3);
			$data .= $this->tab('<value>' . $value . '</value>', 3);
			$data .= $this->tab('<label>' . $label . '</label>', 3);
			if (isset($drill_down) && $drill_down){
				if ($this->group_by[0] == 'm'){
					$additional_param = '&date_closed_advanced=' . urlencode($key);					
				}
				else{
					$additional_param = "&" . $this->group_by[0] . "=" . urlencode($key);	
				}
				$url = $this->constructURL() . $additional_param;					
				
				$data .= $this->tab('<link>' . $url . '</link>', 3);
			}				
			$data .= $this->tab('<subgroups>', 3);
			$data .= $this->tab('</subgroups>', 3);
			$data .= $this->tab('</group>', 2);
		}
		return $data;	
	}
	
	function xmlDataGenericChart(){
		$data = '';
		$group_by = $this->group_by[0];
		if (isset($this->group_by[1])){
			$drill_down = $this->group_by[1];
		}		
		$new_data = $this->processData();

		foreach ($new_data as $groupByKey => $value){
			$total = $this->calculateTotal($groupByKey);
			$this->checkYAxis($total);
			
			if ($this->group_by[0] == 'm'){
				$additional_param = '&date_closed_advanced=' . urlencode($groupByKey);					
			}
			else{
				$paramValue = (isset($value[0]['key']) && $value[0]['key'] != '') ? $value[0]['key'] : $groupByKey;
				$paramValue = (isset($value[0][$this->group_by[0]."_dom_option"]) && $value[0][$this->group_by[0]."_dom_option"] != '') ? $value[0][$this->group_by[0]."_dom_option"] : $paramValue;
				$additional_param = "&" . $this->group_by[0] . "=" . urlencode($paramValue);	
			}
			
			$url = $this->constructURL() . $additional_param;
			
			$amount = $this->is_currency ? $this->formatNumber($this->convertCurrency($total)) : $total;
			$label = $this->is_currency ? ($this->currency_symbol . $amount . 'K') : $amount;

			$data .= $this->tab('<group>',2);
			$data .= $this->tab('<title>' . $groupByKey . '</title>',3);
			$data .= $this->tab('<value>' . $amount . '</value>',3);
			$data .= $this->tab('<label>' . $label . '</label>',3);
			$data .= $this->tab('<link>' . $url . '</link>',3);
			
			$data .= $this->tab('<subgroups>',3);						
			$processed = array();
				
			if (isset($drill_down) && $drill_down != ''){
				for($i =0; $i < count($new_data[$groupByKey]); $i++){
					if ($new_data[$groupByKey][$i][$group_by] == $groupByKey){
						if ($drill_down == 'user_name'){
							$drill_down_param = '&assigned_user_id[]=' . urlencode($new_data[$groupByKey][$i]['assigned_user_id']);
						}
						else if ($drill_down == 'm'){
							$drill_down_param = '&date_closed_advanced=' . urlencode($new_data[$groupByKey][$i][$drill_down]);
						}
						else{
							$paramValue = (isset($new_data[$groupByKey][$i][$drill_down."_dom_option"]) && $new_data[$groupByKey][$i][$drill_down."_dom_option"] != '') ? $new_data[$groupByKey][$i][$drill_down."_dom_option"] : $new_data[$groupByKey][$i][$drill_down];
							$drill_down_param = '&' . $drill_down . '=' . urlencode($paramValue);
						}
						
						if($this->is_currency) {
						  $sub_amount = $this->formatNumber($this->convertCurrency($new_data[$groupByKey][$i]['total']));
						  $sub_amount_formatted = $this->currency_symbol . $sub_amount . 'K';
						} else {
						  $sub_amount = $new_data[$groupByKey][$i]['total'];
						  $sub_amount_formatted = $sub_amount;
						}
						
						$data .= $this->processDataGroup(4, $new_data[$groupByKey][$i][$drill_down],
														    $sub_amount,
														    $sub_amount_formatted,
														    $url . $drill_down_param );
						array_push($processed, $new_data[$groupByKey][$i][$drill_down]);
					}
				}
				$not_processed = array_diff($this->super_set, $processed);
				foreach ($not_processed as $title){
					$data .= $this->processDataGroup(4, $title, 'NULL', '', $url);
				}			
			}

			$data .= $this->tab('</subgroups>',3);
			$data .= $this->tab('</group>',2);
		}
		return $data;
	}
    
    /**
     * returns a name for the XML File
     *
     * @param string $file_id - unique id to make part of the file name
     */
    function getXMLFileName(
         $file_id
         )
    {
        global $sugar_config, $current_user;

        $filename = $sugar_config['tmp_dir']. $current_user->id . '_' . $file_id . '.xml';

        if ( !is_dir(dirname($filename)) )
            create_cache_directory(str_ireplace("cache/","",$filename));

        return $filename;
    }
    
    public function processXmlData(){
    	$data = '';
    	
		if ($this->chart_properties['type'] == 'group by chart'){
			$data .= $this->xmlDataForGroupByChart();
		}





		else if ($this->chart_properties['type'] == 'bar chart' || $this->chart_properties['type'] == 'horizontal bar chart'){
			$data .= $this->xmlDataBarChart();			
		}
		else{
			$data .= $this->xmlDataGenericChart();
		}		

		return $data;
    }
     
	function xmlData(){
		$data = $this->tab('<data>',1);
		$data .= $this->processXmlData();	
		$data .= $this->tab('</data>',1);
		
		return $data;
	}
	
	/**
     * function to generate XML and return it
	 * 
     * @param 	none
     * @return	string $xmlContents with xml information
     */		
	function generateXML($xmlDataName = false){
		$xmlContents = $this->xmlHeader();		
		$xmlContents .= $this->xmlProperties();		
		$xmlContents .= $this->xmlData();
		$xmlContents .= $this->xmlYAxis();	
		$xmlContents .= $this->xmlFooter();
		
		return $xmlContents;
	}

	/**
     * function to save XML contents into a file
	 * 
     * @param 	string $xmlFilename location of the xml file
	 *			string $xmlContents contents of the xml file
     * @return	string boolean denoting whether save has failed
     */			
	function saveXMLFile($xmlFilename,$xmlContents) {
		global $app_strings;
		global $locale;
		



		$xmlContents = chr(255).chr(254).mb_convert_encoding($xmlContents, 'UTF-16LE', 'UTF-8'); 



		
		// open file
		if (!$fh = sugar_fopen($xmlFilename, 'w')) {
			$GLOBALS['log']->debug("Cannot open file ($xmlFilename)");
			return;
		}
		
		// write the contents to the file
		if (fwrite($fh,$xmlContents) === FALSE) {
			$GLOBALS['log']->debug("Cannot write to file ($xmlFilename)");
			return false;
		}
	
		$GLOBALS['log']->debug("Success, wrote ($xmlContents) to file ($xmlFilename)");
	
		fclose($fh);
		return true;
	}

	/**
     * generates xml file for Flash charts to use for internationalized instances
	 * 
     * @param 	string $xmlFile	location of the XML file to write to
     * @return	none
     */	
	function generateChartStrings($xmlFile){
		global $current_language, $app_list_strings;
		
		$chartStringsXML = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$chartStringsXML .= "<sugarlanguage version=\"1.0\">\n";
		$chartStringsXML .= $this->tab("<charts>",1);
		
		if (empty($app_list_strings)) {
		    //set module and application string arrays based upon selected language
			$app_list_strings = return_app_list_strings_language($current_language);
		}
		
		// retrieve the strings defined at include/language/en_us.lang.php
		foreach ($app_list_strings['chart_strings'] as $tag => $chart_string){
			$chartStringsXML .= $this->tab("<$tag>$chart_string</$tag>",2);
		}		
		
		$chartStringsXML .= $this->tab("</charts>",1);
		$chartStringsXML .= "</sugarlanguage>\n";
		
		$this->saveXMLFile($xmlFile, $chartStringsXML);
	}
	
	/**
     * wrapper function to return the html code containing the chart in a div
	 * 
     * @param 	string $name 	name of the div
	 *			string $xmlFile	location of the XML file
	 *			string $style	optional additional styles for the div
     * @return	string returns the html code through smarty
     */					
	function display($name, $xmlFile, $width='320', $height='480', $resize=false){
		require_once('include/Sugar_Smarty.php');
		
		// generate strings for chart if it does not exist
		global $current_language, $theme, $sugar_config,$app_strings;
		
		$chartStringsXML = $GLOBALS['sugar_config']['tmp_dir'].'chart_strings.' . $current_language .'.lang.xml';
		if (!file_exists($chartStringsXML)){
			$this->generateChartStrings($chartStringsXML);
		}
							
		$this->ss->assign("chartName", $name);
		$this->ss->assign("chartXMLFile", $xmlFile);
		$this->ss->assign("chartStringsXML", $chartStringsXML);
		
		// chart styles and color definitions
		$this->ss->assign("chartStyleCSS", chartStyle());
		$this->ss->assign("chartColorsXML", chartColors());
		
		$this->ss->assign("width", $width);
		$this->ss->assign("height", $height);
		
		$this->ss->assign("resize", $resize);
		$this->ss->assign("app_strings", $app_strings);				
		return $this->ss->fetch('include/SugarCharts/tpls/chart.tpl');
	}


  /**
         This function is used for localize all the characters in the Chart. And it can also sort all the dom_values by the sequence defined in the dom, but this may produce a lot of extra empty data in the xml file, when the chart is sorted by two key cols.
         If the data quantity is large, it maybe a little slow.
    * @param         array $data_set           The data get from database
                           string $keycolname1      We will sort by this key first
                           bool $translate1            Whether to trabslate the first column
                           string $keycolname1      We will sort by this key secondly, and  it can be null, then it will only sort by the first column.
                           bool $translate1            Whether to trabslate the second column
                           bool $ifsort2                 Whether to sort by the second column or just translate the second column.
    * @return        The sorted and translated data.
   */
    function sortData($data_set, $keycolname1=null, $translate1=false, $keycolname2=null, $translate2=false, $ifsort2=false) {
        //You can set whether the columns need to be translated or sorted. It the column needn't to be translated, the sorting must be done in SQL, this function will not do the sorting.
        global $app_list_strings;
        $sortby1[] = array();
        foreach ($data_set as $row) {
            $sortby1[]  = $row[$keycolname1];
        }
        $sortby1 = array_unique($sortby1);
        //The data is from the database, the sorting should be done in the sql. So I will not do the sort here.
        if($translate1) {
            $temp_sortby1 = array();
            foreach(array_keys($app_list_strings[$keycolname1.'_dom']) as $sortby1_value) {
                if(in_array($sortby1_value, $sortby1)) {
                    $temp_sortby1[] = $sortby1_value;
                }
            }
            $sortby1 = $temp_sortby1;
        }
        
        //if(isset($sortby1[0]) && $sortby1[0]=='') unset($sortby1[0]);//the beginning of lead_source_dom is blank.
        if(isset($sortby1[0]) && $sortby1[0]==array()) unset($sortby1[0]);//the beginning of month after search is blank.
        
        if($ifsort2==false) $sortby2=array(0);
        
        if($keycolname2!=null) {
            $sortby2 = array();
            foreach ($data_set as $row) {
                $sortby2[]  = $row[$keycolname2];
            }
            //The data is from the database, the sorting should be done in the sql. So I will not do the sort here.
            $sortby2 = array_unique($sortby2);
            if($translate2) {
                $temp_sortby2 = array();
                foreach(array_keys($app_list_strings[$keycolname2.'_dom']) as $sortby2_value) {
                    if(in_array($sortby2_value, $sortby2)) {
                        $temp_sortby2[] = $sortby2_value;
                    }
                }
                $sortby2 = $temp_sortby2;
            }
        }
        
        $data=array();

        foreach($sortby1 as $sort1) {
            foreach($sortby2 as $sort2) {
                if($ifsort2) $a=0;
                foreach($data_set as $key => $value){
                    if($value[$keycolname1] == $sort1 && (!$ifsort2 || $value[$keycolname2]== $sort2)) {
                        if($translate1) {
                            $value[$keycolname1.'_dom_option'] = $value[$keycolname1];
                            $value[$keycolname1] = $app_list_strings[$keycolname1.'_dom'][$value[$keycolname1]];
                        }
                        if($translate2) {
                            $value[$keycolname2.'_dom_option'] = $value[$keycolname2];
                            $value[$keycolname2] = $app_list_strings[$keycolname2.'_dom'][$value[$keycolname2]];
                        }
                        array_push($data, $value);
                        unset($data_set[$key]);
                        $a=1;
                        }
                }
                if($ifsort2 && $a==0) {//Add 0 for sorting by the second column, if the first row doesn't have a certain col, it will fill the column with 0.
                    $val=array();
                    $val['total'] = 0;
                    $val['count'] = 0;
                    if($translate1) {
                        $val[$keycolname1] = $app_list_strings[$keycolname1.'_dom'][$sort1];
                        $val[$keycolname1.'_dom_option'] = $sort1;
                    }
                    else {
                        $val[$keycolname1] = $sort1;                    
                    }
                    if($translate2) {
                        $val[$keycolname2] = $app_list_strings[$keycolname2.'_dom'][$sort2];
                        $val[$keycolname2.'_dom_option'] = $sort2;                    
                    }
                    elseif($keycolname2!=null) {
                        $val[$keycolname2] = $sort2;
                    }
                    array_push($data, $val);
                }
            }  
        }
        return $data;
    }

} // end class def
