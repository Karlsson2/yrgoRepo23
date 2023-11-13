<?php

declare(strict_types=1);

// TODO: Implement the database logic here.

if (isset($_GET["id"])) {
    $id = trim($_GET['id']);
    $database = new PDO("sqlite:startrek.db");
    $qry = $database->prepare(
        'DELETE FROM characters WHERE id=(?)'
    );
    $qry->execute(array($id));
}

header("Location: index.php");
