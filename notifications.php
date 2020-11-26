<?php

    MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            $file = fopen("notifications.txt", "a");
            foreach($_POST as $key => $value)
            {
                $txt = "$key : $value | ";
                fwrite($file, $txt); 
            }           
            fclose($file);
            header("HTTP/1.1 200 OK");
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            $file = fopen("notifications.txt", "a");
            foreach($_POST as $key => $value)
            {
                $txt = "$key : $value | ";
                fwrite($file, $txt); 
            }           
            fclose($file);
            header("HTTP/1.1 200 OK");
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            $file = fopen("notifications.txt", "a");
            foreach($_POST as $key => $value)
            {
                $txt = "$key : $value | ";
                fwrite($file, $txt); 
            }           
            fclose($file);
            header("HTTP/1.1 200 OK");
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            $file = fopen("notifications.txt", "a");
            foreach($_POST as $key => $value)
            {
                $txt = "$key : $value | ";
                fwrite($file, $txt); 
            }           
            fclose($file);
            header("HTTP/1.1 200 OK");
            break;
    }

    header("HTTP/1.1 200 OK");
?>