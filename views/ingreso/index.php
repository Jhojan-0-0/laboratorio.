<?php require('views/header.php'); ?>
<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/ingreso.css">

<br>
<div class="grid-container">
    <div class="grid-x align-spaced">
        <h3>Ingreso de químicos</h3>
    </div>
    <br>
    <div class="grid-x">
        <div class="cell small-12 medium-1">Buscar</div>
        <div class="cell small-12 medium-6">
            <input type="text" placeholder="Buscar">
        </div>
        <div class="cell small-12 medium-2">
            <button type="button" class="button ">Buscar</button>
        </div>
        <div class="cell small-12 medium-3">
            <a class="button success" onclick="MostrarFormulario()">Nuevo</a>
        </div>
    </div>
    <!-- Creación de la tabla de contenido de los químicos ingresados -->
    <div class="grid-x text-center">
        <table>
            <thead>
                <tr>
                    <th class="text-center">Químico</th>
                    <th class="text-center">ID</th>
                    <th class="text-center">Marca</th>
                    <th class="text-center" colspan="1">Acción</th>
                </tr>
            </thead>
            <tbody id="personal-data">
                <!-- Aquí se llenarán los datos de los químicos -->
            </tbody>
        </table>
    </div>
    <form action="" id="formulario" style="display: block;">
        <div class="content callout" style="border-color: purple;">
            <div class="grid-x grid-margin-x">
                <div class="cell" style="background-color: purple;">
                    <h3 style="color: white;">Registro de Químicos</h3>
                </div>
            </div>

            <div class="grid-x grid-margin-x">
                <!-- Primera columna -->
                <div class="cell small-12 medium-4 large-4">
                    <label for="txtnombre">Nombre:
                        <input type="text" name="txtnombre" id="txtnombre">
                    </label>
                    <label for="txtconcentracion">Concentración:
                        <input type="text" name="txtconcentracion" id="txtconcentracion">
                    </label>
                    <label for="txttipoenvase">Tipo de Envase:
                        <input type="text" name="txttipoenvase" id="txttipoenvase">
                    </label>
                    <label for="txtprecio">Precio:
                        <input type="number" name="txtprecio" id="txtprecio">
                    </label>
                    <label for="txtadvertencia">Advertencia:
                        <input type="text" name="txtadvertencia" id="txtadvertencia">
                    </label>
                    <label for="txtclasificacion">Clasificación:
                        <input type="text" name="txtclasificacion" id="txtclasificacion">
                    </label>
                </div>

                <!-- Segunda columna -->                                                                         
                <div class="cell small-12 medium-4 large-4">
                    <label for="txtcantidad">Cantidad:
                        <input type="number" name="txtcantidad" id="txtcantidad" min="0" max="99">
                    </label>
                    <label for="txtcodproducto">Código de Producto:
                        <input type="text" name="txtcodproducto" id="txtcodproducto">
                    </label>
                    <label for="txttipo">Tipo:
                        <input type="text" name="txttipo" id="txttipo">
                    </label>
                    <label for="txtfabricacion">Fecha de Fabricación:
                        <input type="text" name="txtfabricacion" id="txtfabricacion">
                    </label>
                    <label for="txtvencimiento">Fecha de Vencimiento:
                        <input type="date                                                                                                                                                                                                                                                                                                                                                                                                                                               " name="txtvencimiento" id="txtvencimiento">
                    </label>
                    <label for="txtpeso">Peso:
                        <input type="text" name="txtpeso" id="txtpeso">
                    </label>
                </div>

                <!-- Tercera columna (para la imagen) -->
                <div class="cell small-12 medium-4 large-4 ">
                    <label for="txtmarca">Marca:
                        <input type="text" name="txtmarca" id="txtmarca">
                    </label>
                    <label for="cboTamano">Tamaño:
                        <select name="cboTamano" id="cboTamano">
                            <option value="" selected disabled>[Seleccione]</option>
                            <option value="Grande">Grande</option>
                            <option value="Mediano">Mediano</option>
                            <option value="Pequeño">Pequeño</option>
                        </select>
                    </label>

                    
                    <input type="file" name="file" id="file" accept="image/*" class="inputfile" onchange="cargarImagen(event)">
                    <label for="file">
                        <i class="fa-solid fa-image"></i>
                        Selecciona una imagen
                    </label>
                    <img class="imagen">
                </div>
            </div>

            <div class="grid-x grid-margin-x">
                <div class="button-group align-center">
                    <button class="submit button" style="background-color: purple;">Guardar Muestra</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    function cargarImagen(event) {
        let reader = new FileReader();
        reader.onload = function() {
            let imagen = document.querySelector('.imagen');
            imagen.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }

    function MostrarFormulario()
    {
        console.log("Mi emnnslahfdlkajsdf");
        $("#formularoi").addClass('ocultar', 'display.none');
    }
</script>

<?php require('views/footer.php'); ?>
