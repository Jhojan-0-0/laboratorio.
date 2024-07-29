<?php require ('views/header.php');?>

<link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/entrega.css">
  <div class="grid-container">

  <form action="<?php echo constant('URL') ?>entrega/entidadCreate" method="POST" enctype="multipart/form-data" id="entidadCrt">
    <div class="grid-x grid-padding-x">
      <div class="cell">
        <h4 class="header">Registro de Entidad</h4>
      </div>      
    </div>
      <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="entidad">Entidad o facultad
          <input type="text" name="entidad" id="entidad">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="sigla">Siglas
          <input type="text" name ="sigla" id="sigla">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="localidad">Localidad
          <input type="text" name ="localidad" id="localidad">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <div id="resultado"></div>
        <label for="fecCreate">Fecha de Creacion
          <input type="date" name="fecCreate" id="fecCreate">
        </label>
      </div>
    </div>
    <div class="cell small-12 medium-6 large-6 text-center">
    <button class="button success" type="submit">Registrar</button>
          <a href="<?php echo constant('URL') ?>entrega/nuevo" class="button alert">Volver</a>
        </div>        
  </form>
  </div>

<script src="<?php echo constant('URL'); ?>public/js/entrega.js"></script> 

<?php require ('views/footer.php');?>
