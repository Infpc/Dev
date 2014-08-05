<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'COLUMN_TITLE_FTS' => 'Text complet cerques',
  'LBL_HAS_PARENT' => 'Té pares',
  'LBL_PARENT_DROPDOWN' => 'Pares desplegable',
  'LBL_EDIT_VIS' => 'Edita visibilitat',
  'LNK_NOTE_LIST' => 'Notes',
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'COLUMN_TITLE_URL' => 'Default URL',
  'COLUMN_TITLE_LABEL_COLS' => 'Columns',
  'COLUMN_TITLE_IMPORTABLE' => 'Importable',
  'LBL_DEPENDENT_CHECKBOX' => 'Dependent',
  'LBL_FORMULA' => 'Formula',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Dependent',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'U.S. Format',
  'LBL_DEPENDENT' => 'Dependent',
  'LNK_NEW_CALL' => 'Programar Trucada',
  'LNK_NEW_MEETING' => 'Programar Reunió',
  'LNK_NEW_TASK' => 'Crear Tasca',
  'LNK_NEW_NOTE' => 'Crear Nota o Adjunt',
  'LNK_NEW_EMAIL' => 'Arxivar Correu',
  'LNK_CALL_LIST' => 'Trucades',
  'LNK_MEETING_LIST' => 'Reunions',
  'LNK_TASK_LIST' => 'Tasques',
  'LNK_EMAIL_LIST' => 'Correus',
  'LBL_ADD_FIELD' => 'Afegir camp:',
  'LBL_MODULE_SELECT' => 'Mòdul d&#39;edició',
  'LBL_SEARCH_FORM_TITLE' => 'Mòdul de recerca',
  'COLUMN_TITLE_NAME' => 'Nom del camp',
  'COLUMN_TITLE_DISPLAY_LABEL' => 'Etiqueta de visualizació',
  'COLUMN_TITLE_LABEL_VALUE' => 'Etiqueta de valor',
  'COLUMN_TITLE_LABEL' => 'Sistema d&#39;etiquetatge',
  'COLUMN_TITLE_DATA_TYPE' => 'Tipus de dades',
  'COLUMN_TITLE_MAX_SIZE' => 'Mida màxima',
  'COLUMN_TITLE_HELP_TEXT' => 'Text d&#39;ajuda',
  'COLUMN_TITLE_COMMENT_TEXT' => 'Comentari de text',
  'COLUMN_TITLE_REQUIRED_OPTION' => 'Camp obligatori',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'Valor per defecte',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'Valor per defecte',
  'COLUMN_TITLE_EXT1' => 'Meta de camp addicional 1',
  'COLUMN_TITLE_EXT2' => 'Meta de camp addicional 2',
  'COLUMN_TITLE_EXT3' => 'Meta de camp addicional 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'Alçada iframe',
  'COLUMN_TITLE_AUDIT' => 'Auditoria',
  'COLUMN_TITLE_REPORTABLE' => 'Reportar',
  'COLUMN_TITLE_MIN_VALUE' => 'Valor mínim',
  'COLUMN_TITLE_MAX_VALUE' => 'Valor màxim',
  'COLUMN_TITLE_LABEL_ROWS' => 'Files',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# Items de la mostra',
  'COLUMN_TITLE_AUTOINC_NEXT' => 'Auto increment valor següent',
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'deshabilitar el format',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Habilitar la cerca de rang',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'Cerca Global',
  'LBL_DROP_DOWN_LIST' => 'Llista desplegable',
  'LBL_RADIO_FIELDS' => 'Els camps de ràdio',
  'LBL_MULTI_SELECT_LIST' => 'Selecciona multi llista',
  'COLUMN_TITLE_PRECISION' => 'Precisió',
  'MSG_DELETE_CONFIRM' => 'Esteu segur que voleu suprimir aquest element?',
  'POPUP_INSERT_HEADER_TITLE' => 'Afegir camp personalitzat',
  'POPUP_EDIT_HEADER_TITLE' => 'Editar camp personalitzat',
  'LNK_SELECT_CUSTOM_FIELD' => 'Seleccionar camp personalitzat',
  'LNK_REPAIR_CUSTOM_FIELD' => 'Reparar camps personalitzats',
  'LBL_MODULE' => 'Mòdul',
  'COLUMN_TITLE_MASS_UPDATE' => 'Actualització massiva',
  'COLUMN_TITLE_DUPLICATE_MERGE' => 'Combinar duplicats',
  'LBL_LABEL' => 'Etiqueta',
  'LBL_DATA_TYPE' => 'Tipus',
  'LBL_DEFAULT_VALUE' => 'Valor per defecte',
  'LBL_AUDITED' => 'Auditats',
  'LBL_REPORTABLE' => 'Reportar',
  'ERR_RESERVED_FIELD_NAME' => 'Paraula reservada',
  'ERR_SELECT_FIELD_TYPE' => 'Seleccioneu un tipus de camp',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'El nom de camp ja existeix',
  'LBL_BTN_ADD' => 'Afegir',
  'LBL_BTN_EDIT' => 'Editar',
  'LBL_GENERATE_URL' => 'Generar URL',
  'LBL_DEPENDENT_TRIGGER' => 'Disparador',
  'LBL_CALCULATED' => 'Valor calculat',
  'LBL_BTN_EDIT_VISIBILITY' => 'Edita visibilitat',
  'LBL_LINK_TARGET' => 'Obrir aquest enllaç en',
  'LBL_IMAGE_WIDTH' => 'Amplada',
  'LBL_IMAGE_HEIGHT' => 'Alçada',
  'LBL_IMAGE_BORDER' => 'Vora',
  'LBL_VISIBLE_IF' => 'Visibles si',
  'LBL_ENFORCED' => 'Forçades',
  'LBL_HELP' => 'Ajuda',
);

