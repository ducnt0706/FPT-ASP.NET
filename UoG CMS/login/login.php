<?php
session_start();
if (isset($_POST['username'])) {
        // Set variables to represent data from database
	$dbUsname = "admin";
	$dbPassword = "test1";
	$uid = "1111";
	
	// Set the posted data from the form into local variables
	$usname = strip_tags($_POST['username']);
	$paswd = strip_tags($_POST['password']);
	
	// Check if the username and the password they entered was correct
	if ($usname == $dbUsname && $paswd == $dbPassword) {
		// Set session 
		$_SESSION['username'] = $usname;
		$_SESSION['id'] = $uid;
		// Now direct to users feed
		header("Location: user.php");
	} else {
		echo "<h2>Oops that username or password combination was incorrect.
        <br /> Please try again.</h2>";
	}
	
}
?>