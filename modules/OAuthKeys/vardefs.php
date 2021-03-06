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

$dictionary['OAuthKey'] = array('table' => 'oauth_consumer',
    'favorites'=>false,
	'comment' => 'OAuth consumer keys',
	'audited'=>false,
	'fields' => array (
          'c_key' =>
          array (
            'name' => 'c_key',
            'vname' => 'LBL_CONSKEY',
            'type' => 'varchar',
            'required' => true,
            'comment' => 'Consumer public key',
            'importable' => 'required',
        	'massupdate' => 0,
            'reportable'=>false,
        	'studio' => 'hidden',
          ),
          'c_secret' =>
          array (
            'name' => 'c_secret',
            'vname' => 'LBL_CONSSECRET',
            //'type' => 'encrypt',
            'type' => 'varchar',
          	'required' => true,
            'comment' => 'Consumer secret key',
            'importable' => 'required',
        	'massupdate' => 0,
            'reportable'=>false,
        	'studio' => 'hidden',
          ),
          'tokens' =>
          array (
            'name' => 'tokens',
            'type' => 'link',
            'relationship' => 'consumer_tokens',
            'module'=>'OAuthTokens',
            'bean_name'=>'OAuthToken',
            'source'=>'non-db',
            'vname'=>'LBL_TOKENS',
          ),

    ),
    'indices' => array (
       array('name' =>'ckey', 'type' =>'unique', 'fields'=>array('c_key')),
    )
);
if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}
VardefManager::createVardef('OAuthKeys','OAuthKey', array('basic','assignable'));
