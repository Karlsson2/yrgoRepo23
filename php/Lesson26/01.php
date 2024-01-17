<?php

declare(strict_types=1);

$value = "The Revenant";
setcookie("Title", $value, time() + 3600);


echo  "The title is " . $_COOKIE["Title"];
