<?PHP
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

class SugarFeed extends Basic {
	var $new_schema = true;
	var $module_dir = 'SugarFeed';
	var $object_name = 'SugarFeed';
	var $table_name = 'sugarfeed';
	var $importable = false;
	
		var $id;
		var $name;
		var $date_entered;
		var $date_modified;
		var $modified_user_id;
		var $modified_by_name;
		var $created_by;
		var $created_by_name;
		var $description;
		var $deleted;
		var $created_by_link;
		var $modified_user_link;





		var $assigned_user_id;
		var $assigned_user_name;
		var $assigned_user_link;

	function SugarFeed(){	
		parent::Basic();
	}
	
    static function activateModuleFeed( $module, $updateDB = true ) {
        if ( $module != 'UserFeed' ) { 
            // UserFeed is a fake module, used for the user postings to the feed 
            // Don't try to load up any classes for it
            $fileList = SugarFeed::getModuleFeedFiles($module);
            
            foreach ( $fileList as $fileName ) {
                $feedClass = substr(basename($fileName),0,-4);
                
                require_once($fileName);
                $tmpClass = new $feedClass();
                $tmpClass->installHook($fileName,$feedClass);
            }
        }
        if ( $updateDB == true ) {
            require_once('modules/Administration/Administration.php');
            $admin = new Administration();
            $admin->saveSetting('sugarfeed','module_'.$admin->db->quote($module),'1');
        }
    }

    static function disableModuleFeed( $module, $updateDB = true ) {
        if ( $module != 'UserFeed' ) { 
            // UserFeed is a fake module, used for the user postings to the feed 
            // Don't try to load up any classes for it
            $fileList = SugarFeed::getModuleFeedFiles($module);
            
            foreach ( $fileList as $fileName ) {
                $feedClass = substr(basename($fileName),0,-4);
                
                require_once($fileName);
                $tmpClass = new $feedClass();
                $tmpClass->removeHook($fileName,$feedClass);            
            }
        }

        if ( $updateDB == true ) {
            require_once('modules/Administration/Administration.php');
            $admin = new Administration();
            $admin->saveSetting('sugarfeed','module_'.$admin->db->quote($module),'0');
        }
    }

    static function flushBackendCache( ) {
        // This function will flush the cache files used for the module list and the link type lists
        sugar_cache_clear('SugarFeedModules');
        if ( file_exists('cache/modules/SugarFeed/moduleCache.php') ) {
            unlink('cache/modules/SugarFeed/moduleCache.php');
        }

        sugar_cache_clear('SugarFeedLinkType');
        if ( file_exists('cache/modules/SugarFeed/linkTypeCache.php') ) {
            unlink('cache/modules/SugarFeed/linkTypeCache.php');
        }
    }


    static function getModuleFeedFiles( $module ) {
        $baseDirList = array('modules/'.$module.'/SugarFeeds/', 'custom/modules/'.$module.'/SugarFeeds/');
        
        // We store the files in a list sorted by the filename so you can override a default feed by
        // putting your replacement feed in the custom directory with the same filename
        $fileList = array();

        foreach ( $baseDirList as $baseDir ) {
            if ( ! file_exists($baseDir) ) {
                continue;
            }
            $d = dir($baseDir);
            while ( $file = $d->read() ) {
                if ( $file{0} == '.' ) { continue; }
                if ( substr($file,-4) == '.php' ) {
                    // We found one
                    $fileList[$file] = $baseDir.$file;
                }
            }
        }

        return($fileList);
    }

    static function getActiveFeedModules( ) {
        // Stored in a cache somewhere
        $feedModules = sugar_cache_retrieve('SugarFeedModules');
        if ( $feedModules != null ) {
            return($feedModules);
        }

        // Already stored in a file
        if ( file_exists('cache/modules/SugarFeed/moduleCache.php') ) {
            require_once('cache/modules/SugarFeed/moduleCache.php');
            sugar_cache_put('SugarFeedModules',$feedModules);
            return $feedModules;
        }

        // Gotta go looking for it
        require_once('modules/Administration/Administration.php');
        $admin = new Administration();
        $admin->retrieveSettings();

        $feedModules = array();
        if ( isset($admin->settings['sugarfeed_enabled']) && $admin->settings['sugarfeed_enabled'] == '1' ) {
            // Only enable modules if the feed system is enabled
            foreach ( $admin->settings as $key => $value ) {
                if ( strncmp($key,'sugarfeed_module_',17) === 0 ) {
                    // It's a module setting
                    if ( $value == '1' ) {
                        $moduleName = substr($key,17);
                        $feedModules[$moduleName] = $moduleName;
                    }
                }
            }
        }


        sugar_cache_put('SugarFeedModules',$feedModules);
        if ( ! file_exists('cache/modules/SugarFeed') ) { mkdir_recursive('cache/modules/SugarFeed'); }
        $fd = fopen('cache/modules/SugarFeed/moduleCache.php','w');
        fwrite($fd,'<'."?php\n\n".'$feedModules = '.var_export($feedModules,true).';');
        fclose($fd);

        return $feedModules;
    }

    static function getAllFeedModules( ) {
        // Uncached, only used from the admin panel and during installation currently
        $feedModules = array('UserFeed'=>'UserFeed');

        $baseDirList = array('modules/', 'custom/modules/');
        foreach ( $baseDirList as $baseDir ) {
            if ( ! file_exists($baseDir) ) {
                continue;
            }
            $d = dir($baseDir);
            while ( $module = $d->read() ) {
                if ( file_exists($baseDir.$module.'/SugarFeeds/') ) {
                    $dFeed = dir($baseDir.$module.'/SugarFeeds/');
                    while ( $file = $dFeed->read() ) {
                        if ( $file{0} == '.' ) { continue; }
                        if ( substr($file,-4) == '.php' ) {
                            // We found one
                            $feedModules[$module] = $module;
                        }
                    }
                }
            }
        }

        return($feedModules);
    }

	static function pushFeed($text, $module, $id,



		$record_assigned_user_id=false, $link_type=false, $link_url=false){
		$feed = new SugarFeed();
		if(empty($text) || !$feed->ACLAccess('save', true) )return;
		if(!empty($link_url)){
            $linkClass = SugarFeed::getLinkClass($link_type);
            if ( $linkClass !== FALSE ) {
                $linkClass->handleInput($feed,$link_type,$link_url);
            }
        }
		$text = '<b>{this.CREATED_BY}</b> ' . $text;
		$feed->name = substr($text, 0, 255);
		if(strlen($text) > 255){
			$feed->description = substr($text, 255, 510);
		}

		if ( $record_assigned_user_id === false ) {
			$feed->assigned_user_id = $GLOBALS['current_user']->id;
		} else {
			$feed->assigned_user_id = $record_assigned_user_id;
		}
		$feed->related_id = $id;
		$feed->related_module = $module;



		$feed->save();
	}

    static function getLinkTypes() {
        static $linkTypeList = null;

        // Fastest, already stored in the static variable
        if ( $linkTypeList != null ) {
            return $linkTypeList;
        }

        // Second fastest, stored in a cache somewhere
        $linkTypeList = sugar_cache_retrieve('SugarFeedLinkType');
        if ( $linkTypeList != null ) {
            return($linkTypeList);
        }

        // Third fastest, already stored in a file
        if ( file_exists('cache/modules/SugarFeed/linkTypeCache.php') ) {
            require_once('cache/modules/SugarFeed/linkTypeCache.php');
            sugar_cache_put('SugarFeedLinkType',$linkTypeList);
            return $linkTypeList;
        }

        // Slow, have to actually collect the data
        $baseDirs = array('custom/modules/SugarFeed/linkHandlers/','modules/SugarFeed/linkHandlers');

        $linkTypeList = array();

        foreach ( $baseDirs as $dirName ) {
            if ( !file_exists($dirName) ) { continue; }
            $d = dir($dirName);
            while ( $file = $d->read() ) {
                if ( $file{0} == '.' ) { continue; }
                if ( substr($file,-4) == '.php' ) {
                    // We found one
                    $typeName = substr($file,0,-4);
                    $linkTypeList[$typeName] = $typeName;
                }
            }
        }
     
        sugar_cache_put('SugarFeedLinkType',$linkTypeList);
        if ( ! file_exists('cache/modules/SugarFeed') ) { mkdir_recursive('cache/modules/SugarFeed'); }
        $fd = fopen('cache/modules/SugarFeed/linkTypeCache.php','w');
        fwrite($fd,'<'."?php\n\n".'$linkTypeList = '.var_export($linkTypeList,true).';');
        fclose($fd);
   
        return $linkTypeList;
    }
	
    static function getLinkClass( $linkName ) {
        $linkTypeList = SugarFeed::getLinkTypes();

        // Have to make sure the linkName is on the list, so they can't pass in linkName's like ../../config.php ... not that they could get anywhere if they did
        if ( ! isset($linkTypeList[$linkName]) ) {
            // No class by this name...
            return FALSE;
        }

        if ( file_exists('custom/modules/SugarFeed/linkHandlers/'.$linkName.'.php') ) {
            require_once('custom/modules/SugarFeed/linkHandlers/'.$linkName.'.php');
        } else {
            require_once('modules/SugarFeed/linkHandlers/'.$linkName.'.php');
        }

        $linkClassName = 'FeedLinkHandler'.$linkName;
        
        $linkClass = new $linkClassName();

        return($linkClass);
    }

	function get_list_view_data(){
		$data = parent::get_list_view_data();
		$delete = '';
		if (ACLController::moduleSupportsACL($data['RELATED_MODULE']) && !ACLController::checkAccess($data['RELATED_MODULE'], 'view', $data['CREATED_BY'] == $GLOBALS['current_user']->id) && !ACLController::checkAccess($data['RELATED_MODULE'], 'list', $data['CREATED_BY'] == $GLOBALS['current_user']->id)){
			$data['NAME'] = '';
			return $data;
		}
		if(is_admin($GLOBALS['current_user']) || $data['CREATED_BY'] == $GLOBALS['current_user']->id)
		$delete = get_image($GLOBALS['image_path'] . '/delete_inline', 'width="12" height="12" border="0" align="absmiddle" style="vertical-align: bottom;" onclick=\'SugarFeed.deleteFeed("'. $data['ID'] . '", "{this.id}")\'');
		$data['NAME'] .= $data['DESCRIPTION'];
		$data['NAME'] = html_entity_decode($data['NAME']);
		if(!empty($data['LINK_URL'])){
            $linkClass = SugarFeed::getLinkClass($data['LINK_TYPE']);
            if ( $linkClass !== FALSE ) {
                $data['NAME'] .= $linkClass->getDisplay($data);
            }
		}
        $data['NAME'] .= '<div class="byLineBox"><span class="byLineLeft">';



		$data['NAME'] .= '&nbsp;</span><div class="byLineRight"> '.  $this->getTimeLapse($data['DATE_ENTERED']) . ' &nbsp;' .$delete. '</div></div>';
		return  $data ;
	}
	
	function getTimeLapse($startDate)
	{
		$startDate = $GLOBALS['timedate']->to_db($startDate);
		$start = array();
   		preg_match('/(\d+)\-(\d+)\-(\d+) (\d+)\:(\d+)\:(\d+)/', $startDate, $start);
		$end = gmdate('Y-m-d H:i:s');
    	$start_time = gmmktime($start[4],$start[5], $start[6], $start[2], $start[3], $start[1] );
		$seconds = time()- $start_time;
		$minutes =   $seconds/60;
		$seconds = $seconds % 60;
		$hours = floor( $minutes / 60);
		$minutes = $minutes % 60;
		$days = floor( $hours / 24);
		$hours = $hours % 24;
		$weeks = floor( $days / 7);
		$days = $days % 7;
		$result = '';
		if($weeks == 1){
			$result = translate('LBL_TIME_LAST_WEEK','SugarFeed').' ';
			return $result;
		}else if($weeks > 1){
			$result .= $weeks . ' '.translate('LBL_TIME_WEEKS','SugarFeed').' ';
			if($days > 0) { 
                $result .= $days . ' '.translate('LBL_TIME_DAYS','SugarFeed').' ';
            }
		}else{
			if($days == 1){
				$result = translate('LBL_TIME_YESTERDAY','SugarFeed').' ';
				return $result;
			}else if($days > 1){
				$result .= $days . ' '. translate('LBL_TIME_DAYS','SugarFeed').' ';
			}else{
				if($hours == 1) {
                    $result .= $hours . ' '.translate('LBL_TIME_HOUR','SugarFeed').' ';
                } else {
                    $result .= $hours . ' '.translate('LBL_TIME_HOURS','SugarFeed').' ';
                }
				if($hours < 6){
					if($minutes == 1) {
                        $result .= $minutes . ' ' . translate('LBL_TIME_MINUTE','SugarFeed'). ' ';
                    } else {
                        $result .= $minutes . ' ' . translate('LBL_TIME_MINUTES','SugarFeed'). ' ';
                    }
				}
				if($hours == 0 && $minutes == 0) {
                    if($seconds == 1 ) { 
                        $result = $seconds . ' ' . translate('LBL_TIME_SECOND','SugarFeed');
                    } else { 
                        $result = $seconds . ' ' . translate('LBL_TIME_SECONDS','SugarFeed'); 
                    }
                }
			}
		}
		return $result . ' ' . translate('LBL_TIME_AGO','SugarFeed');

		
	
    } 

}
?>
