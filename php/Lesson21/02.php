<?php
session_start();

$counter = $_SESSION['counter'] ?? 0;

$_SESSION['counter'] = ++$counter;

echo 'Number of page views: ' . $_SESSION['counter'];
