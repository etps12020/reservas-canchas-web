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


	<div style="margin:0 10em;">
        
        <a href="./?controlador=edificios&accion=ingresar" class="btn btn-info">
            Ingresar edificio
        </a>
        <br>
        <br>
        <br>

        <table id="tblEdificios"  style="width:100%;">
            <thead>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Direccion</th>                
                <th>Estado</th>
                <th>
                    Acciones
                </th>
            </thead>
            <tbody>
                <?php
                    foreach($edificios as $key =>  $edificio){
                    $imagen = $edificio->imagen;
                ?>
                    <tr>
                        <td>
                            <img 
                                alt="<?php echo $edificio->nombre;?>"
                                src="data:image/png;base64 , <?php echo $imagen;?>  ";															
                                width="150"  
                                height="100"  
                            />
                        </td>
                        <td><?php echo $edificio->nombre;?></td>
                        <td><?php echo $edificio->direccion;?></td>
                        
                        <td><?php echo $edificio->estado;?></td>
                        <td>
                            <a class="btn btn-success"    href="./?controlador=edificios&accion=editar&id=<?php echo $edificio->id;?>"  >
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
	<script src="scripts/edificios.js" ></script>   
</body>
</html>