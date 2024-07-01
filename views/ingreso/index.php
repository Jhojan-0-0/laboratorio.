<?php require('views/header.php'); ?>
<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/ingreso.css">

<br>
<!-- <div class="grid-container"> -->
<style>
    .grid-container {
      margin-left: 190px; /* Ajusta este valor según tus necesidades */
    }
    
  </style>
<div class="grid-container">
    <div class="grid-x align-spaced">
        <h3>Ingreso de químicos</h3>
    </div>
    <br>
    <div class="grid-x">
        <div class="cell small-12 medium-1">Buscar</div>
        <div class="cell small-12 medium-6">
            <input type="text" id="buscar" placeholder="Buscar">
        </div>
        <div class="cell small-12 medium-2">
            <button type="button" class="button ">Buscar</button>
        </div>
        <div class="cell small-12 medium-3 align-right">
            <a class="button success" id="nuevo">Nuevo</a>
        </div>
    </div>

    <!-- Creación de la tabla de contenido de los químicos ingresados -->
    <div class="grid-x " id="tabla-ingreso">
		<div id="mostrar-tabla">
				<table id="tabla-natural">
					<thead>
						<tr>
							<th>ID</th>
							<th>nombre</th>
							<th>Concentracion</th>
							<th>Tipo de Envace</th>
							<th>Tamaño</th>
							<th>Marca</th>
							<th>Peso</th>
							<th>Cantidad</th>
							<th>Fecha de Fabricacion</th>
							<th>Fecha de Vencimiento</th>
							<th>Codigo de Producto</th>
							<th>Advertencia</th>
							<th>Foto</th>
							<th>Tipo</th>
							<th>Precio</th>
							<th>Clasificaciòn</th>
							<th>Detalles</th>
						</tr>
					</thead>
					<tbody id="mostrar">
						<!-- Los datos de personas naturales se insertarán aquí -->
					</tbody>
				</table>
		</div>
	</div>
    <!-- fin de la tabla  -->
    <div class="content callout" id="form-ingreso" style="border-color: purple;">
        <div class="grid-x grid-margin-x">
            <div class="cell" style="background-color: purple;">
                <h3 style="color: white;">Registro de Químicos</h3>
            </div>
        </div>
        <form action="<?php echo constant('URL') ?>ingreso/registrarQuimico" id="formulario" style="display: block;" method="POST" enctype="multipart/form-data" id="personalForm">
            <div class="grid-x grid-margin-x">
                <!-- Primera columna -->
                <div class="cell small-12 medium-4 large-4">
                    <label for="txtnombre">Nombre:
                        <input type="text" name="nombre" id="nombre">
                    </label>
                    <label for="txtconcentracion">Concentración:
                        <input type="text" name="concentracion" id="concentracion">
                    </label>
                    <label for="txttipoenvase">Tipo de Envase:
                        <input type="text" name="tipoEnvace" id="tipoEnvace">
                    </label>
                    <label for="txtprecio">Precio:
                        <input type="number" name="precio" id="precio">
                    </label>
                    <label for="txtadvertencia">Advertencia:
                        <input type="text" name="advertencia" id="advertencia">
                    </label>
                    <label for="txtclasificacion">Clasificación:
                        <input type="text" name="clasificacion" id="clasificacion">
                    </label>
                </div>

      

                <!-- Segunda columna -->
                <div class="cell small-12 medium-4 large-4">
                    <label for="txtcantidad">Cantidad:
                        <input type="number" name="cantidad" id="cantidad" min="0" max="99">
                    </label>
                    <label for="txtcodproducto">Código de Producto:
                        <input type="text" name="codProducto" id="codProducto">
                    </label>
                    <label for="txttipo">Tipo:
                        <input type="text" name="tipo" id="tipo">
                    </label>
                    <label for="txtfabricacion">Fecha de Fabricación:
                        <input type="text" name="feFabricacion" id="feFabricacion">
                    </label>
                    <label for="txtvencimiento">Fecha de Vencimiento:
                        <input type="text" name="feVencimiento" id="feVencimiento">
                    </label>
                    <label for="txtpeso">Peso:
                        <input type="text" name="peso" id="peso">
                    </label>
                </div>
       
                <!-- Tercera columna (para la imagen) -->
                <div class="cell small-12 medium-4 large-4 ">
                    <label for="txtmarca">Marca:
                        <input type="text" name="marca" id="marca">
                    </label>
                    <label for="tamanio">Tamaño:</label>
                        <input type="text" name="tamanio" id="tamanio"><br>
                    <label for="foto">Subir Foto:</label>
                        <input type="file" name="foto" id="foto"><br>
                    <!-- <label for="cboTamano">Tamaño:
                        <select name="tamanio" id="tamanio">
                            <option value="" selected disabled>[Seleccione]</option>
                            <option value="Grande">Grande</option>
                            <option value="Mediano">Mediano</option>
                            <option value="Pequeño">Pequeño</option>
                        </select>
                    </label>

                    <label for="foto">Subir Foto:</label>
                    <input type="file" name="foto" id="foto"><br> -->
                    <!-- <input type="file" name="file" id="file" accept="image/*" class="inputfile" onchange="cargarImagen(event)"> -->
                    <!-- <label for="file">
                        <i class="fa-solid fa-image"></i>
                        Selecciona una imagen
                    </label>
                    <img class="imagen"> -->
                </div>
            </div>

            <div class="grid-x grid-margin-x">
                <div class="button-group align-center">
				    <button class="button success" type="submit">Guardar</button>
                </div>
                <div class="button-group align-center">
				    <button class="button alert" id="cerrar-boton" type="submit">Cerrar</button>
                </div>
            </div>
        </form>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="<?php echo constant('URL'); ?>public/js/ingreso.js"></script> 
<!-- <script>
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
</script> -->

<?php require('views/footer.php'); ?>
