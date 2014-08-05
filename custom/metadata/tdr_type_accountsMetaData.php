<?php
// created: 2013-04-26 23:37:11
$dictionary["tdr_type_accounts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'tdr_type_accounts' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'TDR_Type',
      'rhs_table' => 'tdr_type',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tdr_type_accounts_c',
      'join_key_lhs' => 'tdr_type_accountsaccounts_ida',
      'join_key_rhs' => 'tdr_type_accountstdr_type_idb',
    ),
  ),
  'table' => 'tdr_type_accounts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'tdr_type_accountsaccounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tdr_type_accountstdr_type_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tdr_type_accountsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tdr_type_accounts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tdr_type_accountsaccounts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tdr_type_accounts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tdr_type_accountstdr_type_idb',
      ),
    ),
  ),
);