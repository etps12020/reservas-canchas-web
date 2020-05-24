<div class="container">
  <h4 align="center">Bienvenido Encargado de Canchas</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Modificar edificio</font></h2></br>
  <p align="center">Ingresar Datos del edificio </p>
  <form>

	<!--Adjuntar foto del edificio -->
	<div class="form-group">
		<label for="adjuntoFoto">Adjuntar foto:</label>
		<input type="file" name="adjunto" accept=".pdf,.jpg,.png" multiple>
    </div>

	<div class="dropdown">
		<label for="estadoCancha">Estado de la cancha:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Cuál es el Estado del edificio:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu2">
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
			<p align="center">Edificio modificado con Éxito!
				<p>Fecha de modificación: </p>
				<p>Usuario que realizó la modificación de edificio:</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		</div>
	</div>
	
  </form>
</div>