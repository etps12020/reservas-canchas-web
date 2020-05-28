<?php

require_once("models/edificios.php");
require_once("models/EstadoEdificio.php");

class EdificiosController{

    private $view;
    private $edificios;
    private $estadoEdificio ;

    public function __construct(){
        $this->view = new View();
        $this->edificios =  new Edificios();
        $this->estadoEdificio =  new EstadoEdificio();
    }

    public function edificios(){
        $edificios = $this->edificios->listarEdificios();        
        $this->view->show('edificios/edificios.php'  ,  array("edificios"=>$edificios)  );                
    }

    public function ingresar(){
        $this->view->show('edificios/ingresar.php');
    }

    public function editar(){
        $estadosEdificio = $this->estadoEdificio->listarEstadosEdificios();
        $edificio = $this->edificios->obtenerEdificio($_GET['id'])[0];        
        $this->view->show('edificios/editar.php' , array("edificio"=> $edificio , "estadosEdificio"=> $estadosEdificio ));
    }

    public function insertar(){

        $imagen  = $_POST['imagen'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $descripcion = $_POST['descripcion'];
        $response = $this->edificios->ingresarEdificio($nombre , $direccion , $descripcion , $imagen  );
        echo json_encode($response);
    }

    public function actualizar(){

        $id = $_POST['id'];
        $imagen  = $_POST['imagen'];
        $nombre = $_POST['nombre'];
        $direccion = $_POST['direccion'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];
        
        $response = $this->edificios->actualizarEdificio($id ,  $nombre  , $direccion  ,  $descripcion , $imagen  , $estado  );

        echo json_encode($response);
    
    }


    
}


?>