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

        <form  id="frmActualizarReserva" >

            <div class="form-group">
                <label for="numReserva">Numero reserva</label>
                <input type="text" name="numReserva" id="numReserva" class="form-control" 
                value="<?php echo $detalleReserva->numReservacion;?>"
                placeholder="Numero reserva" readonly/>
            </div>


            <div class="form-group">
                <label for="">Fecha Reserva:</label>
                <input type="text" name="" id="" class="form-control" 
                value="<?php echo date("d/m/Y" ,  strtotime( $detalleReserva->fechaReservacion )   )   ?>"
                placeholder="Fecha Reserva"  disabled/>
            </div>

            <div class="form-group">
                <label for="">Hora Reserva:</label>
                <input type="text" name="" id="" 
                class="form-control" placeholder="Hora Reserva" disabled/>
            </div>

            <div class="form-group">
                <label for="">Solicitante de reserva:</label>
                <input type="text" name="" id="" 
                value="<?php echo $detalleReserva->UsuarioFinal;?>"
                class="form-control" placeholder="Solicitante reserva"  disabled/>
            </div>

            <div class="form-group">
                <label for="">Nombre cancha</label>
                <input type="text" name="" id="" 
                class="form-control" placeholder="Nombre Cancha"  disabled/>
            </div>

            <div class="form-group">
                <label for="">Fecha Creacion</label>
                <input type="text" name=""  id="" 
                value="<?php echo  date("d/m/Y" , strtotime($detalleReserva->fechayHoraCreacion))?>"
                 placeholder="Fecha Creacion"  class="form-control" disabled>
            </div>

            <div class="form-group">
                <label for="">Hora Creacion</label>
                <input type="text" name="" id="" placeholder="Hora Creacion"  
                value="<?php echo  date("H:i:s A" , strtotime($detalleReserva->fechayHoraCreacion))?>"
                class="form-control" disabled>
            </div>

            <div class="form-group">
                <label for="estado">Estado Reserva:</label>
                <select name="estado" id="estado" class="form-control">
                    <?php
                        foreach ($estadosReservas as $key => $estado) {
                            $selected = ($estado->id == $detalleReserva->idEstado) ? "selected" : "";
                            ?>
                            <option value="<?php echo $estado->id;?>"  <?php echo $selected;?>   ><?php echo $estado->estado;?></option>
                            <?php
                        }
                    ?>                 
                </select>
            </div>

            <div class="form-group">
                <label for="comentario">Comentarios:</label>
                <textarea name="comentario" id="comentario" cols="30" rows="10" class="form-control" placeholder="Comentarios"></textarea>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-success">Guardar cambios</button>
                <a  href="./?controlador=reservas&accion=reservas"  class="btn btn-defaul">Regresar a reservas</a>
            </div>
        
        </form>
		
	</div>
	
	<?php
        include ("views/partials/scripts.php");
    ?> 
	<script src="scripts/actualizar_reserva.js" ></script>
</body>
</html>