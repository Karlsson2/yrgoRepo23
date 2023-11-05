<?php
$errors = [];
if (isset($_FILES["gif"])) {
    $gif = $_FILES["gif"];
    if ($gif["size"] > 800000) {
        $errors[] = "The uploaded file exceeded the file size limit.";
    }
    if (!in_array($gif['type'], ['image/gif'])) {
        $errors[] = "The image file type is not allowed.";
    }
    var_dump($errors);
    if (count($errors) === 0) {

        $destination = __DIR__ . '/uploads/' . date("ymd") . "gif.gif";
        move_uploaded_file($gif['tmp_name'], $destination);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01</title>
</head>

<body>
    <form action="index.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="gif">Choose a GIF image to upload</label>
            <input type="file" name="gif" id="gif" accept="image/gif" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>