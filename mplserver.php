<?php
error_reporting( E_ALL );
          ini_set('display_errors' , '1' );


$email = "";

  $password = "";
 
// connect to the database
$db = mysqli_connect('mamidiveena61228.ipagemysql.com', 'mamidiveena123', 'Ipage123',"printsolutions"); 

if (isset($_POST['reg_user'])) {
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);  


  $query = "select * from allusers where email='$email' and password='$password'";
 echo $query ;
  if($result =  mysqli_query($db, $query)){
    if(mysqli_num_rows($result) > 0){
  	setcookie("email", $email );
        header('location: ./marketplace.php');
       
   }else{
        header('location: ./mplogin.php');

   }
}
}
?>