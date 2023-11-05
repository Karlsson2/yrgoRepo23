<?php
session_start();

$user = [
    'name' => 'Bertram Gilfoyle',
    'email' => 'gilfoyle@piedpiper.io',
    'password' => '$2y$10$Qx.ZsPJooxIqFDewbA9wS.fY6Nkp5qkmJynqkbwxmEyX5Q9Er5EBW',
];

// TODO: Implement the login logic here.

if (isset($_POST["email"]) && isset($_POST["password"])) {
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);
    if ($email == $user["email"] && password_verify($password, $user["password"])) {
        $_SESSION['message'] = 'You\'ve successfully logged in ' . $user['name'] . '!';
        $_SESSION["authenticated"] = true;
        header("Location: /06/index.php");
    } else {
        $_SESSION["message"] = "Whoops! Looks like you missed something. Please try again.";
        header("Location: /06/index.php");
    }
}
