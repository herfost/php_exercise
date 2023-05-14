<?php
session_start();
if (isset($_POST['action'])) {
    include __DIR__ . '/../database/connection.php';
    $valid = validate_user($_POST['username'], $_POST['password']);

    if ($valid) {
        $_SESSION['LOGGED_IN'] = true;
    }
}

// unset($_SESSION['LOGGED_IN'] );
include_once __DIR__ . './../configuration.php';

# Head della pagina
$lang = 'it';
$title = 'Login';
include_once __DIR__ . '/../components/head.php';

# Navbar
$links = isset($_SESSION['LOGGED_IN']) ? $NAVBAR_LINKS_LOGGED : $NAVBAR_LINKS_NOT_LOGGED;
include_once __DIR__ . '/../components/navbar.php';

if (!isset($_SESSION['LOGGED_IN'])) {
    $box_h1 = 'Accedi tuo account';
    include_once __DIR__ . '/../components/login_form.php';
}

?>