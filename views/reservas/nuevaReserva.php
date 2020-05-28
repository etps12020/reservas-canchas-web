<!DOCTYPE html>
<html lang="en">
<head>	

	<?php
        include ("views/partials/headers.php");
    ?>
	
</head>
<body>
	<?php
        include ("views/partials/nav.php");
    ?>

	<div class="container">

        <a href="./?controlador=reservas&accion=reservas"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado reservas
        </a>
        <br><br><br>

        <form   id="frmNuevaReserva"  >


            <div class="form-group">
                <label for="dui">Solicitante:</label>
                <div class="input-group mb-2">
                    <input type="text" class="form-control" placeholder="Buscar Usuario"
                     name="dui" id="dui"
                     aria-label="Recipient's username" aria-describedby="basic-addon2"
                     readonly   required  >
                    <div class="input-group-append cursor"   >
                        <span class="input-group-text bg-success text-white " id="buscarUsuarios"  >
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                    </div>
                </div>                
            </div>

            <div class="form-group">
                <label for="tipoReserva">Tipo de reserva:</label>
                <select name="tipoReserva" id="tipoReserva" class="form-control"  required   >
                    <?php
                        foreach ($tiposReservas as $key => $tipo) {
                            ?>
                                <option value="<?php echo $tipo->id;?>"><?php echo $tipo->tipo;?></option>
                            <?php
                        }
                    ?>
                </select>
            </div>


            <div class="form-group">
                <label for="edificio">Seleccione el edificio:</label>
                <select name="edificio" id="edificio" class="form-control"  required  >
                    <option value="">--Seleccione--</option>
                    <?php 
                       foreach ($edificios as $key => $edificio) {
                           ?>
                           <option value="<?php echo $edificio->id;?>"><?php echo $edificio->nombre;?></option>
                           <?php
                       } 
                    ?>
                </select>
            </div>

            <div class="form-group">
                <label for="cancha">Seleccione la cancha:</label>
                <select name="cancha" id="cancha" class="form-control"  required >
                    <option value="">--Seleccione--</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha">Selecciona la fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" placeholder="Fecha reserva"  min="<?php echo date("Y-m-d")?>"   required   >
            </div>


            <div class="form-group"  style="margin-top:4em;" >
                <label for="">Selecciona un horario:</label>
                <div class="horarios">
                    
                </div>            
            </div>        

            <div class="form-group"  style="margin-top:6em;"  >

                <button class="btn btn-info" type="submit">
                    <ion-icon name="checkmark-done-outline"></ion-icon> Ingresar
                </button>

                <a href="./?controlador=reservas&accion=reservas" class="btn default">
                    Regresar a reservas
                </a>

            </div>


        </form>
		
	</div>
	
    <?php
        include ("views/reservas/modals/usuarios.modal.php");
    ?>

	<?php
        include ("views/partials/scripts.php");
    ?> 
    
    <script src="scripts/nueva-reserva.js" ></script>
</body>
</html>