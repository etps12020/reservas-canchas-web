<!DOCTYPE html>
<html lang="en">
<head>	

	<?php
        include ("views/partials/headers.php");
    ?>
	
</head>
<body>
	<?php
        include ("views/partials/nav.php");
    ?>

	<div class="container">

		<a href="./?controlador=canchas&accion=ingresar" class="btn btn-info"  href="./?controlador=canchas&accion=ingresar"  >
			Ingresar nueva cancha
		</a>

		<br>
		<br>
		<br>
		

		<table class="table table-strippepd "  id="tblCanchas"   >
			<thead>
				<th>Imagen</th>
				<th>Nombre</th>				
				<th>Horario</th>			
				<th>Tipo Cancha</th>
				<th>Estado</th>
				<th>Acciones</th>
			</thead>
			<tbody>
				<?php
					foreach ($canchas as $key => $cancha) {
						$imagen = $cancha->imagen;
						?>
							<tr>
								<td>
									<img 
										alt="<?php echo $cancha->nombre;?>"
										src="data:image/png;base64 , <?php echo $imagen;?>  ";															
										width="150"  
										height="100"  
									/>
								
								</td>
								<td><?php echo $cancha->nombre;?></td>
								<td><?php echo $cancha->horaInicio."  - ".$cancha->horaFin ?></td>							
								<td><?php echo $cancha->tipo;?></td>
								<td><?php echo $cancha->estado?></td>
								<td>
									<a class="btn btn-success"   href="./?controlador=canchas&accion=editar&id=<?php echo $cancha->cancha;?>"  >
										<ion-icon name="create-outline"></ion-icon>
									</a>							
								</td>				
							</tr>
						<?php
					}
				?>

			
			
			
			</tbody>

		
		</table>
	
	
	</div>
	


	<?php
        include ("views/partials/scripts.php");
    ?> 
	<script src="scripts/canchas.js" ></script>   
</body>
</html>