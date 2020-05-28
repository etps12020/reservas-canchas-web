<?php

class EstadoReserva{

    public function listarEstadosReserva(){

        if($_SESSION[USUARIO]->idRol==3){
            $params ="{\n\n\"id\" : \"2\"\n}";
        }else{
            $params= "";
        }

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => BASE_URL."/estadoReservacion.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS =>$params,
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);        
        return json_decode($response);
          
    }




}

?>