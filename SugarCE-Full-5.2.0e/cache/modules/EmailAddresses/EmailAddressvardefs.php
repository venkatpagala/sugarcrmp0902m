<?php
// created: 2009-06-23 09:27:10
$GLOBALS["dictionary"]["EmailAddress"] = array (
  'table' => 'email_addresses',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'id',
      'vname' => 'LBL_EMAIL_ADDRESS_ID',
      'required' => true,
    ),
    1 => 
    array (
      'name' => 'email_address',
      'type' => 'varchar',
      'vname' => 'LBL_EMAIL_ADDRESS',
      'length' => 100,
      'required' => true,
    ),
    2 => 
    array (
      'name' => 'email_address_caps',
      'type' => 'varchar',
      'vname' => 'LBL_EMAIL_ADDRESS_CAPS',
      'length' => 100,
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'invalid_email',
      'type' => 'bool',
      'default' => 0,
      'vname' => 'LBL_INVALID_EMAIL',
    ),
    4 => 
    array (
      'name' => 'opt_out',
      'type' => 'bool',
      'default' => 0,
      'vname' => 'LBL_OPT_OUT',
    ),
    5 => 
    array (
      'name' => 'date_created',
      'type' => 'datetime',
      'vname' => 'LBL_DATE_CREATE',
    ),
    6 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
      'vname' => 'LBL_DATE_MODIFIED',
    ),
    7 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
      'vname' => 'LBL_DELETED',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'email_addressespk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_ea_caps_opt_out_invalid',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'email_address_caps',
        1 => 'opt_out',
        2 => 'invalid_email',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_ea_opt_out_invalid',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'email_address',
        1 => 'opt_out',
        2 => 'invalid_email',
      ),
    ),
  ),
  'custom_fields' => false,
);
?>
