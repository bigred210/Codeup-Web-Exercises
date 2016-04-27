<?php
        // if POST is notEmpty than run if statement if empty dont run anything.
    if (!empty($_POST)) {
            // if post UN - bigred and post PW = tooLegitTwoQuit then relocate to new location
        if ($_POST['username'] == 'bigred' && $_POST['password'] == 'tooLegitTwoQuit') {
                //new page being sent to if UN PW match POST
            header("location: authorized.php");
                // same as die() - ends the function
            exit();
        } else {
                // if UN PW do not match above will display echo ' '
            echo 'Login Failed!';
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