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
					<li><span onclick="cambiadisplaydos('dos');">Modificar reserva</span></li>   
				</ul>  
			</li>
				
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="menuUsuarios">Usuarios <span class="caret"></span></a> 
				<ul id="menuUsuarios" class="dropdown-menu"  
					<li><span onclick="cambiadisplaytres('tres');">Crear usuarios</span></li>  
					<li><span onclick="cambiadisplaycuatro('cuatro');">Modificar usuarios</span></li>  
				</ul>  
			</li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="menuCanchas">Canchas <span class="caret"></span></a>
				<ul id="menuCanchas" class="dropdown-menu">  
					<li><span onclick="cambiadisplaycinco('cinco');">Crear cancha</span></li>  
					<li><span onclick="cambiadisplayseis('seis');">Modificar cancha</span></li>
				</ul>  
			</li>
			
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="menuEdificios">Edificios <span class="caret"></span></a>
				<ul id="menuEdificios" class="dropdown-menu">  
					<li><span onclick="cambiadisplaysiete('siete');">Crear edificio</span></li>  
					<li><span onclick="cambiadisplayocho('ocho');">Modificar edificio</span></li> 
				</ul>  
			</li>
		</ul>  
	  </div>
</nav>

<!--estos son los formularios que se mostraran u ocultaran--> 	
	<div class="container"  id="uno" style="display:none"><?php include('Administrador/CreacionReserva.php'); ?></div>  
	<div class="container"  id="dos" style="display:none"><?php include('Administrador/ModificacionReservas.php'); ?></div> 
	<div class="container"  id="tres" style="display:none"><?php include('Administrador/usuariosAdmin.php'); ?></div>  
	<div class="container"  id="cuatro" style="display:none"><?php include('Administrador/buscarUsuarioAdmin.php'); ?></div> 	
	<div class="container"  id="cinco" style="display:none"><?php include('Administrador/canchasAdmin.php'); ?></div>  
	<div class="container"  id="seis" style="display:none"><?php include('Administrador/buscarCanchasAdmin.php'); ?></div> 
 	<div class="container"  id="siete" style="display:none"><?php include('Administrador/edificiosAdmin.php'); ?></div>  
	<div class="container"  id="ocho" style="display:none"><?php include('Administrador/buscarEdificiosAdmin.php'); ?></div> 