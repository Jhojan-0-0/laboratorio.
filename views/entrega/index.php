<?php require ('views/header.php');?>
<br>
<div class="grid-container">
	<div class="grid-x align-spaced">
		<h3>Entrega de quimicos</h3>
		<a class="button success" href="<?php constant('URL');?>nuevo">Nuevo</a>

		<?php  echo $this->mensaje;?>
	</div>
    <br>

<!-- Creacion de la tabla de los quimicos entregados  -->

	<div class="grid-x text-center">
		<table>
			<thead>
				<tr>
					<th class="text-center">N°</th>
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
			
			<?php
				$data = $this->data;
				while ($row = $data->fetch_array(MYSQLI_ASSOC)) {
							echo "
							<tr>
								<td>".$row["identrega"]."</td>
								<td>".$row["docente"]."</td>
								<td>".$row["codSalida"]."</td>
								<td>".$row["facultad"]."</td>
								<td>".$row["feEntrega"]."</td>
								<td>".$row["idquimico"]."</td>
								<td>".$row["marca"]."</td>
								<td>".$row["cantidad"]."</td>
							</tr>
							"; 
						}
				?>

				
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



<?php require ('views/footer.php');?>