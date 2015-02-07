<?php 
include('connect.php');
include('functions.php');

if(isset($_SESSION['user_id'])){
	header('Location:home.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Intercoolerjs - Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<br><br>
<h3 class='text-center'>Get Started</h3>
<div class='row'>
	<div class='col-lg 12 text-center'>
		<button ic-get-from="login.php" ic-target='#form-container' ic-indicator="#form-loader" class='btn btn-primary'>Log In</button>
		<button ic-get-from="signup.php" ic-target='#form-container' ic-indicator="#form-loader" class='btn btn-info'>Sign Up</button>
	</div>
</div>
<div class='text-center' style='height: 30px;margin-top:10px;'>
	 <i id="form-loader" class="fa fa-spinner fa-spin" style="display:none;font-size: 50px;"></i>
</div>

<div id='form-container'>
	
</div>



<script type="text/javascript" src='js/jquery.min.js'></script>
<script type="text/javascript" src='js/bootstrap.min.js'></script>
<script type="text/javascript" src='js/intercooler.js'></script>
</body>
</html>