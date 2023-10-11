<?php

// TODO: Implement the getQuote function.
function getQuote($character = "Ace Ventura")
{
    if ($character === "Ace Ventura") {
        return "$character - LOOO-HOOO-ZUH-HER!" . "<br/>";
    } elseif ($character === "Dan Merino") {
        return "$character - You're a weird guy, Ace. A weird guy." . "<br/>";
    }
    return "We couldn't find the given character";
}
// Get quote by Ace Ventura if no character is given.
echo getQuote(); // LOOO-HOOO-ZUH-HER!

// Get error message if given character doesn't exist.
echo getQuote('Jim Carrey'); // We couldn't find the given character!