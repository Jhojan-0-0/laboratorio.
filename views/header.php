<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Laboratorio</title>
  <!-- Compressed CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.9.0/dist/css/foundation.min.css" crossorigin="anonymous">
  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?php echo constant('URL') . 'public/img/favicon.ico' ?>">
  <!-- ICONOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>
 <!-- Diseño del panel de administracion en la parte superior-->
<body>
  <div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
    <button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
    <div class="title-bar-title">Menu</div>
  </div>

  <div class="top-bar" id="responsive-menu">
    <div class="top-bar-left">
      <ul class="dropdown menu" data-dropdown-menu>
        <li class="menu-text">Mega Laboratorio UNA Puno</li>
          <li><a href="<?php echo constant('URL'); ?>dashboard">Home</a></li>
          <li><a href="<?php echo constant('URL'); ?>ingreso">Ingreso</a></li>
          <li><a href="<?php echo constant('URL'); ?>galeria">Galeria</a></li>
          <li><a href="<?php echo constant('URL'); ?>entrega">Entrega</a></li>
        </li>
      </ul>
    </div>

    <div class="top-bar-right">
      <ul class="menu">
        <li><input type="search" placeholder="Search"></li>
        <li class="user-info">
          <span class="user-icon">👤</span>
          <span id="username">Dr. Juan Pérez</span>
        </li>
        <li><a href="<?php echo constant('URL'); ?>login/logout"> <i class="fas fa-sign-out-alt"> </i>Salir</a></li>
      </ul>
    </div>
  </div>

  <br>