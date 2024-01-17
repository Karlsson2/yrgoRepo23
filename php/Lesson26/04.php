<?php
// TODO: Implement the upload logic here.
$destination = __DIR__ . '/uploads/' .  "tom-hardy.jpg";
$errors = [];
if (isset($_FILES["image"])) {
    $gif = $_FILES["image"];
    var_dump($gif['type']);
    if ($gif["size"] > 80000000) {
        $errors[] = "The uploaded file exceeded the file size limit.";
    }
    if (!in_array($gif['type'], ['image/jpeg'])) {
        $errors[] = "The image file type is not allowed.";
    }
    var_dump($errors);
    if (count($errors) === 0) {
        $destination = __DIR__ . '/uploads/' .  "tom-hardy.jpg";
        move_uploaded_file($gif['tmp_name'], $destination);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
</head>

<body>
    <!-- TODO: Implement the image presentation here. -->
    <?php if (file_exists(__DIR__ . '/uploads/tom-hardy.jpg')) : ?>
        <img src="/uploads/tom-hardy.jpg" alt="Tom Hardy">
    <?php endif; ?>
    <form action="04.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="image">Please choose a GIF of Tom Hardy to upload</label>
            <input type="file" name="image" id="image" accept=".jpg" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>