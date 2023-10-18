<?php
if (isset($_POST['email']) && isset($_POST['password'])) {
    echo "Your email address is " . $_POST["email"] . "and your password is" . $_POST["password"] . "!";
}
?>
<h1>a Form</h1>
<form action="05.php" method="post">
    <input name="email">
    <input name="password">
    <button type="submit">Submit</button>
</form>