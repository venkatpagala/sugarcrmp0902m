<?php /* Smarty version 2.6.11, created on 2009-06-08 22:27:09
         compiled from cache/modules/Contacts/SearchFormFooter.tpl */ ?>

<input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_TITLE']; ?>
' accessKey='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_KEY']; ?>
' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='<?php echo $this->_tpl_vars['APP']['LBL_SEARCH_BUTTON_LABEL']; ?>
' id='search_form_submit'/>&nbsp;
<input tabindex='2' title='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
' accessKey='<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
' onclick='SUGAR.searchForm.clear_form(this.form);' class='button' type='button' name='clear' value=' <?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
 '/>
<?php if ($this->_tpl_vars['DOCUMENTS_MODULE']): ?>
&nbsp;<input title="<?php echo $this->_tpl_vars['APP']['LBL_BROWSE_DOCUMENTS_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_BROWSE_DOCUMENTS_BUTTON_KEY']; ?>
" type="button" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_BROWSE_DOCUMENTS_BUTTON_LABEL']; ?>
" onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");' />
<?php endif; ?>
<span class='white-space'>
	&nbsp;&nbsp;&nbsp;<?php if ($this->_tpl_vars['SAVED_SEARCHES_OPTIONS']): ?>|&nbsp;&nbsp;&nbsp;<b><?php echo $this->_tpl_vars['APP']['LBL_SAVED_SEARCH_SHORTCUT']; ?>
</b>&nbsp;
	<?php echo $this->_tpl_vars['SAVED_SEARCHES_OPTIONS']; ?>
 <?php endif; ?>
	<span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'  onclick='SUGAR.searchForm.clear_form(this.form);' class='button' type='button' name='go_select' value=' <?php echo $this->_tpl_vars['APP']['LBL_GO_BUTTON_LABEL']; ?>
 '/></span>	
</span>
</form>
<?php echo '
<script>
	function toggleInlineSearch(){
		if (document.getElementById(\'inlineSavedSearch\').style.display == \'none\'){
			document.getElementById(\'showSSDIV\').value = \'yes\'		
			document.getElementById(\'inlineSavedSearch\').style.display = \'\';
'; ?>
			
			document.getElementById('up_down_img').src='<?php echo $this->_tpl_vars['IMG_PATH']; ?>
basic_search.gif';
<?php echo '
		}else{
'; ?>
			
			document.getElementById('up_down_img').src='<?php echo $this->_tpl_vars['IMG_PATH']; ?>
advanced_search.gif';
<?php echo '			
			document.getElementById(\'showSSDIV\').value = \'no\';		
			document.getElementById(\'inlineSavedSearch\').style.display = \'none\';		
		}
	}


</script>
'; ?>