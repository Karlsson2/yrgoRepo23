<?php

declare(strict_types=1);

require __DIR__ . '/../autoload.php';

// In this file we login users.

if (isset($_POST["email"]) && isset($_POST["password"])) {

    $email = trim(htmlspecialchars($_POST["email"]));
    $password = trim(htmlspecialchars($_POST["password"]));
    $qry = $database->query('SELECT * FROM users where users.email=:email');
    $qry->bindParam(":email", $email, PDO::PARAM_STR);
    $qry->execute();
    $user = $qry->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        redirect('/');
    } else {
        if (password_verify($password, $user["password"])) {
            session_start();
            $_SESSION["user"] = ["id" => $user["id"], "name" => $user["name"], "email" => $user["email"]];
            unset($password);
            redirect('/index.php');
        } else {
            redirect('/');
        }
    }
}
