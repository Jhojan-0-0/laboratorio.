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
  <div class="top-bar custom-top-bar" id="responsive-menu">

    <!-- Left -->
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text logo-text">
          <i class="fa-solid fa-flask-vial"></i> Mega Laboratorio UNA Puno
        </li>
        <li><a href="<?php echo constant('URL'); ?>dashboard"><i class="fa-solid fa-house"></i> Home</a></li>
        <li><a href="<?php echo constant('URL'); ?>ingreso"><i class="fa-solid fa-arrow-right-to-bracket"></i> Ingreso</a></li>
        <li><a href="<?php echo constant('URL'); ?>validar"><i class="fa-solid fa-check-circle"></i> Validar</a></li>
        <li><a href="<?php echo constant('URL'); ?>galeria"><i class="fa-solid fa-images"></i> Galería</a></li>
        <li><a href="<?php echo constant('URL'); ?>entrega"><i class="fa-solid fa-box"></i> Entrega</a></li>
      </ul>
    </div>

    <!-- Right -->
    <div class="top-bar-right">
      <ul class="menu align-right">
        <li>
          <input type="search" placeholder="Buscar..." class="search-input">
        </li>

        <li class="user-info">
          <i class="fa-solid fa-user-doctor"></i>
          <span id="username">Dr. Juan Pérez</span>
        </li>

        <li>
          <a class="logout-btn" href="<?php echo constant('URL'); ?>login/logout">
            <i class="fa-solid fa-right-from-bracket"></i> Salir
          </a>
        </li>
      </ul>
    </div>

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