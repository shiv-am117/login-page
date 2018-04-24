
<?php 
session_start();
if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']==false){
	header("Location : login.php");
}
 ?>

 <h1>At last</h1>
 