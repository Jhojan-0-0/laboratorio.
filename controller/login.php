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
		$usuario = trim(strtolower($_POST['usuario']));
		$pass = trim(strtolower($_POST['pass']));
		#nivusu, chkusu, idpersonal
		$datos = $this->model->validar($usuario,$pass);
		// echo var_dump($datos);
		if($datos['usuario'] == $usuario && $datos['pass'] == $pass)
		{
			// echo "si llega los datos delususaior";
			// echo var_dump($datos);
			$_SESSION['katari'] = $datos['idpersonal'];
		    header("Location: ".constant('URL')."/dashboard");
			
		 	// $this->view->mensaje = 'Credenciales correctas';
		 	// header('location:'.constant('URL').'dashboard');
			
		// // echo "Usuario existe";
		// //  switch ($datos['nivusu']) {
		//  	// case 1:
		//  		// // Administrador...
		//  		// break;
		//  	// case 2:
		//  	//    // Personal
		//  	//    $_SESSION['katari'] = $datos['idpersonal'];
		//  	//    header("Location: ".constant('URL')."/dashboard");
		//  	//    break;
		//  }
		}else{
		 echo "Usuario no existe";
		}

	}
	public function logout()
	{
		session_destroy();
		$_SESSION['katari'] = '';
		$_SESSION['username'] = '';
		$_SESSION['nivel'] = '';
		$_SESSION['idpersonal'] = '';
		// $this->model->alterTable();
		$this->view->Render('login/index');
	}
}