<?php
	include 'php/globals.php';

	$title = str_replace('"', "", $generalSettings['indexTitle']);
	
	include 'php/nav.php';
	include 'php/header.php';

?>


<body>
	<br>
	<?php 
		if(isset($_SESSION['admin'])){
			if($_SESSION['admin']=='true'){ 
				//echo "<form action='php/indexSave.php' method='post'>";
			}
		}
	?>

	<div id='mainPage'> 
		<div class='container' id='mainContent' name='indexContentDiv' align='center' >
			<?php echo html_entity_decode($indexContent['content']); ?>
		</div>

		
	</div>

	<?php 
		if(isset($_SESSION['admin'])){
			if($_SESSION['admin']=='true'){ 
				echo "</form>";
			}
		}
	?>
</body>

<?php 
	if(isset($_SESSION['admin'])){
		if($_SESSION['admin']=='true'){
			echo "
					<script>
						$(function(){
							
							$('#mainContent').prop('contenteditable','true');
							$('#mainContent').ckeditor();
							

							$('#mainPage').append(
								'<br><br><div align=\"center\"><input class=\"btn btn-default\" id=\"subBtn\" type=\"submit\" value=\"Save\"\></div>');
							
							$('#subBtn').click( function(){ 
								var data = $('#mainContent').html();
    							$.post('php/indexSave.php', {
        							content : data
        						});
							});

						});
						


					</script>

			";

		}
	}

?>