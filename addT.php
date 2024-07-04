<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SportsTim</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <?php include('reusables/header.php');
        include('reusables/connection.php'); ?>
    <h2>Add a Team</h2>
    <form action="crud/addTeam.php" method="POST">
        <div class="mb-3">
            <label for="teamName" class="form-label">Club Name</label>
            <input type="text" class="form-control" id="teamName" aria-describedby="teamName" name="teamName" placeholder="Team FC">
        </div>
        <div class="mb-3">
            <label for="country" class="form-label">Country</label>
            <input type="text" class="form-control" id="country" name="country" placeholder="Netherlands">
        </div>
        <div class="mb-3">
            <label for="teamColor" class="form-label">Team Color(s)</label>
            <input type="text" class="form-control" id="teamColor" name="teamColor" placeholder="Red and Blue">
        </div>
        <div class="mb-3">
            <label for="yearFounded" class="form-label">Year Founded</label>
            <input type="text" class="form-control" id="yearFounded" name="yearFounded" placeholder="2000">
        </div>
        <button type="submit" class="btn btn-primary" name="addT">Add Team</button>
    </form>