<?php

$mysqli = new mysqli("localhost", "root", "", "edamvdam", 3306);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
    
    $names=$_REQUEST['myname'];
    $statuss=$_REQUEST['mystatus'];
    $ids=$_REQUEST['myid'];
    $did=$_REQUEST['delid'];
    echo var_dump($did);
    $mi = new MultipleIterator();
$mi->attachIterator(new ArrayIterator($names));
$mi->attachIterator(new ArrayIterator($statuss));
$mi->attachIterator(new ArrayIterator($ids));

foreach ( $mi as $value ) {
    list($name, $surname, $address) = $value;
    //echo var_dump($address);
    $sql = "UPDATE users SET name='$name', status='$surname' WHERE id='$address'";
    if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is veranderd </h1>";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
        
}
foreach ( $did as $id ) {
    echo var_dump($id);
    if($id == "*"){
        $sql = "DELETE FROM users";
        if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is veranderd </h1>";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
    } else {
    $sql = "DELETE FROM users WHERE id='$id'";
    if (mysqli_query($mysqli, $sql)) {
        echo "<h1 id='gelukt'> item is veranderd </h1>";


    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }
        }
}
    




    
    mysqli_close($mysqli);
    
?>