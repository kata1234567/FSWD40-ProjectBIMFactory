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

    $id = $_POST["id"];

 

    $sql = "UPDATE courses SET `name` = '$name', `description` = '$description', `img` = '$img' ,`capacity` = $capacity, `cost`= $cost, `startDate`=$startDate, `endDate`=$endDate, `type`= '$type', `totalHours`= $totalHours WHERE id = {$id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='update.php?id=".$id."'><button type='button'>Back</button></a>";

        echo "<a href='adminhome.php'><button type='button'>Home</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();

 

}

 

?>