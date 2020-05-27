<?php

class EstadoCancha{

    public function listarEstadosCanchas(){
        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => BASE_URL."/estadoCancha.php",
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