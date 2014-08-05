<?php
$viewdefs ['Accounts'] = 
array (
  'DetailView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'EDIT',
          1 => 'DUPLICATE',
          2 => 'DELETE',
          3 => 'FIND_DUPLICATES',
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
        'LBL_EDITVIEW_PANEL3' => 
        array (
          'newTab' => true,
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
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'label' => 'LBL_DATE_MODIFIED',
            'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'comment' => 'Name of the Company',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => 'name_2_c',
            'label' => 'LBL_NAME_2_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'raison_social_c',
            'studio' => 'visible',
            'label' => 'LBL_RAISON_SOCIAL_C',
          ),
          1 => 
          array (
            'name' => 'account_type',
            'comment' => 'The Company is of this type',
            'label' => 'LBL_TYPE',
          ),
        ),
        3 => 
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
        4 => 
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
        5 => 
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
        6 => 
        array (
          0 => 
          array (
            'name' => 'bloque_c',
            'label' => 'LBL_BLOQUE_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'comment' => 'Full text of the note',
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
            'label' => 'LBL_BILLING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'label' => 'LBL_SHIPPING_ADDRESS',
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'phone_office',
            'comment' => 'The office phone number',
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
            'comment' => 'The fax phone number of this company',
            'label' => 'LBL_FAX',
          ),
          1 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
            'displayParams' => 
            array (
              'link_target' => '_blank',
            ),
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
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'masse_salariale_c',
            'label' => 'LBL_MASSE_SALARIALE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_dernier_dossier_s_c',
            'label' => 'LBL_DATE_DERNIER_DOSSIER_S_C',
          ),
          1 => 
          array (
            'name' => 'date_premier_dossier_str_c',
            'label' => 'LBL_DATE_PREMIER_DOSSIER_STR_C',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'type_dernier_dossier_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_DERNIER_DOSSIER_C',
          ),
          1 => 
          array (
            'name' => 'type_premier_dossier_c',
            'studio' => 'visible',
            'label' => 'LBL_TYPE_PREMIER_DOSSIER_C',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'effectif_homme_c',
            'label' => 'LBL_EFFECTIF_HOMME',
          ),
          1 => 
          array (
            'name' => 'effectif_femmes_c',
            'label' => 'LBL_EFFECTIF_FEMMES',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'effectif_cadres_homme_c',
            'label' => 'LBL_EFFECTIF_CADRES_HOMME',
          ),
          1 => 
          array (
            'name' => 'effectif_cadres_femmes_c',
            'label' => 'LBL_EFFECTIF_CADRES_FEMMES',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'effectif_dir_homme_c',
            'label' => 'LBL_EFFECTIF_DIR_HOMME',
          ),
          1 => 
          array (
            'name' => 'effectif_dir_femmes_c',
            'label' => 'LBL_EFFECTIF_DIR_FEMMES',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'effectif_sal_qualif_hommes_c',
            'label' => 'LBL_EFFECTIF_SAL_QUALIF_HOMMES',
          ),
          1 => 
          array (
            'name' => 'effectif_sal_qualif_femmes_c',
            'label' => 'LBL_EFFECTIF_SAL_QUALIF_FEMMES_C',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'effectif_sal_nqualif_hommes_c',
            'label' => 'LBL_EFFECTIF_SAL_NQUALIF_HOMMES',
          ),
          1 => 
          array (
            'name' => 'effectif_sal_nqualif_femmes_c',
            'label' => 'LBL_EFFECTIF_SAL_NQUALIF_FEMMES',
          ),
        ),
        8 => 
        array (
          0 => 
          array (
            'name' => 'effectif_sup45_hommes_c',
            'label' => 'LBL_EFFECTIF_SUP45_HOMMES_C',
          ),
          1 => 
          array (
            'name' => 'effectif_sup45_femmes_c',
            'label' => 'LBL_EFFECTIF_SUP45_FEMMES_C',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'nb_dossiers_c',
            'label' => 'LBL_NB_DOSSIERS_C',
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
            'name' => 'reference_memorial_c',
            'label' => 'LBL_REFERENCE_MEMORIAL_C',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'domaine_formation_c',
            'studio' => 'visible',
            'label' => 'LBL_DOMAINE_FORMATION',
          ),
        ),
        3 => 
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
        4 => 
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
          0 => 'team_name',
        ),
      ),
    ),
  ),
);
?>
