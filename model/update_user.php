<?php

$mysqli = new mysqli("localhost", "root", "", "edamvdam", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

    
    $name=$_REQUEST['name'];
    $status=$_REQUEST['status'];
    
    

    
    $sql = "UPDATE users SET name='$name', status='$status'";



    if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is veranderd </h1>";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    mysqli_close($mysqli);
    
?>