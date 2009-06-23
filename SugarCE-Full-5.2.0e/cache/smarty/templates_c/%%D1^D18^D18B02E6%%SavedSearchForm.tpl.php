<?php /* Smarty version 2.6.11, created on 2009-06-23 12:26:46
         compiled from modules/SavedSearch/SavedSearchForm.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/SavedSearch/SavedSearchForm.tpl', 52, false),array('modifier', 'default', 'modules/SavedSearch/SavedSearchForm.tpl', 92, false),)), $this); ?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top: 0px none; margin-bottom: 4px" >
<tr>
<tr valign='top'>
	<td width='37%' align='left' rowspan='4' colspan='2'>
		<input id='displayColumnsDef' type='hidden' name='displayColumns'>
		<input id='hideTabsDef' type='hidden' name='hideTabs'>
		<?php echo $this->_tpl_vars['columnChooser']; ?>

		<br>
	</td>
	<td class='dataLabel' nowrap align='left' width='10%'>
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ORDER_BY_COLUMNS','module' => 'SavedSearch'), $this);?>


	</td>
	<td class='dataField' width='30%'>
		<select name='orderBy' id='orderBySelect'>
		</select>
	</td>
	<td nowrap class='dataLabel' width='10%'>
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_DIRECTION','module' => 'SavedSearch'), $this);?>

	</td>
	<td class='dataField' width='30%'>
		<input id='sort_order_desc_radio' type='radio' name='sortOrder' value='DESC' <?php if ($this->_tpl_vars['selectedSortOrder'] == 'DESC'): ?>checked<?php endif; ?>> <span onclick='document.getElementById("sort_order_desc_radio").checked = true' style="cursor: pointer; cursor: hand"><?php echo $this->_tpl_vars['MOD']['LBL_DESCENDING']; ?>
</span><br>
		<input id='sort_order_asc_radio' type='radio' name='sortOrder' value='ASC' <?php if ($this->_tpl_vars['selectedSortOrder'] == 'ASC'): ?>checked<?php endif; ?>> <span onclick='document.getElementById("sort_order_asc_radio").checked = true' style="cursor: pointer; cursor: hand"><?php echo $this->_tpl_vars['MOD']['LBL_ASCENDING']; ?>
</span>
	</td>

</tr>
<tr>
	<td class='dataLabel' nowrap width='7%'>
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_SAVE_SEARCH_AS','module' => 'SavedSearch'), $this);?>

	</td>
	<td class='dataField' width='30%'>
		<input type='text' name='saved_search_name'>
		<input type='hidden' name='search_module' value=''>
		<input type='hidden' name='saved_search_action' value=''>
		<input value='<?php echo $this->_tpl_vars['SAVE']; ?>
' title='<?php echo $this->_tpl_vars['MOD']['LBL_SAVE_BUTTON_TITLE']; ?>
' class='button' type='button' name='saved_search_submit' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
	</td>
	<td nowrap  class='dataLabel' width='*' colspan=2><?php echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFY_CURRENT_SEARCH','module' => 'SavedSearch'), $this);?>
:&nbsp;
		<input class='button' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")' value='<?php echo $this->_tpl_vars['UPDATE']; ?>
' title='<?php echo $this->_tpl_vars['MOD']['LBL_UPDATE_BUTTON_TITLE']; ?>
' name='ss_update' id='ss_update' type='button' >
		<input class='button' onclick='return SUGAR.savedViews.saved_search_action("delete", "<?php echo $this->_tpl_vars['MOD']['LBL_DELETE_CONFIRM']; ?>
")' value='<?php echo $this->_tpl_vars['DELETE']; ?>
' title='<?php echo $this->_tpl_vars['MOD']['LBL_DELETE_BUTTON_TITLE']; ?>
' name='ss_delete' id='ss_delete' type='button'>
		<br><span id='curr_search_name'></span>
	</td>

</tr>


</table>
<script>
	SUGAR.savedViews.columnsMeta = <?php echo $this->_tpl_vars['columnsMeta']; ?>
;
	columnsMeta = <?php echo $this->_tpl_vars['columnsMeta']; ?>
;
	saved_search_select = "<?php echo $this->_tpl_vars['SAVED_SEARCH_SELECT']; ?>
";
	selectedSortOrder = "<?php echo ((is_array($_tmp=@$this->_tpl_vars['selectedSortOrder'])) ? $this->_run_mod_handler('default', true, $_tmp, 'DESC') : smarty_modifier_default($_tmp, 'DESC')); ?>
";
	selectedOrderBy = "<?php echo $this->_tpl_vars['selectedOrderBy']; ?>
";


<?php echo '
	//this populates the label that shows the name of the current saved view
	//The label is located under the update/delete buttons
	function fillInLabels(){
		//this javascript runs and populates values in savedSearchForm.tpl
		x = document.getElementById(\'saved_search_select\');
		if ((typeof(x) != \'undefined\' && x != null) && x.selectedIndex !=0) {
			document.getElementById(\'curr_search_name\').innerHTML = \'"\'+x.options[x.selectedIndex].text+\'"\';
			document.getElementById(\'ss_update\').disabled = false;
			document.getElementById(\'ss_delete\').disabled = false;
		}else{
			document.getElementById(\'ss_update\').disabled = true;
			document.getElementById(\'ss_delete\').disabled = true;
			document.getElementById(\'curr_search_name\').innerHTML = \'\';
		}
	}
	//call scripts that need to get run onload of this form.  This function is called when image
	//to collapse/show subpanels is loaded
	function loadSSL_Scripts(){
		//this will fill in the name of the current module, and enable/disable update/delete buttons
		fillInLabels();
		//this populates the order by dropdown, and activates the chooser widget.
		SUGAR.savedViews.handleForm();
	}

'; ?>

</script>

