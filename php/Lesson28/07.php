<?php

declare(strict_types=1);

$characters = [
    'Arya Stark',
    'Bran Stark',
    'Cersei Lannister',
    'Daenerys Targaryen',
    'Davos Seaworth',
    'Jaime Lannister',
    'Jon Snow',
    'Jorah Mormont',
    'Sansa Stark',
    'Theon Greyjoy',
    'Tyrion Lannister',
];

// TODO: Implement the your logic here.

function lastName(string $character)
{
    $name = explode(" ", $character);
    return $name[1];
}

$characters2 = array_map('lastName', $characters);
$characters2 = array_unique($characters2);
sort($characters2);
echo "<ul>";
foreach ($characters2 as $characters) {
    echo "<li>$characters</li>";
}
echo "</ul>";
