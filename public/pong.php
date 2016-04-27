<?php
function pageController() 
{

    // if (!isset($_GET['count'])) {
    //     $count = 0;
    // } else {
    //     $count = $_GET['count'];
    // }  **** this is the same as the statement below *****

    $count = !isset($_GET['count']) ? 0 : $_GET['count'];
    return ['count' => $count];

}

extract(pageController());

?>

<!DOCtype html>

<html>

<head>

    <meta charset="utf-8">

    <title>PONG</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
       
        <style type="text/css">

        body {
            background: url('img/table.jpg');
            color: white;
            font-size: 30px;
        }

          

        </style>

</head>

<body>
        <p> <?= $count ?> </p>
        <a href='pong.php?count=<?= $count+1?>'><img src="img/pingpongball.png" width="75" height="75"></a>
        <a id="miss"href='ping.php?count=<?= $count=0?>'>MISS</a>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">


</script>

</body>

</html>



