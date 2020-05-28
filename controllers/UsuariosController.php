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
        $usuario = $_SESSION[USUARIO];
        // echo json_encode($usuario);
        $this->view->show('usuarios/perfil.php' , array("usuario"=> $usuario));
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

    public function ingresarUsuario(){

        $nombre = $_POST['nombre'];
        $dui  =  $_POST['dui'];
        $carnet =  $_POST['carnet'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $rol = $_POST['rol'];

        $response  =$this->usuarios->ingresarUsuario($nombre  , $dui  , $carnet ,  $correo ,  $telefono , $rol  );

        echo json_encode($response);
    }

    public function actualizar(){

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $dui = $_POST['dui'];
        $carnet = $_POST['carnet'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $rol = $_POST['rol'];
        $password = $_POST['password'];
        $estado = $_POST['estado'];
        $response =$this->usuarios->actualizarUsuarioRolAdmin
        ($id , $dui , $nombre  , $correo , $carnet , $telefono , $password , $rol , $estado);
        echo json_encode($response);
    }

  
    public function actualizarPerfil(){


        $id = $_POST['id'];
        $telefono = $_POST['telefono'];
        $password = $_POST['password'];

        $response = $this->usuarios->actualizarPerfil($id , $telefono , $password);
        echo json_encode($response);


    }

}


?>