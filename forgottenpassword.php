<?php
$errorlogin = false;
$updatedone=false;
include("connectionlogin.php");


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$gmail = $_POST['email'];


	$exitso = "SELECT * FROM `logincoderzdata` WHERE email='$gmail'";
	$result = mysqli_query($conn, $exitso);
	$existo = mysqli_num_rows($result);

	if($existo==1)
	{
        $forgetpassmake=rand(0,999999);
       
        $updatepass = "UPDATE `logincoderzdata` SET `password` = '$forgetpassmake' WHERE `logincoderzdata`.`email` ='$gmail'";
        
        $resultpass = mysqli_query($conn, $updatepass);
        $updatedone=true;
	
		// header("location: welcomehome.php");
	}
	else{
		$errorlogin=true;
	}



}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgotten Password </title>
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
		.container-login100 
	{
		background-color: white;
	}

</style>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<?php
			if ($errorlogin) {
	echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
<strong>Incorrect Gmail!</strong><br>Enter Correct Gmail to get Password or Signup
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> ";
}
if ($updatedone) {
	echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
<strong>Password Updated!</strong><br>Check your Gmail or your new password is $forgetpassmake
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div> ";
}
?>
				<form action="forgottenpassword.php" method="POST" class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Password Forgotten
					</span>
				

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

			

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Get Password
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							I know password!
						</span>

						<a class="txt2" href="login.php">
                        <strong>	login</strong>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
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