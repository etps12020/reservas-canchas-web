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
  <h4 align="center">Bienvenido Administrador del Sistema</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Editar cancha</font></h2></br>
  <p align="center">Editar Datos de la Cancha </p>
  <form>

	<div class="form-group text-center">
		<img 
			alt="<?php echo $cancha->nombre;?>"
			src="data:image/png;base64 , <?php echo $cancha->imagen;?>  ";															
			width="350"  
			height="300"  
		/>
	</div>

    <div class="form-group">
      <label for="nombreCancha">Nombre de la cancha:</label>
      <input type="nombreCancha"  value="<?php echo $cancha->nombre;?>"  class="form-control" id="nombreCancha" placeholder="Ingrese el nombre de la cancha">
    </div>
	<div class="form-group">
      <label for="descripcion">Descripción:</label>
      <input type="descripcion" value="<?php echo $cancha->descripcion;?>"  class="form-control" id="descripcion" placeholder="Ingrese descripción de la cancha">
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono:</label>
      <input type="telefono" class="form-control"  value="<?php echo $cancha->telefonoContacto;?>"  id="telefono" placeholder="Ingrese el teléfono de contacto de la cancha">
    </div>

	<!--Horarios de la cancha-->
	<br><div class="form-row" align="center">
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="horarioDisponible">Horario Inicio:</label>
		 <input type="text" name="" id="" class="form-control" placeholder="Hora Inicio" value="07:00:00 AM"   disabled   >
	</div>
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="horarioDisponible">Horario Fin:</label>
		<input type="text" name="" id="" class="form-control" placeholder="Hora Fin"  value="18:00:00 PM"   disabled      >
	</div>
	</div></br>

    <div class="form-row">
      <div class="col-12 col-md-12 mb-3 mb-md-0">
		<label for="edificio">Edificio:</label>
        <select name="" id="" class="form-control">
			<?php
				foreach ($edificios as $key => $edificio) {
					$selected = ( $edificio->id == $cancha->idEdificio )? "selected" : "";
					?>
					<option value="<?php  echo $edificio->id; ?>"  <?php echo $selected;?>  > <?php echo  $edificio->nombre;?>  </option>
					<?php
				}
			?>
		</select>
      </div>
      
    </div><br>

	<div class="form-group">
      <label for="tipoCancha">Tipo de Cancha:</label>
      <select name="" id="" class="form-control">
			<?php
				foreach ($tiposCanchas as $key => $tipo) {
					$selected = ($tipo->id == $cancha->idTipoCancha )? "selected" : "";
					?>
						<option value="<?php echo $tipo->id;?>"><?php echo $tipo->tipo ;?></option>
					<?php
				}
			?>
	  </select>
    </div>
	
	<!--Adjuntar foto de la cancha-->
	<br><div class="form-group">
		<label for="adjuntoFoto">Adjuntar foto:</label>
		<input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple>
    </div></br>
	
	<br>
		<div style="text-align: right;">
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#btnConfirmar">Confirmar</button> 
			<button type="button" class="btn btn-link">< Cancelar</button>
		</div>
	</br>	
	
	<div class="modal fade" id="btnConfirmar" role="dialog">
		<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
			<h4 class="modal-title" >Nota!</h4>
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			<p align="center">Cancha creada con Éxito!
				<p>Fecha de creación: </p>
				<p>Usuario que realizó la creación de cancha:</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		</div>
	</div>
	
  </form>
</div>



    <?php
        include ("views/partials/scripts.php");
    ?>    

</body>
</html>