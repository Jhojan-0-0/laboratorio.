<?php require ('views/header.php');?>

<link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/entrega.css">

<div class="grid-container">
<form action="<?php echo constant('URL') ?>ingreso/CreateQuimico" method="POST" enctype="multipart/form-data" id="quimicoIngr">
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <h4 class="header">Nuevo Registro de Producto Químico</h4>
        </div>      
    </div>
    <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-6 large-4">
            <label for="nombre">Nombre
                <input type="text" name="nombre" id="nombre">
            </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="cantidad">Cantidad
          <input type="text" name="cantidad" id="cantidad">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="marca">Marca
          <input type="text" name="marca" id="marca">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-4">
        <label for="concentracion">Concentración
          <input type="text" name="concentracion" id="concentracion">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="codProducto">Código de Producto
          <input type="text" name="codProducto" id="codProducto">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="tamano">Tamaño
        <select name="tamano" id="tamano">
            <option value="" selected disabled>Seleccione...</option>
            <option value="Grande">Grande</option>
            <option value="Mediano">Mediano</option>
            <option value="Pequeño">Pequeño</option>
        </select>
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-4">
        <label for="tipoEnvase">Tipo de Envase
        <select name="tipoEnvase" id="tipoEnvase">
            <option value="" selected disabled>Seleccione...</option>
            <option value="Plastico">Plastico</option>
            <option value="Vidrio">Vidrio</option>
        </select>
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="tipo">Tipo
        <select name="tipo" id="tipo">
            <option value="" selected disabled>Seleccione...</option>
            <option value="Comunes">Comunes</option>
            <option value="Fiscalizados">Fiscalizados</option>
        </select>
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="precio">Precio
          <input type="text" name="precio" id="precio">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-4">
        <label for="feFabricacion">Fecha de Fabricación
          <input type="date" name="feFabricacion" id="feFabricacion">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="advertencia">Advertencia
          <input type="text" name="advertencia" id="advertencia">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="clasificacion">Clasificación
        <select name="clasificacion" id="clasificacion">
            <option value="" selected disabled>Seleccione...</option>
            <option value="Acidos">Acidos</option>
            <option value="Basicos">Basicos</option>
        </select>
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-4">
        <label for="feVencimiento">Fecha de Vencimiento
          <input type="date" name="feVencimiento" id="feVencimiento">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="peso">Peso
          <input type="text" name="peso" id="peso">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
      <label for="foto">Subir Foto
          <input type="file" id="foto" name="foto" >
      </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-4">
        <label for="mililitros">Mililitros
          <input type="text" name="mililitros" id="mililitros">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-4">
        <label for="formula">Formula de Químico
          <input type="text" name="formula" id="formula">
        </label>
      </div>
    </div>

    <div class="cell small-12 medium-6 large-6 text-center">
          <button class="button success" type="submit">Crear Nuevo</button>
          <a href="<?php echo constant('URL') ?>ingreso" class="button alert">Volver</a>
        </div>

  </form>
</div>

<script src="<?php echo constant('URL'); ?>public/js/ingreso.js"></script> 

<?php require ('views/footer.php');?>