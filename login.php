
<?php

$conn = new mysqli("localhost","root","","register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$emailErr = $passwordErr = "";
$email = $password = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["postemail"])) {
    $emailErr = "First Name is required";
	} else {
    $email = test_input($_POST["postemail"]);
  }
  
  if (empty($_POST["postpassword"])) {
    $passwordErr = "First Name is required";
  } else {
    $password = test_input($_POST["postpassword"]);
  }
	
	
	}
	
	
	function test_input($data)

{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	
}
$passthru = md5($password);




$sql = "select * from register where email = '$email' and password = '$passthru'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	echo "login success";
}

else{
	
	echo "No Users Found";
}

	
	
	?>