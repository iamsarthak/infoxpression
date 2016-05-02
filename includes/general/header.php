<header id="navigation" class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<?php if(logged_in()===true){echo "<div class=\"usericon dropdown\"><a href=\"profile.php\"><i class=\"fa fa-user fa-2x navbar-toggle\" aria-hidden=\"true\"></i></a></div>"; }?>
			</div>
			<nav class="collapse navbar-collapse" role="Navigation">
				<ul id="nav" class="nav navbar-nav nav-justified">
					
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
					
					if(logged_in()===false)
					{
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
							<li><a href="mynotifications.php">Notifications</a></li>
							<li><a href="mymessages.php">Message</a></li>
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