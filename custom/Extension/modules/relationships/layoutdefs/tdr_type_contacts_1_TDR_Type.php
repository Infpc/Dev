<?php
 // created: 2013-02-18 08:45:58
$layout_defs["TDR_Type"]["subpanel_setup"]['tdr_type_contacts_1'] = array (
  'order' => 100,
  'module' => 'Contacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TDR_TYPE_CONTACTS_1_FROM_CONTACTS_TITLE',
  'get_subpanel_data' => 'tdr_type_contacts_1',
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
