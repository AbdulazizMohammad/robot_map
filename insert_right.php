<?php
    $conn = mysqli_connect("localhost", "root", "", "robot_control");
         
    if($conn === false){
        die("Error: Could not connect. "
         . mysqli_connect_error());
     }
         
    $sql = "INSERT INTO directions (direction) VALUES ('r')";
         
    if(mysqli_query($conn, $sql)){

    } else{
        echo "Error: Sorry $sql. "
            . mysqli_error($conn);
    }
         
     mysqli_close($conn);
?>