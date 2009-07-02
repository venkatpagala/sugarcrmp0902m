

<table cellpadding="1" cellspacing="0" border="0" width="100%">
<tr>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<form action="index.php" method="post" name="DetailView" id="form">
<input type="hidden" name="module" value="{$module}">
<input type="hidden" name="record" value="{$fields.id.value}">
<input type="hidden" name="return_action">
<input type="hidden" name="return_module">
<input type="hidden" name="return_id"> 
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="offset" value="{$offset}">
<input type="hidden" name="action" value="EditView">
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Tasks'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Tasks'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Tasks'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
<td style="padding-bottom: 2px;" align="left" NOWRAP>
{if $fields.status.value != "Completed"} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}"  class="button"  onclick="this.form.action.value='Save'; this.form.return_module.value='Tasks'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value='EditView'; this.form.isDuplicate.value=true; this.form.return_id.value='{$fields.id.value}';"  name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
{if $fields.status.value != "Completed"} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value='Completed'; this.form.action.value='Save';this.form.return_module.value='Tasks';this.form.isSave.value=true;this.form.return_action.value='DetailView'; this.form.return_id.value='{$fields.id.value}'"  name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}
</td>
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Tasks", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}</td>
</tr>
</table>{sugar_include include=$includes}
<div id=''>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width='100%' border='0' cellspacing='{$gridline}' cellpadding='0'  class='tabDetailView'>
{$PAGINATION}
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_SUBJECT' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.name.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_STATUS' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.status.options[$fields.status.value]}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DUE_DATE' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.date_due.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{sugar_translate label='LBL_MODULE_NAME' module=$fields.parent_type.value}
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

<a href="index.php?module={$fields.parent_type.value}&action=DetailView&record={$fields.parent_id.value}" class="tabDetailViewDFLink">{$fields.parent_name.value}</a>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_START_DATE' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.date_start.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_CONTACT' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.contact_id.value)}<a href="index.php?module=Contacts&action=DetailView&record={$fields.contact_id.value}" class="tabDetailViewDFLink">{/if}
{$fields.contact_name.value}
{if !empty($fields.contact_id.value)}</a>{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_PRIORITY' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.priority.options[$fields.priority.value]}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_PHONE' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.contact_phone.value)}
{assign var="phone_value" value=$fields.contact_phone.value }
{sugar_phone value=$phone_value }
{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' >
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_EMAIL_ADDRESS' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.contact_email.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ASSIGNED_TO' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.assigned_user_name.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_MODIFIED' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}
{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_ENTERED' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}
{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='Tasks'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{$fields.description.value|url2html|nl2br}
&nbsp;
</td>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("panel_0").style.display='none';</script>
{/if}
<p>

</form>