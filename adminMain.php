<?php
	include "php/globals.php";

	$title= str_replace('"', "", $generalSettings['adminMainTitle']);
	
	include "php/header.php";
	
	include "php/nav.php";

	if(!isset($_SESSION['admin'])){

		header("Location: admin.php");
		die();
	}
	else{
		if($_SESSION['admin'] !== 'true'){
			header("Location: admin.php");
			die();
		}
	}

	$username='';
	
	if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
	}

?>

<html>
	<body>
		<div align='center' class='Absolute-Center'>
			Welcome: &nbsp;<?php echo $username; ?> 
			<br>This is the admin page. From here you can set general settings for the site. 
			<br>
			<br>
			<br>
			<form action="php/adminGeneralSettingsUpdate.php" method='post'>
	  			<table  class='Absolute-Center' style='width:50%; text-align:left;'>
					<col width='120'>
					<col width='150'>
		  			
		  			<tr>
		  				<td><b>Navigation Bar Settings </b></td>
		  			</tr>
		  			<tr>
		  				<td>&nbsp;</td>
		  			</tr>
		  			<tr>
		  				<td>Navbar Inverse: </td>
		  				<td><input type="checkbox"  name="navInverse" id='navInverse' autofocus <?php  if($generalSettings['navbar_inverse']=='true')echo 'checked'; ?> >
		  			</tr>
		  			<tr>
		  				<td>&nbsp;</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Home Tab Visable:
				  		</td>
				  		<td>
				  			<input type="checkbox" name="homeTabChk" id="homeTabChk" <?php  if($generalSettings['homeTabVisable']=='true')echo 'checked'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Music Tab Visable: 
				  		</td>
				  		<td>
				  			<input type="checkbox" name="musicTabChk" id="musicTabChk" <?php  if($generalSettings['musicTabVisable']=='true')echo 'checked'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Visuals Tab Visable: 
				  		</td>
				  		<td>
				  			<input type="checkbox" name="visualsTabChk" id="visualsTabChk" <?php  if($generalSettings['visualsTabVisable']=='true')echo 'checked'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
		  					Team Tab Visable: 
		  				</td>
				  		<td>
				  			<input type="checkbox" name="teamTabChk" id="teamTabChk" <?php  if($generalSettings['teamTabVisable']=='true')echo 'checked'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Blog Tab Visable:
				  		</td>
				  		<td>
				  			<input type="checkbox" name="blogTabChk" id="blogTabChk" <?php  if($generalSettings['blogTabVisable']=='true')echo 'checked'; ?> >
						</td>
		  			</tr>
		  			<!------------------------------------------------------------------>
		  			<tr>
		  				<td>&nbsp;</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Brand Tab Text:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="brandTabIn" id="brandTabIn" <?php  echo 'value="' . html_entity_decode($generalSettings['brandTabText']) . '"'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Home Tab Text:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="homeTabIn" id="homeTabIn" <?php  echo 'value="' . html_entity_decode($generalSettings['homeTabText']) . '"'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Music Tab Text:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="musicTabIn" id="musicTabIn" <?php  echo 'value="' . html_entity_decode($generalSettings['musicTabText']) . '"'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Visuals Tab Text:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="visualsTabIn" id="visualsTabIn" <?php  echo 'value="' . html_entity_decode($generalSettings['visualsTabText']) . '"'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Team Tab Text:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="teamTabIn" id="teamTabIn" <?php  echo 'value="' . html_entity_decode($generalSettings['teamTabText']) . '"'; ?> >
						</td>
		  			</tr>  
		  			<tr>
		  				<td>
				  			Visuals Tab Text:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="blogTabIn" id="blogTabIn" <?php  echo 'value="' . html_entity_decode($generalSettings['blogTabText']) . '"'; ?> >
						</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Logout Tab Text:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="logoutTabIn" id="logoutTabIn" <?php  echo 'value="' . html_entity_decode($generalSettings['logoutTabText']) . '"'; ?>>
						</td>
		  			</tr>
		  			<tr>
		  				<td>&nbsp;</td>
		  			</tr>

		  			<!------------------------------------------------------>
		  			
		  			<tr>
		  				<td><b>Page Title Settings </b></td>
		  			</tr>
		  			<tr>
		  				<td>&nbsp;</td>
		  			</tr>
		  			<tr>
		  				<td>
				  			Main Page Title:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="mainPgTitle" <?php  echo 'value=' . $generalSettings['indexTitle']; ?> >
						</td>
					</tr>
					<tr>
		  				<td>
				  			Music Page Title:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="musicPgTitle" <?php  echo 'value=' . $generalSettings['mediaSoundsTitle']; ?> >
						</td>
					</tr>
					<tr>
		  				<td>
				  			Visuals Page Title:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="visualsPgTitle" <?php  echo 'value=' . $generalSettings['mediaVisualsTitle']; ?> >
						</td>
					</tr>
					<tr>
		  				<td>
				  			Team Page Title:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="teamPgTitle" <?php  echo 'value=' . $generalSettings['teamTitle']; ?> >
						</td>
					</tr>
					<tr>
		  				<td>
				  			Blog Page Title:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="blogPgTitle" <?php  echo 'value=' . $generalSettings['blogTitle']; ?> >
						</td>
					</tr>
					<tr>
		  				<td>
				  			Admin Login Page Title:
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' name="adminLoginPgTitle" <?php  echo 'value=' . $generalSettings['adminLoginTitle']; ?> >
						</td>
					</tr>
					<tr>
		  				<td>
				  			Admin Main Page Title (this page):
				  		</td>
				  		<td>
				  			<input type="input" class='form-control displayFriendlyInput' id="adminMainPgTitle" name="adminMainPgTitle" <?php  echo 'value=' . $generalSettings['adminMainTitle']; ?> >
						</td>
					</tr>                 		  		  			
		  			<br>
		  			</table>
		  			<br>
		  			<button class='btn btn-default' type="submit">Save</button>&nbsp;&nbsp;&nbsp;
		  			<input class='btn btn-default' type='button' value='Cancel' onclick='document.location.href="adminMain.php";'></input>
		  		
		  		</table>
			</form>
			<br><i>If you have any questions, please contact grahamcracker003@gmail.com</i>
		</div>
	</body>
	<script type="text/javascript">
		$(function(){

			//if the nav inverse checkbox clicked change to show preview
			$('#navInverse').click(function(){
				$('#myNav').toggleClass('navbar-inverse');
			});

			//if the home tab checkbox clicked change to show preview
			$('#homeTabChk').click(function(){
				
				if( $('#homeTabChk').prop('checked')){
				
					$('#MainTabs li:eq(0)').before('<li><a href="index.php" id="homeTab">'+$('#homeTabIn').val() + '</a></li>');

					
				}
				else{
				
					$('#homeTab').remove();
				
				}
			});

			//if the music tab checkbox is clicked
			$('#musicTabChk').click(function(){
				
				if( $('#musicTabChk').prop('checked')){
				
					$('#MainTabs li:eq(0)').after('<li><a href="mediaSounds.php" id="musicTab">' + $('#musicTabIn').val() + '</a></li>');

					
				}
				else{
				
					$('#musicTab').remove();
				
				}
			});

			//if the visuals tab checkbox is clicked hide/show
			$('#visualsTabChk').click(function(){
				if( $('#visualsTabChk').prop('checked')){
				
					$('#MainTabs li:eq(1)').after('<li><a href="mediaVisuals.php" id="visualsTab">' + $('#visualsTabIn').val() + '</a></li>');

				}
				else{
				
					$('#visualsTab').remove();
				
				}
			});

			//if the team tab checkbox is clicked hide/show
			$('#teamTabChk').click(function(){
				if( $('#teamTabChk').prop('checked')){
				
					$('#MainTabs li:eq(2)').after('<li><a href="team.php" id="teamTab">' + $('#teamTabIn').val() + '</a></li>');

				}
				else{
				
					$('#teamTab').remove();
				
				}
			});

			//if the blog tab checkbox is clicked hide/show
			$('#blogTabChk').click(function(){
				if( $('#blogTabChk').prop('checked')){
				
					$('#MainTabs li:eq(3)').after('<li><a href="blog.php" id="blogTab">' + $('#blogTabIn').val() + '</a></li>');

				}
				else{
				
					$('#blogTab').remove();
				
				}
			});

			//change the brand text as the user types
			$('#brandTabIn').on('change keyup paste', function(){
				$('#brandTab').text( $('#brandTabIn').val() );
			});

			//change the home text as the user types
			$('#homeTabIn').on('change keyup paste', function(){
				$('#homeTab').text( $('#homeTabIn').val() );
			});

			//change the music text as the user types
			$('#musicTabIn').on('change keyup paste', function(){
				$('#musicTab').text( $('#musicTabIn').val() );
			});

			//change the visuals text as the user types
			$('#visualsTabIn').on('change keyup paste', function(){
				$('#visualsTab').text( $('#visualsTabIn').val() );
			});

			//change the team text as the user types
			$('#teamTabIn').on('change keyup paste', function(){
				$('#teamTab').text( $('#teamTabIn').val() );
			});

			//change the blog text as the user types
			$('#blogTabIn').on('change keyup paste', function(){
				$('#blogTab').text( $('#blogTabIn').val() );
			});

			//change the logout text as the user types
			$('#logoutTabIn').on('change keyup paste', function(){
				$('#logoutTab').text( $('#logoutTabIn').val() );
			});

			//change the title of this page as the user types
			$('#adminMainPgTitle').on('change keyup paste', function(){
				$(document).prop('title',  $('#adminMainPgTitle').val() );
			});
		});


	</script>
</html>