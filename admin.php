<?php

	include "php/nav.php";

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
	
	
	<form action='php/login.php' method='post' >
	
		<table  class='Absolute-Center' style='width:40%;'>
				<tr>
					<td>Username: </td>
					<td>
						<input name='username' class='form-control' type='search'></input>
					</td>
				</tr>
				
				<tr>
					<td>Password: </td>
					<td>
						<input name='password' class='form-control' type='password'></input>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
				</tr>

				<tr>
					<td> </td>
					<td>
						<input type='submit' class='btn btn-default' value='Login'></input>
					</td>
				</tr>
			
		</table>
	</form>
</html>