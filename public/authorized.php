<?php
session_start();

    if (!isset($_SESSION['logged_in_user'])) {
        header("location: login.php");
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
    <form method="POST">
    <button type="submit" name="logout" ><a href="logout.php">LOG OUT</a></button>
</form>
</body>
</html>