<?php

	$title = 'CUHLT VISUALS';
	
	include 'php/nav.php';
	include 'php/header.php';


?>
<!-- Owl Carousel lib-->
<script type='text/javascript' src='js/owl.carousel.js'></script>
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.transitions.css">


<body>
	<br>
	<br>
	<div align='center'>
		<iframe class='item' iframe width="640" height="360" src="//www.youtube.com/embed/tdAWM1-j55Y?rel=0" frameborder="0" allowfullscreen></iframe>
		<br>
		(<i>99 Facts</i> by TIVE (prod. Falco))
	</div>
    <br>
    <br>
    <div align='center'>
        <iframe class='item' width="640" height="360" src="//www.youtube.com/embed/-mBCaCe6QQw?rel=0" frameborder="0" allowfullscreen></iframe>  
        <br>
        (<i>Light Skin Trick Daddy</i> by wifisfuneral (prod. Kaine Solo))
    </div>
    <br>
    <br>
</body>


<script>
	$(document).ready(function() {
 
	  $('.owl-carousel').owlCarousel({
        items:1,
        merge:true,
        loop:true,
        margin:10,
        video:true,
        lazyLoad:true,
        center:true,
        responsive:{
            480:{
                items:2
            },
            600:{
                items:4
            }
        }
    })
 
});
</script>
