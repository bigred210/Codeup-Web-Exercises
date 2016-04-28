<?php
require_once 'functions/functions.php';

function pageController() 
{

    // if (!isset($_GET['count'])) {
    //     $count = 0;
    // } else {
    //     $count = $_GET['count'];
    // }  **** this is the same as the statement below *****

    $count = inputGet('count');
    return ['count' => $count];

}

extract(pageController());

?>

<!DOCtype html>

<html>

<head>

    <meta charset="utf-8">

    <title>PING</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
       
        <style type="text/css">

        body {
            background: url('img/table.jpg');
            color: white;
            font-size: 30px;
        }
        .ball {
            position:fixed;
        }
        #miss {
            margin-left: 800px;
        }
        p {
            margin-left: 600px;
        }
        </style>

</head>

<body>
        
        <p> <?= $count ?> </p>
        <a href='pong.php?count=0'>MISS</a>
        <div class="ball"><a href='pong.php?count=<?= $count+1?>'><img src="img/pingpongball.png" width="75" height="75"></a></div>
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type="text/javascript">

$(document).ready(function(){
    animateDiv();
    
});

function makeNewPosition(){
    
    // Get viewport dimensions (remove the dimension of the div)
    var h = $(window).height() - 50;
    var w = $(window).width() - 50;
    
    var nh = Math.floor(Math.random() * h);
    var nw = Math.floor(Math.random() * w);
    
    return [nh,nw];    
    
}

function animateDiv(){
    var newq = makeNewPosition();
    var oldq = $('.ball').offset();
    var speed = calcSpeed([oldq.top, oldq.left], newq);
    
    $('.ball').animate({ top: newq[0], left: newq[1] }, speed, function(){
      animateDiv();        
    });
    
};

function calcSpeed(prev, next) {
    
    var x = Math.abs(prev[1] - next[1]);
    var y = Math.abs(prev[0] - next[0]);
    
    var greatest = x > y ? x : y;
    
    var speedModifier = 0.05;

    var speed = Math.ceil(greatest/speedModifier);

    return speed;

}


</script>

</body>

</html>



