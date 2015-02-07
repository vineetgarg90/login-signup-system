<?php 
include('connect.php');
include('functions.php');

if(isset($_SESSION['user_id'])){
	header('Location:home.php');
}



if($_SERVER['REQUEST_METHOD'] == 'GET'){
	include('view/login-view.php'); 
}
else{

	$input = $_POST;
	$user = login_user($input);
	if($user === FALSE){
		$error_msg = 'Incorrect email and password';
	}
	else{
		$_SESSION['user_id'] = $user['id'];
		$_SESSION['user_name'] = $user['name'];
		$_SESSION['user_email'] = $user['email'];
		// $success_msg = 'Login successfull. Please wait redirecting to homepage.';
		echo "<script>";
		echo "window.location.reload();";
		echo "</script>";
	}

	include('view/login-view.php'); 
}

?>