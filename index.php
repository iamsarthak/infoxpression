<?php include'core/init.php';
?>
<html>

<head>

<title>InfoX 2016 | Annual Tech fest of USICT, GGSIPU </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="infox usict infoxpression technical fest ggsipu ipu march festival">
	<meta name="author" content="Prabhanshu Gupta">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#481111"/>
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
	
	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	<script src="js/jquery.nav.js"></script>
	<script src="js/three.min.js"></script>
	<script src="js/CanvasRenderer.js"></script>
	<script src="js/projector.js"></script>
	
	<script src="js/js2.js"></script>																
	
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">
	
</head>


<body>

<section class="canvas-wrap">
        
		<div id="canvas"></div>
		<div class="canvas-content">
		<header id="navigation" class="navbar navbar-inverse" style="background-color:rgba(0,0,0,0.3)">
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php if(logged_in()===true){
				echo "<div class=\"usericon dropdown\"><a href=\"profile.php\"><i class=\"fa fa-user fa-2x navbar-toggle\" aria-hidden=\"true\"></i></a></div>";
				} ?>
			</div>
			<nav class="collapse navbar-collapse" role="Navigation">
			
				<ul id="nav" class="nav navbar-nav nav-justified nav-home">
					<li><a href="index.php">HOME</a>
					</li>
					<li><a href="about.php">ABOUT US</a>
					</li>
					<li><a href="events.php">EVENTS</a>
					</li>
					<li><a href="sponsors.php">SPONSORS</a>
					</li>
					<li><a href="team.php">TEAM</a>
					</li>
					<li><a href="downloads.php">DOWNLOADS</a>
					</li>
					<li><a href="contact.php">CONTACT US</a>
					</li>
					<li>
					<?php 
					if(logged_in()===false){ 
					
				?><a href="login.php"><b>LOGIN / REGISTER</b></a>
				<?php
				}
					else {
						?><div class="usericon dropdown">
						<button class="btn btn-primary dropdown" type="button" data-toggle="dropdown">
						<i class="fa fa-user fa-2x" aria-hidden="true"></i>
						</button>
						  <ul class="dropdown-menu">
							<li><a href="profile.php">Your Profile</a></li>
							<li><a href="#">Notifications</a></li>
							<li><a href="#">Message</a></li>
							<li><a href="logout.php">Log out</a></li>
						  </ul>
						</div>
						
						
						
						<?php
						}
						?>
					</li>
					
				</ul>
				
				
			</nav>
			

		</div>
		
	</header>
	<div class="headback container">
	<div class="title"><h2> INFOXPRESSION 2016 <br><h3> TECHFEST | USICT</h3><h3> Sept 2nd - 4th 2016<br><a href="beasponsor.php" class="btn btn-transparent">Call For Sponsors</a></h3>
	</h2>
	
	</div>
	
	</div>
	
	</div>
</section>
	
</body>

</html>