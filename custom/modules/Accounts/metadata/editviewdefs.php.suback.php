<?php
$viewdefs ['Accounts'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'useTabs' => true,
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
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
        1 => 
        array (
          'file' => 'custom/include/SugarFields/Fields/MatriculeCustom/MatriculeCustom.js',
        ),
        2 => 
        array (
          'file' => 'custom/include/js/InformationsOF.js',
        ),
      ),
      'tabDefs' => 
      array (
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL2' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL4' => 
        array (
          'newTab' => true,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => false,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'name_2_c',
            'label' => 'LBL_NAME_2_C',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'raison_social_c',
            'studio' => 'visible',
            'label' => 'LBL_RAISON_SOCIAL_C',
          ),
          1 => 'account_type',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'groupe_nace_c',
            'studio' => 'visible',
            'label' => 'LBL_GROUPE_NACE',
          ),
          1 => 
          array (
            'name' => 'code_nace_c',
            'studio' => 'visible',
            'label' => 'LBL_CODE_NACE_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'participe_a_la_loi_c',
            'label' => '',
            'type' => 'TypeDeClient',
            'hideLabel' => true,
          ),
          1 => 
          array (
            'name' => 'code_banque_c',
            'studio' => 'visible',
            'label' => 'LBL_CODE_BANQUE_C',
            'type' => 'ParticipeLoi',
            'hideLabel' => true,
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'employees_c',
            'label' => 'LBL_EMPLOYEES_C',
          ),
          1 => 
          array (
            'name' => 'mailing_c',
            'studio' => 'visible',
            'label' => 'LBL_MAILING',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'bloque_c',
            'label' => 'LBL_BLOQUE_C',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
		  
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'AddressWOStateP',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'AddressWOStateBP',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
          1 => 
          array (
            'name' => 'phone_alternate',
            'comment' => 'An alternate phone number',
            'label' => 'LBL_PHONE_ALT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'numero_of_s_c',
            'label' => 'LBL_NUMERO_OF_S',
          ),
          1 => 
          array (
            'name' => 'date_of_c',
            'label' => 'LBL_DATE_OF',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'domaine_formation_c',
            'studio' => 'visible',
            'label' => 'LBL_DOMAINE_FORMATION',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'nombre_form_sur_portails_c',
            'label' => 'LBL_NOMBRE_FORM_SUR_PORTAILS_C',
          ),
          1 => 
          array (
            'name' => 'nombre_formations_catalogue__c',
            'label' => 'LBL_NOMBRE_FORMATIONS_CATALOGUE_',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'nb_formateurs_occasionnels_c',
            'label' => 'LBL_NB_FORMATEURS_OCCASIONNELS_C',
          ),
          1 => 
          array (
            'name' => 'nb_formateurs_permanents_c',
            'label' => 'LBL_NB_FORMATEURS_PERMANENTS_C',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
      ),
    ),
  ),
);
?>
