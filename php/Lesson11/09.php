<?php

$currentYear = date('Y');

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];

foreach ($actors as $actor) {
    $actorAge = $currentYear - $actor[1];
    if ($actorAge <= 19) {
        echo $actor[0] . " Is in his/her Teens </br>";
    } elseif ($actorAge >= 20 && $actorAge < 30) {
        echo $actor[0] . " Is in his/her Twenties</br>";
    } elseif ($actorAge >= 30 && $actorAge < 40) {
        echo $actor[0] . " Is in his/her Thirties</br>";
    } elseif ($actorAge >= 40 && $actorAge < 50) {
        echo $actor[0] . " Is in his/her Fourties</br>";
    } elseif ($actorAge >= 50 && $actorAge < 60) {
        echo $actor[0] . " Is in his/her Fifties</br>";
    }
}
