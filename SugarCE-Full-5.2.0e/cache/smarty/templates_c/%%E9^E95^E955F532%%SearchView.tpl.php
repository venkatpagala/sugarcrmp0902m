<?php /* Smarty version 2.6.11, created on 2009-06-30 14:48:49
         compiled from include/SugarFields/Fields/Relate/SearchView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar', 'include/SugarFields/Fields/Relate/SearchView.tpl', 37, false),)), $this); ?>
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
<input type="text" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
"  class=<?php if (empty ( $this->_tpl_vars['displayParams']['class'] )): ?>"sqsEnabled"<?php else: ?> "<?php echo $this->_tpl_vars['displayParams']['class']; ?>
" <?php endif; ?> tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" size="<?php echo $this->_tpl_vars['displayParams']['size']; ?>
" value="<?php echo smarty_function_sugarvar(array('key' => 'value'), $this);?>
" title='<?php echo $this->_tpl_vars['vardef']['help']; ?>
' autocomplete="off" <?php echo $this->_tpl_vars['displayParams']['readOnly']; ?>
 <?php echo $this->_tpl_vars['displayParams']['field']; ?>
>
<input type="hidden" <?php if ($this->_tpl_vars['displayParams']['useIdSearch']): ?>name="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
"<?php endif; ?> id="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
" value="<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'value'), $this);?>
">
<?php if (empty ( $this->_tpl_vars['displayParams']['hideButtons'] )): ?>
<input type="button" name="btn_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("<?php echo smarty_function_sugarvar(array('key' => 'module'), $this);?>
", 600, 400, "", true, false, <?php echo $this->_tpl_vars['displayParams']['popupData']; ?>
, "single", true);'>
<?php if (empty ( $this->_tpl_vars['displayParams']['selectOnly'] )): ?>
<input type="button" name="btn_clr_<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
" tabindex="<?php echo $this->_tpl_vars['tabindex']; ?>
" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
.value = ''; this.form.<?php echo smarty_function_sugarvar(array('memberName' => 'vardef.id_name','key' => 'name'), $this);?>
.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
<?php endif;  endif;  if (! empty ( $this->_tpl_vars['displayParams']['allowNewValue'] )): ?>
<input type="hidden" name="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
_allow_new_value" id="<?php echo smarty_function_sugarvar(array('key' => 'name'), $this);?>
_allow_new_value" value="true">
<?php endif; ?>