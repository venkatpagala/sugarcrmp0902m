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
 


require_once('include/ListView/ListViewDisplay.php');
	
class ListViewXTPL extends ListViewDisplay{
	var $row_block = 'main.row';
	var $main_block = 'main';
	var $pro_block = 'main.row.pro';
	var $os_block  = 'main.row.os';
	var $nav_block = 'main.list_nav_row';
	var $pro_nav_block = 'main.pro_nav';
	var $data;
	var $xtpl;

	function ListViewXTPL() {
		parent::ListViewDisplay();
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
	function process($file, $data, $html_var) {
		global $odd_bg, $even_bg, $hilite_bg, $click_bg;
		
		parent::process($file, $data, $html_var);
		$this->data = $data;
		$html_var = strtoupper($html_var);
		$this->xtpl = new XTemplate($file);
		$this->xtpl->assign('MOD', $GLOBALS['mod_strings']);
		$this->xtpl->assign('APP', $GLOBALS['app_strings']);
		$this->xtpl->assign('BG_HILITE', $hilite_bg);
		$this->xtpl->assign('ORDER_BY', $data['pageData']['urls']['orderBy']);
		
		$this->processPagination();
		$this->xtpl->parse($this->nav_block);
		
		$this->processArrows($data['pageData']['ordering']);
		
		$oddRow = false;
		if($this->xtpl->exists($this->pro_nav_block)) $this->xtpl->parse($this->pro_nav_block);
		$this->xtpl->assign('CHECKALL', "<input type='checkbox' class='checkbox' name='massall' value='' onclick='sListView.check_all(document.MassUpdate, \"mass[]\", this.checked);' />");
		foreach($data['data'] as $id=>$row) {
			$this->xtpl->assign($html_var, $row);
			if(!empty($data['pageData']['tag'][$id])) {
				$this->xtpl->assign('TAG', $data['pageData']['tag'][$id]);
			}
						
			$this->xtpl->assign('ROW_COLOR', ($oddRow) ? 'oddListRow' : 'evenListRow');
			$this->xtpl->assign('BG_COLOR', ($oddRow) ? $odd_bg : $even_bg);
			$oddRow = !$oddRow;
			
			if($this->xtpl->exists($this->pro_block)) $this->xtpl->parse($this->pro_block);
//			if($this->xtpl->exists($this->os_block)) $this->xtpl->parse($this->os_block);


			$prerow =  "&nbsp;<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='". $id. "'>";
			$this->xtpl->assign('PREROW', $prerow);
		
			$this->xtpl->parse($this->row_block);
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
		if ($png_support == false) $ext = "gif";
		else $ext = "png";
		
		$this->xtpl->assign('arrow_start', "&nbsp;<img border='0' src='".$GLOBALS['image_path']."arrow");
		list($width,$height) = getimagesize($GLOBALS['image_path'].'arrow.'.$ext);
		$this->xtpl->assign('arrow_end', ".$ext' width='$width' height='$height' align='absmiddle' alt=".translate('LBL_SORT').">");
		$arrow_order = (strcmp($ordering['sortOrder'], 'ASC'))?'_up': '_down';
		$this->xtpl->assign($ordering['orderBy'].'_arrow', $arrow_order);
	}	
	
    /**
     * Assigns the pagination links at the top and bottom of the listview
     *    
     */
	function processPagination() {
		global $app_strings, $image_path;
//_pp($this->data['pageData']);
		if(empty($this->data['pageData']['urls']['prevPage'])) {
			$startLink = get_image($image_path."start_off", "alt='".$app_strings['LNK_LIST_START']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_START'];
			$prevLink = get_image($image_path."previous_off", "alt='".$app_strings['LNK_LIST_PREVIOUS']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_PREVIOUS'];
		}
		else {
//			if($this->multi_select_popup) {// nav links for multiselect popup, submit form to save checks. 
//				$start_link = "<a href=\"#\" onclick=\"javascript:save_checks(0, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".get_image($image_path."start","alt='".$app_strings['LNK_LIST_START']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_START']."</a>";
//				$previous_link = "<a href=\"#\" onclick=\"javascript:save_checks($previous_offset, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".get_image($image_path."previous","alt='".$app_strings['LNK_LIST_PREVIOUS']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_PREVIOUS']."</a>";
//			}
//			elseif($this->shouldProcess) {
//				// TODO: make popups / listview check saving the same 
//				$start_link = "<a href=\"$start_URL\" onclick=\"javascript:return sListView.save_checks(0, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".get_image($image_path."start","alt='".$app_strings['LNK_LIST_START']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_START']."</a>";
//				$previous_link = "<a href=\"$previous_URL\" onclick=\"javascript:return sListView.save_checks($previous_offset, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".get_image($image_path."previous","alt='".$app_strings['LNK_LIST_PREVIOUS']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_PREVIOUS']."</a>";
//			}
//			else {
				$startLink = "<a href=\"{$this->data['pageData']['urls']['startPage']}\" class=\"listViewPaginationLinkS1\">".get_image($image_path."start","alt='".$app_strings['LNK_LIST_START']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_START']."</a>";
				$prevLink = "<a href=\"{$this->data['pageData']['urls']['prevPage']}\" class=\"listViewPaginationLinkS1\">".get_image($image_path."previous","alt='".$app_strings['LNK_LIST_PREVIOUS']."'  border='0' align='absmiddle'")."&nbsp;".$app_strings['LNK_LIST_PREVIOUS']."</a>";
//			}
		}

		if(!$this->data['pageData']['offsets']['totalCounted']) {
			$endLink = $app_strings['LNK_LIST_END']."&nbsp;".get_image($image_path."end_off","alt='".$app_strings['LNK_LIST_END']."'  border='0' align='absmiddle'");
		}
		else {
//			if($this->multi_select_popup) { // nav links for multiselect popup, submit form to save checks.
//				$end_link = "<a href=\"#\" onclick=\"javascript:save_checks($last_offset, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".$app_strings['LNK_LIST_END']."&nbsp;".get_image($image_path."end","alt='".$app_strings['LNK_LIST_END']."'  border='0' align='absmiddle'")."</a>";
//				$next_link = "<a href=\"#\" onclick=\"javascript:save_checks($next_offset, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".$app_strings['LNK_LIST_NEXT']."&nbsp;".get_image($image_path."next","alt='".$app_strings['LNK_LIST_NEXT']."'  border='0' align='absmiddle'")."</a>";
//			}
//			elseif($this->shouldProcess) {
//				$end_link = "<a href=\"$end_URL\" onclick=\"javascript:return sListView.save_checks($last_offset, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".$app_strings['LNK_LIST_END']."&nbsp;".get_image($image_path."end","alt='".$app_strings['LNK_LIST_END']."'  border='0' align='absmiddle'")."</a>";
//				$next_link = "<a href=\"$next_URL\" onclick=\"javascript:return sListView.save_checks($next_offset, '{$moduleString}')\" class=\"listViewPaginationLinkS1\">".$app_strings['LNK_LIST_NEXT']."&nbsp;".get_image($image_path."next","alt='".$app_strings['LNK_LIST_NEXT']."'  border='0' align='absmiddle'")."</a>";
//			}
//			else {
				$endLink = "<a href=\"{$this->data['pageData']['urls']['endPage']}\" class=\"listViewPaginationLinkS1\">".$app_strings['LNK_LIST_END']."&nbsp;".get_image($image_path."end","alt='".$app_strings['LNK_LIST_END']."'  border='0' align='absmiddle'")."</a>";
				
//			}
		}
		if(empty($this->data['pageData']['urls']['nextPage'])){
			$nextLink = $app_strings['LNK_LIST_NEXT']."&nbsp;".get_image($image_path."next_off","alt='".$app_strings['LNK_LIST_NEXT']."'  border='0' align='absmiddle'");
		}else{
				$nextLink = "<a href=\"{$this->data['pageData']['urls']['nextPage']}\" class=\"listViewPaginationLinkS1\">".$app_strings['LNK_LIST_NEXT']."&nbsp;".get_image($image_path."next","alt='".$app_strings['LNK_LIST_NEXT']."'  border='0' align='absmiddle'")."</a>";
		}
		
		if($this->export) $export_link = $this->buildExportLink();
		else $export_link = '';
		if($this->mailMerge)$merge_link = $this->buildMergeLink();
		else $merge_link = '';
		if($this->multiSelect) $selected_objects_span = $this->buildSelectedObjectsSpan();
		else $selected_objects_span = '';

		$htmlText = "<tr>\n"
				. "<td COLSPAN=\"20\" align=\"right\">\n"
				. "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\"><tr><td align=\"left\"  class=\"listViewPaginationTdS1\">$export_link$merge_link$selected_objects_span</td>\n"
				. "<td nowrap align=\"right\" class=\"listViewPaginationTdS1\" id='listViewPaginationButtons'>".$startLink."&nbsp;&nbsp;".$prevLink."&nbsp;&nbsp;<span class='pageNumbers'>(".($this->data['pageData']['offsets']['current'] + 1) ." - ".($this->data['pageData']['offsets']['current'] + $this->rowCount)
				. " ".$app_strings['LBL_LIST_OF']." ".$this->data['pageData']['offsets']['total'];
		if(!$this->data['pageData']['offsets']['totalCounted']){
			$htmlText .= '+';	
		}
		$htmlText .=")</span>&nbsp;&nbsp;".$nextLink."&nbsp;&nbsp;";
		if($this->data['pageData']['offsets']['totalCounted']){
			$htmlText .= $endLink;
		}
		$htmlText .="</td></tr></table>\n</td>\n</tr>\n";

		$this->xtpl->assign("PAGINATION", $htmlText);
	}
	
    /**
     * Displays the xtpl, either echo or returning the contents
     *    
     * @param echo bool echo or return contents
     *
     */
	function display($echo = true) {
		$str = parent::display();
		$strend = parent::displayEnd();
		$this->xtpl->parse($this->main_block);
		if($echo) {
			echo $str;
			$this->xtpl->out($this->main_block);
			echo $strend;
		}
		else {
			return $str . $this->xtpl->text() . $strend;
		}
	}
}


?>
