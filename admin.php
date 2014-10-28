<?php
	include "php/globals.php";

	$title= str_replace('"', "", $generalSettings['adminLoginTitle']);
	
	include "php/header.php";
	
	include "php/nav.php";
	
		
	$errorMessage='';
	
	if(isset($_SESSION['admin'])){
		
		if($_SESSION['admin'] == 'true')
			header("Location: adminMain.php");

	}

	if(isset($_GET['loginAttempt'])){
		if($_GET['loginAttempt'] == 'true'){
			$errorMessage="failed to login!";
		}
	}

?>

<form action='php/login.php' method='post' >
	<div  style='overflow:hidden; text-align: center;'>
		<span style='color:red;display: inline-block;margin:10px 10px 0 0;padding:5px 10px'><?php echo $errorMessage ?></span>
	</div>
	<br>
	<table  class='Absolute-Center' style='width:20%;'>
			<col width='100'>
			<col width='100'>
			<tr>
				<td>Username: </td>
				<td>
					<input name='username' class='form-control displayFriendlyInput' type='search' autofocus></input>
				</td>
			</tr>
			
			<tr>
				<td>Password: </td>
				<td>
					<input name='password' class='form-control displayFriendlyInput' type='password'></input>
				</td>
			</tr>
			
			

			<tr>
				<td>&nbsp; </td>
			</tr>
			<tr>
				<td>&nbsp; </td>
				<td>
					<input type='submit' class='btn btn-default' value='Login'></input>
				</td>
			</tr>
		
	</table>
</form>