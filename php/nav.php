<!doctype html>
<html lang="en">

<head>
	<link rel="icon" href="img/favicon.ico" />
 	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script type='text/javascript' src='js/jquery-2.1.1.min.js'></script>
	<script type='text/javascript' src='js/bootstrap.js'></script>
	<script type='text/javascript' src='js/moment.min.js'></script>
	<script type='text/javascript' src='js/tabsloader.js'></script>
	
</head>
<style>
@font-face{
	font-family: "Canterbury";
	src: url('fonts/Canterbury.ttf');
}
.navbar-inverse {
    background-color: #000000;
}
.navText{
	font-family: 'Canterbury';
	font-size: 20px;
}
.navbar-brand{
	font-size: 25px;
}
.dropdown:hover .dropdown-menu {
   	display: block;    
}
</style>

<body bgcolor='#000'>
	<nav class="navbar navbar-inverse navText" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header active">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="index.php">Cuhlt</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav" id="MainTabs">
	      	<li><a href="index.php" id="homeTab">Home</a></li>
	      	<li><a href="mediaSounds.php" id='musicTab'>Music</a></li>
	      	<li><a href="mediaVisuals.php" id='visualsTab'>Visuals</a></li>
	        <!--COMMENTED OUT FOR TIVE 10/10/14
			<li><a href="team.php" id="teamTab">TEAM</a></li>
		-->
	        <!--
	        	Commented out for tive 10/12/2014

	        <li class="dropdown" >
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="mediaTab">MEDIA<span class="caret"></span></a>
	          <ul class="dropdown-menu inverse-dropdown" role="menu">
	            <li><a href="mediaSounds.php">MUSIC</a></li>
	            <li class="divider"></li>
	            <li><a href="mediaVisuals.php">VISUALS</a></li>

	          </ul>
	        </li>
	    -->
	        <li><a href="blog.php" id="blogTab">Blog</a></li> 
	      </ul>


	      <!--
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Submit</button>
	      </form>


	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#">Link</a></li>
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
	      </ul>
	  		-->
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</body>	

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-55447516-1', 'auto');
  ga('send', 'pageview');

</script>


</html>