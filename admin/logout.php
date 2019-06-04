<?php
session_start();
session_destroy();
header("Location:login.php");

// session_start();
// $url = "login.php";

// try{
	
// 	$_SESSION['message'] = "Log out Successfully !";

// 	if(isset($_SESSION['login_status'])){
// 		unset($_SESSION['login_status']);
		
// 	}

// 	if(isset($_SESSION['user_name'])){
// 		unset($_SESSION['user_name']);
		
// 	}
// 	header('Location: ' . $url);
// }
// catch(Exception $e){
// 	$_SESSION['message'] = "$e->getMessage()";
// 	header('Location: ' . $url);
// }

?>