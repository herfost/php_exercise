<?php
include_once __DIR__ . '/connection.php';
include_once __DIR__ . '/query.php';

if (!execute_query($connection, $CREATE_DATABASE_QUERY, "Error: Unable to connect to MySQL." . PHP_EOL))
    exit;

mysqli_select_db($connection, $DB_NAME);
if (mysqli_connect_error())
    die('mysqli_select_db($connection, $DB_NAME)');

if (!execute_query($connection, $CREATE_TABLE_USER_QUERY, "Error: Unable to create table: USER"))
    die('$CREATE_TABLE_USER_QUERY');

if (!execute_query($connection, $CREATE_TABLE_POI_QUERY, "Error: Unable to create table: POI"))
    die('$CREATE_TABLE_POI_QUERY');