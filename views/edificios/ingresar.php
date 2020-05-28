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
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Crear edificio</font></h2></br>
  <p align="center">Ingresar Datos del edificio </p>

  
  	<a href="./?controlador=edificios&accion=edificios"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado de edificios
    </a>
	<br><br><br>

  <form id="frmIngresarEdificio" >

  <div class="form-group text-center">
		<img 
			alt=""
			src=""
			width="150"  
			height="150"  
			id="imgEdificio"
		/>
	</div>

	<!--Adjuntar foto del edificio -->
	<br><div class="form-group">
		<label for="imagenAdjunta">Adjuntar foto:</label>
		<input type="file" name="imagenAdjunta" id="imagenAdjunta"    accept=".pdf,.jpg,.png" multiple>
    </div></br>
	
    <div class="form-group">
      <label for="nombre">Nombre del Edificio:</label>
      <input type="nombre" class="form-control" id="nombre" name="nombre"    placeholder="Ingrese el nombre del edificio"    autocomplete="off"    required  >
    </div>
    <div class="form-group">
      <label for="direccion">Dirección:</label>
      <input type="direccion" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la dirección del edificio"   autocomplete="off"    required  >
    </div>
	
	<div class="form-group">
      <label for="descripcion">Descripción:</label>
      <input type="descripcion" class="form-control" id="descripcion" name="descripcion"   placeholder="Ingrese la descripción del edificio"  autocomplete="off"     required  >
    </div>

	<br>
		<div style="text-align: right;">
			<button type="submit" class="btn btn-info btn-lg">Confirmar</button> 
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
	<script src="scripts/ingresar_edificio.js" ></script>       
</body>
</html>