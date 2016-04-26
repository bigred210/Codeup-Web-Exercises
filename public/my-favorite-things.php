<?php

$favorites = ['family','writing','cooking','learning','guitars','children','guns','coding','cars'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Things!</title>
    <style>
        body {
            background-color: black;
        }
        h1 {
        padding-left: 450px;
        color: yellow;   
        }
        ul {
        padding-left: 570px;
        color: green;
        width: 100px;
        }
        li:nth-child(even) {
        background-color: white;
        }
    </style>
</head>
<body>
    <h1>My Favorite Things</h1>
    <ul>
    <?php foreach ($favorites as $favorite) { ?>
        <li><?= $favorite; ?></li>
    <?php } ?>
    </ul>
</body>
</html>
