<?php

	$link=@mysqli_connect('localhost','root','');

	if(!$link||!@mysqli_select_db($link,'loginpage'))
		die("Connection Error");
function username_exists($name){

	global $link;
	$query="SELECT `username` FROM `users` WHERE `username`= '$name'";
	$result=mysqli_query($link,$query);
		if(mysqli_affected_rows($link)>0)
	return true;
		else
	return false;
	

}
function email_exists($email){

	global $link;
	$query="SELECT `email` FROM `users` WHERE `email`= '$email'";
	$result=mysqli_query($link,$query);
		if(mysqli_affected_rows($link)>0)
	return true;
		else
	return false;
	

}
function pass_match($name,$pass){

	global $link;
	$query="SELECT `password` FROM `users` WHERE `username`= '$name'";
	$result=mysqli_query($link,$query);
		
			$output=mysqli_fetch_assoc($result);
			if($output["password"]==$pass) return true;
			else return false;
		}


	


?>