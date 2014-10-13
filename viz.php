<!doctype html>
<html lang="en">

<head>
 	<link rel="stylesheet" href="css/style.css">
	
	<style>
		.element{
			shape-outside: circle(30%);
			-webkit-clip-path:circle(30%);
			width: 100px;
			height: 100px;
			float: left;
			background: green;
			position:fixed;
		}

	</style>
	<script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.js'></script>
	<script type='text/javascript' src='js/moment.min.js'></script>
</head>

<body>
	<div>
	  <div class='element' id='mything'>hello</div>
	  <div id='counter' align='center'> counter: 0</div>
	</div>
</body>	

<script>
	$(document).ready(function(){


		var counter = 1;
		$(".element").hover(function(){

			var $newdiv1 = $( "<div id='" + counter + "' class='element'/>" );
			
			$( "body" ).append( $newdiv1);

			counter=counter+1;

			$("#counter").html("counter: " + counter +1);

			

	    	$( ".element" ).each(function() {
  				
  				var randCoordinates = randPosition();
  				
  				$( this ).animate({ top: randCoordinates[0], left: randCoordinates[1] }, function(){
	    			var thing="";
	    		});

			});

		}); 


		function randPosition(){
	    
		    // Get viewport dimensions (remove the dimension of the div)
		    var height = $(window).height() - 100;
		    var width = $(window).width() - 100;
		    
		    var randy = Math.floor(Math.random() * height);
		    var randx = Math.floor(Math.random() * width);
		    
		    return [randy,randx];    
		    
		}

	});


</script>

</html>