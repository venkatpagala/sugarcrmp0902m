<?php /* Smarty version 2.6.11, created on 2009-06-23 14:39:05
         compiled from include/SearchForm/tpls/SearchFormGeneric.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_field', 'include/SearchForm/tpls/SearchFormGeneric.tpl', 66, false),)), $this); ?>
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

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 0px none; margin-bottom: 4px" class="tabForm">
<tr>
<?php $_from = $this->_tpl_vars['formData']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['colIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['colIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['colData']):
        $this->_foreach['colIteration']['iteration']++;
?>






	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td class="dataLabel" nowrap="nowrap" width='<?php echo $this->_tpl_vars['templateMeta']['widths']['label']; ?>
%' >
	<?php if (isset ( $this->_tpl_vars['colData']['field']['label'] )): ?>	
		{sugar_translate label='<?php echo $this->_tpl_vars['colData']['field']['label']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
    <?php elseif (isset ( $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']] )): ?>
		{sugar_translate label='<?php echo $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]['vname']; ?>
' module='<?php echo $this->_tpl_vars['module']; ?>
'}
	<?php endif; ?>
	</td>
	<td class="dataField" nowrap="nowrap" width='<?php echo $this->_tpl_vars['templateMeta']['widths']['field']; ?>
%'>
	<?php if ($this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']]): ?>
		<?php echo smarty_function_sugar_field(array('parentFieldArray' => 'fields','vardef' => $this->_tpl_vars['fields'][$this->_tpl_vars['colData']['field']['name']],'displayType' => 'searchView','displayParams' => $this->_tpl_vars['colData']['field']['displayParams'],'typeOverride' => $this->_tpl_vars['colData']['field']['type'],'formName' => $this->_tpl_vars['form_name']), $this);?>

   	<?php endif; ?>





   	</td>
<?php endforeach; endif; unset($_from); ?>
	</tr>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='{$IMG_PATH}help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={$IMG_PATH}close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
</table>