<?php
	session_start();

	
	include "globals.php";

	$username='';
	$password='';

	if(isset($_POST['username'])){
		if($_POST['username'] !=='')
			$username= $_POST['username'];
	}
	if(isset($_POST['password'])){
		if($_POST['password'] !=='')
			$password=$_POST['password'];
	}

	if(isset($_SESSION['admin'])){
		
		if($_SESSION['admin'] == 'true')
			header("Location: ../adminMain.php");

	}

	if($username == $adminUsername && $password == $adminPassword || $adminLoggedIn =='true'){
		$_SESSION['admin'] = 'true';
		$_SESSION['username'] = $username;
		
		header("Location: ../adminMain.php");
	}
	else{
		header("Location: ../admin.php?loginAttempt=true");
	}
		
?>


