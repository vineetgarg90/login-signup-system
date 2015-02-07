<?php 
include('connect.php');
include('functions.php');

if(isset($_SESSION['user_id'])){
	header('Location:home.php');
}

if($_SERVER['REQUEST_METHOD'] == 'GET'){
	include('view/signup-view.php');
}
else{
	$input = $_POST;
	$error = array();
	//email validation
	if($input['email'] == ''){
		$error['email_error'] = "Email is required";
	}
	else if(!filter_var($input['email'], FILTER_VALIDATE_EMAIL)){
		$error['email_error'] = "Email is not valid.";	
	}
	else if(is_unique_email($input['email'])){
		$error['email_error'] = "Email already exists.";		
	}

	//name validation
	if($input['name'] == ''){
		$error['name_error'] = "Name is required";
	}

	//password
	if($input['password'] == ''){
		$error['password_error'] = "Password is required";
	}
	else if(strlen($input['password']) < 6){
		$error['password_error'] = "Password must be atleast 6 characters";	
	}

	// confrim password
	if($input['confirmPassword'] == ''){
		$error['confirm_error'] = "Confirm Password is required";
	}
	else if($input['confirmPassword'] != $input['password']){
		$error['confirm_error'] = "Both password must match.";	
	}

	if(!sizeof($error)){
		if(create_user($input))
			$success_msg = "Account created successfully";
		else
			$error_msg = "Problem creating account";
	}
	else{
		extract($input);
		extract($error);
	}

	include('view/signup-view.php');

}