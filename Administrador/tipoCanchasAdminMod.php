<div class="container">
  <h4 align="center">Bienvenido Administrador del Sistema</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Modificar tipos de cancha</font></h2></br>
  <p align="center">Elegir Tipos de cancha </p>
  <form>
    
	<!--Tipos de cancha-->
	<br><div class="form-row" align="center">
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="tipo">Tipo:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Qué tipo de cancha desea asignar:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Futbol</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Basketball</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Pinpon</a></li>
			</ul>
	</div>
	<div class="col-12 col-md-6 mb-2 mb-md-0">
		<label for="cancha">Cancha:</label>
		<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Qué cancha desea asignar:
		<span class="caret"></span></button>
			<ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">X</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Y</a></li>
				<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Z</a></li>
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
			<p align="center">Tipo de cancha se ha modificado con Éxito!
				<p>Fecha de creación: </p>
				<p>Usuario que realizó la modificación de tipo de cancha:</p>
			</div>
			<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>
		</div>
	</div>
	
  </form>
</div>