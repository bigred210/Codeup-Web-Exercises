<?php
require '../Model.php';
require 'User.php';

$myDatastore = new Model();
$myDatastore->make='Samsung';
$myDatastore->model='Chip';
$myDatastore->numberOfGigabytes=32;
    // echo 'The make is: ', $myDatastore->make . PHP_EOL;
    // echo 'The model is: ', $myDatastore->model . PHP_EOL;
    // echo 'The # of gigs is: ', $myDatastore->numberOfGigabytes . PHP_EOL;
    // echo  User::getTableName(). PHP_EOL
?>
<!DOCTYPE html>
<html>
<head>
    <title>Model Test</title>
    <style type="text/css">
        table, td {
            border: 1px solid yellow;
        }
        table {
            color: white;
            background: green;
        }
        td {
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        <th>
           <td>Model Info</td> 
        </th> 
        <tr>
           <td>Make</td> 
           <td>Model</td>
           <td>Gigabytes</td>
        </tr>
        <tr>
            <td><?= $myDatastore->make ?></td>
            <td><?= $myDatastore->model ?></td>
            <td><?= $myDatastore->numberOfGigabytes ?></td>
        </tr>
    </table>
    <br>
    <table>
        <tr> 
            <td>Table</td>  
        </tr>
        <tr>
            <td><?= User::getTableName() ?></td>
        </tr>
    </table>
</body>
</html>    