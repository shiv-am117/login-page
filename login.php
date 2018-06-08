
<!DOCTYPE HTML>

<?php

session_start();
$_SESSION['username']=NULL;
$user=array("sh","shivam","stb");
$pass=array("sh","shivam","pass");







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
			$username=htmlentities($_POST['n']);
			$password=htmlentities($_POST['p']);
			$count=0;
			while($count<count($user)){
	if(  $username== $user[$count] && ( $password== $pass[$count])) {
		$_SESSION['username']=$username;
		header("Location:index.php");
		break;
	}
	$count++;
	}
	if($count>=count($user)){
		echo '
		<div id="wrong">
		<h1>Wrong username or password</h1>

		</div>
		';
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




