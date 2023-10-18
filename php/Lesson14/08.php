<?php

declare(strict_types=1);

$actors = [
    'Abigail Savage',
    'Adrienne C. Moore',
    'Danielle Brooks',
    'Dascha Polanco',
    'Jackie Cruz',
    'Kate Mulgrew',
    'Kimiko Glenn',
    'Laura Prepon',
    'Lea DeLaria',
    'Michael Harney',
    'Nick Sandow',
    'Selenis Leyva',
    'Taryn Manning',
    'Taylor Schilling',
    'Uzo Aduba',
    'Yael Stone',
];

$newActors = array_filter($actors, function ($actor) {
    if (mb_substr($actor, 0, 1) === "K") {
        return $actor;
    }
});

print_r($newActors);
