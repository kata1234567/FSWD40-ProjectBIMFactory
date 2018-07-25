<?php
ob_start();
session_start();
require_once 'dbconnect.php';
// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: userhome.php");
 exit;
}
// select logged-in user detail
$res=mysqli_query($conn, "SELECT * FROM user WHERE userId=".$_SESSION['user']);
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);
?>


<?php
if( isset($_POST['book-it']) ) {
	$query = "INSERT INTO `enrolled_courses`(`userName`,`courseNmae`) VALUES($email, $name)";
  $res = mysqli_query($conn, $query);
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
<title>Welcome - <?php echo $userRow['email']; ?></title>
</head>
<body>

<div class= "container">

<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
   <h5 style=" color: white;"> Hi' <?php echo $userRow['email']; ?> </h5>
  <a class="navbar-brand" href="logout.php?logout"> sign-out</a>
</nav>



		   <?php
// $sql = "SELECT * FROM courses";
$sql = "SELECT * FROM courses";
$result = mysqli_query($conn, $sql);
// fetch a next row (as long as there are some) into $row
?>

            <h2>here's our collection:</h2><hr><br>
		   
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
						<p class="card-title">Date: from <strong> <?php echo $row["startDate"];?></strong> to <strong> <?php echo $row["endDate"];?></strong> </p>
						
						<!-- <p class="card-text">Description: <?php echo $row["description"];?></p> -->
						<h5 class="card-title">Capacity: <?php echo $row["capacity"];?> places</h5>
						
						<h5 class="card-title">Total Hours:  <?php echo $row["totalHours"];?></h5>
						<h5 class="card-title">Coasts: <?php echo $row["cost"];?></h5>
					</div>
					<div class="card-footer">
						<small class="text-muted">Category: <?php echo $row["type"];?></small> <input type="submit" class="btn btn-success" name="book-it" value="book it">
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
