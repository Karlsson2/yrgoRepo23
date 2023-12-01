<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul id="list">

    </ul>
    <script>
        const list = document.getElementById("list");
        fetch('https://yrgo.github.io/api/movies/what-we-do-in-the-shadows.json')
            .then((response) => response.json())
            .then((actors) => {
                actors.forEach((actor) => {
                    const listItem = document.createElement('li');
                    listItem.textContent = actor.name;
                    list.appendChild(listItem);
                });
            });
    </script>
</body>

</html>