{*

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



*}
{literal}
<style>
.menu{
	z-index:100;
}

.subDmenu{
	z-index:100;
}
</style>
{/literal}

<!-- begin includes for overlib -->
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000"></div>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_grp_overlib.js'}"></script>
<!-- end includes for overlib -->

<script type="text/javascript">
var numPages = {$numPages};
var theme = '{$theme}';
var loadedPages = new Array();
var activePage = {$activePage};
loadedPages[0] = '{$loadedPage}';
current_user_id = '{$current_user}';
jsChartsArray = new Array();
var moduleName = 'Home';
</script>

<script type="text/javascript" src="{sugar_getjspath file='include/javascript/dashlets.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/yui/container.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/yui/PanelEffect.js'}"></script>
<script type="text/javascript" src='{sugar_getjspath file='include/javascript/sugar_grp_ytree.js'}'></script>
<script type="text/javascript" src='{sugar_getjspath file='include/JSON.js'}'></script>
<script type='text/javascript' src='{sugar_getjspath file='include/MySugar/javascript/MySugar.js'}'></script>
<link rel='stylesheet' href='{sugar_getjspath file='include/ytree/TreeView/css/folders/tree.css'}'>
<link rel='stylesheet' href='{sugar_getjspath file='include/javascript/yui/assets/container.css'}'>

<script type="text/javascript" src="{sugar_getjspath file='include/javascript/swfobject.js'}"></script>

























<div id="pageContainer">
	<div id="pageNum_{$activePage}_div">
<table width="100%" cellspacing="0" cellpadding="0" border="0" class="subpanelTabForm" style="border-top: 0px none; margin-bottom: 4px;">
 	<tr>
 		{if $numCols > 2}
	 	<td>
		&nbsp;
		</td>
	
		<td rowspan="3">
				<img src='{sugar_getwebpath file='include/images/blank.gif'}' width='15' height='1' border='0'>
		</td>
		{/if}
		{if $numCols > 1}
		<td>
		&nbsp;
		</td>
		<td rowspan="3">
				<img src='{sugar_getwebpath file='include/images/blank.gif'}' width='15' height='1' border='0'>
		</td>
		{/if}	
		<td align='right'>



			<input id="add_dashlets" class="button" type="button" value="{$lblAddDashlets}" onclick="return SUGAR.mySugar.showDashletsTree();"/>



	 		<a href='#' onclick="window.open('index.php?module=Administration&action=SupportPortal&view=documentation&version={$sugarVersion}&edition={$sugarFlavor}&lang={$currentLanguage}&help_module=Home&help_action=index&key={$serverUniqueKey}','helpwin','width=600,height=600,status=0,resizable=1,scrollbars=1,toolbar=0,location=1'); return false" class='utilsLink'>
				<img src='{$imagePath}help.gif' width='13' height='13' alt={$lblLnkHelp}' border='0' align='absmiddle'>
				{$lblLnkHelp}
			</a>
		</td>
	</tr>
	<tr>
		{counter assign=hiddenCounter start=0 print=false}
		{foreach from=$columns key=colNum item=data}
		<td valign='top' width={$data.width}>
			<ul class='noBullet' id='col_{$activePage}_{$colNum}'>
				<li id='page_{$activePage}_hidden{$hiddenCounter}b' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
		        {foreach from=$data.dashlets key=id item=dashlet}		
				<li class='noBullet' id='dashlet_{$id}'>
					<div id='dashlet_entire_{$id}'>
						{$dashlet.script}
						{$dashlet.display}
					</div>
				</li>
				{/foreach}
				<li id='page_{$activePage}_hidden{$hiddenCounter}' style='height: 5px' class='noBullet'>&nbsp;&nbsp;&nbsp;</li>
			</ul>
		</td>
		{counter}
		{/foreach}
	</tr>
</table>
	</div>
	
	{foreach from=$divPages key=divPageIndex item=divPageNum}
	<div id="pageNum_{$divPageNum}_div" style="display:none;">
	</div>
	{/foreach}

	<div id="addPageDialog" style="display:none;">
		<div class="hd">Add Page</div>
		<div class="bd">
			<form method="POST" action="index.php?module=Home&action=newTab&to_pdf=1">
				<label for="pageName">Page Name: </label><input type="textbox" name="pageName" /><br /><br />
				<label for="numColumns">Number of Columns:</label>
				<table align="center">
					<tr>
						<td><input type="radio" name="numColumns" value="1" />1</td>
						<td><input type="radio" name="numColumns" value="2" checked />2</td>
						<td><input type="radio" name="numColumns" value="3" />3</td>
					</tr>
				</table>
			</form>
		</div>
	</div>				

	<div id="changeLayoutDialog" style="display:none;">
		<div class="hd">Change Layout</div>
		<div class="bd">
			<form method="POST" action="index.php?module=Home&action=changeLayout&to_pdf=1">
				<label for="numColumns">Number of Columns:</label>
				<table align="center">
					<tr>
						<td><input type="radio" name="numColumns" value="1" />1</td>
						<td><input type="radio" name="numColumns" value="2" checked />2</td>
						<td><input type="radio" name="numColumns" value="3" />3</td>
					</tr>
				</table>
				<input type="hidden" name="changeLayoutParams" value="1" />
			</form>
		</div>
	</div>
	
	<div id="dashletsDialog">
		<div class="hd"></div>	
		<div class="bd">
			<form></form>
		</div>
	</div>
				
	
</div>

{if !$lock_homepage}
{literal}
<script type="text/javascript">
SUGAR.mySugar.maxCount = 	{/literal}{$maxCount}{literal};
SUGAR.mySugar.homepage_dd = new Array();
SUGAR.mySugar.init = function () {
	j = 0;
	{/literal}
	dashletIds = {$dashletIds};
	{literal}
	for(i in dashletIds) {
		SUGAR.mySugar.homepage_dd[j] = new ygDDList('dashlet_' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].setHandleElId('dashlet_header_' + dashletIds[i]);
		SUGAR.mySugar.homepage_dd[j].onMouseDown = SUGAR.mySugar.onDrag;  
		SUGAR.mySugar.homepage_dd[j].afterEndDrag = SUGAR.mySugar.onDrop;
		j++;
	}
	for(var wp = 0; wp <= {/literal}{$hiddenCounter}{literal}; wp++) {
	    SUGAR.mySugar.homepage_dd[j++] = new ygDDListBoundary('page_'+activePage+'_hidden' + wp);
	}

	YAHOO.util.DDM.mode = 1;

	SUGAR.mySugar.renderAddPageDialog();
	SUGAR.mySugar.renderDashletsTree();
	SUGAR.mySugar.renderChangeLayoutDialog();
}

YAHOO.util.Event.addListener(window, 'load', SUGAR.mySugar.init);  

</script>
{/literal}
{/if}
