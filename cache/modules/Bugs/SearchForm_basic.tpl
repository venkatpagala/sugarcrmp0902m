

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
			{sugar_translate label='LBL_NUMBER' module='Bugs'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.bug_number_basic.value) <= 0}
{assign var="value" value=$fields.bug_number_basic.default_value }
{else}
{assign var="value" value=$fields.bug_number_basic.value }
{/if}  
<input type='text' name='{$fields.bug_number_basic.name}' id='{$fields.bug_number_basic.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='' > 
   	




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
			{sugar_translate label='LBL_SUBJECT' module='Bugs'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.name_basic.value) <= 0}
{assign var="value" value=$fields.name_basic.default_value }
{else}
{assign var="value" value=$fields.name_basic.value }
{/if}  
<input type='text' name='{$fields.name_basic.name}' id='{$fields.name_basic.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='' > 
   	




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
		
		{sugar_translate label='LBL_CURRENT_USER_FILTER' module='Bugs'}
    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strval($fields.current_user_only_basic.value) == "1" || strval($fields.current_user_only_basic.value) == "yes" || strval($fields.current_user_only_basic.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="hidden" name="{$fields.current_user_only_basic.name}" value="0"> 
<input type="checkbox" id="{$fields.current_user_only_basic.name}" name="{$fields.current_user_only_basic.name}" value="1" title='' tabindex="" {$checked} >
   	




   	</td>
	</tr>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='{$IMG_PATH}help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={$IMG_PATH}close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
</table>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['modified_by_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['created_by_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['assigned_user_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['release_name_basic']={"method":"query","modules":["Releases"],"group":"or","field_list":["name","id"],"populate_list":["release_name_basic","found_in_release_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['fixed_in_release_name_basic']={"method":"query","modules":["Releases"],"group":"or","field_list":["name","id"],"populate_list":["fixed_in_release_name_basic","fixed_in_release_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}