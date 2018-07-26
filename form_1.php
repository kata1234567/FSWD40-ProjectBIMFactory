<?php

$user = "root";  
$password = "";  
$host = "localhost";  
$dbase = "cia";  
$table = "newsletter";  
 
$name= $_POST['name']; 
$email= $_POST['email']; 
$message= $_POST['message']; 
  
  
// Connection to DBase  
$dbc= mysqli_connect($host,$user,$password, $dbase)  
or die("Unable to select database"); 
 
 
$query= "INSERT INTO $table  ". "VALUES ('$name', '$email', '$message')"; 
 
mysqli_query ($dbc, $query) 
or die ("Error querying database"); 
 
echo 'You have been successfully added.' . '<br>'; 
 
mysqli_close($dbc); 

	if(empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	

	$to = 'email'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Welcome to Code Institute Academy";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@codeinstituteaustria.com\n";
	$headers .= "Reply-To: $email";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>


