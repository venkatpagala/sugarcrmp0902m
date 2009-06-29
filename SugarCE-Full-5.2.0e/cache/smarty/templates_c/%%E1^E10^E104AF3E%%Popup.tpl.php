<?php /* Smarty version 2.6.11, created on 2009-06-24 15:59:55
         compiled from cache/modules/Contacts/Popup.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getjspath', 'cache/modules/Contacts/Popup.tpl', 3, false),array('function', 'counter', 'cache/modules/Contacts/Popup.tpl', 131, false),array('function', 'sugar_translate', 'cache/modules/Contacts/Popup.tpl', 136, false),array('function', 'sugar_evalcolumn_old', 'cache/modules/Contacts/Popup.tpl', 182, false),array('function', 'sugar_currency_format', 'cache/modules/Contacts/Popup.tpl', 184, false),array('modifier', 'default', 'cache/modules/Contacts/Popup.tpl', 134, false),array('modifier', 'lower', 'cache/modules/Contacts/Popup.tpl', 136, false),)), $this); ?>


<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_3.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/JSON.js'), $this);?>
"></script>
<script type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/popup_helper.js'), $this);?>
"></script>
<script type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file' => 'include/javascript/sugar_grp_overlib.js'), $this);?>
'></script>
<script type="text/javascript">
	<?php echo $this->_tpl_vars['ASSOCIATED_JAVASCRIPT_DATA']; ?>

</script>
<?php echo $this->_tpl_vars['SEARCH_FORM_HEADER']; ?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="tabForm">
<tr>
<td>
<form action="index.php" method="post" name="popup_query_form" id="popup_query_form">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td>
<?php echo $this->_tpl_vars['searchForm']; ?>

</td></tr>
<tr>
<td style="padding-bottom: 2px;">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="query" value="true" />
<input type="hidden" name="func_name" value="" />
<input type="hidden" name="request_data" value="<?php echo $this->_tpl_vars['request_data']; ?>
" />
<input type="hidden" name="populate_parent" value="false" />
<input type="hidden" name="hide_clear_button" value="true" />
<input type="hidden" name="record_id" value="" />
<?php echo $this->_tpl_vars['MODE']; ?>

<input type="submit" name="button" class="button"
	title="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
"
	accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_KEY']; ?>
"
	value="<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
" />
</td>
<td align='right'></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<p>
<div id='addformlink'>
<input type="button" name="showAdd" class="button" value="<?php echo $this->_tpl_vars['popupMeta']['create']['createButton']; ?>
" onclick="toggleDisplay('addform');" />
</div>
<div id='addform' style='display:none;position:relative;z-index:2;left:0px;top:0px;'>
<form name="<?php echo $this->_tpl_vars['object_name']; ?>
Save" onsubmit="return check_form('<?php echo $this->_tpl_vars['object_name']; ?>
Save');" method="post" action="index.php">
<?php echo $this->_tpl_vars['ADDFORMHEADER']; ?>

<table cellpadding="0" cellspacing="0" border="0" width="100%" class="tabForm">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="doAction" value="save" />
<input type="hidden" name="query" value="true" />
<?php echo $this->_tpl_vars['ADDFORM']; ?>

</td></tr>
</table></td></tr></table>
</form>
</div>
</p>
<?php echo $this->_tpl_vars['jsLang']; ?>

<?php echo $this->_tpl_vars['LIST_HEADER']; ?>

<table cellpadding='0' cellspacing='0' width='100%' border='0' class='listView'>
	<tr>
		<td colspan='<?php echo $this->_tpl_vars['colCount']+1; ?>
' align='right'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%'>
				<tr>
					<td align='left' class='listViewPaginationTdS1'>
						&nbsp;</td>
					<td class='listViewPaginationTdS1' align='right' nowrap='nowrap' id='listViewPaginationButtons'>						
						<?php if ($this->_tpl_vars['pageData']['urls']['startPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>						
							<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(0, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
</a>&nbsp;-->
						<?php else: ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' disabled>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
&nbsp;&nbsp;-->
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['prevPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>							
							</button>
							<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
</a>&nbsp;-->
						<?php else: ?>
							<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
'>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
&nbsp;-->
						<?php endif; ?>
							<span class='pageNumbers'>(<?php if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] == 0): ?>0<?php else:  echo $this->_tpl_vars['pageData']['offsets']['current']+1;  endif; ?> - <?php echo $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']; ?>
 <?php echo $this->_tpl_vars['navStrings']['of']; ?>
 <?php if ($this->_tpl_vars['pageData']['offsets']['totalCounted']):  echo $this->_tpl_vars['pageData']['offsets']['total'];  else:  echo $this->_tpl_vars['pageData']['offsets']['total'];  if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] != $this->_tpl_vars['pageData']['offsets']['total']): ?>+<?php endif;  endif; ?>)</span>
						<?php if ($this->_tpl_vars['pageData']['urls']['nextPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;<a href='<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'></a>&nbsp;-->
						<?php else: ?>
							<button type='button' class='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>-->
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['endPage'] && $this->_tpl_vars['pageData']['offsets']['total'] != $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['end']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>							
							</button>
							<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['end']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'></a></td>-->
						<?php elseif (! $this->_tpl_vars['pageData']['offsets']['totalCounted'] || $this->_tpl_vars['pageData']['offsets']['total'] == $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
'>
							 	<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>-->
						<?php endif; ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>

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
	                <a href='#' onclick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['orderBy'];  echo ((is_array($_tmp=((is_array($_tmp=@$this->_tpl_vars['params']['orderBy'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['colHeader']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['colHeader'])))) ? $this->_run_mod_handler('lower', true, $_tmp) : smarty_modifier_lower($_tmp)); ?>
"; return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");' class='listViewThLinkS1'><?php echo smarty_function_sugar_translate(array('label' => $this->_tpl_vars['params']['label'],'module' => $this->_tpl_vars['pageData']['bean']['moduleDir']), $this);?>
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
		
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['rowIteration'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['rowIteration']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['id'] => $this->_tpl_vars['rowData']):
        $this->_foreach['rowIteration']['iteration']++;
?>
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
', '');" onmouseout="setPointer(this, '<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
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
					<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
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
 href='#' onclick="send_back('<?php if ($this->_tpl_vars['params']['dynamic_module']):  echo $this->_tpl_vars['rowData'][$this->_tpl_vars['params']['dynamic_module']];  else:  echo ((is_array($_tmp=@$this->_tpl_vars['params']['module'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['pageData']['bean']['moduleDir']));  endif; ?>','<?php echo ((is_array($_tmp=@$this->_tpl_vars['rowData'][$this->_tpl_vars['params']['id']])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['rowData']['ID']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['rowData']['ID'])); ?>
');"class='listViewTdLinkS1'><?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>
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
					
					<?php else: ?>	
						<?php echo $this->_tpl_vars['rowData'][$this->_tpl_vars['col']]; ?>

					<?php endif; ?>
				</td>
				<?php echo smarty_function_counter(array('name' => 'colCounter'), $this);?>

			<?php endforeach; endif; unset($_from); ?>
	 	<tr><td colspan='20' class='listViewHRS1'></td></tr>
	<?php endforeach; endif; unset($_from); ?>
	<tr>
		<td colspan='<?php echo $this->_tpl_vars['colCount']+1; ?>
' align='right'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%'>
				<tr>
					<td align='left' class='listViewPaginationTdS1'>
						&nbsp;</td>
					<td class='listViewPaginationTdS1' align='right' nowrap='nowrap' id='listViewPaginationButtons'>						
						<?php if ($this->_tpl_vars['pageData']['urls']['startPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>						
							<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(0, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
</a>&nbsp;-->
						<?php else: ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' disabled>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
start_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['start']; ?>
&nbsp;&nbsp;-->
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['prevPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>							
							</button>
							<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
</a>&nbsp;-->
						<?php else: ?>
							<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
'>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
previous_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>&nbsp;<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
&nbsp;-->
						<?php endif; ?>
							<span class='pageNumbers'>(<?php if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] == 0): ?>0<?php else:  echo $this->_tpl_vars['pageData']['offsets']['current']+1;  endif; ?> - <?php echo $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']; ?>
 <?php echo $this->_tpl_vars['navStrings']['of']; ?>
 <?php if ($this->_tpl_vars['pageData']['offsets']['totalCounted']):  echo $this->_tpl_vars['pageData']['offsets']['total'];  else:  echo $this->_tpl_vars['pageData']['offsets']['total'];  if ($this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage'] != $this->_tpl_vars['pageData']['offsets']['total']): ?>+<?php endif;  endif; ?>)</span>
						<?php if ($this->_tpl_vars['pageData']['urls']['nextPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;<a href='<?php echo $this->_tpl_vars['pageData']['urls']['nextPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['next']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'></a>&nbsp;-->
						<?php else: ?>
							<button type='button' class='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['next']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
next_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>-->
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['endPage'] && $this->_tpl_vars['pageData']['offsets']['total'] != $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['end']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>							
							</button>
							<!--<a href='<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
' <?php if ($this->_tpl_vars['prerow']): ?>onclick="return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['end']; ?>
, '<?php echo $this->_tpl_vars['moduleString']; ?>
')"<?php endif; ?> class='listViewPaginationLinkS1'><?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'></a></td>-->
						<?php elseif (! $this->_tpl_vars['pageData']['offsets']['totalCounted'] || $this->_tpl_vars['pageData']['offsets']['total'] == $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
'>
							 	<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--&nbsp;<?php echo $this->_tpl_vars['navStrings']['end']; ?>
&nbsp;<img src='<?php echo $this->_tpl_vars['imagePath']; ?>
end_off.gif' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>-->
						<?php endif; ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<?php if ($this->_tpl_vars['prerow']): ?>
<a class='listViewCheckLink' href='javascript:sListView.check_all(document.MassUpdate, "mass[]", false);'><?php echo $this->_tpl_vars['clearAll']; ?>
</a>
<script>
<?php echo 'function lvg_dtails(id){return SUGAR.util.getAdditionalDetails( \'';  echo $this->_tpl_vars['module'];  echo '\',id, \'adspan_\'+id);}'; ?>

</script>
<?php endif; ?>

<?php echo '
<script type="text/javascript">
<!--
/* initialize the popup request from the parent */

if(window.document.forms[\'popup_query_form\'].request_data.value == "")
{
	window.document.forms[\'popup_query_form\'].request_data.value
		= JSON.stringify(window.opener.get_popup_request_data());
}
-->
</script>
'; ?>