<?php
session_start();

if (isset($_SESSION['authenticated'])) {
    unset($_SESSION['authenticated']);

    $_SESSION['message'] = 'You\'ve successfully logged out!';
}

header("Location: /06/index.php");
