<?php

$houses = [
    'Greyjoy',
    'Lannister',
    'Mormont',
    'Seaworth',
    'Snow',
    'Stark',
    'Targaryen',
];

$characters = [
    'Arya Stark',
    'Bran Stark',
    'Cersei Lannister',
    'Daenerys Targaryen',
    'Davos Seaworth',
    'Jaime Lannister',
    'Jon Snow',
    'Jorah Mormont',
    'Sansa Stark',
    'Theon Greyjoy',
    'Tyrion Lannister',
];
function filter($character, $house)
{
    $characterHouse = explode(" ", $character)[1];
    if ($characterHouse == $house) {
        return $character;
    }
}

if (isset($_GET["house"])) {
    $house = htmlspecialchars($_GET["house"]);
    if ($house == "All") {
    } else {
        $filteredHouses = array_map(function ($character) use ($house) {
            return filter($character, $house);
        }, $characters);
        $characters = array_filter($filteredHouses);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>

<body>
    <form action="10.php" method="get">
        <label for="house">House</label>
        <select name="house">
            <option>All</option>
            <?php foreach ($houses as $name) : ?>
                <option value="<?php echo $name; ?>" <?php echo isset($house) && $house === $name ? 'selected' : ''; ?>>
                    <?php echo $name; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </form>

    <ol>
        <?php foreach ($characters as $character) : ?>
            <li><?php echo $character; ?></li>
        <?php endforeach; ?>
    </ol>

    <script>
        const select = document.querySelector("select");
        const form = document.querySelector("form");
        select.addEventListener("change", () => {
            form.submit()
        });
        // TODO: Implement the submission script here.
    </script>
</body>

</html>