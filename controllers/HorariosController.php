<?php

require_once("models/Horarios.php");

class HorariosController{

    
    private $horarios;

    public function __construct(){
        $this->horarios=  new Horarios();
    }
    public function consultar_horarios(){
        $fecha = $_GET['fecha'];
        $cancha = $_GET['cancha'];
        $horarios  = $this->horarios->consultarHorarios($fecha , $cancha);
        echo json_encode($horarios);
    }



}

?>