<?php

    $token = '008b13dbf6f8d087c4595fc16c21fe3f5c2432bd';
    $data = "Texto de prueba";
    $data = base64_encode($data);

    $curl_url = 'https://api.github.com/repos/frayle023/mp-ecommerce-php/contents/logs.txt';
    $ch = curl_init($curl_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: token $token",
        "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 YaBrowser/19.9.3.314 Yowser/2.5 Safari/573.36"));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $response = curl_exec($ch);
    curl_close($ch);

    //$response = json_decode($response);
    echo $response;