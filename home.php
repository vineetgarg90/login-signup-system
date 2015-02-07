<?php  
include('connect.php');
include('functions.php');

if(!isset($_SESSION['user_id'])){
	header('Location:index.php');
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
<h3 class='text-center'>Welcome <?php echo $_SESSION['user_name'] ?>!</h3>
<div class='row'>
	<div class='col-lg 12 text-center'>
		<a href='logout.php' class='btn btn-danger'>Logout</a>
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