<!DOCTYPE HTML>
<html>
<head>
	<title>index page</title>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>

<?php 

	require "core.php";
	require "connect.php";
	$id=$_SESSION['id'];
	 if($id==0)
	 	header("Location:login.php");
	 function find($data){
	 	global $id;
	 global $link;
	$query="SELECT `$data` FROM `users` WHERE `id`='$id'";
	$result=mysqli_query($link,$query);
	$output=mysqli_fetch_assoc($result);
	return $output["$data"];
}
	



 ?>

<body>
	<h1>Welcome <?php echo find("username");?></h1>
	<form  action="logout.php" method="POST" >
	<input type="submit" value="log out" id="submit">
	
</body>
 </html>