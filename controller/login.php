<?php

class Login extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    function render()
    {
        $this->view->Render('login/index');
    }
    
    public function logIn()
    {
        echo "en login";
            $user = trim(strtolower($_POST['usuario']));
            $pass = trim(strtolower($_POST['password']));
            # idlogin, idpersonal, nivusu, estado
            $datos = $this->model->validar($user,$pass);

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
				header("Location: ".constant('URL')."/dashboard");
				break;
			}
		}else{
			echo "Usuario no activo";
			header('location:'.constant('URL'));
		}


	}
    
    function bitacora()
    {
        #echo "En bitacora controller";
        # Recogiendo varibales para bitacora
        
        $ipUsuario = $_SERVER['REMOTE_ADDR'] ?? 'IP no disponible';
        //echo "Tu IP es: $ipUsuario";
        
        if (!isset($_SESSION['hora_inicio'])) {
            $_SESSION['hora_inicio'] = date('H:i:s');
            $_SESSION['ip_cliente'] = $ipUsuario;
        }
        
        $fecha = date('Y-m-d');
        $this->model->bitacora($_SESSION['katari'],$_SESSION['ip_cliente'],$fecha,$_SESSION['hora_inicio']);
    }


    public function logout()
    {
        $horaFin = date('H:i:s');
   
        $datetime1 = new DateTime($_SESSION['hora_inicio']);
        $datetime2 = new DateTime($horaFin);

        // Calcula la diferencia
        $interval = $datetime1->diff($datetime2);

        // Formatea la diferencia
        $diferencia = $interval->format('%H:%I:%S');

        echo "Diferencia: $diferencia"; // Mostrará la diferencia entre las horas
                
        // Buscar codigo para cerrar
        $res = $this->model->LastCodigo($_SESSION['katari']);
        echo "Last codigo: ".$res['idbitacora'];

        $this->model->Cerrar($horaFin,$diferencia,$res['idbitacora']);
        
        // Limpiar la sesión
        session_unset();
        session_destroy();
	header("Location: ". constant('URL'));
    }
}