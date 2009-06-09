<?php /* Smarty version 2.6.11, created on 2009-06-08 21:27:47
         compiled from include/SugarFields/Fields/Parent/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Parent/EditView.tpl', 37, false),)), $this); ?>
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
<select name='parent_type' tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id='parent_type' title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' onchange='document.{$form_name}.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value="";document.{$form_name}.parent_id.value=""; changeQS(); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
);'>
{html_options options=<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
 selected=$fields.parent_type.value}
</select>
<?php if ($this->_tpl_vars['displayParams']['split']): ?>
<br>
<?php endif; ?>
{if empty(<?php echo smarty_function_sugarvar(array('key' => 'options','string' => true), $this);?>
[$fields.parent_type.value])}
	{assign var="keepParent" value = 0}
{else}
	{assign var="keepParent value = 1}
{/if}
<input type="text" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" class="sqsEnabled" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" {if $keepParent}value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
"{/if} autocomplete="off">
<input type="hidden" name="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
" id="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
"  {if $keepParent}value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
"{/if}>
<input type="button" name="btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, <?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
, "single", true);'>
<?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?>
<input type="button" name="btn_clr_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value = ''; this.form.<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
<?php endif; ?>
{literal}
<script type="text/javascript">
function changeQS() {
{/literal}
	new_module = document.{$form_name}.parent_type.value;
{literal}
	if(typeof(disabledModules[new_module]) != 'undefined') {
		sqs_objects['parent_name']['disable'] = true;
		document.getElementById('parent_name').readOnly = true;
	}
	else {
		sqs_objects['parent_name']['disable'] = false;
		document.getElementById('parent_name').readOnly = false;
	}	
	sqs_objects['parent_name']['modules'] = new Array(new_module);
    enableQS(false);
}
{/literal}
</script>
{literal}
<?php echo $this->_tpl_vars['displayParams']['disabled_parent_types']; ?>

{/literal}