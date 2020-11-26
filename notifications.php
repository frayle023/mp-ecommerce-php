<?php

    $data = array(
        'val1' => 1,
        'val2' => "2"
    );
    $curl_url = 'https://api.github.com/repos/frayle023/mp-ecommerce-php/contents/logs.txt';
    $ch = curl_init($curl_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $response = curl_exec($ch);
    curl_close($ch);

    $response = json_decode($response);
    echo $response;