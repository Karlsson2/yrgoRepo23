<?php

declare(strict_types=1);
header('Content-Type:application/json');

$file = "horses.json";
$contents = file_get_contents($file);
echo $contents;
