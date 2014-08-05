<?php

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





if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_subcategory_dom' => 
  array (
    'FAQ' => 'Frågor och svar',
    '' => '',
    'Marketing Collateral' => 'Marknadsmaterial',
    'Product Brochures' => 'Produkt broschyrer',
  ),
  $object_name.'_category_dom' => 
  array (
    '' => '',
    'Marketing' => 'Marknad',
    'Knowledege Base' => 'Kunskapsbas',
    'Sales' => 'Sälj',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Draft' => 'Utkast',
    'FAQ' => 'Frågor och svar',
    'Expired' => 'Utgången',
    'Under Review' => 'Under granskning',
    'Pending' => 'Avvaktar',
  ),
);
