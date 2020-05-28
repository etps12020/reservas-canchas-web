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

	<div style="margin: 0 10em;">

        
        <div class="form-group">
            <a href="./?controlador=reservas&accion=nueva_reserva"   class="btn btn-primary">
                <ion-icon name="add-circle-outline"></ion-icon> Agregar nueva reserva            
            </a>            
        </div>
        
        

        <table id="tblReservas" style="width:100%; margin-top:5em; ">
            <thead class="bg-info text-white">
                <th>Numero reservacion</th>
                <th>Nombre completo</th>
                <th>Telefono</th>
                <th>Fecha reservacion</th>
                <th>Fecha Creación</th>                
                <th>Hora Reserva</th>
                <th>Cancha</th>
                <th>Estado</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                <?php
                    foreach ($reservas as $key => $reserva) {
                        ?>
                        <tr>
                            <td><?php echo $reserva->numReservacion;?></td>
                            <td><?php echo $reserva->nombreCompleto;?></td>
                            <td><?php echo $reserva->telefono;?></td>
                            <td><?php echo date("d/m/Y" , strtotime($reserva->fechaReservacion)  );?></td>
                            <td><?php echo date("d/m/Y" ,  strtotime($reserva->fechayHoraCreacion)  );?></td>
                            <td><?php echo date("H:i:s A" , strtotime($reserva->horaInicio)  );?></td>
                            <td><?php echo $reserva->cancha;?></td>
                            <td><?php echo $reserva->estado;?></td>
                            <td>
                                <a class="btn btn-success" href="./?controlador=reservas&accion=detalle_reserva&id=<?php echo $reserva->numReservacion?>"   >
                                    <ion-icon name="create-outline"></ion-icon>
                                </a>
                            </td>
                        
                        </tr>

                        <?php
                    }
                ?>

            
            </tbody>
        </table>


		
	</div>
	
	<?php
        include ("views/partials/scripts.php");
    ?> 
	<script src="scripts/reservas.js" ></script>   
</body>
</html>