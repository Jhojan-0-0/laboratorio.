<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laboratorio</title>
  <!-- Compressed CSS 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.9.0/dist/css/foundation.min.css" crossorigin="anonymous">-->
  <link rel="stylesheet" href="<?php echo constant('URL');?>public/css/foundation.min.css" />
  
  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo constant('URL');?>public/img/favicon.ico">
  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
  <!-- Diseño del panel de administracion en la parte superior-->
<body>

  <!-- Responsive Mobile -->
  <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
    <div class="title-bar-title">Menú</div>
  </div>

  <!-- Top Bar -->
  <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
  <button class="menu-icon" type="button" data-toggle="main-menu"></button>
  <div class="title-bar-title">
    <i class="fa-solid fa-flask-vial"></i> Mega Laboratorio UNA Puno
  </div>
</div>

<div class="top-bar" id="main-menu">
  <div class="top-bar-left">
    <ul class="dropdown menu vertical medium-horizontal" data-dropdown-menu>
      
      <!-- Logo / Título (solo visible en desktop) -->
      <li class="menu-text show-for-medium">
        <i class="fa-solid fa-flask-vial"></i> Mega Laboratorio UNA Puno
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
      <li>
        <a href="#">
          <i class="fa-solid fa-exchange-alt"></i> Entrada / Salida
        </a>
        <ul class="menu vertical">
          <li><a href="<?php echo constant('URL'); ?>solicitud">Crear Nueva Solicitud</a></li>
          <li><a href="<?php echo constant('URL'); ?>salida">Registro de Salida</a></li>
          <li><a href="<?php echo constant('URL'); ?>reportdiario">Reporte Diario</a></li>
        </ul>
      </li>

      <!-- Registro de solicitudes -->
      <li>
        <a href="#">
          <i class="fa-solid fa-clipboard-list"></i> Solicitudes
        </a>
        <ul class="menu vertical">
          <li><a href="<?php echo constant('URL'); ?>solicitud">Nueva Solicitud</a></li>
          <li><a href="#">Solicitudes en Borrador</a></li>
          <!-- Puedes agregar más: <li><a href="#">Mis Solicitudes</a></li> -->
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
  <!-- 
  <div class="top-bar-right">
    <ul class="menu">
      <li><a href="#">Edgar <i class="fa-solid fa-user"></i></a></li>
      <li><a href="#">Salir <i class="fa-solid fa-sign-out-alt"></i></a></li>
    </ul>
  </div>
  -->
</div>

  <br>

  <style>
    /* ================================
   TOP BAR PERSONALIZADA
================================= */

.custom-top-bar {
    background: linear-gradient(90deg, #0f2027, #203a43, #2c5364);
    padding: 0 20px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.25);
}

/* Logo / Nombre sistema */
.logo-text {
    font-weight: 600;
    color: #4164f1ff !important;
    font-size: 15px;
}

.logo-text i {
    margin-right: 6px;
}

/* Enlaces */
.custom-top-bar .menu a {
    color: #200f62ff !important;
    font-size: 14px;
    transition: 0.3s ease;
}

.custom-top-bar .menu a i {
    margin-right: 5px;
}

/* Hover */
.custom-top-bar .menu a:hover {
    background: rgba(255,255,255,0.1);
    border-radius: 6px;
}

/* ================================
   SEARCH
================================= */

.search-input {
    border-radius: 20px;
    border: none;
    padding: 6px 15px;
    font-size: 13px;
    outline: none;
}

/* ================================
   USER INFO
================================= */

.user-info {
    color: #163163ff;
    font-size: 14px;
    margin-left: 15px;
    display: flex;
    align-items: center;
    gap: 6px;
}

/* ================================
   LOGOUT
================================= */

.logout-btn {
    background: #e74c3c;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 13px;
    margin-left: 10px;
    transition: 0.3s ease;
}

.logout-btn:hover {
    background: #c0392b;
}

/* ================================
   MOBILE
================================= */

.title-bar {
    background: #203a43;
    color: #ffffff;
}

.title-bar-title {
    font-weight: 600;
}

  </style>