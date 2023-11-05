<?php
session_start();

$message = $_SESSION['message'] ?? '';
unset($_SESSION['message']);

$authenticated = $_SESSION['authenticated'] ?? false;
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
            margin-bottom: 10px;
            min-width: 200px;
        }
    </style>
</head>

<body>
    <?php if ($message !== '') : ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <?php if ($authenticated) : ?>
        <p><a href="logout.php">logout</a></p>
    <?php else : ?>
        <form action="login.php" method="post">
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="hendriks@piedpiper.io">
            </div>

            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>

            <button type="submit">Login</button>
        </form>
    <?php endif; ?>


</body>

</html>