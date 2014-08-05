<?php
// created: 2014-07-28 07:06:23
$subpanel_layout['list_fields'] = array (
  'tdr_type_accounts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_TDR_TYPE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
    'id' => 'TDR_TYPE_ACCOUNTSACCOUNTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Accounts',
    'target_record_key' => 'tdr_type_accountsaccounts_ida',
  ),
  'role_sur_compte' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'vname' => 'LBL_ROLE_SUR_COMPTE',
    'width' => '10%',
    'default' => true,
  ),
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'width' => '5%',
    'default' => true,
  ),
  'autorisation_of_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_AUTORISATION_OF',
    'width' => '10%',
    'sortable' => false,
  ),
  'date_autorisation_of_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_DATE_AUTORISATION_OF_C',
    'width' => '40%',
    'sortable' => false,
  ),
  'edit_button' => 
  array (
    'widget_class' => 'SubPanelEditButton',
    'module' => 'TDR_Type',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'widget_class' => 'SubPanelDeleteButton',
    'module' => 'TDR_Type',
    'width' => '5%',
    'refresh_page' => 1,
    'default' => true,
  ),
);