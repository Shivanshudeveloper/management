<?php
    $conn = mysqli_connect("localhost","root","","burgarhut");
    if(mysqli_connect_error()){
        echo "Error while connecting to database!";
        exit();
    }
?>