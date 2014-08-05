<?php
$module_name = 'TDR_Type';
$viewdefs [$module_name] = 
array (
  'QuickCreate' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
          ),
          1 => 
          array (
            'name' => 'tdr_type_accounts_name',
            'label' => 'LBL_TDR_TYPE_ACCOUNTS_FROM_ACCOUNTS_TITLE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'role_sur_compte',
            'studio' => 'visible',
            'label' => 'LBL_ROLE_SUR_COMPTE',
          ),
          1 => 
          array (
            'name' => 'tdr_type_contacts_name',
            'label' => 'LBL_TDR_TYPE_CONTACTS_FROM_CONTACTS_TITLE',
          ),
        ),
      ),
    ),
  ),
);
?>
