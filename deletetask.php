<?php
include("database.php");
$response = array();
if(isset($_GET["taskid"])) {
	$taskid = $_GET["taskid"];
	$result = mysql_query("UPDATE list_task SET status = 1 WHERE taskid ='".$taskid."'");
	if($result) {
		$response["success"] = 1;
		$response["message"] = "Xoá công việc thành công";
		echo json_encode($response);
	} else {
		$response["success"] = 0;
		$response["message"] = "Lỗi trong quá trình xử lý";
		echo json_encode($response);
	}
} else {
	$response["success"] = 0;
	$response["message"] = "Required field(s) is missing";
	echo json_encode($response);
}

?>