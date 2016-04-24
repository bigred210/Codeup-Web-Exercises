<?php

 $adjectives = ['tickled','obnoxious','bumpy','whispering','purring','wasteful','immense','jittery', 'outrageous','husky'];

$nouns = ['ferret','monkey','taint','mortician','weiner','cooter','tuber','wombat','airhead','jerk'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Server Name Generator</title>
</head>
<body>
    <h1>Server Name Gererator</h1>
     <p>
        <?php 
            function adjectives_random($adjectives, $num = 1) {
            shuffle($adjectives);
        
                $adjective = [];
                for ($i = 0; $i < $num; $i++) {
                    $adjective[] = $adjectives[$i];
                }
                return $num == 1 ? $adjective[0] : $adjective;
            }

            function nouns_random($nouns, $num = 1) {
            shuffle($nouns);
        
                $noun = [];
                for ($i = 0; $i < $num; $i++) {
                    $noun[] = $nouns[$i];
                }
                return $num == 1 ? $noun[0] : $noun;
            }
                echo adjectives_random($adjectives) . "-" . nouns_random($nouns);
        ?>
    </p>
</body>
</html>













