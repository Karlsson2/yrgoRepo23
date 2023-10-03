<?php

$characters = [
    'Allison Reynolds',
    'Andrew "Andy" Clark',
    'Brian Ralph Johnson',
    'Claire Standish',
    'John Bender',
];

$array_length = 0;

while ($array_length <= count($characters) - 1) {
    echo $characters[$array_length] . "<br/>";
    $array_length++;
}
