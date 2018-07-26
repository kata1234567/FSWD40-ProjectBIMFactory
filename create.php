<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD  |  Add User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/create.css">

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 50px;

            width: 50%;

        }

    </style>

 

</head>

<body>
    <div id="particles-js"></div>

 

<fieldset>

    <legend style="color: white">Add Course</legend>

 

    <form action="a_create.php" method="post">

  
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="inputEmail4" style="color: white">Name</label>
      <input type="text" name="name" class="form-control" id="inputEmail4" placeholder="Name">
    </div>
    <div class="form-group col-md-12">
      <label for="inputPassword4" style="color: white">Image</label>
      <input type="text" name="img" class="form-control" id="inputPassword4" placeholder="Img">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress" style="color: white">Description</label>
    <input type="text" name="Description" class="form-control" id="inputAddress" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="inputAddress2" style="color: white">Capacity</label>
    <input type="text" name="Capacity" class="form-control" id="inputAddress2" placeholder="Capacity">
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity" style="color: white">Cost</label>
      <input type="text" name="Cost" class="form-control" id="inputCity" placeholder="Cost">
    </div>
    <div class="form-group col-md-4">
     <label for="inputCity" style="color: white">Start Date</label>
      <input type="text" name="StartDate" class="form-control" id="inputCity" placeholder="Start Date">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip" style="color: white">End Date</label>
      <input type="text" name="endDate" class="form-control" id="inputZip" placeholder="End Date">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip" style="color: white">Type</label>
      <input type="text" name="Type" class="form-control" id="inputZip" placeholder="Type">
    </div>
    <div class="form-group col-md-6">
      <label for="inputZip" style="color: white">Total Hours</label>
      <input type="text" name="totalHours" class="form-control" id="inputZip" placeholder="Total Hours">
    </div>
  </div>
  </div>
  <button type="submit" class="btn btn-warning">Create</button>
</form>

</fieldset>

 
<script type="text/javascript" src="js/particles.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</body>

</html>