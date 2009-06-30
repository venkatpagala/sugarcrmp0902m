<?php /* Smarty version 2.6.11, created on 2009-06-30 16:02:49
         compiled from modules/ACLRoles/DetailViewBody.tpl */ ?>


<TABLE width='100%' class='tabDetailView' border='0' cellpadding=0 cellspacing = 1  >
<TR>
<td></td>
<?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME']):
?>
	<td class="tabDetailViewDL" style="text-align: center;"><b><?php echo $this->_tpl_vars['ACTION_NAME']; ?>
</b></td>
<?php endforeach; else: ?>

          <td colspan="2">&nbsp;</td>

<?php endif; unset($_from); ?>
</TR>
<?php $_from = $this->_tpl_vars['CATEGORIES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['CATEGORY_NAME'] => $this->_tpl_vars['TYPES']):
?>
	<TR>
	<td nowrap width='1%' class="tabDetailViewDL" ><b><?php echo $this->_tpl_vars['APP_LIST']['moduleList'][$this->_tpl_vars['CATEGORY_NAME']]; ?>
</b></td>
	<?php $_from = $this->_tpl_vars['ACTION_NAMES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME'] => $this->_tpl_vars['ACTION_LABEL']):
?>
		<?php $this->assign('ACTION_FIND', 'false'); ?>
		<?php $_from = $this->_tpl_vars['TYPES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['TYPE_NAME'] => $this->_tpl_vars['ACTIONS']):
?>
			<?php $_from = $this->_tpl_vars['ACTIONS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ACTION_NAME_ACTIVE'] => $this->_tpl_vars['ACTION']):
?>
				<?php if ($this->_tpl_vars['ACTION_NAME'] == $this->_tpl_vars['ACTION_NAME_ACTIVE']): ?>
					<?php $this->assign('ACTION_FIND', 'true'); ?>
					<td  class="tabDetailViewDF" width='<?php echo $this->_tpl_vars['TDWIDTH']; ?>
%' align='center'><div align='center' class="acl<?php echo $this->_tpl_vars['ACTION']['accessLabel']; ?>
"><b><?php echo $this->_tpl_vars['ACTION']['accessName']; ?>
</b></div></td>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['ACTION_FIND'] == 'false'): ?>
			<td nowrap class="tabDetailViewDF" width='<?php echo $this->_tpl_vars['TDWIDTH']; ?>
%' style="text-align: center;">
			<div><font color='red'>N/A</font></div>
			</td>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</TR>
<?php endforeach; else: ?>
	<tr> <td colspan="2">No Actions</td></tr>
<?php endif; unset($_from); ?>
</TABLE>