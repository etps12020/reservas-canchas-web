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
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Editar edificio</font></h2></br>
  <p align="center">Editar Datos del edificio </p>

  <a href="./?controlador=edificios&accion=edificios"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado de edificios
  </a>

  <form  id="frmEditarEdificio" >

	<input type="hidden" name="id" id="id"  value="<?php echo $_GET['id'];?>"  >
	
  <div class="form-group text-center">
		<img 
			alt="<?php echo $edificio->nombre;?>"
			src="data:image/png;base64 , <?php echo $edificio->imagen;?>  ";															
			width="350"  
			height="300"  
			id="imgEdificio"
	/>
	</div>

	
	<!--Adjuntar foto del edificio -->
	<br><div class="form-group">
		<label for="imagenAdjunta">Adjuntar foto:</label>
		<input type="file" name="imagenAdjunta" id="imagenAdjunta"   accept=".pdf,.jpg,.png" multiple>
    </div></br>

    <div class="form-group">
      <label for="nombre">Nombre del Edificio:</label>
      <input type="nombre" class="form-control"  value="<?php echo $edificio->nombre;?>"  id="nombre" name="nombre"  placeholder="Ingrese el nombre del edificio">
    </div>
    <div class="form-group">
      <label for="direccion">Dirección:</label>
      <input type="direccion" class="form-control" value="<?php echo $edificio->direccion;?>"  id="direccion" name="direccion"   placeholder="Ingrese la dirección del edificio">
    </div>
	
	<div class="form-group">
      <label for="descripcion">Descripción:</label>
      <input type="descripcion" class="form-control"  value="<?php echo $edificio->descripcion;?>"  id="descripcion" name="descripcion"   placeholder="Ingrese la descripción del edificio">
    </div>

	<div class="form-group">
		<label for="estado">Estado:</label>
		<select name="estado" id="estado" class="form-control">
			<?php
				foreach ($estadosEdificio as $key => $estado) {
					$selected  = ($estado->id==$edificio->idEstado) ? "selected"  : "";
					?>
						<option value="<?php echo $estado->id;?>" <?php echo $selected;?>  ><?php echo $estado->estado;?></option>
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
    <script src="scripts/actualizar_edificio.js" ></script>       
</body>
</html>