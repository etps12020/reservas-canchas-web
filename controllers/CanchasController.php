<?php

require_once("models/TiposCanchas.php");
require_once("models/Edificios.php");
require_once("models/Canchas.php");
require_once("models/EstadoCancha.php");

class CanchasController{

    private $canchas;
    private $tiposCanchas;
    private $estadoCancha;
    private $edificios;
    private $view;

    public function __construct(){
        
        $this->view = new View();
        $this->canchas =  new Canchas();
        $this->tiposCanchas =  new TiposCanchas();
        $this->edificios  = new Edificios();
        $this->estadoCancha = new EstadoCancha();
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
        $estadosCancha = $this->estadoCancha->listarEstadosCanchas();
        $tiposCanchas=$this->tiposCanchas->listarTiposCanchas();
        $edificios =  $this->edificios->listarEdificiosActivos();
        $cancha= $this->canchas->obtenerCancha($_GET['id'])[0];    
                
        $this->view->show('canchas/editar.php'  ,  
        array("edificios"=> $edificios , 
            "tiposCanchas" => $tiposCanchas , 
            "cancha" => $cancha ,
            "estadosCancha"=>$estadosCancha
            )  );        
    }

    public function insertar(){
        $nombre= $_POST['nombreCancha'];
        $descripcion=$_POST['descripcion'];
        $telefono=$_POST['telefono'];
        $horaInicio=date("H:i:s", strtotime($_POST['horaInicio']));
        $horaFin=date("H:i:s", strtotime($_POST['horaFin']));
        $idEdificio=$_POST['edificio'];
        $idTipoCancha=$_POST['tipoCancha'];
        $imagen=$_POST['imagen'];

        $response = $this->canchas->ingresarCancha($nombre  , $descripcion , $telefono , $horaInicio , 
        $horaFin , $idEdificio , $idTipoCancha , $imagen);

        echo json_encode($response);
    }

    public function actualizar(){
        $id= $_POST['id'];
        $nombre= $_POST['nombreCancha'];
        $descripcion=$_POST['descripcion'];
        $telefono=$_POST['telefono'];
        $horaInicio=date("H:i:s", strtotime($_POST['horaInicio']));
        $horaFin=date("H:i:s", strtotime($_POST['horaFin']));
        $idEdificio=$_POST['edificio'];
        $idTipoCancha=$_POST['tipoCancha'];
        $imagen=$_POST['imagen'];
        $estado =$_POST['estado'];

        $response = $this->canchas->actualizar( $id , $nombre  , $descripcion , $telefono , $horaInicio , $horaFin , $idEdificio , $idTipoCancha , $estado,  $imagen);
        echo json_encode($response);
    }



}

?>