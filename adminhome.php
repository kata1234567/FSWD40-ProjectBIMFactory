<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( $_SESSION['admin'] ) {
 header("Location: adminhome.php");
 exit;
}
// select logged-in user detail

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<title>Welcome - <?php echo $userRow['email']; ?></title>
</head>
<body>

<div class= "container">

<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
   <h5 style=" color: red;"> HELLO ADMIN'</h5>  <a href="create.php"><button class="btn btn-success" type="button">Add Course</button></a>
  <a class="navbar-brand" href="logout.php?logout"> sign-out</a>
</nav>



		   <?php

// $sql = "SELECT * FROM courses";
$sql = "SELECT * FROM courses";
$result = $conn->query($sql);
// fetch a next row (as long as there are some) into $row
?>


            <h2>here's our collection:</h2><hr><br>
		   
	<div class= "container-fluid row">
			 
	<div class="card-deck">
	
	
	
       <?php
	   
	   if($result->num_rows > 0) {      
		
		while($row = $result->fetch_assoc()) {
	   ?>    
	   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  mt-4 mb-4">	


				<div class="card">
					<img class="card-img-top" src="<?php echo $row['img'];?>" alt="Card image cap">
					<div class="card-body">
						<center><h5 class="card-title"  style= "color:red;"> <?php echo $row["name"];?></h5></center><hr>
						<center><small><p class="card-title"> from <strong> <?php echo $row["startDate"];?></strong> to <strong> <?php echo $row["endDate"];?></strong> </p></center></small>
						
						<!-- <p class="card-text">Description: <?php echo $row["description"];?></p> -->
						<p class="card-title">Capacity: <?php echo $row["capacity"];?> places</p>
						
						<h6 class="card-title">Total Hours:  <?php echo $row["totalHours"];?></h6>
						<h6 class="card-title">Coasts: <strong style= "color:red;"> <?php echo $row["cost"];?> </strong> &euro; </h6>
					</div>
					<div class="card-footer">
						<small class="text-muted">Category: <?php echo $row["type"];?> </small><br>
						<a href="update.php?id=<?php echo $row['id']; ?>"><button class= "btn btn-warning" name="edit" >Edit Course</button></a> <a href="delete.php?id='<?php echo $row['id']; ?>'"><button class= "btn btn-danger" name="delete" >Delete Course</button></a>
					</div>
				</div>	
				</div>		

			 <?php
				 }
	   }
             ?>

			
  
	</div>
	</div>
	</div>

</div>
</body>
</html>
<?php ob_end_flush(); ?>