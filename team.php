<?php

	//fix internet_user links, and smuv twitter

	$title = 'CUHLT TEAM';
	
	include 'php/nav.php';
	include 'php/header.php';

	
?>
	


<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='css/responsiveImg.css' rel='stylesheet' type='text/css'>
	</head>

	<body>

	<div class="wrapper">
		<div class="container">
			
			
			
			<div id="four-columns" class="grid-container" style="display:block;">
				<ul class="rig columns-4" id='4colsFirst' align='center'></ul>
				<ul class="rig columns-4" id='4cols' align='left' ></ul>
			
			</div>
			<!--/#four-columns-->
			
			<hr />
			
		</div>
		<!--/.container-->
	</div>
	<!--/.wrapper-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		var dir = "img/";

		//display team from globals file
		$.getJSON( "php/globals.php", function( json ) {
			for (i=0; i < json.length; i++){
	  			
	  			var sc;
	  			var yt;
	  			var tw;

	  			if(json[i].soundcloud =='')
	  				sc='';
	  			else
	  				sc= "<br><a href='"+json[i].soundcloud + "'>soundcloud</a>";

	  			if(json[i].youtube =='')
	  				yt='';
	  			else
	  				yt= "<br><a href='"+json[i].youtube + "'>youtube</a>";

	  			if(json[i].twitter =='')
	  				tw='';
	  			else
	  				tw= "<br><a href='"+json[i].twitter + "'>twitter</a>";

	  			//console.log('adding --' + json[i].name);
	  			if(json[i].name =='TIVE'){
				
					//$("#4colsFirst").append($("<li class='myImage'><img src=" + dir + json[i].image + " alt='" + json[i].name + "' data='" + json[i].soundcloud + "'></img><h3>" + json[i].name + "</h3><p><i>" + json[i].description + "</i>"+ sc + yt + tw ));
	  				$("#4cols").append($("<li class='myImage'></img><h3>" + json[i].name + "</h3><i><p style='font-size:12px'>" + json[i].description + "</i>"+ sc + yt + tw ));
	  			
	  			}
	  			else
	  			{
	  			
	  				//$("#4cols").append($("<li class='myImage'><img src=" + dir + json[i].image + " alt='" + json[i].name + "' data='" + json[i].soundcloud + "'></img><h3>" + json[i].name + "</h3><p><i>" + json[i].description + "</i>"+ sc + yt + tw ));
	  				$("#4cols").append($("<li class='myImage'><h3>" + json[i].name + "</h3><i><p style='font-size:12px'>" + json[i].description + "</i>"+ sc + yt + tw ));

	 			}
		 	}
	 	});
		
		//This code below grabs and displays all pics in a directory
		/*
		var counter =0;
		var fileextension = ".jpg";
		
		$.ajax({
	    	//This will retrieve the contents of the folder if the folder is configured as 'browsable'
	    	url: dir,
	    	success: function (data) {
	    		
		
	        	//List all png file names in the page


	        	$(data).find("a:contains(" + fileextension + ")").each(function () {
	            	var filename = this.href.replace(window.location.host, "").replace("http:///rspimg", "");
	            	counter++;
	            	
	            	if(counter==1){
	        			$("#2colsFirst").append($("<li><img src=" + dir + filename + "></img><h3>TIVE " + "</h3><p><i>ugly</i></p></li>"));
	        			$("#3colsFirst").append($("<li><img src=" + dir + filename + "></img><h3>TIVE " + "</h3><p><i>ugly</i></p></li>"));
	        			$("#4colsFirst").append($("<li><img src=" + dir + filename + "></img><h3>TIVE " + "</h3><p><i>ugly</i></p></li>"));
	        		
	        		}
	        		else{
	        			$("#2cols").append($("<li><img src=" + dir + filename + "></img><h3>picture " + counter +"</h3><p><i>picture</i></p></li>"));
	        			$("#3cols").append($("<li><img src=" + dir + filename + "></img><h3>picture " + counter +"</h3><p><i>picture</i></p></li>"));
	        			$("#4cols").append($("<li><img src=" + dir + filename + "></img><h3>picture " + counter +"</h3><p><i>picture</i></p></li>"));
	        		
	        		}
	            	
	        	});
	    	}
		});
		*/
		$('.myImage').click(function(event){
			//console.log($(this).attr('data'));
			console.log('yo');
		});
		
		//$('img').hover(function(event){
		//	$(this).toggleClass('hoverImg');
		//});
		
		$('.grid-nav li a').on('click', function(event){
			event.preventDefault();
			$('.grid-container').fadeOut(500, function(){
				$('#' + gridID).fadeIn(500);
			});
			var gridID = $(this).attr("data-id");
			
			$('.grid-nav li a').removeClass("active");
			$(this).addClass("active");

		});
	});
	</script>

	</body>
</html>