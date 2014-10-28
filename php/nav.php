<?php
	session_start();
?>

<!doctype html>
<html lang="en">

<head>
	
	<!-- favicon -->
	<link rel="icon" href="img/favicon.ico" />
 	
 	<!--CSS libraries-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	<link rel="stylesheet" href="css/contents.css">

	<!-- My CSS stuff-->
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/mystyle.css">


	<!--JS libraries-->
	<script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.js'></script>
	<script type='text/javascript' src='js/moment.min.js'></script>
	<script type='text/javascript' src='js/tabsloader.js'></script>
	<script type='text/javascript' src='js/owl.carousel.js'></script>
	<script type='text/javascript' src="js/ckeditor.js"></script>
	<script type='text/javascript' src="js/jqueryadapter.js"></script>

	<!-- Ensure it looks good on mobile -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
</head>

<body>
	<?php
		if($generalSettings['navbar_inverse'] ==='true') 
			echo '<nav class="navbar navbar-inverse navText" role="navigation" id="myNav"> ';
		else
			echo '<nav class="navbar navText" role="navigation" id="myNav">';
	?>
	
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header active">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" id='brandTab' href="index.php"><?php echo $generalSettings['brandTabText']; ?></a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav" id="MainTabs">
	      	<?php 
	      		if($generalSettings['homeTabVisable'] ==='true')
	      			echo '<li><a href="index.php" id="homeTab">' . $generalSettings['homeTabText'] .'</a></li>';
	      		
	      		if($generalSettings['musicTabVisable'] ==='true')
	      			echo '<li><a href="mediaSounds.php" id="musicTab">' . $generalSettings['musicTabText'] .'</a></li>';
	      		
	      		if($generalSettings['visualsTabVisable'] ==='true')
	      			echo '<li><a href="mediaVisuals.php" id="visualsTab">' . $generalSettings['visualsTabText'] .'</a></li>';
	      		
	      		if($generalSettings['teamTabVisable'] =='true')
	      			echo '<li><a href="team.php" id="teamTab">' . $generalSettings['teamTabText'] .'</a></li>';		
	      		
	      		if($generalSettings['blogTabVisable'] ==='true')
	      			echo '<li><a href="blog.php" id="blogTab">' . $generalSettings['blogTabText'] .'</a></li>';

	      		if(isset($_SESSION['admin'])){
					if($_SESSION['admin'] == 'true')
						echo '<li><a href="adminMain.php" id="adminTab">' . $generalSettings['adminTabText'] .'</a></li>';
				}

	      				
	      					
	      		
	      	?>
	      	
	        <!--
	        	media dropdown commented out for tive 10/12/2014

		        <li class="dropdown" >
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="mediaTab">MEDIA<span class="caret"></span></a>
		          <ul class="dropdown-menu inverse-dropdown" role="menu">
		            <li><a href="mediaSounds.php">MUSIC</a></li>
		            <li class="divider"></li>
		            <li><a href="mediaVisuals.php">VISUALS</a></li>

		          </ul>
		        </li>

	    	-->
	      </ul>


	      <!--
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>
		-->

	      <ul class="nav navbar-nav navbar-right">
	      	<?php
	      	if(isset($_SESSION['admin'])){
					if($_SESSION['admin'] == 'true')
						echo '<li><a href="php/logout.php" id="logoutTab">' . $generalSettings['logoutTabText'] .' </a></li>';
			}
			?>
	        
	        <!--right side dropdown
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="#">Action</a></li>
	            <li><a href="#">Another action</a></li>
	            <li><a href="#">Something else here</a></li>
	            <li class="divider"></li>
	            <li><a href="#">Separated link</a></li>
	          </ul>
	        </li>
	    	-->
	      </ul>
	  		
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</body>	

<!-- GOOGLE Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55447516-1', 'auto');
  ga('send', 'pageview');

</script>

