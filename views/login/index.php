<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo constant('COMPANY');?></title>

  <!-- Foundation -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <!-- Styles moved to public/css/estilos/login.css -->
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/estilos/login.css">

</head>

<body>

  <div class="login-card">

    <h4 class="login-title">
      <i class="fa-solid fa-flask-vial"></i>
      Sistema de Gestión de Químicos
    </h4>

    <div class="system-name">
      Panel de Administración
    </div>

    <?php echo $this->mensaje; ?>

    <form action="<?php echo constant('URL');?>login/login" method="POST">

      <!-- Usuario -->
      <label>Usuario</label>
      <div class="input-group">
        <span class="input-group-label">
          <i class="fa-solid fa-user"></i>
        </span>
        <input class="input-group-field" type="text" name="usuario" required placeholder="Ingrese su usuario">
      </div>

      <!-- Password -->
      <label>Password</label>
      <div class="input-group">
        <span class="input-group-label">
          <i class="fa-solid fa-lock"></i>
        </span>
        <input class="input-group-field" type="password" name="password" required placeholder="Ingrese su contraseña">
      </div>

      <br>

      <input type="submit" class="button expanded button-login" value="INICIAR SESIÓN">

    </form>

    <!-- Logo -->
    <img src="https://www.eduopinions.com/wp-content/uploads/2017/11/Universidad-Nacional-del-Altiplano-UNAP-logo.jpg"
      alt="Logo" class="logo">

    <div class="grid-x align-center">
      <small class="copyright">
        <span class=""> ©
          LUDWIN SOFTWARE
        </span>
        Copyrigth Ludwin. Inc.</small>
      <small class="copyright">Todos los derechos reservados.</small>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"></script>

</body>
</html>