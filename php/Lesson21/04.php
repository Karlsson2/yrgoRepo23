<?php

declare(strict_types=1);

$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];

$password = 'username-is-password';

if (password_verify($password, $user["password"])) {
    echo "Welcome, Bertram Gilfoyle!";
} else {
    echo "Whoops. Looks like you missed something. Please try again.";
}
