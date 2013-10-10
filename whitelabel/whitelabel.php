<?php

class whitelabel extends Module
{
	public function __construct()
	{
		$this->name = 'whitelabel';
		if(_PS_VERSION_ > '1.4')$this->tab = 'administration';
		else $this->tab = 'administration';
		$this->version = '1.1';
	
        parent::__construct();

		$this->page = basename(__FILE__, '.php');
        $this->displayName = $this->l('White Label');
        $this->description = $this->l('Removes Prestashop Adverts');
		$this->confirmUninstall = $this->l('Are you sure you want to delete your details ?');
	}
}