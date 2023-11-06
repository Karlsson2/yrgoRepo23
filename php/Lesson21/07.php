<?php

if (!isset($_COOKIE['count'])) {
    $cookie = 1;
    setcookie("count", $cookie);
} else {
    $cookie = ++$_COOKIE['count'];
    setcookie("count", $cookie);
}

echo "The number of pageviews: " . $_COOKIE["count"];


/*

$counter = $_SESSION['counter'] ?? 0;

$_SESSION['counter'] = ++$counter;

echo 'Number of page views: ' . $_SESSION['counter'];






echo $_COOKIE["title"];*/