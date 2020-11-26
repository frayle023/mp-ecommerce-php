<?php

    MercadoPago\SDK::setAccessToken("APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181");
    
    $url = 'https://apps.profecharli.com/lam/add?test=true';
    foreach($_GET as $key => $value)
    {
        $url .= '&'.$key.'='.$value;  
    }
    $ch = curl_init($url);
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
    header("HTTP/1.1 200 OK");