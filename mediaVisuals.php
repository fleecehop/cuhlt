<?php
	
	//todo: still having issues with lowRes/mobile owlcarousel

	include 'php/globals.php';

	$title = str_replace('"', "", $generalSettings['mediaVisualsTitle']);
	
	include 'php/nav.php';
	include 'php/header.php';

?>

<body>

	<div class='container'>
		<div id="owl-demo" class="owl-carousel owl-theme">
			<?php
				for($i=0; $i < sizeof($imageArray); $i++)
				{
					echo "<div class='item'>". $imageArray[$i] ."</div>";
					
				}	
			?>
		</div>
	</div>
</body>

<script>
	$(document).ready(function() {

	  $("#owl-demo").owlCarousel({
	  	items: 1,
	   	singleitem:true,
        autoHeight:true,
        video:true,
        videoWidth:640,
        videoHeight:360,
        lazyLoad:true,
        
        

 
       });

	});
</script>