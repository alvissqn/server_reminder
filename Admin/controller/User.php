<?php 
class User
{
	public function __construct(){

	}
	public function getAllUser(){
		$result = mysql_query("SELECT * FROM user");
		while($row = mysql_fetch_array($result))
		{
			$data[] = $row;
		}
		return $data;
	}
	public function getUser($id){
		$result = mysql_query("SELECT * FROM user where uid ={$id}");
		while($row = mysql_fetch_array($result)) {
			$data = $row;
		}
		return $data;
	}
}
?>