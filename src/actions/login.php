<?php
if (isset($_POST['action'])) {
    session_start();
    echo 'Hello';
    $is_valid_user = validate_user($_POST['username'], $_POST['password']);
    if ($is_valid_user)
        $_SESSION["LOGGED_IN"] = true;
    # else 
    # $_SESSION["LOGGED_IN"] non viene impostato -> isset($_SESSION["LOGGED_IN"]) === false
}