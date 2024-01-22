<?php
require __DIR__ . '/vendor/autoload.php';

use App\Person;
use App\HormoneMonster;

$person = new Person("Jessi Glaser", 12);
$monster = new HormoneMonster("Maury");
try {
    $person->addHormoneMonster($monster);
} catch (Exception $e) {
    echo $e->getMessage();
}

//printf('%s hormone monster is %s', $person->name, $person->hormoneMonster->name);
