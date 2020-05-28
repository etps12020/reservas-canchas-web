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
        <br><h2 align="center" style="background-color:#8A084B"><font color=White>Editar usuario</font></h2></br>
        <p align="center">Editar datos de usuario </p>

        <a href="./?controlador=reservas&accion=reservas"   class="btn btn-default">
                <ion-icon name="arrow-back-outline"></ion-icon></ion-icon>  Ir a listado reservas
        </a>
        <br><br><br>

        <form id="frmEditarUsuarios"   >

            <input type="hidden" name="id" id="id"  value="<?php  echo $_GET['id'];?>" >

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre"  value="<?php echo $usuario->nombre;?>"   class="form-control" placeholder="Nombre" required/>
            </div>

            <div class="form-group">
                <label for="dui">Dui:</label>
                <input type="text" name="dui" id="dui"   value="<?php echo $usuario->dui;?>"  class="form-control" placeholder="Dui"   required/>
            </div>


            <div class="form-group">
                <label for="carnet">Carnet:</label>
                <input type="text" name="carnet" id="carnte"  value="<?php echo $usuario->carnet;?>"   class="form-control"  required />
            </div>

            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="text" name="correo" id="correo" value="<?php  echo $usuario->correo?>"   class="form-control"  placeholder="correo" required/>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" value="<?php echo $usuario->telefono;?>"   class="form-control"  required />
            </div>

            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" value="<?php echo $usuario->password;?>"    placeholder="Contraseña"   autocomplete="off"  required>
            </div>

            <div class="form-group">
                <label for="confirmacion">Confirmación contraseña</label>
                <input type="password" name="confirmacion" id="confirmacion" class="form-control" value="<?php echo $usuario->password;?>"   placeholder="Confirmación contraseña" autocomplete="off"  required>
            </div>

            <div class="form-group">
                <label for="rol">Rol usuario:</label>
                <select name="rol" id="rol" class="form-control">
                    <?php
                        foreach ($rolesUsuarios as $key => $rol) {
                            $selected = ( $rol->id==$usuario->idRol) ? "selected" : "";
                            ?>
                            <option value="<?php echo $rol->id;?>"  <?php echo $selected;?>   >  <?php echo $rol->rol;?>   </option>
                            <?php
                        }
                    ?>
                </select>
            </div>

            
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" class="form-control">
                    <?php
                        foreach ($estadosUsuarios as $key => $estado) {
                            $selected =  ($estado->id == $usuario->idEstado ) ? "selected" : "";
                            ?>
                                <option value="<?php echo $estado->id;?>"> <?php echo $estado->estado;   ?></option>
                            <?php
                        }
                    ?>

                </select>
            </div>

            <div class="form-group">
                <button class="btn btn-success" type="submit"  >Guardar cambios</button>
                <a class="btn btn-default"  href="./?controlador=usuarios&accion=usuarios"   >Regresar a usuarios</a>
            </div>

        </form>

    </div>

    
	<?php
        include ("views/partials/scripts.php");
    ?> 
	
    <script src="scripts/editar_usuarios.js"  ></script>
</body>
</html>