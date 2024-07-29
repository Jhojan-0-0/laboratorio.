<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laboratorio</title>
  <!-- FAVICON -->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/estilo.css' ?>">
  <link rel="shortcut icon" href="<?php echo constant('URL') . 'public/img/favicon.ico' ?>">
  <!-- FOUNDATION CSS-PRINCIPAL Y NECESARIO -->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/foundation/css/foundation.css' ?>">
  <!-- FOUNDATION FLOAT -->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/foundation/css/foundation-float.css' ?>">
  <!-- Foundation prototipe-algunas interesantes opciones a utilizar-->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/foundation/css/foundation-prototype.css' ?>">
  <!-- CHARTJS-GRAFICOS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

  <!-- CSS->SIDEBAR -->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/sidebar.css' ?>">
  <!-- VALIDATION CSS-->
  <link rel="stylesheet" href="<?php echo constant('URL') . 'public/css/validation.css' ?>">

  <!-- <script src="<?php echo constant('URL') . 'public/js/core/jquery.min.js' ?>"></script> -->
  <script src="<?php echo constant('URL') . 'public/foundation/js/jquery.js' ?>"></script>
  <script src="<?php echo constant('URL') . 'public/foundation/js/foundation.js' ?>"></script>
  <script src="<?php echo constant('URL') . 'public/js/validation.js' ?>"></script>
  <script language="JavaScript" type="text/javascript" src="<?php echo constant('URL') ?>public/assets/Assets/js/jpaginate.js"></script>
  
</head>
 <!-- Diseño del panel de administracion en la parte superior-->
<body>
  <div class="grid-container-fluid">
    <div class="grid-x">
      <div class="cell">
        <h4 class="titulo">MEGA LABORATORIO</h4>
      </div>
    </div>
    <div class="grid-x">
      <div class="cell">

        <!-- <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
          <div class="title-bar-title">Menu</div>
        </div> -->

        <div class="top-bar" id="responsive-menu">
          <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
              <li class="menu-text">KatariA&C</li>
              <li class="has-submenu">
              <li><a href="<?php echo constant('URL'); ?>dashboard">Home</a></li>
              <li><a href="<?php echo constant('URL'); ?>ingreso">Ingreso</a></li>
              <li><a href="<?php echo constant('URL'); ?>galeria">Galeria</a></li>
              <li><a href="<?php echo constant('URL'); ?>entrega">Entrega</a></li>
            </ul>
            </ul>
          </div>
          <div class="top-bar-right">
            <ul class="menu">
              <li><a href="<?php echo constant('URL'); ?>login/logout">Salir</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- MODAL DE CONFIRMACION EXITO -->
  <div class="modal-confirmacion-global" id="modal-confirmacion-global">
          <div class="modal-content-1">
            <h2>Éxito</h2>
            <i class="fa-solid fa-flask"></i>
            <p>La operación se ha completado exitosamente.</p>
            <p id="mensaje-modal"></p>
            <button id="btn-confirm">Aceptar</button>
          </div>
        </div>
        <!-- MODAL DE CONFIRMACION EXITO END-->
        <!-- MODAL DE ERROR -->
        <div class="modal-error-global" id="modal-error-global">
          <div class="modal-content-0">
            <h2>Error!</h2>
            <i class="fa-solid fa-bomb"></i>
            <p>La operación Fallo Inesperadamente.</p>
            <p id="mensaje-modal-error"></p>
            <p>Intente de Nuevo Por Favor</p>
            <button id="btn-error">Aceptar</button>
          </div>
        </div>
        <!-- MODAL DE ERROR -->
