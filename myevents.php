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
	<div class="container">
		<div class="row">
			
			<?php include 'includes/general/useraside.php'?>
			<div class="col-md-1"></div>
			<div class="col-md-8" id="content">
			 
			<div class="myevent row">

			<div class="col-xs-6"><a href="algoholics.php" class="event-title">Algoholics</a></div>
			<div class="col-xs-3"></div>
			<div class="col-xs-1"><a href="#"><i class="fa fa-check fa-2x" aria-hidden="true"></i></a></div>
			<div class="col-xs-1"><a href="#"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a></div>
			<div class="col-xs-1"><a href="#"><i class="fa fa-minus-circle fa-2x" aria-hidden="true"></i></a></div>
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
