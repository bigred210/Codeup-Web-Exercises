<?php

$adjectives = ['Crouching','Hidden','Flying','Drunken','Purring','Slouching','Flapping','Crawling','Spitting','Flaming','Dancing','Flatulent'];

$nouns = ['Ferret','Ostrich','Manatee','Llama','Moose','Bull','Gnat','Baboon','Wombat','Alpaca','Bobcat','Squirrel'];

$po = ['OH, YEAH!', 'Whew! squashed my nuggets', 'WHOA! WHAT?', 'I need a bathroom break.'];

$shifu = ['PO! are you ready?', 'Quit the horseplay PO.', 'You? The Dragon Warrior?', 'Again! This time faster!'];

?>

<!DOCTYPE html>

<html>

<head>

    <title>Kung Fu Skill Generator</title>
    
    <style>

        body {
            background-image: url('img/hall.jpg');
            color: #80d175;
        }
        #scroll {
            width:  415px;
            height: 150px;
            margin-left: 400px;
            margin-top: -380px;
            z-index: -1;
        }
        button {
            margin-left: 575px;
            margin-top:  235px;
            color: #c2c969;
            border: none;
            background: transparent;
        }
        img {
            width:150px;
            height:250px;
            padding: 10px;
            margin-top: -255px;
            margin-right: 50px;
            margin-left: 280px;
            float: left;
            position: relative;
            z-index: 1;
        }
        p {
            margin-left: 528px;
            margin-top:  405px;
            font-size: 27px;
            text-align: left;   
        }
        #secret_video {
            display: none; 
        }
        #poParagraph {
            margin-top: -230px;
            margin-right: 690px;
            margin-left: 700px;
            position: relative;
            float: right;
            color: #7df96c;
        }
        #shifuParagraph {
            margin-top: -105px;
            margin-right: 500px;
            margin-left: 280px;
            position: relative;
            float: right;
            color: #66ffff;
        }
        
    </style>

</head>

<body>
    
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
                echo adjectives_random($adjectives) . " " . nouns_random($nouns);
        ?>
    </p>

    <button onclick="newSkill()">NEW SKILL</button>

    <div>
        <img id="scroll" src="/img/scroll.png">
    </div>

    <p id="poParagraph">
        <?php 
            function po_random($po, $num = 1) {
            shuffle($po);
        
                $poTalk = [];
                for ($i = 0; $i < $num; $i++) {
                    $poTalk[] = $po[$i];
                }
                return $num == 1 ? $poTalk[0] : $poTalk;
            }
            echo po_random($po);
        ?>
    </p>

    <div>
        <img id="po" src="/img/postand.png">
    </div>
    <p id="shifuParagraph">
        <?php 
            function shifu_random($shifu, $num = 1) {
            shuffle($shifu);
        
                $shifuTalk = [];
                for ($i = 0; $i < $num; $i++) {
                    $shifuTalk[] = $shifu[$i];
                }
                return $num == 1 ? $shifuTalk[0] : $shifuTalk;
            }
            echo shifu_random($shifu);
        ?>
    </p>
    <div>
        <img id="shifu" src="/img/shifu.png">  
    </div>

    

<script src="http://code.jquery.com/jquery-1.11.0.min.js"> </script>
<script>
"use strict";

    function newSkill() {
        location.reload();
    }

</script>
</body>
</html>













