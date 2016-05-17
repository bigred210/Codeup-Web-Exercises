<?php

$min = '1';
$max = '100';
$rand = rand($min, $max);
echo $rand .PHP_EOL;


if (isset($_SESSION['rand']))  {
    $rand = $_SESSION['rand'];
}else {
    $rand = mt_rand(1,100);
    $_SESSION['rand'] = $rand;
}

if (isset($_POST['FirstName'])) {
    $FirstName = Input::get('FirstName');
}else {
    $FirstName = '';
}

// if (isset($_POST['Low'])) {
//     $Low = Input::get('Low');
// }else {
//     $Low = '';
// }

// if (isset($_POST['High'])) {
//     $High = Input::get('High');
// }else {
//     $High = '';
// }

// if (isset($_POST['Guess'])) {
//    $Guess = Input::get('Guess'); 
// }else {
//     $Guess = 0;
// }

function guess()
{
    do {
        if ($guess > $rand) {
            echo "Guess Lower\n";
            $guess = trim(fgets());
        }
        elseif (!is_numeric($guess)) {
            echo "Enter a numeric value between {$min} and {$max}\n";
            $guess = trim(fgets());
        } 
        elseif ($guess < $rand) {
            echo "Guess Higher\n";
            $guess = trim(fgets());
        }
        else {
            echo "YOU DID IT!\n";
            $guess = trim(fgets());
        }
    }while ($guess != $rand);
}

function numberMixUp()
{
    if ($min > $max) {
        $min = $max;
        $max = $min;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>HI LOW PHP</title>
</head>
<body>
    <p>Let's play a game of High/Low</p>
    <form method="post">
        <p><input type="text" name="Name" placeholder="Enter Player Name here"><br>
            <input type="text" name="Low" placeholder="Enter Low number here">
            <input type="text" name="High" placeholder="Enter High number here">
        </p><br>
        <input type="submit">
    </form>
    <form method="post">
        <p>
            <input type="text" name="Guess" placeholder="Enter Your Guess here">
        </p><br>
        <input type="submit">
    </form>
</body>
</html>



