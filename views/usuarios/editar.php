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
                <input type="text" name="correo" id="correo" valuee="<?php  echo $usuario->correo?>"   class="form-control"  placeholder="correo" required/>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" name="telefono" id="telefono" value="<?php echo $usuario->telefono;?>"   class="form-control"  required />
            </div>

            <div class="form-group">
                <label for="rol">Rol usuario:</label>
                <select name="rol" id="rol" class="form-control">
                    <?php
                        foreach ($rolesUsuarios as $key => $rol) {
                            $selected = ( $rol->id==$usuario->idRol) ? "selected" : "";
                            ?>
                            <option value="<?php $rol->id;?>"  <?php echo $selected;?>   >  <?php echo $rol->rol;?>   </option>
                            <?php
                        }
                    ?>
                </select>
            </div>

            
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="" id="" class="form-control">
                    <?php
                        foreach ($estadosUsuarios as $key => $estado) {
                            $selected =  ($estado->id == $usuario->idEstado ) ? "selected" : "";
                            ?>
                                <option value="<?php $estado->id;?>"> <?php echo $estado->estado;   ?></option>
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
	<script src="scripts/usuarios.js" ></script>   
</body>
</html>