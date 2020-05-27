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
      $usuario = ($usuario!=null) ?  "\n \"usuario\": \"$usuario\",\n" : "";
      $usuarioAd= ($usuarioAd!=null) ? "\"usuarioAd\" : $usuarioAd , \n" : "";
      $dui = ($dui!=null) ? "\"dui\" : \"$dui\" , \n" :"";

      curl_setopt_array($curl, array(
      CURLOPT_URL => BASE_URL."/reservacion.php",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS =>"{\n\n \"fecha\" :   \"$fecha\" , $usuario  $usuarioAd $dui \"hora\": $hora ,\n \"cancha\" :  $cancha , \n \"tipo\" : $tipo\n  \n}",
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