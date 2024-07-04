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
        <div>
            <h1>Team List</h1>
        </div>
        <?php
            $connect = mysqli_connect('localhost', 'root', 'root', 'teams_php');
            if(!$connect) {
                die("Connection Failed: " . mysqli_connect_error());
            }
            $query = 'SELECT * FROM teams';
            $teams = mysqli_query($connect, $query);
           // $pQuery = 'SELECT * FROM players WHERE player.teamID = teams.id';
            //$players = mysqli_query($connect, $pQuery);
        ?>
        <?php echo '<a class="btn btn-primary" href="addT.php">Add a Team</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Team</th>
                                <th scope="col">Country</th>
                                <th scope="col">Colors</th>
                                <th scope="col">Founded in</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>';
                foreach($teams as $team) { 
                        echo '<tbody>
                            <tr>
                                <th scope="row">' . $team['id'] . '</th>
                                <td>' . $team['teamName'] . '</td>
                                <td>' . $team['country'] . '</td>
                                <td>' . $team['teamColor'] . '</td>
                                <td>' . $team['yearFounded'] . '</td>
                                <td>
                                    <a class="btn btn-info" href="teamSquad.php?teamID=<?php echo $team[`id`]; ">View squad</a>
                                </td>
                            </tr>';
                }
                echo '</tbody>
                    </table>';
        ?>
    </body>
</html>