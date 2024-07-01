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
	function mostrarDato()
	{
		$data = $this->model->mostrarDato();
		$json = array();
		while($row = mysqli_fetch_assoc($data)){
			$json[] = array(
				"idquimico"=>$row['idquimico'],
				"nombre"=>$row['nombre'],
				"concentracion"=>$row['concentracion'],
				"tipoEnvace"=>$row['tipoEnvace'],
				"tamanio"=>$row['tamanio'],
				"marca"=>$row['marca'],
				"peso"=>$row['peso'],
				"cantidad"=>$row['cantidad'],
				"feFabricacion"=>$row['feFabricacion'],
				"feVencimiento"=>$row['feVencimiento'],
				"codProducto"=>$row['codProducto'],
				"advertencia"=>$row['advertencia'],
				"foto"=>$row['foto'],
				"tipo"=>$row['tipo'],
				"precio"=>$row['precio'],
				"clasificacion"=>$row['clasificacion'],				
			);
		}
		$jsonstring = json_encode($json);
		echo $jsonstring;
		// if (!$data){
		// 	die('fallo la conexion');
		// }else{
		// 	echo "Si llega";
		// 	echo var_dump($data);
		// 	$this->view->Render('ingreso/index');
		// }
	
	}

	// function veriDatos()
	// {
	// 	$idquimico = $_POST['idquimico'];
	// 	$data = $this->model->veriDatos($idquimico);
	// 	$json = array();
	// 	while($row = mysqli_fetch_assoc($data)){
	// 		$json[] = array(
	// 			"idquimico"=>$row['idquimico'],
	// 			"nombre"=>$row['nombre'],
	// 			"concentracion"=>$row['concentracion'],
	// 			"tipoEnvace"=>$row['tipoEnvace'],
	// 			"tamanio"=>$row['tamanio'],
	// 			"marca"=>$row['marca'],
	// 			"peso"=>$row['peso'],
	// 			"cantidad"=>$row['cantidad'],
	// 			"feFabricacion"=>$row['feFabricacion'],
	// 			"feVencimiento"=>$row['feVencimiento'],
	// 			"codProducto"=>$row['codProducto'],
	// 			"advertencia"=>$row['advertencia'],
	// 			"foto"=>$row['foto'],
	// 			"tipo"=>$row['tipo'],
	// 			"precio"=>$row['precio'],
	// 			"clasificacion"=>$row['clasificacion'],				
	// 		);
	// 	}
	// 	// $jsonstring = json_encode($json);
	// 	echo json_encode($json[0]);
	// 	// echo $jsonstring;
		
	// }
	function buscarquimico(){
		$query = $_GET['query'];
		$data = $this->model->Buscarquimico($query);
		$json = array();
		while($row = mysqli_fetch_assoc($data)){
			$json[] = array(
				 
				"idquimico"=>$row['idquimico'],
	 			"nombre"=>$row['nombre'],
	 			"concentracion"=>$row['concentracion'],
	 			"tipoEnvace"=>$row['tipoEnvace'],
	 			"tamanio"=>$row['tamanio'],
	 			"marca"=>$row['marca'],
	 			"peso"=>$row['peso'],
	 			"cantidad"=>$row['cantidad'],
	 			"feFabricacion"=>$row['feFabricacion'],
	 			"feVencimiento"=>$row['feVencimiento'],
	 			"codProducto"=>$row['codProducto'],
	 			"advertencia"=>$row['advertencia'],
	 			"foto"=>$row['foto'],
	 			"tipo"=>$row['tipo'],
	 			"precio"=>$row['precio'],
	 			"clasificacion"=>$row['clasificacion'],

			);
		}
		echo json_encode($json);
	}

	function registrarQuimico()
    {
        $nombre = $_POST['nombre'];
        $concentracion = $_POST['concentracion'];
        $tipoEnvace = $_POST['tipoEnvace'];
        $tamanio = isset($_POST['tamanio']) ? $_POST['tamanio'] : '';
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

        // Manejo del archivo subido
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
            $foto = $_FILES['foto']['name'];
            $tmp_name = $_FILES['foto']['tmp_name'];
            $upload_dir = '/fotos';
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }
            $ruta_foto = $upload_dir . basename($foto);
            if (move_uploaded_file($tmp_name, $ruta_foto)) {
                echo "Archivo subido correctamente.";
            } else {
                echo "Error al subir el archivo.";
                $ruta_foto = ''; // En caso de error, establecer la ruta como vacía
            }
        } else {
            $ruta_foto = '';  // O alguna ruta por defecto
            echo "No se subió ningún archivo.";
        }

        if ($this->model->registrarQuimico($nombre, $concentracion, $tipoEnvace, $tamanio, $marca, $peso, $cantidad, $feFabricacion, $feVencimiento, $codProducto, $advertencia, $ruta_foto, $tipo, $precio, $clasificacion)) {
            echo "REGISTRO EXITOSO";
        } else {
            echo "REGISTRO FALLIDO";
        }
    }
}