<?php
// TODO: Implement the database logic here.
$database = new PDO("sqlite:tmdb.db");
$qry = $database->prepare(
    'SELECT first_name, last_name, tmdb_url from directors'
);
$qry->execute();
$strings = $qry->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <h1>Directors</h1>
    <p>If you want to read more about a director, please click on their names below:</p>
    <ul>
        <?php foreach ($strings as $string) : ?>
            <a href="<?= $string["tmdb_url"] ?>">
                <li><?= $string["first_name"] . " " . $string["last_name"] ?></li>
            </a>
        <?php endforeach; ?>
    </ul>
    <!-- TODO: Implement the directors list logic here. -->
</body>

</html>