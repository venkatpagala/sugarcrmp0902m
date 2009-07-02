<?php /* Smarty version 2.6.11, created on 2009-07-02 10:30:12
         compiled from modules/DynamicFields/templates/Fields/Forms/coreTop.tpl */ ?>

<table width="100%">
<tr>
	<td class='mbLBL' width='30%' ><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_NAME']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] == 0): ?>
		<input id="field_name_id" maxlength=30 type="text" name="name" value="<?php echo $this->_tpl_vars['vardef']['name']; ?>
" onchange="document.getElementById('label_key_id').value = 'LBL_'+document.getElementById('field_name_id').value.toUpperCase();
		document.getElementById('label_value_id').value = document.getElementById('field_name_id').value.replace(/_/,' ');
		document.getElementById('field_name_id').value = document.getElementById('field_name_id').value.toLowerCase();" />
	<?php else: ?>
		<input id= "field_name_id" maxlength=30 type="hidden" name="name" value="<?php echo $this->_tpl_vars['vardef']['name']; ?>
" 
		onchange="document.getElementById('label_key_id').value = 'LBL_'+document.getElementById('field_name_id').value.toUpperCase();
		document.getElementById('label_value_id').value = document.getElementById('field_name_id').value.replace(/_/,' ');
		document.getElementById('field_name_id').value = document.getElementById('field_name_id').value.toLowerCase();"/><?php echo $this->_tpl_vars['vardef']['name'];  endif; ?>
		<script>
		addToValidate('popup_form', 'name', 'DBName', true,'<?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_NAME']; ?>
 [a-zA-Z_]' );
		addToValidateIsInArray('popup_form', 'name', 'in_array', true,'<?php echo $this->_tpl_vars['MOD']['ERR_RESERVED_FIELD_NAME']; ?>
', '<?php echo $this->_tpl_vars['field_name_exceptions']; ?>
', 'u==');
		</script>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_DISPLAY_LABEL']; ?>
:</td>
	<td>
		<input id="label_value_id" type="text" name="label_value" value="<?php echo $this->_tpl_vars['lbl_value']; ?>
">
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_LABEL']; ?>
:</td>
	<td>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
		<input id ="label_key_id" type="text" name="label" value="<?php echo $this->_tpl_vars['vardef']['vname']; ?>
">
	<?php else: ?>
		<input id ="label_key_id" type="hidden" name="label" value="<?php echo $this->_tpl_vars['vardef']['vname']; ?>
"><?php echo $this->_tpl_vars['vardef']['vname']; ?>

	<?php endif; ?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_HELP_TEXT']; ?>
:</td><td><?php if ($this->_tpl_vars['hideLevel'] < 5): ?><input type="text" name="help" value="<?php echo $this->_tpl_vars['vardef']['help']; ?>
"><?php else: ?><input type="hidden" name="help" value="<?php echo $this->_tpl_vars['vardef']['help']; ?>
"><?php echo $this->_tpl_vars['vardef']['help'];  endif; ?>
	</td>
</tr>
<tr>
    <td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_COMMENT_TEXT']; ?>
:</td><td><?php if ($this->_tpl_vars['hideLevel'] < 5): ?><input type="text" name="comments" value="<?php echo $this->_tpl_vars['vardef']['comments']; ?>
"><?php else: ?><input type="hidden" name="comment" value="<?php echo $this->_tpl_vars['vardef']['comment']; ?>
"><?php echo $this->_tpl_vars['vardef']['comment'];  endif; ?>
    </td>
</tr>