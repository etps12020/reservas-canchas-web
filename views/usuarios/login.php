<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include ("views/partials/headers.php");
    ?>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="login-container">
        <form class="login" id="frmLogin"   method="POST" >                    
                <p class="login-title">Inicio de sesion</p>
                <input type="text" name="user" id="user" placeholder="Usuario" autocomplete="off"  class="form-control login-input"  required />				
                <input type="password" name="pass" id="pass" placeholder="Contraseña" class="form-control login-input" autocomplete="off"  required />										
                <button type="submit" class="btn btn-primary submit">Ingresar</button>

                <!--<p class="p-not-count">¿No tienes cuenta aun?   <a class="not-count" href="users-registro">Registrate</a></p>-->                
        </form>
    </div>
    <?php
        include ("views/partials/scripts.php");
    ?>    
    <script src="scripts/login.js" ></script>
</body>
</html>
