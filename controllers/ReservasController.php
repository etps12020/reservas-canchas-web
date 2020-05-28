<?php

require_once("models/Reservas.php");
require_once("models/Usuarios.php");
require_once("models/TiposReservas.php");
require_once("models/Edificios.php");
require_once("models/Canchas.php");
require_once("models/EstadoReserva.php");


class ReservasController{


    private $view;
    private $reservas;
    private $usuarios;
    private $edificios;
    private $tiposReservas;
    private $estadosReservas;
    private $canchas;

    public function __construct(){
        $this->view =  new View();
        $this->reservas =  new Reservas();
        $this->usuarios = new Usuarios();
        $this->edificios =  new Edificios();
        $this->tiposReservas= new TiposReservas();
        $this->canchas = new Canchas();
        $this->estadosReservas= new EstadoReserva();
    }

    public function reservas(){
        $fecha="";
        if(isset($_GET['fecha'])){
            $fecha=$_GET['fecha'];
        }
        $reservas = $this->reservas->listarReservas($fecha);        
        // echo json_encode($reservas);
        $this->view->show("reservas/reservas.php" , array("reservas" => $reservas));
    }

    public function detalle_reserva(){

        $detallesReservas = $this->reservas->consultarDetalleReserva($_GET['id']);
        $lastIndex =  (  count($detallesReservas) - 1 );
        $detalleReserva = $detallesReservas[$lastIndex];
        $estadosReservas = $this->estadosReservas->listarEstadosReserva();        
        $this->view->show("reservas/detalle.php" , array("detalleReserva" => $detalleReserva , "estadosReservas" => $estadosReservas));        
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

        
        $fecha = $_POST['fecha'];
        $idHorario =  $_POST['idHorario'];
        $cancha = $_POST['cancha'];
        $tipo = $_POST['tipoReserva'];
    
        if($idRol == 3){
            $response = $this->reservas->ingresar_reserva($fecha , $idUsuario , null  ,  null , $idHorario  , $cancha , $tipo);
        }else{
            $dui =$_POST['dui'];
            $response = $this->reservas->ingresar_reserva($fecha , null , $idUsuario  ,  $dui , $idHorario  , $cancha , $tipo);
        }

        echo json_encode($response);
    }

    public function actualizar_reserva(){
        $numReserva = $_POST['numReserva'];
        $usuario = $_SESSION[USUARIO]->id;
        $estado = $_POST['estado'];
        $comentario = $_POST['comentario'];
        $response = $this->reservas->actualizar_reserva($numReserva ,$usuario , $estado ,$comentario );        
        echo json_encode($response);

    }

}

?>