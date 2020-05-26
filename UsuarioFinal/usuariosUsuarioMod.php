<div class="container">
  <h4 align="center">Bienvenido Usuario</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Modificar usuario</font></h2></br>
  <p align="center">Ingresar Datos del Usuario </p>
  <form>
    <div class="form-group">
    <label for="disabledInput">Nombre de usuario:</label>
      <input class="form-control" id="disabledInput" type="text" disabled>

  </div>
	
	<div class="form-group">
      <label for="contrasenaUsuario">Contraseña:</label>
      <input type="contrasenaUsuario" class="form-control" id="contrasenaUsuario" placeholder="********">
    </div>
	
	<div class="form-group">
      <label for="confirmContrasenaUsuario">Confirmar contraseña:</label>
      <input type="confirmContrasenaUsuario" class="form-control" id="confirmContrasenaUsuario" placeholder="********">
    </div>
	
	<br>
		<div style="text-align: right;">
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#btnConfirmar">Confirmar</button>
			<button type="button" class="btn btn-link">< Cancelar</button>
		</div>
	</br>	
	
  </form>
</div>

<div class="modal fade" id="btnConfirmar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title" >Nota!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p align="center">Contraseña modificada con Éxito!
			<p>Fecha de modificación: </p>
			<p>Usuario que realizó modificación:</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
	</div>
</div>	 