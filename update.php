<?php

 

require_once 'dbconnect.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

    echo  $id;

    $sql = "SELECT * FROM courses WHERE id = {$id}";

    $result = $conn->query($sql);

 

    $data = $result->fetch_assoc();

 

    $conn->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit Course</title>

</head>

<body>

 
<fieldset>

    <legend>Edit Course</legend>

 

    <form action="a_update.php" method="post">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>Course Name</th>

                <td><input type="text" name="name" placeholder="Course Name" value="<?php echo $data['name']; ?>" /></td>

            </tr>     

            <tr>

                <th>Description</th>

                <td><input type="text" name="description" placeholder="Description" value="<?php echo $data['description']; ?>" /></td>

            </tr>

            <tr>

                <th>Image link</th>

                <td><input type="text" name="img" placeholder="Image link" value="<?php echo $data['img']; ?>" /></td>

            </tr>
            <tr>

                <th>Capacity</th>

                <td><input type="text" name="capacity" placeholder="Course capacity" value="<?php echo $data['capacity']; ?>" /></td>

            </tr>
            <tr>

                <th>Course Costs</th>

                <td><input type="text" name="cost" placeholder="Course cost" value="<?php echo $data['cost']; ?>" /></td>

            </tr>
            
            <tr>

                <th>Start Date</th>

                <td><input type="date" name="startDate" placeholder="Course star tDate" value="<?php echo $data['startDate']; ?>" /></td>

            </tr>
            <tr>

                <th>End Date</th>

                <td><input type="date" name="endDate" placeholder="Course end tDate" value="<?php echo $data['endDate']; ?>" /></td>

            </tr>

            <tr>

                <th>Course Type</th>

                <td><input type="text" name="type" placeholder="Course Type" value="<?php echo $data['type']; ?>" /></td>

            </tr>
            <tr>

                <th>Total Hours</th>

                <td><input type="text" name="totalHours" placeholder="Total Hours" value="<?php echo $data['totalHours']; ?>" /></td>

            </tr>

            <tr>

                <input type="hidden" name="id" value="<?php echo $data['id'];?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="adminhome.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 

</body>

</html>

 

<?php

}

?>