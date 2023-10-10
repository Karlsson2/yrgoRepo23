<?php

$actors = [
    ['Christopher Læssø', 1995],
    ['Claes Bang', 1967],
    ['Dominic West', 1969],
    ['Elisabeth Moss', 1982],
    ['Terry Notary', 1968],
];

foreach ($actors as $actor) {
    switch ($actor[1]) {
        case ($actor[1] >= 1900 && $actor[1] < 1910):
            echo $actor[0] . " was born in the zeros? XD<br/>";
            break;
        case ($actor[1] >= 1910 && $actor[1] < 1920):
            echo $actor[0] . " was born in the tens<br/>";
            break;
        case ($actor[1] >= 1920 && $actor[1] < 1930):
            echo $actor[0] . " was born in the twenties<br/>";
            break;
        case ($actor[1] >= 1930 && $actor[1] < 1940):
            echo $actor[0] . " was born in the thirties<br/>";
            break;
        case ($actor[1] >= 1940 && $actor[1] < 1950):
            echo $actor[0] . " was born in the fourties<br/>";
            break;
        case ($actor[1] >= 1950 && $actor[1] < 1960):
            echo $actor[0] . " was born in the fifties<br/>";
            break;
        case ($actor[1] >= 1960 && $actor[1] < 1970):
            echo $actor[0] . " was born in the sixties<br/>";
            break;
        case ($actor[1] >= 1970 && $actor[1] < 1980):
            echo $actor[0] . " was born in the seventies<br/>";
            break;
        case ($actor[1] >= 1980 && $actor[1] < 1990):
            echo $actor[0] . " was born in the eighties <br/>";
            break;
        case ($actor[1] >= 1990 && $actor[1] < 2000):
            echo $actor[0] . " was born in the nineties <br/>";
            break;
    }
}
