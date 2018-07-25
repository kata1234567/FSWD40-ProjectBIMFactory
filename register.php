<?php
ob_start();
session_start(); // start a new session or continues the previous
if( isset($_SESSION['user'])!="" ){
 header("Location: userhome.php"); // redirects to home.php
}
include_once 'dbconnect.php';
$error = false;
if ( isset($_POST['btn-signup']) ) {

 // sanitize user input to prevent sql injection
 $name = trim($_POST['name']);
 $name = strip_tags($name);
 $name = htmlspecialchars($name);

 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $phoneNumber = trim($_POST['phoneNumber']);
 $phoneNumber = strip_tags($phoneNumber);
 $phoneNumber = htmlspecialchars($phoneNumber);

 $password = trim($_POST['password']);
 $password = strip_tags($password);
 $password = htmlspecialchars($password);

 // basic name validation
 if (empty($name)) {
  $error = true;
  $nameError = "Please enter your full name.";
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have atleat 3 characters.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true;
  $nameError = "Name must contain alphabets and space.";
 }

 //basic email validation
 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 } else {
  // check whether the email exist or not
  $query = "SELECT `email` FROM `user` WHERE `email`='$email'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }
 // password validation
 if (empty($password)){
  $error = true;
  $passwordError = "Please enter password.";
 } else if(strlen($password) < 6) {
  $error = true;
  $passwordError = "Password must have atleast 6 characters.";
 }

 // password hashing for security
$passwordd = hash('sha256', $password);


 // if there's no error, continue to signup
 if( !$error ) {
  
  $query = "INSERT INTO `user`(`name`,`email`,`password`,phoneNumber) VALUES('$name','$email','$passwordd','$phoneNumber')";
  $res = mysqli_query($conn, $query);
  
  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
   unset($email);
   unset($passwordd);
   unset($phoneNumber);
  } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later...";
  }
  
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

<title>Login & Registration System</title>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body >
  <div class="demo">
<div class="logo">
      <span class="border"></span>
      <p>&nbsp;CIA </p>
 </div>

</div>
  <div id="particles-js"></div>
<div  class="container text-center ">

   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">

   <div id="text" class="mb-4">
       <h1>SIGN IN</h1>
        <p>if you have an account, then please  <a href="index.php">Sign In</a></p>, if you don't have an account, then  please <a href="#"> Sign Up</a>
      </div>
  
      
    
           <?php
  if ( isset($errMSG) ) {
  
   ?>
           <div  class="alert alert-<?php echo $errTyp ?>">
                        <?php echo $errMSG; ?>
       </div>

<?php
  }
  ?>
          
      
          
            <hr />

            <input  type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
      
               <span class="text-danger"><?php echo $nameError; ?></span>
               <br>
          
    
      
  
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
    
               <span class="text-danger"><?php echo $emailError; ?></span>
               <br>



             <input type="text" name="phoneNumber" class="form-control" placeholder="Enter Phone Number" maxlength="50" value="<?php echo $phoneNumber ?>" />
      
               <span class="text-danger"><?php echo $phoneNumberError; ?></span>
               <br>   
      
          
      
            
        
            <input type="password" name="password" class="form-control" placeholder="Enter Password" maxlength="15" />
            
               <span class="text-danger"><?php echo $passwordError; ?></span>
      
            <hr />

          
            <button type="submit" class="btn btn-warning" name="btn-signup">Sign Up</button>
          
          
            <!-- <a href="index.php">Sign in Here...</a> -->
    
  
   </form>
   </div>

   


   <script type="text/javascript" src="js/particles.js"></script>
  <script type="text/javascript" src="js/app.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>