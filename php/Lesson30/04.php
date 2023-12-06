<?php

define('GIPHY_KEY', 'lUcq66nvfUg4RWPO2HoxtLggyrphPfNM');
$apiKey = GIPHY_KEY;
$baseUrl = "https://api.giphy.com/v1/gifs/search?api_key=$apiKey&limit=2&offset=0&rating=g&lang=en&bundle=messaging_non_clips&q=";

if (isset($_POST["search"])) {
    $search = htmlspecialchars($_POST["search"]);
    $search = trim($search);
    $fullUrl = $baseUrl . $search;
    $response = json_decode(file_get_contents($fullUrl), true);
}

// TODO: Implement gif search script here.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/spectre.css/0.5.5/spectre.min.css">
</head>

<body>
    <div class="container grid-sm">
        <form class="columns my-2" action="04.php" method="post">
            <div class="column col-9">
                <input type="search" name="search" placeholder="Search gifs..." class="form-input">
            </div>
            <div class="column col-3">
                <button type="submit" class="btn btn-primary btn-block">Search</button>
            </div>
        </form>
        <div class="columns my-2">
            <!-- TODO: Implement search result list here -->
            <?php if (!empty($response)) : ?>
                <?php foreach ($response as $aresponse) : ?>
                    <?php foreach ($aresponse as $r) : ?>
                        <img src="<?= $r["images"]["original"]["url"] ?>" alt="">
                    <?php endforeach; ?>
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="column col-12 my-1">
                <img src="https://media1.giphy.com/media/gw3IWyGkC0rsazTi/giphy.gif" width="100%">
            </div>
        </div>

    </div>
</body>

</html>