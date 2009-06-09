<?php /* Smarty version 2.6.11, created on 2009-06-08 21:25:12
         compiled from include/ListView/ListViewGeneric.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'include/ListView/ListViewGeneric.tpl', 43, false),array('function', 'counter', 'include/ListView/ListViewGeneric.tpl', 57, false),array('function', 'sugar_translate', 'include/ListView/ListViewGeneric.tpl', 67, false),array('function', 'sugar_evalcolumn_old', 'include/ListView/ListViewGeneric.tpl', 117, false),array('function', 'sugar_currency_format', 'include/ListView/ListViewGeneric.tpl', 119, false),array('function', 'sugar_getimagepath', 'include/ListView/ListViewGeneric.tpl', 151, false),array('modifier', 'default', 'include/ListView/ListViewGeneric.tpl', 60, false),array('modifier', 'lower', 'include/ListView/ListViewGeneric.tpl', 63, false),array('modifier', 'upper', 'include/ListView/ListViewGeneric.tpl', 65, false),array('modifier', 'explode', 'include/ListView/ListViewGeneric.tpl', 135, false),)), $this); ?>

<?php if ($this->_tpl_vars['overlib']): ?>
	<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_overlib.js'), $this);?>
'></script>
	<div id='overDiv' style='position:absolute; visibility:hidden; z-index:1000;'></div>
<?php endif;  if ($this->_tpl_vars['prerow']): ?>
	<?php echo $this->_tpl_vars['multiSelectData']; ?>

<?php endif; ?>
<table cellpadding='0' cellspacing='0' width='100%' border='0' class='listview'>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/ListView/ListViewPagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<tr height='20'>
		<?php if ($this->_tpl_vars['prerow']): ?>
			<td scope='col' class='listViewThS1' nowrap width='1%'>
				<input type='checkbox' class='checkbox' name='massall' value='' onclick='sListView.check_all(document.MassUpdate, "mass[]", this.checked);' />
			</td>
		<?php endif; ?>
		<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>

		<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['colHeader'] => $this->_tpl_vars['params']):
?>
			<td scope='col' width='<?php echo $this->_tpl_vars['params']['width']; ?>
%' class='listViewThS1' nowrap>
				<div style='white-space: nowrap;'width='100%' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
'>
                <?php if (((is_array($_tmp=@$this->_tpl_vars['params']['sortable'])) ? $this->_run_mod_handler('default', true, $_tmp, true) : smarty_modifier_default($_tmp, true))): ?>
                    <?php if ($this->_tpl_vars['params']['url_sort']): ?>
                        <a href='<?php echo $this->_tpl_vars['pageData']['urls']['orderBy'];  echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
' class='listViewThLinkS1'>
                    <?php else: ?>
                        <a href='javascript:sListView.order_checks("<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['ordering']['sortOrder'])) ? $this->_run_mod_handler('default', true, $_tmp, 'ASCerror') : smarty_modifier_default($_tmp, 'ASCerror')); ?>
", "<?php echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
" , "<?php echo $this->_tpl_vars['pageData']['bean']['moduleDir'];  echo '2_';  echo ((is_array($_tmp=$this->_tpl_vars['pageData']['bean']['objectName'])) ? $this->_run_mod_handler('upper', true, $_tmp) : smarty_modifier_upper($_tmp));  echo '_ORDER_BY'; ?>
")' class='listViewThLinkS1'>
                    <?php endif; ?>
                    <?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>
&nbsp;&nbsp;
					<?php if (((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)) == $this->_tpl_vars['pageData']['ordering']['orderBy']): ?>
						<?php if ($this->_tpl_vars['pageData']['ordering']['sortOrder'] == 'ASC'): ?>
							<img border='0' src='<?php echo $this->_tpl_vars['imagePath']; ?>
arrow_down.<?php echo $this->_tpl_vars['arrowExt']; ?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
						<?php else: ?>
							<img border='0' src='<?php echo $this->_tpl_vars['imagePath']; ?>
arrow_up.<?php echo $this->_tpl_vars['arrowExt']; ?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
						<?php endif; ?>
					<?php else: ?>
						<img border='0' src='<?php echo $this->_tpl_vars['imagePath']; ?>
arrow.<?php echo $this->_tpl_vars['arrowExt']; ?>
' width='<?php echo $this->_tpl_vars['arrowWidth']; ?>
' height='<?php echo $this->_tpl_vars['arrowHeight']; ?>
' align='absmiddle' alt='<?php echo $this->_tpl_vars['arrowAlt']; ?>
'>
					<?php endif; ?>
					</a>
				<?php else: ?>
					<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>

				<?php endif; ?>
				</div>
			</td>
			<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

		<?php endforeach; endif; unset($_from); ?>
		<?php if (! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
		<td scope='col' class='listViewThS1' nowrap width='1%'>&nbsp;</td>
		<?php endif; ?>
	</tr>
		
	<?php echo smarty_function_counter(array('start' => $this->_tpl_vars['pageData']['offsets']['current'],'print' => false,'assign' => 'offset','name' => 'offset'), $this);?>
	
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
	    <?php echo smarty_function_counter(array('name' => 'offset','print' => false), $this);?>


		<?php if ((1 & $this->_foreach['rowIteration']['iteration'])): ?>
			<?php $this->assign('_bgColor', $this->_tpl_vars['bgColor'][0]); ?>
			<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][0]); ?>
		<?php else: ?>
			<?php $this->assign('_bgColor', $this->_tpl_vars['bgColor'][1]); ?>
			<?php $this->assign('_rowColor', $this->_tpl_vars['rowColor'][1]); ?>
		<?php endif; ?>
		<tr height='20' onmouseover="setPointer(this, '<?php echo $this->_tpl_vars['id']; ?>
', 'over', '<?php echo $this->_tpl_vars['_bgColor']; ?>
', '<?php echo $this->_tpl_vars['bgHilite']; ?>
', '');" onmouseout="setPointer(this, '<?php echo $this->_tpl_vars['rowData']['ID']; ?>
', 'out', '<?php echo $this->_tpl_vars['_bgColor']; ?>
', '<?php echo $this->_tpl_vars['bgHilite']; ?>
', '');" onmousedown="setPointer(this, '<?php echo $this->_tpl_vars['id']; ?>
', 'click', '<?php echo $this->_tpl_vars['_bgColor']; ?>
', '<?php echo $this->_tpl_vars['bgHilite']; ?>
', '');">
			<?php if ($this->_tpl_vars['prerow']): ?>
			<td width='1%' class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1' bgcolor='<?php echo $this->_tpl_vars['_bgColor']; ?>
' nowrap>
					<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='<?php echo $this->_tpl_vars['rowData']['ID']; ?>
'>
					<?php echo $this->_tpl_vars['pageData']['additionalDetails'][$this->_tpl_vars['id']]; ?>

			</td>
			<?php endif; ?>
			<?php echo smarty_function_counter(array('start' => 0,'name' => 'colCounter','print' => false,'assign' => 'colCounter'), $this);?>


			<?php $_from = $this->_tpl_vars['displayColumns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col'] => $this->_tpl_vars['params']):
?>
				<td scope='row' align='<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['align'])) ? $this->_run_mod_handler('default', true, $_tmp, 'left') : smarty_modifier_default($_tmp, 'left')); ?>
' valign=top class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1' bgcolor='<?php echo $this->_tpl_vars['_bgColor']; ?>
'>
					<?php if ($this->_tpl_vars['params']['link'] && ! $this->_tpl_vars['params']['customCode']): ?>
						
						<<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?>
 href="#" onMouseOver="javascript:lvg_nav('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']));  endif; ?>', '<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
', 'd', <?php echo $this->_tpl_vars['offset']; ?>
, this)"  onFocus="javascript:lvg_nav('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']));  endif; ?>', '<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
', 'd', <?php echo $this->_tpl_vars['offset']; ?>
, this)"  class='listViewTdLinkS1'><?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>
</<?php echo ((is_array($_tmp=@$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']][$this->_tpl_vars['params']['ACLTag']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['tag'][$this->_tpl_vars['id']]['MAIN'])); ?>
>
						
					<?php elseif ($this->_tpl_vars['params']['customCode']): ?> 
						<?php echo smarty_function_sugar_evalcolumn_old(array('var' => $this->_tpl_vars['params']['customCode'],'rowData' => $this->_tpl_vars['rowData']), $this);?>

					<?php elseif ($this->_tpl_vars['params']['currency_format']): ?> 
						<?php echo smarty_function_sugar_currency_format(array('var' => $this->_tpl_vars['rowData'][$this->_tpl_vars['col']],'round' => $this->_tpl_vars['params']['currency_format']['round'],'decimals' => $this->_tpl_vars['params']['currency_format']['decimals'],'symbol' => $this->_tpl_vars['params']['currency_format']['symbol'],'convert' => $this->_tpl_vars['params']['currency_format']['convert'],'currency_symbol' => $this->_tpl_vars['params']['currency_format']['currency_symbol']), $this);?>

					<?php elseif ($this->_tpl_vars['params']['type'] == 'bool'): ?>
							<input type='checkbox' disabled=disabled class='checkbox'
							<?php if (! empty ( $this->_tpl_vars['rowData'][$this->_tpl_vars['col']] )): ?>
								checked=checked
							<?php endif; ?>
							/>
					<?php elseif ($this->_tpl_vars['params']['type'] == 'multienum'): ?>
						<?php if (! empty ( $this->_tpl_vars['rowData'][$this->_tpl_vars['col']] )): ?> 
							<?php echo smarty_function_counter(array('name' => 'oCount','assign' => 'oCount','start' => 0), $this);?>

							<?php $this->assign('vals', ((is_array($_tmp='^,^')) ? $this->_run_mod_handler('explode', true, $_tmp, $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]) : explode($_tmp, $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]))); ?>
							<?php $_from = $this->_tpl_vars['vals']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['item']):
?>
								<?php echo smarty_function_counter(array('name' => 'oCount'), $this);?>

								<?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['options'],'select' => $this->_tpl_vars['item']), $this); if ($this->_tpl_vars['oCount'] != count ( $this->_tpl_vars['vals'] )): ?>,<?php endif; ?> 
							<?php endforeach; endif; unset($_from); ?>	
						<?php endif; ?>
					<?php else: ?>	
						<?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>

					<?php endif; ?>
				</td>
				<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

			<?php endforeach; endif; unset($_from); ?>
			<?php if (! empty ( $this->_tpl_vars['quickViewLinks'] )): ?>
			<td width='1%' class='<?php echo $this->_tpl_vars['_rowColor']; ?>
S1' bgcolor='<?php echo $this->_tpl_vars['_bgColor']; ?>
' nowrap>
				<?php if ($this->_tpl_vars['pageData']['access']['edit']): ?>
					<a title='<?php echo $this->_tpl_vars['editLinkString']; ?>
' href="#" onMouseOver="javascript:lvg_nav('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo $this->_tpl_vars['pageData']['bean']['moduleDir'];  endif; ?>', '<?php echo $this->_tpl_vars['rowData']['ID']; ?>
', <?php if ($this->_tpl_vars['act']): ?>'<?php echo $this->_tpl_vars['act']; ?>
'<?php else: ?>'e'<?php endif; ?>, <?php echo $this->_tpl_vars['offset']; ?>
, this)" onFocus="javascript:lvg_nav('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo $this->_tpl_vars['pageData']['bean']['moduleDir'];  endif; ?>', '<?php echo $this->_tpl_vars['rowData']['ID']; ?>
', <?php if ($this->_tpl_vars['act']): ?>'<?php echo $this->_tpl_vars['act']; ?>
'<?php else: ?>'e'<?php endif; ?>, <?php echo $this->_tpl_vars['offset']; ?>
, this)">
					<img border=0 src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'edit_inline.gif'), $this);?>
'>
					</a>
				<?php endif; ?>
			</td>
	    	</tr>
			<?php endif; ?>
	 	<tr><td colspan='20' class='listViewHRS1'></td></tr>
	    
	<?php endforeach; endif; unset($_from);  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "include/ListView/ListViewPagination.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</table>
<?php if ($this->_tpl_vars['contextMenus']): ?>
<script>
	<?php echo $this->_tpl_vars['contextMenuScript']; ?>

<?php echo 'function lvg_nav(m,id,act,offset,t){if(t.href.search(/#/) < 0){return;}else{if(act==\'pte\'){act=\'ProjectTemplatesEditView\';}else if(act==\'d\'){ act=\'DetailView\';}else{ act=\'EditView\';}'; ?>
url = 'index.php?module='+m+'&offset=' + offset + '&stamp=<?php echo $this->_tpl_vars['pageData']['stamp']; ?>
&return_module='+m+'&action='+act+'&record='+id;t.href=url;<?php echo '}}'; ?>

<?php echo 'function lvg_dtails(id){'; ?>
return SUGAR.util.getAdditionalDetails( '<?php echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir'])); ?>
',id, 'adspan_'+id);<?php echo '}'; ?>

</script>
<?php endif; ?>