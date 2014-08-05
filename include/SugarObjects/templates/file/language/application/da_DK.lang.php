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
















	
$object_name = strtolower($object_name);
$app_list_strings = array (
  $object_name.'_category_dom' => 
  array (
    '' => '',
    'Marketing' => 'Markedsføring',
    'Knowledege Base' => 'Videnbase',
    'Sales' => 'Salg',
  ),
  $object_name.'_subcategory_dom' => 
  array (
    '' => '',
    'Marketing Collateral' => 'Markedsføringsmateriale',
    'Product Brochures' => 'Produktbrochurer',
    'FAQ' => 'Ofte stillede spørgsmål',
  ),
  $object_name.'_status_dom' => 
  array (
    'Active' => 'Aktiv',
    'Draft' => 'Kladde',
    'FAQ' => 'Ofte stillede spørgsmål',
    'Expired' => 'Udløbet',
    'Under Review' => 'Til gennemsyn',
    'Pending' => 'Afventer',
  ),
);
