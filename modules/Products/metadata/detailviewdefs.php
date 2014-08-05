<?php
// created: 2013-06-11 10:18:01
$viewdefs['Products']['DetailView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 'AUDIT',
      ),
    ),
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
    'tabDefs' => 
    array (
      'DEFAULT' => 
      array (
        'newTab' => false,
        'panelDefault' => 'expanded',
      ),
      1 => 
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
        0 => 'name',
        1 => 'status',
      ),
      1 => 
      array (
        0 => 'quote_name',
        1 => 'contact_name',
      ),
      2 => 
      array (
        0 => 'account_name',
      ),
      3 => 
      array (
        0 => 'quantity',
        1 => 'date_purchased',
      ),
      4 => 
      array (
        0 => 'serial_number',
        1 => 'date_support_starts',
      ),
      5 => 
      array (
        0 => 'asset_number',
        1 => 'date_support_expires',
      ),
    ),
    0 => 
    array (
      0 => 
      array (
        0 => 'currency_id',
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'cost_price',
          'label' => '{$MOD.LBL_COST_PRICE|strip_semicolon} ({$CURRENCY})',
        ),
        1 => '',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'list_price',
          'label' => '{$MOD.LBL_LIST_PRICE|strip_semicolon} ({$CURRENCY})',
        ),
        1 => 
        array (
          'name' => 'book_value',
          'label' => '{$MOD.LBL_BOOK_VALUE|strip_semicolon} ({$CURRENCY})',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'discount_price',
          'label' => '{$MOD.LBL_DISCOUNT_PRICE|strip_semicolon} ({$CURRENCY})',
        ),
        1 => 'book_value_date',
      ),
      4 => 
      array (
        0 => 
        array (
          'name' => 'discount_amount',
          'customCode' => '{if $fields.discount_select.value}{sugar_number_format var=$fields.discount_amount.value}%{else}{$fields.currency_symbol.value}{sugar_number_format var=$fields.discount_amount.value}{/if}',
        ),
        1 => '',
      ),
    ),
    1 => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'website',
          'type' => 'link',
        ),
        1 => 'tax_class',
      ),
      1 => 
      array (
        0 => 'manufacturer_name',
        1 => 'weight',
      ),
      2 => 
      array (
        0 => 'mft_part_num',
        1 => 
        array (
          'name' => 'category_name',
          'type' => 'text',
        ),
      ),
      3 => 
      array (
        0 => 'vendor_part_num',
        1 => 'type_name',
      ),
      4 => 
      array (
        0 => 'description',
      ),
      5 => 
      array (
        0 => 'support_name',
        1 => 'support_contact',
      ),
      6 => 
      array (
        0 => 'support_description',
        1 => 'support_term',
      ),
    ),
  ),
);