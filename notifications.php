<?php

$post_data = $_GET['type'];
if (!empty($post_data)) {
    $dir = '/files';
    $file = 'log';
    $filename = $dir.$file.'.txt';
    $handle = fopen($filename, "w");
    fwrite($handle, $post_data);
    fclose($handle);
    echo $file;
}


            // $log = "assets/log.txt";
            // $file = fopen($log, "a+");
            // $txt = '';
            // foreach($_POST as $key => $value)
            // {
            //     $txt .= $key.' : '.$value.' | ';
            // }          
            // $txt.= ' :end'; 
            // fwrite($file, $txt);
            // fclose($file);
            // header("HTTP/1.1 200 OK");



    // MercadoPago\SDK::setAccessToken("APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181");

    // switch($_POST["type"]) {
    //     case "payment":
    //         // $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
    //         $log = 'assets/logs/log.txt';
    //         $file = fopen($log, "a+");
    //         $txt = '';
    //         foreach($_POST as $key => $value)
    //         {
    //             $txt .= $key.' : '.$value.' | ';
    //         }           
    //         fwrite($file, $txt);
    //         fclose($file);
    //         header("HTTP/1.1 200 OK");
    //         break;
    //     case "plan":
    //         // $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
    //         $log = 'assets/logs/log.txt';
    //         $file = fopen($log, "a+");
    //         $txt = '';
    //         foreach($_POST as $key => $value)
    //         {
    //             $txt .= $key.' : '.$value.' | ';
    //         }           
    //         fwrite($file, $txt);
    //         fclose($file);
    //         header("HTTP/1.1 200 OK");
    //         break;
    //     case "subscription":
    //         // $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
    //         $log = 'assets/logs/log.txt';
    //         $file = fopen($log, "a+");
    //         $txt = '';
    //         foreach($_POST as $key => $value)
    //         {
    //             $txt .= $key.' : '.$value.' | ';
    //         }           
    //         fwrite($file, $txt);
    //         fclose($file);
    //         header("HTTP/1.1 200 OK");
    //         break;
    //     case "invoice":
    //         // $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
    //         $log = 'assets/logs/log.txt';
    //         $file = fopen($log, "a+");
    //         $txt = '';
    //         foreach($_POST as $key => $value)
    //         {
    //             $txt .= $key.' : '.$value.' | ';
    //         }           
    //         fwrite($file, $txt);
    //         fclose($file);
    //         header("HTTP/1.1 200 OK");
    //         break;
    // }
    // header("HTTP/1.1 200 OK");
?>