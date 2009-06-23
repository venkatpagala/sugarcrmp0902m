
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
			{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.name_advanced.value) <= 0}
{assign var="value" value=$fields.name_advanced.default_value }
{else}
{assign var="value" value=$fields.name_advanced.value }
{/if}  
<input type='text' name='{$fields.name_advanced.name}' id='{$fields.name_advanced.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='' > 
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
			{sugar_translate label='LBL_CAMPAIGN_START_DATE' module='Campaigns'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{assign var=date_value value=$fields.start_date_advanced.value }
<input autocomplete="off" type="text" name="{$fields.start_date_advanced.name}" id="{$fields.start_date_advanced.name}" value="{$date_value}" title=''  tabindex='' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.start_date_advanced.name}_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.start_date_advanced.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.start_date_advanced.name}_trigger",
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
			{sugar_translate label='LBL_CAMPAIGN_END_DATE' module='Campaigns'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{assign var=date_value value=$fields.end_date_advanced.value }
<input autocomplete="off" type="text" name="{$fields.end_date_advanced.name}" id="{$fields.end_date_advanced.name}" value="{$date_value}" title=''  tabindex='' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.end_date_advanced.name}_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.end_date_advanced.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.end_date_advanced.name}_trigger",
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
			{sugar_translate label='LBL_CAMPAIGN_STATUS' module='Campaigns'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{html_options name='status_advanced[]' options=$fields.status_advanced.options size="6" style='width:150' multiple="1" selected=$fields.status_advanced.value}
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
			{sugar_translate label='LBL_CAMPAIGN_TYPE' module='Campaigns'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{html_options name='campaign_type_advanced[]' options=$fields.campaign_type_advanced.options size="6" style='width:150' multiple="1" selected=$fields.campaign_type_advanced.value}
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
		
		{sugar_translate label='LBL_ASSIGNED_TO' module='Campaigns'}
    	</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{html_options name='assigned_user_id_advanced[]' options=$fields.assigned_user_id_advanced.options size="6" style='width:150' multiple="1" selected=$fields.assigned_user_id_advanced.value}
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
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['modified_by_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['created_by_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['assigned_user_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}