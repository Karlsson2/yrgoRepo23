<?php

declare(strict_types=1);

$emails = [
    'j@e',
    'jesse@f.com',
    'jesse.eisenberg',
    'eisenberg@facebook',
    'jesse.eisenberg@facebook.com',
];

// TODO: Implement the filter validation here.

foreach ($emails as $email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "$email is valid <br/>";
    } else {
        echo "$email is not valid <br/>";
    }
}
