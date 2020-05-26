<?php

class Horarios{


    public function consultarHorarios($fecha , $cancha){

        $fecha =  date("Y-m-d" , strtotime($fecha));
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/disponibilidad.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>"{\n\"fecha\" : \"$fecha\" ,\n\"cancha\" : $cancha\n}",
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