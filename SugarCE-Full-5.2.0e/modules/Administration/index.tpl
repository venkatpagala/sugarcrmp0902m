{* <!--
/**
 * Administration page index template
 *
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
 */
-->


*}

{$MY_FRAME}

{foreach  from=$ADMIN_GROUP_HEADER key=j item=val1}
   
   {if isset($GROUP_HEADER[$j][1])}
   <p>{$GROUP_HEADER[$j][0]}{$GROUP_HEADER[$j][1]}
   <table width="100%" cellpadding="0" cellspacing="1" border="0" class="tabDetailView2">
   
   {else}
   <p>{$GROUP_HEADER[$j][0]}{$GROUP_HEADER[$j][2]}
   <table width="100%" cellpadding="0" cellspacing="1" border="0" class="tabDetailView2">
   {/if}
      
    {assign var='i' value=0}
    {foreach  from=$VALUES_3_TAB[$j] key=link_idx item=admin_option}
    {if isset($COLNUM[$j][$i])}
    <tr>
            <td width="20%" class="tabDetailViewDL2" nowrap>{$ITEM_HEADER_IMAGE[$j][$i]}&nbsp;<a href='{$ITEM_URL[$j][$i]}' class="tabDetailViewDL2Link">{$ITEM_HEADER_LABEL[$j][$i]}</a></td>
            <td align="left" width="30%" class="tabDetailViewDF2">{$ITEM_DESCRIPTION[$j][$i]}</td>  
              
            {assign var='i' value=$i+1}
            {if $COLNUM[$j][$i] == '0'}                           
                    <td width="20%" class="tabDetailViewDL2" nowrap>{$ITEM_HEADER_IMAGE[$j][$i]}&nbsp;<a href='{$ITEM_URL[$j][$i]}' class="tabDetailViewDL2Link">{$ITEM_HEADER_LABEL[$j][$i]}</a></td>
                    <td align="left" width="30%" class="tabDetailViewDF2">{$ITEM_DESCRIPTION[$j][$i]}</td>
              
            {else}
            <td width="20%" class="tabDetailViewDL2" nowrap>&nbsp;</td>
            <td align="left" width="30%" class="tabDetailViewDF2">&nbsp;</td>
            {/if}
   </tr>
   {/if}
   {assign var='i' value=$i+1}
   {/foreach}
           
</table>
</p>
{/foreach}
