<?php

class Reservas{

    public function listarReservas($fecha){

        $curl = curl_init();

        if($fecha!=""){
          $params = "{\n\n\"fecha\" : \"$fecha\"\n}";
        }else{
          $params ="";
        }

        if($_SESSION[USUARIO]->idRol==3){
          $id= $_SESSION[USUARIO]->id;
          $params = "{\n\n\"usuario\" : \"$id\"\n}";
        }
              

        curl_setopt_array($curl, array(
          CURLOPT_URL => BASE_URL."/reservacion.php",
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


    public function actualizar_reserva($numReserva ,$idUsuario  , $estado ,$comentario ){


      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/reservacion.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS =>"{\n\n\"numReserva\": $numReserva ,\n\"usuario\" : $idUsuario ,\n\"estado\" : $estado,\n\"comentario\": \"$comentario\"\n}",
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