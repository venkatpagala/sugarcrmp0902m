<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
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



require_once ('include/utils/file_utils.php');
class Configurator {
	var $config = '';
	var $override = '';
	var $allow_undefined = array ('stack_trace_errors', 'export_delimiter', 'use_real_names', 'developerMode');
	var $errors = array ('main' => '');
	var $logger = NULL;
	var $previous_sugar_override_config_array = array();
	function Configurator() {
		$this->loadConfig();
	}

	function loadConfig() {
		$this->logger = LoggerManager::getLogger();
		global $sugar_config;
		$this->config = $sugar_config;
	}

	function populateFromPost() {
		$sugarConfig = SugarConfig::getInstance();
		foreach ($_POST as $key => $value) {
			if (isset ($this->config[$key]) || in_array($key, $this->allow_undefined)) {
				if (strcmp("$value", 'true') == 0) {
					$value = true;
				}
				if (strcmp("$value", 'false') == 0) {
					$value = false;
				}
				$this->config[$key] = $value;
			} else if ($sugarConfig->get(str_replace('_', '.', $key))){
				setDeepArrayValue($this->config, $key, $value);
			}
		}
	}

	function handleOverride() {
		global $sugar_config, $sugar_version;
		$sc = SugarConfig::getInstance();
		$overrideArray = $this->readOverride();		
		$this->previous_sugar_override_config_array = $overrideArray;
		$diffArray = deepArrayDiff($this->config, $sugar_config);
		$overrideArray = sugarArrayMerge($overrideArray, $diffArray);
		$overideString = "<?php\n/***CONFIGURATOR***/\n";
		sugar_cache_put('sugar_config', $this->config);
		$GLOBALS['sugar_config'] = $this->config;
		foreach($overrideArray as $key => $val) {
			if (in_array($key, $this->allow_undefined) || isset ($sugar_config[$key])) {
				if (strcmp("$val", 'true') == 0) {
					$val = true;
					$this->config[$key] = $val;
				}
				if (strcmp("$val", 'false') == 0) {
					$val = false;
					$this->config[$key] = false;
				}
			}
			$overideString .= override_value_to_string_recursive2('sugar_config', $key, $val);
		}
		$overideString .= '/***CONFIGURATOR***/';
		$this->saveOverride($overideString);
		if(isset($this->config['logger']['level']) && $this->logger) $this->logger->setLevel($this->config['logger']['level']);
	}

	//bug #27947 , if previous $sugar_config['stack_trace_errors'] is true and now we disable it , we should clear all the cache.
	function clearCache(){
		global $sugar_config, $sugar_version;
		$currentConfigArray = $this->readOverride();
		foreach($currentConfigArray as $key => $val) {
			if (in_array($key, $this->allow_undefined) || isset ($sugar_config[$key])) {
				if (empty($val) ) {			
					if(!empty($this->previous_sugar_override_config_array['stack_trace_errors']) && $key == 'stack_trace_errors'){
						require_once('include/TemplateHandler/TemplateHandler.php');
						TemplateHandler::clearAll();
						return;
					}
				}
			}
		}		
	}
	
	function saveConfig() {
		$this->saveImages();
		$this->populateFromPost();
		$this->handleOverride();
		$this->clearCache();
	}

	function readOverride() {
		$sugar_config = array();
		if (file_exists('config_override.php')) {
			include('config_override.php');
		}
		return $sugar_config;
	}
	function saveOverride($override) {
		$fp = sugar_fopen('config_override.php', 'w');
		fwrite($fp, $override);
		fclose($fp);
	}

	function overrideClearDuplicates($array_name, $key) {
		if (!empty ($this->override)) {
			$pattern = '/.*CONFIGURATOR[^\$]*\$'.$array_name.'\[\''.$key.'\'\][\ ]*=[\ ]*[^;]*;\n/';
			$this->override = preg_replace($pattern, '', $this->override);
		} else {
			$this->override = "<?php\n\n?>";
		}

	}

	function replaceOverride($array_name, $key, $value) {
		$GLOBALS[$array_name][$key] = $value;
		$this->overrideClearDuplicates($array_name, $key);
		$new_entry = '/***CONFIGURATOR***/'.override_value_to_string($array_name, $key, $value);
		$this->override = str_replace('?>', "$new_entry\n?>", $this->override);
	}

	function restoreConfig() {
		$this->readOverride();
		$this->overrideClearDuplicates('sugar_config', '[a-zA-Z0-9\_]+');
		$this->saveOverride();
		ob_clean();
		header('Location: index.php?action=EditView&module=Configurator');
	}

	function saveImages() {
		if (!empty ($_POST['company_logo'])) {
			$this->saveCompanyLogo($_POST['company_logo']);
		}





	}
	function saveCompanyLogo($path) {
			mkdir_recursive('custom/include/images', true);
			copy($path, 'custom/include/images/company_logo.png');
			//copy to each themes dir
			foreach (unserialize($_SESSION['avail_themes']) as $dir => $name) {
				mkdir_recursive('custom/themes/'.$dir.'/images', true);
				copy('custom/include/images/company_logo.png', 'custom/themes/'.$dir.'/images/company_logo.png');
			}

	}
	/**
	 * @params : none
	 * @return : An array of logger configuration properties including log size, file extensions etc. See SugarLogger for more details.
	 * Parses the old logger settings from the log4php.properties files.
	 *
	 */

	function parseLoggerSettings(){
		if(!function_exists('setDeepArrayValue')){
			require('include/utils/array_utils.php');
		}
		if (file_exists('log4php.properties')) {
			$fileContent = file_get_contents('log4php.properties');
			$old_props = preg_split('/\n/', $fileContent);
			$new_props = array();
			$key_names=array();
			foreach($old_props as $value) {
				if(!empty($value) && !preg_match("/^\/\//", $value)) {
					$temp = split("=",$value);
					$property = isset( $temp[1])? $temp[1] : array();
					if(preg_match("/log4php.appender.A2.MaxFileSize=/",$value)){
						setDeepArrayValue($this->config, 'logger_file_maxSize', rtrim( $property));
					}
					elseif(preg_match("/log4php.appender.A2.File=/", $value)){
						$ext = preg_split("/\./",$property);
						if(preg_match( "/^\./", $property)){ //begins with .
							setDeepArrayValue($this->config, 'logger_file_ext', isset($ext[2]) ? '.' . rtrim( $ext[2]):'.log');
							setDeepArrayValue($this->config, 'logger_file_name', rtrim( ".".$ext[1]));
						}else{
							setDeepArrayValue($this->config, 'logger_file_ext', isset($ext[1]) ? '.' . rtrim( $ext[1]):'.log');
							setDeepArrayValue($this->config, 'logger_file_name', rtrim( $ext[0] ));
						}
					}elseif(preg_match("/log4php.appender.A2.layout.DateFormat=/",$value)){
						setDeepArrayValue($this->config, 'logger_file_dateFormat', trim(rtrim( $property), '""'));

					}elseif(preg_match("/log4php.rootLogger=/",$value)){
						$property = split(",",$property);
						setDeepArrayValue($this->config, 'logger_level', rtrim( $property[0]));
					}
				}
			}
			setDeepArrayValue($this->config, 'logger_file_maxLogs', 10);
			setDeepArrayValue($this->config, 'logger_file_suffix', "%m_%Y");
			$this->handleOverride();
			unlink('log4php.properties');
			$GLOBALS['sugar_config'] = $this->config; //load the rest of the sugar_config settings.
			require_once('include/SugarLogger/SugarLogger.php');
			//$logger = new SugarLogger(); //this will create the log file.

		}

		if (!isset($this->config['logger']) || empty($this->config['logger'])) {
			$this->config['logger'] = array (
			'file' => array(
				'ext' => '.log',
				'name' => 'sugarcrm',
				'dateFormat' => '%c',
				'maxSize' => '10MB',
				'maxLogs' => 10,
				'suffix' => '%m_%Y'),
			'level' => 'fatal');
		}
		$this->handleOverride();


	}









}
?>
