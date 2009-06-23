<?php /* Smarty version 2.6.11, created on 2009-06-23 15:38:23
         compiled from cache/modules/Campaigns/SearchForm_advanced.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/Campaigns/SearchForm_advanced.tpl', 11, false),array('function', 'math', 'cache/modules/Campaigns/SearchForm_advanced.tpl', 12, false),array('function', 'sugar_translate', 'cache/modules/Campaigns/SearchForm_advanced.tpl', 21, false),array('function', 'html_options', 'cache/modules/Campaigns/SearchForm_advanced.tpl', 144, false),)), $this); ?>

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 0px none; margin-bottom: 4px" class="tabForm">
<tr>
	






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_NAME','module' => 'Campaigns'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['name_advanced']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name_advanced']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name_advanced']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name_advanced']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name_advanced']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='' > 
   	   	</td>





	






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_START_DATE','module' => 'Campaigns'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php $this->assign('date_value', $this->_tpl_vars['fields']['start_date_advanced']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['start_date_advanced']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['start_date_advanced']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['start_date_advanced']['name']; ?>
_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>)
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['start_date_advanced']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['start_date_advanced']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>

   	   	</td>





	






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_END_DATE','module' => 'Campaigns'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php $this->assign('date_value', $this->_tpl_vars['fields']['end_date_advanced']['value']); ?>
<input autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['end_date_advanced']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['end_date_advanced']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" id="<?php echo $this->_tpl_vars['fields']['end_date_advanced']['name']; ?>
_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat"><?php echo $this->_tpl_vars['USER_DATEFORMAT']; ?>
</span>)
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['end_date_advanced']['name']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['end_date_advanced']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
step : 1
}
);
</script>

   	   	</td>





	






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_STATUS','module' => 'Campaigns'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php echo smarty_function_html_options(array('name' => 'status_advanced[]','options' => $this->_tpl_vars['fields']['status_advanced']['options'],'size' => '6','style' => 'width:150','multiple' => '1','selected' => $this->_tpl_vars['fields']['status_advanced']['value']), $this);?>

   	   	</td>





	






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CAMPAIGN_TYPE','module' => 'Campaigns'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php echo smarty_function_html_options(array('name' => 'campaign_type_advanced[]','options' => $this->_tpl_vars['fields']['campaign_type_advanced']['options'],'size' => '6','style' => 'width:150','multiple' => '1','selected' => $this->_tpl_vars['fields']['campaign_type_advanced']['value']), $this);?>

   	   	</td>





	






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Campaigns'), $this);?>

    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php echo smarty_function_html_options(array('name' => 'assigned_user_id_advanced[]','options' => $this->_tpl_vars['fields']['assigned_user_id_advanced']['options'],'size' => '6','style' => 'width:150','multiple' => '1','selected' => $this->_tpl_vars['fields']['assigned_user_id_advanced']['value']), $this);?>

   	   	</td>





	</tr>
<tr>
	<td colspan='20'>
		&nbsp;
	</td>
</tr>	
<?php if ($this->_tpl_vars['DISPLAY_SAVED_SEARCH']): ?>
<tr>
	<td colspan='6'>
		<a class='listViewTdLinkS1' onhover href='javascript:toggleInlineSearch()'><img src='<?php echo $this->_tpl_vars['IMG_PATH']; ?>
advanced_search.gif' id='up_down_img' border=0><?php echo $this->_tpl_vars['APP']['LNK_SAVED_VIEWS']; ?>
</a><br>
		<input type='hidden' id='showSSDIV' name='showSSDIV' value='<?php echo $this->_tpl_vars['SHOWSSDIV']; ?>
'><p>
		<div style='<?php echo $this->_tpl_vars['DISPLAYSS']; ?>
' id='inlineSavedSearch' >
			<?php echo $this->_tpl_vars['SAVED_SEARCH']; ?>

		</div>
	</td>
</tr>
<?php endif;  if ($this->_tpl_vars['DISPLAY_SEARCH_HELP']): ?>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='<?php echo $this->_tpl_vars['IMG_PATH']; ?>
help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src=<?php echo $this->_tpl_vars['IMG_PATH']; ?>
close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
<?php endif; ?>

</table>

<script>
<?php echo '
	if(typeof(loadSSL_Scripts)==\'function\'){
		loadSSL_Scripts();
	}
'; ?>
	
</script><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'modified_by_name_advanced\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'created_by_name_advanced\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'assigned_user_name_advanced\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>