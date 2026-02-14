<?php
enum UnidadPeso: string {
    case KILOGRAMOS = 'Kg';
    case GRAMOS    = 'g';
}

enum UnidadVolumen: string {
    case LITROS      = 'L';
    case MILILITROS  = 'mL';
}

enum UnidadLongitud: string {
    case METROS      = 'M';
    case CENTIMETROS = 'cm';
}

class Ingreso extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function render()
	{
		$this->view->Render('ingreso/index');
		$this->view->data2 = $this->listarQuimico();
	}

	function nuevo()
	{
		$hora = date('Y-m-d H:i:s');
		$_SESSION['horainicio'] = $hora;
		$this->view->Render('ingreso/nuevo');
	}

	function informacion($codigo)
	{
		$this->view->data = $this->model->GetQuimicoId($codigo);
		$this->view->Render('ingreso/informacion');
	}

	function listarQuimico(){
		$result = $this->model->ListarQuimico();
		
		$productos = [];
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $productos[] = [
								'idproducto'     => $row['idproducto'],
								'nombre'         => $row['nombre'],
								'marca'          => $row['marca'],
								'clasificacion'  => $row['clasificacion'],
								'fecFabricacion' => $row['fecFabricacion'],
								'fecVencimiento' => $row['fecVencimiento'],
								'numlote'        => $row['numlote'],
								'fecAdquisicion' => $row['fecAdquisicion'],
								'cantidadsin'    => $row['cantidadsin'],
								'cantidadcon'    => $row['cantidadcon'],
								'um1'            => $row['um1'],
								'um2'            => $row['um2'],
								'tipo'           => $row['tipo'],
								'presentacion'   => $row['presentacion'],
								'precio'         => (float) $row['precio'],
								'estante'        => $row['estante'],
								'nivel'          => $row['nivel'],
								'codOC'          => $row['codOC'],
								'fecCreate'      => date('d/m/Y', strtotime($row['fecCreate'])),
								'precio_peru'    => 'S/ ' . number_format($row['precio'], 2, ',', '.')
            ];
        }

        header('Content-Type: application/json; charset=utf-8');
        
        echo json_encode($productos);
		
	}

	function createQuimico(){
		//Recogiendo datos
		$nombre = $_POST['nombre'];
		$marca = $_POST['marca'];
		$clasificacion = $_POST['clasificacion'];
		$fecFabricacion = $_POST['feFabricacion'];
		$fecVencimiento = $_POST['feVencimiento'];
		$numlote = $_POST['numlote'];
		$fecAdquisicion = $_POST['fadquisicion'];
		$cantidadsin = $_POST['cantidad'];
		$um1 = $_POST['um1'];
		$tipo = $_POST['tipoEnvase'];
		$presentacion = $_POST['presentacion'];
		$precio = $_POST['precio'];
		//$foto = $_FILES['foto'];
		$estante = $_POST['estante'];
		$nivel = $_POST['nivel'];
		$codOC = $_POST['numOC'];
		$horainicio = $_SESSION['horainicio'];
		$horafinal = date('Y-m-d H:i:s');

		$um = explode("-", $um1);
		
		$res1 = $this->convertir((float)$cantidadsin, $um[0], $um[1]);
	
		$datos = explode("-", $res1);
		$cantidadcon = $datos[0]; // valor de la conversion
		$um2 = $datos[1];  // unidad de medida convertida

		$this->model->CreateQuimico($nombre,$marca,$clasificacion,$fecFabricacion,$fecVencimiento,$numlote,$fecAdquisicion,(float)$cantidadsin,$um[0],$cantidadcon,$um2,$tipo,$presentacion,$precio,$estante,$nivel,$codOC,$horainicio,$horafinal);

	}

	function convertirUnidad($cantidad,$origen,$destino){
		$factores = []; // Creando el array para la conversion
		
		$factores = [
		        // Peso
		        'Kg' => ['g'  => 1000],
		        'g'  => ['Kg' => 0.001],

		        // Volumen
		        'L'  => ['mL' => 1000],
		        'mL' => ['L'  => 0.001],

		        // Longitud (ejemplos adicionales)
		        'M'  => ['cm' => 100],
		        'cm' => ['M'  => 0.01],
		    ];

		    if (!isset($factores[$origen][$destino])) {
		        throw new InvalidArgumentException(
		            "Conversión no soportada: $origen → $destino"
		        );
		    }

		    $factor = $factores[$origen][$destino];
		    $resultado = round($cantidad * $factor, 2);

		    return [$resultado, $destino];
		}

	/**
	 * Función pública / amigable para el usuario
	 * Retorna string listo para mostrar: "1500 g" , "4500 mL", etc.
	 */
	function convertir($cantidad,$origen,$destino){
		//echo $cantidad."\n".$origen."\n".$destino."\n";
		[$valor, $unidad] = $this->convertirUnidad($cantidad, $origen, $destino);

	    /* Formato más legible según unidad
	    $formato = match ($unidad) {
	        'g', 'mL', 'cm' => number_format($valor, 0, '.', '.'),
	        default         => number_format($valor, 2, ',', '.'),
	    };
	    */

	    return "$valor - $unidad";
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
				"idproducto"=>$row['idproducto'],
				"nombre"=>$row['nombre'],
				"fecFabricacion"=>$row['fecFabricacion'],
				"fecVencimiento"=>$row['fecVencimiento'],
				"marca"=>$row['marca'],
				"tipo"=>$row['tipo'],
				"clasificacion"=>$row['clasificacion'],
				"clasificacion"=>$row['clasificacion'],
			);
		}
		echo json_encode($json);
	}

	function delete($idproducto)
	{
		$res = $this->model->Delete($idproducto);

		if($res){
			echo "EXITO AL ELIMINAR";
			$this->view->Render('ingreso/index');
		}else{
			echo "ERROR AL ELIMINAR";
			$this->view->Render('ingreso/index');
		}
	}
	
}