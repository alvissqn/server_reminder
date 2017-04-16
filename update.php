<?php
include("database.php");
$response = array();
$row = array();
if(isset($_POST["act"]) == "update") {
	$congviec = $_POST["congviec"];
	$noidung  = $_POST["noidung"];
	$ngay = convert_date($_POST["ngay"]);
	$thoigian = $_POST["thoigian"];
	$taskid = $_POST["idtask"];
	$res = mysql_query("UPDATE list_task SET titletask = '".$congviec."', content_task= '".$noidung."', date_task ='".$ngay."', time_task ='".$thoigian."' WHERE taskid='".$taskid."'");
	if($res) {
		$response["success"] = 1;
		$response["message"] = "Update thành công"; 
	} else {
		$response["success"] = 0;
		$response["message"] = "Lỗi trong quá trình update";
	}
}
else {
	$response["success"] = 0;
	$response["message"] = "Required field(s) is missing";
	echo json_encode($response);
}
?>