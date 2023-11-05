<?php
// TODO: Implement the upload script here.

if (isset($_FILES["avatar"])) {
    $avatar = $_FILES["avatar"];
    if ($avatar["size"] > 7000000) {
        echo "The uploaded file exceeded the file size limit.";
    }
    if (!in_array($avatar['type'], ['image/jpeg'])) {
        echo "The image file type is not allowed.";
    } else {
        $destination = __DIR__ . '/uploads/' . date("ymd") . "avatar.png";
        var_dump($avatar);
        move_uploaded_file($avatar['tmp_name'], $destination);
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
    <form action="01.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="avatar">Choose a PNG image to upload</label>
            <input type="file" name="avatar" id="avatar" accept="image/gif,image/jpeg,image/jpg,image/png," required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>