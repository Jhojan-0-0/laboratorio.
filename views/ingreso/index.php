<?php require('views/header.php'); ?>

<link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/ingreso.css">
<link rel="stylesheet" href="<?php echo constant('URL') ?>public/assets/Assets/css/jpaginate.css">
<div class="grid-container">
    <div class="grid-x align-spaced">
        <h3>Ingreso de químicos</h3>
    </div>

	<?php
    echo $this->data;
    ?>

	<div class="grid-x grid-padding-x text-center">
    <div class="cell small-12 medium-6 large-6">
	<h5>Busqueda por Nombre, Código y Formula</h5>
	<input type="text" id="buscarquimico" placeholder="Buscar...">
    </div>
    <div class="cell small-12 medium-6 large-6">
	<a class="button success" href="<?php echo constant('URL') ?>ingreso/nuevo">Nuevo</a>
    </div>
	</div>

    <!-- Creación de la tabla de contenido de los químicos ingresados -->

    <div class="grid-x " >
		<table >
			<thead>
				<tr>
					<th>N°</th>
					<th>nombre</th>
					<th>Fecha de Fabricacion</th>
					<th>Fecha de Vencimiento</th>
					<th>Codigo de Producto</th>
					<th>Tipo</th>
					<th>Clasificaciòn</th>
                    <th>Formula de Quimico</th>
					<th class="text-center" colspan="2">Acciones</th>
				</tr>
			</thead>
			<tbody id="mostrar">
				<!-- Los datos de los qumicos se mostran aqui-->
			</tbody>
		</table>
		<div id="paginador-ingreso"></div>
	</div>
</div>

<script src="<?php echo constant('URL'); ?>public/js/ingreso.js"></script> 

<?php require('views/footer.php'); ?>
