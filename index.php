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
    <?php include('reusables/header.php'); ?>
    <div class="container mt-4">
        <div class="row">
            <div class="md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Teams</h5>
                    <p class="card-text">Click to see the currently registered clubs in the league.</p>
                    <a href="teamList.php" class="btn btn-primary">See Teams</a>
                </div>
                </div>
            </div>
            <div class="row">
            <div class="md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Players</h5>
                    <p class="card-text">Click to see a list of all the registered players in the league.</p>
                    <a href="playerList.php" class="btn btn-primary">See Players</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
