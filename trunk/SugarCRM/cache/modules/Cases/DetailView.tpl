

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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Cases'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Cases'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Cases'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUP_MERGE}" accessKey="M" class="button" onclick="this.form.return_module.value='Cases'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='Step1'; this.form.module.value='MergeRecords';" type="submit" name="Merge" value="{$APP.LBL_DUP_MERGE}">{/if} 
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Cases", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align="right" width="100%">{$ADMIN_EDIT}</td>
</tr>
</table>{sugar_include include=$includes}
<div id='DEFAULT'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width='100%' border='0' cellspacing='{$gridline}' cellpadding='0'  class='tabDetailView'>
{$PAGINATION}
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_CASE_NUMBER' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.case_number.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.assigned_user_name.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_PRIORITY' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{ $fields.priority.options[$fields.priority.value]}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_STATUS' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.status.options[$fields.status.value]}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ACCOUNT_NAME' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.account_id.value)}<a href="index.php?module=Accounts&action=DetailView&record={$fields.account_id.value}" class="tabDetailViewDFLink">{/if}
{$fields.account_name.value}
{if !empty($fields.account_id.value)}</a>{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_TYPE' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{ $fields.type.options[$fields.type.value]}
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
{sugar_translate label='LBL_DATE_MODIFIED' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}
{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}&nbsp;	
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
{sugar_translate label='LBL_DATE_ENTERED' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}
{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}&nbsp;	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_SUBJECT' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{$fields.name.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{$fields.description.value|url2html|nl2br}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_RESOLUTION' module='Cases'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{$fields.resolution.value|url2html|nl2br}
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