<div class="container">
  <h4 align="center">Bienvenido Administrador del Sistema</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Modificar cancha</font></h2></br>
  <p align="center">Ingresar Datos de la Cancha </p>
  <form>
    <div class="form-group">
      <label for="nombreCancha">Nombre de la cancha:</label>
      <input type="nombreCancha" class="form-control" id="nombreCancha" placeholder="Ingrese el nombre de la cancha">
    </div>
	<div class="form-group">
      <label for="descripcion">Descripción:</label>
      <input type="descripcion" class="form-control" id="descripcion" placeholder="Ingrese descripción de la cancha">
    </div>
    <div class="form-group">
      <label for="telefono">Teléfono:</label>
      <input type="telefono" class="form-control" id="telefono" placeholder="Ingrese el teléfono de contacto de la cancha">
    </div>

	<!--Horarios de la cancha-->
	<br><div class="form-row" align="center">
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="horarioDisponible">Horario Inicio:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Qué horario inicio desea asignar:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">8:00 A.M.</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">12:00 P.M.</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">5:00 P.M.</a></li>
			</ul>
	</div>
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="horarioDisponible">Horario Fin:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Qué horario fin desea asignar:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">12:00 P.M.</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">5:00 P.M.</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">6:00 P.M.</a></li>
			</ul>
	</div>
	</div></br>

    <div class="form-row">
      <div class="col-12 col-md-9 mb-3 mb-md-0">
		<label for="edificio">Edificio:</label>
		<input type="edificio" class="form-control" form-control-lg" placeholder="Buscar edificio...">
      </div>
      <div class="col-12 col-md-3">
        <br><button type="submit" class="btn btn-block btn-lg btn-primary">Buscar</button></br>
      </div>
    </div>

	<div class="form-group">
      <label for="tipoCancha">Tipo de Cancha:</label>
      <input type="tipoCancha" class="form-control" id="tipoCancha" placeholder="Qué tipo de cancha es">
    </div>
	
		<div class="dropdown">
		<label for="estadoCancha">Estado de la cancha:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Cuál es el Estado de la cancha:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Activo</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Inactivo</a></li>
			</ul>
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
			<p align="center">Cancha modificada con Éxito!
				<p>Fecha de modificación: </p>
				<p>Usuario que realizó la modificación de cancha:</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		</div>
	</div>
	
  </form>
</div>