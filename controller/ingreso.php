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

	function informacion($nparam = null)
	{
		$id = $nparam[0];
		$this->view->data = $this->model->GetQuimicoId($id);
		$this->view->Render('ingreso/informacion');
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

	public function createQuimico(){
		$nombre = $_POST['nombre'];
		$concentracion = $_POST['concentracion'];
		$tipoEnvase = $_POST['tipoEnvase'];
		$tamano = $_POST['tamano'];
		$marca = $_POST['marca'];
		$peso = $_POST['peso'];
		$cantidad = $_POST['cantidad'];
		$feFabricacion = $_POST['feFabricacion'];
		$feVencimiento = $_POST['feVencimiento'];
		$codProducto = $_POST['codProducto'];
		$advertencia = $_POST['advertencia'];
		$tipo = $_POST['tipo'];
		$precio = $_POST['precio'];
		$clasificacion = $_POST['clasificacion'];
		$mililitros = $_POST['mililitros'];
		$formula = $_POST['formula'];
		$foto = $_FILES['foto'];
		$res = $this->Foto($foto,$nombre,$formula);
		if($res==false){
			$foto = "sin foto";
		}
		if($this->model->CreateQuimico($nombre,$concentracion,$tipoEnvase,$tamano,$marca,$peso,$cantidad,$feFabricacion,$feVencimiento,$codProducto,$advertencia,$tipo,$precio,$clasificacion,$mililitros,$formula,$res)){
			echo $this->model->conn->conn->insert_id;
		}else{
			echo "ERROR AL INSERTAR";
		}	
	}

	public function updateQuimico(){
		
		$idquimico = $_POST['idquimico'];
		$nombre = $_POST['nombre'];
		$concentracion = $_POST['concentracion'];
		$tipoEnvase = $_POST['tipoEnvase'];
		$tamano = $_POST['tamano'];
		$marca = $_POST['marca'];
		$peso = $_POST['peso'];
		$cantidad = $_POST['cantidad'];
		$feFabricacion = $_POST['feFabricacion'];
		$feVencimiento = $_POST['feVencimiento'];
		$codProducto = $_POST['codProducto'];
		$advertencia = $_POST['advertencia'];
		$tipo = $_POST['tipo'];
		$precio = $_POST['precio'];
		$clasificacion = $_POST['clasificacion'];
		$mililitros = $_POST['mililitros'];
		$formula = $_POST['formula'];
		$foto = $_FILES['foto'];
		$res = $this->Foto($foto,$nombre,$formula);
		if($res==false){
			$res = $_POST['fotoActual'];
		}
		//echo $foto = $_FILES['foto']['name']."<br>";
		//echo $res = $this->Foto($foto,$nombre,$formula);

		// if($res==false){
		// 	$res = $_POST['fotoActual'];
		// }
		if($this->model->UpdateQuimico($idquimico, $nombre, $concentracion, $tipoEnvase, $tamano, $marca, $peso, $cantidad, $feFabricacion, $feVencimiento, $codProducto, $advertencia, $res, $tipo, $precio, $clasificacion, $mililitros, $formula,))
		{
			echo "EXITO AL ACTUALIZAR";
			// $msg= "ACTUALIZACION EXITOSO";
			// $this->view->data = $msg;
			// $this->view->Render('ingreso/index');
			// header("location: http://localhost/laboratorio/ingreso");
		}else{
			echo "ERROR AL ACTUALIZAR";
			// $msg = "ERROR AL ACTUALIZACION";
			// $this->view->data = $msg;
			// $this->view->Render('ingreso/index');
			// header("location: http://localhost/laboratorio/ingreso");
		}	
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