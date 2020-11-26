<?php
    $file = "logs.txt";
    $data = array(
        'sha' => 'e69de29bb2d1d6434b8b29ae775ad8c2e48c5391',
        'message' => 'PHP Commit',
        'content' => base64_encode($file),
        'commiter' => array(
            'name' => 'Charli',
            'email' => 'frayle023@gmail.com'
        )
    );
    $data_string = json_encode($data);

    $curl_url = 'https://api.github.com/repos/frayle023/mp-ecommerce-php/contents/logs.txt';
    $ch = curl_init($curl_url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "User-Agent: Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.132 YaBrowser/19.9.3.314 Yowser/2.5 Safari/573.36"));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);

    $response = curl_exec($ch);
    curl_close($ch);

    file_put_contents('logs.txt', "Test File Put Contents");

    //$response = json_decode($response);
    echo $response;