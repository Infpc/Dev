<?php
// created: 2013-04-26 17:42:56
$dictionary["accounts_tr_role_2"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_tr_role_2' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'TR_Role',
      'rhs_table' => 'tr_role',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_tr_role_2_c',
      'join_key_lhs' => 'accounts_tr_role_2accounts_ida',
      'join_key_rhs' => 'accounts_tr_role_2tr_role_idb',
    ),
  ),
  'table' => 'accounts_tr_role_2_c',
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
      'name' => 'accounts_tr_role_2accounts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'accounts_tr_role_2tr_role_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_tr_role_2spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_tr_role_2_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'accounts_tr_role_2accounts_ida',
        1 => 'accounts_tr_role_2tr_role_idb',
      ),
    ),
  ),
);