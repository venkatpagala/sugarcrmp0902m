

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
<input type="hidden" name="isSaveAndNew" value="false">   
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="document.getElementById('status').value='Completed'; this.form.action.value='Save'; this.form.return_module.value='Tasks'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value='EditView'; this.form.return_id.value='{$fields.id.value}'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Tasks", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='LBL_SUBJECT' module='Tasks'}
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
<td valign="top" id='status_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_STATUS' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.status.name}" id="{$fields.status.name}" title='' tabindex="1"  >
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='date_due_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DUE_DATE' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.date_due.name}_date" value="{$fields[$fields.date_due.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_due.name}.update(); ">
<input type="hidden" id="{$fields.date_due.name}" name="{$fields.date_due.name}" value="{$fields[$fields.date_due.name].value}">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.date_due.name}_trigger" align="absmiddle">&nbsp;
</td>
<td nowrap>
<div id="{$fields.date_due.name}_time_section"></div>
<script type="text/javascript">
function set_{$fields.date_due.name}_values(form) {ldelim}
 if(form.{$fields.date_due.name}_flag.checked)  {ldelim} 
	form.{$fields.date_due.name}_flag.value=1;
	form.{$fields.date_due.name}.value="";
	form.{$fields.date_due.name}.readOnly=true;
 {rdelim} else  {ldelim} 
	form.{$fields.date_due.name}_flag.value=0;
	form.{$fields.date_due.name}.readOnly=false;
 {rdelim} 
{rdelim}
</script>
</td>
</tr>
<tr valign="middle">
<td nowrap>
<span class="dateFormat">{$USER_DATEFORMAT}</span>
</td>
<td nowrap>
<span class="dateFormat">{$TIME_FORMAT}</span>
</td>
</tr>
</table>
<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
<script type="text/javascript">
var combo_{$fields.date_due.name} = new Datetimecombo("{$fields[$fields.date_due.name].value}", "{$fields.date_due.name}", "{$TIME_FORMAT}", 0, '1', '{$fields[$fields.date_due.name_flag].value}'); 
//Render the remaining widget fields
text = combo_{$fields.date_due.name}.html('');
document.getElementById('{$fields.date_due.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.date_due.name}.jsscript(''));
</script>
<script type="text/javascript">
function update_{$fields.date_due.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.date_due.name}_date", this.handleOnAvailable, this); 
{rdelim}

update_{$fields.date_due.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	Calendar.setup ({ldelim}
	onClose : update_{$fields.date_due.name},
	inputField : "{$fields.date_due.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.date_due.name}_trigger",
	singleClick : true,
	step : 1
	{rdelim});
	
	//Call update for first time to round hours and minute values
	combo_{$fields.date_due.name}.update();
{rdelim}

var obj_{$fields.date_due.name} = new update_{$fields.date_due.name}_available(); 
</script>
<td valign="top" id='parent_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_LIST_RELATED_TO' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name='parent_type' tabindex="p" id='parent_type' title='' onchange='document.{$form_name}.{$fields.parent_name.name}.value="";document.{$form_name}.parent_id.value=""; changeQS(); checkParentType(document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name});'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value}
</select>
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="sqsEnabled" tabindex="p" size="" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off">
<input type="hidden" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  {if $keepParent}value="{$fields.parent_id.value}"{/if}>
<input type="button" name="btn_{$fields.parent_name.name}" tabindex="p" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup(document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.parent_name.name}" tabindex="p" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
{literal}
<script type="text/javascript">
function changeQS() {
{/literal}
	new_module = document.{$form_name}.parent_type.value;
{literal}
	if(typeof(disabledModules[new_module]) != 'undefined') {
		sqs_objects['parent_name']['disable'] = true;
		document.getElementById('parent_name').readOnly = true;
	}
	else {
		sqs_objects['parent_name']['disable'] = false;
		document.getElementById('parent_name').readOnly = false;
	}	
	sqs_objects['parent_name']['modules'] = new Array(new_module);
    enableQS(false);
}
{/literal}
</script>
{literal}
<script>var disabledModules=[];</script>
{/literal}
</tr>
<tr>
<td valign="top" id='date_start_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_START_DATE' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="{$fields.date_start.name}_date" value="{$fields[$fields.date_start.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_start.name}.update(); ">
<input type="hidden" id="{$fields.date_start.name}" name="{$fields.date_start.name}" value="{$fields[$fields.date_start.name].value}">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.date_start.name}_trigger" align="absmiddle">&nbsp;
</td>
<td nowrap>
<div id="{$fields.date_start.name}_time_section"></div>
<script type="text/javascript">
function set_{$fields.date_start.name}_values(form) {ldelim}
 if(form.{$fields.date_start.name}_flag.checked)  {ldelim} 
	form.{$fields.date_start.name}_flag.value=1;
	form.{$fields.date_start.name}.value="";
	form.{$fields.date_start.name}.readOnly=true;
 {rdelim} else  {ldelim} 
	form.{$fields.date_start.name}_flag.value=0;
	form.{$fields.date_start.name}.readOnly=false;
 {rdelim} 
{rdelim}
</script>
</td>
</tr>
<tr valign="middle">
<td nowrap>
<span class="dateFormat">{$USER_DATEFORMAT}</span>
</td>
<td nowrap>
<span class="dateFormat">{$TIME_FORMAT}</span>
</td>
</tr>
</table>
<script type="text/javascript" src="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"></script>
<script type="text/javascript">
var combo_{$fields.date_start.name} = new Datetimecombo("{$fields[$fields.date_start.name].value}", "{$fields.date_start.name}", "{$TIME_FORMAT}", 0, '1', '{$fields[$fields.date_start.name_flag].value}'); 
//Render the remaining widget fields
text = combo_{$fields.date_start.name}.html('');
document.getElementById('{$fields.date_start.name}_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_{$fields.date_start.name}.jsscript(''));
</script>
<script type="text/javascript">
function update_{$fields.date_start.name}_available() {ldelim}
      YAHOO.util.Event.onAvailable("{$fields.date_start.name}_date", this.handleOnAvailable, this); 
{rdelim}

update_{$fields.date_start.name}_available.prototype.handleOnAvailable = function(me) {ldelim}
	Calendar.setup ({ldelim}
	onClose : update_{$fields.date_start.name},
	inputField : "{$fields.date_start.name}_date",
	ifFormat : "{$CALENDAR_FORMAT}",
	daFormat : "{$CALENDAR_FORMAT}",
	button : "{$fields.date_start.name}_trigger",
	singleClick : true,
	step : 1
	{rdelim});
	
	//Call update for first time to round hours and minute values
	combo_{$fields.date_start.name}.update();
{rdelim}

var obj_{$fields.date_start.name} = new update_{$fields.date_start.name}_available(); 
</script>
<td valign="top" id='contact_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_CONTACT_NAME' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.contact_name.name}" class="sqsEnabled" tabindex="c" id="{$fields.contact_name.name}" size="" value="{$fields.contact_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.contact_name.id_name}" id="{$fields.contact_name.id_name}" value="{$fields.contact_id.value}">
<input type="button" name="btn_{$fields.contact_name.name}" tabindex="c" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.contact_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"contact_id","last_name":"contact_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.contact_name.name}" tabindex="c" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.contact_name.name}.value = ''; this.form.{$fields.contact_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
</tr>
<tr>
<td valign="top" id='priority_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PRIORITY' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
<span class="required">*</span>
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.priority.name}" id="{$fields.priority.name}" title='' tabindex="0"  >
{if isset($fields.priority.value) && $fields.priority.value != ''}
{html_options options=$fields.priority.options selected=$fields.priority.value}
{else}
{html_options options=$fields.priority.options selected=$fields.priority.default}
{/if}
</select>
</tr>
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="a" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.assigned_user_name.name}" tabindex="a" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.assigned_user_name.name}.value = ''; this.form.{$fields.assigned_user_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
</tr>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DESCRIPTION' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="8" cols="60" title='' tabindex="0">{$value}</textarea>
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
{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="document.getElementById('status').value='Completed'; this.form.action.value='Save'; this.form.return_module.value='Tasks'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value='EditView'; this.form.return_id.value='{$fields.id.value}'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Tasks", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Tasks'}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_SUBJECT' module='Tasks'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Tasks'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Tasks'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Tasks'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Tasks'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Tasks'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Tasks'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Tasks'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Tasks'}{literal}' );
addToValidate('EditView', 'status', 'enum', true,'{/literal}{sugar_translate label='LBL_STATUS' module='Tasks'}{literal}' );
addToValidate('EditView', 'date_due_flag', 'bool', false,'{/literal}{sugar_translate label='LBL_DATE_DUE_FLAG' module='Tasks'}{literal}' );
addToValidate('EditView', 'date_due_date', 'date', false,'Due Date' );
addToValidate('EditView', 'time_due_date', 'date', false,'Due Time' );
addToValidate('EditView', 'date_due_field_date', 'date', false,'Due Date & Time' );
addToValidate('EditView', 'date_start_flag', 'bool', false,'{/literal}{sugar_translate label='LBL_DATE_START_FLAG' module='Tasks'}{literal}' );
addToValidate('EditView', 'date_start_date', 'date', false,'Start Date' );
addToValidate('EditView', 'date_start_field_date', 'date', false,'Due Date & Time' );
addToValidate('EditView', 'parent_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_PARENT_NAME' module='Tasks'}{literal}' );
addToValidate('EditView', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_LIST_RELATED_TO' module='Tasks'}{literal}' );
addToValidate('EditView', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Tasks'}{literal}' );
addToValidate('EditView', 'contact_id', 'id', false,'{/literal}{sugar_translate label='LBL_CONTACT_ID' module='Tasks'}{literal}' );
addToValidate('EditView', 'contact_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Tasks'}{literal}' );
addToValidate('EditView', 'contact_phone', 'phone', false,'{/literal}{sugar_translate label='LBL_CONTACT_PHONE' module='Tasks'}{literal}' );
addToValidate('EditView', 'contact_email', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Tasks'}{literal}' );
addToValidate('EditView', 'priority', 'enum', true,'{/literal}{sugar_translate label='LBL_PRIORITY' module='Tasks'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Tasks'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Tasks'}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'contact_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Tasks'}{literal}{/literal}{sugar_translate label='LBL_CONTACT_NAME' module='Tasks'}{literal}', 'contact_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['parent_name']={"method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['contact_name']={"method":"get_contact_array","modules":["Contacts"],"field_list":["salutation","first_name","last_name","id"],"populate_list":["contact_name","contact_id","contact_id","contact_id"],"required_list":["contact_id"],"group":"or","conditions":[{"name":"first_name","op":"like_custom","end":"%","value":""},{"name":"last_name","op":"like_custom","end":"%","value":""}],"order":"last_name","limit":"30","no_match_text":"No Match"};sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>{/literal}
