<?php 
include("../database.php");
if(isset($_GET["do"]) && isset($_POST["btnLogin"]))
{
	if(isset($_POST["username"]) && isset($_POST["password"])) {
		$user = $_POST["username"];
		$pass = $_POST["password"];
		$r = mysql_query("SELECT email,password FROM admin Where email = '".$user."' && password = '".$pass."'");
		if($r)
			header('Location:admin.php');
		else
			echo "<script>alert('Sai Username hoặc Password');</script>";
	}
	
}
else {
	echo "<script>alert('Bị Sao Rồi');</script>";
}
?>