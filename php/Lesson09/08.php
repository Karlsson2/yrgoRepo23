<?php

$actors = [
    ['name' => 'Ally Sheedy ', 'year' => 1962],
    ['name' => 'Anthony Michael Hall', 'year' => 1968],
    ['name' => 'Emilio Estevez', 'year' => 1962],
    ['name' => 'Judd Nelson', 'year' => 1959],
    ['name' => 'Molly Ringwald', 'year' => 1968],
];

foreach ($actors as $actor) {
    if ($actor["year"] >= 1960 && $actor["year"] <= 1965) {
        echo $actor["name"] . "<br/>";
    } else {
        continue;
    };
}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


foreach ($actors as $actor) {
    if ($actor["year"] < 1960 || $actor["year"] > 1965) {
        continue;
    } else {
        echo $actor["name"] . "<br/>";
    }
}
