<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menú</a>
    </div>

	<div class="collapse navbar-collapse" id="myNavbar" style="background-color:#FAFAFA">
	      <ul class="nav navbar-nav">
			<li class="active"><a href="index.php">Inicio</a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="menuReservaciones">Reservaciones <span class="caret"></span></a>
				<!--Menu para ocultar o mostrar-->  
				<ul id="menuReservaciones" class="dropdown-menu">  
					<li><span onclick="cambiadisplay('uno');">Crear reserva</span></li>   
					<li><span onclick="cambiadisplaydos('dos');">Cancelar reserva</span></li>
				</ul>  
			</li>
				
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="menuUsuarios">Usuarios <span class="caret"></span></a> 
				<ul id="menuUsuarios" class="dropdown-menu"  
					<li><span onclick="cambiadisplaytres('tres');">Modificar usuario</span></li>
				</ul>  
			</li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="menuCanchas">Canchas <span class="caret"></span></a>
				<ul id="menuCanchas" class="dropdown-menu">  
					<li><span onclick="cambiadisplaycuatro('cuatro');">Canchas</span></li>  
				</ul>  
			</li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="menuEdificios">Edificios <span class="caret"></span></a>
				<ul id="menuEdificios" class="dropdown-menu">  
					<li><span onclick="cambiadisplaycinco('cinco');">Edificios</span></li> 
				</ul>  
			</li>
		</ul>  
	  </div>
</nav>

<!--estos son los formularios que se mostraran u ocultaran--> 	
	<div class="container"  id="uno" style="display:none"><?php include('UsuarioFinal/CreacionReserva.php'); ?></div>  
	<div class="container"  id="dos" style="display:none"><?php include('UsuarioFinal/GReservasCancha.php'); ?></div> 
	<div class="container"  id="tres" style="display:none"><?php include('UsuarioFinal/usuariosUsuarioMod.php'); ?></div>  
	<div class="container"  id="cuatro" style="display:none"><?php include('UsuarioFinal/canchasUsuario.php'); ?></div> 	
	<div class="container"  id="cinco" style="display:none"><?php include('UsuarioFinal/edificiosUsuario.php'); ?></div>  