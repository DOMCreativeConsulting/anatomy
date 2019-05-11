<?php

$noAr = false;

if($noAr == true)
{

    return [
        'database' => [
            'name' => 'anatomymkt_sis',
            'username' => 'anatomymkt_anatomymkt',
            'password' => 'Anatomy@Mkt2019',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];
    

}
else
{

    return [
        'database' => [
            'name' => 'anatomy',
            'username' => 'root',
            'password' => '',
            'connection' => 'mysql:host=127.0.0.1',
            'options' => [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]
        ]
    ];

}