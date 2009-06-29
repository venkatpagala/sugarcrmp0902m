

<script type="text/javascript" src="{sugar_getjspath file='include/javascript/sugar_3.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/JSON.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='include/javascript/popup_helper.js'}"></script>
<script type='text/javascript' src='{sugar_getjspath file='include/javascript/sugar_grp_overlib.js'}'></script>
<script type="text/javascript">
	{$ASSOCIATED_JAVASCRIPT_DATA}
</script>
{$SEARCH_FORM_HEADER}
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="tabForm">
<tr>
<td>
<form action="index.php" method="post" name="popup_query_form" id="popup_query_form">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td>
{$searchForm}
</td></tr>
<tr>
<td style="padding-bottom: 2px;">
<input type="hidden" name="module" value="{$module}" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="query" value="true" />
<input type="hidden" name="func_name" value="" />
<input type="hidden" name="request_data" value="{$request_data}" />
<input type="hidden" name="populate_parent" value="false" />
<input type="hidden" name="hide_clear_button" value="true" />
<input type="hidden" name="record_id" value="" />
{$MODE}
<input type="submit" name="button" class="button"
	title="{$APP.LBL_SEARCH_BUTTON_TITLE}"
	accessKey="{$APP.LBL_SEARCH_BUTTON_KEY}"
	value="{$APP.LBL_SEARCH_BUTTON_LABEL}" />
</td>
<td align='right'></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<p>
<div id='addformlink'>
<input type="button" name="showAdd" class="button" value="{$popupMeta.create.createButton}" onclick="toggleDisplay('addform');" />
</div>
<div id='addform' style='display:none;position:relative;z-index:2;left:0px;top:0px;'>
<form name="{$object_name}Save" onsubmit="return check_form('{$object_name}Save');" method="post" action="index.php">
{$ADDFORMHEADER}
<table cellpadding="0" cellspacing="0" border="0" width="100%" class="tabForm">
<tr>
<td>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr><td>
<input type="hidden" name="module" value="{$module}" />
<input type="hidden" name="action" value="Popup" />
<input type="hidden" name="doAction" value="save" />
<input type="hidden" name="query" value="true" />
{$ADDFORM}
</td></tr>
</table></td></tr></table>
</form>
</div>
</p>
{$jsLang}
{$LIST_HEADER}
<table cellpadding='0' cellspacing='0' width='100%' border='0' class='listView'>
	<tr>
		<td colspan='{$colCount+1}' align='right'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%'>
				<tr>
					<td align='left' class='listViewPaginationTdS1'>
						&nbsp;</td>
					<td class='listViewPaginationTdS1' align='right' nowrap='nowrap' id='listViewPaginationButtons'>						
						{if $pageData.urls.startPage}
							<button type='button' title='{$navStrings.start}' class='button' {if $prerow}onclick='return sListView.save_checks(0, "{$moduleString}");'{else} onClick='location.href="{$pageData.urls.startPage}"' {/if}>
								<img src='{$imagePath}start.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
							</button>						
							<!--<a href='{$pageData.urls.startPage}' {if $prerow}onclick="return sListView.save_checks(0, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'><img src='{$imagePath}start.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}</a>&nbsp;-->
						{else}
							<button type='button' title='{$navStrings.start}' class='button' disabled>
								<img src='{$imagePath}start_off.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--<img src='{$imagePath}start_off.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}&nbsp;&nbsp;-->
						{/if}
						{if $pageData.urls.prevPage}
							<button type='button' title='{$navStrings.previous}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.prev}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.prevPage}"'{/if}>
								<img src='{$imagePath}previous.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>							
							</button>
							<!--<a href='{$pageData.urls.prevPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.prev}, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'><img src='{$imagePath}previous.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}</a>&nbsp;-->
						{else}
							<button type='button' class='button' disabled title='{$navStrings.previous}'>
								<img src='{$imagePath}previous_off.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--<img src='{$imagePath}previous_off.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}&nbsp;-->
						{/if}
							<span class='pageNumbers'>({if $pageData.offsets.lastOffsetOnPage == 0}0{else}{$pageData.offsets.current+1}{/if} - {$pageData.offsets.lastOffsetOnPage} {$navStrings.of} {if $pageData.offsets.totalCounted}{$pageData.offsets.total}{else}{$pageData.offsets.total}{if $pageData.offsets.lastOffsetOnPage != $pageData.offsets.total}+{/if}{/if})</span>
						{if $pageData.urls.nextPage}
							<button type='button' title='{$navStrings.next}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.next}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.nextPage}"'{/if}>
								<img src='{$imagePath}next.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;<a href='{$pageData.urls.nextPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.next}, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'>{$navStrings.next}&nbsp;<img src='{$imagePath}next.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'></a>&nbsp;-->
						{else}
							<button type='button' class='button' title='{$navStrings.next}' disabled>
								<img src='{$imagePath}next_off.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;{$navStrings.next}&nbsp;<img src='{$imagePath}next_off.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>-->
						{/if}
						{if $pageData.urls.endPage  && $pageData.offsets.total != $pageData.offsets.lastOffsetOnPage}
							<button type='button' title='{$navStrings.end}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.end}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.endPage}"'{/if}>
								<img src='{$imagePath}end.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>							
							</button>
							<!--<a href='{$pageData.urls.endPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.end}, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'>{$navStrings.end}&nbsp;<img src='{$imagePath}end.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'></a></td>-->
						{elseif !$pageData.offsets.totalCounted || $pageData.offsets.total == $pageData.offsets.lastOffsetOnPage}
							<button type='button' class='button' disabled title='{$navStrings.end}'>
							 	<img src='{$imagePath}end_off.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--&nbsp;{$navStrings.end}&nbsp;<img src='{$imagePath}end_off.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>-->
						{/if}
					</td>
				</tr>
			</table>
		</td>
	</tr>

	<tr height='20'>
		{if $prerow}
			<td scope='col' class='listViewThS1' nowrap width='1%'>
				<input type='checkbox' class='checkbox' name='massall' value='' onclick='sListView.check_all(document.MassUpdate, "mass[]", this.checked);' />
			</td>
		{/if}
		{counter start=0 name="colCounter" print=false assign="colCounter"}
		{foreach from=$displayColumns key=colHeader item=params}
			<td scope='col' width='{$params.width}%' class='listViewThS1' nowrap>
				<div style='white-space: nowrap;'width='100%' align='{$params.align|default:'left'}'>
                {if $params.sortable|default:true}              
	                <a href='#' onclick='location.href="{$pageData.urls.orderBy}{$params.orderBy|default:$colHeader|lower}"; return sListView.save_checks(0, "{$moduleString}");' class='listViewThLinkS1'>{sugar_translate label=$params.label module=$pageData.bean.moduleDir}&nbsp;&nbsp;
					{if $params.orderBy|default:$colHeader|lower == $pageData.ordering.orderBy}
						{if $pageData.ordering.sortOrder == 'ASC'}
							<img border='0' src='{$imagePath}arrow_down.{$arrowExt}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
						{else}
							<img border='0' src='{$imagePath}arrow_up.{$arrowExt}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
						{/if}
					{else}
						<img border='0' src='{$imagePath}arrow.{$arrowExt}' width='{$arrowWidth}' height='{$arrowHeight}' align='absmiddle' alt='{$arrowAlt}'>
					{/if}
					</a>
				{else}
					{sugar_translate label=$params.label module=$pageData.bean.moduleDir}
				{/if}
				</div>
			</td>
			{counter name="colCounter"}
		{/foreach}
		{if !empty($quickViewLinks)}
		<td scope='col' class='listViewThS1' nowrap width='1%'>&nbsp;</td>
		{/if}
	</tr>
		
	{foreach name=rowIteration from=$data key=id item=rowData}
		{if $smarty.foreach.rowIteration.iteration is odd}
			{assign var='_bgColor' value=$bgColor[0]}
			{assign var='_rowColor' value=$rowColor[0]}
		{else}
			{assign var='_bgColor' value=$bgColor[1]}
			{assign var='_rowColor' value=$rowColor[1]}
		{/if}
		<tr height='20' onmouseover="setPointer(this, '{$id}', 'over', '{$_bgColor}', '{$bgHilite}', '');" onmouseout="setPointer(this, '{$rowData[$params.id]|default:$rowData.ID}', 'out', '{$_bgColor}', '{$bgHilite}', '');" onmousedown="setPointer(this, '{$id}', 'click', '{$_bgColor}', '{$bgHilite}', '');">
			{if $prerow}
			<td width='1%' class='{$_rowColor}S1' bgcolor='{$_bgColor}' nowrap>
					<input onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='{$rowData[$params.id]|default:$rowData.ID}'>
					{$pageData.additionalDetails.$id}
			</td>
			{/if}
			{counter start=0 name="colCounter" print=false assign="colCounter"}
			{foreach from=$displayColumns key=col item=params}
				<td scope='row' align='{$params.align|default:'left'}' valign=top class='{$_rowColor}S1' bgcolor='{$_bgColor}'>
					{if $params.link && !$params.customCode}
						
						<{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN} href='#' onclick="send_back('{if $params.dynamic_module}{$rowData[$params.dynamic_module]}{else}{$params.module|default:$pageData.bean.moduleDir}{/if}','{$rowData[$params.id]|default:$rowData.ID}');"class='listViewTdLinkS1'>{$rowData.$col}</{$pageData.tag.$id[$params.ACLTag]|default:$pageData.tag.$id.MAIN}>

					{elseif $params.customCode} 
						{sugar_evalcolumn_old var=$params.customCode rowData=$rowData}
					{elseif $params.currency_format} 
						{sugar_currency_format 
                            var=$rowData.$col 
                            round=$params.currency_format.round 
                            decimals=$params.currency_format.decimals 
                            symbol=$params.currency_format.symbol
                            convert=$params.currency_format.convert
                            currency_symbol=$params.currency_format.currency_symbol
						}
					{elseif $params.type == 'bool'}
							<input type='checkbox' disabled=disabled class='checkbox'
							{if !empty($rowData[$col])}
								checked=checked
							{/if}
							/>
					
					{else}	
						{$rowData.$col}
					{/if}
				</td>
				{counter name="colCounter"}
			{/foreach}
	 	<tr><td colspan='20' class='listViewHRS1'></td></tr>
	{/foreach}
	<tr>
		<td colspan='{$colCount+1}' align='right'>
			<table border='0' cellpadding='0' cellspacing='0' width='100%'>
				<tr>
					<td align='left' class='listViewPaginationTdS1'>
						&nbsp;</td>
					<td class='listViewPaginationTdS1' align='right' nowrap='nowrap' id='listViewPaginationButtons'>						
						{if $pageData.urls.startPage}
							<button type='button' title='{$navStrings.start}' class='button' {if $prerow}onclick='return sListView.save_checks(0, "{$moduleString}");'{else} onClick='location.href="{$pageData.urls.startPage}"' {/if}>
								<img src='{$imagePath}start.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
							</button>						
							<!--<a href='{$pageData.urls.startPage}' {if $prerow}onclick="return sListView.save_checks(0, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'><img src='{$imagePath}start.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}</a>&nbsp;-->
						{else}
							<button type='button' title='{$navStrings.start}' class='button' disabled>
								<img src='{$imagePath}start_off.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--<img src='{$imagePath}start_off.gif' alt='{$navStrings.start}' align='absmiddle' border='0' width='13' height='11'>&nbsp;{$navStrings.start}&nbsp;&nbsp;-->
						{/if}
						{if $pageData.urls.prevPage}
							<button type='button' title='{$navStrings.previous}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.prev}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.prevPage}"'{/if}>
								<img src='{$imagePath}previous.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>							
							</button>
							<!--<a href='{$pageData.urls.prevPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.prev}, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'><img src='{$imagePath}previous.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}</a>&nbsp;-->
						{else}
							<button type='button' class='button' disabled title='{$navStrings.previous}'>
								<img src='{$imagePath}previous_off.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--<img src='{$imagePath}previous_off.gif' alt='{$navStrings.previous}' align='absmiddle' border='0' width='8' height='11'>&nbsp;{$navStrings.previous}&nbsp;-->
						{/if}
							<span class='pageNumbers'>({if $pageData.offsets.lastOffsetOnPage == 0}0{else}{$pageData.offsets.current+1}{/if} - {$pageData.offsets.lastOffsetOnPage} {$navStrings.of} {if $pageData.offsets.totalCounted}{$pageData.offsets.total}{else}{$pageData.offsets.total}{if $pageData.offsets.lastOffsetOnPage != $pageData.offsets.total}+{/if}{/if})</span>
						{if $pageData.urls.nextPage}
							<button type='button' title='{$navStrings.next}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.next}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.nextPage}"'{/if}>
								<img src='{$imagePath}next.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;<a href='{$pageData.urls.nextPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.next}, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'>{$navStrings.next}&nbsp;<img src='{$imagePath}next.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'></a>&nbsp;-->
						{else}
							<button type='button' class='button' title='{$navStrings.next}' disabled>
								<img src='{$imagePath}next_off.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>
							</button>
							<!--&nbsp;{$navStrings.next}&nbsp;<img src='{$imagePath}next_off.gif' alt='{$navStrings.next}' align='absmiddle' border='0' width='8' height='11'>-->
						{/if}
						{if $pageData.urls.endPage  && $pageData.offsets.total != $pageData.offsets.lastOffsetOnPage}
							<button type='button' title='{$navStrings.end}' class='button' {if $prerow}onclick='return sListView.save_checks({$pageData.offsets.end}, "{$moduleString}")' {else} onClick='location.href="{$pageData.urls.endPage}"'{/if}>
								<img src='{$imagePath}end.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>							
							</button>
							<!--<a href='{$pageData.urls.endPage}' {if $prerow}onclick="return sListView.save_checks({$pageData.offsets.end}, '{$moduleString}')"{/if} class='listViewPaginationLinkS1'>{$navStrings.end}&nbsp;<img src='{$imagePath}end.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'></a></td>-->
						{elseif !$pageData.offsets.totalCounted || $pageData.offsets.total == $pageData.offsets.lastOffsetOnPage}
							<button type='button' class='button' disabled title='{$navStrings.end}'>
							 	<img src='{$imagePath}end_off.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>
							</button>
							<!--&nbsp;{$navStrings.end}&nbsp;<img src='{$imagePath}end_off.gif' alt='{$navStrings.end}' align='absmiddle' border='0' width='13' height='11'>-->
						{/if}
					</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
{if $prerow}
<a class='listViewCheckLink' href='javascript:sListView.check_all(document.MassUpdate, "mass[]", false);'>{$clearAll}</a>
<script>
{literal}function lvg_dtails(id){return SUGAR.util.getAdditionalDetails( '{/literal}{$module}{literal}',id, 'adspan_'+id);}{/literal}
</script>
{/if}

{literal}
<script type="text/javascript">
<!--
/* initialize the popup request from the parent */

if(window.document.forms['popup_query_form'].request_data.value == "")
{
	window.document.forms['popup_query_form'].request_data.value
		= JSON.stringify(window.opener.get_popup_request_data());
}
-->
</script>
{/literal}