<?php require ('views/header.php');?>
<br>
<div class="grid-container">
	<div class="grid-x align-spaced">
		<h3>Entrega de quimicos</h3>
		<?php  echo $this->mensaje;?>

	</div>
	<div class="grid-x">
        <div class="cell small-12 medium-1">Buscar</div>
        <div class="cell small-12 medium-6">
            <input type="text" placeholder="Buscar">
        </div>
        <div class="cell small-12 medium-2">
            <button type="button" class="button ">Buscar</button>
        </div>
        <div class="cell small-12 medium-3">
			<a class="button success" href="<?php constant('URL');?>entrega/nuevo">Nuevo</a>
        </div>
    </div>
    <br>

<!-- Creacion de la tabla de los quimicos entregados  -->

	<div class="grid-x text-center">
		<table>
			<thead>
				<tr>
					<th class="text-center">N°</th>
					<th class="text-center">Docente</th>
					<th class="text-center">Quimico</th>
					<th class="text-center">Fecha de Entrega</th>
					<th class="text-center">Codigo Quimico</th>
					<th class="text-center">Cantidad Quimicos</th>
					<th class="text-center">Descripcion</th>
					<th class="text-center">Marca</th>
					<th class="text-center">Facultad / Entidad</th>
					
				</tr>
			</thead>
			
<!-- Reprecentacion de informacion de la tabla -->
			<tbody id="entrega-quimico">
			</tbody>
		</table>
	</div>
</div>

<ul class="pagination-pointed pagination text-center" role="navigation" aria-label="Pagination">
		<li class="pagination-previous disabled">Previous <span class="show-for-sr">page</span></li>
		<li class="current"><span class="show-for-sr">You're on page</span> 1</li>
		<li><a class="pagination-pointed-button" href="#" aria-label="Page 2">2</a></li>
		<li><a class="pagination-pointed-button" href="#" aria-label="Page 3">3</a></li>
		<li><a class="pagination-pointed-button" href="#" aria-label="Page 4">4</a></li>
		<li class="ellipsis" aria-hidden="true"></li>

		<li class="pagination-next"><a class="pagination-pointed-button" href="#" aria-label="Next page">Next <span class="show-for-sr">page</span></a></li>
</ul>

<script src="<?php echo constant('URL') ?>public/js/entrega.js"></script>
<?php require ('views/footer.php');?>