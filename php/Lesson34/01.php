<?php
require __DIR__ . '/vendor/autoload.php';

use App\Person;

$person = new Person("Jay Bilzerian", 13);

if ($person->age < 18) {
    throw new Exception(
        "Jay is not old enough to drive."
    );
}
