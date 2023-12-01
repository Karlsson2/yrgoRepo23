<?php

declare(strict_types=1);
header('Content-Type:application/json');

if (isset($_POST['name'], $_POST['actor'])) {
    // TODO: Implement the add new vampire logic.


    $name = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $actor = htmlspecialchars($_POST['actor'], ENT_QUOTES);

    $vampires = json_decode(file_get_contents('vampires.json'), true);



    foreach ($vampires as $vampire) {
        if ($vampire['name'] === $name) {
            http_response_code(418);
            echo json_encode(['error' => 'Already exists']);
            exit;
        }
    }

    $vampires[] = [
        'name' => $name,
        'actor' => $actor
    ];

    $vampires = json_encode($vampires);
    file_put_contents('vampires.json', $vampires);

    http_response_code(500);
    echo $vampires;
}
