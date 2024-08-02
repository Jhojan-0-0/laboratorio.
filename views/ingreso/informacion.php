<?php require ('views/header.php'); ?>
<div class="grid-container">
    <div class="grid-x align-spaced">
        <h2>Informacion Quimico: <?php echo @$this->data['nombre'] ?></h2>
    </div>
    <form action="<?php echo constant('URL') ?>ingreso/updateQuimico" method="POST" enctype="multipart/form-data" id="update-quimico">
        <div class="grid-x grid-margin-x grid-margin-y callout">
            <div class="cell large-12 grid-x text-center callout">
                <div class="cell">
                    <img src="<?php echo @$this->data['foto']; ?>" alt="<?php echo @$this->data['nombre'] ?>">
                    <input type="text" id="fotoActual" name="fotoActual" value="<?php echo @$this->data['foto']; ?>"
                        hidden style="display:none">
                </div>
                <div class="cell">
                    <label for="foto" class="button success">Subir Nueva Foto   
                        <input type="file" id="foto" name="foto" hidden style="display:none">
                    </label>
                </div>
                <input type="text" name="idquimico" value="<?php echo @$this->data['idquimico']; ?>" hidden style="display:none">
                <input type="text" name="verificarQuimico" value="updateQuimico" id="update-quimico" hidden style="display:none">
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="nombre">Nombre
                    <input type="text" name="nombre" id="nombre" value="<?php echo @$this->data['nombre']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="cantidad">Cantidad
                    <input type="text" name="cantidad" id="cantidad" value="<?php echo @$this->data['cantidad']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="marca">Marca
                    <input type="text" name="marca" id="marca" value="<?php echo @$this->data['marca']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="concentracion">Concentración
                    <input type="text" name="concentracion" id="concentracion" value="<?php echo @$this->data['concentracion']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="codProducto">Código de Producto
                    <input type="text" name="codProducto" id="codProducto" value="<?php echo @$this->data['codProducto']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="tamano">Tamaño
                    <input type="text" name="tamano" id="tamano" value="<?php echo @$this->data['tamano']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="tipoEnvase">Tipo de Envase
                    <input type="text" name="tipoEnvase" id="tipoEnvase" value="<?php echo @$this->data['tipoEnvase']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="tipo">Tipo
                <input type="text" name="tipo" id="tipo" value="<?php echo @$this->data['tipo']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="precio">Precio
                    <input type="number" step="0.01" name="precio" id="precio" value="<?php echo @$this->data['precio']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="feFabricacion">Fecha de Fabricación
                    <input type="date" name="feFabricacion" id="feFabricacion" value="<?php echo @$this->data['feFabricacion']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="advertencia">Advertencia
                    <input type="text" name="advertencia" id="advertencia" value="<?php echo @$this->data['advertencia']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="clasificacion">Clasificación
                <input type="text" name="clasificacion" id="clasificacion" value="<?php echo @$this->data['clasificacion']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="feVencimiento">Fecha de Vencimiento
                    <input type="date" name="feVencimiento" id="feVencimiento" value="<?php echo @$this->data['feVencimiento']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="peso">Peso
                    <input type="text" name="peso" id="peso" value="<?php echo @$this->data['peso']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="mililitros">Mililitros
                    <input type="text" name="mililitros" id="mililitros" value="<?php echo @$this->data['mililitros']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="formula">Formula de Químico
                    <input type="text" name="formula" id="formula" value="<?php echo @$this->data['formula']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-12 large-8 text-center">
                    <button class="button success" id="btnActualizar" type="button">Actualizar</button>
            </div>
        </div>
    </form>
    <div class="cell small-12 medium-6 large-6 text-center">
        <button class="button warning" id="editar">Habilitar Edicion</button>
        <a href="<?php echo constant('URL') ?>ingreso" class="button alert">Volver</a>
    </div>
</div>

<!-- Escrip para que el boton actualizar no aga ninguna funcion sin habilitar la edicion -->
<script>
    $("input").prop("disabled", true);
    let edicionHabilitada = false;

    $("#editar").click(function () {
        $("input").prop("disabled", false);
        edicionHabilitada = true;
    });

    $("#btnActualizar").click(function () {
        if (edicionHabilitada) {
            $("#update-quimico").submit();
        } 
    });
</script>
<script src="<?php echo constant('URL') ?>public/js/ingreso.js"></script>

 <!-- css para que la vista de la imagen este ajustado -->
<style>
    .cell img {
      max-width: 600px; /* Ajusta el tamaño máximo según tus necesidades */
        max-height: 600px;
    }
</style>
<?php require ('views/footer.php'); ?>
