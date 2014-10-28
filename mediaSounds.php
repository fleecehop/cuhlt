<?php
	
	include 'php/globals.php';

	$title = str_replace('"', "", $generalSettings['mediaSoundsTitle']);
	
	include 'php/nav.php';
	include 'php/header.php';

	//includes the array $soundPosts which contains all of the data for soundposts
	include 'data/soundPosts.php';	

?>

<body>
	
	<?php



		for($i=0; $i < sizeof($soundPosts); $i++){
			
			//display soundposts from file
			echo

				"
					<br>
					
					<div class='container' align='center'>
				" 
					 
				. $soundPosts[$i]->embed .
					 
				"
					<br>
					(<i>
				" 
				
				. $soundPosts[$i]->projectName . 
				
				"
					</i> by 
				" 
				
				. $soundPosts[$i]->artistName . 
				
				"
					)
					</div>
					<br>
					<br>
				";
		} 


	?>
	
	
	<br>

</body>