<?php
session_start();
if (isset($_POST['action'])) {
    include __DIR__ . '/../database/connection.php';
    $poi = select_poi($_POST['latitudine'], $_POST['logitudine']);

    if (null !== $poi && $poi)
        $_SESSION['POI'] = $poi;
}

include_once __DIR__ . './../configuration.php';

# Head della pagina
$lang = 'it';
$title = 'Login';
include_once __DIR__ . '/../components/head.php';

# Navbar
$links = isset($_SESSION['LOGGED_IN']) ? $NAVBAR_LINKS_LOGGED : $NAVBAR_LINKS_NOT_LOGGED;
include_once __DIR__ . '/../components/navbar.php';

if (isset($_SESSION['LOGGED_IN']) && isset($_SESSION['POI'])) {
    $luogo = $_SESSION['POI'][0];
    $latitudine = $_SESSION['POI'][1];
    $logitudine = $_SESSION['POI'][2];
    $video_src1 = $_SESSION['POI'][3];
    $video_src2 = $_SESSION['POI'][4];
    $image_src1 = $_SESSION['POI'][5];
    $image_src2 = $_SESSION['POI'][6];
    $image_src3 = $_SESSION['POI'][7];
    $image_src4 = $_SESSION['POI'][8];
    $image_src5 = $_SESSION['POI'][9];

    include_once __DIR__ . '/../components/poi_frame.php';

    // var_dump($_SESSION['POI']);
}


if (isset($_SESSION['LOGGED_IN'])) {
    $box_h1 = "Trova il POI";
    include_once __DIR__ . '/../components/poi_search.php';
}
?>