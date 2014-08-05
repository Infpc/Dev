<?php
$module_name = 'TDR_Type';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'ROLE_SUR_COMPTE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_ROLE_SUR_COMPTE',
    'width' => '10%',
    'default' => true,
  ),
  'TDR_TYPE_ACCOUNTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TDR_TYPE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'TDR_TYPE_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'TDR_TYPE_CONTACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_TDR_TYPE_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'TDR_TYPE_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => false,
  ),
  'TEAM_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_TEAM',
    'default' => false,
  ),
);
?>
