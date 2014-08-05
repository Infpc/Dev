<?php
// created: 2013-04-26 23:37:11
$dictionary["TDR_Type"]["fields"]["tdr_type_contacts"] = array (
  'name' => 'tdr_type_contacts',
  'type' => 'link',
  'relationship' => 'tdr_type_contacts',
  'source' => 'non-db',
  'vname' => 'LBL_TDR_TYPE_CONTACTS_FROM_CONTACTS_TITLE',
  'id_name' => 'tdr_type_contactscontacts_ida',
);
$dictionary["TDR_Type"]["fields"]["tdr_type_contacts_name"] = array (
  'name' => 'tdr_type_contacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TDR_TYPE_CONTACTS_FROM_CONTACTS_TITLE',
  'save' => true,
  'id_name' => 'tdr_type_contactscontacts_ida',
  'link' => 'tdr_type_contacts',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["TDR_Type"]["fields"]["tdr_type_contactscontacts_ida"] = array (
  'name' => 'tdr_type_contactscontacts_ida',
  'type' => 'link',
  'relationship' => 'tdr_type_contacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TDR_TYPE_CONTACTS_FROM_TDR_TYPE_TITLE',
);
