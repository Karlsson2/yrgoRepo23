<?php

if (isset($_COOKIE["director"])) {
    echo $_COOKIE["director"];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body></body>
<script>
    document.cookie = "director=Wes Anderson";
</script>

</html>