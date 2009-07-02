<?php /* Smarty version 2.6.11, created on 2009-07-02 11:02:49
         compiled from modules/ModuleBuilder/tpls/MBModule/Class.tpl */ ?>
<?php echo '<?PHP'; ?>

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
/**
 * THIS CLASS IS GENERATED BY MODULE BUILDER
 * PLEASE DO NOT CHANGE THIS CLASS
 * PLACE ANY CUSTOMIZATIONS IN <?php echo $this->_tpl_vars['class']['name']; ?>

 */

<?php $_from = $this->_tpl_vars['class']['requires']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['require']):
?>
require_once('<?php echo $this->_tpl_vars['require']; ?>
');
<?php endforeach; endif; unset($_from); ?>

class <?php echo $this->_tpl_vars['class']['name']; ?>
_sugar extends <?php echo $this->_tpl_vars['class']['extends']; ?>
 {
	var $new_schema = true;
	var $module_dir = '<?php echo $this->_tpl_vars['class']['name']; ?>
';
	var $object_name = '<?php echo $this->_tpl_vars['class']['name']; ?>
';
	var $table_name = '<?php echo $this->_tpl_vars['class']['table_name']; ?>
';
	var $importable = <?php if ($this->_tpl_vars['class']['importable']): ?>true<?php else: ?>false<?php endif; ?>;

	var $disable_row_level_security = true ; // to ensure that modules created and deployed under CE will continue to function under team security if the instance is upgraded to PRO

	<?php $_from = $this->_tpl_vars['class']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['field'] => $this->_tpl_vars['def']):
?>
	var $<?php echo $this->_tpl_vars['field']; ?>
;
	<?php endforeach; endif; unset($_from); ?>





	function <?php echo $this->_tpl_vars['class']['name']; ?>
_sugar(){	
		parent::<?php echo $this->_tpl_vars['class']['extends']; ?>
();
	}
	
	<?php if ($this->_tpl_vars['class']['acl']): ?>
function bean_implements($interface){
		switch($interface){
			case 'ACL': return true;
		}
		return false;
}
	<?php endif; ?>
	
}
<?php echo '?>'; ?>