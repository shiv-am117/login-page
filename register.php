<!DOCTYPE HTML>

<html>
<head>
	<title>register page</title>
	<link rel="stylesheet" type="text/css" href="register.css">

</head>
<body >
	<div id="main">
		<h1 id="title">Register</h1>
		<?php
		
	if(isset($_POST['n'])&&isset($_POST['p'])&&isset($_POST['e'])&&isset($_POST['confirm_password'])&&isset($_POST['u_name'])&&isset($_POST['u_surname'])){
		$username=htmlentities($_POST['n']);
				$password=md5(htmlentities($_POST['p']));
				$email=htmlentities($_POST['e']);
				$firstname=htmlentities($_POST['u_name']);
				$surname=htmlentities($_POST['u_surname']);
				$confirm_pass=md5(htmlentities($_POST['confirm_password']));
		if(!empty($username)&&!empty($password)&&!empty($email)&&!empty($firstname)&&!empty($surname)&&!empty($confirm_pass)){

			
			require "connect.php";
			
				if(username_exists($username))
					echo "Username already exists";
				else if(email_exists($email))
					echo "Already registered with this id";	
				else if($password!=$confirm_pass)
					echo "Passwords doesn't match";
				else {$query="INSERT INTO `users` VALUES ('' ,'$username','$password','$email','$firstname','$surname')";
					echo 'user registered';
					mysqli_query($link,$query);}
		}	
	}
	?>
			<form id="form" method="POST" action="register.php">
			<input required="required" type="text" name="n" placeholder="username" value=<?php
				if(isset($_POST['n'])) echo $username;?>><br>
			<input required="required" type="password" name="p" placeholder="password" ><br>
			<input required="required" type="password" name="confirm_password" placeholder="confirm password"><br>
			<input required="required" type="email" name="e" placeholder="email" value=<?php
				if(isset($_POST['e'])) echo $email;?>><br>
			<input required="required" type="text" name="u_name" placeholder="first name" value=<?php
				if(isset($_POST['u_name'])) echo $firstname;?>><br>
			<input required="required" type="text" name="u_surname" placeholder="surname" value=<?php
				if(isset($_POST['u_surname'])) echo $surname;?>><br>
			
			<button id="submit">Register</button>
		</form>
		
	</div>
	</body>
	</html>


