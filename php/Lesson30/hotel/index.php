<?php

declare(strict_types=1);

require(__DIR__ . '/vendor/autoload.php');

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create a client with a base URI


$client = new GuzzleHttp\Client(['base_uri' => 'http://yrgopelag.se/']);

$response = $client->request(
    'POST',
    'test/index.php',
    [
        'form_params' => [
            'startCode' => 'bad0ecb0-399d-48d8-88ee-15ac509e19e4',
        ]
    ]
);

$body = $response->getBody()->getContents();
$exploded = explode('"', $body);

$envContent = file_get_contents(__DIR__ . '/.env');

$envContent =  "API_KEY=" . $exploded[3];

file_put_contents(__DIR__ . '/.env', $envContent);
