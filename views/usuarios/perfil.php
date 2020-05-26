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

        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" name="" id="" class="form-control" placeholder="Nombre"  />        
        </div>

        <div class="form-group">
            <label for="">Correo:</label>
            <input type="text" name="" id="" class="form-control" placeholder="Correo"  />
        </div>

        <div class="form-group">
            <label for="">Telefono:</label>
            <input type="text" name="" id="" class="form-control" placeholder="Telefono"  />
        </div>

        <div class="form-group">
            <label for="">Contraseña:</label>        
            <input type="password" name="" id="" class="form-control" placeholder="Contraseña" >
        </div>

        <div class="form-group">
            <label for="">Confirmar Contraseña</label>
            <input type="password" name="" id="" class="form-control" placeholder="Confirmar Contraseña">
        </div>

        <div class="form-group">
            <button class="btn btn-success">Guardar Cambios</button>
        </div>
    
    </div>
    

    <?php
        include ("views/partials/scripts.php");
    ?>    
</body>
</html>