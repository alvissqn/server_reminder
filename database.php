<?php 
	$server = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "android";
	$link = mysql_connect($server,$db_user,$db_pass) or die("Could not connect server");
	if($link)
	{
		mysql_select_db($db_name,$link) or die("Could not connect database");
	}
	function convert_date($date) {
		return date("Y-m-d",strtotime($date));
	}
 ?>