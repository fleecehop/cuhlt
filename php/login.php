<?php

	if(isset($_POST['username'])){
		if($_POST['username'] !=='')
			$username= $_POST['username'];
		else
			$username="username problem";
	}
	if(isset($_POST['password'])){
		if($_POST['password'] !=='')
			$password=$_POST['password'];
		else
			$password="password problem";
	}

?>

<style>
.Absolute-Center {
  margin: auto;
  position: absolute;
  top: 0; left: 0; bottom: 0; right: 0;
  font-family: 'Century-Gothic';
  font-size: 20px;
}

</style>
<html>
	<div align='center' class='Absolute-Center'>
		Welcome: &nbsp;&nbsp;<?php echo $username; ?>
	</div>

</html>

