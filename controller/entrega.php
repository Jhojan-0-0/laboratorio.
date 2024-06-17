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
		$this->view->Render('entrega/nuevo');
	}

	function create()
	{
		$idquimico = $_POST['idquimico'];
		$fechaEntrega = $_POST['txtfechaEntrega'];
		$codSalida = $_POST['txtcodigo'];
		$cantidad = $_POST['txtcantidad'];
		$descripcion = $_POST['txtdescripcion'];
		$marca = $_POST['txtmarca'];
		$facultad = $_POST['txtfacultad'];
		$docente = $_POST['txtnombreDocente'];
		$res = $this->model->Guardar($idquimico, $fechaEntrega,$codSalida,$cantidad,$descripcion,$marca,$facultad,$docente);
		if($res){
			$msg= "Guardado satisfactoriamente";
		}else{
			$msg =  "Error";
		}
		$this->view->mensaje = $msg;
		$this->view->Render('entrega/index');
	}
	
	function getEntrega()
	{
   		$data = $this->model->getEntrega();
		$this->view->data = $data;
		$this->view->Render('entrega/index');
	}
}