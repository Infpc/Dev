<?php
 // created: 2013-04-26 17:42:27
$layout_defs["Accounts"]["subpanel_setup"]['accounts_tr_role_1'] = array (
  'order' => 100,
  'module' => 'TR_Role',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_ACCOUNTS_TR_ROLE_1_FROM_TR_ROLE_TITLE',
  'get_subpanel_data' => 'accounts_tr_role_1',
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
