<?php
//for header redirection
ob_start();

//start session - needed to capture login information 
session_start(); 

//connnect to the controller
require("../controllers/logincontroller.php");

//admin login
//admin@gmail.com
//pass:12345

//standard login
//standard@gmail.com
//pass:54321
if (isset($_POST['register_user'])){
	//grab form details 
	$lemail = $_POST['email'];
	$firstname = $_POST['fname'];
	$lastname = $_POST['lname'];
	$lpass = $_POST['password'];
	$hash = password_hash($lpass, PASSWORD_DEFAULT);
	//check if email exist
	$register = register_user($firstname, $lastname, $lemail, $hash);
	if ($register) {
			//echo success
		header('Location: login.php');
	}else{
				//echo failure
		echo "error";

			}
		
	}


//check if login button was clicked 
if (isset($_POST['login_user'])){
	//grab form details 
	$lemail = $_POST['email'];
	$lpass = $_POST['pass'];
	$check_login = login_user($lemail);

	if ($check_login) {
		//email exist, continue to password
		//get password from database
		$hash = $check_login[0]['customer_pass'];
		
		if (password_verify($lpass, $hash)) 
		{
				//create session for id, role and name
				$_SESSION["user_id"] = $check_login[0]['customer_id'];
				$_SESSION["user_name"] = $check_login[0]['customer_fname'];

				//redirection to home page
				header('Location: ../view/shop.php');
				
				//to make sure the code below does not execute after redirection use exit
				exit;
		} else 
		{
				//echo appropriate error
			    
				header('Location: login.php');
		}

	} else{
		//echo appropriate error
		echo "incorrect username or password";
	}
}

if (isset($_POST['login_admin'])){
	//grab form details 
	$lemail = $_POST['email'];
	$lpass = $_POST['pass'];
	$check_login = login_admin($lemail);

	if ($check_login) {
		//email exist, continue to password
		//get password from database
		$hash = $check_login[0]['admin_pass'];
		
		if (password_verify($lpass, $hash)) 
		{
				//create session for id, role and name
				$_SESSION["user_id"] = $check_login[0]['admin_id'];
				$_SESSION["user_name"] = $check_login[0]['firstname'];

				//redirection to home page
				header('Location: ../admin/index.php');
				
				//to make sure the code below does not execute after redirection use exit
				exit;
		} else 
		{
				//echo appropriate error
			    
				header('Location: login.php');
		}

	} else{
		//echo appropriate error
		echo "incorrect username or password";
	}
}

?>