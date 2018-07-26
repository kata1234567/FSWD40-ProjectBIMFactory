<?php

 

require_once 'dbconnect.php';

 

if($_POST) {

    $name = $_POST['name'];

    $description = $_POST['description'];

    $img = $_POST['img'];

    $capacity = $_POST['capacity'];
    
    $cost = $_POST['cost'];

    $startDate = $_POST['startDate'];

    $endDate = $_POST['endDate'];

    $type = $_POST['type'];

    $totalHours = $_POST['totalHours'];

 

    $sql = "INSERT INTO courses (`name`, `description`, img, capacity, cost, startDate, endDate, `type`, totalHours ) VALUES ('$name', '$description', '$img', '$capacity', '$cost', '$startDate', '$endDate', '$type', '$totalHours')";

    if($conn->query($sql) === TRUE) {

        echo "<p>New Record Successfully Created</p>";

        echo "<a href='create.php'><button type='button'>Back</button></a>";

        echo "<a href='adminhome.php'><button type='button'>Home</button></a>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }

 

    $conn->close();

}

 

?>