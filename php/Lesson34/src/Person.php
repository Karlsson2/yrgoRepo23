<?php

declare(strict_types=1);

namespace App;

use Exception;

class Person
{
    public HormoneMonster $hormoneMonster;
    public function __construct(
        public string $name,
        public int $age
    ) {
    }
    public function addHormoneMonster(HormoneMonster $hormoneMonster)
    {
        if ($this->age >= 13) {
            $this->hormoneMonster = $hormoneMonster;
        } else {
            throw new Exception("You can't have a hormone monster before you are 13");
        }
    }
}
