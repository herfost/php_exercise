<?php
include_once __DIR__ . '/../configuration.php';
session_start();
unset($_SESSION['LOGGED_IN']);
header("Location: " .$HOME['href']);
exit;