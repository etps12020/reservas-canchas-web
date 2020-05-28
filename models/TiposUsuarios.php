<?php

class TiposUsuarios{


    public function listarRolesUsuarios(){
                
        $idUsuario = $_SESSION[USUARIO]->id;
        $idRol  = $_SESSION[USUARIO]->idRol;

        if($idRol==2){            
            $params= "{\n\n\"id\" : \"3\"\n}";      
        }else{              
            $params="";
        }


        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => BASE_URL."/rolUsuario.php",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => $params,
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