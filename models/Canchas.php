<?php


class Canchas{


    public function __construct(){

        
    }

    public function listarCanchas(){
                
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/cancha.php",
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

    public function consultarCanchasEdificio($idEdificio){
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/cancha.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>"{\n\t\"edificio\": $idEdificio\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);

    }

    public function obtenerCancha($idCancha){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/cancha.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>" {\n\t\"cancha\": $idCancha \n }",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);        
    }

    public function ingresarCancha($nombre  , $descripcion , $telefono , $horaInicio , $horaFin , $idEdificio , $idTipoCancha , $imagen){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/cancha.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS =>"{\r\n\"nombre\": \"$nombre\" ,\r\n\"descripcion\": \"$descripcion\" ,\r\n\"telefono\" : \"$telefono\" ,\r\n\"horaInicio\" : \"$horaInicio\",\r\n\"horaFin\" : \"$horaFin\" ,\r\n\"idEdificio\": $idEdificio ,\r\n\"idTipoCancha\": $idTipoCancha,\r\n\"imagen\":\"$imagen\"\r\n}",
        CURLOPT_HTTPHEADER => array(
        "Content-Type: application/json"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);

    }

    public function actualizar( $id , $nombre  , $descripcion , $telefono , $horaInicio , $horaFin , $idEdificio , $idTipoCancha , $estado,  $imagen){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/cancha.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS =>"\r\n{\r\n\"id\": $id,\r\n\"nombre\": \"$nombre\" ,\r\n\"descripcion\": \"$descripcion\" ,\r\n\"telefono\" : \"$telefono\" ,\r\n\"horaInicio\" : \"$horaInicio\",\r\n\"horaFin\" : \"$horaFin\" ,\r\n\"idEdificio\": $idEdificio ,\r\n\"idTipoCancha\": $idTipoCancha,\r\n\"estado\": $estado,\r\n\"imagen\":\"$imagen\"\r\n}",
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