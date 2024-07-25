<?php require ('views/header.php');?>

<div class="grid-container">
	<div class="grid-x align-spaced">
		<h3>Lista de Quimicos Fiscalizados</h3>

	</div>

<!-- Creacion de la tabla de los quimicos entregados  -->

	<div class="grid-x">
		<table>
			<thead>
				<tr>
					<th>N°</th>
					<th>nombre</th>
					<th>Fecha de Fabricacion</th>
					<th>Fecha de Vencimiento</th>
					<th>Codigo de Producto</th>
					<th>Tipo</th>
                    <th>Formula de Quimico</th>
				</tr>
			</thead>
			
<!-- Reprecentacion de informacion de la tabla -->
			<tbody id="quimicos-fiscalizados">
			</tbody>
		</table>
	</div>
	<div class="boton text-center">
	<a href="<?php echo constant('URL') ?>galeria" class="button alert">Volver</a>
	</div>
</div>

<script src="<?php echo constant('URL') ?>public/js/listado.js"></script>
<?php require ('views/footer.php');?>