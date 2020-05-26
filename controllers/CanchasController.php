<?php

require_once("models/TiposCanchas.php");
require_once("models/Edificios.php");
require_once("models/Canchas.php");

class CanchasController{

    private $canchas;
    private $tiposCanchas;
    private $edificios;
    private $view;

    public function __construct(){
        
        $this->view = new View();
        $this->canchas =  new Canchas();
        $this->tiposCanchas =  new TiposCanchas();
        $this->edificios  = new Edificios();
    }

    /*Manejo de vistas*/
    public function canchas(){
        $canchas = $this->canchas->listarCanchas();              
        $this->view->show('canchas/canchas.php'  ,  array("canchas"=>$canchas)  );        
    }

    public function ingresar(){
        $tiposCanchas=$this->tiposCanchas->listarTiposCanchas();
        $edificios =  $this->edificios->listarEdificiosActivos();
        $this->view->show('canchas/ingresar.php'  ,  array("edificios"=> $edificios , "tiposCanchas" => $tiposCanchas)  );        
    }

    public function editar(){
        $tiposCanchas=$this->tiposCanchas->listarTiposCanchas();
        $edificios =  $this->edificios->listarEdificiosActivos();
        $cancha= $this->canchas->obtenerCancha($_GET['id'])[0];        
        $this->view->show('canchas/editar.php'  ,  
        array("edificios"=> $edificios , 
            "tiposCanchas" => $tiposCanchas , 
            "cancha" => $cancha
            )  );        
    }
    /*Manejo de vistas*/


    /*Manejo de solicitudes Api*/


    /*Manejo de solicitudes Api*/


}

?>