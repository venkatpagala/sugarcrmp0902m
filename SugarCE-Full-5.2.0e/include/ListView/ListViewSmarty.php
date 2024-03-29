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
 
require_once('include/ListView/ListViewDisplay.php');
require_once('include/Sugar_Smarty.php');
require_once('include/utils.php');
require_once('include/contextMenus/contextMenu.php');

class ListViewSmarty extends ListViewDisplay{
    
	var $data;
	var $ss; // the smarty object 
	var $displayColumns;
	var $searchColumns; // set by view.list.php
	var $tpl;
	var $moduleString;
	var $export = true;
    var $delete = true;
    var $select = true;
    var $mailMerge = true;
	var $multiSelect = true;
	var $overlib = true;
	var $quickViewLinks = true;
	var $lvd;
	var $mergeduplicates = true;
    var $contextMenus = true;
    var $showMassupdateFields = true;
    /**
     * Constructor, Smarty object immediately available after 
     *
     */
	function ListViewSmarty() {
		parent::ListViewDisplay();
		$this->ss = new Sugar_Smarty();
	}
	
    /**
     * Processes the request. Calls ListViewData process. Also assigns all lang strings, export links,
     * This is called from ListViewDisplay
     *    
     * @param file file Template file to use
     * @param data array from ListViewData
     * @param html_var string the corresponding html var in xtpl per row
     *
     */ 
	function process($file, $data, $htmlVar) {
		if(!$this->should_process)return;
		global $odd_bg, $even_bg, $hilite_bg, $click_bg, $image_path, $app_strings;
		parent::process($file, $data, $htmlVar);
		
		$this->tpl = $file;
		$this->data = $data;
		
        $totalWidth = 0;
        foreach($this->displayColumns as $name => $params) {
            $totalWidth += $params['width'];
        }
        $adjustment = $totalWidth / 100;

        $contextMenuObjectsTypes = array();
        foreach($this->displayColumns as $name => $params) {
            $this->displayColumns[$name]['width'] = round($this->displayColumns[$name]['width'] / $adjustment, 2);
            // figure out which contextMenu objectsTypes are required
            if(!empty($params['contextMenu']['objectType'])) 
                $contextMenuObjectsTypes[$params['contextMenu']['objectType']] = true;
        }
		$this->ss->assign('displayColumns', $this->displayColumns);
        
       
		$this->ss->assign('bgHilite', $hilite_bg);
		$this->ss->assign('colCount', count($this->displayColumns) + 1);
		$this->ss->assign('htmlVar', strtoupper($htmlVar));
		$this->ss->assign('moduleString', $this->moduleString);
        $this->ss->assign('editLinkString', $app_strings['LBL_EDIT_BUTTON']);
        $this->ss->assign('viewLinkString', $app_strings['LBL_VIEW_BUTTON']);
        $this->ss->assign('allLinkString',$app_strings['LBL_LINK_ALL']);
        $this->ss->assign('noneLinkString',$app_strings['LBL_LINK_NONE']);
        $this->ss->assign('recordsLinkString',$app_strings['LBL_LINK_RECORDS']);
        $this->ss->assign('selectLinkString',$app_strings['LBL_LINK_SELECT']);
		
        $this->ss->assign('imagePath', $image_path);

		if($this->overlib) $this->ss->assign('overlib', true);
		if($this->select)$this->ss->assign('selectLink', $this->buildSelectLink('select_link', $this->data['pageData']['offsets']['total'], $this->data['pageData']['offsets']['next']-$this->data['pageData']['offsets']['current']));
		
		//jchi 09/02/2008 17918
		if(ACLController::checkAccess($this->seed->module_dir,'delete',true)) {
			if($this->delete)$this->ss->assign('deleteLink', $this->buildDeleteLink());
		}
		if(ACLController::checkAccess($this->seed->module_dir,'export',true)) {
			if($this->export) $this->ss->assign('exportLink', $this->buildExportLink());
		}
		$this->ss->assign('quickViewLinks', $this->quickViewLinks);
		if($this->mailMerge) $this->ss->assign('mergeLink', $this->buildMergeLink()); // still check for mailmerge access
        if($this->mergeduplicates) $this->ss->assign('mergedupLink', $this->buildMergeDuplicatesLink());
		if (isset($_REQUEST['module']) && ($_REQUEST['module']=='Reports') &&
			(isset($_REQUEST['favorite']) && $_REQUEST['favorite'] == 1)) 
			$this->ss->assign('favoritesLink', $this->buildRemoveFavoritesLink());
		else if (isset($_REQUEST['module']) && ($_REQUEST['module']=='Reports')) 
			$this->ss->assign('favoritesLink', $this->buildFavoritesLink());
		
		if (isset($_REQUEST['module']) && (($_REQUEST['module']=='Contacts') || ($_REQUEST['module']=='Accounts') || ($_REQUEST['module']=='Leads'))) {
			$this->ss->assign('composeEmailLink', $this->buildComposeEmailLink($this->data['pageData']['offsets']['total']));
		} // if
		// handle save checks and stuff
		if($this->multiSelect) {
			$this->ss->assign('selectedObjectsSpan', $this->buildSelectedObjectsSpan(true, $this->data['pageData']['offsets']['total']));
			$this->ss->assign('multiSelectData', $this->getMultiSelectData());
		}
		
		$this->processArrows($data['pageData']['ordering']);
		$this->ss->assign('prerow', $this->multiSelect);
		$this->ss->assign('clearAll', $app_strings['LBL_CLEARALL']);
		$this->ss->assign('rowColor', array('oddListRow', 'evenListRow'));
		$this->ss->assign('bgColor', array($odd_bg, $even_bg));
        $this->ss->assign('contextMenus', $this->contextMenus);
        

        if($this->contextMenus && !empty($contextMenuObjectsTypes)) {
            $script = '';
            $cm = new contextMenu();
            foreach($contextMenuObjectsTypes as $type => $value) {
                $cm->loadFromFile($type);
                $script .= $cm->getScript();
                $cm->menuItems = array(); // clear menuItems out
            }
            $this->ss->assign('contextMenuScript', $script);
        }
	}
    
    /**
     * Assigns the sort arrows in the tpl
     *    
     * @param ordering array data that contains the ordering info
     *
     */
	function processArrows($ordering) {
		global $png_support;
        
        if(empty($GLOBALS['image_path'])) {
            global $theme;
            $GLOBALS['image_path'] = 'themes/'.$theme.'/images/';
        }
        
		if ($png_support == false) $ext = 'gif';
		else $ext = 'png';
		
		list($width,$height) = getimagesize($GLOBALS['image_path'] . 'arrow.' . (($png_support) ? 'png' : 'gif'));
		
		$this->ss->assign('arrowExt', $ext);
		$this->ss->assign('arrowWidth', $width);
		$this->ss->assign('arrowHeight', $height);
		$this->ss->assign('arrowAlt', translate('LBL_SORT'));
	}	



    /**
     * Displays the xtpl, either echo or returning the contents
     *    
     * @param end bool display the ending of the listview data (ie MassUpdate)
     *
     */
	function display($end = true) {
		
		if(!$this->should_process) return $GLOBALS['app_strings']['LBL_SEARCH_POPULATE_ONLY'];
        global $app_strings;
        
        $this->ss->assign('data', $this->data['data']);
		$this->data['pageData']['offsets']['lastOffsetOnPage'] = $this->data['pageData']['offsets']['current'] + count($this->data['data']);
		$this->ss->assign('pageData', $this->data['pageData']);
        
        $navStrings = array('next' => $app_strings['LNK_LIST_NEXT'],
                            'previous' => $app_strings['LNK_LIST_PREVIOUS'],
                            'end' => $app_strings['LNK_LIST_END'],
                            'start' => $app_strings['LNK_LIST_START'],
                            'of' => $app_strings['LBL_LIST_OF']);
        $this->ss->assign('navStrings', $navStrings);
		
		$str = parent::display();
		$strend = $this->displayEnd();
		
		return $str . $this->ss->fetch($this->tpl) . (($end) ? '<br><br>' . $strend : '');
	}
    function displayEnd() {
        $str = '';
        if($this->show_mass_update_form) {
            if($this->showMassupdateFields){
                $str .= $this->mass->getMassUpdateForm();
            }
            $str .= $this->mass->endMassUpdateForm();
        }
        
        return $str;
    }
}

?>
