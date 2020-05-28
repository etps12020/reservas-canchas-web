<?php


require_once("models/Reservas.php");

class LoginController{

    private $reservas;

    public function __construct(){
        $this->reservas = new Reservas();
    }

    public function login(){

        $usuario  = $_GET['usuario'];
        $password = $_GET['password'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/login.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>"{\n\t\"usuario\" :\"$usuario\" , \n\t\"password\" : \"$password\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain"
        ),
        ));

        $response = curl_exec($curl);

        $decodeResponse = json_decode($response);


        if(!isset($decodeResponse->mensaje)){
            $_SESSION[USUARIO] =  $decodeResponse[0];
            $reservas =  $this->reservas->listarReservas("");
            $_SESSION[LAST_ID_RESERVA] = $reservas[0]->numReservacion;
        }
        
        curl_close($curl);
        echo $response;
    }


    public function cerrar_sesion(){
        $_SESSION[USUARIO] =  null;
        header ("location: ./");
    }
}



?>