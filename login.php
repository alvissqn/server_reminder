<?php 
include('database.php');
$response = array();
if(isset($_POST["username"]) && isset($_POST["password"]))
{
	$result='';
	$name = $_POST["username"];
	$pass = $_POST["password"];
	$result = mysql_query("Select * from user where user='".$name."' and pass='".$pass."'");
    $row = mysql_fetch_array($result);
	if(mysql_num_rows($result) > 0) {
		$response["success"] = 1;
        $response["userid"] = $row["uid"];
        $response["message"] = "Hello successfully login.";
        echo json_encode($response);
        //$result = "true";
    }else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        // echoing JSON response
        echo json_encode($response);
       //$result = "false";
    }
    //echo $result;
}else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    //echo $result = "Faile"; 
       // echoing JSON response
   echo json_encode($response);
}
 ?>
