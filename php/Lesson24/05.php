<?php
$file = "girls.json";
$contents = file_get_contents($file);
$arrayedJson = json_decode($contents, true);
echo "<ul>";
foreach ($arrayedJson as $actors) {
    foreach ($actors as $actor) {
        echo "<li>The character " . $actor["character"] . " is portrayed by " . $actor["name"] . "</li><br/>";
    }
}
echo "</ul>";
