<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reservaciones de canchas para polideportivo UTEC</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="reservaCanchaUtec/css/landing-page.min.css" rel="stylesheet">
  <link href="reservaCanchaUtec/css/landing-page.css" rel="stylesheet">

</head>

<body>
  <!-- Navigación -->
  
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
     <!--<a class="navbar-brand" href="#">Start Bootstrap</a>-->
      <img class="navbar-brand"src="img/logo-utec.png">
	  <br>
		<a href="#" onclick="cambiadisplay('uno');" class="btn btn-info btn-lg" role="button">Iniciar Sesión</a>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#btnRegistrar">Registrarse</button>
	   <br><h3><font color="#8A084B">Reservaciones de canchas para polideportivo UTEC</font></h3></br>
    </div>
	
	<div class="modal fade" id="btnRegistrar" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		<h4 class="modal-title" >Alerta!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p align="center">Para poder registrarse, favor de llamar a este número:
			<p align="center">2222-22-22 </p>
			<p align="center">Le será asignado un Usuario y Contraseña.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
	</div>
  </nav>
  
  <!-- Galeria -->
  <header class="masthead text-white text-center">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider1.jpg" class="d-block w-100" alt="Fútbol">
        </div>
        <div class="carousel-item">
          <img src="img/slider2.jpg" class="d-block w-100" alt="Pin pon">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>	
  </header>
  
    <!-- Menús según perfil -->
  <?php
		$rol = "rolAdmin";
		
		switch ($rol) {
			case "rolAdmin":
				include('menuAdmin.php'); 
				break;
			case "rolEncargado":
				include('menuEncargado.php');
				break;
			default:
				include('menuUsuarioFinal.php');
			}	
	?>
  
 <div class="container"  id="uno" style="display:none"><?php include('loginUsuario.php'); ?></div>
  