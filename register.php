<!DOCTYPE HTML>

<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="index1.css">

</head>
<body >
	<div id="main">
		<h1 id="title">Register</h1>
		<?php
	if(isset($_POST['n'])&&isset($_POST['p'])&&isset($_POST['e'])){
		$username=htmlentities($_POST['n']);
			$password=htmlentities($_POST['p']);
			$email=htmlentities($_POST['e']);
			$file=fopen("input.txt","a");
			fwrite($file,$username.",".$email."\n");
			echo "User Registered";
	}
	?>
			<form id="form" method="POST" action="register.php">
			<input required="required" type="text" name="n" placeholder="username"><br>
			<input required="required" type="password" name="p" placeholder="password"><br>
			<input required="required" type="email" name="e" placeholder="email"><br>
			
			<button id="submit">Register</button>
		</form>
		
	</div>
	</body>
	</html>


