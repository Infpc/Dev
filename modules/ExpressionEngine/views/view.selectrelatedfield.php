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


require_once("data/BeanFactory.php");
require_once('modules/ExpressionEngine/formulaHelper.php');

class ViewSelectRelatedField extends SugarView
{
    var $vars = array("tmodule", "selLink");

    function __construct()
    {

        parent::__construct();
        foreach($this->vars as $var)
        {
            if (!isset($_REQUEST[$var]))
                sugar_die("Required paramter $var not set in ViewRelFields");
            $this->$var = $_REQUEST[$var];
        }
        $mb = new ModuleBuilder();
        $this->package = empty($_REQUEST['package']) || $_REQUEST['package'] == 'studio' ? "" : $mb->getPackage($_REQUEST['package']);

    }

    function display() {
        $rmodules = array();
        $links = FormulaHelper::getLinksForModule($this->tmodule, $this->package);
        $rfields = array();
        foreach($links as $lname => $link) {
            $rmodules[$lname] = $link['label'];
        }

        //Preload the related fields from the first relationship
        if (!empty($links))
        {
            reset($links);
            $link = isset($links[$this->selLink]) ? $links[$this->selLink]: $links[key($links)];
            $rfields = FormulaHelper::getRelatableFieldsForLink($link, $this->package);
        }

        $this->ss->assign("rmodules", $rmodules);
        $this->ss->assign("rfields", $rfields);
        $this->ss->assign("tmodule", $this->tmodule);
        $this->ss->assign("selLink", $this->selLink);
        $this->ss->assign("rollup_types", array(
            "rollupSum" => "Sum",
            "rollupMin" => "Minimum",
            "rollupMax" => "Maximum",
            "rollupAverage" => "Average",
        ));
        $this->ss->display('modules/ExpressionEngine/tpls/selectRelatedField.tpl');
    }


}