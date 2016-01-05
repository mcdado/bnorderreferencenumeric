<?php

if (!defined('_PS_VERSION_')) {
    exit;
}

class BNOrderReferenceNumeric extends Module
{
    protected $config_form = false;

    public function __construct()
    {
        $this->name = 'bnorderreferencenumeric';
        $this->tab = 'administration';
        $this->version = '1.0.2';
        $this->author = 'Brand New srl';
        $this->need_instance = 0;

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Numeric Order Reference');
        $this->description = $this->l('Generate order references composed of nine random numbers instead of uppercase letters.');

        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        return parent::install();
    }

    public function uninstall()
    {
        return parent::uninstall();
    }
}
