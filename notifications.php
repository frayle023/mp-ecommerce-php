<?php

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

    $json = file_get_contents('php://input');
    $data = json_decode($json);

    

    //echo var_dump($data);

    // $txt = '';
    // foreach($_POST as $key => $value)
    // {
    //     $txt .= $key.' : '.$value. ' | ';
    // }
    $previo = file_get_contents('logs.txt');
    $nuevo = $previo.PHP_EOL.$data;
    file_put_contents('logs.txt', $nuevo);
    header("HTTP/1.1 200 OK"); 

?>
    
   