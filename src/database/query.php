<?php
include_once __DIR__ . '/../configuration.php';

$CREATE_DATABASE_QUERY = "CREATE DATABASE IF NOT EXISTS " . $DB_NAME;
$CREATE_TABLE_USER_QUERY = "CREATE TABLE IF NOT EXISTS users ( 
    username VARCHAR(32) PRIMARY KEY NOT NULL,
    password VARCHAR(32) NOT NULL
)";

$CREATE_TABLE_POI_QUERY = "CREATE TABLE IF NOT EXISTS poi(
    luogo VARCHAR(20) PRIMARY KEY NOT NULL,
    latitudine INT(6) NOT NULL,
    longitudine INT(6) NOT NULL,
    video1 VARCHAR(500) NOT NULL,
    video2 VARCHAR(500) NOT NULL,
    photo1 VARCHAR(500) NOT NULL,
    photo2 VARCHAR(500) NOT NULL,
    photo3 VARCHAR(500) NOT NULL,
    photo4 VARCHAR(500) NOT NULL,
    photo5 VARCHAR(500) NOT NULL
)";


$INSERT_USER_QUERY = "INSERT INTO users VALUES ('%s', '%s')";
$SELECT_USER_QUERY = "SELECT username FROM users WHERE username='%s' AND password='%s'";
$SELECT_POI_QUERY = "SELECT luogo, latitudine, longitudine, video1, video2, photo1, photo2, photo3, photo4, photo5 FROM poi WHERE latitudine='%s' AND longitudine='%s'";

function execute_query($connection, $QUERY, string|bool $error_message = false): bool|mysqli_result
{
    $result = mysqli_query($connection, $QUERY);
    if (!$result) {
        if ($error_message != false)
            echo $error_message . PHP_EOL;

        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    }

    return $result;
}