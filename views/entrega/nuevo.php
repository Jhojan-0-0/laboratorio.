<?php require ('views/header.php');?>

<link rel="stylesheet" href="<?php echo constant('URL') ?>public/css/entrega.css">
  <div class="grid-container">

  <form action="<?php echo constant('URL') ?>entrega/create" method="POST" enctype="multipart/form-data" id="quimicoEntr">
    <div class="grid-x grid-padding-x">
      <div class="cell">
        <h4 class="header">Nuevo Entrega de producto Químico</h4>
      </div>      
    </div>
      <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-5">
        <label for="identidad">Facultad / Entidad
        <select name="identidad" id="identidad">
            <option value="" selected disabled>Seleccione...</option>
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
      <div class="cell small-12 medium-6 large-1">
        <h8>Registrar</h8>
      <a class="button success rounded-border" href="<?php echo constant('URL');?>entrega/entidad">Nuevo</a>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="idquimico">Quimico
          <select name="idquimico" id="idquimico">
            <option value="" selected disabled>Seleccione...</option>
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
          <input type="text" name ="txtnombreDocente" id="txtnombreDocente" required>
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <div id="resultado"></div>
        <label for="txtcodigo">Código Quimico
          <input type="text" name="txtcodigo" id="txtcodigo" placeholder="">
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
        <label for="txtmarca">Marca
          <input type="text" name="txtmarca" id="txtmarca" placeholder="">
        </label>
      </div>
    </div>
    <div class="grid-x grid-padding-x">
      <div class="cell small-12 medium-6 large-6">
        <label for="txtfechaEntrega">Fecha de Entrega
          <input type="datetime-local" name="txtfechaEntrega" id="txtfechaEntrega">
        </label>
      </div>
      <div class="cell small-12 medium-6 large-6">
        <label for="txtdescripcion">Descripcion
          <input type="text" name="txtdescripcion" id="txtdescripcion" placeholder="">
        </label>
      </div>
    </div>
    <div class="cell small-12 medium-6 large-6 text-center">
    <button class="button success" type="submit">Registrar</button>
          <a href="<?php echo constant('URL') ?>entrega" class="button alert">Volver</a>
        </div>        

  </form>
  </div>

  <script>
    $(document).ready(function(){
      $("#idquimico").change(function(){
        let codigo = document.getElementById("idquimico").value;
        let textcod =document.getElementById("txtcodigo");
        let marca =document.getElementById("txtmarca");
        $.ajax({
                //data:  parametros, //datos que se envian a traves de ajax
                url:   'http://localhost/laboratorio/entrega/getDatos', //archivo que recibe la peticion
                type:  'post', //método de envio
                data: {idquimico:codigo},
                // beforeSend: function () {
                //         $("#resultado").html("Procesando, espere por favor...");
                // },
                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                    
                        let data = JSON.parse(response);
                        textcod.value = data.codProducto;
                        marca.value = data.marca;
                        
                        //$("#resultado").html(html);
                },
                error:function(err){
                  $("#resultado").html(err);
                }
        });
      });
    });
  </script>

<!-- Escrip para que la fecha y hora de la entrega de quimicos se coloque automaticamente -->
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
      const fechaEntregaInput = document.getElementById('txtfechaEntrega');
      const now = new Date();
      const year = now.getFullYear();
      const month = String(now.getMonth() + 1).padStart(2, '0');
      const day = String(now.getDate()).padStart(2, '0');
      
      let hours = now.getHours();
      const minutes = String(now.getMinutes()).padStart(2, '0');
      const ampm = hours >= 12 ? 'PM' : 'AM';
      hours = hours % 12;
      hours = hours ? hours : 12; // La hora '0' debe ser '12'
      hours = String(hours).padStart(2, '0');
      
      const nowFormatted = `${year}-${month}-${day}T${hours}:${minutes}`;
      fechaEntregaInput.value = nowFormatted;
    });
  </script>

<script src="<?php echo constant('URL'); ?>public/js/entrega.js"></script> 

<?php require ('views/footer.php');?>
