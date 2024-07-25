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

	public function listarQuimico(){
		$data = $this->model->ListarQuimico();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"idquimico"=>$row['idquimico'],
				"nombre"=>$row['nombre'],
				"feFabricacion"=>$row['feFabricacion'],
				"feVencimiento"=>$row['feVencimiento'],
				"codProducto"=>$row['codProducto'],
				"tipo"=>$row['tipo'],
				"clasificacion"=>$row['clasificacion'],	
				"formula"=>$row['formula'],
			);
		}
		echo json_encode($json);
	}

	function buscarquimico(){
		$query = $_GET['query'];
		$data = $this->model->Buscarquimico($query);
		$json = array();
		while($row = mysqli_fetch_assoc($data)){
			$json[] = array(
				"idquimico"=>$row['idquimico'],
				"nombre"=>$row['nombre'],
				"feFabricacion"=>$row['feFabricacion'],
				"feVencimiento"=>$row['feVencimiento'],
				"codProducto"=>$row['codProducto'],
				"tipo"=>$row['tipo'],
				"clasificacion"=>$row['clasificacion'],	
				"formula"=>$row['formula'],
			);
		}
		echo json_encode($json);
	}

	public function delete(){
		$id = $_POST['id'];
		if($this->model->Delete($id)){
			echo "EXITO AL ELIMINAR";
		}else{
			echo "ERROR AL ELIMINAR";
		}
	}
	
}