<?php
//  Copy the actors.db SQLite database from the resources directory. 
// Fetch the id variable from the query string. 
// If there is no id in the query string, use 1 as a default. 
// Fetch the actor in the database by the given ID, convert the actor array 
// into a JSON string and print it to the client.

$id = isset($_GET['id']) ? $_GET['id'] : 1;

$database = new PDO("sqlite:actors.db");
$limit = 1;
$qry = $database->prepare(
    'SELECT * from actors WHERE id = :id LIMIT (?)'
);
$qry->bindParam(':id', $id, PDO::PARAM_INT);
$qry->execute(array($id, $limit));
$actor = $qry->fetch(PDO::FETCH_ASSOC);

$jsonActor = json_encode($actor);

header("Content-Type: json");

echo $jsonActor;
