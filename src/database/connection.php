<?php
include_once __DIR__ . '/connection.php';
include_once __DIR__ . '/../configuration.php';

$connection = mysqli_connect($SERVER_NAME, $HOST_NAME, $PASSWORD, null);

if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if (!mysqli_select_db($connection, $DB_NAME))
    include_once __DIR__ . '/database_setup.php';

# mysqli_close($connection);

include_once __DIR__ . '/query.php';

function insert_user($username, $password): bool
{
    global $connection, $INSERT_USER_QUERY;
    $QUERY = sprintf($INSERT_USER_QUERY, htmlspecialchars($username), htmlspecialchars($password));
    return execute_query($connection, $QUERY, "Unable to create user '$username'");
}

function select_user($username, $password): bool|array|null
{
    global $connection, $SELECT_USER_QUERY;

    $QUERY = sprintf($SELECT_USER_QUERY, htmlspecialchars($username), htmlspecialchars($password));
    $result = execute_query($connection, $QUERY, "Unable to find user '$username'");

    return $result ? mysqli_fetch_row($result) : false;
}

function validate_user($username, $password): bool
{
    return select_user($username, $password) != null;
}

function select_poi($latitudine, $longitudine): bool|array|null
{
    global $connection, $SELECT_POI_QUERY;

    $QUERY = sprintf($SELECT_POI_QUERY, htmlspecialchars($latitudine), htmlspecialchars($longitudine));
    $result = execute_query($connection, $QUERY, "Unable to find poi '$latitudine', '$longitudine");

    return $result ? mysqli_fetch_row($result) : false;
}