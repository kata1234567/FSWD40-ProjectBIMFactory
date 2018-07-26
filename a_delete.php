<?php

 

require_once 'dbconnect.php';

 

if($_POST) {

    $id = $_POST['id'];

 

    $sql = "DELETE FROM courses WHERE id = {$id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='adminhome.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error Deleting record : " . $conn->error;

    }

 

    $conn->close();

}

 

?>