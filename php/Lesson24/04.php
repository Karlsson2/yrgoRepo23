<?php
$file = "show.json";
$contents = file_get_contents($file);

//Object
$decodedJson = json_decode($contents);
echo $decodedJson->description;

//array
$arrayedJson = json_decode($contents, true);
echo $arrayedJson["description"];
