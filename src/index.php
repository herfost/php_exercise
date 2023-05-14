<?php 
session_start();
include_once __DIR__ . '/configuration.php';

# Connessione database
include_once __DIR__ . '/database/connection.php'; 

# Head della pagina
$lang = 'it';
$title = 'Index';
include_once __DIR__ . '/components/head.php';

# Navbar
$links = isset($_SESSION['LOGGED_IN']) ? $NAVBAR_LINKS_LOGGED : $NAVBAR_LINKS_NOT_LOGGED;
include_once __DIR__ . '/components/navbar.php';