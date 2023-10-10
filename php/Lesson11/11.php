<?php

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];

foreach ($actors as $actor) {

    $message = match (true) {
        ($actor[1] >= 1990 && $actor[1] < 2000) => $actor[0] . " was born in the nineties <br/>",
        ($actor[1] >= 1980 && $actor[1] < 1990) => $actor[0] . " was born in the eighties <br/>",
        ($actor[1] >= 1970 && $actor[1] < 1980) => $actor[0] . " was born in the seventies<br/>",
        ($actor[1] >= 1960 && $actor[1] < 1970) => $actor[0] . " was born in the sixties<br/>",
        ($actor[1] >= 1950 && $actor[1] < 1960) => $actor[0] . " was born in the fifties<br/>",
        ($actor[1] >= 1940 && $actor[1] < 1950) => $actor[0] . " was born in the fourties<br/>",
        ($actor[1] >= 1930 && $actor[1] < 1940) =>  $actor[0] . " was born in the thirties<br/>",
        ($actor[1] >= 1920 && $actor[1] < 1930) =>  $actor[0] . " was born in the twenties<br/>",
        ($actor[1] >= 1910 && $actor[1] < 1920) =>  $actor[0] . " was born in the tens<br/>",
        ($actor[1] >= 1900 && $actor[1] < 1910) =>  $actor[0] . " was born in the zeros? XD<br/>",
        default => 'unknown',
    };
    echo $message;
}
