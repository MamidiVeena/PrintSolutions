<?php
$ch= curl_init();
curl_setopt($ch, CURLOPT_URL,"http://mamidiveena.com/search.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output= curl_exec($ch);
$userArray = explode(";", $output);
echo "<h1>Database users for Print Solutions</h1>";
foreach ($userArray as $user) {
  echo "$user <br>";
}
curl_setopt($ch, CURLOPT_URL,"http://sainikhilyandamuri.com/AllUsersDisplay.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output= curl_exec($ch);
$userArray = explode(";", $output);
echo "<h1>AIOT</h1>";
foreach ($userArray as $user) {
  echo "$user <br>";
}
curl_setopt($ch, CURLOPT_URL,"https://vke17.com/AllUsersList.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output= curl_exec($ch);
$userArray = explode(";", $output);
echo "<h1>Being Zero</h1>";
foreach ($userArray as $user) {
  echo "$user <br>";
}
curl_setopt($ch, CURLOPT_URL,"https://www.projectsjsu.com/displayalluser.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output= curl_exec($ch);
$userArray = explode(";", $output);
echo "<h1>cool snappers</h1>";
foreach ($userArray as $user) {
  echo "$user <br>";
}


?>