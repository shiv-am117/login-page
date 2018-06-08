<!DOCTYPE HTML>

<?php 
session_start();
if(!isset($_SESSION['username'])||$_SESSION['username']==NULL){
	header("Location : login.php");
}

 ?>
<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>
	<h1>Welcome <?php echo $_SESSION['username'];?></h1>
</body>
 </html>