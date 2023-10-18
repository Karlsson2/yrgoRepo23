<?php

$name = $_GET["name"];
$age = $_GET["age"];

if (isset($name) && isset($age)) {
    echo "Hello $name you are $age years old";
}
