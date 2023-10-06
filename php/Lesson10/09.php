<?php
$stars = [
    ['color' => 'aqua', 'size' => 2],
    ['color' => 'aquamarine', 'size' => 3],
    ['color' => 'hotpink', 'size' => 1],
    ['color' => 'white', 'size' => 2],
    ['color' => 'yellow', 'size' => 1],
];

$animation = ["star-1", "star-2", "star-3", "star-4", "star-5"]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
    <style>
        body {
            background-color: #111;
        }

        @keyframes fade-in {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        div {

            position: absolute;
            animation-iteration-count: infinite;
        }

        .star-1 {
            animation-name: twinkle-2;
            animation-duration: 1s;

        }

        .star-2 {
            animation-name: twinkle-1;
            animation-duration: 2s;
        }

        .star-3 {
            animation-name: twinkle-1;
            animation-duration: 3s;
        }

        .star-4 {
            animation-name: twinkle-1;
            animation-duration: 8s;
        }

        .star-5 {
            animation-name: twinkle-1;
            animation-duration: 16s;
        }

        @keyframes twinkle-1 {
            50% {
                transform: scale(0.5);
                opacity: 0.5;
            }
        }

        @keyframes twinkle-2 {
            20% {
                transform: scale(0.5);
                opacity: 0.2;
            }
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < 256; $i++) :
        $star = $stars[array_rand($stars)];
    ?>
        <div style="background-color:<?= $star["color"] ?>; height: <?= $star["size"] ?>px; width: <?= $star["size"] ?>px; top:<?= rand(min: 0, max: 1440) ?>px; left:<?= rand(min: 0, max: 1440) ?>px;" class="<?= $animation[array_rand($animation)] ?>"></div>
    <?php endfor; ?>
</body>

</html>