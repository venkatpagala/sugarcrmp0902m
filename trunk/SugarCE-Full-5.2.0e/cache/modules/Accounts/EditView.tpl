

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
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</td>
<td align='right'></td>
</tr>
</table>{sugar_include include=$includes}
<table width="100%" cellspacing="0" cellpadding="0" class='tabDetailView' id='tabFormPagination'>
{$PAGINATION}
</table>
<div id="LBL_ACCOUNT_INFORMATION">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_ACCOUNT_INFORMATION' module='Accounts'}</h4>
</th>
<tr>
<td valign="top" id='name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_NAME' module='Accounts'}
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
<input type='text' name='{$fields.name.name}' id='{$fields.name.name}' size='30' maxlength='150' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='phone_office_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PHONE_OFFICE' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.phone_office.value) <= 0}
{assign var="value" value=$fields.phone_office.default_value }
{else}
{assign var="value" value=$fields.phone_office.value }
{/if}  
<input type='text' name='{$fields.phone_office.name}' id='{$fields.phone_office.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='website_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_WEBSITE' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if !empty($fields.website.value)}
<input type='text' name='{$fields.website.name}' id='{$fields.website.name}' size='30' maxlength='255' value='{$fields.website.value}' title='' tabindex='0'>
{else}
<input type='text' name='{$fields.website.name}' id='{$fields.website.name}' size='30' maxlength='255' value='http://' title='' tabindex='0'>
{/if}
<td valign="top" id='phone_fax_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_PHONE_FAX' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.phone_fax.value) <= 0}
{assign var="value" value=$fields.phone_fax.default_value }
{else}
{assign var="value" value=$fields.phone_fax.value }
{/if}  
<input type='text' name='{$fields.phone_fax.name}' id='{$fields.phone_fax.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='ticker_symbol_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_TICKER_SYMBOL' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.ticker_symbol.value) <= 0}
{assign var="value" value=$fields.ticker_symbol.default_value }
{else}
{assign var="value" value=$fields.ticker_symbol.value }
{/if}  
<input type='text' name='{$fields.ticker_symbol.name}' id='{$fields.ticker_symbol.name}' size='30' maxlength='10' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='phone_alternate_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_OTHER_PHONE' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.phone_alternate.value) <= 0}
{assign var="value" value=$fields.phone_alternate.default_value }
{else}
{assign var="value" value=$fields.phone_alternate.value }
{/if}  
<input type='text' name='{$fields.phone_alternate.name}' id='{$fields.phone_alternate.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='parent_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_MEMBER_OF' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.parent_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.parent_name.name}" size="" value="{$fields.parent_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.parent_name.id_name}" id="{$fields.parent_name.id_name}" value="{$fields.parent_id.value}">
<input type="button" name="btn_{$fields.parent_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.parent_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.parent_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
<td valign="top" id='employees_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_EMPLOYEES' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.employees.value) <= 0}
{assign var="value" value=$fields.employees.default_value }
{else}
{assign var="value" value=$fields.employees.value }
{/if}  
<input type='text' name='{$fields.employees.name}' id='{$fields.employees.name}' size='30' maxlength='10' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='ownership_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_OWNERSHIP' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.ownership.value) <= 0}
{assign var="value" value=$fields.ownership.default_value }
{else}
{assign var="value" value=$fields.ownership.value }
{/if}  
<input type='text' name='{$fields.ownership.name}' id='{$fields.ownership.name}' size='30' maxlength='100' value='{$value}' title='' tabindex='0' > 
<td valign="top" id='rating_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_RATING' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.rating.value) <= 0}
{assign var="value" value=$fields.rating.default_value }
{else}
{assign var="value" value=$fields.rating.value }
{/if}  
<input type='text' name='{$fields.rating.name}' id='{$fields.rating.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='industry_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_INDUSTRY' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.industry.name}" id="{$fields.industry.name}" title='' tabindex="0"  >
{if isset($fields.industry.value) && $fields.industry.value != ''}
{html_options options=$fields.industry.options selected=$fields.industry.value}
{else}
{html_options options=$fields.industry.options selected=$fields.industry.default}
{/if}
</select>
<td valign="top" id='sic_code_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_SIC_CODE' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.sic_code.value) <= 0}
{assign var="value" value=$fields.sic_code.default_value }
{else}
{assign var="value" value=$fields.sic_code.value }
{/if}  
<input type='text' name='{$fields.sic_code.name}' id='{$fields.sic_code.name}' size='30' maxlength='10' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='account_type_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_TYPE' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<select name="{$fields.account_type.name}" id="{$fields.account_type.name}" title='' tabindex="0"  >
{if isset($fields.account_type.value) && $fields.account_type.value != ''}
{html_options options=$fields.account_type.options selected=$fields.account_type.value}
{else}
{html_options options=$fields.account_type.options selected=$fields.account_type.default}
{/if}
</select>
<td valign="top" id='annual_revenue_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_ANNUAL_REVENUE' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

{if strlen($fields.annual_revenue.value) <= 0}
{assign var="value" value=$fields.annual_revenue.default_value }
{else}
{assign var="value" value=$fields.annual_revenue.value }
{/if}  
<input type='text' name='{$fields.annual_revenue.name}' id='{$fields.annual_revenue.name}' size='30' maxlength='25' value='{$value}' title='' tabindex='1' > 
</tr>
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_ASSIGNED_TO' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

<input type="text" name="{$fields.assigned_user_name.name}" class="sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  >
<input type="hidden" name="{$fields.assigned_user_name.id_name}" id="{$fields.assigned_user_name.id_name}" value="{$fields.assigned_user_id.value}">
<input type="button" name="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{$APP.LBL_SELECT_BUTTON_TITLE}" accessKey="{$APP.LBL_SELECT_BUTTON_KEY}" class="button" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("{$fields.assigned_user_name.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal}, "single", true);'>
<input type="button" name="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{$APP.LBL_CLEAR_BUTTON_TITLE}" accessKey="{$APP.LBL_CLEAR_BUTTON_KEY}" class="button" onclick="this.form.{$fields.assigned_user_name.name}.value = ''; this.form.{$fields.assigned_user_name.id_name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_ACCOUNT_INFORMATION").style.display='none';</script>
{/if}
<p>
<div id="LBL_ADDRESS_INFORMATION">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_ADDRESS_INFORMATION' module='Accounts'}</h4>
</th>
<tr>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<script type="text/javascript" src="include/SugarFields/Fields/Address/SugarFieldAddress.js"></script>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" id="billing_address_street_label" width='%' class="dataLabel">
{sugar_translate label='LBL_BILLING_ADDRESS' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<textarea id="billing_address_street" name="billing_address_street" maxlength="150" rows="2" cols="30" tabindex="2">{$fields.billing_address_street.value}</textarea>
</td>
</tr>	
<tr>
<td id="billing_address_city_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_CITY' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="billing_address_city" id="billing_address_city" size="30" maxlength='150' value='{$fields.billing_address_city.value}' tabindex="2">
</td>
</tr>
<tr>
<td id="billing_address_state_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_STATE' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="billing_address_state" id="billing_address_state" size="30" maxlength='150' value='{$fields.billing_address_state.value}' tabindex="2">
</td>
</tr>
<tr>
<td id="billing_address_postalcode_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_POSTAL_CODE' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="billing_address_postalcode" id="billing_address_postalcode" size="30" maxlength='150' value='{$fields.billing_address_postalcode.value}' tabindex="2">
</td>
</tr>
<tr>
<td id="billing_address_country_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_COUNTRY' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="billing_address_country" id="billing_address_country" size="30" maxlength='150' value='{$fields.billing_address_country.value}' tabindex="2">
</td>
</tr>
<tr>
<td colspan="2">&nbsp;</td>
</tr>
</table>
<script type="text/javascript" language="javascript">
    var fromKey = '';
    var toKey = 'billing';
    var checkbox = toKey + "_checkbox";
    var obj = new TestCheckboxReady(checkbox); 
</script>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
{counter name="panelFieldCount"}

<script type="text/javascript" src="include/SugarFields/Fields/Address/SugarFieldAddress.js"></script>
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" id="shipping_address_street_label" width='%' class="dataLabel">
{sugar_translate label='LBL_SHIPPING_ADDRESS' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<textarea id="shipping_address_street" name="shipping_address_street" maxlength="150" rows="2" cols="30" tabindex="3">{$fields.shipping_address_street.value}</textarea>
</td>
</tr>	
<tr>
<td id="shipping_address_city_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_CITY' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="shipping_address_city" id="shipping_address_city" size="30" maxlength='150' value='{$fields.shipping_address_city.value}' tabindex="3">
</td>
</tr>
<tr>
<td id="shipping_address_state_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_STATE' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="shipping_address_state" id="shipping_address_state" size="30" maxlength='150' value='{$fields.shipping_address_state.value}' tabindex="3">
</td>
</tr>
<tr>
<td id="shipping_address_postalcode_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_POSTAL_CODE' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="shipping_address_postalcode" id="shipping_address_postalcode" size="30" maxlength='150' value='{$fields.shipping_address_postalcode.value}' tabindex="3">
</td>
</tr>
<tr>
<td id="shipping_address_country_label" width='%' class="dataLabel" >
{sugar_translate label='LBL_COUNTRY' module=''}:
</td>
<td width='%' class='tabEditViewDF' >
<input type="text" name="shipping_address_country" id="shipping_address_country" size="30" maxlength='150' value='{$fields.shipping_address_country.value}' tabindex="3">
</td>
</tr>
<tr>
<td>{sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:</td>
<td>
<input id="shipping_checkbox" name="shipping_checkbox" type="checkbox" onclick="syncFields('billing', 'shipping');"; CHECKED>
</td>
</tr>
</table>
<script type="text/javascript" language="javascript">
    var fromKey = 'billing';
    var toKey = 'shipping';
    var checkbox = toKey + "_checkbox";
    var obj = new TestCheckboxReady(checkbox); 
</script>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_ADDRESS_INFORMATION").style.display='none';</script>
{/if}
<p>
<div id="LBL_EMAIL_ADDRESSES">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_EMAIL_ADDRESSES' module='Accounts'}</h4>
</th>
<tr>
<td valign="top" id='email1_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_EMAIL' module='Accounts'}
{/capture}
{$label|strip_semicolon}:
</td>
<td valign="top" width='37.5%' class='tabEditViewDF' colspan='3' NOWRAP>
{counter name="panelFieldCount"}

{$fields.email1.value}
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_EMAIL_ADDRESSES").style.display='none';</script>
{/if}
<p>
<div id="LBL_DESCRIPTION_INFORMATION">
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}
<table width="100%" border="0" cellspacing="1" cellpadding="0"  class="{$def.templateMeta.panelClass|default:tabForm}">
<th class="dataLabel" align="left" colspan="8">
<h4>{sugar_translate label='LBL_DESCRIPTION_INFORMATION' module='Accounts'}</h4>
</th>
<tr>
<td valign="top" id='description_label' width='12.5%' class="dataLabel">
{capture name="label" assign="label}
{sugar_translate label='LBL_DESCRIPTION' module='Accounts'}
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
<textarea id="{$fields.description.name}" name="{$fields.description.name}" rows="6" cols="80" title='' tabindex="6">{$value}</textarea>
</tr>
<tr>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
<td valign="top" id='_label' width='12.5%' class="dataLabel">
</td>
<td valign="top" width='37.5%' class='tabEditViewDF'  NOWRAP>
</tr>
</table>
</div>
{if $panelFieldCount == 0}
<script>document.getElementById("LBL_DESCRIPTION_INFORMATION").style.display='none';</script>
{/if}
<p>

<div style="padding-top: 2px">
{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button" onclick="{if $isDuplicate}this.form.return_id.value=''; {/if}this.form.action.value='Save'; return check_form('EditView');" type="submit" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} 
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='DetailView'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="this.form.action.value='index'; this.form.module.value='{$smarty.request.return_module}'; this.form.record.value='{$smarty.request.return_id}';" type="submit" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"> {/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Accounts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="submit" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}{literal}
<script type="text/javascript">
num_grp_sep = ',';

						 dec_sep = '.';
addToValidate('EditView', 'id', 'id', false,'{/literal}{sugar_translate label='LBL_ID' module='Accounts'}{literal}' );
addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_NAME' module='Accounts'}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Ngày nhập' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Ngày sửa đổi' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED_ID' module='Accounts'}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Accounts'}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED_ID' module='Accounts'}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Accounts'}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Accounts'}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Accounts'}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Accounts'}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Accounts'}{literal}' );
addToValidate('EditView', 'account_type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='Accounts'}{literal}' );
addToValidate('EditView', 'industry', 'enum', false,'{/literal}{sugar_translate label='LBL_INDUSTRY' module='Accounts'}{literal}' );
addToValidate('EditView', 'annual_revenue', 'varchar', false,'{/literal}{sugar_translate label='LBL_ANNUAL_REVENUE' module='Accounts'}{literal}' );
addToValidate('EditView', 'phone_fax', 'phone', false,'{/literal}{sugar_translate label='LBL_FAX' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_2' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_3' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_street_4', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STREET_4' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_CITY' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_STATE' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_POSTALCODE' module='Accounts'}{literal}' );
addToValidate('EditView', 'billing_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_BILLING_ADDRESS_COUNTRY' module='Accounts'}{literal}' );
addToValidate('EditView', 'rating', 'varchar', false,'{/literal}{sugar_translate label='LBL_RATING' module='Accounts'}{literal}' );
addToValidate('EditView', 'phone_office', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_OFFICE' module='Accounts'}{literal}' );
addToValidate('EditView', 'phone_alternate', 'phone', false,'{/literal}{sugar_translate label='LBL_PHONE_ALT' module='Accounts'}{literal}' );
addToValidate('EditView', 'website', 'varchar', false,'{/literal}{sugar_translate label='LBL_WEBSITE' module='Accounts'}{literal}' );
addToValidate('EditView', 'ownership', 'varchar', false,'{/literal}{sugar_translate label='LBL_OWNERSHIP' module='Accounts'}{literal}' );
addToValidate('EditView', 'employees', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMPLOYEES' module='Accounts'}{literal}' );
addToValidate('EditView', 'ticker_symbol', 'varchar', false,'{/literal}{sugar_translate label='LBL_TICKER_SYMBOL' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_street', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_street_2', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_2' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_street_3', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_3' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_street_4', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STREET_4' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_city', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_CITY' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_state', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_STATE' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_postalcode', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_POSTALCODE' module='Accounts'}{literal}' );
addToValidate('EditView', 'shipping_address_country', 'varchar', false,'{/literal}{sugar_translate label='LBL_SHIPPING_ADDRESS_COUNTRY' module='Accounts'}{literal}' );
addToValidate('EditView', 'email1', 'varchar', false,'{/literal}{sugar_translate label='LBL_EMAIL' module='Accounts'}{literal}' );
addToValidate('EditView', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ACCOUNT_ID' module='Accounts'}{literal}' );
addToValidate('EditView', 'sic_code', 'varchar', false,'{/literal}{sugar_translate label='LBL_SIC_CODE' module='Accounts'}{literal}' );
addToValidate('EditView', 'parent_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MEMBER_OF' module='Accounts'}{literal}' );
addToValidate('EditView', 'email_opt_out', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_OPT_OUT' module='Accounts'}{literal}' );
addToValidate('EditView', 'invalid_email', 'bool', false,'{/literal}{sugar_translate label='LBL_INVALID_EMAIL' module='Accounts'}{literal}' );
addToValidate('EditView', 'campaign_id', 'id', false,'{/literal}{sugar_translate label='LBL_CAMPAIGN_ID' module='Accounts'}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts'}{literal}{/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Accounts'}{literal}', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'parent_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Accounts'}{literal}{/literal}{sugar_translate label='LBL_MEMBER_OF' module='Accounts'}{literal}', 'parent_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['parent_name']={"method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"required_list":["parent_id"],"order":"name","limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};sqs_objects['assigned_user_name']={"method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kh\u00f4ng h\u1ee3p"};</script>{/literal}
