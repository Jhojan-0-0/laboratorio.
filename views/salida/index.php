<?php require ('views/header.php');?>

  <div class="grid-container">
    <h1>Solicitud de Producto</h1>

  <form>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <div class="cell medium-6">
          <label>ID de Solicitud
            <input type="text" name="idsolicitud" placeholder="Ej: SOL-2025-0456" required>
          </label>
        </div>

        <div class="cell medium-6">
          <label>Nombre del Producto
            <input type="text" name="nomproducto" placeholder="Nombre completo del producto" required>
          </label>
        </div>

        <div class="cell medium-6">
          <label>Cantidad
            <input type="number" name="cantidad" min="1" step="1" placeholder="Cantidad solicitada" required>
          </label>
        </div>

        <div class="cell medium-12">
          <label>Observaciones
            <textarea name="obs" rows="5" placeholder="Detalles adicionales: motivo de la solicitud, uso previsto, urgencia, especificaciones especiales, etc."></textarea>
          </label>
        </div>

        <div class="cell text-center" style="margin-top: 2.5rem;">
          <button class="button large primary" type="submit">Guardar Salida</button>
          <button class="button large secondary" type="reset">Limpiar formulario</button>
        </div>

      </div>
    </div>
  </form>
  </div>

<?php require ('views/footer.php');?>