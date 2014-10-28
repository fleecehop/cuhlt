<?php

	include 'php/globals.php';

	$title = str_replace('"', "", $generalSettings['blogTitle']);
	
	include 'php/nav.php';
	include 'php/header.php';


?>
<html>

<body>

	<div id='blogPage' class='Absolute-Center' style='width:95%'>
		<br>
		<br>
		<div id="blogContent" align='center'>
			<i>
			
				(coming soon)
			
			</i>
		</div>
	</div>
	

<?php 
	if(isset($_SESSION['admin'])){
		if($_SESSION['admin']=='true'){
			echo "
					<script>
						$(function(){

							$('#blogContent').ckeditor();
							
							
							$('#blogContent').prop('contenteditable','true');
						
							$('#blogPage').append(
								'<br><br><br><div align=\"center\"><input class=\"btn btn-default\" onclick=\"removeEditor();\" type=\"button\" value=\"Save\"\></div>');
						});
					</script>
			";

		}
	}

?>

</body>

</html>
