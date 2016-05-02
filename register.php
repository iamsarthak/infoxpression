<?php include'core/init.php';
protect_logged_page();



?>

<?php
$con=mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
?>
    <div id="thispagecontent">
<?php
    if(isset($_POST['register'])){
		
		
		 $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));

		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$state=$_POST['state'];
		$institute=$_POST['institute'];
		$branch=$_POST['branch'];
		$batch=$_POST['batch'];
		$repeatpassword=$_POST['confirm_password'];
		$mobile=$_POST['mobile'];
	    $username=$_POST['username'];
	$sql = "SELECT user_id FROM user WHERE username='$username' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$username_check = mysqli_num_rows($query);
	// -------------------------------------------
	$sql = "SELECT user_id FROM user WHERE email='$email' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$email_check = mysqli_num_rows($query);
	// -------------------------------------------
	$sql = "SELECT user_id FROM user WHERE mobile='$mobile' LIMIT 1";
    $query = mysqli_query($con, $sql); 
	$mobile_check = mysqli_num_rows($query);
	
		if ($email_check > 0){ 
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>Email address is registered with us already.</span>";
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>If you are a registered user , kindly <a href=\"signin.php\"> log in</a></span>";
        exit();
	}
	else if($username_check > 0){ 
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>Enrollment Number/CET roll No.  is registered with us already.</span>";
        exit();
	}
	else if ($mobile_check > 0){ 
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>Mobile Number is registered with us.</span>";
        exit();
	}
	else if (strlen($mobile) < 10 || strlen($mobile) > 10) {
        echo "Invalid Mobile Number.";
        exit(); 
    }
	
	else if ($password!=$repeatpassword) {
        
        echo "<span style='height:36px;padding:5px;background-color: rgb(255, 156, 0);'>Password Didn't Matched.</span>";
       exit(); 
    }
	else
		{
			$emailcode = $ip;
		$sql = $con->query("INSERT INTO user (name,email,institute,branch,batch,state, password,mobile,username,ip,date,emailcode)
         		Values ('{$name}','{$email}','{$institute}','{$branch}','{$batch}','{$state}','{$password}','{$mobile}','{$username}','{$ip}',NOW() ,'{$emailcode}')");
         		
         		$to = "$email";							 
		$from = "infox@techspace.club";
		$subject = 'Infox Account Activation';
		 $message ="<a href='http://www.techspace.club/infox16/activation.php?action=activation&email=$email&emailcode=$emailcode'>
		 Click me to activate</a>";
				
		$headers = "From: $from\n";
        $headers .= "MIME-Version: 1.0\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		
         		$check_sent = mail($to, $subject, $message, $headers);
         		
if(!$check_sent) {   
     echo "Error! Invalid Email Id . Please Try Again.";   
} else {
    echo "Success";
}	
		echo "Successfully Registered"; 
		echo "  ";
		echo "Check your email id to complete the registration. Check your spam folder too.";
				
header('refresh: 10; url=login.php'); // redirect the user after 10 seconds
#exit; // note that exit is not required, HTML can be displayed.
?>
<p>You will be redirected in <span id="counter">5</span> second(s).</p>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=0) {
        location.href = 'login.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },500);
</script>

<?php
	    exit();
	    
	    }
	
	}
	


?>
