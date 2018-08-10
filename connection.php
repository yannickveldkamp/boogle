<?php
    $link = mysqli_connect("localhost", "root", "root", "Boogle"); 
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>