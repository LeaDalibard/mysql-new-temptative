<?php


function openConnection(): PDO
{
    $dbuser = "becode";
    $dbpass = "becode";
    $dbhost = "localhost";
    $db = "becode_2";
    $driverOptions = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    return new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass, $driverOptions);
}

function getAPI()
{
    $content = trim(file_get_contents("https://api.thecatapi.com/v1/images/search"));
    $decoded = json_decode($content, true);
    return $decoded[0]['url'];
}

