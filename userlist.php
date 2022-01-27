<html>

<?php
extract($_POST);
//if(($username=="admin") && ($password=="admin"))
//{
//echo file_get_contents("userlist.txt");
//db connection
echo "Start db connection"; 

$conn = mysqli_connect('mamidiveena61228.ipagemysql.com', 'mamidiveena123', 'Ipage123'); 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
/*
mysqli_select_db($conn,"printsolutions");

$sql = "SELECT * FROM users";
$retval = mysqli_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysqli_error());
   }*/
$sql = "SELECT * FROM users";
   mysqli_select_db("printsolutions");
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
?>

</html>