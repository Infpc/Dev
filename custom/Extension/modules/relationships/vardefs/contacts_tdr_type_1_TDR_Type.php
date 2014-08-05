<?php
// created: 2013-02-18 09:58:50
$dictionary["TDR_Type"]["fields"]["contacts_tdr_type_1"] = array (
  'name' => 'contacts_tdr_type_1',
  'type' => 'link',
  'relationship' => 'contacts_tdr_type_1',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_TDR_TYPE_1_FROM_CONTACTS_TITLE',
  'id_name' => 'contacts_tdr_type_1contacts_ida',
);
$dictionary["TDR_Type"]["fields"]["contacts_tdr_type_1_name"] = array (
  'name' => 'contacts_tdr_type_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CONTACTS_TDR_TYPE_1_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'contacts_tdr_type_1contacts_ida',
  'link' => 'contacts_tdr_type_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["TDR_Type"]["fields"]["contacts_tdr_type_1contacts_ida"] = array (
  'name' => 'contacts_tdr_type_1contacts_ida',
  'type' => 'link',
  'relationship' => 'contacts_tdr_type_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CONTACTS_TDR_TYPE_1_FROM_TDR_TYPE_TITLE',
);
