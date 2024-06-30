<?php

class Galeria extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	public function render()
	{
		$totalNormalizados = $this->model->Normalizados();
		$totalFiscalizados = $this->model->Fiscalizados();
		$totalAcidos = $this->model->Acidos();
		$totalBasicos = $this->model->Basicos();
		$this->view->data = array(
			"normalizados"=>$totalNormalizados['total'],
			"fiscalizados"=>$totalFiscalizados['total'],
			"acidos"=>$totalAcidos['total'],
			"basicos"=>$totalBasicos['total'],
		);
		$this->view->Render('galeria/index');
	}
}