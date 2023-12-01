<?php
// TODO: Implement the logic here.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST["url"])) {
        $url = trim($_POST["url"]);
        if ($url != "") {
            if (filter_var($url, FILTER_VALIDATE_URL)) {
                echo "The URL $url is valid!";
            } else {
                echo "The URL $url is not valid!";
            }
        } else {
            echo "The URL field is empty!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06</title>
</head>

<body>
    <form action="06.php" method="post">
        <label for="url">URL</label>
        <input type="text" name="url" id="url" placeholder="gameofthron.es">

        <button type="submit">Test</button>
    </form>
</body>

</html>