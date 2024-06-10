<?php require ('views/header.php');?>

<div class="grid-container">
	<div class="grid-x align-spaced">
		<h3>Entrega de quimicos</h3>
		<a class="button success">Nuevo</a>
	</div>
    <br>

<!-- Creacion de la tabla de los quimicos entregados  -->

	<div class="grid-x text-center">
		<table>
			<thead>
				<tr>
					<th class="text-center">Docente</th>
					<th class="text-center">Codigo</th>
					<th class="text-center">Facultad</th>
					<th class="text-center">Fecha de entrega</th>
					<th class="text-center">Quimico</th>
					<th class="text-center">Marca</th>
					<th class="text-center">Cantidad</th>
				</tr>
			</thead>

<!-- Reprecentacion de informacion de la tabla -->

			<tbody id="personal-data">
				<tr>
					<td>Tony Soap</td>
					<td>2425464</td>
					<td>Facultad de Quimica</td>
					<td>12/07/2023</td>
					<td>Acido Sulfurico</td>
					<td>Corning</td>
					<td>2.5 L</td>
				</tr>
			</tbody>
		</table>
	</div>


<!-- comienso del formulario de la vista -->
	<div class="content callout" style="border-color: purple;">
		<div class="grid-x grid-margin-x">
			<div class="cell" style="background-color: purple;">
				<h3 style="color: white;">REGISTRO DE QUIMICOS</h3>
			</div>
		</div>
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-6 large-6">
				<label for="">
					Nombre de Docente:
				</label>
				<input type="text" name="" id="">
			
			</div>
			<div class="cell small-12 medium-6 large-6">
				<label for="">
					Facultad:
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
						Cantidad:
				</label>
				<input type="text" name="" id="">
			</div>
			<div class="cell small-12 medium-4 large-4"><label for="">
					Fecha de Entrega:
				</label>
				<input type="text" name="" id="">
			</div>
		</div>
		
		<div class="grid-x grid-margin-x">
			<div class="cell small-12 medium-4 large-4">
				<label for="">
					Codigo:
				</label>
				<input type="text" name="" id="">
			
			</div>
			<div class="cell small-12 medium-8 large-8">
				<label for="">
					Descripcion:
				</label>
				<input type="text" name="" id="">
			
			</div>
			<div class="button-group align-center">
				<button class="submit button" style="background-color: purple;">Guardar Muestra</button>
			</div>
		</div>
	</div>
<!-- Fin del formulario de la vista -->



</div>

<?php require ('views/footer.php');?>