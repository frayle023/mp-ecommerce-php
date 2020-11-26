<?php

    $file = "logs.txt";
    $data = array(
        'sha' => 'e69de29bb2d1d6434b8b29ae775ad8c2e48c5391',
        'message' => 'PHP Commit',
        'content' => base64_encode($file),
        'committer' => array(
            'name' => 'Charli',
            'email' => 'frayle023@gmail.com'
        )
    );
    $data_string = json_encode($data);

    $curl_url = 'https://api.github.com/repos/frayle023/mp-ecommerce-php/contents/logs.txt';
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