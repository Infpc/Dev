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
  'COLUMN_TITLE_FTS' => 'Keresendő kifejezés',
  'COLUMN_TITLE_GLOBAL_SEARCH' => 'Globális keresés',
  'LBL_HELP' => 'Segítség',
  'LBL_HAS_PARENT' => 'Rendelkezik szülővel',
  'LBL_PARENT_DROPDOWN' => 'Legördülő szülő',
  'LBL_EDIT_VIS' => 'Láthatóság szerkesztése',
  'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
  'LNK_NEW_CALL' => 'Hívás napló',
  'LNK_NEW_MEETING' => 'Találkozó ütemezése',
  'LNK_NEW_TASK' => 'Új feladat létrehozása',
  'LNK_NEW_NOTE' => 'Feljegyzés vagy melléklet létrehozása',
  'LNK_NEW_EMAIL' => 'Email archiválás',
  'LNK_CALL_LIST' => 'Hívások',
  'LNK_MEETING_LIST' => 'Találkozók',
  'LNK_TASK_LIST' => 'Feladatok',
  'LNK_NOTE_LIST' => 'Feljegyzések',
  'LNK_EMAIL_LIST' => 'Emailek',
  'LBL_ADD_FIELD' => 'Mező hozzáadása:',
  'LBL_MODULE_SELECT' => 'Modul kiválasztása szerkesztéshez',
  'LBL_SEARCH_FORM_TITLE' => 'Modul keresés',
  'COLUMN_TITLE_NAME' => 'Mező neve',
  'COLUMN_TITLE_DISPLAY_LABEL' => 'Címke megjelenítése',
  'COLUMN_TITLE_LABEL_VALUE' => 'Címke érték',
  'COLUMN_TITLE_LABEL' => 'Rendszer címke',
  'COLUMN_TITLE_DATA_TYPE' => 'Adattípus',
  'COLUMN_TITLE_MAX_SIZE' => 'Maximális méret',
  'COLUMN_TITLE_HELP_TEXT' => 'Súgószöveg',
  'COLUMN_TITLE_COMMENT_TEXT' => 'Hozzászólás szöveg',
  'COLUMN_TITLE_REQUIRED_OPTION' => 'Kötelező mező',
  'COLUMN_TITLE_DEFAULT_VALUE' => 'Alapértelmezett érték',
  'COLUMN_TITLE_DEFAULT_EMAIL' => 'Alapértelmezett érték',
  'COLUMN_TITLE_EXT1' => 'Extra meta mező 1',
  'COLUMN_TITLE_EXT2' => 'Extra meta mező 2',
  'COLUMN_TITLE_EXT3' => 'Extra meta mező 3',
  'COLUMN_TITLE_FRAME_HEIGHT' => 'iFrame magasság',
  'COLUMN_TITLE_URL' => 'Alapértelmezett URL',
  'COLUMN_TITLE_AUDIT' => 'Ellenőrzés',
  'COLUMN_TITLE_REPORTABLE' => 'Megjeleníthető',
  'COLUMN_TITLE_MIN_VALUE' => 'Minimum érték',
  'COLUMN_TITLE_MAX_VALUE' => 'Maximum érték',
  'COLUMN_TITLE_LABEL_ROWS' => 'Sorok',
  'COLUMN_TITLE_LABEL_COLS' => 'Oszlopok',
  'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# db tétel megjelenítve',
  'COLUMN_TITLE_AUTOINC_NEXT' => 'Automatikus növekmény a következő értékre',
  'COLUMN_DISABLE_NUMBER_FORMAT' => 'Formátum letiltása',
  'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'A tartományra való keresés engedélyezése',
  'LBL_DROP_DOWN_LIST' => 'Legördülő listából',
  'LBL_RADIO_FIELDS' => 'Rádió-gombok',
  'LBL_MULTI_SELECT_LIST' => 'Többszörösen választható lista',
  'COLUMN_TITLE_PRECISION' => 'Pontosság',
  'MSG_DELETE_CONFIRM' => 'Biztosan törölni akarja ezt a tételt?',
  'POPUP_INSERT_HEADER_TITLE' => 'Egyedi mező hozzáadása',
  'POPUP_EDIT_HEADER_TITLE' => 'Egyedi mező szerkesztése',
  'LNK_SELECT_CUSTOM_FIELD' => 'Válasszon egyedi mezőt',
  'LNK_REPAIR_CUSTOM_FIELD' => 'Egyedi mezők javítása',
  'LBL_MODULE' => 'Modul',
  'COLUMN_TITLE_MASS_UPDATE' => 'Tömeges frissítés',
  'COLUMN_TITLE_IMPORTABLE' => 'Importálható',
  'COLUMN_TITLE_DUPLICATE_MERGE' => 'Duplikált tételek egyesítése',
  'LBL_LABEL' => 'Címke',
  'LBL_DATA_TYPE' => 'Adattípus',
  'LBL_DEFAULT_VALUE' => 'Alapértelmezett érték',
  'LBL_AUDITED' => 'Ellenőrzött',
  'LBL_REPORTABLE' => 'Megjeleníthető',
  'ERR_RESERVED_FIELD_NAME' => 'Foglalt kulcsszó',
  'ERR_SELECT_FIELD_TYPE' => 'Kérem, válasszon egy mezőtípust',
  'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Mezőnév már létezik',
  'LBL_BTN_ADD' => 'Hozzáadás',
  'LBL_BTN_EDIT' => 'Szerkesztés',
  'LBL_GENERATE_URL' => 'URL létrehozása',
  'LBL_DEPENDENT_CHECKBOX' => 'Függő',
  'LBL_DEPENDENT_TRIGGER' => 'Indító',
  'LBL_CALCULATED' => 'Számított érték',
  'LBL_FORMULA' => 'Szabály',
  'LBL_DYNAMIC_VALUES_CHECKBOX' => 'Függő',
  'LBL_BTN_EDIT_VISIBILITY' => 'Láthatóság szerkesztése',
  'LBL_LINK_TARGET' => 'Nyissa meg a linket a',
  'LBL_IMAGE_WIDTH' => 'Szélesség',
  'LBL_IMAGE_HEIGHT' => 'Magasság',
  'LBL_IMAGE_BORDER' => 'Keret',
  'COLUMN_TITLE_VALIDATE_US_FORMAT' => 'Amerikai formátum',
  'LBL_DEPENDENT' => 'Függő',
  'LBL_VISIBLE_IF' => 'Látható ha',
  'LBL_ENFORCED' => 'Kikényszerített',
);

