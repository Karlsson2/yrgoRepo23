<?php

    $deckOfCards = [];
    $suits = ["Hearts","Spades","Diamonds","Clubs"];

    foreach($suits as $suit){
        $color = "";
        if ($suit == "Hearts" || $suit == "Diamonds"){
            $color="red";
        }else {
            $color="black";
        }
        for ($i = 0; $i <=13; $i++){
            $deckOfCards[] = ["suit" => $suit, "rank" => $i+1, "color" => $color];
        };
    };
    


    foreach($deckOfCards as $cards){
        echo "suit is: " . $cards["suit"] . " rank is: " . $cards["rank"] .  " color is: " . $cards["color"] . "</br>";
    }

?>