<?php

$favorites = ['writing', 'learning','family','children','guns','guitars','cooking','coding','cars'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Things!</title>
</head>
<body>
    <h1>My Favorite Things</h1>
    <ol>
    <?php foreach ($favorites as $favorite) { ?>
        <li><?php echo $favorite; ?></li>
    <?php } ?>
    </ol>
</body>
</html>
