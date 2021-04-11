<?php 
$user = 'root'; 
$password = '';
$database = "me";
$servername='localhost'; 
$mysqli = new mysqli($servername, $user, $password, $database); 

if ($mysqli->connect_error) { 
    die('Connect Error (' .  
    $mysqli->connect_errno . ') '.  
    $mysqli->connect_error); 
} 
$sql = "SELECT * FROM `product`"; 
$result = $mysqli->query($sql); 

$mysqli->close();  
?>

<html>
 
 <head>
    <title>purchase bill</title>
	<script type="text/javascript">
	var k = 0;
function addRows(){
	
	var table = document.getElementById('emptbl');
	var rowCount = table.rows.length;
	var cellCount = table.rows[0].cells.length; 
	var row = table.insertRow(rowCount);
	for(var i =0; i <= cellCount; i++){
		var cell = 'cell'+i;
		cell = row.insertCell(i);
		var copycel = document.getElementById('col'+i).innerHTML;
		cell.innerHTML=copycel;
	}
}
function deleteRows(){
	var table = document.getElementById('emptbl');
	var rowCount = table.rows.length;
	if(rowCount > '2'){
		var row = table.deleteRow(rowCount-1);
		rowCount--;
	}
	else{
		alert('There should be atleast one row');
	}
}

function multiply()
{
   
   var textValue1 = document.getElementById('TextBox1').value;
   var textValue2 = document.getElementById('TextBox2').value;

   document.getElementById('TextBox3').value = textValue1 * textValue2;

}
</script>
	<style>
	
	 h1{
	    background-color:yellow;
	   }
	 #first-section{
	     color:red;
		 width:300px;
		 height:00px;
		 opacity:0.9;
		position:relative;
		top:-40;
		padding:1px;
		margin:10px;
		font-family:Cursive;
	   }
	.box{
	     position:relative;
		 top:100px;
	     left:120px;
	}
	.box select
	{
	  background: #0563af;
	  padding: 10px;
	  width: 200px;
	}
	#fonts
	{
	 font-color:black;
	 font-family:Fantasy;
	 font-size:20px;
	 padding:10px;
	 position:relative;
	 top:160px;
	 
	
	}
	table { 
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #006600; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #E4F5D4; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
	</style>
	
	
	<h1>INVOICE</h1>
	
 </head>
 
 
 

 <body>  
    <div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					BLAZETICS MEGA-STORE<br>	
					BANASHANKARI BANGLORE<br>	
					ph-9060112452, 0191-234437<br>	
				</div>      		
			</div>
			</br>
	
    
<form action="purchase.php" method="post">    
	<table id="emptbl">
		<tr>
		    <th>supplier</th>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>cost</th> 
			<th>Total</th> 
		</tr> 
		<tr> 
		    <td id="col0"><select name="supplier">
		    <option>More super-mart</option> 
			<option>best price</option> 
			<option>green-leaves</option> 
			<option>electroflux</option> 
		 </select></td>
			<td id="col1"><input type="text" name="productname" value="" /></td>
			<td id="col2"><input type="text" id = "TextBox1" name="quantity" value="" /></td> 
			<td id="col3"><input type="text" id = "TextBox2" name="cost" onchange ="multiply()"value="" /></td> 
		    <td id="col4"><input type="text" id= "TextBox3" class = "total_price" name="total" value="" /></td> 
		</tr>  
	</table> 
	<table> 
		<tr> 
			<!--<td><input type="button" value="Add Row" onclick="addRows()" /></td> 
			<td><input type="button" value="Delete Row" onclick="deleteRows()" /></td> -->
			<td><input type="submit" value="Submit" /></td> 
		</tr>  
	</table> 
 </form>

 </body>

</html>