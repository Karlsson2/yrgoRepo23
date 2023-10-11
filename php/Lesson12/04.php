<?php

function getQuote($character)
{
    if ($character === "Ace Ventura") {
        return "$character - LOOO-HOOO-ZUH-HER!" . "<br/>";
    } elseif ($character === "Dan Merino") {
        return "$character - You're a weird guy, Ace. A weird guy." . "<br/>";
    } else "We couldn't find the given character";
}


echo getQuote('Ace Ventura'); // LOOO-HOOO-ZUH-HER!

echo getQuote('Dan Merino'); // You're a weird guy, Ace. A weird guy.