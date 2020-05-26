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

        <form action="">

            <div class="form-group">
                <label for="">Numero reserva</label>
                <input type="text" name="" id="" class="form-control" 
                value="<?php echo $detalleReserva->numReservacion;?>"
                placeholder="Numero reserva" disabled/>
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
                <label for="">Estado Reserva:</label>
                <select name="" id="" class="form-control">
                    <option value="">Estado 1</option>
                    <option value="">Estado 2</option>
                    <option value="">Estado 3</option>                    
                </select>
            </div>

            <div class="form-group">
                <label for="">Comentarios:</label>
                <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Comentarios">            
                </textarea>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-success">Guardar cambios</button>
                <a  href="./?controlador=reservas&accion=reservas"  class="btn btn-defaul">Regresar a reservas</a>
            </div>
            



        </form>
		
	</div>
	
	<?php
        include ("views/partials/scripts.php");
    ?> 
	
</body>
</html>