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

	

$connector_strings = array (
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><br />De waarden voor de API en Secret Keys ontvangt u van LinkedIn&#169; door de Sugarinstallatie te registeren als nieuwe applicatie.<br/><br><br /><br />Neem deze stappen om de applicatie te registreren:<br/><br/><br /><br /><ol><li>Ga naar de LinkedIn&#169; Developers site: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a>.</li><br /><br /><li>Log in met het LinkedIn&#169; account waaronder je de applicatie wil registeren.</li><br /><br /><li>Klik op de "Add New Application" link.</li><br /><br /><li>Vul het "Add New Application" formulier in.</li><br /><br /><li>Selecteer de "Agree" checkbox en klik op "Add Application".</li><br /><br /><li>Zoek de API en Secret Keys voor de Linkedin&#169; Connector (Admin – Connector - Linkedin&#169;) in de "Application Details" pagina en voer de keys hieronder in.</li><br /><br /><li>Klik op Save.</li></ol><br /><br /></td></tr></table>',
  'oauth_consumer_key' => 'API Key',
  'oauth_consumer_secret' => 'Secret Key',
  'company_url' => 'URL',
  'LBL_NAME' => 'Organisatienaam',
);

