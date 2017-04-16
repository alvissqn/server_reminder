<?php 
include('database.php');
$response = array();
$row = array();
if(isset($_GET["taskid"])) {
		$taskid = $_GET["taskid"];
		$result = mysql_query("SELECT * FROM list_task WHERE taskid ='".$taskid."'");
		if($result) {
			$response["answers"] = array();
			$r = mysql_fetch_array($result);
				$row["taskid"] = $r["taskid"];
				$row["userid"] = $r["userid"];
				$row["titletask"] = $r["titletask"];
				$row["content_task"] = $r["content_task"];
				$row["date_task"] = $r["date_task"];
				$row["time_task"] = $r["time_task"];
			array_push($response["answers"], $row);
			echo json_encode($response);
		} else {
			$response["success"] = 0;
			$response["message"] = "Lỗi trong quá trình xử lý";
			echo json_encode($response);
		}
		
} 
else
{
	$response["success"] = 0;
	$response["message"] = "Not Have Item Task";
	echo json_encode($response);
}

 ?>