<!--
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
/*********************************************************************************

 ********************************************************************************/
-->

<script type="text/javascript" src="include/JSON.js"></script>
<script type="text/javascript" src="include/javascript/popup_helper.js"></script>
<script type="text/javascript">
<!--
/* initialize the popup request from the parent */
{literal}

{/literal}
-->
</script>
<table cellpadding="0" cellspacing="0" width="100%" border="0" class="listView">
	
	<tr height="20">
	<td scope="col" width="1%" class="listViewThS1">{$CHECKALL}&nbsp;</td>
		<td scope="col" width="20%" class="listViewThS1" nowrap><slot>{$MOD.LBL_NAME}</slot></td>
		<td scope="col" width="10%" class="listViewThS1" nowrap><slot>{$MOD.LBL_DESCRIPTION}</slot></td>
	  </tr>

{foreach from=$ROLES item="ROLE"}

<tr height="20" >
    			<td>{$PREROW}&nbsp;</td>
    			<td valign=TOP  ><slot><a href="#" onclick="send_back('Users','{$ROLE.id}');">{$ROLE.name}</a></slot></td>
    			<td valign=TOP  ><slot>{$ROLE.description}</slot></td>

</tr>
{foreachelse}
        <tr>
            <td colspan="2">No Roles</td>
        </tr>
{/foreach}
<tr><td colspan="20" class="listViewHRS1"></td></tr>


</table>
{$ASSOCIATED_JAVASCRIPT_DATA}
