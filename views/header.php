<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laboratorio</title>
  <!-- Compressed CSS 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.9.0/dist/css/foundation.min.css" crossorigin="anonymous">-->
  <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/foundation.min.css" />
  
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- jQuery UI  -->
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <!-- Foundation -->
  <script src="<?php echo constant('URL');?>public/js/foundation.min.js"></script>
  
  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo constant('URL');?>public/img/favicon.ico">
  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />


  <!-- <script>
  $(document).foundation();
  </script> -->
</head>
  <!-- Diseño del panel de administracion en la parte superior-->
<body>

  <!-- Top Bar -->
  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="large">
    <button class="menu-icon" type="button" data-toggle="main-menu"></button>
    <div class="title-bar-title">
      
    </div>
  </div>

<div class="top-bar" id="main-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu vertical medium-horizontal" data-dropdown-menu>
      
      <!-- Logo / Título (solo visible en desktop) -->
      <li class="menu-text show-for-medium">
        <i class="fa-solid fa-flask-vial"></i> Mega Laboratorio
      </li>

      <!-- Home -->
      <li>
        <a href="<?php echo constant('URL'); ?>dashboard">
          <i class="fa-solid fa-house"></i> Inicio
        </a>
      </li>

      <!-- Ingreso -->
      <li>
        <a href="<?php echo constant('URL'); ?>ingreso">
          <i class="fa-solid fa-arrow-right-to-bracket"></i> Ingreso
        </a>
      </li>

      <!-- Registro Entrada/Salida -->
      <li class="has-submenu">
        <a href="#">
          <i class="fa-solid fa-exchange-alt"></i> Entrada / Salida
          <i class="fa-solid fa-chevron-down arrow-down"></i>
        </a>

        <ul class="submenu menu vertical">
          <li><a href="<?php echo constant('URL'); ?>solicitud">Crear Nueva Solicitud</a></li>
          <li><a href="<?php echo constant('URL'); ?>salida">Registro de Salida</a></li>
          <li><a href="<?php echo constant('URL'); ?>reportdiario">Reporte Diario</a></li>
        </ul>
      </li>

      <!-- Registro de solicitudes -->
      <li class="has-submenu">
        <a href="#">
          <i class="fa-solid fa-clipboard-list"></i> Solicitudes
          <i class="fa-solid fa-chevron-down arrow-down"></i>
        </a>

        <ul class="submenu menu vertical">
          <li><a href="<?php echo constant('URL'); ?>solicitud">Nueva Solicitud</a></li>
          <li><a href="#">Solicitudes en Borrador</a></li>
        </ul>
      </li>

      <!-- Validar -->
      <li>
        <a href="<?php echo constant('URL'); ?>validar">
          <i class="fa-solid fa-check-circle"></i> Validar
        </a>
      </li>

      <!-- Galería -->
      <li>
        <a href="<?php echo constant('URL'); ?>galeria">
          <i class="fa-solid fa-images"></i> Galería
        </a>
      </li>

    </ul>
  </div>

  <!-- Opcional: espacio para menú derecho (usuario, logout, etc.) -->
  
  <div class="top-bar-right">
    <ul class="menu user-menu">

      <li class="user-info">
        <i class="fas fa-user-tie"></i>
        <span>Bienvenido: <?php echo $_SESSION['username']; ?></span>

        <!-- ID DEL PERSONAL -->
        <input type="hidden" id="idpersonal" value="<?php echo $_SESSION['idpersonal']; ?>">
      </li>

      <li>
        <a class="logout-btn" href="<?php echo constant('URL') ?>login/logout">
          <i class="fas fa-sign-out-alt"></i>
          <span>SALIR</span>
        </a>
      </li>

    </ul>
  </div>

</div>
<script>
$(document).ready(function(){

  $(".menu-icon").click(function(){
    $("#main-menu").slideToggle(200);
  });

});
</script>

<style>
  /* ocultar submenus */
.submenu{
display:none;
position:absolute;
background:white;
box-shadow:0 5px 15px rgba(0,0,0,0.2);
border-radius:5px;
min-width:200px;
z-index:1000;
}

/* mostrar submenu al pasar el mouse */
.has-submenu:hover .submenu{
display:block;
}

/* estilo del submenu */
.submenu li a{
padding:10px 15px;
display:block;
color:#333;
}

.submenu li a:hover{
background:#f5f5f5;
}
.arrow-down{
margin-left:5px;
font-size:12px;
}

/* animación cuando pasas el cursor */
.has-submenu:hover .arrow-down{
transform: rotate(180deg);
transition:0.3s;
}

/* esconder title bar en pantallas grandes */
@media screen and (min-width: 1024px){
.title-bar{
display:none;
}
}
/* ocultar menú en móvil */
@media screen and (max-width: 1023px){
  #main-menu{
    display:none;
  }
}

/* mostrar menú en escritorio */
@media screen and (min-width: 1024px){
  #main-menu{
    display:flex !important;
  }
}
/* estilo el apartado de usuario y salida */
.user-menu{
display:flex;
align-items:center;
gap:15px;
}

/* cuadro del usuario */
.user-info{
display:flex;
align-items:center;
gap:8px;
font-weight:500;
color:#333;
background:#f4f6f9;
padding:6px 14px;
border-radius:6px;
border:1px solid #e1e5ea;
box-shadow:0 2px 4px rgba(0,0,0,0.05);
}

.user-info i{
color:#2c7be5;
font-size:15px;
}

/* botón salir */
.logout-btn{
display:flex;
align-items:center;
gap:6px;
font-weight:600;
color:#2c7be5;
transition:0.3s;
}

.logout-btn:hover{
color:#d90429;
}

.logout-btn i{
font-size:16px;
}
</style>
