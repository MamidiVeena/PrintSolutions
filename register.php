<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>User Registration </title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  	
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstname" >
  	</div>
<div class="input-group">
  	  <label>Last Name</label>
  	  <input type="text" name="lastname" >
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" >
  	</div>

  	<div class="input-group">
  	  <label>Home Address</label>
  	  <input type="text" name="homeaddress">
  	</div>
  	<div class="input-group">
  	  <label>Home Phone</label>
  	  <input type="text" name="homephone">
  	</div>
         <div class="input-group">
  	  <label>Cell Phone</label>
  	  <input type="text" name="cellphone">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  
  </form>
<div class="header">
  	<h2>search</h2>
  </div>
<form method="post" action="search.php">
  	
  	<div class="input-group">
  	  <label>First Name</label>
  	  <input type="text" name="firstnames" >
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="emails" >
  	</div>

  	
         <div class="input-group">
  	  <label>Cell Phone</label>
  	  <input type="text" name="cellphones">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="search_user">Search</button>
  	</div>
</body>
</html>