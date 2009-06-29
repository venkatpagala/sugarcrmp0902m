<?php /* Smarty version 2.6.11, created on 2009-06-24 12:18:03
         compiled from modules/Emails/templates/advancedSearch.tpl */ ?>
<form name="advancedSearchForm" id="advancedSearchForm">
<table cellpadding="4" cellspacing="0" border="0">
	<tr>
		<th NOWRAP>
			<b><?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SEARCH__FROM_ACCOUNTS']; ?>
:</b> <select name="accountListSearch" id="accountListSearch" onchange="SUGAR.email2.search.accountListSearchChange(this)"></select>
		</td>
	</tr>
	<tr>
		<td>&nbsp;
		</td>
	</tr>
	
	<tr>
		<td NOWRAP>
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SUBJECT']; ?>
:<br>
			<input type="text" class="input" name="subject" id="searchSubject" size="20">
		</td>
	</tr>
	<tr>
		<td id="searchBodyDiv" style="display:''" NOWRAP>
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SEARCH_FULL_TEXT']; ?>
:<br>
			<input type="text" class="input" name="body" id="searchBody" size="20">
		</td>
	</tr>
	<tr>
		<td NOWRAP>
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_FROM']; ?>
:<br>
			<input type="text" class="input" name="from" id="searchFrom" size="20">
		</td>
	</tr>
	<tr>
		<td NOWRAP>
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_TO']; ?>
:<br>
			<input type="text" class="input" name="searchTo" id="searchTo" size="20">
		</td>
	</tr>

	<tr>
		<td NOWRAP>
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SEARCH_DATE_FROM']; ?>
:&nbsp;<i>(<?php echo $this->_tpl_vars['dateFormatExample']; ?>
)</i><br>
			<input name='dateFrom' id='searchDateFrom' onblur="parseDate(this, '<?php echo $this->_tpl_vars['dateFormat']; ?>
');" maxlength='10' size='11' value="" type="text">&nbsp;
			<img src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['app_strings']['LBL_ENTER_DATE']; ?>
" id="jscal_trigger_from" align="absmiddle">
		</td>
	</tr>

	<tr>
		<td NOWRAP>
			<?php echo $this->_tpl_vars['app_strings']['LBL_EMAIL_SEARCH_DATE_UNTIL']; ?>
:&nbsp;<i>(<?php echo $this->_tpl_vars['dateFormatExample']; ?>
)</i><br>
			<input name='dateTo' id='searchDateTo' onblur="parseDate(this, '<?php echo $this->_tpl_vars['dateFormat']; ?>
');" maxlength='10' size='11' value="" type="text">&nbsp;
			<img src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['app_strings']['LBL_ENTER_DATE']; ?>
" id="jscal_trigger_to" align="absmiddle">
		</td>
	</tr>
	<tr>
		<td NOWRAP>
			<br />&nbsp;<br />
		
			<input type="button" id="advancedSearchButton" class="button" onclick="SUGAR.email2.search.searchAdvanced()" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_SEARCH_BUTTON_LABEL']; ?>
   ">&nbsp;
			<input type="button" class="button" onclick="SUGAR.email2.search.searchClearAdvanced()" value="   <?php echo $this->_tpl_vars['app_strings']['LBL_CLEAR_BUTTON_LABEL']; ?>
   ">
		</td>
	</tr>
</table>
</form>