
 //Add Row
 
   $("#add").click(function(e){
   e.preventDefault();
   
   var items = $("#list").val().trim();
   
   if(items=="")
   {
       alert("please enter something to add");
   }
   
   else if(items==null)
   {
       alert("please enter something");
   }
   
   else{
       
       var table = $("table");
//       var checkbox = "<input type='checkbox' id='c1' class='c1'>";
      var items = $("#list").val();
//       var buttons = "<button type='button' class='b3'> <i class='fas fa-edit'></i></button> &nbsp;<button type='button' class='b3'> <i class='fas fa-trash-alt'></i></button>";
       
       table.append("<tr><td><input type='checkbox' id='c1' class='c1'></td><td>"+items+"</td><td></td><td><button type='button' class='b3' id = 'editRow'> <i class='fas fa-edit' ></i></button> &nbsp;<button type='button' class='b4' id='deleteRow'> <i class='fas fa-trash-alt'></i></button></td></tr>");
       
       var s = "";
       $.ajax({
          
           url: "insertData.php",
           method : "POST",
           
           data:
                   {
                       postitems:items
                   },
                   
                   success:function(data)
                   {
                     $("#success").html(data);
                    
                        setInterval(function(){
                           $("#success").html(s);
                       },3000);
                       location.reload(true);

                   }
       });
       
       $("#list").val(s);
   }
});



//Delete Row

$(".table tbody").on('click','#deleteRow',function(){
    
    var deleteItems = $(this).closest("tr");
    var col1 = deleteItems.find("td:eq(1)").text();
    console.log(col1);
    
    
     $.ajax({
          
           url: "deleteData.php",
           method : "POST",
            
           data:
                   {
                       postdelete:col1
                   },
                   success:function(data)
			{
                            alert(data);
                        }
               });  
               $(this).closest("tr").remove();
});


//Edit Row

$(".table tbody").on('click','#editRow',function(){
    
    var editItems = $(this).closest("tr");
    var col2 = editItems.find("td:eq(1)").text();
    var col3 = editItems.find("td:eq(2)").text();
    $(".taskID").show();
     $("#listID").show();
     $("#listID").attr("readonly",true);
    $("#list").val(col2);
    $("#listID").val(col3);
    $("#list").focus();
//    $("#update").attr("disabled",false);
   console.log(col2);
   console.log(col3);
    
    
    
    });
   
    
 //update Row
 
 $("#updateRow").click(function(){
 
    var col4 = $("#list").val().trim();
   var col5 =  $("#listID").val().trim();
   
    console.log(col5);
    
   if(col4=="")
   {
       alert("please enter something to add");
   }
   
   else if(col4==null)
   {
       alert("please enter something");
   }
   else{
    var b = "";
  $.ajax({
          
           url: "updateData.php",
           method : "POST",
            
           data:
                   {
                       postupdate:col4, posttask:col5
                   },
                   success:function(data)
			{
                            alert(data);
                            console.log(data);
                            location.reload(true);
                        }
               }); 
    $("#list").val(b);
    $("#listID").val(b);
    
}
 });
 
 
 //change color

 $("input[type='checkbox']").change(function(){
      var colorChange, table3 = document.getElementById("table1");
    
    if($(this).is(":checked"))
    {
        $(this).parent().parent().addClass("red");
    }
    else{
         $(this).parent().parent().removeClass("red");  
    }

 });

//Select All

function SelectAll()
{

 var selectAll = document.getElementById("parent");
 var input2 = document.getElementsByTagName("input");
 
 
 if(selectAll.checked ===true)
 {
	for(var i = 0; i < input2.length;i++)
	{
		if(input2[i].type =="checkbox" && input2[i].id =="c1" && input2[i].checked == false)
		
		{
			input2[i].checked = true;
			
			
		}
		
	}
 selectAll.checked = true;
 }
 
 else if(selectAll.checked === false)
 {
	for(var i = 0; i < input2.length;i++)
	{
		if(input2[i].type =="checkbox"  && input2[i].id == "c1" && input2[i].checked == true)
		
		{
			input2[i].checked = false;
			selectAll.checked = false;
			
		}
	}
 
 }
}


