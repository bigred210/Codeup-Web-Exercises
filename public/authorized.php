<?php
session_start();

    // checking to see if user is already logged into site
if (!isset($_SESSION['logged_in_user'])) {
                // if not logged in - redirect to login page
            header("location: login.php");
                // same as die() - ends the function
            exit();
    } else {
        echo "Welcome {$_SESSION['logged_in_user']}";
    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Authorized</title>
</head>
<body>
    <p> We've missed you. </p>
</body>
</html>