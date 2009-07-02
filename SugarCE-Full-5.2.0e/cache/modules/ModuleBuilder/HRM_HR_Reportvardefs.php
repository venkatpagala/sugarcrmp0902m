<?php
// created: 2009-07-02 12:04:10
$GLOBALS["dictionary"]["HRM_HR_Report"] = array (
  'table' => 'hrm_hr_report',
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
      'relationship' => 'hrm_hr_report_created_by',
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
      'relationship' => 'hrm_hr_report_modified_user',
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
      'relationship' => 'hrm_hr_report_assigned_user',
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
    'rep_mois' => 
    array (
      'required' => '1',
      'name' => 'rep_mois',
      'vname' => 'LBL_REP_MOIS',
      'type' => 'enum',
      'massupdate' => 0,
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
    'rep_year' => 
    array (
      'required' => '1',
      'name' => 'rep_year',
      'vname' => 'LBL_REP_YEAR',
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
      'disable_num_format' => '',
      'validation' => 
      array (
        'type' => 'range',
        'min' => '2000',
        'max' => '2020',
      ),
    ),
    'hrr_income' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'hrr_income',
      'vname' => 'LBL_HRR_INCOME',
      'type' => 'code',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => 0,
      'ext2' => NULL,
      'ext4' => 'global $connection_code_field;

global $sugar_config;
$dbh=$sugar_config[&#039;dbconfig&#039;][&#039;db_host_name&#039;];
$dbu=$sugar_config[&#039;dbconfig&#039;][&#039;db_user_name&#039;];
$dbp=$sugar_config[&#039;dbconfig&#039;][&#039;db_password&#039;];
$db=$sugar_config[&#039;dbconfig&#039;][&#039;db_name&#039;];

if (!isset($connection_code_field)) {
$connection_code_field = mysql_connect(&quot;$dbh&quot;, &quot;$dbu&quot;, &quot;$dbp&quot;);
mysql_select_db(&quot;$db&quot;, $connection_code_field);
}

global $connection_code_field;

$moi= $bean-&gt;rep_mois;
$ann = $bean-&gt;rep_year;

$sql = &quot;SELECT sum(inc_amou) FROM hrm_incomes   WHERE deleted=0 AND inc_mois=&#039;$moi&#039; AND inc_year=&#039;$ann&#039; &quot;;
$res = mysql_query($sql, $connection_code_field);
if (mysql_num_rows($res))
$value = round(mysql_result($res,0));

echo &quot;&lt;DIV&gt;&quot;;
echo number_format($value, 0, &#039;,&#039;, &#039; &#039;) . &#039; €         &#039;;
echo &quot;&lt;/DIV&gt;&quot;;',
      'studio' => 'visible',
      'dbtype' => ' varchar()',
    ),
    'hrr_inc_year' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'hrr_inc_year',
      'vname' => 'LBL_HRR_INC_YEAR',
      'type' => 'code',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => 0,
      'ext2' => NULL,
      'ext4' => 'global $connection_code_field;

global $sugar_config;
$dbh=$sugar_config[&#039;dbconfig&#039;][&#039;db_host_name&#039;];
$dbu=$sugar_config[&#039;dbconfig&#039;][&#039;db_user_name&#039;];
$dbp=$sugar_config[&#039;dbconfig&#039;][&#039;db_password&#039;];
$db=$sugar_config[&#039;dbconfig&#039;][&#039;db_name&#039;];

if (!isset($connection_code_field)) {
$connection_code_field = mysql_connect(&quot;$dbh&quot;, &quot;$dbu&quot;, &quot;$dbp&quot;);
mysql_select_db(&quot;$db&quot;, $connection_code_field);
}

global $connection_code_field;

$moi= $bean-&gt;rep_mois;
$ann = $bean-&gt;rep_year;

$sql = &quot;SELECT sum(inc_amou) FROM hrm_incomes   WHERE deleted=0 AND inc_year=&#039;$ann&#039; &quot;;
$res = mysql_query($sql, $connection_code_field);
if (mysql_num_rows($res))
$value = round(mysql_result($res,0));

echo &quot;&lt;DIV&gt;&quot;;
echo number_format($value, 0, &#039;,&#039;, &#039; &#039;) . &#039; €         &#039;;
echo &quot;&lt;/DIV&gt;&quot;;
',
      'studio' => 'visible',
      'dbtype' => ' varchar()',
    ),
    'hrr_soc_year' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'hrr_soc_year',
      'vname' => 'LBL_HRR_SOC_YEAR',
      'type' => 'code',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => 0,
      'ext2' => NULL,
      'ext4' => 'global $connection_code_field;

global $sugar_config;
$dbh=$sugar_config[&#039;dbconfig&#039;][&#039;db_host_name&#039;];
$dbu=$sugar_config[&#039;dbconfig&#039;][&#039;db_user_name&#039;];
$dbp=$sugar_config[&#039;dbconfig&#039;][&#039;db_password&#039;];
$db=$sugar_config[&#039;dbconfig&#039;][&#039;db_name&#039;];

if (!isset($connection_code_field)) {
$connection_code_field = mysql_connect(&quot;$dbh&quot;, &quot;$dbu&quot;, &quot;$dbp&quot;);
mysql_select_db(&quot;$db&quot;, $connection_code_field);
}

global $connection_code_field;

$moi= $bean-&gt;rep_mois;
$ann = $bean-&gt;rep_year;

$sql = &quot;SELECT sum(0.6*inc_amou) FROM hrm_incomes   WHERE deleted=0 AND inc_year=&#039;$ann&#039; &quot;;
$res = mysql_query($sql, $connection_code_field);
if (mysql_num_rows($res))
$value = round(mysql_result($res,0));

echo &quot;&lt;DIV&gt;&quot;;
echo number_format($value, 0, &#039;,&#039;, &#039; &#039;) . &#039; €         &#039;;
echo &quot;&lt;/DIV&gt;&quot;;',
      'studio' => 'visible',
      'dbtype' => ' varchar()',
    ),
    'hrr_inc_tot' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'hrr_inc_tot',
      'vname' => 'LBL_HRR_INC_TOT',
      'type' => 'code',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => 0,
      'reportable' => 0,
      'ext2' => NULL,
      'ext4' => 'global $connection_code_field;

global $sugar_config;
$dbh=$sugar_config[&#039;dbconfig&#039;][&#039;db_host_name&#039;];
$dbu=$sugar_config[&#039;dbconfig&#039;][&#039;db_user_name&#039;];
$dbp=$sugar_config[&#039;dbconfig&#039;][&#039;db_password&#039;];
$db=$sugar_config[&#039;dbconfig&#039;][&#039;db_name&#039;];

if (!isset($connection_code_field)) {
$connection_code_field = mysql_connect(&quot;$dbh&quot;, &quot;$dbu&quot;, &quot;$dbp&quot;);
mysql_select_db(&quot;$db&quot;, $connection_code_field);
}

global $connection_code_field;

$moi= $bean-&gt;rep_mois;
$ann = $bean-&gt;rep_year;

$sql = &quot;SELECT sum(1.6*inc_amou) FROM hrm_incomes   WHERE deleted=0 AND inc_year=&#039;$ann&#039; &quot;;
$res = mysql_query($sql, $connection_code_field);
if (mysql_num_rows($res))
$value = round(mysql_result($res,0));

echo &quot;&lt;DIV&gt;&quot;;
echo number_format($value, 0, &#039;,&#039;, &#039; &#039;) . &#039; €         &#039;;
echo &quot;&lt;/DIV&gt;&quot;;',
      'studio' => 'visible',
      'dbtype' => ' varchar()',
    ),
  ),
  'relationships' => 
  array (
    'hrm_hr_report_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HRM_HR_Report',
      'rhs_table' => 'hrm_hr_report',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'hrm_hr_report_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HRM_HR_Report',
      'rhs_table' => 'hrm_hr_report',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'hrm_hr_report_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'HRM_HR_Report',
      'rhs_table' => 'hrm_hr_report',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_lock' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'hrm_hr_reportpk',
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
