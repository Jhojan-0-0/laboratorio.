<?php require ('views/header.php');?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nuevo Entrega de producto Químico</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.6.3/css/foundation.min.css">
  <style>
    .header {
      background-color: #1976d2;
      color: white;
      padding: 1rem;
      border-radius: 10px 10px 0 0;
    }
    .button-custom {
      background: linear-gradient(to right, #4a00e0, #8e2de2);
      color: white;
    }
    .form-container {
      border: 1px solid #e6e6e6;
      border-radius: 10px;
      padding: 1rem;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <div class="grid-container">
    <div class="grid-x grid-padding-x form-container">
      <div class="cell">
        <h4 class="header">Nuevo Entrega de producto Químico</h4>
      </div>
      <form action="<?php echo constant('URL'); ?>entrega/guardar" method="POST">
        <div class="medium-6 cell">
          <label>Fecha de entrega
            <input type="date" name="txtfechaEntrega" id="txtfechaEntrega">
          </label>
        </div>
        <div class="medium-6 cell">
          <label>Nombre Docente
            <input type="text" name ="txtnombreDocente" id="txtnombreDocente">
          </label>
        </div>
        <div class="medium-6 cell">
          <label>Código
            <input type="text" name="txtcodigo" id="txtcodigo" placeholder="">
          </label>
        </div>
        <div class="medium-6 cell">
          <label>Marca
            <input type="text" name="txtmarca" id="txtmarca" placeholder="">
          </label>
        </div>
        <div class="medium-6 cell">
          <label>Facultad
            <input type="text" name="txtfacultad" id="txtfacultad" placeholder="">
          </label>
        </div>
        <div class="medium-6 cell">
          <label>Cantidad
            <input type="text" name="txtcantidad" id="txtcantidad" placeholder="">
          </label>
        </div>
        <div class="medium-12 cell">
          <label>Descripcion
            <input type="text" name="txtdescripcion" id="txtdescripcion" placeholder="">
          </label>
        </div>
        <div class="medium-12 cell text-center">
          <button class="button button-custom" type="submit" name="btnguardar" id="btnguardar">Guardar</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<?php require ('views/footer.php');?>
