
<!DOCTYPE HTML>

<?php

session_start();
$_SESSION['loggedin']=false;
$user="sh";
$pass="sh";







?>


<html>
<head>
	<title>login page</title>
	<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body >

	
	<div id="main">
		<h1 id="title">Login Page</h1>
		<?php

		if(isset($_POST['n']) && isset($_POST['p'])){
	if( $_POST['n'] == $user && ($_POST['p'] == $pass)) {
		$_SESSION['loggedin']=true;
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
		?>
		<form id="form" method="POST" action="login.php">
			<input required="required" type="text" name="n" placeholder="name"><br>
			<input required="required" type="password" name="p" placeholder="password"><br>
			
			<button id="submit">Log in</button>
		</form>
		
	</div>



</body>
</html>




