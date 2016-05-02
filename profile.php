<!DOCTYPE html>

<html>
<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
?>

<?php

if(isset($_GET['username'])===true&&empty($_GET['username'])===false){
	$username=$_GET['username'];
	if(user_exists($username)== 1){
				$user_id=user_id_from_username($username);
				
				$user1=$user_id;//jiska username dala hai
				$user2=$_SESSION['user_id'];//jo logged in hai
				
				//$user_id=user_id_from_email($email);
				$profile_data =user_data($user_id,'name','email','username','mobile','state','batch','branch','institute');
								
								
								
								if(user_state($username)!=1){
					$errors[]='Sorry! The page is not accessible at the moment.Link might have destroyed or broken.';
					
				}
						
			}
			
	else{
		$errors[]='We can\'t find that Page on this link.You might be accessing a broken link.';
				
	}	
	
			
}
if(isset($_GET['username'])===false&&empty($_GET['username'])===true){
$user1=$_SESSION['user_id'];
			
$user2=$_SESSION['user_id'];//jo logged in hai
				
		$profile_data =user_data($user1,'name','email','username','mobile','state','batch','branch','institute');
						
}

			
if(empty($errors)=== false){
		
	?>
	<h2>We tried to Find the Page, but</h2>
<?php

echo output_errors($errors);
}
else
 {
?>





<link rel="stylesheet" href="css/profile.css">

<body id="body">
	
	
	<?php include 'includes/general/userheader.php'?>
	<div class="container">
		<div class="row">
			<?php include 'includes/general/aside.php'?>
			<div class="col-md-1"></div>
			<div class="col-md-8" id="content">
			
			<div class="newevent">
			
			<ul class="nav nav-tabs">
			    <li class="active" onclick="change(event)">
			        <a href="#tab1">New Post</a>
			    </li>
			
			    
			</ul>

			<div class="tab-content">
			    <!-- content of each tab is put inside a tab-pane or tab-pill -->
			    <div class="tab-pane active" id="tab1">
			    	<form action="" id="newpostform" method="post"></form>
			        <textarea rows="4" cols="100" name="new_post_content" required="required" form="newpostform" action="insert_new_post.php"  placeholder="Speak your mind"></textarea>
			    </div>
	
			</div>
			<button class="btn btn-transparent" type="submit" name="post" value="post" form="newpostform">Submit</button>
						
			
			</div>
			
			
			<hr/>
			<h3>Your Posts</h3>
			<hr/>
			
			<div class="myevent row">

			<div class="col-xs-12 col-md-12" style="text-align:center"><h2>We are working on something awesome. Stay tuned!</h2></div>
			
			</div>	
			
			<!--div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
			 
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
			
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
			
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div>	
				
			<div class="event">
			<img src="img/back.png" class="event-image">
			<div class="event-description">dwcwhcwdc wdcwjhbwdc wdcjhwcdjhc dwjhc<br>dwchbc<br>bwdc
			wbcicwbwdciub</div></div-->	
			
			</div>
		</div>	
		
	</div>
		
	
	

	<?php include'includes/general/footer.php'?>

	

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	
</body>
<?php
}
?>

</html>
