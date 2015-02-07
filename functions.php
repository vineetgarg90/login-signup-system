<?php 

/**
* sanitize array
* @param mixed $arr
* @return mixed $arr
*/
function sanitize($arr){
	foreach ($arr as $key => $value) {
		$arr[$key] = addslashes(trim(strip_tags($value)));
	}
	return $arr;
}

/**
* logs user into system
* @param mixed $credentials 
*/
function login_user($credentials){
	sanitize($credentials);
	global $conn;
	$query = "select * from users where email = '".$credentials['email']."' and password ='".md5($credentials['password'])."' "; 

	$res = $conn->query($query);

	if($res->num_rows == 1){
		$row = $res->fetch_array(MYSQLI_ASSOC);
		return $row;
	}
	else
		return FALSE;		  
}


/**
* checks if given email exits in database on not
* @param string $email
* @return boolean
*/
function is_unique_email($email){
	global $conn;
	$query = "select id from users where email = '".$email."' limit 1 "; 
	$res = $conn->query($query);

	if($res->num_rows > 0)
		return TRUE;
	else
		return FALSE;
}


/**
* creates a new user's account
* @param mixed $details 
*/
function create_user($details){
	sanitize($details);
	global $conn;
	$query = "insert into users(name, email, password)
			  values('".$details['name']."' ,'".$details['email']."' , '".md5($details['password'])."')"; 

	if($conn->query($query) === TRUE)
		return TRUE;
	else
		return FALSE;		  
}

 ?>