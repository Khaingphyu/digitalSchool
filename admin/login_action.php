<?php
session_start();
include("database.php");
if(isset($_POST['username']) && isset($_POST['password'])) {
	$user = mysqli_real_escape_string($conn, $_POST['username']);
	$pass = mysqli_real_escape_string($conn, $_POST['password']);

	if($user == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		$result = mysqli_query($conn, "SELECT * FROM login WHERE username = '$user' AND password = md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['username'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];

		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='login.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
			// header('Location: ../index.php');
			if ($_SESSION['id'] == 1) {
				header('Location: index.php');
			}
			else {
				header('Location: login.php');
			}
		}
	}
} else {
	echo "Error";exit();
	header('Location: index.php');	
}
?>