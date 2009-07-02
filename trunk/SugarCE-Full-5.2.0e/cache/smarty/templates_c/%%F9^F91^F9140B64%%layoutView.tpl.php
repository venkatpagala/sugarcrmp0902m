<?php /* Smarty version 2.6.11, created on 2009-07-02 10:39:52
         compiled from modules/ModuleBuilder/tpls/layoutView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_image', 'modules/ModuleBuilder/tpls/layoutView.tpl', 53, false),array('function', 'counter', 'modules/ModuleBuilder/tpls/layoutView.tpl', 63, false),array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/layoutView.tpl', 67, false),array('function', 'eval', 'modules/ModuleBuilder/tpls/layoutView.tpl', 77, false),array('modifier', 'upper', 'modules/ModuleBuilder/tpls/layoutView.tpl', 100, false),)), $this); ?>

<table id='layoutEditorButtons' cellspacing='2'>
	<tr>
	<?php echo $this->_tpl_vars['buttons']; ?>

	</tr>
</table>
<div id='layoutEditor' style="width:675px;">
<input type='hidden' id='fieldwidth' value='<?php echo $this->_tpl_vars['fieldwidth']; ?>
'>
<input type='hidden' id='maxColumns' value='<?php echo $this->_tpl_vars['maxColumns']; ?>
'>
<input type='hidden' id='nextPanelId' value='<?php echo $this->_tpl_vars['nextPanelId']; ?>
'>
<div id='toolbox' style='float:left';>
	<h2 style='margin-bottom:20px;'><?php echo $this->_tpl_vars['mod']['LBL_TOOLBOX']; ?>
</h2>
	<div id='delete'>
	<?php echo smarty_function_sugar_image(array('name' => 'Delete','width' => 48,'height' => 48), $this);?>

	</div>

	<?php if (! isset ( $this->_tpl_vars['fromPortal'] )): ?>
	<div id='panelproxy'></div>
	<?php endif; ?>
	<div id='rowproxy'></div>
	<div id='availablefields'>
	<p id='fillerproxy'></p>

	<?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','start' => '1'), $this);?>

	<?php $_from = $this->_tpl_vars['available_fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['col']):
?>
		<div class='le_field' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>
			<?php if (! $this->_tpl_vars['fromModuleBuilder'] && ( $this->_tpl_vars['col']['name'] != '(filler)' )): ?>
				<img class='le_edit' src="themes/Sugar/images/edit_inline.gif" style='float:right; cursor:pointer;' onclick="var value_label = document.getElementById('le_label_<?php echo $this->_tpl_vars['idCount']; ?>
').innerHTML; var value_tabindex = document.getElementById('le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
').innerHTML;ModuleBuilder.getContent('module=ModuleBuilder&action=editProperty&view_module=<?php echo $this->_tpl_vars['view_module']; ?>
&view=<?php echo $this->_tpl_vars['view']; ?>
&id_label=le_label_<?php echo $this->_tpl_vars['idCount']; ?>
&name_label=label_<?php echo $this->_tpl_vars['col']['label']; ?>
&title_label=<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LABEL_TITLE','module' => 'ModuleBuilder'), $this);?>
&value_label=' + value_label + '&id_tabindex=le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
&title_tabindex=<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TAB_ORDER','module' => 'ModuleBuilder'), $this);?>
&name_tabindex=tabindex&value_tabindex=' + value_tabindex );" />
			<?php endif; ?>
			<?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'address' )): ?>
				<?php echo $this->_tpl_vars['icon_address']; ?>

			<?php endif; ?>
			<?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'phone' )): ?>
				<?php echo $this->_tpl_vars['icon_phone']; ?>

			<?php endif; ?>
			<span id='le_label_<?php echo $this->_tpl_vars['idCount']; ?>
'>
			<?php if (! empty ( $this->_tpl_vars['translate'] ) && ! empty ( $this->_tpl_vars['col']['label'] )): ?>
				<?php echo smarty_function_eval(array('var' => $this->_tpl_vars['col']['label'],'assign' => 'newLabel'), $this);?>

				<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['newLabel'],'module' => $this->_tpl_vars['language']), $this);?>

			<?php else: ?>
				<?php echo $this->_tpl_vars['col']['label']; ?>

			<?php endif; ?></span>
			<span class='field_name'><?php echo $this->_tpl_vars['col']['name']; ?>
</span>
			<span class='field_label'><?php echo $this->_tpl_vars['col']['label']; ?>
</span>
			<span id='le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
' class='field_tabindex'><?php echo $this->_tpl_vars['col']['tabindex']; ?>
</span>
		</div>
		<?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>

	<?php endforeach; endif; unset($_from); ?>
	</div>
</div>

<div id='panels' style='float:left;'>

<h3><?php echo $this->_tpl_vars['layouttitle']; ?>
</h3>

<?php $_from = $this->_tpl_vars['layout']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['panelid'] => $this->_tpl_vars['panel']):
?>

	<div class='le_panel' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>

		<div class='panel_label' id='le_panellabel_<?php echo $this->_tpl_vars['idCount']; ?>
'>
		  <span class='panel_name' id='le_panelname_<?php echo $this->_tpl_vars['idCount']; ?>
'><?php if ($this->_tpl_vars['panelid'] == 'default'):  echo $this->_tpl_vars['mod']['LBL_DEFAULT'];  elseif (! empty ( $this->_tpl_vars['translate'] )):  echo smarty_function_sugar_translate(array('label' => ((is_array($_tmp=$this->_tpl_vars['panelid'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)),'module' => $this->_tpl_vars['language']), $this); else:  echo $this->_tpl_vars['panelid'];  endif; ?></span>
		  <span class='panel_id' id='le_panelid_<?php echo $this->_tpl_vars['idCount']; ?>
'><?php echo $this->_tpl_vars['panelid']; ?>
</span>
		</div>
		<?php if ($this->_tpl_vars['panelid'] != 'default'): ?>
        <img class='le_edit' src="themes/Sugar/images/edit_inline.gif" style='float:right; cursor:pointer;' onclick="var value_label = document.getElementById('le_panelname_<?php echo $this->_tpl_vars['idCount']; ?>
').innerHTML;ModuleBuilder.getContent('module=ModuleBuilder&action=editProperty&view_module=<?php echo $this->_tpl_vars['view_module'];  if ($this->_tpl_vars['fromModuleBuilder']): ?>&view_package=<?php echo $this->_tpl_vars['view_package'];  endif; ?>&view=<?php echo $this->_tpl_vars['view']; ?>
&id_label=le_panelname_<?php echo $this->_tpl_vars['idCount']; ?>
&name_label=label_<?php echo ((is_array($_tmp=$this->_tpl_vars['panelid'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp)); ?>
&title_label=<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LABEL_TITLE','module' => 'ModuleBuilder'), $this);?>
&value_label=' + value_label );" />
        <?php endif; ?>
		<?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>


		<?php $_from = $this->_tpl_vars['panel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['rid'] => $this->_tpl_vars['row']):
?>
			<div class='le_row' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>
			<?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>


			<?php $_from = $this->_tpl_vars['row']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cid'] => $this->_tpl_vars['col']):
?>
				<div class='le_field' id='<?php echo $this->_tpl_vars['idCount']; ?>
'>
			        <?php if (! $this->_tpl_vars['fromModuleBuilder'] && ( $this->_tpl_vars['col']['name'] != '(filler)' )): ?>
						<img class='le_edit' src="themes/Sugar/images/edit_inline.gif" style='float:right; cursor:pointer;' onclick="var value_label = document.getElementById('le_label_<?php echo $this->_tpl_vars['idCount']; ?>
').innerHTML; var value_tabindex = document.getElementById('le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
').innerHTML;ModuleBuilder.getContent('module=ModuleBuilder&action=editProperty&view_module=<?php echo $this->_tpl_vars['view_module'];  if ($this->_tpl_vars['fromModuleBuilder']): ?>&view_package=<?php echo $this->_tpl_vars['view_package'];  endif; ?>&view=<?php echo $this->_tpl_vars['view']; ?>
&id_label=le_label_<?php echo $this->_tpl_vars['idCount']; ?>
&name_label=label_<?php echo $this->_tpl_vars['col']['label']; ?>
&title_label=<?php echo smarty_function_sugar_translate(array('label' => 'LBL_LABEL_TITLE','module' => 'ModuleBuilder'), $this);?>
&value_label=' + value_label + '&id_tabindex=le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
&title_tabindex=<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TAB_ORDER','module' => 'ModuleBuilder'), $this);?>
&name_tabindex=tabindex&value_tabindex=' + value_tabindex );" />
					<?php endif; ?>

					<?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'address' )): ?>
						<?php echo $this->_tpl_vars['icon_address']; ?>

					<?php endif; ?>
					<?php if (isset ( $this->_tpl_vars['col']['type'] ) && ( $this->_tpl_vars['col']['type'] == 'phone' )): ?>
						<?php echo $this->_tpl_vars['icon_phone']; ?>

					<?php endif; ?>
					<span id='le_label_<?php echo $this->_tpl_vars['idCount']; ?>
'>
					<?php if (! empty ( $this->_tpl_vars['translate'] ) && ! empty ( $this->_tpl_vars['col']['label'] )): ?>
						<?php echo smarty_function_eval(array('var' => $this->_tpl_vars['col']['label'],'assign' => 'evalLabel'), $this);?>

						<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['evalLabel'],'module' => $this->_tpl_vars['language']), $this);?>

					<?php else: ?>
						<?php echo $this->_tpl_vars['col']['label']; ?>

					<?php endif; ?></span>
					<!--span id='le_label_<?php echo $this->_tpl_vars['idCount']; ?>
' class='field_label'><?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['col']['label'],'module' => $this->_tpl_vars['language']), $this);?>
</span-->
					<span class='field_name'><?php echo $this->_tpl_vars['col']['name']; ?>
</span>
					<span class='field_label'><?php echo $this->_tpl_vars['col']['label']; ?>
</span>
					<span id='le_tabindex_<?php echo $this->_tpl_vars['idCount']; ?>
' class='field_tabindex'><?php echo $this->_tpl_vars['col']['tabindex']; ?>
</span>
				</div>
				<?php echo smarty_function_counter(array('name' => 'idCount','assign' => 'idCount','print' => false), $this);?>

			<?php endforeach; endif; unset($_from); ?>

		</div>
	<?php endforeach; endif; unset($_from); ?>

	</div>
<?php endforeach; endif; unset($_from); ?>

</div>
<input type='hidden' id='idCount' value='<?php echo $this->_tpl_vars['idCount']; ?>
'>
</div>

<form name='prepareForSave' id='prepareForSave' action='index.php'>
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='view_module' value='<?php echo $this->_tpl_vars['view_module']; ?>
'>
<input type='hidden' name='view' value='<?php echo $this->_tpl_vars['view']; ?>
'>
<?php if ($this->_tpl_vars['fromPortal']): ?>
	<input type='hidden' name='PORTAL' value='1'>
<?php endif;  if ($this->_tpl_vars['fromModuleBuilder']): ?>
	<input type='hidden' name='MB' value='1'>
	<input type='hidden' name='view_package' value='<?php echo $this->_tpl_vars['view_package']; ?>
'>
<?php endif; ?>
<input type='hidden' name='to_pdf' value='1'>
</form>
<script>
	Studio2.init();
	if('<?php echo $this->_tpl_vars['view']; ?>
'.toLowerCase() != 'editview')
		ModuleBuilder.helpSetup('layoutEditor','default'+'<?php echo $this->_tpl_vars['view']; ?>
'.toLowerCase());
	if('<?php echo $this->_tpl_vars['from_mb']; ?>
')
		ModuleBuilder.helpUnregisterByID('saveBtn');

	ModuleBuilder.MBpackage = "<?php echo $this->_tpl_vars['view_package']; ?>
";
</script>