<?php
$database = new PDO('sqlite:tmdb.db');

if (isset($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['tmdb_url'], $_POST['biography'])) {
    $id = trim($_POST['id']);
    $firstName = trim($_POST['first_name']);
    $lastName = trim($_POST['last_name']);
    $tmdbUrl = trim($_POST['tmdb_url']);
    $biography = trim($_POST['biography']);

    // TODO: Implement the database update logic here.
    $qry = $database->prepare(
        "UPDATE directors SET first_name = (?), last_name = (?), tmdb_url = (?), biography = (?)
        WHERE id = (?)
    "
    );
    $qry->bindParam(1, $firstName);
    $qry->bindParam(2, $lastName);
    $qry->bindParam(3, $tmdbUrl);
    $qry->bindParam(4, $biography);
    $qry->bindParam(5, $id);
    $qry->execute();
}

$statement = $database->query('SELECT * FROM directors WHERE id = 5');

$director = $statement->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-md-6">
                <form action="04.php" method="post">
                    <input type="hidden" name="id" value="<?= $director['id'] ?>">

                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input class="form-control" type="text" name="first_name" id="first_name" value="<?= htmlspecialchars($director['first_name']) ?>">
                        <small class="form-text">Please provide the director's first name.</small>
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input class="form-control" type="text" name="last_name" id="last_name" value="<?= htmlspecialchars($director['last_name']) ?>">
                        <small class="form-text">Please provide the director's last name.</small>
                    </div>

                    <div class="mb-3">
                        <label for="tmdb_url" class="form-label">TMDb URL</label>
                        <input class="form-control" type="url" name="tmdb_url" id="tmdb_url" value="<?= htmlspecialchars($director['tmdb_url']) ?>">
                        <small class="form-text">Please provide the movie's TMDb URL.</small>
                    </div>

                    <div class="mb-3">
                        <label for="biography" class="form-label">Biography</label>
                        <textarea class="form-control" name="biography" id="biography" rows="8" cols="80"><?= htmlspecialchars($director['biography']) ?></textarea>
                        <small class="form-text">Please provide the director's biography.</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>