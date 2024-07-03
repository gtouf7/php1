<?php
    $connect = mysqli_connect('localhost', 'root', 'root', 'teams_php');
        if(!$connect) {
            die("Connection Failed: " . mysqli_connect_error());
        }