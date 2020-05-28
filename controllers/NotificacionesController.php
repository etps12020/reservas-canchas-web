<?php

require_once("models/Notificaciones.php");
require_once("models/Reservas.php");

class NotificacionesController{

    private $notificaciones;
    private $reservas;

    public function __construct(){
        $this->notificaciones = new Notificaciones();
        $this->reservas=  new Reservas();
    }


    public function notificar(){
        $response = $this->notificaciones->listarNotificaciones($_SESSION[LAST_ID_RESERVA]);
        $reservas =  $this->reservas->listarReservas("");
        $_SESSION[LAST_ID_RESERVA] = $reservas[0]->numReservacion;
        echo json_encode($response);
    }


}


?>