<?php
$searchdefs ['Accounts'] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'current_user_only' => 
      array (
        'name' => 'current_user_only',
        'label' => 'LBL_CURRENT_USER_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
      ),
    ),
    'advanced_search' => 
    array (
      'name' => 
      array (
        'name' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'name_2_c' => 
      array (
        'type' => 'varchar',
        'default' => true,
        'label' => 'LBL_NAME_2_C',
        'width' => '10%',
        'name' => 'name_2_c',
      ),
      'phone' => 
      array (
        'name' => 'phone',
        'label' => 'LBL_ANY_PHONE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'email' => 
      array (
        'name' => 'email',
        'label' => 'LBL_ANY_EMAIL',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_street' => 
      array (
        'name' => 'address_street',
        'label' => 'LBL_ANY_ADDRESS',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_city' => 
      array (
        'name' => 'address_city',
        'label' => 'LBL_CITY',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_state' => 
      array (
        'name' => 'address_state',
        'label' => 'LBL_STATE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'address_postalcode' => 
      array (
        'name' => 'address_postalcode',
        'label' => 'LBL_POSTAL_CODE',
        'type' => 'name',
        'default' => true,
        'width' => '10%',
      ),
      'billing_address_country' => 
      array (
        'name' => 'billing_address_country',
        'label' => 'LBL_COUNTRY',
        'type' => 'name',
        'options' => 'countries_dom',
        'default' => true,
        'width' => '10%',
      ),
      'account_type' => 
      array (
        'name' => 'account_type',
        'default' => true,
        'width' => '10%',
      ),
      'assigned_user_id' => 
      array (
        'name' => 'assigned_user_id',
        'type' => 'enum',
        'label' => 'LBL_ASSIGNED_TO',
        'function' => 
        array (
          'name' => 'get_user_array',
          'params' => 
          array (
            0 => false,
          ),
        ),
        'default' => true,
        'width' => '10%',
      ),
      'is_offreur_de_formation_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_OFFREUR_DE_FORMATION_C',
        'width' => '10%',
        'name' => 'is_offreur_de_formation_c',
      ),
      'participe_a_la_loi_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_PARTICIPE_A_LA_LOI_C',
        'width' => '10%',
        'name' => 'participe_a_la_loi_c',
      ),
      'is_adherent_portail_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_ADHERENT_PORTAIL_C',
        'width' => '10%',
        'name' => 'is_adherent_portail_c',
      ),
      'is_adherent_repertoire_c' => 
      array (
        'type' => 'bool',
        'default' => true,
        'label' => 'LBL_IS_ADHERENT_REPERTOIRE_C',
        'width' => '10%',
        'name' => 'is_adherent_repertoire_c',
      ),
      'date_dernier_dossier_s_c' => 
      array (
        'type' => 'int',
        'default' => true,
        'label' => 'LBL_DATE_DERNIER_DOSSIER_S_C',
        'width' => '10%',
        'name' => 'date_dernier_dossier_s_c',
      ),
      'favorites_only' => 
      array (
        'name' => 'favorites_only',
        'label' => 'LBL_FAVORITES_FILTER',
        'type' => 'bool',
        'default' => true,
        'width' => '10%',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
?>
