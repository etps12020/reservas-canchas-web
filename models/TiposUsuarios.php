<?php

class TiposUsuarios{


    public function listarRolesUsuarios(){
                
        $idUsuario = $_SESSION[USUARIO]->id;
        $idRol  = $_SESSION[USUARIO]->idRol;

        if($idRol==3){
            $url = BASE_URL."/rolUsuario.php?id=3";
        }else{  
            $url = BASE_URL."/rolUsuario.php";
        }


        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
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






}

?>