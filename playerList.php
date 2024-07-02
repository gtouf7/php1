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
            <h1>Player List</h1>
        </div>
        <?php
            $connect = mysqli_connect('localhost', 'root', 'root', 'teams_php');
            if(!$connect) {
                die("Connection Failed: " . mysqli_connect_error());
            }
            $query = 'SELECT p.id, p.playerFname, p.playerLname, p.position, p.jerseyNO, t.teamName FROM players p JOIN teams t ON p.teamID = t.id';
            $players = mysqli_query($connect, $query);
            //$players = mysqli_query($connect, $pQuery);
        ?>
        <?php echo '<table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Jersey #</th>
                                <th scope="col">Current Club</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>';
                foreach($players as $player) { 
                        echo '<tbody>
                            <tr>
                                <th scope="row">' . $player['id'] . '</th>
                                <td>' . $player['playerFname'] . ' ' . $player['playerLname'] . '</td>
                                <td>' . $player['position'] . '</td>
                                <td>' . $player['jerseyNO'] . '</td>
                                <td>' . $player['teamName'] . '</td>
                                <td>
                                    <a class="btn btn-secondary" href="editPlr.php?teamID=<?php echo $team[`id`]; ">Edit Player</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="delPlr.php?teamID=<?php echo $team[`id`]; ">Delete Player</a>
                                </td>
                            </tr>';
                }
                echo '</tbody>
                    </table>';
        ?>
    </body>