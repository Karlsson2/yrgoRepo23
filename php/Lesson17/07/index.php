<?php

$oldfiles = preg_grep('/^([^.])/', scandir(__DIR__ . "/files/"));
$files = [];


foreach ($oldfiles as $file) {
    $files[] = ["fileName" => $file, "active" => false];
}

if (isset($_POST["button-value"])) {
    $documentContent = file_get_contents(__DIR__ . "/files/" . $_POST["button-value"]);
    foreach ($files as &$file) {
        if ($file["fileName"] == $_POST["button-value"]) {
            $file["active"] = true;
        }
    }
}

if (isset($_POST["name"]) && isset($_POST["content"])) {

    file_put_contents(__DIR__ . "/files/" . htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["content"]), FILE_APPEND);
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center">FileReader Deluxe</h1>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-sm-2">
                <form action="index.php" method="POST">
                    <ul class="list-group">
                        <?php foreach ($files as $file) : ?>
                            <li class="list-group-item text-center 
                            <?php if (isset($_POST["button-value"])) :  ?>
                                    <?= $file["active"] ? "active" : "" ?>
                            <?php endif; ?>">
                                <button name="button-value" value="<?= $file["fileName"] ?>" class="button">
                                    <div class="file-tile"><?= $file["fileName"] ?></div>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </form>
            </div>
            <div class="col-sm-6 ">
                <div class="file-contents ">
                    <?php if (isset($documentContent)) : ?>
                        <?= $documentContent; ?>
                    <?php else : ?>
                        Please select the text file you want to view.
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="text-center">FileAdder Deluxe</h1>
        </div>
        <form action="" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" placeholder="dana-scully.txt" class="form-control" required>
                <small class="form-text">Please provide a filename without an extension.</small>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" rows="8" cols="80" class="form-control" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add Note</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>