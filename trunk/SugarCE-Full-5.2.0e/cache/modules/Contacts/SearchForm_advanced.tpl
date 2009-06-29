
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
			{sugar_translate label='LBL_FIRST_NAME' module='Contacts'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.first_name_advanced.value) <= 0}
{assign var="value" value=$fields.first_name_advanced.default_value }
{else}
{assign var="value" value=$fields.first_name_advanced.value }
{/if}  
<input type='text' name='{$fields.first_name_advanced.name}' id='{$fields.first_name_advanced.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='' > 
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
			{sugar_translate label='LBL_LAST_NAME' module='Contacts'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.last_name_advanced.value) <= 0}
{assign var="value" value=$fields.last_name_advanced.default_value }
{else}
{assign var="value" value=$fields.last_name_advanced.value }
{/if}  
<input type='text' name='{$fields.last_name_advanced.name}' id='{$fields.last_name_advanced.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='' > 
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
			{sugar_translate label='LBL_ACCOUNT_NAME' module='Contacts'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<input type="text" name="{$fields.account_name_advanced.name}"  class= "sqsEnabled sqsNoAutofill"  tabindex="" id="{$fields.account_name_advanced.name}" size="30" value="{$fields.account_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.account_id_advanced.name}" value="{$fields.account_id_advanced.value}">

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
			{sugar_translate label='LBL_TITLE' module='Contacts'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{if strlen($fields.title_advanced.value) <= 0}
{assign var="value" value=$fields.title_advanced.default_value }
{else}
{assign var="value" value=$fields.title_advanced.value }
{/if}  
<input type='text' name='{$fields.title_advanced.name}' id='{$fields.title_advanced.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='' > 
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
			{sugar_translate label='LBL_LEAD_SOURCE' module='Contacts'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
{html_options name='lead_source_advanced[]' options=$fields.lead_source_advanced.options size="6" style='width:150' multiple="1" selected=$fields.lead_source_advanced.value}
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
			{sugar_translate label='LBL_CAMPAIGN' module='Contacts'}
		</td>
	<td class="dataField" nowrap="nowrap" width='30%'>
			
<input type="text" name="{$fields.campaign_name_advanced.name}"  class= "sqsEnabled sqsNoAutofill"  tabindex="" id="{$fields.campaign_name_advanced.name}" size="30" value="{$fields.campaign_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.campaign_id_advanced.name}" value="{$fields.campaign_id_advanced.value}">

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
		
		{sugar_translate label='LBL_ASSIGNED_TO' module='Contacts'}
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
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['modified_by_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['created_by_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['assigned_user_name_advanced']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['account_name_advanced']={"method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["account_name_advanced","account_id_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["account_id"],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['report_to_name_advanced']={"method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["report_to_name_advanced","reports_to_id_advanced","reports_to_id_advanced","reports_to_id_advanced"],"required_list":["reports_to_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['campaign_name_advanced']={"method":"query","modules":["Campaigns"],"group":"or","field_list":["name","id"],"populate_list":["campaign_name_advanced","campaign_id_advanced"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["campaign_id"],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}