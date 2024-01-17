<?php
// TODO: Implement the upload logic here.
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

    <form action="04.php" method="post" enctype="multipart/form-data">
        <div>
            <label for="image">Please choose a GIF of Tom Hardy to upload</label>
            <input type="file" name="image" id="image" accept=".gif" required>
        </div>

        <button type="submit">Upload</button>
    </form>
</body>

</html>