<?php require ('views/header.php');?>

<link rel="stylesheet" href="./public/css/index.css">

<div class="grid-container">
	<div class="grid-x align-spaced">
		<h3>Entrega de quimicos</h3>
		<?php  echo $this->mensaje;?>

	</div>
	<div class="grid-x grid-padding-x text-center">
    <div class="cell small-12 medium-6 large-6">
        <input type="text" id="buscarEntrega" class="rounded-border" placeholder="Buscar...">
    </div>
    <div class="cell small-12 medium-6 large-6">
        <a class="button success rounded-border" href="<?php echo constant('URL');?>entrega/nuevo">Nuevo</a>
    </div>
	</div>

<!-- Creacion de la tabla de los quimicos entregados  -->

	<div class="grid-x">
		<table>
			<thead>
				<tr>
					<th>N°</th>
					<th>Docente</th>
					<th>Quimico</th>
					<th>Fecha de Entrega</th>
					<th>Codigo Quimico</th>
					<th>Cantidad Quimicos</th>
					<th>Descripcion</th>
					<th>Marca</th>
					<th>Facultad / Entidad</th>
					
				</tr>
			</thead>
			
<!-- Reprecentacion de informacion de la tabla -->
			<tbody id="entrega-quimico">
			</tbody>
		</table>
		<div id="entrega-paginador"></div>
	</div>
</div>

<script src="<?php echo constant('URL') ?>public/js/entrega.js"></script>

<?php require ('views/footer.php');?>