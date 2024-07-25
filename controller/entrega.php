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
	function nuevo()
	{

		$res = $this->model->ListaQuimicos();
		$this->view->data = $res;

		$quimico = $this->model->ListaEntidad();
		$this->view->data2 = $quimico;

		$this->view->Render('entrega/nuevo');
	}

	function create()
	{
		$idquimico = $_POST['idquimico'];
		$fecEntrega = $_POST['txtfechaEntrega'];
		$codquimico = $_POST['txtcodigo'];
		$cantidad = $_POST['txtcantidad'];
		$descripcion = $_POST['txtdescripcion'];
		$marca = $_POST['txtmarca'];
		$identidad = $_POST['identidad'];
		$docente = $_POST['txtnombreDocente'];
		$res = $this->model->Guardar($idquimico, $fecEntrega,$codquimico,$cantidad,$descripcion,$marca,$identidad,$docente);
		if($res){
			$msg= "Guardado Exitoso ";
		}else{
			$msg =  "Error";
		}
		$this->view->mensaje = $msg;
		$this->view->Render('entrega/index');
	}
	
	public function getEntrega(){
		$data = $this->model->Getentrega();
		$json = array();
		while ($row = mysqli_fetch_assoc($data)) {
			$json[] = array(
				"identrega" => $row['identrega'],
				"docente" => $row['docente'],
				"nombre" => $row['nombre'],
				"fecEntrega" => $row['fecEntrega'],
				"codquimico" => $row['codquimico'],
				"cantidad" => $row['cantidad'],
				"descripcion" => $row['descripcion'],
				"marca" => $row['marca'],
				"entidad" => $row['entidad'],
			);
		}
		echo json_encode($json);
	}

	function getDatos()
	{
		$idquimico = $_POST['idquimico'];
		$data = $this->model->getDatos($idquimico);
		echo json_encode($data);

	}

	function buscarEntregas(){
		$query = $_GET['query'];
		$data = $this->model->buscarentrega($query);
		$json = array();
		while($row = mysqli_fetch_assoc($data)){
			$json[] = array(
				"identrega" => $row['identrega'],
				"docente" => $row['docente'],
				"nombre" => $row['nombre'],
				"fecEntrega" => $row['fecEntrega'],
				"codquimico" => $row['codquimico'],
				"cantidad" => $row['cantidad'],
				"descripcion" => $row['descripcion'],
				"marca" => $row['marca'],
				"entidad" => $row['entidad'],
			);
		}
		echo json_encode($json);
	}
}