<?php
// created: 2009-07-02 14:55:07
$GLOBALS["dictionary"]["DocumentRevision"] = array (
  'table' => 'document_revisions',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_REVISION_NAME',
      'type' => 'varchar',
      'len' => '36',
      'required' => true,
      'reportable' => false,
    ),
    'change_log' => 
    array (
      'name' => 'change_log',
      'vname' => 'LBL_CHANGE_LOG',
      'type' => 'varchar',
      'len' => '255',
    ),
    'document_id' => 
    array (
      'name' => 'document_id',
      'vname' => 'LBL_DOCUMENT',
      'type' => 'varchar',
      'len' => '36',
      'required' => false,
      'reportable' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'source' => 'db',
    ),
    'filename' => 
    array (
      'name' => 'filename',
      'vname' => 'LBL_FILENAME',
      'type' => 'varchar',
      'required' => true,
      'len' => '255',
    ),
    'file_ext' => 
    array (
      'name' => 'file_ext',
      'vname' => 'LBL_FILE_EXTENSION',
      'type' => 'varchar',
      'len' => '25',
    ),
    'file_mime_type' => 
    array (
      'name' => 'file_mime_type',
      'vname' => 'LBL_MIME',
      'type' => 'varchar',
      'len' => '100',
    ),
    'revision' => 
    array (
      'name' => 'revision',
      'vname' => 'LBL_REVISION',
      'type' => 'varchar',
      'len' => '25',
      'importable' => 'required',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => 0,
      'reportable' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
    ),
    'documents' => 
    array (
      'name' => 'documents',
      'type' => 'link',
      'relationship' => 'document_revisions',
      'source' => 'non-db',
      'vname' => 'LBL_REVISIONS',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'revisions_created_by',
      'vname' => 'LBL_CREATED_BY_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'rname' => 'user_name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
      'id_name' => 'created_by',
      'vname' => 'LBL_CREATED_BY_NAME',
      'type' => 'relate',
      'table' => 'users',
      'isnull' => 'true',
      'module' => 'Users',
      'dbType' => 'varchar',
      'link' => 'created_by_link',
      'len' => '255',
      'source' => 'non-db',
    ),
    'latest_revision_id' => 
    array (
      'name' => 'latest_revision_id',
      'vname' => 'LBL_REVISION',
      'type' => 'varchar',
      'len' => '36',
      'source' => 'non-db',
    ),
  ),
  'relationships' => 
  array (
    'revisions_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'DocumentRevisions',
      'rhs_table' => 'document_revisions',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'documentrevisionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'custom_fields' => false,
);
?>
