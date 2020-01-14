
<?php

$updateRow = $_POST["postupdate"];
$taskId = $_POST["posttask"];

 $conn = new mysqli("localhost", "root", "", "register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "update list_9874597415 set items = '$updateRow' where id = '$taskId'";
 $result = $conn->query($sql);
 
 if ($conn->query($sql) == TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>

