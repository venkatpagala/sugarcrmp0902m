<?php /* Smarty version 2.6.11, created on 2009-06-30 14:48:49
         compiled from cache/modules/Opportunities/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/Opportunities/SearchForm_basic.tpl', 11, false),array('function', 'math', 'cache/modules/Opportunities/SearchForm_basic.tpl', 12, false),array('function', 'sugar_translate', 'cache/modules/Opportunities/SearchForm_basic.tpl', 21, false),array('function', 'html_options', 'cache/modules/Opportunities/SearchForm_basic.tpl', 57, false),)), $this); ?>


<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 0px none; margin-bottom: 4px" class="tabForm">
<tr>






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_OPPORTUNITY_NAME','module' => 'Opportunities'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['name_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name_basic']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['name_basic']['name']; ?>
' size='30' maxlength='50' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='' > 
   	




   	</td>






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_TYPE','module' => 'Opportunities'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php echo smarty_function_html_options(array('name' => 'opportunity_type_basic[]','options' => $this->_tpl_vars['fields']['opportunity_type_basic']['options'],'size' => '6','style' => 'width:150','multiple' => '1','selected' => $this->_tpl_vars['fields']['opportunity_type_basic']['value']), $this);?>

   	




   	</td>






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
			<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCOUNT_NAME','module' => 'Opportunities'), $this);?>

		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<input type="text" name="<?php echo $this->_tpl_vars['fields']['account_name_basic']['name']; ?>
"  class="sqsEnabled" tabindex="" id="<?php echo $this->_tpl_vars['fields']['account_name_basic']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['account_name_basic']['value']; ?>
" title='' autocomplete="off"  >
<input type="hidden"  id="<?php echo $this->_tpl_vars['fields']['account_id_basic']['name']; ?>
" value="<?php echo $this->_tpl_vars['fields']['account_id_basic']['value']; ?>
">
<input type="button" name="btn_<?php echo $this->_tpl_vars['fields']['account_name_basic']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_KEY']; ?>
" class="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SELECT_BUTTON_LABEL']; ?>
" onclick='open_popup("<?php echo $this->_tpl_vars['fields']['account_name_basic']['module']; ?>
", 600, 400, "", true, false, <?php echo '{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"account_id_basic","name":"account_name_basic"}}'; ?>
, "single", true);'>
<input type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['account_name_basic']['name']; ?>
" tabindex="" title="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_KEY']; ?>
" class="button" onclick="this.form.<?php echo $this->_tpl_vars['fields']['account_name_basic']['name']; ?>
.value = ''; this.form.<?php echo $this->_tpl_vars['fields']['account_id_basic']['name']; ?>
.value = '';" value="<?php echo $this->_tpl_vars['APP']['LBL_CLEAR_BUTTON_LABEL']; ?>
">

   	




   	</td>






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_CURRENT_USER_FILTER','module' => 'Opportunities'), $this);?>

    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php if (strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['current_user_only_basic']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" name="<?php echo $this->_tpl_vars['fields']['current_user_only_basic']['name']; ?>
" value="1" title='' tabindex="" <?php echo $this->_tpl_vars['checked']; ?>
 >
   	




   	</td>
	</tr>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='<?php echo $this->_tpl_vars['IMG_PATH']; ?>
help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src=<?php echo $this->_tpl_vars['IMG_PATH']; ?>
close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
</table><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'modified_by_name_basic\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'created_by_name_basic\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'assigned_user_name_basic\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'account_name_basic\']={"method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["account_name_basic","account_id_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'campaign_name_basic\']={"method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["campaign_name_basic","campaign_id_basic"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'currency_name_basic\']={"method":"query","modules":["Currencies"],"group":"or","field_list":["name","id"],"populate_list":["currency_name_basic","currency_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>