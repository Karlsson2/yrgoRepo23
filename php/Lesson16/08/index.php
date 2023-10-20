<?php

require __DIR__ . "/functions.php";

$errors = [];

$quotes = [
    ['character' => 'Mark Zuckerburg', 'quote' => 'You know, you really don\'t need a forensics team to get to the bottom of this. If you guys were the inventors of Facebook, you\'d have invented Facebook.'],
    ['character' => 'Marylin Delpy', 'quote' => 'You\'re not an asshole, Mark. You\'re just trying so hard to be.'],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (
        (isset($_POST["character"]) && isset($_POST["quote"])) && ($_POST["quote"] != "" && $_POST["character"] != "")
    ) {
        $quotes[] = ['character' => sanitizeName($_POST["character"]), 'quote' => sanitizeMessage($_POST["quote"])];
    }
    if (!isset($_POST["character"]) || $_POST["character"] === "") {
        $errors[] = ["Character is missing, try again loser!"];
    }
    if (!isset($_POST["quote"]) || $_POST["quote"] === "") {
        $errors[] = ["message is missing, try again loser!"];
    }
}
// TODO: Implement the adding new quotes logic here.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row mt-4">
            <div class="col-lg-8 offset-lg-2">
                <h1 class="h5">Quotes</h1>
                <!-- TODO: Implement the quotes list here. -->
                <?php foreach ($quotes as $quote) : ?>
                    <p><?= $quote["character"] ?></p>
                    <p><?= $quote["quote"] ?></p>
                <?php endforeach; ?>

            </div>
        </div>

        <div class="row">
            <form class="col-lg-8 offset-lg-2" action="index.php" method="post">
                <hr>
                <!-- TODO: Implement the errors list here. -->
                <?php foreach ($errors as $error) : ?>
                    <div class="alert alert-danger" role="alert"><?= $error[0] ?>
                    </div>
                <?php endforeach; ?>
                <div class="mb-3">
                    <label for="character" class="form-label">Character</label>
                    <input type="text" name="character" id="character" class="form-control" placeholder="Sean Parker">
                </div>

                <div class="mb-3">
                    <label for="quote" class="form-label">Quote</label>
                    <textarea name="quote" id="quote" class="form-control"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Add quote</button>
            </form>
        </div>
    </main>
</body>

</html>