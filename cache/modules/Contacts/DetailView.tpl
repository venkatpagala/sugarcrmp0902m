

<form name="vcard" action="index.php"><input type="hidden" name="entryPoint" value="vCard"><input type="hidden" name="contact_id" value="{$fields.id.value}"><input type="hidden" name="module" value="Contacts"></form>
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
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='EditView';" type="submit" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='DetailView'; this.form.isDuplicate.value=true; this.form.action.value='EditView'; this.form.return_id.value='{$id}';" type="submit" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} 
{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='ListView'; this.form.action.value='Delete'; return confirm('{$APP.NTC_DELETE_CONFIRMATION}');" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}">{/if} 
{if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUP_MERGE}" accessKey="M" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$id}'; this.form.action.value='Step1'; this.form.module.value='MergeRecords';" type="submit" name="Merge" value="{$APP.LBL_DUP_MERGE}">{/if} 
<td style="padding-bottom: 2px;" align="left" NOWRAP>
<input title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" class="button" onclick="this.form.return_module.value='Contacts'; this.form.return_action.value='DetailView'; this.form.return_id.value='{$fields.id.value}'; this.form.action.value='Subscriptions'; this.form.module.value='Campaigns';" type="submit" name="Manage Subscriptions" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}">
</td>
</form>
</td>
<td style="padding-bottom: 2px;" align="left" NOWRAP>
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Contacts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
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
{sugar_translate label='LBL_NAME' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}
{$fields.full_name.value}&nbsp;&nbsp;<input type="button" class="button" name="vCardButton" value="{$MOD.LBL_VCARD}" onClick="document.vcard.submit();">	
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_OFFICE_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }
{sugar_phone value=$phone_value }
{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ACCOUNT_NAME' module='Contacts'}
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
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_MOBILE_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }
{sugar_phone value=$phone_value }
{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_LEAD_SOURCE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{ $fields.lead_source.options[$fields.lead_source.value]}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_HOME_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }
{sugar_phone value=$phone_value }
{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_CAMPAIGN' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.campaign_id.value)}<a href="index.php?module=Campaigns&action=DetailView&record={$fields.campaign_id.value}" class="tabDetailViewDFLink">{/if}
{$fields.campaign_name.value}
{if !empty($fields.campaign_id.value)}</a>{/if}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_OTHER_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.phone_other.value)}
{assign var="phone_value" value=$fields.phone_other.value }
{sugar_phone value=$phone_value }
{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_TITLE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.title.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_FAX_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.phone_fax.value)}
{assign var="phone_value" value=$fields.phone_fax.value }
{sugar_phone value=$phone_value }
{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DEPARTMENT' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.department.value}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_BIRTHDATE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.birthdate.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_REPORTS_TO' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.reports_to_id.value)}<a href="index.php?module=Contacts&action=DetailView&record={$fields.reports_to_id.value}" class="tabDetailViewDFLink">{/if}
{$fields.report_to_name.value}
{if !empty($fields.reports_to_id.value)}</a>{/if}
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ASSISTANT' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{$fields.assistant.value}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_SYNC_CONTACT' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if strval($fields.sync_contact.value) == "1" || strval($fields.sync_contact.value) == "yes" || strval($fields.sync_contact.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.sync_contact.name}" size="{$displayParams.size}" disabled="true" {$checked}>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ASSISTANT_PHONE' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if !empty($fields.assistant_phone.value)}
{assign var="phone_value" value=$fields.assistant_phone.value }
{sugar_phone value=$phone_value }
{/if}
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DO_NOT_CALL' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

{if strval($fields.do_not_call.value) == "1" || strval($fields.do_not_call.value) == "yes" || strval($fields.do_not_call.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.do_not_call.name}" size="{$displayParams.size}" disabled="true" {$checked}>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
&nbsp;
</td>
<td width='37.5%' class='tabDetailViewDF' >
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DATE_MODIFIED' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}
{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Contacts'}
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
{sugar_translate label='LBL_DATE_ENTERED' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}
{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_PRIMARY_ADDRESS' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' class="dataField">
{$fields.primary_address_street.value|nl2br}<br>
{$fields.primary_address_city.value} {$fields.primary_address_state.value}&nbsp;&nbsp;{$fields.primary_address_postalcode.value}<br>
{$fields.primary_address_country.value}
</td>
<td class='dataField' width='1%'>
{$custom_code_primary}
</td>
</tr>
</table>
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_ALTERNATE_ADDRESS' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}

<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' class="dataField">
{$fields.alt_address_street.value|nl2br}<br>
{$fields.alt_address_city.value} {$fields.alt_address_state.value}&nbsp;&nbsp;{$fields.alt_address_postalcode.value}<br>
{$fields.alt_address_country.value}
</td>
<td class='dataField' width='1%'>
{$custom_code_alt}
</td>
</tr>
</table>
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{if $PORTAL_ENABLED}{sugar_translate label="LBL_PORTAL_NAME" module="Contacts"}{/if}
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}
{if $PORTAL_ENABLED}{$fields.portal_name.value}{/if}	
&nbsp;
</td>
<td width='12.5%' class='tabDetailViewDL'>
{if $PORTAL_ENABLED}{sugar_translate label="LBL_PORTAL_ACTIVE" module="Contacts"}{/if}
</td>
<td width='37.5%' class='tabDetailViewDF' >
{counter name="panelFieldCount"}
{if $PORTAL_ENABLED}
{if strval($fields.portal_active.value) == "1" || strval($fields.portal_active.value) == "yes" || strval($fields.portal_active.value) == "on"}
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.portal_active.name}" size="{$displayParams.size}" disabled="true" {$checked}>
{/if}	
&nbsp;
</td>
</tr>
<tr>
<td width='12.5%' class='tabDetailViewDL'>
{capture name="label" assign="label"}
{sugar_translate label='LBL_DESCRIPTION' module='Contacts'}
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
{sugar_translate label='LBL_EMAIL_ADDRESS' module='Contacts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td width='37.5%' class='tabDetailViewDF' colspan='3'>
{counter name="panelFieldCount"}

{$fields.email1.value}
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