<?php
include("connection.php");

if(isset($_POST["submit"])){
    
    $sql = "INSERT INTO students (student_name, student_email, student_city)
    VALUES ('".$_POST["stu_name"]."','".$_POST["stu_email"]."','".$_POST["stu_city"]."')";
    
    if ($conn->query($sql) === TRUE) {
    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
    } else {
    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
    }
    
    $conn->close();
    }
?>
