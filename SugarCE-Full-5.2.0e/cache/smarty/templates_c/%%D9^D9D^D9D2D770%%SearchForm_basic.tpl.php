<?php /* Smarty version 2.6.11, created on 2009-07-02 16:53:20
         compiled from cache/modules/HRM_Training/SearchForm_basic.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', 'cache/modules/HRM_Training/SearchForm_basic.tpl', 11, false),array('function', 'math', 'cache/modules/HRM_Training/SearchForm_basic.tpl', 12, false),array('function', 'sugar_translate', 'cache/modules/HRM_Training/SearchForm_basic.tpl', 22, false),array('function', 'html_options', 'cache/modules/HRM_Training/SearchForm_basic.tpl', 26, false),array('function', 'html_radios', 'cache/modules/HRM_Training/SearchForm_basic.tpl', 88, false),)), $this); ?>


<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 0px none; margin-bottom: 4px" class="tabForm">
<tr>






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FOR_MOIS','module' => 'HRM_Training'), $this);?>

    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php echo smarty_function_html_options(array('name' => 'for_mois_basic[]','options' => $this->_tpl_vars['fields']['for_mois_basic']['options'],'size' => '6','style' => 'width:150','multiple' => '1','selected' => $this->_tpl_vars['fields']['for_mois_basic']['value']), $this);?>

   	




   	</td>






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FOR_YEAR','module' => 'HRM_Training'), $this);?>

    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php if (strlen ( $this->_tpl_vars['fields']['for_year_basic']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['for_year_basic']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['for_year_basic']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['for_year_basic']['name']; ?>
' id='<?php echo $this->_tpl_vars['fields']['for_year_basic']['name']; ?>
' size='30' maxlength='11' value='<?php echo $this->_tpl_vars['value']; ?>
' title='' tabindex='' > 
   	




   	</td>






	<?php echo smarty_function_counter(array('assign' => 'index'), $this);?>

	<?php echo smarty_function_math(array('equation' => "left % right",'left' => $this->_tpl_vars['index'],'right' => $this->_tpl_vars['templateMeta']['maxColumns'],'assign' => 'modVal'), $this);?>

	<?php if (( $this->_tpl_vars['index'] % $this->_tpl_vars['templateMeta']['maxColumns'] == 1 && $this->_tpl_vars['index'] != 1 )): ?>
		</tr><tr>
	<?php endif; ?>
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		<?php echo smarty_function_sugar_translate(array('label' => 'LBL_FOR_DEDI','module' => 'HRM_Training'), $this);?>

    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<?php if (isset ( $this->_tpl_vars['fields']['for_dedi_basic']['value'] ) && $this->_tpl_vars['fields']['for_dedi_basic']['value'] != ''): ?>
	<?php echo smarty_function_html_radios(array('id' => 'for_dedi_basic','name' => 'for_dedi_basic','title' => "",'options' => $this->_tpl_vars['fields']['for_dedi_basic']['options'],'selected' => $this->_tpl_vars['fields']['for_dedi_basic']['value'],'separator' => "<br>"), $this);?>

<?php else: ?>
	<?php echo smarty_function_html_radios(array('id' => 'for_dedi_basic','name' => 'for_dedi_basic','title' => "",'options' => $this->_tpl_vars['fields']['for_dedi_basic']['options'],'selected' => $this->_tpl_vars['fields']['for_dedi_basic']['default'],'separator' => "<br>"), $this);?>

<?php endif; ?>
   	




   	</td>
	</tr>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='<?php echo $this->_tpl_vars['IMG_PATH']; ?>
help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src=<?php echo $this->_tpl_vars['IMG_PATH']; ?>
close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
</table><?php echo '<script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'modified_by_name_basic\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'created_by_name_basic\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'assigned_user_name_basic\']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};sqs_objects[\'hrm_employees_hrm_training_name_basic\']={"method":"query","modules":["HRM_Employees"],"group":"or","field_list":["name","id"],"populate_list":["hrm_employees_hrm_training_name_basic","hrm_employe_employees_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\\u00f4ng h\\u1ee3p"};</script>'; ?>