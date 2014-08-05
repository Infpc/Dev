<?php
// created: 2013-02-18 08:45:58
$dictionary["Contact"]["fields"]["tdr_type_contacts_1"] = array (
  'name' => 'tdr_type_contacts_1',
  'type' => 'link',
  'relationship' => 'tdr_type_contacts_1',
  'source' => 'non-db',
  'vname' => 'LBL_TDR_TYPE_CONTACTS_1_FROM_TDR_TYPE_TITLE',
  'id_name' => 'tdr_type_contacts_1tdr_type_ida',
);
$dictionary["Contact"]["fields"]["tdr_type_contacts_1_name"] = array (
  'name' => 'tdr_type_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TDR_TYPE_CONTACTS_1_FROM_TDR_TYPE_TITLE',
  'save' => true,
  'id_name' => 'tdr_type_contacts_1tdr_type_ida',
  'link' => 'tdr_type_contacts_1',
  'table' => 'tdr_type',
  'module' => 'TDR_Type',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["tdr_type_contacts_1tdr_type_ida"] = array (
  'name' => 'tdr_type_contacts_1tdr_type_ida',
  'type' => 'link',
  'relationship' => 'tdr_type_contacts_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TDR_TYPE_CONTACTS_1_FROM_CONTACTS_TITLE',
);
