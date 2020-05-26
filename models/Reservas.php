<?php

class Reservas{

    public function listarReservas(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/reservacion.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);
    }

    public function consultarDetalleReserva($numeroReserva){

        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => BASE_URL."/reservacion.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS =>"{\n\t\"numReservacion\":$numeroReserva\n}",
            CURLOPT_HTTPHEADER => array(
              "Content-Type: text/plain"
            ),
          ));
          
          $response = curl_exec($curl);          
          curl_close($curl);
          return json_decode($response);
    }

    public function ingresar_reserva($fecha , $usuario , $usuarioAd  , $dui , $hora  , $cancha , $tipo){

      $curl = curl_init();

      curl_setopt_array($curl, array(
      CURLOPT_URL => BASE_URL."/reservacion.php",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n\n \"fecha\" :   \"2020-06-12\" , \n \"usuario\": 1,\n \"usuarioAd\" : 1 , \n \"dui\" : \"01070731-1\" , \n \"hora\": 1 ,\n \"cancha\" :  3 , \n \"tipo\" : 1\n  \n}",
      CURLOPT_HTTPHEADER => array(
          "Content-Type: text/plain"
      ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      return json_decode($response);
    }


}


?>