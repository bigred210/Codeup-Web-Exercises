<?php
session_start(); 
session_id();
date_default_timezone_set("America/Chicago");

require_once 'Auth.php';
require_once '../Input.php';
require_once 'Log.php';

    $username = Input::has('username') ? Input::get('username') : ' ';
    $password = Input::has('password') ? Input::get('password') : ' ';

    if (Auth::Check()) {
            header("location: authorized.php");
            exit();
    }

    if (!empty($_POST)) {
        $log = new Log('cli');
        if (Auth::attempt($username, $password)) {
            header("location: authorized.php");
            $log->logInfo("{$username} logged in.");
            exit();
        } else {
            echo "Failed to login correctly.";
            $log->logError("{$username} failed login.");
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
</head>
<body>
    <form method="POST">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>