<?php require ('views/header.php');?>
<br>
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
</div>

<?php require ('views/footer.php');?>