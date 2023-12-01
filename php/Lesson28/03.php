<?php
require __DIR__ . "/functions.php";

if (isset($_GET["name"])) {
    $name = htmlspecialchars($_GET["name"]);
    echo transformName($name);
} else {
    echo "you haven't sent any params";
}


//?name=Rose+Leslie