<?php /* Smarty version 2.6.11, created on 2009-07-02 10:30:12
         compiled from modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl', 60, false),array('function', 'sugar_help', 'modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl', 61, false),)), $this); ?>
<?php if ($this->_tpl_vars['vardef']['type'] != 'bool'): ?>
<tr ><td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_REQUIRED_OPTION']; ?>
:</td><td><input type="checkbox" name="required" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['required'] )): ?>CHECKED<?php endif; ?> <?php if ($this->_tpl_vars['hideLevel'] > 5): ?>disabled<?php endif; ?>/><?php if ($this->_tpl_vars['hideLevel'] > 5): ?><input type="hidden" name="required" value="<?php echo $this->_tpl_vars['vardef']['required']; ?>
"><?php endif; ?></td></tr>
<?php endif; ?>












<tr><td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_AUDIT']; ?>
:</td><td><input type="checkbox" name="audited" value="1" <?php if (! empty ( $this->_tpl_vars['vardef']['audited'] )): ?>CHECKED<?php endif; ?> <?php if ($this->_tpl_vars['hideLevel'] > 5): ?>disabled<?php endif; ?>/><?php if ($this->_tpl_vars['hideLevel'] > 5): ?><input type="hidden" name="audited" value="<?php echo $this->_tpl_vars['vardef']['audited']; ?>
"><?php endif; ?></td></tr>
<?php if ($this->_tpl_vars['vardef']['type'] != 'parent'): ?>
<tr><td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_IMPORTABLE']; ?>
:</td><td>
    <?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
        <?php echo smarty_function_html_options(array('name' => 'importable','id' => 'importable','selected' => $this->_tpl_vars['vardef']['importable'],'options' => $this->_tpl_vars['importable_options']), $this);?>

        <?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_POPHELP_IMPORTABLE'],'FIXX' => 260,'FIXY' => 300), $this);?>

    <?php else: ?>
        <?php if (isset ( $this->_tpl_vars['vardef']['importable'] )):  echo $this->_tpl_vars['importable_options'][$this->_tpl_vars['vardef']['importable']]; ?>

        <?php else:  echo $this->_tpl_vars['importable_options']['true'];  endif; ?>
    <?php endif; ?>
</td></tr>
<?php endif; ?>
<tr><td class='mbLBL'><?php echo $this->_tpl_vars['MOD']['COLUMN_TITLE_DUPLICATE_MERGE']; ?>
:</td><td>
<?php if ($this->_tpl_vars['vardef']['type'] != 'multienum'): ?>
	<?php if ($this->_tpl_vars['hideLevel'] < 5): ?>
    	<?php echo smarty_function_html_options(array('name' => 'duplicate_merge','id' => 'duplicate_merge','selected' => $this->_tpl_vars['vardef']['duplicate_merge_dom_value'],'options' => $this->_tpl_vars['duplicate_merge_options']), $this);?>

    	<?php echo smarty_function_sugar_help(array('text' => $this->_tpl_vars['mod_strings']['LBL_POPHELP_DUPLICATE_MERGE'],'FIXX' => 260,'FIXY' => 0), $this);?>

	<?php else: ?>
    	<?php if (isset ( $this->_tpl_vars['vardef']['duplicate_merge_dom_value'] )):  echo $this->_tpl_vars['vardef']['duplicate_merge_dom_value']; ?>

    	<?php else:  echo $this->_tpl_vars['duplicate_merge_options'][0];  endif; ?>
	<?php endif;  else: ?>
	<?php echo $this->_tpl_vars['duplicate_merge_options'][0]; ?>

<?php endif; ?>
</td></tr>
</table>