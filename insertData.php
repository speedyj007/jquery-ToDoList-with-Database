
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



?>