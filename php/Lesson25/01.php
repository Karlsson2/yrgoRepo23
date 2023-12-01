<?php
$file = "https://yrgo.github.io/api/movies/what-we-do-in-the-shadows.json";
$contents = file_get_contents($file);
$arrayedJson = json_decode($contents, true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($arrayedJson as $actor) : ?>
            <li><?= $actor["name"] ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>