<?php

function pageController() 
{
    return ['favorites' => ['family','writing','cooking','learning','guitars','children','guns','coding','cars']];
}
extract(pageController());

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
        width: 55px;
        }
        li:nth-child(even) {
        background-color: white;
        }
    </style>
</head>
<body>
    <h1>My Favorite Things</h1>
    <ul>
    <?php foreach ($favorites as $favorite) : ?>
        <li><?= $favorite; ?></li>
    <?php endforeach ?>
    </ul>
</body>
</html>
