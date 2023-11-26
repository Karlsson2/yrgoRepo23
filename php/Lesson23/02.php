<?php
// ?? is the shorthand for an if statement with an isset check. If the ID value
// doesn't exist we give it a default value `1`.
$id = $_GET['id'] ?? 1;

$db = new PDO("sqlite:tmdb.db");
$qry = $db->prepare(
    'SELECT * from directors where id=?'
);
$qry->bindParam(1, $id);
$qry->execute();
$actor = $qry->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02</title>
</head>

<body>
    <?php if (empty($actor)) : ?>
        <h1>Not Found</h1>
        <p>The director wasn't found in the database.</p>
    <?php else : ?>
        <h1><?= $actor["first_name"] . " " . $actor["last_name"] ?></h1>
        <p><?= $actor["biography"] ?></p>
    <?php endif; ?>
    <!-- TODO: Implement the director data presentation here. -->
</body>

</html>