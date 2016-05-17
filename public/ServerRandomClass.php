<?php

class Random
{
    public static function adjectives_random($num = 1) {
        $adjectives = ['Crouching','Hidden','Flying','Drunken','Purring','Slouching','Flapping','Crawling','Spitting','Flaming','Dancing','Flatulent'];
        shuffle($adjectives);

            $adjective = [];
            for ($i = 0; $i < $num; $i++) {
                $adjective[] = $adjectives[$i];
            }
            return $num == 1 ? $adjective[0] : $adjective;
    }

    public static function nouns_random($num = 1) {
        $nouns = ['Ferret','Ostrich','Manatee','Llama','Moose','Bull','Gnat','Baboon','Wombat','Alpaca','Bobcat','Squirrel'];
        shuffle($nouns);
            
            $noun = [];
            for ($i = 0; $i < $num; $i++) {
                $noun[] = $nouns[$i];
            }
            return $num == 1 ? $noun[0] : $noun;
    }

    public static function po_random($num = 1) {
        $po = ['OH, YEAH!', 'Whew! squashed my nuggets', 'WHOA! WHAT?', 'I need a bathroom break.'];
        shuffle($po);

            $poTalk = [];
            for ($i = 0; $i < $num; $i++) {
                $poTalk[] = $po[$i];
            }
            return $num == 1 ? $poTalk[0] : $poTalk;
    }

    public static function shifu_random($num = 1) {
        $shifu = ['PO! are you ready?', 'Quit the horseplay PO.', 'You? The Dragon Warrior?', 'Again! This time faster!', 'Now do it right!'];
        shuffle($shifu);

            $shifuTalk = [];
            for ($i = 0; $i < $num; $i++) {
                $shifuTalk[] = $shifu[$i];
            }
            return $num == 1 ? $shifuTalk[0] : $shifuTalk;
    }

    public static function magic()
    {
        $serverName = self::adjectives_random() . " " . self::nouns_random();

        $poSpeak = self::po_random();

        $shifuSpeak = self::shifu_random();
        
        return array('serverName' => $serverName , 'poSpeak' => $poSpeak , 'shifuSpeak' => $shifuSpeak);
    }

}