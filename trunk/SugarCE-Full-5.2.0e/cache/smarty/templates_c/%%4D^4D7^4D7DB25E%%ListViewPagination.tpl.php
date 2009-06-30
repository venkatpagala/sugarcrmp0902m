<?php /* Smarty version 2.6.11, created on 2009-06-30 14:29:05
         compiled from include/ListView/ListViewPagination.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimagepath', 'include/ListView/ListViewPagination.tpl', 62, false),)), $this); ?>
	<tr>
		<td colspan='<?php echo $this->_tpl_vars['colCount']+1; ?>
' align='right'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%'>
				<tr>
					<td class='listViewPaginationTdS1' nowrap>
						<?php echo $this->_tpl_vars['selectLink']; ?>

						<?php echo $this->_tpl_vars['deleteLink']; ?>

						<?php echo $this->_tpl_vars['exportLink']; ?>

						<?php echo $this->_tpl_vars['mergeLink']; ?>

						<?php echo $this->_tpl_vars['mergedupLink']; ?>

						<?php echo $this->_tpl_vars['favoritesLink']; ?>

						<?php echo $this->_tpl_vars['composeEmailLink']; ?>






						&nbsp;<?php echo $this->_tpl_vars['selectedObjectsSpan']; ?>
		
					</td>
					<td  align='right' nowrap='nowrap' id='listViewPaginationButtons' class='listViewPaginationTdS1' width='90%'>						
						<?php if ($this->_tpl_vars['pageData']['urls']['startPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(0, "<?php echo $this->_tpl_vars['moduleString']; ?>
");'<?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['startPage']; ?>
"' <?php endif; ?>>
								<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'start.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>
						<?php else: ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' class='button' disabled>
								<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'start_off.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['start']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['prevPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks(<?php echo $this->_tpl_vars['pageData']['offsets']['prev']; ?>
, "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['prevPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'previous.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>							
							</button>
						<?php else: ?>
							<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
'>
								<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'previous_off.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['previous']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
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
								<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'next.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
						<?php else: ?>
							<button type='button' class='button' title='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' disabled>
								<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'next_off.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['next']; ?>
' align='absmiddle' border='0' width='8' height='11'>
							</button>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['pageData']['urls']['endPage'] && $this->_tpl_vars['pageData']['offsets']['total'] != $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' class='button' <?php if ($this->_tpl_vars['prerow']): ?>onclick='return sListView.save_checks("end", "<?php echo $this->_tpl_vars['moduleString']; ?>
")' <?php else: ?> onClick='location.href="<?php echo $this->_tpl_vars['pageData']['urls']['endPage']; ?>
"'<?php endif; ?>>
								<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'end.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>							
							</button>
						<?php elseif (! $this->_tpl_vars['pageData']['offsets']['totalCounted'] || $this->_tpl_vars['pageData']['offsets']['total'] == $this->_tpl_vars['pageData']['offsets']['lastOffsetOnPage']): ?>
							<button type='button' class='button' disabled title='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
'>
							 	<img src='<?php echo smarty_function_sugar_getimagepath(array('file' => 'end_off.gif'), $this);?>
' alt='<?php echo $this->_tpl_vars['navStrings']['end']; ?>
' align='absmiddle' border='0' width='13' height='11'>
							</button>
						<?php endif; ?>
					</td>
				</tr>
			</table>
		</td>
	</tr>