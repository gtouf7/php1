<?php 
    //message function to be added
    if(isset($_POST['addT'])) {
        
        $teamName = $_POST['teamName'];
        $country = $_POST['country'];
        $teamColor = $_POST['teamColor'];
        $yearFounded = $_POST['yearFounded'];

        include('../reusables/connection.php');

        $teamName = mysql_real_escape_string($connect, $teamName);
        $country = mysql_real_escape_string($connect, $country);
        $teamColor = mysql_real_escape_string($connect, $teamColor);
        $yearFounded = mysql_real_escape_string($connect, $yearFounded);

        $query = "INSERT INTO teams (teamName, country, teamColor, yearFounded) VALUES ('$teamName','$country','$teamColor','$yearFounded')";
        $team = mysqli_query($connect, $query);

        if($team) {
            //set_message('Team was added successfully!', 'success');
            header("Location: ../teamList.php");
        } else {
            echo "Failed: " . mysqli_error($connect);
        }
    } else {
        echo "You can't be here! Unauthorized access.";
    }
?>