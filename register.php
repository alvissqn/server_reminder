<?php 
include('database.php');
$response = array();
if(isset($_POST["username"]) && isset($_POST["password"]))
{
	$result='';
	$name = $_POST["username"];
	$pass = $_POST["password"];
	$result = mysql_query("INSERT INTO user(user, pass) VALUES('".$name."','".$pass."')");
	if($result) {
		$response["success"] = 1;
        $response["message"] = "Register successfully created.";
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
