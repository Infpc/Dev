<?php
// created: 2013-06-11 10:17:51
$viewdefs['Contracts']['DetailView'] = array (
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
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
      ),
    ),
    'useTabs' => false,
    'tabDefs' => 
    array (
      'LBL_CONTRACT_INFORMATION' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      'LBL_DETAILVIEW_PANEL1' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
    ),
    'syncDetailEditViews' => true,
  ),
  'panels' => 
  array (
    'lbl_contract_information' => 
    array (
      0 => 
      array (
        0 => 'account_name',
        1 => 'status',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'date_entered',
          'customCode' => '{$fields.date_entered.value}&nbsp;{$APP.LBL_BY}&nbsp;{$fields.created_by_name.value}',
          'label' => 'LBL_DATE_ENTERED',
        ),
        1 => 
        array (
          'name' => 'date_modified',
          'customCode' => '{$fields.date_modified.value}&nbsp;{$APP.LBL_BY}&nbsp;{$fields.modified_by_name.value}',
          'label' => 'LBL_DATE_MODIFIED',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_CONTRACT_NAME',
        ),
      ),
      3 => 
      array (
        0 => 'company_signed_date',
        1 => 
        array (
          'name' => 'signataire_c',
          'studio' => 'visible',
          'label' => 'LBL_SIGNATAIRE_C',
        ),
      ),
      4 => 
      array (
        0 => 'start_date',
        1 => 'end_date',
      ),
      5 => 
      array (
        0 => 'customer_signed_date',
        1 => 
        array (
          'name' => 'autorisation_loi_c',
          'label' => 'LBL_AUTORISATION_LOI_C',
        ),
      ),
      6 => 
      array (
        0 => 
        array (
          'name' => 'souscription_c',
          'studio' => 'visible',
          'label' => 'LBL_SOUSCRIPTION_C',
        ),
        1 => 'description',
      ),
    ),
    'lbl_detailview_panel1' => 
    array (
      0 => 
      array (
        0 => 'team_name',
      ),
    ),
  ),
);