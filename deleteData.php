

<?php

$deleteRow = $_POST["postdelete"];

 $conn = new mysqli("localhost", "root", "", "register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "delete from list_9874597415 where items = '$deleteRow' order by id desc limit 1";
 $result = $conn->query($sql);
 
 if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}
 
 
?>

