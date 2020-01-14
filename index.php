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
<body>
<div class = "container">
	<br>
		<label class = "h1"  ><u>Login</u> <u>Page</u></label>
	<br><br>
        

<div class = "register_border">
	
            <form name = "form2" id ="form2" method = "post" action="welcome_page.php" >
	<label class = "l1">Email</label><span class = "star">*</span> <span class = "error" id = "eerror" ></span><br>
	<input type = "text" placeholder = " Email" class = "t1" id = "t1" name ="email" ><br><br>
        
        <label class = "l1">Password </label><span class = "star">*</span><span class = "error" id = "perror" ></span> <br>
	<input type = "password" placeholder = " password" class = "t1" id = "t2" name ="password" ><br><br>
	
	<div class = "buttonSection2">
	<button type = "submit" value = "Submit" class = "b1" id = "loginData">Login</button>&nbsp;
	<button type = "reset" value = "Reset" class = "b1" id = "resetData">Clear</button><br>
        
        </div>
</div>
</div>
    <script src ="loginData.js">
        </script>
        </body>
        </html>