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
            //$vista->show('index.php', array("nombre" => "Juan"));        
            $this->view->show('index.php');        
        }
        
    }


}


?>