

<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
<td style="padding-bottom: 2px;">
<input type="hidden" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
{else}
<input type="hidden" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="contact_role">
{if !empty($smarty.request.return_module)}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{else}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'></td>
</tr>
</table>{sugar_include include=$includes}
<table width="100%" cellspacing="0" cellpadding="0" class='tabDetailView' id='tabFormPagination'>
{$PAGINATION}
</table>
<div id="DEFAULT">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<tr>
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='30' maxlength='50' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='assigned_user_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="a" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.assigned_user_name.name}.value = ''; this.form.{$fields.assigned_user_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
</tr>
<tr>
<td valign="top" id='status_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_STATUS' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.status.name}" id="{$fields.status.name}" title='' tabindex="0"  >
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='start_date_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_START_DATE' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.start_date.value }
<input autocomplete="off" type="text" name="{$fields.start_date.name}" id="{$fields.start_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.start_date.name}_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.start_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.start_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='end_date_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_END_DATE' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.end_date.value }
<input autocomplete="off" type="text" name="{$fields.end_date.name}" id="{$fields.end_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.end_date.name}_trigger" align="absmiddle" />
&nbsp;(<span class="dateFormat">{$USER_DATEFORMAT}</span>)
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.end_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.end_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
<tr>
<td valign="top" id='campaign_type_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_TYPE' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.campaign_type.name}" id="{$fields.campaign_type.name}" title='' tabindex="0"  onchange="type_change();">
{if isset($fields.campaign_type.value) && $fields.campaign_type.value != ''}
{html_options options=$fields.campaign_type.options selected=$fields.campaign_type.value}
{else}
{html_options options=$fields.campaign_type.options selected=$fields.campaign_type.default}
{/if}
</select>
<td valign="top" id='frequency_label' width='12.5%' class="dataLabel">
<div style='none' id='freq_label'>{$MOD.LBL_CAMPAIGN_FREQUENCY}</div>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}
<div style='none' id='freq_field'>{html_options name="frequency" options=$fields.frequency.options selected=$fields.frequency.value}</div></TD>
</tr>
<tr>
<td valign="top" id='currency_id_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CURRENCY' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{$fields.currency_id.value}
<td valign="top" id='impressions_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_IMPRESSIONS' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.impressions.value) <= 0}
{assign var="value" value=$fields.impressions.default_value }
{else}
{assign var="value" value=$fields.impressions.value }
{/if}  
<input type='text' name='{$fields.impressions.name}' id='{$fields.impressions.name}' size='30'  value='{$value}' title='' tabindex='i' > 
</tr>
<tr>
<td valign="top" id='budget_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_BUDGET' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.budget.value) <= 0}
{assign var="value" value=$fields.budget.default_value }
{else}
{assign var="value" value=$fields.budget.value }
{/if}  
<input type='text' name='{$fields.budget.name}' id='{$fields.budget.name}' size='30'  value='{$value}' title='' tabindex='b' > 
<td valign="top" id='actual_cost_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_ACTUAL_COST' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.actual_cost.value) <= 0}
{assign var="value" value=$fields.actual_cost.default_value }
{else}
{assign var="value" value=$fields.actual_cost.value }
{/if}  
<input type='text' name='{$fields.actual_cost.name}' id='{$fields.actual_cost.name}' size='30'  value='{$value}' title='' tabindex='a' > 
</tr>
<tr>
<td valign="top" id='expected_revenue_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_EXPECTED_REVENUE' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.expected_revenue.value) <= 0}
{assign var="value" value=$fields.expected_revenue.default_value }
{else}
{assign var="value" value=$fields.expected_revenue.value }
{/if}  
<input type='text' name='{$fields.expected_revenue.name}' id='{$fields.expected_revenue.name}' size='30'  value='{$value}' title='' tabindex='e' > 
<td valign="top" id='expected_cost_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_EXPECTED_COST' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.expected_cost.value) <= 0}
{assign var="value" value=$fields.expected_cost.default_value }
{else}
{assign var="value" value=$fields.expected_cost.value }
{/if}  
<input type='text' name='{$fields.expected_cost.name}' id='{$fields.expected_cost.name}' size='30'  value='{$value}' title='' tabindex='e' > 
</tr>
<tr>
<td valign="top" id='objective_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_OBJECTIVE' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if empty($fields.objective.value)}
{assign var="value" value=$fields.objective.default_value }
{else}
{assign var="value" value=$fields.objective.value }
{/if}  
<textarea id="{$fields.objective.name}" name="{$fields.objective.name}" rows="8" cols="80" title='' tabindex="0">{$value}</textarea>
</tr>
<tr>
<td valign="top" id='content_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CAMPAIGN_CONTENT' module='Campaigns'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if empty($fields.content.value)}
{assign var="value" value=$fields.content.default_value }
{else}
{assign var="value" value=$fields.content.value }
{/if}  
<textarea id="{$fields.content.name}" name="{$fields.content.name}" rows="8" cols="80" title='' tabindex="0">{$value}</textarea>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Campaigns", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s=1e8f2d40166c464e1df5154c145d2471&c=1"></script>
<script type="text/javascript">
function type_change() {ldelim}
	type = document.getElementsByName('campaign_type');
	if(type[0].value=='NewsLetter') {ldelim}
		document.getElementById('freq_label').style.display = '';
		document.getElementById('freq_field').style.display = '';
	 {rdelim} else {ldelim}
		document.getElementById('freq_label').style.display = 'none';
		document.getElementById('freq_field').style.display = 'none';
	 {rdelim}
 {rdelim}
type_change();

function ConvertItems(id)  {ldelim}
	var items = new Array();

	//get the items that are to be converted
	expected_revenue = document.getElementById('expected_revenue');
	budget = document.getElementById('budget');
	actual_cost = document.getElementById('actual_cost');
	expected_cost = document.getElementById('expected_cost');

	//unformat the values of the items to be converted
	expected_revenue.value = unformatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = unformatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = unformatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = unformatNumber(actual_cost.value, num_grp_sep, dec_sep);

	//add the items to an array
	items[items.length] = expected_revenue;
	items[items.length] = budget;
	items[items.length] = expected_cost;
	items[items.length] = actual_cost;

	//call function that will convert currency
	ConvertRate(id, items);

	//Add formatting back to items
	expected_revenue.value = formatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = formatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = formatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = formatNumber(actual_cost.value, num_grp_sep, dec_sep);
 {rdelim}
</script>
<!-- End Meta-Data Javascript -->{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Campaigns'}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_NAME' module='Campaigns'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Entered' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Campaigns'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Campaigns'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Campaigns'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Campaigns'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Campaigns'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Campaigns'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Campaigns'}{literal}' );
addToValidate('EditView', 'tracker_key', 'int', true,'{/literal}{sugar_translate label='LBL_TRACKER_KEY' module='Campaigns'}{literal}' );
addToValidate('EditView', 'tracker_count', 'int', false,'{/literal}{sugar_translate label='LBL_TRACKER_COUNT' module='Campaigns'}{literal}' );
addToValidate('EditView', 'refer_url', 'varchar', false,'{/literal}{sugar_translate label='LBL_REFER_URL' module='Campaigns'}{literal}' );
addToValidate('EditView', 'tracker_text', 'varchar', false,'{/literal}{sugar_translate label='LBL_TRACKER_TEXT' module='Campaigns'}{literal}' );
addToValidate('EditView', 'start_date', 'date', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_START_DATE' module='Campaigns'}{literal}' );
addToValidate('EditView', 'end_date', 'date', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_END_DATE' module='Campaigns'}{literal}' );
addToValidate('EditView', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_STATUS' module='Campaigns'}{literal}' );
addToValidate('EditView', 'impressions', 'int', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_IMPRESSIONS' module='Campaigns'}{literal}' );
addToValidate('EditView', 'currency_id', 'id', false,'{/literal}{sugar_translate label='LBL_CURRENCY' module='Campaigns'}{literal}' );
addToValidate('EditView', 'budget', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_BUDGET' module='Campaigns'}{literal}' );
addToValidate('EditView', 'expected_cost', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_COST' module='Campaigns'}{literal}' );
addToValidate('EditView', 'actual_cost', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ACTUAL_COST' module='Campaigns'}{literal}' );
addToValidate('EditView', 'expected_revenue', 'currency', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_EXPECTED_REVENUE' module='Campaigns'}{literal}' );
addToValidate('EditView', 'campaign_type', 'enum', true,'{/literal}{sugar_translate label='LBL_CAMPAIGN_TYPE' module='Campaigns'}{literal}' );
addToValidate('EditView', 'objective', 'text', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_OBJECTIVE' module='Campaigns'}{literal}' );
addToValidate('EditView', 'content', 'text', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_CONTENT' module='Campaigns'}{literal}' );
addToValidate('EditView', 'frequency', 'enum', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_FREQUENCY' module='Campaigns'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Campaigns'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Campaigns'}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
