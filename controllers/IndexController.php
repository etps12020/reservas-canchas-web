<?php

class IndexController{

    private $view;

    public function __construct(){
        $this->view =new View();
    }


    public function index(){
        

        if(!isset($_SESSION[USUARIO])){
            $this->view->show('usuarios/login.php');        
        }else{
            $usuario = $_SESSION[USUARIO];
            $this->view->show('index.php', array("usuario"=>$usuario));        
        }
        
    }


}


?>