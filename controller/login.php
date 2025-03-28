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
                        // Administrador..
                        echo "En administrador";
                        break;
                    case 2:
                        // Personalersonal
                        $_SESSION['katari'] = $datos['idpersonal'];
			header("Location: ".constant('URL')."/dashboard");
			break;
                    default :
                        echo "nada";
                    }
            }else{
		echo "Usuario no activo";
            }

	}
        
    
    function cerrar()
    {      
        
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