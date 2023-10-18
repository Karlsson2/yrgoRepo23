<?php

declare(strict_types=1);

$quote = 'llA smelborp era gnirob litnu er\'yeht ruoy .nwo';
$substrings = explode(" ", $quote);
$newStrings = [];

foreach ($substrings as $string) {
    $newStrings[] = strrev($string);
}

$newStrings = implode(" ", $newStrings);

echo $newStrings;
