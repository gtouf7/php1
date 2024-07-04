<?php 
    include('./reusables/connection.php');
    if(isset($_GET['teamSquad'])){
    $query = "SELECT * FROM players WHERE players.TeamID = teams.id";
    $squad = my_sqli_query($query, $connect);

    if($squad) {
        header("location: ./teamSquad.php");
    } else {
        echo "Failed" . mysqli_error($connect);
    }
} else {
    echo "ACCESS DENIED";
}
