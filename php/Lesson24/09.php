<?php
$file = "actors.json";
$contents = file_get_contents($file);
$arrayedJson = json_decode($contents, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>09</title>
    <style>
        a {
            display: block;
        }
    </style>
</head>

<body>
    <ul>
        <?php foreach ($arrayedJson as $actors) : ?>
            <a href="<?= $actors["tmdb_url"] ?>">
                <li><?= $actors["name"] ?></li>
            </a>
        <?php endforeach; ?>
    </ul>
    <script>
        // TODO: Implement the fetch logic here.
    </script>
</body>

</html>