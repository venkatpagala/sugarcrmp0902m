{*
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
*}
<div class='wizard' width='100%' >
	<div align='left' id='export'>{$actions}</div>
	{*<div class='title'>{$title}</div>&nbsp;*}
	<div>{$question}</div>
	<div id="Buttons">

	<table align="center" cellspacing="7" width="90%"><tr>
		{counter start=0 name="buttonCounter" print=false assign="buttonCounter"}
		{foreach from=$buttons item='button' key='buttonName'}
			{if $buttonCounter > 5}
				</tr><tr>
				{counter start=0 name="buttonCounter" print=false assign="buttonCounter"}
			{/if}
			{ if !isset($button.size)}
				{assign var='buttonsize' value=''}
			{else}
				{assign var='buttonsize' value=$button.size}
			{/if}
			<td {if isset($button.help)}id="{$button.help}"{/if} width="16%" name=helpable" style="padding: 5px;"  valign="top" align="center">
			     <table onclick="{$button.action}" class='wizardButton' onmousedown="ModuleBuilder.buttonDown(this);return false;" onmouseout="ModuleBuilder.buttonOut(this);">
			         <tr>
						<td align="center"><a class='studiolink' href="javascript:void(0)" onclick="{$button.action}">
						{if isset($button.imageName)}
                            {if isset($button.altImageName)}
                                {sugar_image name=$button.imageTitle width=$button.size height=$button.size image=$button.imageName altimage=$button.altImageName}
                            {else}
                                {sugar_image name=$button.imageTitle width=$button.size height=$button.size image=$button.imageName}                            
                            {/if}
						{else}
							{sugar_image name=$button.imageTitle width=$button.size height=$button.size}
						{/if}</a></td>
					 </tr>
					 <tr>
						 <td align="center"><a class='studiolink' href="javascript:void(0)" onclick="{$button.action}">
				            {if (isset($button.imageName))}{$button.imageTitle}{else}{$buttonName}{/if}</a></td>
				     </tr>
				 </table>
			</td>
			{counter name="buttonCounter"}
		{/foreach}
	</tr></table>
<!-- Hidden div for hidden content so IE doesn't ignore it -->
<div style="float:left; left:-100px; display: hidden;">&nbsp;
	{literal}
	<style type='text/css'>
		.wizard { padding: 5px; text-align:center; font-weight:bold}
		.title{ color:#990033; font-weight:bold; padding: 0px 5px 0px 0px; font-size: 20pt}
		.backButton {position:absolute; left:10px; top:35px}
{/literal}
</style>
	<script>
	ModuleBuilder.helpRegisterByID('export', 'input');
	ModuleBuilder.helpRegisterByID('Buttons', 'td');
	ModuleBuilder.helpSetup('studioWizard','{$defaultHelp}');
	</script>
	</div>
{include file='modules/ModuleBuilder/tpls/assistantJavascript.tpl'}
