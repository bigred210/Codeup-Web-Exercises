<?php

require_once 'Log.php';

class Auth 
{

    public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';


    public static function attempt($username, $password)
        {
            if ($username == 'guest' && password_verify($password , self::$password )) { 
                $_SESSION['logged_in_user'] = $username;
                return True;        
            } else {
                return False;
            }
        }    

    public static function check()
        { 
            if (isset($_SESSION['logged_in_user'])) {
                return True;       
            } else {
                return False;
            }
        }

    public static function user()
        {
            return $_SESSION['logged_in_user'];
        }

    public static function logout()
        {                  
            session_unset();
           
            session_regenerate_id(true);
         }
    
}




