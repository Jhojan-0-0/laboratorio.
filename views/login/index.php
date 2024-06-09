<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Page</title>
  <link rel="stylesheet" href="./public/css/login.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="grid-container">
    <div class="grid-x margin-3 login-z shadow">
    <div class="cell large-6 callout formulario-z">
        <div class="login">
          <div class="margin-1">
            <h2>Login</h2>
          </div>
          <form action="<?php echo constant('URL'); ?>login/logIn" method="POST">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario" value="elmer" required/>
            <label for="password">Contraseña</label>
            <input type="password" name="pass" id="pass" value="elmer" required/>
            <input type="submit" value="Ingresar" class="button success" />
          </form>
        </div>
      </div>
      <div class="cell large-6 callout info-z">
        <div class="padding-horizontal-2">
          <h1>LABORATORIO</h1>


          <p class="lead">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi facilis suscipit, voluptates deserunt
            sapiente pariatur hic velit itaque voluptate! Non quod dolorem aperiam nulla neque labore. Blanditiis magni
            sapiente repudiandae?
          </p>

        </div>
      </div>
    </div>
    <div class="image-section"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"></script>
</body>

</html>

<?php require ('views/footer.php');?>
