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
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Crear cancha</font></h2></br>
  <p align="center">Ingresar Datos de la Cancha </p>

  <a href="./?controlador=canchas&accion=canchas"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado de canchas
  </a>
  <br><br><br>

  <form id="frmIngresarCancha">

	
  <div class="form-group text-center">
		<img 
			alt=""
			src=""
			width="150"  
			height="150"  
			id="imgNuevaCancha"
		/>
	</div>
<!-- 	
	<div id="gallery">
	</div>
	<div id="imagen"></div> -->


	<!--Adjuntar foto de la cancha-->
	<br><div class="form-group">
		<label for="adjuntoFoto">Adjuntar foto:</label>
		<input type="file" id="imagenAdjunta" name="imagenAdjunta" accept=".pdf,.jpg,.png" multiple>
    </div></br>


    <div class="form-group">
      <label for="nombreCancha">Nombre de la cancha:</label>
      <input type="nombreCancha" class="form-control" id="nombreCancha" name="nombreCancha" placeholder="Ingrese el nombre de la cancha">
    </div>
	<div class="form-group">
      <label for="descripcion">Descripción:</label>
      <input type="descripcion" class="form-control" id="descripcion" name="descripcion" placeholder="Ingrese descripción de la cancha">
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono:</label>
      <input type="telefono" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el teléfono de contacto de la cancha">
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
					?>
					<option value="<?php  echo $edificio->id; ?>"> <?php echo  $edificio->nombre;?>  </option>
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
					?>
						<option value="<?php echo $tipo->id;?>"><?php echo $tipo->tipo ;?></option>
					<?php
				}
			?>
	  </select>
    </div>
	
	
	<br>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-info btn-lg" >Confirmar</button> 
			
		<a href="./?controlador=canchas&accion=canchas"   class="btn btn-default">
						<ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado de canchas
		</a>
		
		</div>
	</br>	
	
	
  </form>
</div>



    <?php
        include ("views/partials/scripts.php");
    ?>    
	<script src="scripts/ingresar_cancha.js" ></script>
</body>
</html>