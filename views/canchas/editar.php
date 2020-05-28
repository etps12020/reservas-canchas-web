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
  <!-- <h4 align="center">Bienvenido Administrador del Sistema</h4> -->
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Editar cancha</font></h2></br>
  <p align="center">Editar Datos de la Cancha </p>

	
  <a href="./?controlador=edificios&accion=edificios"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado de edificios
  </a>
  <br><br><br>
	
  <form id="frmEditarCancha">
	
	<input type="hidden" name="id" id="id"   value="<?php echo $_GET['id'];?>"  />

	<div class="form-group text-center">
		<img 
			alt="<?php echo $cancha->nombre;?>"
			src="data:image/png;base64 , <?php echo $cancha->imagen;?>  ";															
			width="350"  
			height="300"  
			id="imgCancha"
		/>
	</div>

	
	<!--Adjuntar foto de la cancha-->
	<br><div class="form-group">
		<label for="adjuntoFoto">Adjuntar foto:</label> <br>
		<input type="file" name="imagenAdjunta" id="imagenAdjunta" accept=".pdf,.jpg,.png" multiple>
    </div></br>

    <div class="form-group">
      <label for="nombreCancha">Nombre de la cancha:</label>
      <input type="nombreCancha"  value="<?php echo $cancha->nombre;?>"  class="form-control" id="nombreCancha" name="nombreCancha" placeholder="Ingrese el nombre de la cancha">
    </div>
	<div class="form-group">
      <label for="descripcion">Descripción:</label>
      <input type="descripcion" value="<?php echo $cancha->descripcion;?>"  class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripción de la cancha">
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono:</label>
      <input type="telefono" class="form-control"  value="<?php echo $cancha->telefonoContacto;?>"  id="telefono" name="telefono" placeholder="Ingrese el teléfono de contacto de la cancha">
    </div>

	<!--Horarios de la cancha-->
	<br><div class="form-row" align="center">
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="horaInicio">Horario Inicio:</label>
		 <input type="text" name="horaInicio" id="horaInicio" class="form-control" placeholder="Hora Inicio" value="07:00:00 AM"   readonly   >
	</div>
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="horaFin">Horario Fin:</label>
		<input type="text" name="horaFin" id="horaFin" class="form-control" placeholder="Hora Fin"  value="18:00:00 PM"   readonly      >
	</div>
	</div></br>

    <div class="form-row">
      <div class="col-12 col-md-12 mb-3 mb-md-0">
		<label for="edificio">Edificio:</label>
        <select name="edificio" id="edificio" class="form-control">
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
      <select name="tipoCancha" id="tipoCancha" class="form-control">
			<?php
				foreach ($tiposCanchas as $key => $tipo) {
					$selected = ($tipo->id == $cancha->idTipoCancha )? "selected" : "";
					?>
						<option value="<?php echo $tipo->id;?>" <?php echo $selected;?>><?php echo $tipo->tipo ;?></option>
					<?php
				}
			?>
	  </select>
    </div>

	<div class="form-group">
		<label for="estado">Estado:</label>
		<select name="estado" id="estado" class="form-control">
			<?php
				foreach ($estadosCancha as $key => $estado) {
					$selected = ($estado->id == $cancha->idEstado) ? "selected" : "";
					?>
					<option value="<?php echo $estado->id?>"  <?php echo $selected;?> ><?php echo $estado->estado;?></option>
					<?php
				}
			?>
		</select>
	</div>
	
	
	<br>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-info btn-lg" >Confirmar</button> 
			<a href="./?controlador=edificios&accion=edificios"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado de edificios
  			</a>
		</div>
	</br>	
	
	
  </form>
</div>



    <?php
        include ("views/partials/scripts.php");
    ?>    
	<script src="scripts/editar_cancha.js" ></script>
</body>
</html>