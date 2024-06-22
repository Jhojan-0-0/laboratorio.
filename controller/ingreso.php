<?php

class Ingreso extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('ingreso/index');
	}

	function nuevo()
	{
		$this->view->Render('ingreso/nuevo');
	}
}