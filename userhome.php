<?php
ob_start();
session_start();
include 'dbconnect.php';
// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: userhome.php");
 exit;
}
// select logged-in user detail
$res=mysqli_query($conn, "SELECT * FROM `user`");
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

if(isset($_GET['bookit'])) {
	$userId = $userRow['userId'];
	$courseId = $_GET['course'];
	if(mysqli_query( $conn , "INSERT INTO `enrolled_courses`(`userId`,`coursesId`) VALUES ($userId,$courseId)" )){
	  echo "done!";
	  header("Location:userhome.php");
}


else{
	echo "sorry didn't work";
}
}


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
<title>Welcome - <?php echo $userRow['name']; ?></title>
</head>
<body>

<div class= "container">

<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
   <h5 style=" color: white;"> Hi' <?php echo $userRow['name']; ?> </h5>
   <a href="mycourses.php" type="button" class="btn btn-success"> Enrolled courses</a>
  <a class="navbar-brand" href="logout.php?logout"> sign-out</a>
</nav>



		   <?php
// $sql = "SELECT * FROM courses";
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
// fetch a next row (as long as there are some) into $row
?>
<br>
            <h2>Availble Courses:</h2><hr><br>
		   
	<div class= "container-fluid row">
			 
	<div class="card-deck">
	
	
	
       <?php
	   
	   		      
		
		    while($row = mysqli_fetch_array($result)) {
	   ?>    
	   <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12  mt-4 mb-4">	


				<div class="card">
					<img class="card-img-top" src="<?php echo $row['img'];?>" alt="Card image cap">
					<div class="card-body">
						<center><h5 class="card-title"> <?php echo $row["name"];?></h5></center><hr>
						<p class="card-title"><b>Date :</b> <br>from <strong> <?php echo $row["startDate"];?></strong> to <strong> <?php echo $row["endDate"];?></strong> </p>
						
						<!-- <p class="card-text">Description: <?php echo $row["description"] ;?></p> -->
						<p class="card-title"><b>Capacity: </b> <?php echo $row["capacity"] ;?> places</p>
						
						<p class="card-title"><b>Total Hours: </b> <?php echo $row["totalHours"];?></p>
						<p class="card-title"><b>Coasts:</b>  <?php echo $row["cost"]; ?> € </p>
					</div>
					<div class="card-footer">
						<p class="text-muted"><b>Category: </b><?php echo $row["type"]; ?></p>
						<form method="get" action="userhome.php">
						
						<input type="text" name="course" value="<?php echo $row["id"]; ?>" hidden>
						<button type="submit" class="btn btn-success" name="bookit" style="width: 100%;"> Enroll </button>
						 </form>
					</div>
				</div>	
				</div>		

			 <?php
				 }
				
             ?>

			
  
	</div>
	</div>
	</div>

</div>
</body>
</html>