<?php

    MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            $file = fopen("notificaciones.txt", "w");
            fwrite($file, $payment . PHP_EOL);            
            fclose($file);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            $file = fopen("notificaciones.txt", "w");
            fwrite($file, $plan . PHP_EOL);            
            fclose($file);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            $file = fopen("notificaciones.txt", "w");
            fwrite($file, $plan . PHP_EOL);            
            fclose($file);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            $file = fopen("notificaciones.txt", "w");
            fwrite($file, $plan . PHP_EOL);            
            fclose($file);
            break;
    }

    header("HTTP/1.1 200 OK");
?>