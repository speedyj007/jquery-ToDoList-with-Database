<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD Table</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body>
    <h4><u>Greetings</u> <u>of</u> <u>the</u> <u>Day</u>!!</h4>   
    <br>
    <form name="form4"  method="post">
        <label>Enter Task: </label>&nbsp;
        <input type="text" class="tdl1" placeholder=" Enter Items to Add" id="list" name="items" >&nbsp;
        <button type="submit" value="Add" class="b1"   id="add">Add</button> &nbsp;
        <button type="button" value="update" class="b1"   id="updateRow" >Update</button><br>
        <label class="taskID">Task ID :</label>&nbsp;
         <input type="text" class="tdl1" placeholder=" Task Id" id="listID" name="task" >&nbsp;<label id="success"></label>
        
<?php        
        $conn = new mysqli("localhost", "root", "", "register");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 $sql = "SELECT * from list_9874597415 order by id desc";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='table1' class = 'table' >
        <tbody><tr>
                <th><input type='checkbox'='  class='c1' onclick = 'SelectAll()' id = 'parent' >&nbsp;Select All</th>
                <th>Tasks</th>
                <th>Tasks ID</th>
                <th>Options</th>
            </tr>";
        
            
          while($row = $result->fetch_assoc()) {
          echo "<tr><td><input type='checkbox' id='c1' class='c1'> </td>"
              . "<td>".$row["items"]."</td>"
                  . "<td>".$row["id"]."</td>"
                  . "<td><button type='button' class='b3'  id='editRow'> <i class='fas fa-edit'></i></button> &nbsp;<button type='button' class='b3'> <i class='fas fa-trash-alt' id='deleteRow'></i></button></td></tr>";
          }   
         
            
          echo "</tbody></table>";
}

$conn->close();
     ?>   
        
        
      
        
    </form>
 
    <script src="ToDoList.js"></script>
</body>
</html>
  

    
    