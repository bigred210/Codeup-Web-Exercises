<?php
    
define('DB_HOST', 'mysql:host=127.0.0.1');
define('DB_NAME', 'employees');
define('DB_USER', 'codeup');
define('DB_PASS', 'codeup');

    // requires the page below to run
require_once 'db_connect.php';


    //  will echo: 127.0.0.1 via TCP/IP
echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";