<?php

require_once("models/edificios.php");

class EdificiosController{

    private $view;
    private $edificios;

    public function __construct(){
        $this->view = new View();
        $this->edificios =  new Edificios();

    }

    public function edificios(){
        $edificios = $this->edificios->listarEdificios();        
        $this->view->show('edificios/edificios.php'  ,  array("edificios"=>$edificios)  );                
    }

    public function ingresar(){
        $this->view->show('edificios/ingresar.php');
    }

    public function editar(){
        $this->view->show('edificios/editar.php');
    }
    
}


?>