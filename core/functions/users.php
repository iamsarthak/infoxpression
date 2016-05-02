<?php 

function logged_in(){

return (isset($_SESSION["user_id"])) ? true : false;
}

/*--------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------*/
function user_data($user_id){//this function can accept & return n number of parameter.
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$data=array();
	$user_id= (int)$user_id;
	$func_num_args = func_num_args();
	// echo $func_num_args; //To check number of arguments we passed
	$func_get_args = func_get_args();
	//echo $func_get_args; // To check the arguments we passed
	if($func_num_args>1){
		unset($func_get_args[0]);
	$fields= '`'.implode('`,`',$func_get_args).'`';
	
	$query="SELECT $fields FROM `user` WHERE  `user_id` =$user_id";
	 
	$result= mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
	//print_r($data); To retrieve all the data
	
	return $data;
	
	}

	
}

function user_exists($username){
	
	//$username= sanitize($username);
	
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$sql_username = "SELECT * FROM `user` WHERE `username`='$username' ";
	$query_username = mysqli_query($con, $sql_username); 
	$username_check = mysqli_num_rows($query_username);
	

	
	
return $username_check;
}

function user_id_from_username($username){

	//$username=sanitize($username);
	//$sql_user_id_from_username = "SELECT user_id FROM users WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
					$result=$con->query("SELECT user_id from user WHERE username='$username' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$user_id_from_username=$row['user_id'];

					return $user_id_from_username;
}

function user_state($username){

	
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
					
	$sql_user_state = "SELECT `user_id` FROM `user` WHERE `username`='$username' AND `activeaccount`='1' LIMIT 1";
	$query_user_state = mysqli_query($con, $sql_user_state); 
	$user_state_check = mysqli_num_rows($query_user_state);
	
	return $user_state_check;
	
}	
function user_active($username){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$username= sanitize($username);
	
	$sql_user_active = "SELECT user_id FROM user WHERE username='$username' AND active='1' LIMIT 1";
	$query_user_active = mysqli_query($con, $sql_user_active); 
	$user_active_check = mysqli_num_rows($query_user_active);
	return $user_active_check;
	
}	

/*--------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------------------*/			
//Functions Regarding Profile page

function getlastpostid($user_id){//earlier the name was getpost id

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT last_post_id from last_post_id WHERE user_id='$user_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$last_post_id=$row['last_post_id'];
					return $last_post_id;
}

function getpostid($user_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	//$sql_user_id_from_username = "SELECT user_id FROM user WHERE  username='$username' ";
				//$query_user_id_from_username = mysqli_query($con, $sql_checkpassword_username); 
				
					$result=$con->query("SELECT last_post_id from last_post_id WHERE user_id='$user_id' ")	;	
					$row= $result->fetch_array(MYSQLI_BOTH);
					$last_post_id=$row['last_post_id'];
					return $last_post_id;
}
function getlastcommentid($post_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT last_comment_id from last_comment_id WHERE post_id='$post_id' ")	;	
	$row= $result->fetch_array(MYSQLI_BOTH);
	$last_comment_id=$row['last_comment_id'];
	return $last_comment_id;
}
function getlastreplyid($comment_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT last_reply_id from last_reply_id WHERE comment_id='$comment_id' ")	;	
	$row= $result->fetch_array(MYSQLI_BOTH);
	$last_reply_id=$row['last_reply_id'];
	return $last_reply_id;
}
function getuserid($post_id){//earlier the name was getpost id, I am keeping this function in order to keep any bug off the shore.

	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$result=$con->query("SELECT user_id from post WHERE post_id='$post_id' ")	;	
	$row= $result->fetch_array(MYSQLI_BOTH);
	$user_id=$row['user_id'];
	return $user_id;
}


//Function to get the data of user post
function user_post_data($post_id){//this function can accept & return n number of parameter.
	$data=array();
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	$user_id= (int)$user_id;
	$func_num_args = func_num_args();
	// echo $func_num_args; //To check number of arguments we passed
	$func_get_args = func_get_args();
	//echo $func_get_args; // To check the arguments we passed
	if($func_num_args>1){
		unset($func_get_args[0]);
	$fields= '`'.implode('`,`',$func_get_args).'`';
	
	$query="SELECT $fields FROM `post` WHERE  `post_id` =$post_id";
	 
	$result= mysqli_query($con,$query);
	$data=mysqli_fetch_assoc($result);
	//print_r($data); To retrieve all the data
	
	return $data;
	
	}

	
}


//Function to insert post
function insert_post($insert_data){
	//array_walk($register_data,'array_sanitize');
	//$conp = mysqli_connect("localhost","root","","mycms");
		$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `posts` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
}	

//Function to insert New Post
function insert_new_post($insert_data){
	//array_walk($register_data,'array_sanitize');
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `post` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
}

//Function to insert status
function insert_status($insert_status){
	//array_walk($register_data,'array_sanitize');
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
		
		$data='\'' .implode('\',\'',$register_data). '\'';

	$fields='`'.implode('`,`',array_keys($register_data)).'`';
	$query="INSERT INTO `posts` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
}

//Insert New Comment
function insert_new_comment($insert_data){
	//array_walk($register_data,'array_sanitize');
$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
		
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `comment_post` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
	
}
//Insert New Reply

function insert_new_reply($insert_data){
	//array_walk($register_data,'array_sanitize');
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
		$data='\'' .implode('\',\'',$insert_data). '\'';

	$fields='`'.implode('`,`',array_keys($insert_data)).'`';
	$query="INSERT INTO `reply_comment` ($fields) VALUES ($data)";

	mysqli_query($conp,$query);
	
	
}
//update last post id
function update_last_post_id($user_id,$post_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	

	$query="UPDATE `last_post_id` SET `last_post_id`=$post_id WHERE `user_id`=$user_id ";
	
	mysqli_query($con,$query);
	
	

}

//update last comment id
function update_last_comment_id($post_id,$comment_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	

	$query="UPDATE `last_comment_id` SET `last_comment_id`=$comment_id WHERE `post_id`=$post_id ";
	
	mysqli_query($con,$query);
	
	

}
//Update last reply Id
function update_last_reply_id($comment_id,$reply_id){
	
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	

	$query="UPDATE `last_reply_id` SET `last_reply_id`=$reply_id WHERE `comment_id`=$comment_id ";
	
	mysqli_query($con,$query);
	
	

}

//To check user upvoted the post or not
function user_post_upvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `upvote_post` WHERE `who_id`='$user' AND `post_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$upvote_post_check= mysqli_num_rows($query_email);
	return $upvote_post_check;
	
}
function user_post_downvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `downvote_post` WHERE `who_id`='$user' AND `post_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$downvote_post_check = mysqli_num_rows($query_email);
	return $downvote_post_check;
	
}	
//To check user upvoted the comment or not
function user_comment_upvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `upvote_comment` WHERE `who_id`='$user' AND `comment_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$upvote_comment_check= mysqli_num_rows($query_email);
	return $upvote_comment_check;
	
}
function user_comment_downvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `downvote_comment` WHERE `who_id`='$user' AND `comment_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	 $downvote_comment_check= mysqli_num_rows($query_email);
	return  $downvote_comment_check;
	
}	//To check user upvoted the post or not
function user_reply_upvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `upvote_reply` WHERE `who_id`='$user' AND `reply_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$upvote_reply_check = mysqli_num_rows($query_email);
	return  $upvote_reply_check;
	
}
function user_reply_downvote_exists($user,$id){
	$con = mysqli_connect("localhost","techspac_infox","Rajivjha1996","techspac_infox");
	
	$sql_email = "SELECT * FROM `downvote_reply` WHERE `who_id`='$user' AND `reply_id`=$id ";
	$query_email = mysqli_query($con, $sql_email); 
	$downvote_reply_check = mysqli_num_rows($query_email);
	return $downvote_reply_check;
	
}	


?>