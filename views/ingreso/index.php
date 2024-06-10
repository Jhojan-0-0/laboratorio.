<?php require ('views/header.php');?>
<br>
<div class="grid-container">
	<div class="grid-x align-spaced">
		<h3>Ingreso de quimicos</h3>
		<a class="button success" href="<?php constant('URL');?>ingreso/nuevo">Nuevo</a>
	</div>
    <br>

<!-- Creacion de la tabla de contenido de los quimicos ingresados -->

	<div class="grid-x text-center">
		<table>
			<thead>
				<tr>
					<th class="text-center">Quimico</th>
					<th class="text-center">ID</th>
					<th class="text-center">Marca</th>
                    <th class="text-center" colspan="1">Accion</th>
				
				</tr>
			</thead>

<!-- Reprecentacion de informacion de la tabla -->

			<tbody id="personal-data">
				<tr>
					<td>Acido sulfurico</td>
					<td>5395739</td>
					<td>Merk</td>
                    <td>seleccionar</td>
				</tr>
			</tbody>
		</table>
	</div>

<!-- comienso del formulario de la vista de ingreso -->
	
	<div class="content callout" style="border-color: purple;">
		<div class="grid-x grid-margin-x">
			<div class="cell" style="background-color: purple;">
				<h3 style="color: white;">REGISTRO DE QUIMICOS</h3>
			</div>
		</div>

		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4 large-4">
				<label for="">
					Nombre:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4">
				<label for="">
						Cantidad:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4"><label for="">
					Foto:
				</label>
				<input type="text" name="" id=""> 
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4 large-4">
				<label for="">
					Concentracion:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4">
				<label for="">
						Codigo de producto:
				</label>
				<input type="text" name="" id="">
			</div>
			
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4 large-4">
				<label for="">
					Tipo de Envase :
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4">
				<label for="">
						tipo:
				</label>
				<input type="text" name="" id="">
			</div>
		
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4 large-4">
				<label for="">
					Tamaño:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4">
				<label for="">
						Precio:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4"><label for="">
					Fecha de Fabricacion:
				</label>
				<input type="text" name="" id="">
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4 large-4">
				<label for="">
					Marca:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4">
				<label for="">
						Advertencia:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4"><label for="">
					Fecha de Vencimiento:
				</label>
				<input type="text" name="" id="">
			</div>
		</div>
		
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-6 large-6">
				<label for="">
					Peso:
				</label>
				<input type="text" name="" id="">
			
			</div>
			<div class="cell small-12 medium-6 large-6">
				<label for="">
					Clasificacion:
				</label>
				<input type="text" name="" id="">
			
			</div>
			<div class="button-group align-center">
				<button class="submit button" style="background-color: purple;">Guardar Muestra</button>
			</div>
		</div>
	</div>

<!-- fin del formulario de la vista de ingreso -->

</div>

<?php require ('views/footer.php');?>