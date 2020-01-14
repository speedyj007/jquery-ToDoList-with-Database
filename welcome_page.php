<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      
      
</head>
<div class = "container">
	<br>
		<label class = "h1"  ><u>Welcome</u> <u>Page</u></label>
	<br><br>
 <?php

$conn = new mysqli("localhost","root","","register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];

$emailErr = $passwordErr = "";
$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	if (empty($_POST["email"])) {
    $emailErr = "First Name is required";
	} else {
    $email = test_input($_POST["email"]);
  }
  
  if (empty($_POST["password"])) {
    $passwordErr = "Password Name is required";
	} else {
    $password = test_input($_POST["password"]);
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
	
	while($row = $result->fetch_assoc()) {
			echo "<label class = 'welcome'  >welcome ".$row["firstname"]." ".$row["lastname"];
	}
}

else{
	
	echo "No user's found. please register";
}
	
   

echo "<br><br>";
require_once 'ToDoList.php';

?>
</body>
  
</html>