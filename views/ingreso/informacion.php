<?php require ('views/header.php'); ?>
<br>
<div class="grid-container">
    <div class="grid-x align-spaced">
        <h2>Informacion Quimico: <?php echo @$this->data['nombre'] ?></h2>
    </div>
    <form action="<?php echo constant('URL'); ?>ingreso/updateQuimico" method="POST" enctype="multipart/form-data" id="update-quimico">
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
                <input type="text" name="idproducto" value="<?php echo @$this->data['idproducto']; ?>" hidden style="display:none">
                <input type="text" name="verificarQuimico" value="updateQuimico" id="update-quimico" hidden style="display:none">
            </div>
            <div class="cell small-12 medium-6 large-6">
                <label for="nombre">Nombre
                    <input type="text" name="nombre" id="nombre" value="<?php echo @$this->data['nombre']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-2 large-2">
                <label for="cantidadsin">Cantidad Sin
                    <input type="text" name="cantidadsin" id="cantidadsin" value="<?php echo @$this->data['cantidadsin']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-2 large-1">
                <label for="um1">U.Medida1
                    <input type="text" name="um1" id="um1" value="<?php echo @$this->data['um1']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-2 large-2">
                <label for="cantidadcon">Cantidad Conversion
                    <input type="text" name="cantidadcon" id="cantidadcon" value="<?php echo @$this->data['cantidadcon']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-2 large-1">
                <label for="um2">U.Medida2
                    <input type="text" name="um2" id="um2" value="<?php echo @$this->data['um2']; ?>">
                </label>
            </div>

            <div class="cell small-12 medium-4 large-4">
                <label for="marca">Marca
                    <input type="text" name="marca" id="marca" value="<?php echo @$this->data['marca']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="presentacion">Presentación
                    <input type="text" name="presentacion" id="presentacion" value="<?php echo @$this->data['presentacion']; ?>">
                </label>
            </div>
            
            <div class="cell small-12 medium-6 large-4">
                <label for="tipo">Tipo de Envase
                <input type="text" name="tipo" id="tipo" value="<?php echo @$this->data['tipo']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-2">
                <label for="precio">Precio
                    <input type="number" step="0.01" name="precio" id="precio" value="<?php echo @$this->data['precio']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-2">
                <label for="fecFabricacion">Fecha de Fabricación
                    <input type="date" name="fecFabricacion" id="fecFabricacion" value="<?php echo @$this->data['fecFabricacion']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-2">
                <label for="numlote">Numero de Lote
                    <input type="text" name="numlote" id="numlote" value="<?php echo @$this->data['numlote']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-4">
                <label for="clasificacion">Clasificación
                <input type="text" name="clasificacion" id="clasificacion" value="<?php echo @$this->data['clasificacion']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-6 large-2">
                <label for="fecVencimiento">Fecha de Vencimiento
                    <input type="date" name="fecVencimiento" id="fecVencimiento" value="<?php echo @$this->data['fecVencimiento']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-4 large-2">
                <label for="estante">Estante
                    <input type="text" name="estante" id="estante" value="<?php echo @$this->data['estante']; ?>">
                </label>
            </div>
            <div class="cell small-12 medium-4 large-2">
                <label for="nivel">Nivel
                    <input type="text" name="nivel" id="nivel" value="<?php echo @$this->data['nivel']; ?>">
                </label>
            </div>
            
            <div class="cell small-12 medium-4 large-2">
                <button class="button success" id="btnActualizar" type="button">Actualizar</button>
            </div>
        </div>
    </form>
    <div class="cell small-12 medium-6 large-6 text-center">
        <button class="button warning" id="editar">Habilitar Edicion</button>
        <a href="<?php echo constant('URL');?>ingreso" class="button alert">Volver</a>
    </div>
</div>

 <!-- css para que la vista de la imagen este ajustado -->
<style>
    .cell img {
      max-width: 600px; /* Ajusta el tamaño máximo según tus necesidades */
        max-height: 600px;
    }
</style>
<?php require ('views/footer.php'); ?>

<!-- Escrip para que el boton actualizar no aga ninguna funcion sin habilitar la edicion -->
<script src="<?php echo constant('URL') ?>public/js/ingreso.js"></script>
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
