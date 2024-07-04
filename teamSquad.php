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
        include('reusables/connection.php');
            echo '<ul class="list-group">
                    <li class="list-group-item active" aria-current="true">' . $team['teamName'] . '</li>';
            foreach($players as $player) {
                echo '<li class="list-group-item">' . $player['playerFname'] . " " . $player['playerLname'] . '</li>' ;
            }
            echo '</ul>';
        ?>
</body>
</html>