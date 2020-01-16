
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      
       <style>
      
th,td{
    border-bottom: 1px solid lightgrey;
    border-right: 1px solid lightgrey;
    padding: 2px 15px;
    font-family:Courier;
}

table{
    width:100%;
     margin-top: 50px;
     margin-bottom: 22px;
    
}
  </style> 
</head>
<body>
    <div class="container">
        <br>
        <h4 class = "h1"><u>Greetings</u> <u>of</u> <u>the</u> <u>Day</u>!! 
        
    </h4><br>
        <br>
        <label class = "h1"  ><u>Welcome</u> <u>Page</u></label>
        <button type="button" value="logout" class="b1"   id="logout" onclick="loginPage()" >Log Out</button>
	<br><br>
    <?php

session_start();


echo "<label class = 'welcome'> Welcome ".$_SESSION["username"];

require_once 'ToDoList.php';


?>
    </div>
<script src="ToDoList.js"></script></body>
</html>