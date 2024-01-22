<?php

require __DIR__ . '/vendor/autoload.php';

use App\Person;
use App\HormoneMonster;

$person = new Person("Jessi Glaser", 13);
$monster = new HormoneMonster("Maury");

$person->addHormoneMonster($monster);

printf('%s hormone monster is %s', $person->name, $person->hormoneMonster->name);
