<div class="container">
  <h4 align="center">Bienvenido Administrador del Sistema</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Crear horarios</font></h2></br>
  <p align="center">Elegir Horarios </p>
  <form>
    
	<!--Horarios de la cancha o edificio-->
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
			<p align="center">Horario creado con Éxito!
				<p>Fecha de creación: </p>
				<p>Usuario que realizó la creación de horarios:</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		</div>
	</div>
	
  </form>
</div>