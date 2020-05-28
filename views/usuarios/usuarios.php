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
    
        <a href="./?controlador=usuarios&accion=ingresar" class="btn btn-info">
            <ion-icon name="add-outline"></ion-icon>
            Ingresar Nuevo
        </a>

        <br><br>

        <table class="table table-hover"  id="tblUsuarios"  >
            <thead class="bg-info text-white">
                <th>Nombre</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Fecha Creacion</th>
                <th>Telefono</th>
                <th>Accciones</th>
            </thead>
            <tbody>
                <?php
                    foreach ($usuarios as $key => $usuario) {
                        ?>
                            <tr>
                                <td>
                                    <?php echo $usuario->nombre?>
                                </td>
                                <td>
                                    <?php echo $usuario->usuario?>
                                </td>
                                <td>
                                    <?php echo $usuario->rol?>
                                </td>
                                <td>
                                  <?php 
                                    echo   date("d/m/Y" ,  strtotime($usuario->fechaCreacion) ) 
                                  ?>
                                
                                </td>
                                <td>
                                  <?php
                                    echo $usuario->telefono;
                                  ?>
                                </td>
                                <td>
                                    <a  href="./?controlador=usuarios&accion=editar&id=<?php echo  $usuario->id;?>"  class="btn btn-success">
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
	<script src="scripts/usuarios.js" ></script>   
</body>
</html>