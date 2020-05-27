<?php

require_once("models/Reservas.php");
require_once("models/Usuarios.php");
require_once("models/TiposReservas.php");
require_once("models/Edificios.php");
require_once("models/Canchas.php");


class ReservasController{


    private $view;
    private $reservas;
    private $usuarios;
    private $edificios;
    private $tiposReservas;
    private $canchas;

    public function __construct(){
        $this->view =  new View();
        $this->reservas =  new Reservas();
        $this->usuarios = new Usuarios();
        $this->edificios =  new Edificios();
        $this->tiposReservas= new TiposReservas();
        $this->canchas = new Canchas();
    }

    public function reservas(){
        $reservas = $this->reservas->listarReservas();        
        // echo json_encode($reservas);
        $this->view->show("reservas/reservas.php" , array("reservas" => $reservas));
    }

    public function detalle_reserva(){

        $detallesReservas = $this->reservas->consultarDetalleReserva($_GET['id']);
        $lastIndex =  (  count($detallesReservas) - 1 );
        $detalleReserva = $detallesReservas[$lastIndex];
        $this->view->show("reservas/detalle.php" , array("detalleReserva" => $detalleReserva));
        
    }

    public function nueva_reserva(){
        $duis = $this->usuarios->listarDuis();
        $tiposReservas = $this->tiposReservas->listarTiposReservas();
        $edificios = $this->edificios->listarEdificiosActivos();
        $this->view->show("reservas/nuevaReserva.php" , 
        array(  "duis"=>$duis  , "tiposReservas" =>  $tiposReservas , "edificios" => $edificios ));
    }    

    public function consultar_canchas(){
        $idEdificio = $_GET['idEdificio'];
        $canchas = $this->canchas->consultarCanchasEdificio($idEdificio);
        echo json_encode($canchas);
    }

    public function ingresar_reserva(){

        $idUsuario = $_SESSION[USUARIO]->id;
        $idRol  = $_SESSION[USUARIO]->idRol;

        $dui =$_POST['dui'];
        $fecha = $_POST['fecha'];
        $idHorario =  $_POST['idHorario'];
        $cancha = $_POST['cancha'];
        $tipo = $_POST['tipoReserva'];
    
        if($idRol == 3){
            $response = $this->reservas->ingresar_reserva($fecha , $idUsuario , null  ,  null , $idHorario  , $cancha , $tipo);
        }else{
            $response = $this->reservas->ingresar_reserva($fecha , null , $idUsuario  ,  $dui , $idHorario  , $cancha , $tipo);
        }

        echo json_encode($response);
    }
}

?>