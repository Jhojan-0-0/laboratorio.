<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Katari Price</title>
  <!-- FAVICON -->
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
</head>

<body>
  <div class="off-canvas-wrapper">
    <div class="off-canvas-content" data-off-canvas-content> 
      <div class="class text-center">
        <h3>LABORATORIO</h3>
      </div>
    <div class="top-bar " id="topbar-center-logo">
        <!-- HEADER MAIN PAGE -->
        <header class="zeta-container">
          <div class="grid-x container">
          <div class="top-bar-left">
  <ul class="menu vertical medium-horizontal">
      <li><a href="#">Ingreso</a></li>
      <li><a href="#">Galeria</a></li>
      <li><a href="#">Entrega</a></li>
    </ul>
  </div>
            <div class="search-box">
              <input type="text" placeholder="Buscar...">
              <button type="submit"><i class="fas fa-search"></i></button>
            </div>
            <div class="user-info">
              <span><i class="fas fa-user-tie"></i> Bienvenido: <?php echo $_SESSION['username'];?></span>
              <!-- ID DEL PERSONAL PUESTO EN EL HEADER PARA QUE DESDE CUALQUIER FORMULARIO SE PUEDA LLAMAR -->
              <input type="text" id="idpersonal" value="<?php echo $_SESSION['idpersonal']; ?>" hidden style="display:none">
              <li>
                <a href="<?php echo constant('URL')?>login/logout">
                  <i class="fas fa-sign-out-alt"></i>
                  <span class="nav-item">SALIR</span>
                </a>
              </li>
            </div>
          </div>
        </header>
        <!-- HEADER MAIN PAGE END-->