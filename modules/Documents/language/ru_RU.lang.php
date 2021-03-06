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
  'DEF_CREATE_LOG' => 'Документ создан',
  'ERR_DELETE_CONFIRM' => 'Вы хотите удалить эту версию документа?',
  'ERR_DELETE_LATEST_VERSION' => 'Вы не имеете права удалять последнюю версию документа.',
  'ERR_DOC_ACTIVE_DATE' => 'Дата публикации',
  'ERR_DOC_EXP_DATE' => 'Срок действия',
  'ERR_DOC_NAME' => 'Название документа',
  'ERR_DOC_VERSION' => 'Версия документа',
  'ERR_FILENAME' => 'Имя файла',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Пользователь попытался получить доступ к неисправному внешнему API ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Проверка логина для внешнего API ({0}) была неуспешной',
  'ERR_MISSING_FILE' => 'В этом документе не хватает файла, вероятно, в результате в ошибки во время загрузки. Попробуйте перезагрузить файл или свяжитесь с администратором.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Контрагенты',
  'LBL_ACTIVE_DATE' => 'Дата публикации',
  'LBL_ASSIGNED_TO_NAME' => 'Ответственный (-ая):',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Ошибки',
  'LBL_CASES_SUBPANEL_TITLE' => 'Обращения',
  'LBL_CATEGORY' => 'Категория',
  'LBL_CATEGORY_VALUE' => 'Категория:',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Неопределенный',
  'LBL_CHANGE_LOG' => 'История изменений',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакты',
  'LBL_CONTRACTS' => 'Контракты',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Связанные контракты',
  'LBL_CONTRACT_NAME' => 'Название контракта:',
  'LBL_CONTRACT_STATUS' => 'Статус контракта:',
  'LBL_CREATED' => 'Кем создано',
  'LBL_CREATED_BY' => 'Создано',
  'LBL_CREATED_USER' => 'Создано Пользователем',
  'LBL_DATE_ENTERED' => 'Дата создания',
  'LBL_DATE_MODIFIED' => 'Дата изменения',
  'LBL_DELETED' => 'Удалено',
  'LBL_DESCRIPTION' => 'Описание',
  'LBL_DET_IS_TEMPLATE' => 'Шаблон? :',
  'LBL_DET_RELATED_DOCUMENT' => 'Связанный документ:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Версия связанного документа:',
  'LBL_DET_TEMPLATE_TYPE' => 'Тип документа:',
  'LBL_DOCUMENT' => 'Связанные документы',
  'LBL_DOCUMENT_ID' => 'ID документа',
  'LBL_DOCUMENT_INFORMATION' => 'Просмотр документа',
  'LBL_DOCUMENT_NAME' => 'Название документа',
  'LBL_DOCUMENT_REVISION_ID' => 'Id версии документа:',
  'LBL_DOC_ACTIVE_DATE' => 'Дата публикации:',
  'LBL_DOC_DESCRIPTION' => 'Описание:',
  'LBL_DOC_EXP_DATE' => 'Срок действия:',
  'LBL_DOC_ID' => 'ID источника документа',
  'LBL_DOC_NAME' => 'Название документа:',
  'LBL_DOC_REV_HEADER' => 'Версии документов',
  'LBL_DOC_STATUS' => 'Статус:',
  'LBL_DOC_STATUS_ID' => 'Id статуса:',
  'LBL_DOC_TYPE' => 'Источник',
  'LBL_DOC_TYPE_POPUP' => 'Выберите источник, для загрузки документа, откуда он потом будет доступен.',
  'LBL_DOC_URL' => 'URL источника документа',
  'LBL_DOC_VERSION' => 'Версия:',
  'LBL_DOWNNLOAD_FILE' => 'Загрузить файл:',
  'LBL_EXPIRATION_DATE' => 'Срок действия',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Ниже в убывающем порядке показаны 20 файлов, которые изменялись наиболее часто. Чтобы найти другие файлы, используйте поиск.',
  'LBL_FILENAME' => 'Имя файла',
  'LBL_FILE_EXTENSION' => 'Расширение файла',
  'LBL_FILE_UPLOAD' => 'Файл:',
  'LBL_FILE_URL' => 'Адрес файла',
  'LBL_HOMEPAGE_TITLE' => 'Мои документы',
  'LBL_IS_TEMPLATE' => 'Является шаблоном',
  'LBL_LASTEST_REVISION_NAME' => 'Номер последней версии:',
  'LBL_LAST_REV_CREATE_DATE' => 'Дата создания последней версии',
  'LBL_LAST_REV_CREATOR' => 'Версия создана:',
  'LBL_LAST_REV_DATE' => 'Ревизия от:',
  'LBL_LAST_REV_MIME_TYPE' => 'Последняя версия типа MIME',
  'LBL_LATEST_REVISION' => 'Последняя версия',
  'LBL_LATEST_REVISION_ID' => 'ID последней версии',
  'LBL_LINKED_ID' => 'Id связанного документа',
  'LBL_LIST_ACTIVE_DATE' => 'Дата публикации',
  'LBL_LIST_CATEGORY' => 'Категория',
  'LBL_LIST_DOCUMENT' => 'Документ',
  'LBL_LIST_DOCUMENT_NAME' => 'Название документа',
  'LBL_LIST_DOC_TYPE' => 'Источник',
  'LBL_LIST_DOWNLOAD' => 'Загрузить',
  'LBL_LIST_EXP_DATE' => 'Срок действия',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Имя файла',
  'LBL_LIST_FILENAME' => 'Файл',
  'LBL_LIST_FORM_TITLE' => 'Список документов',
  'LBL_LIST_IS_TEMPLATE' => 'Шаблон?',
  'LBL_LIST_LAST_REV_CREATOR' => 'Опубликовано',
  'LBL_LIST_LAST_REV_DATE' => 'Ревизия от',
  'LBL_LIST_LATEST_REVISION' => 'Последняя ревизия',
  'LBL_LIST_REVISION' => 'Версия',
  'LBL_LIST_SELECTED_REVISION' => 'Действующая ревизия',
  'LBL_LIST_STATUS' => 'Статус',
  'LBL_LIST_SUBCATEGORY' => 'Подкатегория',
  'LBL_LIST_TEMPLATE_TYPE' => 'Тип документа',
  'LBL_LIST_VIEW_DOCUMENT' => 'Просмотр',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Шаблон объединения почты:',
  'LBL_MIME' => 'Тип MIME',
  'LBL_MODIFIED' => 'Изменено (ID)',
  'LBL_MODIFIED_USER' => 'Автор изменений',
  'LBL_MODULE_NAME' => 'Документы',
  'LBL_MODULE_NAME_SINGULAR' => 'Документ',
  'LBL_MODULE_TITLE' => 'Документы: Главная',
  'LBL_NAME' => 'Название документа',
  'LBL_NEW_FORM_TITLE' => 'Новый документ',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Сделки',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Продукты',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Коммерческие предложения',
  'LBL_RELATED_DOCUMENT_ID' => 'ID связанного документа',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID версии связанного документа',
  'LBL_REVISION' => 'Версия',
  'LBL_REVISIONS' => 'Версии документов',
  'LBL_REVISIONS_PANEL' => 'Детали версии',
  'LBL_REVISIONS_SUBPANEL' => 'Версии',
  'LBL_REVISION_NAME' => 'Номер версии',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Название документа',
  'LBL_SEARCH_FORM_TITLE' => 'Найти документ',
  'LBL_SELECTED_REVISION_FILENAME' => 'Имя файла последней версии',
  'LBL_SELECTED_REVISION_ID' => 'ID выбранной версии',
  'LBL_SELECTED_REVISION_NAME' => 'Название выбранной версии:',
  'LBL_SF_ACTIVE_DATE' => 'Дата публикации:',
  'LBL_SF_CATEGORY' => 'Категория:',
  'LBL_SF_DOCUMENT' => 'Название документа:',
  'LBL_SF_EXP_DATE' => 'Срок действия:',
  'LBL_SF_SUBCATEGORY' => 'Подкатегория:',
  'LBL_STATUS' => 'Статус',
  'LBL_SUBCATEGORY' => 'Подкатегория',
  'LBL_SUBCATEGORY_VALUE' => 'Подкатегория:',
  'LBL_TEAM' => 'Команда:',
  'LBL_TEMPLATE_TYPE' => 'Тип документа',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Возвраты',
  'LBL_TREE_TITLE' => 'Документы',
  'LNK_DOCUMENT_LIST' => 'Обзор документов',
  'LNK_NEW_DOCUMENT' => 'Новый документ',
  'LNK_NEW_MAIL_MERGE' => 'Объединение почты',
);

