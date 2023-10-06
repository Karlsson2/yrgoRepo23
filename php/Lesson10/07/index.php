<?php

$map = [
    [0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0],
    [0, 0, 0, 1, 0, 0, 0, 1, 0, 0, 0],
    [0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0],
    [0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0],
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1],
    [1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 1],
    [0, 0, 0, 1, 1, 0, 1, 1, 0, 0, 0],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lil Invaders</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <main>
        <h1>Rawr I'm a space invader!</h1>
        <div class="alien-wrapper">
            <?php foreach ($map as $row) : ?>
                <div class="row">
                    <?php foreach ($row as $square) : ?>
                        <?php if ($square == 1) : ?>
                            <div class="square-black"></div>
                        <?php elseif ($square == 0) : ?>
                            <div class="square-white"></div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
</body>

</html>