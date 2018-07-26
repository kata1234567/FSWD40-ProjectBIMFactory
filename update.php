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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


</head>

<body>

 
<fieldset>

    <legend>Edit Course</legend>

 

    <form action="a_update.php" method="post">

<!-- 
        <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4" style="color: white">Course Name</label>
      <input type="text" name="name" value="<?php# echo $data['name']; ?>" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4" style="color: white">Image link</label>
      <input type="text" name="img" class="form-control" value="<?php #echo $data['img']; ?>" id="inputPassword4" placeholder="Img">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" style="color: white">Description</label>
    <input type="text" value="<?php #echo $data['description']; ?>" name="Description" class="form-control" id="inputAddress" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="color: white">Capacity</label>
    <input type="text" name="Capacity" class="form-control" value="<?php #echo $data['capacity']; ?>" id="inputAddress2" placeholder="Capacity">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity" style="color: white">Course Costs</label>
      <input type="text" name="Cost" value="<?php #echo $data['cost']; ?>" class="form-control" id="inputCity" placeholder="Cost">
    </div>
    <div class="form-group col-md-4">
     <label for="inputCity" style="color: white">Start Date</label>
      <input type="date" name="StartDate" value="<?php #echo $data['startDate']; ?>" class="form-control" id="inputCity" placeholder="Start Date">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip" style="color: white">End Date</label>
      <input type="data" name="endDate" value="<?php #echo $data['endDate']; ?>" class="form-control" id="inputZip" placeholder="End Date">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip" style="color: white">Course Type</label>
      <input type="text" name="Type" value="<?php# echo $data['type']; ?>" class="form-control" id="inputZip" placeholder="Type">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip" style="color: white">Total Hours</label>
      <input type="text" name="totalHours" value="<?php #echo $data['totalHours']; ?>"  class="form-control" id="inputZip" placeholder="Total Hours">
    </div>
  </div>
  </div>
  <a href="adminhome.php"><button type="button" class="btn btn-default">Create</button></a>
  <button type="submit" class="btn btn-warning">Save Changes</button>
</form> -->

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