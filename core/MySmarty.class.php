<?php

require './smarty/Smarty.class.php';
class MySmarty extends Smarty{
	function __construct()
	{
		parent::__construct();
		$this->setTemplateDir('./view');
		$this->setCompileDir('./view_c/');
		$this->setConfigDir('./configs/');
		$this->setCacheDir('./cache/');
	}

}