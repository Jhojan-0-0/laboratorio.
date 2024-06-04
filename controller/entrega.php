<?php

class Entrega extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('entrega/index');
	}
}