<?php

	include 'php/nav.php';


?>

<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
	#owl-demo .item{
		background: #a1def8;
		padding: 30px 0px;
		display: block;
		margin: 5px;
		color: #FFF;
		-webkit-border-radius: 3px;
		-moz-border-radius: 3px;
		border-radius: 3px;
		text-align: center;
	}
</style>

<!-- Owl Carousel lib-->
<script type='text/javascript' src='js/owl.carousel.js'></script>
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">

<div class='container' width='50%'>
	<div id="owl-demo" class="owl-carousel owl-theme">
	</div>
</div>

</div>

<script>
	$(document).ready(function() {

	  $("#owl-demo").owlCarousel({
	    jsonPath : 'json/data.json',
	    items: 3
	  });

	});
</script>