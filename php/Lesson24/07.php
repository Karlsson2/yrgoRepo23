<?php
header("Content-Type: json");

$database = new PDO("sqlite:actors.db");

$statement = $database->query('SELECT * FROM actors');

$actor = $statement->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($actor);
