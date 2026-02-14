<?php
session_start();

class App
{
  function __construct()
  {
    $url = $_GET['url'] ?? '';
    $url = rtrim($url, '/');
    $url = explode('/', $url);
    //echo "0: ".$url[0]."<br>";
    //echo "1: ".$url[1]."<br>";
    //echo "2: ".$url[2]."<br>";
  
    if (empty($url[0]))
    {
        $archivoController = "controller/login.php";
        require_once $archivoController;
        $controller = new login();
        $controller->loadModel('login');
        $controller->render();
        return false;
    }

    #echo "con parametros";
    $archivoController = "controller/" . $url[0] . ".php";
    
    if (file_exists($archivoController))
      {
        //echo "Si existe";
        require_once $archivoController;
        $controller = new $url[0];
        $controller->loadModel($url[0]);

        # numero de elementos del arreglo
        $nparam = sizeof($url);
        
        if ($nparam > 1)
        {
          // Hay un método específico a ejecutar
          if ($nparam > 2)
          {
            $param = [];
            for ($i = 2; $i < $nparam; $i++)
            {
              array_push($param, $url[$i]);
            }
            
            $controller->{$url[1]}($param[0]);
            // No llamar render si el método ya hizo exit o redirección
            if (!headers_sent()) {
              $controller->render();
            }
            
          } else {
            // Ejecutar el método solicitado (ej: logout)
            $methodName = $url[1];
            if (method_exists($controller, $methodName)) {
              $controller->{$methodName}();
              // No llamar render si el método ya hizo exit o redirección
              // El método logout() ya hace exit(), así que esto no se ejecutará
              if (!headers_sent()) {
                $controller->render();
              }
            } else {
              // Método no existe, mostrar error o redirigir
              require_once "controller/error.php";
              $errorController = new ErrorGeneral();
              $errorController->render();
            }
          }
          
        } else {
          // No hay método específico, solo renderizar
          $controller->render();
        }
      } else {
        #echo "no existe";
        require_once "controller/error.php";
        $controller = new ErrorGeneral();
        $controller->render();
      }
      
  }
}