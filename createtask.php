<?php
include("database.php");
$response = array();
if( isset($_POST["congviec"]) && isset($_POST["noidung"]) && isset($_POST["ngay"]) && isset($_POST["thoigian"]) && isset($_POST["uid"])) {
	$congviec = $_POST["congviec"];
	$noidung  = $_POST["noidung"];
	$ngay = convert_date($_POST["ngay"]);
	$thoigian = $_POST["thoigian"];
	$userid = $_POST["uid"];
	$result = mysql_query("INSERT INTO list_task(userid, titletask, content_task, date_task, time_task) VALUES('".$userid."','".$congviec."','".$noidung."','".$ngay."','".$thoigian."')");

	if($result) {
		$queryId = mysql_query("Select * From list_task order by taskid DESC limit 0,1");
		$rs = mysql_fetch_array($queryId);
		$response["idtask"] = $rs["taskid"];
		$response["success"] = 1;
		$response["message"] = "Thêm công việc thành công";
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