<?php require ('views/header.php');?>

<div class="grid-container">

  <h1>Registro de Producto</h1>

  <form>
    <div class="grid-container">
      <div class="grid-x grid-padding-x">

        <div class="cell medium-2">
          <label>Código Personal
            <input type="text" name="codpersonal" placeholder="Ej: PER-001" required>
          </label>
        </div>

        <div class="cell medium-6">
          <label>Nombre Trabajador
            <input type="text" name="nomtrabajador" placeholder="Nombre completo del producto" required>
          </label>
        </div>

        <div class="cell medium-4">
          <label>Escuela Profesional
            <input type="text" name="escuelaprofesional" placeholder="Nombre completo del producto" required>
          </label>
        </div>

        <div class="cell medium-6">
          <label>Nombre del Producto
            <input type="text" name="nomproducto" placeholder="Nombre completo del producto" required>
          </label>
        </div>

        <div class="cell medium-3">
          <label>Cantidad
            <input type="number" name="cantidad" min="1" step="1" placeholder="Cantidad" required>
          </label>
        </div>

        <div class="cell medium-3">
          <label>Unidad de Medida
            <select name="unimedida" required>
              <option value="" disabled>Seleccione unidad...</option>
              <option value="UN">Unidad (UN)</option>
              <option value="KG">Kilogramos (KG)</option>
              <option value="GR">Gramo (GR)</option>
              <option value="LT">Litros (LT)</option>
              <option value="ML">Mililitros (ML)</option>
              <option value="PAQ">Paquete (PAQ)</option>
              <option value="CAJA">Caja (CAJA)</option>
              <option value="M">Metros (M)</option>
              <option value="OTRO">Otro</option>
            </select>
          </label>
        </div>

        <div class="cell medium-12">
          <label>Uso del Producto
            <input type="text" name="usoproducto" placeholder="¿Para qué se utilizará? (ej: mantenimiento, producción, limpieza...)">
          </label>
        </div>

        <div class="cell medium-12">
          <label>Observaciones
            <textarea name="obs" rows="4" placeholder="Notas adicionales, características especiales, condiciones de uso, etc."></textarea>
          </label>
        </div>

        <div class="cell text-center" style="margin-top: 2rem;">
          <button class="button large success" type="submit">Enviar Solicitud</button>
          <button class="button large secondary" type="reset">Limpiar</button>
        </div>

      </div>
    </div>
  </form>

  <?php require ('views/footer.php');?>