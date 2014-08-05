<?php
// created: 2013-02-18 08:45:58
$dictionary["tdr_type_contacts_1"] = array (
  'true_relationship_type' => 'one-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'tdr_type_contacts_1' => 
    array (
      'lhs_module' => 'TDR_Type',
      'lhs_table' => 'tdr_type',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'tdr_type_contacts_1_c',
      'join_key_lhs' => 'tdr_type_contacts_1tdr_type_ida',
      'join_key_rhs' => 'tdr_type_contacts_1contacts_idb',
    ),
  ),
  'table' => 'tdr_type_contacts_1_c',
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
      'name' => 'tdr_type_contacts_1tdr_type_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'tdr_type_contacts_1contacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'tdr_type_contacts_1spk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'tdr_type_contacts_1_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'tdr_type_contacts_1tdr_type_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'tdr_type_contacts_1_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'tdr_type_contacts_1contacts_idb',
      ),
    ),
  ),
);