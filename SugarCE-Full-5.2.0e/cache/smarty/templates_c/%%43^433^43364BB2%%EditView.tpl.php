<?php /* Smarty version 2.6.11, created on 2009-06-24 15:58:24
         compiled from modules/ACLRoles/EditView.tpl */ ?>


<script>
<?php echo '
function set_focus(){
	document.getElementById(\'name\').focus();
}
'; ?>

</script>

<form method='POST' name='EditView'>
<TABLE width='100%' border='0' cellpadding=0 cellspacing = 0>
<tbody>
<tr>
<td style="padding-bottom: 2px;">
<input type='hidden' name='record' value='<?php echo $this->_tpl_vars['ROLE']['id']; ?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='isduplicate' value='<?php echo $this->_tpl_vars['ISDUPLICATE']; ?>
'>
<input type='hidden' name='return_record' value='<?php echo $this->_tpl_vars['RETURN']['record']; ?>
'>
<input type='hidden' name='return_action' value='<?php echo $this->_tpl_vars['RETURN']['action']; ?>
'>
<input type='hidden' name='return_module' value='<?php echo $this->_tpl_vars['RETURN']['module']; ?>
'> &nbsp;
<input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button" onclick="this.form.action.value='Save';return check_form('EditView');" type="submit" name="button" value="  <?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
  " > &nbsp;
<input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
"   class='button' accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" type='submit' name='save' value="  <?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
 " class='button' onclick='document.EditView.action.value="<?php echo $this->_tpl_vars['RETURN']['action']; ?>
";document.EditView.module.value="<?php echo $this->_tpl_vars['RETURN']['module']; ?>
";document.EditView.record.value="<?php echo $this->_tpl_vars['RETURN']['record']; ?>
";document.EditView.submit();'>
</td>
</tr>
</tbody>
</table>
<TABLE width='100%' class="tabForm"  border='0' cellpadding=0 cellspacing = 0  >
<TR>
<td class="dataLabel" align='right'><?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
:<span class="required"><?php echo $this->_tpl_vars['APP']['LBL_REQUIRED_SYMBOL']; ?>
</span></td><td class="dataField">
<input id='name' name='name' type='text' value='<?php echo $this->_tpl_vars['ROLE']['name']; ?>
'>
</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
<td class="dataLabel" align='right'><?php echo $this->_tpl_vars['MOD']['LBL_DESCRIPTION']; ?>
:</td>
<td class="dataField"><textarea name='description' cols="80" rows="8"><?php echo $this->_tpl_vars['ROLE']['description']; ?>
</textarea></td>
</tr>
</table>

</form>
<script type="text/javascript">
addToValidate('EditView', 'name', 'varchar', true, '<?php echo $this->_tpl_vars['MOD']['LBL_NAME']; ?>
');
</script>