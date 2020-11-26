<?php

require __DIR__ .  '/vendor/autoload.php';

MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');
MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            $txt = '';
            foreach($_POST as $key => $value)
            {
                $txt .= $key.' : '.$value. ' | ';
            }
            file_put_contents('logs.txt', $txt);
            header("HTTP/1.1 200 OK"); 
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            $txt = '';
            foreach($_POST as $key => $value)
            {
                $txt .= $key.' : '.$value. ' | ';
            }
            file_put_contents('logs.txt', $txt);
            header("HTTP/1.1 200 OK"); 
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            $txt = '';
            foreach($_POST as $key => $value)
            {
                $txt .= $key.' : '.$value. ' | ';
            }
            file_put_contents('logs.txt', $txt);
            header("HTTP/1.1 200 OK"); 
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            $txt = '';
            foreach($_POST as $key => $value)
            {
                $txt .= $key.' : '.$value. ' | ';
            }
            file_put_contents('logs.txt', $txt);
            header("HTTP/1.1 200 OK"); 
            break;
    }

header("HTTP/1.1 200 OK"); 
?>
    
   