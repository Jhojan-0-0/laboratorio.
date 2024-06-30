<?php require ('views/header.php');?>
<br>  
<link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/entrega.css">
  <div class="grid-container">

  <form action="<?php echo constant('URL')?>entrega/create" method="post">
    <div class="grid-x grid-padding-x">
      <div class="cell">
        <h4 class="header">Nuevo Entrega de producto Químico</h4>
      </div>      
    </div>
      <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="txtfechaEntrega">Fecha de Entrega
          <input type="date" name="txtfechaEntrega" id="txtfechaEntrega">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="idquimico">Quimico
          <select name="idquimico" id="idquimico">
            <option value="" selected disable>Seleccione</option>
            <?php 
            $res = $this->data;
              while($row = $res->fetch_array(MYSQLI_ASSOC)){
            ?>
               <option value="<?php echo $row['idquimico'];?>"><?php echo $row['nombre'];?></option>

             <?php   
              }
              ?>
          </select>
          
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="txtnombreDocente">Nombre Docente
          <input type="text" name ="txtnombreDocente" id="txtnombreDocente">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="txtcodigo">Código Quimico
          <input type="text" name="txtcodigo" id="txtcodigo" placeholder="">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="txtmarca">Marca
          <input type="text" name="txtmarca" id="txtmarca" placeholder="">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="identidad">Facultad / Entidad
        <select name="identidad" id="identidad">
            <option value="" selected disable>[Seleccione]</option>
            <?php 
            $quimico = $this->data2;
            while($row1 = $quimico->fetch_array(MYSQLI_ASSOC))
            {
            ?>
               <option value="<?php echo $row1['identidad'];?>"><?php echo $row1['entidad'];?></option>

             <?php   
              }
              ?>
          </select>

        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="txtcantidad">Cantidad
          <input type="text" name="txtcantidad" id="txtcantidad" placeholder="">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="txtdescripcion">Descripcion
          <input type="text" name="txtdescripcion" id="txtdescripcion" placeholder="">
        </label>
      </div>
    </div>
    <div class="cell small-12 medium-6 large-6 text-center">
          <button class="button button-custom" type="submit" name="btnguardar" id="btnguardar">Guardar</button>
          <a href="<?php echo constant('URL') ?>entrega" class="button alert">Volver</a>
        </div>


  </form>
  </div>

<?php require ('views/footer.php');?>
