<?php

declare(strict_types=1);
header('Content-Type:application/json');
$file = "horses.json";

$horses = json_decode(file_get_contents(__DIR__ . '/horses.json'));


if (isset($_GET["id"])) {
    $id = htmlspecialchars($_GET['id'], ENT_QUOTES);

    $selectedHorse = array_filter($horses->horses, function ($horse) use ($id) {
        return $horse->id === $id;
    });

    echo json_encode($selectedHorse);
} else {
    echo json_encode($horses);
}
