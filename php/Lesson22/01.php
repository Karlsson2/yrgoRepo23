<?php
$database = new PDO("sqlite:startrek.db");

$statement = $database->query('SELECT * FROM characters ORDER BY name');

$actor = $statement->fetch(PDO::FETCH_ASSOC);

echo $actor["name"];

//$actors = $statement->fetchAll(PDO::FETCH_ASSOC);