<?php
// created: 2014-07-31 09:07:15
$subpanel_layout['list_fields'] = array (
  'tdr_type_contacts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_TDR_TYPE_CONTACTS_FROM_CONTACTS_TITLE',
    'id' => 'TDR_TYPE_CONTACTSCONTACTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'Contacts',
    'target_record_key' => 'tdr_type_contactscontacts_ida',
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
    'type' => 'datetimecombo',
    'default' => true,
    'vname' => 'LBL_DATE_AUTORISATION_OF_C',
    'width' => '30%',
    'sortable' => false,
  ),
  'reference_memorial_c' => 
  array (
    'type' => 'varchar',
    'default' => true,
    'vname' => 'LBL_REFERENCE_MEMORIAL_C',
    'width' => '10%',
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
    'refresh_page' => 1,
    'width' => '5%',
    'default' => true,
  ),
);