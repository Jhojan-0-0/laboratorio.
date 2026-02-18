<?php
class Validar extends Controller
{
  function __construct()
  {
     parent::__construct();
  }
  /*
  "idproducto": "12",
  "encontrado": "1",
  "completo": "1",
  "obs_1": ""
  */
 
  function Guardar()
  {
    echo "En Guardar";

    // Recibir los datos JSON
    $json = file_get_contents('php://input');
    $datos = json_decode($json, true); // true para obtener array asociativo

    // Verificar si se recibieron datos
    if ($datos) {
        $idproducto = $datos['idproducto'];  
        $encontrado = $datos['encontrado'];  
        $completo = $datos['completo'];  
        $obs = $datos['obs'];  
        // Procesar los datos...
        
        // Enviar respuesta
        echo json_encode([
            'success' => true,
            'message' => 'Datos recibidos correctamente',
            'recibido' => $datos
        ]);
    } else {
        echo json_encode([
            'success' => false,
            'message' => 'No se recibieron datos válidos'
        ]);
    }

        echo $idproducto = $_POST['idproducto'];
        echo $encontrado = $_POST['encontrado'];
        echo $completo = $_POST['completo'];
        echo $observaciones = isset($_POST['obs']) ? $_POST['obs'] : '';

    
      
  }

  function render()
  {
    $this->view->data = $this->model->ListarQuimico();
    $this->view->Render('validar/index');
  }
}