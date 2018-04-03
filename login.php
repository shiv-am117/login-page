
<?php
if(isset($_GET['n'])&&isset($_GET['p'])&&isset($_GET['e'])){
	

$n = $_GET['n'];
$p=$_GET['p'];
$e=$_GET['e'];
$name=strtolower($n);

if($name=="shivam"&&$p=="Shivam@123") 
	header('Location:https://www.google.com');
else echo "Wrong username or password";
}
?>


