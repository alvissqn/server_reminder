<?php

// array for JSON response
$response = array();

// check for post data
if (isset($_GET["name"])) {
    $message = $_GET['message'];
     $name = $_GET['name'];
    $ip = $_GET['ip'];
    $time = $_GET['time'];
    require_once __DIR__ . '/db_connect.php';

    // connecting to db
    $db = new DB_CONNECT();
    mysql_query("SET character_set_client=utf8");
    mysql_query("SET character_set_connection=utf8");
    // mysql inserting a new row
    $result = mysql_query("INSERT INTO hello ( name, message, ip, time ) 
    VALUES( '$name','$message', '$ip', '$time')");

    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        
        $response["success"] = 1;
        $response["message"] = "Hello successfully created.";

        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "Oops! An error occurred.";
        
        // echoing JSON response
        echo json_encode($response);
    }
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";

    // echoing JSON response
    echo json_encode($response);
}
?>