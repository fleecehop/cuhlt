<?php
	//********************************* Title Settings ***********************************
	//
	$adminUsername='mike';
	$adminPassword='jones';

	//Include General Settings file
	$generalSettings = include 'generalSettings.php';

	//****************************** NavBar Settings **********************************
	//

	/*MOVED TO generalSettings.php 10/16/2014 

	*/
	//////////////////////////////////////CONTENT\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

	//*************************************************************************************
	
	//****************************	index page settings   *********************************
	//

	//****************************	index page Content   **********************************
	//
	$indexContent= include 'indexContent.php';
	/*have begun starting to integrate to indexContent.php file
	$indexContentHTML=

		"
			<span href='http://cuhltanese.bandcamp.com' style='width:40%'>
				<img src='img/IMG_2728.jpg' width='40%' height='40%'> </img>
			</span>
			
			<br>
			<br>
			
			<a href='http://soundcloud.com/cuhlt/sets/d3coy'><i>//stream//</i></a>
			
			<br>
			
			<a href='http://cuhltanese.bandcamp.com/album/d3coy'><i>//download//</i></a>
		";
	*/

	//**************************************************************************************
	
	//**********************	sounds page display settings   *****************************
	//

	//not currently in use

	//soundcloud standard settings
	$scWidth='450px';
	$scHeight='450px';
	$sccolor='000000';
	$scauto_play='false';
	$schide_related='false';
	$scshow_comments='true';
	$scshow_user='true';
	$scshow_reposts='false';

	//bandcamp standard settings
	$bandcampWidth='450px';
	$bandcampHeight='650px';
	$bandcampSize='large';
	$bandcampbgcol='333333';
	$bandcamplinkcol='ffffff';
	$bandcamptransparent='true';
	$bandcampseamless='seamless';

	//***************************	visuals page display settings   *************************
	//

	//not currently in use

	//youtube standard settings
	$ytWidth='640px';
	$ytHeight='360px';

	////////////////////////////////////// Carousel Settings \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

	//******************* Carousel Image Settings ********************
	//the variables below define the settings for images in carousel
	$imagesInCarousel = 1;
	$grayscaleCarousel=true;

	//Set Width OR Height so that it gets scaled appropriately
	$imageWidth ='';
	$imageHeight ='height="500"';
	$imageDimensions= $imageWidth . ' ' . $imageHeight ;
	
	//********************************** Images Carousel Array **********************************
	//the array below holds the images
	
	$imageArray=array();

	$grayStyle = "style='-webkit-filter: grayscale(100%); filter: grayscale(100%);'";


	$carouselItem ="<iframe class='owl-video'" . " width=" . $ytWidth . " height=". $ytHeight . " src='//www.youtube.com/embed/tdAWM1-j55Y?rel=0' frameborder='0' allowfullscreen></iframe>";
	array_push($imageArray,$carouselItem);

	$carouselItem ="<iframe class='owl-video' width=" . $ytWidth . " height=". $ytHeight . " src='http://www.youtube.com/embed/-mBCaCe6QQw?rel=0' frameborder='0' allowfullscreen></iframe>";
	array_push($imageArray,$carouselItem);

	$carouselItem ="<img " . $imageDimensions . " " . $grayStyle . " src='img/6ix.jpg'>";
	array_push($imageArray,$carouselItem);
	
	$carouselItem ="<img " . $imageDimensions  . " " . $grayStyle ." src='img/fleece.jpg'>";
	//array_push($imageArray,$carouselItem);

	$carouselItem ="<img " . $imageDimensions . " " . $grayStyle ." src='img/image1.jpg'>";
	array_push($imageArray,$carouselItem);

	$carouselItem ="<img " . $imageDimensions . " " . $grayStyle ." src='img/blugrad.jpg'>";
	//array_push($imageArray,$carouselItem);

	



?>