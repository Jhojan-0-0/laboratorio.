<?php require ('views/header.php');?>
<br>
<link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/ingreso.css">

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
                  <input type="text" name="nombre" id="nombre" required>
              </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="cantidad">Cantidad
            <input type="number" name="cantidad" id="cantidad" min="0" max="10000" step="0.01" placeholder="0.00" oninput="if(this.value<0)this.value=0">
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="um1">Unidad de Medida
            <select name="um1" id="um1">
              <option value="" selected disabled>Seleccione...</option>
              <option value="Kg-g">Kilogramos - Gramos</option>
              <option value="L-mL">Litros a Mililitros</option>
              <option value="M-cm">Metros a Centimetros</option>
            </select>
          </label>
        </div>
      </div>
      <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-6 large-4">
          <label for="marca">Marca
            <input type="text" name="marca" id="marca" required>
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
          <label for="tipoEnvase">Tipo de Envase
          <select name="tipoEnvase" id="tipoEnvase">
              <option value="" selected disabled>Seleccione...</option>
              <option value="Plastico">Plastico</option>
              <option value="Vidrio">Vidrio</option>
          </select>
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="presentacion">Presentación
          <select name="presentacion" id="presentacion">
              <option value="" selected disabled>Seleccione...</option>
              <option value="Comunes">Comunes</option>
              <option value="Fiscalizados">Fiscalizados</option>
          </select>
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="precio">Precio
            <input type="number" name="precio" id="precio" min="0" max="10000" step="0.01" oninput="if(this.value<0)this.value=0" placeholder="0.00">
          </label>
        </div>
      </div>
      
      <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-6 large-4">
          <label for="fadquisicion">Fecha de Adquisicion
            <input type="date" name="fadquisicion" id="fadquisicion" required>
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="numlote">Num Lote
            <input type="number" name="numlote" id="numlote">
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
        <!--<label for="foto">Subir Foto
            <input type="file" id="foto" name="foto" >
        </label>-->
        </div>
      </div>
      <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-6 large-4">
          <label for="feFabricacion">Fecha de Fabricación
            <input type="date" name="feFabricacion" id="feFabricacion">
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="feVencimiento">Fecha de Vencimiento
            <input type="date" name="feVencimiento" id="feVencimiento">
          </label>
          </div>
      </div>

      <div class="grid-x grid-padding-x">
        <div class="cell small-12 medium-6 large-4">
          <label for="estante">Estante
            <input type="text" name="estante" id="estante">
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="nivel">Nivel
            <input type="text" name="nivel" id="nivel">
          </label>
        </div>
        <div class="cell small-12 medium-6 large-4">
          <label for="numOC">Orden de Compra
          <input type="text" name="numOC" id="numOC">
          </label>
        </div>
      </div>

      <div class="cell small-12 medium-6 large-6 text-center">
            <button class="button success" type="submit">Guardar Quimico</button>
            <a href="<?php echo constant('URL') ?>ingreso" class="button alert">Volver</a>
          </div>

    </form>
</div>

<script src="<?php echo constant('URL'); ?>public/js/ingreso.js"></script> 

<?php require ('views/footer.php');?>