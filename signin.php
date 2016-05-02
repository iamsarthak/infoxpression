<?php include'core/init.php';
protect_logged_page();

?>
<?php


if(empty ($_POST)=== false){
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$active=1;
	$sql = "SELECT user_id FROM user WHERE email='$email' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$email_check = mysqli_num_rows($query);
	$sqlactive = "SELECT user_id FROM user WHERE email='$email' AND active='$active' LIMIT 1";
    $queryactive = mysqli_query($con, $sqlactive); 
	$active_check = mysqli_num_rows($queryactive);
	
	
	if(empty($email)===true||empty($password)===true){
		
		//$errors[]='value';
		$errors[]='You need to enter a username or password';
	}
	else if ($email_check < 1){ 
	$errors[]='We can\'t find you friend.Email is not registered with us. Have you registered yourself yet?';
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>Email is not registered with us.</span>";
        exit();
	}else if($active_check<1){
		$errors[]='The account is not activated yet';
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>Do activate your account via the e-mail you have recieved from Techspace.</span>";
        exit();
	}
	else{
		$sql = "SELECT user_id FROM user WHERE password='$password' AND email='$email' ";
    $query = mysqli_query($con, $sql); 
	$password_check = mysqli_num_rows($query);
	
	if($password_check>0){
	
	$result=$con->query("SELECT * from user WHERE email='$email'
		AND password='$password' ")	;	
		
		$row= $result->fetch_array(MYSQLI_BOTH);
		
		session_start();
		$activeaccount=1;
		$line=1;
		$_SESSION["user_id"]=$row['user_id'];
		$sqlactiveaccount = "UPDATE user SET activeaccount='{$activeaccount}' WHERE `email`='$email'";
				$queryaccount = mysqli_query($con, $sqlactiveaccount); 
				
		$sqlline = "UPDATE user SET line='{$line}' WHERE `email`='$email'";
				$queryline = mysqli_query($con, $sqlline); 
					
	    header('Location: profile.php');
	
	}
	else{
		$errors[]='Password Did not matched. if you forgot your ';
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>Email is not registered with us.</span>";
        exit();
	
		
	}	
}
}

?>