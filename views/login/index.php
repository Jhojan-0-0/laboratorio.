<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo constant('COMPANY');?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="login-container">
    <div class="login-form">
      <h2>Login</h2>
      <?php echo $this->mensaje; ?>
      <form action="<?php echo constant('URL');?>login/login" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario" value="jhon" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="123" required>
        <a href="#" style="color: #28a745; margin-bottom: 20px;">     </a>
        <input type="submit" value="SIGN IN">
      </form>
      <img src="https://www.eduopinions.com/wp-content/uploads/2017/11/Universidad-Nacional-del-Altiplano-UNAP-logo.jpg" alt="Logo" style="margin-top: 20px; width: 100px;">
    </div>
    <div class="image-section"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"></script>
</body>

</html>

<?php require ('views/footer.php');?>