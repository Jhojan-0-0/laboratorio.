<?php require ('views/header.php');?>

<!-- Estilos personalizados -->
  <style>
    .btn-si-no {
      min-width: 60px;
      font-size: 0.85rem;
      padding: 0.35rem 0.75rem;
    }
    .btn-si.active {
      background-color: #3adb76;
      color: #0a0a0a;
    }
    .btn-no.active {
      background-color: #ec5840;
      color: white;
    }
    .btn-si-no:not(.active) {
      background-color: #e6e6e6;
      color: #4a4a4a;
    }
    .observacion-input {
      width: 100%;
      min-height: 38px;
      font-size: 0.9rem;
    }
    table thead th {
      background-color: #f5f5f5;
      font-weight: 600;
    }
  </style>


  <div class="grid-container">
    <h2>Validacion de Integridad de datos</h2>
    <div class="grid-x">
      <div class="cell">
        <div id="mensaje" style="margin: 10px 0; padding: 10px; border-radius: 4px; display: none;"></div>

        <form id="form-inventario" action="validar.php" method="post">
          <table>
            <thead>
               <tr>
                 <th width="50">Num</th>
                 <th width="400">Producto</th>
                 <th width="50">Cantidad</th>
                 <th width="200">Marca</th>
                 <th width="50">Encontrado?</th>
                 <th width="50">Completo?</th>
                 <th>Observaciones</th>
                 <th width="100">Opc</th>
               </tr>
            </thead>
            <tbody id="tabla-productos">
              <?php 
                $datos = $this->data;
                while ($fila = $datos->fetch_array(MYSQLI_ASSOC))
                {
                    
              ?>
              <tr id="tablaproductos" mostrandoId="<?php echo $fila['idproducto'];?>" data-id="<?php echo $fila['idproducto'];?>">
                <td><?php echo $fila['idproducto'];?>
                  <input type="text" name="idproducto" id="idproducto" value="<?php echo $fila['idproducto'];?>"/>
                </td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['cantidadsin'];?></td>
                <td><?php echo $fila['marca'];?></td>
                <td>
                  <div class="button-group tiny">
                    <input type="radio" name="encontrado" id="encontrado" class="btn-si-no btn-si" value="1">Sí</input>
                    <input type="radio" name="encontrado" id="encontrado" class="btn-si-no btn-no" value="0">No</input>
                  </div>
                </td>
                <td>
                  <div class="button-group tiny">
                    <input type="radio" name="completo" id="completo" class="btn-si-no btn-si" value="1">Sí</input>
                    <input type="radio" name="completo" id="completo" class="btn-si-no btn-no" value="0">No</input>
                  </div>
                </td>
                <td><input type="text" class="observacion-input" name="obs" id="obs" placeholder="Observaciones..."></td>
                <td><a onclick="mostrar(<?php echo $fila['idproducto'];?>)" id="btnguardar55" class="button">Guardar</a></td>
              </tr>
            <?php }?>
            </tbody>
              

          </table>
        </form>
        
      </div>
    </div>
  </div>

<?php require ('views/footer.php');?>

<script>
  var host = "localhost";

  function mostrar(id){

   const fila = document.querySelector('tr[data-id="' + id + '"]');

    // 1. Verificamos si está seleccionado "encontrado"
    const encontradoSeleccionado = fila.querySelector('input[name="encontrado"]:checked');
    const completoSeleccionado   = fila.querySelector('input[name="completo"]:checked');
    const obs2   = fila.querySelector('input[name="obs"]').value;

     if (!encontradoSeleccionado) {
        alert("Debe seleccionar si el ítem fue **encontrado** (Sí o No)");
    }

    if (!completoSeleccionado) {
        alert("Debe seleccionar si el ítem fue **Completo** (Sí o No)");
    }

    
    const datos = {
            idproducto: id,
            encontrado: encontradoSeleccionado.value,
            completo: completoSeleccionado.value,
            obs: obs2
    };

        console.log("Datos de la fila:", datos);

        $.ajax({
          url: `http://${host}/laboratorio/validar/Guardar`,
          type: 'POST',
          contentType: 'application/json',
          data: JSON.stringify(datos),
          dataType: 'json',
          success: function(response) {
              console.log('Respuesta:', response);
          },
          error: function(error) {
              console.error('Error:', error);
          }
        });
  }

</script>