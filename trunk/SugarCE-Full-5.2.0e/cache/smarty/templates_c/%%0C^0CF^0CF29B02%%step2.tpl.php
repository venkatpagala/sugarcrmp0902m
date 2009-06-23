<?php /* Smarty version 2.6.11, created on 2009-06-23 15:24:27
         compiled from modules/Import/tpls/step2.tpl */ ?>
<p>
<?php echo $this->_tpl_vars['MODULE_TITLE']; ?>

</p>
<form enctype="multipart/form-data" name="importstep2" method="POST" action="index.php" id="importstep2">
<input type="hidden" name="module" value="Import">
<input type="hidden" name="custom_delimiter" value="<?php echo $this->_tpl_vars['CUSTOM_DELIMITER']; ?>
">
<input type="hidden" name="custom_enclosure" value="<?php echo $this->_tpl_vars['CUSTOM_ENCLOSURE']; ?>
">
<input type="hidden" name="type" value="<?php echo $this->_tpl_vars['TYPE']; ?>
">
<input type="hidden" name="source" value="<?php echo $this->_tpl_vars['SOURCE']; ?>
">
<input type="hidden" name="source_id" value="<?php echo $this->_tpl_vars['SOURCE_ID']; ?>
">
<input type="hidden" name="action" value="Step3">
<input type="hidden" name="import_module" value="<?php echo $this->_tpl_vars['IMPORT_MODULE']; ?>
">
<?php $_from = $this->_tpl_vars['instructions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['instructions'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['instructions']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['instructions']['iteration']++;
 if (($this->_foreach['instructions']['iteration'] <= 1)): ?>          
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td align="left" class="body"><p><?php echo $this->_tpl_vars['INSTRUCTIONS_TITLE']; ?>
</p></td>
</tr>
<tr>
	<td>
	<table width="50%">
<?php endif; ?>
	<tr>
		<td valign="top" class="body"><b><?php echo $this->_tpl_vars['item']['STEP_NUM']; ?>
</b></td>
		<td class="body"><?php echo $this->_tpl_vars['item']['INSTRUCTION_STEP']; ?>
</td>
	</tr>
<?php if (($this->_foreach['instructions']['iteration'] == $this->_foreach['instructions']['total'])): ?>
    </table>
	</td>
</tr>
</table>
<?php endif;  endforeach; endif; unset($_from); ?>

<br>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tabForm">
<tr>
<td>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
	<tr>
	<th align="left" class="dataLabel" colspan="4"><?php echo $this->_tpl_vars['MOD']['LBL_SELECT_FILE']; ?>
</th>
	</tr>
	<tr>
	<td class="dataLabel">
	<input type="hidden" />
	<input size="60" name="userfile" type="file"/>
	</td>
	</tr>
	<tr>
	<td class="dataField">
	<?php echo $this->_tpl_vars['MOD']['LBL_HAS_HEADER']; ?>
&nbsp;<input class="checkBox" value='on' type="checkbox" name="has_header"<?php echo $this->_tpl_vars['HAS_HEADER_CHECKED']; ?>
>
	</td>
	</tr>
	</table>


</td>
</tr>
</table>

<br>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td align="left">
        <input title="<?php echo $this->_tpl_vars['MOD']['LBL_BACK']; ?>
" accessKey="" class="button" type="submit" name="button" value="  <?php echo $this->_tpl_vars['MOD']['LBL_BACK']; ?>
  " id="goback">&nbsp;
	    <input title="<?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
" accessKey="" class="button" type="submit" name="button" value="  <?php echo $this->_tpl_vars['MOD']['LBL_NEXT']; ?>
  " id="gonext">
    </td>
</tr>
</table>

</form>
<?php echo $this->_tpl_vars['JAVASCRIPT']; ?>
