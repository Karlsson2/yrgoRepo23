<?php
require __DIR__ . "/functions.php";

if (isset($_POST["first_name"]) && isset($_POST["last_name"])) {
    $firstName = sanitizeName($_POST["first_name"]);
    $lastName = sanitizeName($_POST["last_name"]);
    $emailAddress = $firstName . "." . $lastName . "@facebook.com";
}

// TODO: Implement the email address generation logic here.
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05</title>
    <style>
        input {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <?php if (isset($emailAddress)) : ?>
        <?= "Your email address is: " . $emailAddress ?>
    <?php endif; ?>
    <!-- TODO: Display the generated email sentence here. -->

    <form action="index.php" method="post">
        <label for="first_name">First name</label>
        <input type="text" name="first_name" id="first_name" required>

        <label for="last_name">Last name</label>
        <input type="text" name="last_name" id="last_name" required>

        <button type="submit">Generate email address</button>
    </form>
</body>

</html>