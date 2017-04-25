<?php
	include('database.php');
	$response = array();
	$row = array();
	if(isset($_GET["listitem"]))
	{
		$id = $_GET["listitem"];
		$result = mysql_query("SELECT * FROM list_task WHERE userid='".$id."' && status = 0");
		if($result)
		{
			$response["answers"] = array();
			while($r = mysql_fetch_array($result)){
				$row["taskid"] = $r["taskid"];
				$row["userid"] = $r["userid"];
				$row["titletask"] = $r["titletask"];
				$row["content_task"] = $r["content_task"];
				$row["date_task"] = $r["date_task"];
				$row["time_task"] = $r["time_task"];
				$row["device"] = $r["device"];
				array_push($response["answers"], $row);
			}
			echo json_encode($response);
		}
		else
		{
			$response["message"] = "Not have data!!";
		}
		// else{
		// 	$response["success"] = 1;
		// 	$response["message"] = "Select successfully";
		// 	echo json_encode($response);
		// }
	}
	else
	{
		$response["success"] = 0;
		$response["message"] = "Not Show List item page";
		echo json_encode($response);
	}
 ?>