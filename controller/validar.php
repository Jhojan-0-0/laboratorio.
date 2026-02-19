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
  $json = file_get_contents('php://input');
  $datos = json_decode($json, true); // true para obtener array asociativo

  if (!$datos || !is_array($datos)) {
    $datos = $_POST;
  }

  if ($datos && isset($datos['idproducto'])) {
    $idproducto = $datos['idproducto'];
    $encontrado = isset($datos['encontrado']) ? $datos['encontrado'] : 0;
    $completo = isset($datos['completo']) ? $datos['completo'] : 0;
    $obs = isset($datos['obs']) ? $datos['obs'] : null;

    $inserted = false;
    if (method_exists($this->model, 'Guardar')) {
      $inserted = $this->model->Guardar($idproducto, $encontrado, $completo, $obs);
    }

    header('Content-Type: application/json; charset=utf-8');
    if ($inserted) {
      http_response_code(200);
      echo json_encode([
        'success' => true,
        'message' => 'Registro guardado correctamente',
        'data' => $datos
      ]);
      exit();
    } else {
      http_response_code(500);
      echo json_encode([
        'success' => false,
        'message' => 'Error al guardar el registro',
        'data' => $datos
      ]);
      exit();
    }

  } else {
    echo json_encode([
      'success' => false,
      'message' => 'No se recibieron datos válidos'
    ]);
  }
  }

  function render()
  {
    $this->view->data = $this->model->ListarQuimico();
    $this->view->Render('validar/index');
  }
}