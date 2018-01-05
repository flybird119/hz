<?php
require_once('../../libs/Smarty.class.php');

class Smarty_HW5000 extends Smarty
{
    function __construct()
    {
        parent::__construct();

        $this->setTemplateDir('./templates/');
        $this->setCompileDir('../../templates_c/');
        $this->setConfigDir('../../configs/');
        $this->setCacheDir('../../cache/');
        $this->addPluginsDir('../../plugin/');
        $this->setCaching(false);
        $this->clearAllCache();
        //$this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'HW5000');
    }

}

?>