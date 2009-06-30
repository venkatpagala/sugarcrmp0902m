

<table width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 0px none; margin-bottom: 4px" class="tabForm">
<tr>






	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_EMPLOYEE' module='HRM_Bonus'}
    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<input type="text" name="{$fields.hrm_employees_hrm_bonus_name_basic.name}"  class="sqsEnabled" tabindex="" id="{$fields.hrm_employees_hrm_bonus_name_basic.name}" size="" value="{$fields.hrm_employees_hrm_bonus_name_basic.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.hrm_employe_employees_ida_basic.name}" value="{$fields.hrm_employe_employees_ida_basic.value}">
<input type="button" name="btn_{$fields.hrm_employees_hrm_bonus_name_basic.name}" tabindex="" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.hrm_employees_hrm_bonus_name_basic.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"hrm_employe_employees_ida_basic","name":"hrm_employees_hrm_bonus_name_basic"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.hrm_employees_hrm_bonus_name_basic.name}" tabindex="" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.hrm_employees_hrm_bonus_name_basic.name}.value = ''; this.form.{$fields.hrm_employe_employees_ida_basic.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">

   	




   	</td>






	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_BON_VALI' module='HRM_Bonus'}
    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval($fields.bon_vali_basic.value) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval($fields.bon_vali_basic.value) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="{$fields.bon_vali_basic.name}" name="{$fields.bon_vali_basic.name}" tabindex="" >
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>

   	




   	</td>






	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_BON_PAID' module='HRM_Bonus'}
    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval($fields.bon_paid_basic.value) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval($fields.bon_paid_basic.value) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="{$fields.bon_paid_basic.name}" name="{$fields.bon_paid_basic.name}" tabindex="" >
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>

   	




   	</td>






	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_BON_MOIS' module='HRM_Bonus'}
    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{html_options name='bon_mois_basic[]' options=$fields.bon_mois_basic.options size="6" style='width:150' multiple="1" selected=$fields.bon_mois_basic.value}
   	




   	</td>






	{counter assign=index}
	{math equation="left % right"
   		  left=$index
          right=$templateMeta.maxColumns
          assign=modVal
    }
	{if ($index % $templateMeta.maxColumns == 1 && $index != 1)}
		</tr><tr>
	{/if}
	
	<td class="dataLabel" nowrap="nowrap" width='10%' >
		
		{sugar_translate label='LBL_BON_YEAR' module='HRM_Bonus'}
    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.bon_year_basic.value) <= 0}
{assign var="value" value=$fields.bon_year_basic.default_value }
{else}
{assign var="value" value=$fields.bon_year_basic.value }
{/if}  
<input type='text' name='{$fields.bon_year_basic.name}' id='{$fields.bon_year_basic.name}' size='30' maxlength='11' value='{$value}' title='' tabindex='' > 
   	




   	</td>
	</tr>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='{$IMG_PATH}help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={$IMG_PATH}close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
</table>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['modified_by_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['created_by_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['assigned_user_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['hrm_employees_hrm_bonus_name_basic']={"method":"query","modules":["HRM_Employees"],"group":"or","field_list":["name","id"],"populate_list":["hrm_employees_hrm_bonus_name_basic","hrm_employe_employees_ida_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}