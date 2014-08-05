<?php
 // created: 2013-03-27 16:27:37
$layout_defs["Accounts"]["subpanel_setup"]['accounts_contracts_1'] = array (
  'order' => 100,
  'module' => 'Contracts',
  'subpanel_name' => 'ForAccounts',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_CONTRACTS_1_FROM_CONTRACTS_TITLE',
  'get_subpanel_data' => 'accounts_contracts_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
