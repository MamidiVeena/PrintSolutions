<?php include ('mplserver.php')?>


<DOCTYPE html>
<html lang="en">
<head>
<title>Market Place Login</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	color: black;
	/* background: #63738a; */
    background: linear-gradient(135deg, #8BC6EC 0%, #d1e7c7 100%);

	/* background: url('../static/bg2.jpg') no-repeat; */
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {
	border-radius: 3px;
}
.signup-form {
	width: 450px;
	margin: 0 auto;
	padding: 30px 0;
	font-size: 15px;
}
.signup-form h2 {
	/*color: #636363;*/
	color: black;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	/*color: #999;*/
	color: black;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	/*color: #999;*/
	color: black;
	border-radius: 5px;
	margin-top: 20px;
	/*margin-bottom: 15px;*/
	/* background: #f2f3f7; */
	/* background: url('../static/bg.jpg') no-repeat; */
    background: linear-gradient(135deg, #8BC6EC 0%, #d1e7c7 100%);
	box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);

	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {
	font-size: 16px;
	font-weight: bold;
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}
.signup-form a {
	color:blue;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: blue;
	text-decoration: none;
}
.signup-form form a:hover {
	text-decoration: underline;
}

</style>
</head>
<body>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12 gap-3">
            <form class="form-container" action="mplserver.php" method="POST">
                <h1>Market Place Login</h1>
                
                <div class="form-group mb-4">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                
                <div class="mb-4">
                <button type="submit" class="btn btn-success w-100" name="reg_user">Login</button>
                </div>
</form>
                <!--<div class="text-center mb-3">
                <label>or</label>
                </div>
                <div class="mb-3">
                <button type="submit" formaction="/googlelogin" class="btn btn-primary w-100">Sign in with Google</button>
                </div>-->
                <div class="form-group mb-4">
                    <label for="signup">Dont have an account?</label>
                    <a href="/mpregister.php">Sign Up</a>
                </div>
            
        </div>
    <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</body>
</html>
