			<div class="col-md-3 hidden-xs profile ">
			 <img src="img/back.png" class="profile-image">
			 
			 
			<?php if($user1==$user2){?><div id="changepro"><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a></div><?php } ?>
			 <a href="profile.php"><h2><?php echo $profile_data['name'];?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $profile_data['institute'];?></a><?php if($user1==$user2){?><a href="updateprofile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <?php } ?>
							
							</li>
							<li><a href="#"><?php echo $profile_data['email'];?></a></li>
							<li><a href="#"><?php echo $profile_data['batch'];?></a></li>
							<li><a href="#"><?php echo $profile_data['branch'];?></a></li>
							<li><a href="#"><?php echo $profile_data['state'];?></a></li>
							<li><a href="#"><?php echo $profile_data['mobile'];?></a></li>
							<li><a href="#"><?php echo "USERNAME".$user1;?></a></li>
							<li><a href="#"><?php echo "Loggedin user".$user2;?></a></li>
							
			 </ul>
			 
			</div>
			<div class="visible-xs profile">
			 <img src="img/back.png" class="profile-image">
			 <div id="changepro"><?php if($user1===$user2){?><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a><?php } ?></div>
			 <a href="profile.php"><h2><?php echo $profile_data['name'];?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $profile_data['institute'];?></a><?php if($user1===$user2){?><a href="updateprofile.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php } ?> 
							
							</li>
							<li><a href="#"><?php echo $profile_data['email'];?></a></li>
			 
			</ul>
			<br>
			<!--a href="#content"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a-->
			</div>
		
		
	