<?php 
/**
 * 
 */
 class Task
 {
 	public function getAllTask() {
 		$data = array();
	 	 $r = mysql_query("SELECT * FROM list_task, user WHERE list_task.userid = user.uid ORDER BY taskid DESC");
	 	 while($row = mysql_fetch_array($r)) {
	 	 	$data[] = $row;
	 	 }
 	 	return $data;
 	}
 	public function getTask($idtask) {
 		$r = mysql_query("SELECT * FROM list_task WHERE taskid = $idtask");
 		$data = mysql_fetch_array($r);
 		return $data;
 	}

 	public function deleteTask($idtask) {
 		$r = mysql_query("DELETE FROM list_task where taskid = $idtask");
 		if($r)
 		{
 			echo "<script>alert('Xoá Thành Công');</script>";
 			echo "<script>window.location='?act=dstask';</script>";
 		}
 		else {
 			echo "<script>alert('Xoá không thành công');</script>";
 			echo "<script>window.history.back();</script>";
 		}
 	}

 } ?>
