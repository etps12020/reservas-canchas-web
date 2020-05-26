<!DOCTYPE html>
<html lang="en">
<head>
	<title>Crear Reserva de Cancha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
    $( "#datepicker" ).datepicker({buttonImage: "images/calendar.gif"});
    } );
    </script>


    <div class="row styleRow1">
            <div class="col-5"style="padding-left:25px">
                <!--  <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menú
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Reservaciones</a>
                        <a class="dropdown-item" href="#">Usuarios</a>
                        <a class="dropdown-item" href="#">Canchas</a>
                        <a class="dropdown-item" href="#">Edificios</a>
                        <a class="dropdown-item" href="#">Cerrar Sesion</a>
                    </div> 
                </div>  -->  
            </div>
			
            
                <h4 align="center">Bienvenido Administrador </h4>      
        </div>
        
           <br><h2 align="center" style="background-color:#8A084B"><font color=White>Crear Reservación</font></h2></br>
        
</head>
<body>
<div class="container">
<section>
            <div class="row RoDate">
                <div class="col " >
                    <p>Fecha: <input type="text" id="datepicker"></p>
                 </div>
                <div class="col"></div>
                <div class="col colAlign">
                <button type="button" class="btn btn-primary">Confirmar</button>
                <button type="button" class="btn btn-outline-info ">< Regresar</button>
                </div>
            </div>    
        </section>
        <!--Reserva de Cancha-->
        <section>
            <table class="table table-hover">
                <!--<caption>List of users</caption>-->
                <thead>
                    <tr>
                    <th scope="col">Horario</th>
                    <th scope="col"></th>
                    <th scope="col">Canchas</th>
                    <th scope="col"></th>
                    <th scope="col">Asignar Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">8:00 AM</th>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Futbol Sala
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    BasketBall
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Mesa de Ping Pong
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Usuarios
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Usuario 1</a>
                                    <a class="dropdown-item" href="#">Usuario 2</a>
                                    <a class="dropdown-item" href="#">Usuario 3</a>
                                    <a class="dropdown-item" href="#">Usuario 5</a>
                                    <a class="dropdown-item" href="#">Usuario 6</a>
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">9:00 AM</th>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Futbol Sala
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    BasketBall
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Mesa de Ping Pong
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Usuarios
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Usuario 1</a>
                                    <a class="dropdown-item" href="#">Usuario 2</a>
                                    <a class="dropdown-item" href="#">Usuario 3</a>
                                    <a class="dropdown-item" href="#">Usuario 5</a>
                                    <a class="dropdown-item" href="#">Usuario 6</a>
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10:00 AM</th>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Futbol Sala
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    BasketBall
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Mesa de Ping Pong
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Usuarios
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Usuario 1</a>
                                    <a class="dropdown-item" href="#">Usuario 2</a>
                                    <a class="dropdown-item" href="#">Usuario 3</a>
                                    <a class="dropdown-item" href="#">Usuario 5</a>
                                    <a class="dropdown-item" href="#">Usuario 6</a>
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">11:00 AM</th>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Futbol Sala
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    BasketBall
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Mesa de Ping Pong
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Usuarios
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Usuario 1</a>
                                    <a class="dropdown-item" href="#">Usuario 2</a>
                                    <a class="dropdown-item" href="#">Usuario 3</a>
                                    <a class="dropdown-item" href="#">Usuario 5</a>
                                    <a class="dropdown-item" href="#">Usuario 6</a>
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">12:00 M</th>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Futbol Sala
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    BasketBall
                                </label>
                            </div>
                        </td>
                        <td>
                        <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Mesa de Ping Pong
                                </label>
                            </div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Usuarios
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Usuario 1</a>
                                    <a class="dropdown-item" href="#">Usuario 2</a>
                                    <a class="dropdown-item" href="#">Usuario 3</a>
                                    <a class="dropdown-item" href="#">Usuario 5</a>
                                    <a class="dropdown-item" href="#">Usuario 6</a>
                                </div>
                            </div> 
                        </td>
                    </tr>
                </tbody>
            </table>   
        </section>  
        
</div>
<!--<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>-->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
<!--
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

--></body>
</html>

       
        