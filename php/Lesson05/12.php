<?php

    $deckOfCards = [];
    $suits = ["Hearts","Spades","Diamonds","Clubs"];

    foreach($suits as $suit){
        for ($i = 0; $i <=13; $i++){
            $deckOfCards[] = ["suit" => $suit, "rank" => $i];
        };
    };
    


    foreach($deckOfCards as $cards){
        echo "suit is: " . $cards["suit"] . " rank is: " . $cards["rank"] . "</br>";
    }

?>