

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
			{sugar_translate label='LBL_NAME' module='Documents'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.document_name_basic.value) <= 0}
{assign var="value" value=$fields.document_name_basic.default_value }
{else}
{assign var="value" value=$fields.document_name_basic.value }
{/if}  
<input type='text' name='{$fields.document_name_basic.name}' id='{$fields.document_name_basic.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='' > 
   	




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
			{sugar_translate label='LBL_SF_CATEGORY' module='Documents'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{html_options name='category_id_basic[]' options=$fields.category_id_basic.options size="6" style='width:150' multiple="1" selected=$fields.category_id_basic.value}
   	




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
			{sugar_translate label='LBL_SF_SUBCATEGORY' module='Documents'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{html_options name='subcategory_id_basic[]' options=$fields.subcategory_id_basic.options size="6" style='width:150' multiple="1" selected=$fields.subcategory_id_basic.value}
   	




   	</td>
	</tr>
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='{$IMG_PATH}help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={$IMG_PATH}close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
</table>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['modified_by_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['created_by_name_basic']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['related_doc_name_basic']={"method":"query","modules":["Documents"],"group":"or","field_list":["name","id"],"populate_list":["related_doc_name_basic","related_doc_id_basic"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}