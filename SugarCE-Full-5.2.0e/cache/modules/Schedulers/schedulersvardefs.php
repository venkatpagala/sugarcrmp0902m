<?php
// created: 2009-06-30 18:12:48
$GLOBALS["dictionary"]["schedulers"] = array (
  'table' => 'schedulers',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_NAME',
      'type' => 'id',
      'dbType' => 'varchar',
      'len' => 36,
      'required' => true,
      'reportable' => false,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'len' => 1,
      'required' => true,
      'default' => '0',
      'reportable' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'required' => true,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'required' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'created_by',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'created_by_users',
      'isnull' => false,
      'dbType' => 'id',
      'len' => 36,
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'schedulers_created_by_rel',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'modified_user_id_users',
      'isnull' => false,
      'dbType' => 'id',
      'len' => '36',
      'reportable' => true,
    ),
    'modified_user_id_link' => 
    array (
      'name' => 'modified_user_id_link',
      'type' => 'link',
      'relationship' => 'schedulers_modified_user_id_rel',
      'vname' => 'LBL_MODIFIED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'varchar',
      'len' => '255',
      'required' => true,
      'reportable' => false,
      'importable' => 'required',
    ),
    'job' => 
    array (
      'name' => 'job',
      'vname' => 'LBL_JOB',
      'type' => 'varchar',
      'len' => '255',
      'required' => true,
      'reportable' => false,
    ),
    'date_time_start' => 
    array (
      'name' => 'date_time_start',
      'vname' => 'LBL_SCHEDULER_DATE_TIME_START',
      'type' => 'datetime',
      'required' => true,
      'reportable' => false,
    ),
    'date_time_end' => 
    array (
      'name' => 'date_time_end',
      'vname' => 'LBL_SCHEDULER_DATE_TIME_END',
      'type' => 'datetime',
      'reportable' => false,
    ),
    'job_interval' => 
    array (
      'name' => 'job_interval',
      'vname' => 'LBL_INTERVAL',
      'type' => 'varchar',
      'len' => '100',
      'required' => true,
      'reportable' => false,
    ),
    'time_from' => 
    array (
      'name' => 'time_from',
      'vname' => 'LBL_TIME_FROM',
      'type' => 'time',
      'required' => false,
      'reportable' => false,
    ),
    'time_to' => 
    array (
      'name' => 'time_to',
      'vname' => 'LBL_TIME_TO',
      'type' => 'time',
      'required' => false,
      'reportable' => false,
    ),
    'last_run' => 
    array (
      'name' => 'last_run',
      'vname' => 'LBL_LAST_RUN',
      'type' => 'datetime',
      'required' => false,
      'reportable' => false,
    ),
    'status' => 
    array (
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'options' => 'scheduler_status_dom',
      'len' => '25',
      'required' => false,
      'reportable' => false,
      'importable' => 'required',
    ),
    'catch_up' => 
    array (
      'name' => 'catch_up',
      'vname' => 'LBL_CATCH_UP',
      'type' => 'bool',
      'len' => 1,
      'required' => false,
      'default' => '1',
      'reportable' => false,
    ),
    'schedulers_times' => 
    array (
      'name' => 'schedulers_times',
      'vname' => 'LBL_SCHEDULER_TIMES',
      'type' => 'link',
      'relationship' => 'schedulers_jobs_rel',
      'module' => 'SchedulersJobs',
      'bean_name' => 'Scheduler',
      'source' => 'non-db',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'schedulerspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_schedule',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'date_time_start',
        1 => 'deleted',
      ),
    ),
  ),
  'relationships' => 
  array (
    'schedulers_created_by_rel' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-one',
    ),
    'schedulers_modified_user_id_rel' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'Schedulers',
      'rhs_table' => 'schedulers',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-one',
    ),
    'schedulers_jobs_rel' => 
    array (
      'lhs_module' => 'Schedulers',
      'lhs_table' => 'schedulers',
      'lhs_key' => 'id',
      'rhs_module' => 'SchedulersJobs',
      'rhs_table' => 'schedulers_times',
      'rhs_key' => 'scheduler_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
);
?>
