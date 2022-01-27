<?php
// initializing variables
$firstname = "";
$lastname = "";
$homeaddress = "";
$email = "";
$cellphone = "";
$homephone = "";

// connect to the database
$db = mysqli_connect('mamidiveena61228.ipagemysql.com', 'mamidiveena123', 'Ipage123',"printsolutions"); 
//mysqli_select_db($conn,"printsolutions");


// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form firstname, lastname, email, homeaddress, homephone, cellphone
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);

  $email = mysqli_real_escape_string($db, $_POST['email']);
$homeaddress = mysqli_real_escape_string($db, $_POST['homeaddress']);
  $cellphone = mysqli_real_escape_string($db, $_POST['cellphone']);
 $homephone = mysqli_real_escape_string($db, $_POST['homephone']);
  
  	$query = "INSERT INTO users (firstname, lastname, email, homeaddress, homephone, cellphone) 
  			  VALUES('$firstname', '$lastname', '$email', '$homeaddress', '$homephone', '$cellphone')";
  	mysqli_query($db, $query);
  	
  	//header('location: index.php');
  
}
