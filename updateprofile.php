<!DOCTYPE html>

<html class="no-js">
<?php include 'includes/general/head.php';
if(logged_in()===false){
	header('Location:login.php');	
	exit();
	}
	
		
?>


<link rel="stylesheet" href="css/profile.css">
<body id="body">
	<?php include 'includes/general/userheader.php'?>
	<div class="container" id="content">
		<div class="event">
		<div class="row updateimage">
			<div class="col-md-12 col-xs-12" >
			<img src="img/back.png" class="userimage">
			<br>
			<a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i><br>Update Profile Photo</a>
		</div>
		
		<div class="row">	
			<div class="col-md-6 col-xs-12 updateprofile">
			<br>
			<h2>Update Profile Details</h2>
			<hr>
			
			
			<h4>Add new Email </h4><input placeholder=""></input>
			<h4>Change Phone Number </h4><input placeholder=""></input>
			<br>
			<input type="submit" name="submit" value="Save" class="btn btn-transparent"></input>
			</div>
			<div class="col-md-6 col-xs-12 changepass">
			<br>
			<h2>Change Password</h2>
			<hr>
			
			<h4>Current Password </h3><input></input>
			<h4>New Password </h3><input></input>
			<h4>Repeat Password </h3><input></input>
			<br>
			<input type="submit" name="submit" value="Change Password" class="btn btn-transparent"></input>
			
			
			</div>
		</div>
		</div>	
	</div>
		
	
	

	<?php include'includes/general/footer.php';?>

	

	<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.nav.js"></script>
	
</body>

</html>
