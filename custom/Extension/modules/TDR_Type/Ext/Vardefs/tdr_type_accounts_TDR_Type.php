<?php
// created: 2013-04-26 23:37:11
$dictionary["TDR_Type"]["fields"]["tdr_type_accounts"] = array (
  'name' => 'tdr_type_accounts',
  'type' => 'link',
  'relationship' => 'tdr_type_accounts',
  'source' => 'non-db',
  'vname' => 'LBL_TDR_TYPE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'id_name' => 'tdr_type_accountsaccounts_ida',
);
$dictionary["TDR_Type"]["fields"]["tdr_type_accounts_name"] = array (
  'name' => 'tdr_type_accounts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_TDR_TYPE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'tdr_type_accountsaccounts_ida',
  'link' => 'tdr_type_accounts',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["TDR_Type"]["fields"]["tdr_type_accountsaccounts_ida"] = array (
  'name' => 'tdr_type_accountsaccounts_ida',
  'type' => 'link',
  'relationship' => 'tdr_type_accounts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_TDR_TYPE_ACCOUNTS_FROM_TDR_TYPE_TITLE',
);
