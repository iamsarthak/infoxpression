<?php include'core/init.php';
protect_logged_page();

?>
<?php
//error_Reporting(0);

?>

<?php
include 'core/db/connect.php';
?>
<!DOCTYPE html>

<html lang="en">

<head>
        <title>Login | Signup InfoX 2016</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:100,300,400,700,900,300italic,400italic,700italic,900italic" type="text/css" media="all">
	<script src="js/jquery-1.11.0.min.js"></script>	
	
		<link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/styles.css" type="text/css">
		
        
    </head>
    <style>
 +	#passcheck{
 +	color:red;
 +	}
 +	</style>
    <body style="background-color:#000000;">
       <?php include'includes/general/header.php'?>
	   <div class="signup" style="background-image: url(img/back.png);">
            <div class="middle">
                <div class="signup-widget widget">
                    <div class="widget-header">
                        <table>
                            <tbody><tr>
                                <td id="tab-login">
                                    <a href="login.php">
                                        Login
                                    </a>
                                </td>
                                <td><a href="index.html"><img width="150px" src="img/logo-infox.png"></a></td>
                                <td id="tab-signup" class="current">
                                    <a href="signup.php">Register</a>
                                </td>
                            </tr>
                        </tbody></table>
                    </div>
                    <div class="widget-body">
                        <form id="signup-form" method="post" action="register.php">
                            <input type="email" name="email" placeholder="Email" required autocomplete="off">
                            <input type="text" name="name" placeholder="Name" required autocomplete="off">
                            <input type="text" name="username" placeholder="Username" required autocomplete="off">
                            <input type="text" name="mobile" placeholder="Mobile Number" required autocomplete="off">
                            <input type="text" name="state" placeholder="State" required autocomplete="off">
                            <input type="text" name="institute" placeholder="Institute" required autocomplete="off">
                            <input type="text" name="branch" placeholder="Branch" required autocomplete="off">
                            <input type="text" name="batch" placeholder="Batch" required autocomplete="off">
                  
                            <input type="password" name="password" placeholder="Password"  required autocomplete="off"id="txtpass">
                            <input type="password" name="confirm_password" placeholder="Re-Type Password" required autocomplete="off" id="txtpassconf" onkeyup="checkPass()">
                            <div id="password-characters"></div>
                             <div id="passcheck"></div>
                            <!--button id="submit" type="submit" name="register"><input type="submit" name="register" value="Lets Join Hands" /> 
							</button-->
							<input id= "submit"type="submit" name="register" value="Lets Join Hands" /> 
							
                        </form>
                    </div>
                </div>
            
         
                
            </div>
        </div>
<script>
 function checkPass() {
     
     var password = $("#txtpass").val();
     var confirmPassword = $("#txtpassconf").val();
 
     if (password != confirmPassword)
         $("#passcheck").html("Passwords do not match!");
     else
        $("#passcheck").html("Passwords match.");
 }  
        
</script>

            
   </body></html>