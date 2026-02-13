<?php
class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function login()
    {
        echo "dentro";
        echo $user = trim(strtolower($_POST['usuario']));
        echo $pass = trim(strtolower($_POST['password']));

        # idlogin, idpersonal, nivusu, estado
        $datos = $this->model->validar($user,$pass);
        print_r($datos);
        
		if($datos['estado'])
		{
			#echo "Usuario Activo";
			switch ($datos['nivusu']) {
				case 1:
					// Administrador...
					break;
				case 2:
				   // Personal
				$_SESSION['katari'] = $datos['idpersonal'];
                $this->bitacora();
				break;
			}
		}else{
			echo "Usuario no activo";
			header('location:'.constant('URL'));
		}
	}
    
    function bitacora()
    {
        //echo "En bitacora controller";
        # Recogiendo varibales para bitacora
        
        $ipUsuario = $_SERVER['REMOTE_ADDR'] ?? 'IP no disponible';
        //echo "Tu IP es: $ipUsuario";
        
        if (!isset($_SESSION['hora_inicio'])) {
            $_SESSION['hora_inicio'] = date('Y-m-d H:i:s');
            $_SESSION['ip_cliente'] = $ipUsuario;
        }
        
        $fecha = date('Y-m-d');
        $this->model->bitacora($_SESSION['katari'],$_SESSION['ip_cliente'],$_SESSION['hora_inicio']);
        echo $ruta = constant('URL').'dashboard';
        header('Location:'. $ruta);
    }


    function logout()
    {
        $horaFin = date('Y-m-d H:i:s');
        $res = $this->model->LastCodigo($_SESSION['katari']);

        if($res){
            $this->model->Cerrar($horaFin,$res['idbitacora']);    
            session_unset();
            session_destroy();
        }
        // Limpiar la sesión
        $ruta = constant('URL');
        header('Location:'. $ruta);
    }

    function render()
    {
        $this->view->Render('login/index');
    }
    
}