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

        <br><h2 align="center" style="background-color:#8A084B"><font color=White>Editar perfil</font></h2></br>
        <p align="center">Editar perfil</p>


        <form  id="frmEditarPerfil"  >


            <input type="hidden" name="id" id="id" value="<?php echo $usuario->id;?>">

            <div class="form-group">
                <label for="">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $usuario->nombre;?>"   class="form-control" placeholder="Nombre" readonly />        
            </div>

            <div class="form-group">
                <label for="">Correo:</label>
                <input type="text" name="correo" id="correo" value="<?php echo $usuario->correo;?>" class="form-control" placeholder="Correo"  readonly  />
            </div>

            <div class="form-group">
                <label for="">Telefono:</label>
                <input type="text" name="telefono" id="telefono" value="<?php echo $usuario->telefono;?>"  class="form-control" placeholder="Telefono"   />
            </div>

            <div class="form-group">
                <label for="password">Contraseña:</label>        
                <input type="password" name="password" id="password" value="<?php echo $usuario->password; ?>"   class="form-control" placeholder="Contraseña" >
            </div>

            <div class="form-group">
                <label for="confirmacion">Confirmar Contraseña</label>
                <input type="password" name="confirmacion" id="confirmacion"  value="<?php echo $usuario->password; ?>"  class="form-control" placeholder="Confirmar Contraseña">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Guardar Cambios</button>
            </div>    
        

        </form>

        
        
    </div>
    
    <?php
        include ("views/partials/scripts.php");
    ?> 
    <script src="scripts/editar_perfil.js" ></script>   
</body>
</html>