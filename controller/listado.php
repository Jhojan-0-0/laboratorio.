<?php

class Listado extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function comunes()
	{
		$this->view->Render('galeria/listcomunes');
	}
    function fiscalizado()
	{
		$this->view->Render('galeria/listfiscalizados');
	}

    public function getComunes(){
		$data = $this->model->Getcomunes();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"idquimico"=>$row['idquimico'],
				"nombre"=>$row['nombre'],
				"feFabricacion"=>$row['feFabricacion'],
				"feVencimiento"=>$row['feVencimiento'],
				"codProducto"=>$row['codProducto'],
				"tipo"=>$row['tipo'],
				"formula"=>$row['formula'],
			);
		}
		echo json_encode($json);
	}
    public function getFiscalizados(){
		$data = $this->model->Getfiscalizados();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"idquimico"=>$row['idquimico'],
				"nombre"=>$row['nombre'],
				"feFabricacion"=>$row['feFabricacion'],
				"feVencimiento"=>$row['feVencimiento'],
				"codProducto"=>$row['codProducto'],
				"tipo"=>$row['tipo'],
				"formula"=>$row['formula'],
			);
		}
		echo json_encode($json);
	}
    public function getAcidos(){
		$data = $this->model->Getacidos();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"idquimico"=>$row['idquimico'],
				"nombre"=>$row['nombre'],
				"feFabricacion"=>$row['feFabricacion'],
				"feVencimiento"=>$row['feVencimiento'],
				"codProducto"=>$row['codProducto'],
				"clasificacion"=>$row['clasificacion'],
				"formula"=>$row['formula'],
			);
		}
		echo json_encode($json);
	}
    public function getBasicos(){
		$data = $this->model->Getbasicos();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"idquimico"=>$row['idquimico'],
				"nombre"=>$row['nombre'],
				"feFabricacion"=>$row['feFabricacion'],
				"feVencimiento"=>$row['feVencimiento'],
				"codProducto"=>$row['codProducto'],
				"clasificacion"=>$row['clasificacion'],
				"formula"=>$row['formula'],
			);
		}
		echo json_encode($json);
	}
}