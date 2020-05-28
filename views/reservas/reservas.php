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

        <?php
            if($_SESSION[USUARIO]->idRol!=3){
        ?>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="fechaReservas">Fecha:</label>
                    <input type="date" name="fechaReservas" id="fechaReservas" class="form-control" onchange="location.href='./?controlador=reservas&accion=reservas&fecha='+this.value " 
                    min="<?php echo date("Y-m-d")?>" 
                    value="<?php echo  (isset($_GET['fecha'])) ? $_GET['fecha'] : ""  ?>"
                     />
                </div>
            </div>        
            <div class="col-md-6">
                <a href="./?controlador=reservas&accion=reservas"   class="btn btn-default">
                    <ion-icon name="albums-outline"></ion-icon>  Ver todas
                </a>
            </div>            
        </div>
        <?php
            }
        ?>
        
        
        <?php
            if(is_array($reservas)){
        ?>
            <table id="tblReservas" style="width:100%; margin-top:5em; ">
                <thead class="bg-info text-white">
                    <th>Numero reservacion</th>
                    <?php
                      if($_SESSION[USUARIO]->idRol!=3){
                    ?>
                        <th>Nombre completo</th>
                        <th>Telefono</th>
                    <?php
                      }
                    ?>
                    
                    <th>Fecha reservacion</th>
                    <?php
                      if($_SESSION[USUARIO]->idRol!=3){
                    ?>
                        <th>Fecha Creación</th>                
                    <?php
                      }
                    ?>
                    
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
                                <?php
                                    if($_SESSION[USUARIO]->idRol!=3){
                                ?>
                                    <td><?php echo $reserva->nombreCompleto;?></td>
                                    <td><?php echo $reserva->telefono;?></td>
                                <?php
                                }
                                ?>
                                
                                
                                <td><?php echo date("d/m/Y" , strtotime($reserva->fechaReservacion)  );?></td>
                                <?php
                                    if($_SESSION[USUARIO]->idRol!=3){
                                ?>
                                    <td><?php echo date("d/m/Y" ,  strtotime($reserva->fechayHoraCreacion)  );?></td>
                                <?php
                                }
                                ?>
                                
                                
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

        <?php
            }else{
        ?>  
                <div style="min-height:400px;">
                    <h4 class="text-center"><?php echo $reservas->mensaje?></h4>
                </div>
                
        <?php
            }        
        ?>



		
	</div>
	
	<?php
        include ("views/partials/scripts.php");
    ?> 
	<script src="scripts/reservas.js" ></script>   
</body>
</html>