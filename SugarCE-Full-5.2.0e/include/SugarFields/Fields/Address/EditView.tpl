{*
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004 - 2009 SugarCRM Inc.
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 * In accordance with Section 7(b) of the GNU General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
*}
<script type="text/javascript" src="include/SugarFields/Fields/Address/SugarFieldAddress.js"></script>
{{assign var="key" value=$displayParams.key|upper}}
{{assign var="street" value=$displayParams.key|cat:'_address_street'}}
{{assign var="city" value=$displayParams.key|cat:'_address_city'}}
{{assign var="state" value=$displayParams.key|cat:'_address_state'}}
{{assign var="country" value=$displayParams.key|cat:'_address_country'}}
{{assign var="postalcode" value=$displayParams.key|cat:'_address_postalcode'}}
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td valign="top" id="{{$street}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel">
{sugar_translate label='LBL_{{$key}}_ADDRESS' module='{{$module}}'}:
{{if $street|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
{{if $displayParams.maxlength}}
<textarea id="{{$street}}" name="{{$street}}" maxlength="{{$displayParams.maxlength}}" rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}" tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
{{else}}
<textarea id="{{$street}}" name="{{$street}}" rows="{{$displayParams.rows|default:4}}" cols="{{$displayParams.cols|default:60}}" tabindex="{{$tabindex}}">{$fields.{{$street}}.value}</textarea>
{{/if}}
</td>
</tr>	

<tr>
<td id="{{$city}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" >
{sugar_translate label='LBL_CITY' module='{{$module}}'}:
{{if $city|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$city}}" id="{{$city}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$city}}.value}' tabindex="{{$tabindex}}">
</td>
</tr>

<tr>
<td id="{{$state}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" >
{sugar_translate label='LBL_STATE' module='{{$module}}'}:
{{if $state|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$state}}" id="{{$state}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$state}}.value}' tabindex="{{$tabindex}}">
</td>
</tr>

<tr>
<td id="{{$postalcode}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" >
{sugar_translate label='LBL_POSTAL_CODE' module='{{$module}}'}:
{{if $postalcode|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$postalcode}}" id="{{$postalcode}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$postalcode}}.value}' tabindex="{{$tabindex}}">
</td>
</tr>

<tr>
<td id="{{$country}}_label" width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].label}}%' class="dataLabel" >
{sugar_translate label='LBL_COUNTRY' module='{{$module}}'}:
{{if $country|lower|in_array:$displayParams.required}}
<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span>
{{/if}}
</td>
<td width='{{$def.templateMeta.widths[$smarty.foreach.colIteration.index].field}}%' class='tabEditViewDF' >
<input type="text" name="{{$country}}" id="{{$country}}" size="{{$displayParams.size|default:30}}" {{if !empty($vardef.len)}}maxlength='{{$vardef.len}}'{{/if}} value='{$fields.{{$country}}.value}' tabindex="{{$tabindex}}">

</td>
</tr>

{{if $displayParams.copy}}
<tr>
<td>{sugar_translate label='LBL_COPY_ADDRESS_FROM_LEFT' module=''}:</td>
<td>
<input id="{{$displayParams.key}}_checkbox" name="{{$displayParams.key}}_checkbox" type="checkbox" onclick="syncFields('{{$displayParams.copy}}', '{{$displayParams.key}}');"; CHECKED>
</td>
</tr>
{{else}}
<tr>
<td colspan="2">&nbsp;</td>
</tr>
{{/if}}
</table>
<script type="text/javascript" language="javascript">
    var fromKey = '{{$displayParams.copy}}';
    var toKey = '{{$displayParams.key}}';
    var checkbox = toKey + "_checkbox";
    var obj = new TestCheckboxReady(checkbox); 
</script>
