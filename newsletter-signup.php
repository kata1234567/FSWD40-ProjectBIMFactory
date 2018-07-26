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
 
?> 