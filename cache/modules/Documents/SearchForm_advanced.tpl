
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
			
{if strlen($fields.document_name_advanced.value) <= 0}
{assign var="value" value=$fields.document_name_advanced.default_value }
{else}
{assign var="value" value=$fields.document_name_advanced.value }
{/if}  
<input type='text' name='{$fields.document_name_advanced.name}' id='{$fields.document_name_advanced.name}' size='30' maxlength='255' value='{$value}' title='' tabindex='' > 
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
			
{html_options name='category_id_advanced[]' options=$fields.category_id_advanced.options size="6" style='width:150' multiple="1" selected=$fields.category_id_advanced.value}
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
			
{html_options name='subcategory_id_advanced[]' options=$fields.subcategory_id_advanced.options size="6" style='width:150' multiple="1" selected=$fields.subcategory_id_advanced.value}
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
			{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Documents'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{assign var=date_value value=$fields.active_date_advanced.value }
<input autocomplete="off" type="text" name="{$fields.active_date_advanced.name}" id="{$fields.active_date_advanced.name}" value="{$date_value}" title=''  tabindex='' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.active_date_advanced.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.active_date_advanced.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.active_date_advanced.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>

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
			{sugar_translate label='LBL_DOC_EXP_DATE' module='Documents'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{assign var=date_value value=$fields.exp_date_advanced.value }
<input autocomplete="off" type="text" name="{$fields.exp_date_advanced.name}" id="{$fields.exp_date_advanced.name}" value="{$date_value}" title=''  tabindex='' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.exp_date_advanced.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.exp_date_advanced.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.exp_date_advanced.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>

   	   	</td>





	</tr>
<tr>
	<td colspan='20'>
		&nbsp;
	</td>
</tr>	
{if $DISPLAY_SAVED_SEARCH}
<tr>
	<td colspan='6'>
		<a class='listViewTdLinkS1' onhover href='javascript:toggleInlineSearch()'><img src='{$IMG_PATH}advanced_search.gif' id='up_down_img' border=0>{$APP.LNK_SAVED_VIEWS}</a><br>
		<input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'><p>
		<div style='{$DISPLAYSS}' id='inlineSavedSearch' >
			{$SAVED_SEARCH}
		</div>
	</td>
</tr>
{/if}
{if $DISPLAY_SEARCH_HELP}
<tr>
	<td colspan='5'>&nbsp;</td>
	<td align=right><img  border='0' src='{$IMG_PATH}help.gif' onmouseover="return overlib(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'), STICKY, MOUSEOFF,1000,WIDTH, 700, LEFT,CAPTION,'<div style=\'float:left\'>'+SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE')+'</div>', CLOSETEXT, '<div style=\'float: right\'><img border=0 style=\'margin-left:2px; margin-right: 2px;\' src={$IMG_PATH}close.gif></div>',CLOSETITLE, SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_CLOSE_TOOLTIP'), CLOSECLICK,FGCLASS, 'olFgClass', CGCLASS, 'olCgClass', BGCLASS, 'olBgClass', TEXTFONTCLASS, 'olFontClass', CAPTIONFONTCLASS, 'olCapFontClass');" ></td>
</tr>
{/if}

</table>

<script>
{literal}
	if(typeof(loadSSL_Scripts)=='function'){
		loadSSL_Scripts();
	}
{/literal}	
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['modified_by_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['created_by_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['related_doc_name_advanced']={"method":"query","modules":["Documents"],"group":"or","field_list":["name","id"],"populate_list":["related_doc_name_advanced","related_doc_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>{/literal}