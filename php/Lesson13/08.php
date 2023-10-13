<?php

declare(strict_types=1);

require __DIR__ . '/functions.php';

$map = getMap(width: 40, height: 10);

foreach ($map as $row) {
    echo "<br/>";
    foreach ($row as $square) {
        echo "<img src='" . $square . "'>";
    }
}
