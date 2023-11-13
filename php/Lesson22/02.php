<?php
// TODO: Implement the database logic here.
$database = new PDO("sqlite:startrek.db");
$statement = $database->query("SELECT * FROM characters");
$characters = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <ol>
        <?php foreach ($characters as $character) : ?>
            <li><?= $character["name"] ?></li>
        <?php endforeach; ?>
    </ol>
    <!-- TODO: Implement the ordered list here. -->
</body>

</html>