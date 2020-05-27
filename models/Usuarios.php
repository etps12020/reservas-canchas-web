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


    public function ingresarUsuario($nombre  , $dui  , $carnet ,  $correo ,  $telefono , $rol  ){

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => BASE_URL."/usuario.php",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS =>"{\n\t\"nombre\": \"$nombre\" ,\n\t\"dui\" : \"$dui\" ,\n\t\"carnet\" : \"$carnet\"  ,\n\t\"correo\" : \"$correo\" , \n\t\"telefono\" : \"$telefono\" , \n\t\"rol\" : $rol\n}",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: text/plain"
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            return json_decode($response);
    }


    public function actualizarUsuarioRolAdmin($id , $dui , $nombre  , $correo , $carnet , $telefono , $password , $rol , $estado){
        $idUsuarioLogin = $_SESSION[USUARIO]->id;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/usuario.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS =>"{\n\t\"usuloguedo\" : $idUsuarioLogin , \n\t\"id\" : $id , \n\t\"dui\" : \"$dui\" , \n\t\"nombre\" : \"$nombre\" , \n\t\"correo\" : \"$correo\" , \n\t\"carnet\" : \"$carnet\" , \n\t\"telefono\" : \"$telefono\" , \n\t\"password\" : \"$password\" , \n\t\"rol\" : $rol , \n\t\"estado\": $estado\n}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json"
        ),
        ));

        // echo "{\n\t\"usuloguedo\" : $idUsuarioLogin , \n\t\"id\" : $id , \n\t\"dui\" : \"$dui\" , \n\t\"nombre\" : \"$nombre\" , \n\t\"correo\" : \"$correo\" , \n\t\"carnet\" : \"$carnet\" , \n\t\"telefono\" : \"$telefono\" , \n\t\"password\" : \"$password\" , \n\t\"rol\" : $rol , \n\t\"estado\": $estado\n}";

        $response = curl_exec($curl);

        curl_close($curl);
        return json_decode($response);

    }

    public function actualizarUsuarioRolAsistente($id  , $telefono , $password){

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => BASE_URL."/usuario.php",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "PUT",
        CURLOPT_POSTFIELDS =>"{\n\t\"id\" : $id , \n\t\"telefono\" : \"$telefono\" , \n\t\"password\" : \"$password\"\n}",
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