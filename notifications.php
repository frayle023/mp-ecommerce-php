<?php

MercadoPago\SDK::setAccessToken("APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181");

switch($_POST["type"]) {
    case "payment":
        $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
        $url = 'https://apps.profecharli.com/lam/add?test=true';
        foreach($_POST as $key => $value)
        {
            $url .= '&'.$key.'='.$value;  
        }
        $ch = curl_init($url);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
        header("HTTP/1.1 200 OK");
        break;
    case "plan":
        $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
        $url = 'https://apps.profecharli.com/lam/add?test=true';
        foreach($_POST as $key => $value)
        {
            $url .= '&'.$key.'='.$value;  
        }
        $ch = curl_init($url);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
        header("HTTP/1.1 200 OK");
        break;
    case "subscription":
        $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
        $url = 'https://apps.profecharli.com/lam/add?test=true';
        foreach($_POST as $key => $value)
        {
            $url .= '&'.$key.'='.$value;  
        }
        $ch = curl_init($url);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
        header("HTTP/1.1 200 OK");
        break;
    case "invoice":
        $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
        $url = 'https://apps.profecharli.com/lam/add?test=true';
        foreach($_POST as $key => $value)
        {
            $url .= '&'.$key.'='.$value;  
        }
        $ch = curl_init($url);
        $response = curl_exec($ch);
        curl_close($ch);
        echo $response;
        header("HTTP/1.1 200 OK");
        break;
}




    $curl_url = 'https://apps.profecharli.com/lam/add';

    $ch = curl_init($curl_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Accept: application/vnd.github.v3+json',
        'Authorization: token d99d468307831ccbe416d669ede67ac963df06ef',
        'User-Agent: frayle023@gmail.com'));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

    $response = curl_exec($ch);
    curl_close($ch);

    file_put_contents('logs.txt', "Test File Put Contents");

    //$response = json_decode($response);
    echo $response;