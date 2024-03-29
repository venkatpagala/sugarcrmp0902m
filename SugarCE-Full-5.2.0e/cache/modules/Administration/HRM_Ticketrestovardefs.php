<?php
// created: 2009-07-02 12:11:50
$GLOBALS["dictionary"]["HRM_Ticketresto"] = array (
  'table' => 'hrm_ticketresto',
  'audited' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'required' => true,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'importable' => 'false',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'importable' => 'false',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED_ID',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'hrm_ticketresto_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'hrm_ticketresto_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'hrm_ticketresto_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'tic_mois' => 
    array (
      'required' => false,
      'name' => 'tic_mois',
      'vname' => 'LBL_TIC_MOIS',
      'type' => 'enum',
      'massupdate' => '1',
      'default' => '1',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => 0,
      'len' => 100,
      'options' => 'dom_cal_month_long',
      'studio' => 'visible',
    ),
    'tic_year' => 
    array (
      'required' => '1',
      'name' => 'tic_year',
      'vname' => 'LBL_TIC_YEAR',
      'type' => 'int',
      'massupdate' => 0,
      'default' => '2009',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => 0,
      'len' => '11',
      'disable_num_format' => '1',
      'validation' => 
      array (
        'type' => 'range',
        'min' => '2000',
        'max' => '2020',
      ),
    ),
    'tic_quan' => 
    array (
      'required' => '1',
      'name' => 'tic_quan',
      'vname' => 'LBL_TIC_QUAN',
      'type' => 'int',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => 0,
      'len' => '11',
      'disable_num_format' => '1',
      'validation' => 
      array (
        'type' => 'range',
        'min' => 0,
        'max' => '31',
      ),
    ),
    'hrm_employees_hrm_ticketresto' => 
    array (
      'name' => 'hrm_employees_hrm_ticketresto',
      'type' => 'link',
      'relationship' => 'hrm_employees_hrm_ticketresto',
      'source' => 'non-db',
    ),
    'hrm_employees_hrm_ticketresto_name' => 
    array (
      'name' => 'hrm_employees_hrm_ticketresto_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_HRM_EMPLOYEES_HRM_TICKETRESTO_FROM_HRM_EMPLOYEES_TITLE',
      'save' => true,
      'id_name' => 'hrm_employe_employees_ida',
      'link' => 'hrm_employees_hrm_ticketresto',
      'table' => 'hrm_employees',
      'module' => 'HRM_Employees',
      'rname' => 'name',
    ),
    'hrm_employe_employees_ida' => 
    array (
      'name' => 'hrm_employe_employees_ida',
      'type' => 'link',
      'relationship' => 'hrm_employees_hrm_ticketresto',
      'source' => 'non-db',
    ),
  ),
  'relationships' => 
  array (
    'hrm_ticketresto_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HRM_Ticketresto',
      'rhs_table' => 'hrm_ticketresto',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'hrm_ticketresto_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HRM_Ticketresto',
      'rhs_table' => 'hrm_ticketresto',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'hrm_ticketresto_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HRM_Ticketresto',
      'rhs_table' => 'hrm_ticketresto',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_lock' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'hrm_ticketrestopk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);
?>
