<?php
$database = new PDO("sqlite:startrek.db");

$qry = $database->prepare(
    'SELECT characters.name || " is portrayed by " || actors.name as actor_string
    FROM actors
    INNER JOIN characters ON characters.actor_id = actors.id
    ORDER BY characters.name DESC
    LIMIT (?)'
);
$limit = 5;
$qry->execute(array($limit));
$strings = $qry->fetchAll(PDO::FETCH_ASSOC);

foreach ($strings as $string) {
    echo $string["actor_string"] . "</br>";
}
