<?php
$title = "Silicon Valley";
setcookie("title", $title, time() + 3600);

echo $_COOKIE["title"];
