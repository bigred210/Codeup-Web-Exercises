<?php
session_start();

function clearSession()
{
    // clear $_SESSION array
    session_unset();
    // delete session data on the server and send the client a new cookie
    session_regenerate_id(true);
    // redirect to login page
    header("location: login.php");
}
clearSession();
?>