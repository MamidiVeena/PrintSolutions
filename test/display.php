<?php
$ch= curl_init();
curl_setopt($ch, CURLOPT_URL,"http://mamidiveena.com/search.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output= curl_exec($ch);
$userArray = explode(";", $output);
echo "<h1>Being Zero</h1>";
foreach ($userArray as $user) {
  echo "$user <br>";
}
?>