<?php
class Solicitud extends Controller
{

  function __construct()
  {
    parent::__construct();
  }

  public function codPersonal()
  {
      if (isset($_GET['q'])) {
          $codigo = $_GET['q'];
          $resultado = $this->model->ListaPersonalPorCodigo($codigo);
          $data = array();
          foreach ($resultado as $row) {
              $temp['id'] = $row['idpersonal'];
              $temp['label'] = $row['codPersonal'] . ' — ' . $row['nombre'] . ' ' . $row['apellidos'];
              $temp['codPersonal'] = $row['codPersonal'];
              $temp['nombre'] = $row['nombre'];
              $temp['apellidos'] = $row['apellidos'];
              $temp['entidad'] = $row['entidad'];
                array_push($data, $temp);
            }

            echo json_encode($data, JSON_UNESCAPED_UNICODE);
            exit;
        }
    }
  
  function create()
	{
		$idpersonal = $_POST['idpersonal'];
		$nomproducto = $_POST['nomproducto'];
		$cantidad = $_POST['cantidad'];
		$unimedida = $_POST['unimedida'];
		$usoproducto = $_POST['usoproducto'];
		$obs = $_POST['obs'];
		if($this->model->Guardar($idpersonal, $nomproducto,$cantidad,$unimedida,$usoproducto,$obs)){
			echo "REGISTRO EXITOSO";
		}else{
			echo "ERROR AL INSERTAR";
		}	
	}
	
  // function guardar()
  // {
  //   $codpersonal = $_POST['codpersonal'];
  //   $nomproducto = $_POST['nomproducto'];
  //   $cantidad    = $_POST['cantidad'];
  //   $unimedida   = $_POST['unimedida'];
  //   $usoproducto = $_POST['usoproducto'];
  //   $obs         = $_POST['obs'];
  // }

  public function render()
  {
    $this->view->Render('solicitud/index');
  }
 
}