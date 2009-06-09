

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
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_NAME' module='Documents'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{if strlen($fields.document_name.value) <= 0}
{assign var="value" value=$fields.document_name.default_value }
{else}
{assign var="value" value=$fields.document_name.value }
{/if}  
<input type='text' name='{$fields.document_name.name}' id='{$fields.document_name.name}' size='20' maxlength='255' value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_FILENAME' module='Documents'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}
<input tabindex="0"  type="file" value="" maxlength="255" size="11" title="" name="uploadfile" id="uploadfile"/>
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_DOC_VERSION' module='Documents'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{if strlen($fields.revision.value) <= 0}
{assign var="value" value=$fields.revision.default_value }
{else}
{assign var="value" value=$fields.revision.value }
{/if}  
<input type='text' name='{$fields.revision.name}' id='{$fields.revision.name}' size='11'  value='{$value}' title='' tabindex='0' > 
</tr>
<tr>
<td valign="top" width='75%' class='tabEditViewDF'  NOWRAP>
{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Documents'}:
<span class="required">*</span>
<br>
{counter name="panelFieldCount"}

{assign var=date_value value=$fields.active_date.value }
<input autocomplete="off" type="text" name="{$fields.active_date.name}" id="{$fields.active_date.name}" value="{$date_value}" title=''  tabindex='0' size="11" maxlength="10">
<img border="0" src="themes/default/images/jscalendar.gif" alt="{$APP.LBL_ENTER_DATE}" id="{$fields.active_date.name}_trigger" align="absmiddle" />
<script type="text/javascript">
Calendar.setup ({ldelim}
inputField : "{$fields.active_date.name}",
daFormat : "{$CALENDAR_FORMAT}",
button : "{$fields.active_date.name}_trigger",
singleClick : true,
dateStr : "{$date_value}",
step : 1
{rdelim}
);
</script>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('form_SideQuickCreate_Documents');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Documents", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('form_SideQuickCreate_Documents', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'date_entered_date', 'date', false,'Ngày nhập' );
addToValidate('form_SideQuickCreate_Documents', 'date_modified_date', 'date', false,'Ngày chỉnh sủa' );
addToValidate('form_SideQuickCreate_Documents', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'document_name', 'varchar', true,'{/literal}{sugar_translate label='LBL_NAME' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'filename', 'file', false,'{/literal}{sugar_translate label='LBL_FILENAME' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'uploadfile', 'file', true,'{/literal}{sugar_translate label='LBL_FILENAME' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'active_date', 'date', true,'{/literal}{sugar_translate label='LBL_DOC_ACTIVE_DATE' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'exp_date', 'date', false,'{/literal}{sugar_translate label='LBL_DOC_EXP_DATE' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'category_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_CATEGORY' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'subcategory_id', 'enum', false,'{/literal}{sugar_translate label='LBL_SF_SUBCATEGORY' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'status_id', 'enum', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'status', 'varchar', false,'{/literal}{sugar_translate label='LBL_DOC_STATUS' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'document_revision_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_LATEST_REVISION' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'revision', 'varchar', true,'{/literal}{sugar_translate label='LBL_DOC_VERSION' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'last_rev_created_name', 'varchar', false,'{/literal}{sugar_translate label='LBL_LAST_REV_CREATOR' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'last_rev_mime_type', 'varchar', false,'{/literal}{sugar_translate label='LBL_LAST_REV_MIME_TYPE' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'latest_revision', 'varchar', false,'{/literal}{sugar_translate label='LBL_LATEST_REVISION' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'last_rev_create_date', 'date', false,'{/literal}{sugar_translate label='LBL_LAST_REV_CREATE_DATE' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'related_doc_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_RELATED_DOCUMENT_ID' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'related_doc_name', 'relate', false,'{/literal}{sugar_translate label='LBL_DET_RELATED_DOCUMENT' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'related_doc_rev_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_RELATED_DOCUMENT_REVISION_ID' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'related_doc_rev_number', 'varchar', false,'{/literal}{sugar_translate label='LBL_DET_RELATED_DOCUMENT_VERSION' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'is_template', 'bool', false,'{/literal}{sugar_translate label='LBL_IS_TEMPLATE' module='Documents'}{literal}' );
addToValidate('form_SideQuickCreate_Documents', 'template_type', 'enum', false,'{/literal}{sugar_translate label='LBL_TEMPLATE_TYPE' module='Documents'}{literal}' );
addToValidateBinaryDependency('form_SideQuickCreate_Documents', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Documents'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Documents'}{literal}', 'assigned_user_id' );
</script>{/literal}
