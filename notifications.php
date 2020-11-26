<?php

//set date time if not already done elsewhere
date_default_timezone_set('America/Los_Angeles');

//set date/time for entry
$time_stamp = date('m\-d\-Y\-h:iA');

//set file name and location
$log = "assets/logs/log.txt";

//open or create log.txt
//[see docs for more modes](http://php.net/manual/en/function.fopen.php)
$fp = fopen($log,"a+");

//append text and time stamp to log.txt (the double \n's are to give readable space inbetween entries.) 
fwrite($fp, $time_stamp . "\n" . "hello world" . "\n\n");

//close log file
fclose($fp);

//You can also use unlink() to delete file if needed


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