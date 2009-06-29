<?php
$viewdefs ['Campaigns'] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '<script type="text/javascript" src="include/javascript/popup_parent_helper.js?s=9eabf6bbd47a6d8839aeb3542b63c89e&c=1"></script>
<script type="text/javascript">
function type_change() {ldelim}
	type = document.getElementsByName(\'campaign_type\');
	if(type[0].value==\'NewsLetter\') {ldelim}
		document.getElementById(\'freq_label\').style.display = \'\';
		document.getElementById(\'freq_field\').style.display = \'\';
	 {rdelim} else {ldelim}
		document.getElementById(\'freq_label\').style.display = \'none\';
		document.getElementById(\'freq_field\').style.display = \'none\';
	 {rdelim}
 {rdelim}
type_change();

function ConvertItems(id)  {ldelim}
	var items = new Array();

	//get the items that are to be converted
	expected_revenue = document.getElementById(\'expected_revenue\');
	budget = document.getElementById(\'budget\');
	actual_cost = document.getElementById(\'actual_cost\');
	expected_cost = document.getElementById(\'expected_cost\');

	//unformat the values of the items to be converted
	expected_revenue.value = unformatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = unformatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = unformatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = unformatNumber(actual_cost.value, num_grp_sep, dec_sep);

	//add the items to an array
	items[items.length] = expected_revenue;
	items[items.length] = budget;
	items[items.length] = expected_cost;
	items[items.length] = actual_cost;

	//call function that will convert currency
	ConvertRate(id, items);

	//Add formatting back to items
	expected_revenue.value = formatNumber(expected_revenue.value, num_grp_sep, dec_sep);
	expected_cost.value = formatNumber(expected_cost.value, num_grp_sep, dec_sep);
	budget.value = formatNumber(budget.value, num_grp_sep, dec_sep);
	actual_cost.value = formatNumber(actual_cost.value, num_grp_sep, dec_sep);
 {rdelim}
</script>',
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'status',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'start_date',
            'displayParams' => 
            array (
              'required' => false,
              'showFormats' => true,
            ),
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'end_date',
            'displayParams' => 
            array (
              'required' => true,
              'showFormats' => true,
            ),
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'campaign_type',
            'displayParams' => 
            array (
              'required' => true,
              'javascript' => 'onchange="type_change();"',
            ),
          ),
          1 => 
          array (
            'name' => 'frequency',
            'customCode' => '<div style=\'none\' id=\'freq_field\'>{html_options name="frequency" options=$fields.frequency.options selected=$fields.frequency.value}</div></TD>',
            'customLabel' => '<div style=\'none\' id=\'freq_label\'>{$MOD.LBL_CAMPAIGN_FREQUENCY}</div>',
          ),
        ),
        5 => 
        array (
          0 => 'currency_id',
          1 => 'impressions',
        ),
        6 => 
        array (
          0 => 'budget',
          1 => 'actual_cost',
        ),
        7 => 
        array (
          0 => 'expected_revenue',
          1 => 'expected_cost',
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'objective',
            'displayParams' => 
            array (
              'rows' => 8,
              'cols' => 80,
            ),
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'content',
            'displayParams' => 
            array (
              'rows' => 8,
              'cols' => 80,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
