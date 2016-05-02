<?php
error_reporting(E_ALL);

require 'db/connect.php';
require 'functions/general.php';
require 'functions/users.php';

session_start();
$session_user_id=$_SESSION["user_id"];
	
//$current_file= basename(_FILE_);

$current_file=explode('/',$_SERVER['SCRIPT_NAME']);
$current_file= end($current_file);

if(logged_in()=== true){
	
	$user_data= user_data($session_user_id,'name','username','password','email','emailcode','state','institute','branch','mobile','batch');
	$session_user_name=$user_data['username'];


	/*if(user_active($user_data['username'])!=1){
					session_destroy();	
					header('Location:index.php');
					exit();
				}
				/*
				
				if($current_file!=='changepassword.php'&& $current_file!=='logout.php' && $user_data['password_recover']==1){
					
					header('Location:changepassword.php/force');
					exit();
				}*/
	
}
$errors=array();
	
?>