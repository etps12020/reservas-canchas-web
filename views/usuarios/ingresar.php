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
        <h4 align="center">Bienvenido Administrador del Sistema</h4>
        <br><h2 align="center" style="background-color:#8A084B"><font color=White>Ingresar usuario</font></h2></br>
        <p align="center">Ingresar datos de usuario </p>

        <a href="./?controlador=usuarios&accion=usuarios"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado usuarios
        </a>
        <br><br><br>
        <form id="frmIngresarUsuarios"  >

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre"  autocomplete="off"  required/>
            </div>

            <div class="form-group">
                <label for="dui">Dui:</label>
                <input type="text" name="dui" id="dui" class="form-control" placeholder="Dui"  autocomplete="off"    required/>
            </div>  


            <div class="form-group">
                <label for="carnet">Carnet:</label>
                <input type="text" name="carnet" id="carnte" class="form-control"  placeholder="Carnet"  autocomplete="off"     required />
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="text" name="correo" id="correo" class="form-control"  placeholder="correo" autocomplete="off"   required/>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" class="form-control"  autocomplete="off"   required />
            </div>

            <div class="form-group">
                <label for="rol">Rol usuario:</label>
                <select name="rol" id="rol" class="form-control">
                    <?php
                        foreach ($rolesUsuarios as $key => $rol) {
                            ?>
                            <option value="<?php echo $rol->id;?>"> <?php echo $rol->rol;?>  </option>
                            <?php
                        }                    
                    ?>
                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-info" type="submit"  >Ingresar</button>
                <a class="btn btn-default"  href="./?controlador=usuarios&accion=usuarios"   >Regresar a usuarios</a>
            </div>

        </form>

    </div>

    
	<?php
        include ("views/partials/scripts.php");
    ?> 
	<script src="scripts/ingresar_usuarios.js" ></script>   
</body>
</html>