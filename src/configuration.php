<?php

$BASE_URL = (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https') . '://' . $_SERVER['HTTP_HOST'] . '/testing';

$SERVER_NAME = 'database';
$HOST_NAME = 'root';
$PASSWORD = $_ENV['MYSQL_ROOT_PASSWORD'];
$DB_NAME = 'poi_db';

$HOME = array(
    'href' => $BASE_URL . '/src/index.php',
    'name' => 'Home'
);

$POI = array(
    'href' => $BASE_URL . '/src/pages/poi.php',
    'name' => 'Poi'
);

$ABOUT = array(
    'href' => $BASE_URL . '/src/index.php',
    'name' => 'About'
);

$SIGNIN = array(
    'href' => $BASE_URL . '/src/pages/signin.php',
    'name' => 'Signin'
);

$LOGIN = array(
    'href' => $BASE_URL . '/src/pages/login.php',
    'name' => 'Login'
);

$LOGOUT = array(
    'href' => $BASE_URL . '/src/pages/logout.php',
    'name' => 'Logout'
);

$NAVBAR_LINKS_LOGGED = array($HOME, $POI, $ABOUT, $LOGOUT);
$NAVBAR_LINKS_NOT_LOGGED = array($HOME, $ABOUT, $LOGIN, $SIGNIN);