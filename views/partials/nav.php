<nav class="navbar navbar-light bg-light static-top">
    <button class="btn btn-default sidebarCollapse pull-left"   > <ion-icon name="grid-outline"></ion-icon>  </button>
    <div class="container" >
    
     <!--<a class="navbar-brand" href="#">Start Bootstrap</a>-->
    <div class="container"  style="display: flex; align-items:center; justify-content:center;">
        <img src="img/logo-utec.png" >
    </div>

    <div class="container"  style="display: flex; align-items:center; justify-content:center; margin-top:2.5em;">        
        <h3 style="color:#8A084B; text-align:center;">Reservaciones de canchas para polideportivo UTEC</h3></br>
    </div>
  
	  <!--<a class="btn btn-outline-danger " href="#">Cerrar Sesión</a>-->
	
    </div>
</nav>

<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="active">
        <div class="sidebar-header pull-right">
            <button class="btn btn-default sidebarCollapse "  > <div> </div> <ion-icon name="grid-outline"></ion-icon>  </button>  <img src="https://pluspng.com/img-png/user-png-icon-male-user-icon-512.png" style="margin-left:1em;" width="50"  >  <p style=" color:white;"><?php echo $_SESSION[USUARIO]->nombre;?></p>
        </div>

        <ul class="list-unstyled components">            

            <li>
                <a href="./">Inicio</a>
            </li>
            
            <li>
                <a href="./?controlador=reservas&accion=reservas">Reservas</a>
            </li>

            <?php
                if($_SESSION[USUARIO]->idRol==1 || $_SESSION[USUARIO]->idRol==2 ){            
            ?>
                <li>
                    <a href="./?controlador=usuarios&accion=usuarios">Usuarios</a>
                </li>
            <?php
                }
            ?>
            <?php
                if($_SESSION[USUARIO]->idRol==1  ){            
            ?>
                <li>
                    <a href="./?controlador=canchas&accion=canchas">Canchas</a>
                </li>
            <?php
                }
            ?>

            <?php
                if($_SESSION[USUARIO]->idRol==1  ){            
            ?>
                <li>
                    <a href="./?controlador=edificios&accion=edificios">Edificios</a>
                </li>
            <?php
                }
            ?>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Perfil</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">                    
                    <li>
                        <a href="./?controlador=usuarios&accion=perfil">Editar perfil</a>
                    </li>
                    <li>
                        <a href="./?controlador=login&accion=cerrar_sesion">Cerrar Sesión</a>
                    </li>
                </ul>
            </li>
            
        </ul>
    </nav>

</div>
