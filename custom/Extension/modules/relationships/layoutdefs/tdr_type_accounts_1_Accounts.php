<?php
 // created: 2013-02-18 08:44:55
$layout_defs["Accounts"]["subpanel_setup"]['tdr_type_accounts_1'] = array (
  'order' => 100,
  'module' => 'TDR_Type',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TDR_TYPE_ACCOUNTS_1_FROM_TDR_TYPE_TITLE',
  'get_subpanel_data' => 'tdr_type_accounts_1',
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
