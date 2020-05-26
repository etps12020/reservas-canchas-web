<?php

class Usuarios{


    public function listarUsuarios($idUsuario){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/usuario.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>"{\n \"id\" : $idUsuario ,\n  \"accion\" : \"listar\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);

    }


    public function listarDuis(){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/usuario.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS =>"{\n\t\"id\": 1 , \n\t\"accion\" : \"dui\"\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: text/plain"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);    
    }

    public function obtenerUsuario($idUsuario){

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => BASE_URL."/usuario.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_POSTFIELDS =>" {\n\t\"id\": $idUsuario ,\n\t\"accion\": \"buscar\"\n \n }",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain"
            ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return json_decode($response) ;
    }








}



?>