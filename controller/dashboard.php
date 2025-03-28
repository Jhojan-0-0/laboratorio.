<?php

class Dashboard extends Controller
{

    function __construct()
    {
	parent::__construct();
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

    function render()
    {
        self::bitacora();
	$this->view->Render('dashboard/index');
    }
}