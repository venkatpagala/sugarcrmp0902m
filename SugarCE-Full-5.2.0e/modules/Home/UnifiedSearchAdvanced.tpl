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


<form name='UnifiedSearchAdvanced' action='index.php' method='get'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='query_string' value=''>
<input type='hidden' name='advanced' value='true'>
<input type='hidden' name='action' value='UnifiedSearch'>
<input type='hidden' name='search_form' value='false'>
	<table width='300' class='tabForm' border='0' cellpadding='0' cellspacing='1'>
	<tr>
		<th align='left' colspan='3'>{sugar_translate label='LBL_MODULES_TO_SEARCH' module='Home'}</th>
		<th align='right'>
			<img onclick='SUGAR.unifiedSearchAdvanced.get_content()' src='{$IMAGE_PATH}close.gif' border='0'>
		</th>
	</tr>
	{foreach from=$MODULES_TO_SEARCH name=m key=module item=info}
	{if $smarty.foreach.m.first}
		<tr style='padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px'>
	{/if}
		<td width='1' style='border: none; padding: 0px 10px 0px 0px; margin: 0px 0px 0px 0px'>
			<input class='checkbox' id='cb_{$module}' type='checkbox' name='search_mod_{$module}' value='true' {if $info.checked}checked{/if}>
		</td>
		<td style='border: none; padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px; cursor: hand; cursor: pointer' onclick="document.getElementById('cb_{$module}').checked = !document.getElementById('cb_{$module}').checked;">
			{$info.translated}
		</td>
	{if $smarty.foreach.m.index % 2 == 1}
		</tr><tr style='padding: 0px 0px 0px 0px; margin: 0px 0px 0px 0px'>
	{/if}
	{/foreach}
	</tr>
	</table>
</form>
