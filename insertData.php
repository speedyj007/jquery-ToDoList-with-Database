
<?php

$conn = new mysqli("localhost","root","","register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$itemsErr = "";
$items = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    
    if (empty($_POST["postitems"])) {
    $itemsErr = "";
	} else {
    $items = test_input($_POST["postitems"]);
  }
    
    
}


	function test_input($data)

{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}

$sql = "select * from list_9874597415 where items = '$items' ";
$result = $conn->query($sql);

if ($result->num_rows >=1) {
	
	while($row = $result->fetch_assoc()) {
            echo 'duplicate entry, cant add';
            
        }
        }
else{
$stmt = $conn->prepare("insert into list_9874597415(items) values(?)");
$stmt->bind_param("s",$items);

$stmt->execute();

if($stmt==true)
{
    echo 'data inserted';
}
else{
    echo 'Error :'. mysqli_error($conn);
}


}
?>