<?php
    $conn = mysqli_connect("localhost", "root", "", "robot_control");
         
    if($conn === false){
        die("Error: Could not connect. "
         . mysqli_connect_error());
     }
     
     $sql = "SELECT direction AS max FROM directions WHERE direction_id = (SELECT MAX( direction_id ) FROM directions);";
     $rowSQL = mysqli_query( $conn, $sql);
     $row = mysqli_fetch_array($rowSQL);
     $max = $row['max'];
     echo $max;
         
     mysqli_close($conn);
?>

