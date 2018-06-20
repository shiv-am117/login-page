
<!DOCTYPE HTML>

<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body >
	<div id="main">
		<h1 id="title">Login Page</h1>
		<?php
			require "connect.php";
			require "core.php";
			$_SESSION['id']=0;
		if(isset($_POST['n']) && isset($_POST['p'])){
			if(!empty($_POST['n']) && !empty($_POST['p'])){
				$username=htmlentities($_POST['n']);
				$password=md5(htmlentities($_POST['p']));
				if(username_exists($username)&&pass_match($username,$password)){
		$query="SELECT `id` from `users` WHERE `username`='$username' ";
		$result=mysqli_query($link,$query);
		
			$output=mysqli_fetch_assoc($result);
			

			$_SESSION['id']=$output["id"];
			header("Location:index.php");
			
		
		}
		else{
			echo '
			<div id="wrong">
			<h1>Wrong username or password</h1>

			</div>
			';
		

	}
}
}
		?>
		<form id="form" method="POST" action="login.php">
			<input required="required" type="text" name="n" placeholder="username"><br>
			<input required="required" type="password" name="p" placeholder="password"><br>
			
			<button id="submit">Log in</button>
		</form>
		
	</div>
</body>
</html>




