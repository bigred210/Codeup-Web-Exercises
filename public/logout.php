<?php
session_start();
require_once 'Auth.php';

function clearSession()
{
    Auth::Logout();
    
    header("location: login.php");
}
clearSession();
?>