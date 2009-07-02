<?php
$module_name = 'HRM_HR_Report';
$viewdefs [$module_name] = 
array (
  'EditView' => 
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
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'hrr_income',
            'label' => 'LBL_HRR_INCOME',
          ),
          1 => 
          array (
            'name' => 'hrr_inc_year',
            'label' => 'LBL_HRR_INC_YEAR',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'hrr_soc_year',
            'label' => 'LBL_HRR_SOC_YEAR',
          ),
          1 => 
          array (
            'name' => 'hrr_inc_tot',
            'label' => 'LBL_HRR_INC_TOT',
          ),
        ),
      ),
    ),
  ),
);
?>
