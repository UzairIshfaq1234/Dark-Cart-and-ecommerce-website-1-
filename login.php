<?php
$errorlogin = false;
include("connectionlogin.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$gmail = $_POST['email'];
	$password = $_POST['pass'];

	$exitso = "SELECT * FROM `logincoderzdata` WHERE email='$gmail' AND password='$password'";
	$result = mysqli_query($conn, $exitso);
	$existo = mysqli_num_rows($result);

	if($existo==1)
	{
		session_start();
		$_SESSION['logined']=true;
		$_SESSION['gmail']=$gmail;
		header("location: toshowbuyuser.php");
	}
	else{
		$errorlogin=true;
	}



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<style>
    *{
      margin: 0px;
      padding: 0px;
      font-family:'Varela Round', sans-serif;

    }
    .my_styelenav
    {
      background-color:black;
      font-family:'Varela Round', sans-serif;font-weight: bolder;

      color: white;
    }
	.mycolor
	{
		color: black;
		font-weight: bolder;
	}
	.mycolor2
	{
		color: white;
		font-weight: bolder;
	}
    .my_styelenav a:hover
    {
      color: black;
      font-weight: bolder;
    }
	.container-login100 
	{
		background-color: black;
	}
	.avtived{
color: aqua;   

font-weight: bolder;
    }
  </style>
<body>
	<nav class="navbar navbar-expand-lg my_styelenav">
		<div class="container-fluid">
		  <a class="navbar-brand mycolor2" href="#">DARKCODERZ</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link mycolor2 " aria-current="page" href="withouttakingorder.php">Accessiories</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link active avtived" href="login.php">login</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link mycolor2" href="signup.php">signup</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link mycolor2" href="adminlogin.php">Admin-Login</a>
			  </li>
			
			</ul>
		
		  </div>
		</div>
	  </nav>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<?php
			if ($errorlogin) {
	echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Incorrect data!</strong><br>Enter Correct Gmail & Password
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> ";
}
?>
				<form action="login.php" method="POST" class="  login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Login
					</span>
				

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="text" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>
				

			
					<p class="mt-3  padfoegt"><a href="forgottenpassword.php" >Forgotten Password</a></p>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>
					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="signup.php">
							Sign Up
						</a>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>