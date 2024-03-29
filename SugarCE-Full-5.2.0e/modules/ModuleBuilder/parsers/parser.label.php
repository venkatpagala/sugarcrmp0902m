<?php
if (! defined ( 'sugarEntry' ) || ! sugarEntry)
    die ( 'Not A Valid Entry Point' ) ;
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

require_once ('modules/ModuleBuilder/parsers/ModuleBuilderParser.php') ;

class ParserLabel extends ModuleBuilderParser
{

    function ParserLabel ($moduleName, $packageName = '' )
    {
        $this->moduleName = $moduleName;
        if (!empty($packageName))
            $this->packageName = $packageName ;
    }
    
    /**
     * Takes in the request params from a save request and processes
     * them for the save.
     * @param REQUEST $params       Labels as "label_".System label => Display label pairs
     * @param string $language      Language key, for example 'en_us'
     */
    function handleSave ($params , $language)
    {
        $labels = array ( ) ;
        foreach ( $params as $key => $value )
        {
            if (preg_match ( '/^label_/', $key ) && strcmp ( $value, 'no_change' ) != 0)
            {
                $labels [ strtoupper(substr ( $key, 6 )) ] = $value ;
            }
        }

        if (!empty($this->packageName)) //we are in Module builder
        {
            return self::addLabels ( $language, $labels, $this->moduleName, "custom/modulebuilder/packages/{$this->packageName}/modules/{$this->moduleName}/language" ) ;
        } else
        {
            return self::addLabels ( $language, $labels, $this->moduleName ) ;
        }
    }

    /*
     * Add a set of labels to the language pack for a module, deployed or undeployed
     * @param string $language      Language key, for example 'en_us'
     * @param array $labels         The labels to add in the form of an array of System label => Display label pairs
     * @param string $moduleName    Name of the module to which to add these labels
     * @param string $packageName   If module is undeployed, name of the package to which it belongs
     */
    static function addLabels ($currLanguage , $labels , $moduleName , $basepath = null)
    {

        $GLOBALS [ 'log' ]->debug ( "ParserLabel->addLabels($currLanguage, \$labels, $moduleName, $basepath );" ) ;
        $GLOBALS [ 'log' ]->debug ( "\$labels:" . print_r ( $labels, true ) ) ;
        $languages = unserialize($_SESSION['avail_languages']);
        foreach ($languages as $language => $langlabel) {
        	$currentLabels = self::getCustomLabels($language, $moduleName, $basepath);
	        if ($currentLabels === false)
	    		return false; //Unable to create a custom folder.
    		$mod_strings = $currentLabels['labels'];
        	$changed = false ;

	        foreach ( $labels as $key => $value )
	        {
	            if (!isset( $mod_strings [ $key ] ) || (strcmp ( $value, $mod_strings [ $key ] ) != 0 && $language == $currLanguage))
	            {
	                $mod_strings [$key] = html_entity_decode_utf8($value, ENT_QUOTES ); // must match encoding used in view.labels.php
	                $changed = true ;
	            }
	        }

	        if ($changed)
	        {
	            $GLOBALS [ 'log' ]->debug ( "ParserLabel->addLabels: writing new mod_strings to {$currentLabels['file']}" ) ;
	            $GLOBALS [ 'log' ]->debug ( "ParserLabel->addLabels: mod_strings=".print_r($mod_strings,true) ) ;            
	            if (! write_array_to_file ( "mod_strings", $mod_strings, $currentLabels["file"] ))
	            {
	                $GLOBALS [ 'log' ]->fatal ( "Could not write {$currentLabels['file']}" ) ;
	            } else
	            {
	                // if we have a cache to worry about, then clear it now
	                if ($currentLabels['deployed'])
	                {
	                    $GLOBALS [ 'log' ]->debug ( "PaserLabel->addLabels: clearing language cache" ) ;
	                    $cache_key = "module_language." . $language . $moduleName ;
	                    sugar_cache_clear ( $cache_key ) ;
	                    LanguageManager::clearLanguageCache ( $moduleName, $language ) ;
	                }
	            }
	        }
        }

        return true ;
    }
    
    static function getCustomLabels($language, $module, $basepath)
    {
   	 	$deployedModule = false ;
        if (is_null ( $basepath ))
        {
            $deployedModule = true ;
            $basepath = "custom/modules/$module/language" ;
            if (! is_dir ( $basepath ))
            {
                require_once ('modules/Administration/Common.php') ;
                create_module_lang_dir ( $module ) ;
            }
        }

        $filename = "$basepath/$language.lang.php" ;
        $dir_exists = is_dir ( $basepath ) ;

        $mod_strings = array ( ) ;

        if ($dir_exists)
        {
            if (file_exists ( $filename ))
            {
                // obtain $mod_strings
                include ($filename) ;
            }
        } else
        {
            return false;
        }
    	
        return (array("file" => $filename, "deployed" => $deployedModule, "labels" => $mod_strings));
    }
}

?>
