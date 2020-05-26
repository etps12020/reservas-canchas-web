<?php

require_once('models/Usuarios.php');
require_once('models/EstadoUsuario.php');
require_once('models/TiposUsuarios.php');

class UsuariosController{


    private $view;
    private $usuarios;
    private $tiposUsuarios;
    private $estadoUsuario;

    public function __construct(){
        $this->view = new View();
        $this->usuarios =  new Usuarios();
        $this->tiposUsuarios = new TiposUsuarios();
        $this->estadoUsuario = new EstadoUsuario();
    }

    public function usuarios(){
        $idUsuario = $_SESSION[USUARIO]->id;
        $usuarios = $this->usuarios->listarUsuarios($idUsuario);
        $this->view->show( 'usuarios/usuarios.php' , array(  "usuarios" => $usuarios ));            
    }

    public function perfil(){
        $this->view->show('usuarios/perfil.php');
    }
    
    public function ingresar(){
        $rolesUsuarios  = $this->tiposUsuarios->listarRolesUsuarios();
        
        $this->view->show("usuarios/ingresar.php" , array("rolesUsuarios" =>  $rolesUsuarios));
    }

    public function editar(){
        $rolesUsuarios  = $this->tiposUsuarios->listarRolesUsuarios();
        $usuario = $this->usuarios->obtenerUsuario($_GET['id'])[0]; 
        $estadosUsuarios = $this->estadoUsuario->listarEstadosUsuarios();       
        $this->view->show("usuarios/editar.php" ,   
         array(   "rolesUsuarios"=>$rolesUsuarios , 
                  "usuario" => $usuario , 
                  "estadosUsuarios" => $estadosUsuarios ) );
    }
    

}


?>