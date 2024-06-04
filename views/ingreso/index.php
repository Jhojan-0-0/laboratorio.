<?php require ('views/header.php');?>
<br>
<div class="grid-container">
	<div class="grid-x align-spaced">
		<h3>Ingreso de quimicos</h3>
		<a class="button success">Nuevo</a>
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
</div>

<?php require ('views/footer.php');?>