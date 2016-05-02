			<div class="col-md-3 hidden-xs profile ">
			 <img src="img/back.png" class="profile-image">
			 <?php if($user1==$user2){?><div id="changepro"><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a></div><?php } ?>
			 <a href="profile.php"><h2><?php echo $user_data['name'];?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $user_data['institute'];?></a><a href="updateprofile.php"><?php if($user1==$user2){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> <?php } ?>
							
							</li>
							<li><a href="#"><?php echo $user_data['email'];?></a></li>
							<li><a href="#"><?php echo $user_data['batch'];?></a></li>
							<li><a href="#"><?php echo $user_data['branch'];?></a></li>
							<li><a href="#"><?php echo $user_data['state'];?></a></li>
							<li><a href="#"><?php echo $user_data['mobile'];?></a></li>
							
							
			 </ul>
			 
			</div>
			<div class="visible-xs profile">
			 <img src="img/back.png" class="profile-image">
			 <?php if($user1==$user2){?><div id="changepro"><a href="updateprofile.php"><i class="fa fa-camera-retro fa-2x" aria-hidden="true"></i></a></div><?php }?>
			 <a href="profile.php"><h2><?php echo $user_data['name'];?></h2></a>
			 <ul class="details">
							
							<li><a href="#"><?php echo $user_data['institute'];?></a><a href="updateprofile.php"><?php if($user1==$user2){?><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><?php } ?>
							
							</li>
							<li><a href="#"><?php echo $user_data['email'];?></a></li>
			 
			</ul>
			<br>
			<!--a href="#content"><i class="fa fa-arrow-down fa-2x" aria-hidden="true"></i></a-->
			</div>
		
		
	