<?php

declare(strict_types=1);

// TODO: Implement the JSON output script here.
$file = "vampires.json";
$contents = file_get_contents($file);
header('Content-Type: application/json');
echo $contents;
