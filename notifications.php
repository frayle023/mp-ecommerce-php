<?php

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

    $json = file_get_contents('php://input');
    $data = json_decode($json);

    $text = '';
    $output = 200;

    switch($data->type){
        case "payment" :
            $text .= "Es Payment ";
            if($data->action == "payment.created"){
                $text .= "CREATED: ";
                $output = 201;
            }else {
                $text .= "UPDATED: ";
                $output = 200;
            }
    }

    $text .= $json;
    $previo = file_get_contents('logs.txt');
    $nuevo = $previo.PHP_EOL.$text;
    file_put_contents('logs.txt', $nuevo);
    
    if($output == 201){
        header("HTTP/1.1 201 CREATED"); 
    }else{
        header("HTTP/1.1 200 OK"); 
    }

?>
    
   