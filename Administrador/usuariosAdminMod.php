<div class="container">
  <h4 align="center">Bienvenido Administrador del Sistema</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Modificar usuarios</font></h2></br>

  <p align="center">Ingresar Datos del Usuario </p>
  <form>
    <div class="form-group">
      <label for="nombreUsuario">Nombre de usuario:</label>
      <input type="nombreUsuario" class="form-control" id="nombreUsuario" placeholder="Ingrese el nombre de usuario">
    </div>
	<div class="form-group">
      <label for="DUI">DUI:</label>
      <input type="DUI" class="form-control" id="DUI" placeholder="Ingrese el número de documento único del usuario">
    </div>
	<div class="form-group">
      <label for="carnet">Carnet:</label>
      <input type="carnet" class="form-control" id="carnet" placeholder="Ingrese el carnet del estudiante">
    </div>
	<div class="form-group">
      <label for="correo">Correo electrónico:</label>
      <input type="correo" class="form-control" id="correo" placeholder="Ingrese el correo electrónico">
    </div>
	<div class="form-group">
      <label for="telefono">Teléfono:</label>
      <input type="telefono" class="form-control" id="telefono" placeholder="Ingrese el número telefónico del usuario">
    </div>

	<div class="form-group">
      <label for="contrasenaUsuario">Contraseña:</label>
      <input type="contrasenaUsuario" class="form-control" id="contrasenaUsuario" placeholder="********">
    </div>
	
	<div class="form-group">
      <label for="confirmContrasenaUsuario">Confirmar contraseña:</label>
      <input type="confirmContrasenaUsuario" class="form-control" id="confirmContrasenaUsuario" placeholder="********">
    </div>
	
	<div class="dropdown">
		<label for="rolUsuario">Rol del usuario:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="roles" data-toggle="dropdown">Cuál es el rol del usuario:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="listroles">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Administrador</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Encargado de Canchas</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Usuario final</a></li>
			</ul>
	</div>
		
	<div class="dropdown">
		<label for="estadoUsuario">Estado del usuario:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="estadoUsuario" data-toggle="dropdown">Cuál es el estado del usuario:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="listestadosusuarios">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Activo</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Inactivo</a></li>
			</ul>
	</div>
	
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
			<p align="center">Usuario modificado con Éxito!
				<p>Fecha de modificación: </p>
				<p>Usuario que realizó modificación:</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		</div>
	</div>
	
  </form>
</div>