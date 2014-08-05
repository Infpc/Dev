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


/*********************************************************************************

* Description:  Defines the English language pack for the base application.
* Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
* All Rights Reserved.
* Contributor(s): ______________________________________..
********************************************************************************/

$connector_strings = array (
    //licensing information shown in config screen
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">从LinkedIn&#169获取一对API和机密密钥; 注册您的Sugar实例为一个新程序.<br/><br>注册实例的步骤:<br/><br/><ol><li>到LinkedIn&#169; 开发者站点: <a href=\'https://www.linkedin.com/secure/developer\' target=\'_blank\'>https://www.linkedin.com/secure/developer</a>.</li><li>使用LinkedIn&#169登陆;您想为之创建程序的账户.</li><li>点击增加新程序链接.</li><li>完成增加新程序表格.</li><li>选择同意复选框并点击新增程序.</li><li>在程序详情页面找到Linkedin&#169的API和机密密钥; 连接器 (管理 – 连接器 - Linkedin&#169;) 并输入以下密钥.</li><li>点击保存.</li></ol></td></tr></table>',

    'LBL_NAME' => '公司名称',

	//Configuration labels
	'company_url' => 'URL',
    'oauth_consumer_key' => 'API 密钥',
    'oauth_consumer_secret' => '机密密钥'
);

?>