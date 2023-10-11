<?php

function greet($firstName, $lastName)
{
    return "Hey! $firstName $lastName";
}

$greeting = greet('Ace', 'Ventura');
echo $greeting;
