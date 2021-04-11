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
$sql = "SELECT * FROM `employee`"; 
$result = $mysqli->query($sql); 
$mysqli->close();  
?>

<html>
 
 <head>
    <title>employee</title>
	
	<style>
	
	 h1{
	    padding-left:700px;
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
	        position:relative;
			top: 100px;
            margin: 0 auto; 
            font-size: large; 
            border: 1px solid black; 
        } 
  
        h1 { 
            text-align: center; 
            color: #000000; 
            font-size: xx-large; 
            font-family: 'Gill Sans', 'Gill Sans MT',  
            ' Calibri', 'Trebuchet MS', 'sans-serif'; 
        } 
  
        td { 
            background-color: #7fe3d2; 
            border: 1px solid black; 
        } 
  
        th, 
        td { 
		    color: #000000; 
            font-weight: bold; 
            border: 1px solid black; 
            padding: 10px; 
            text-align: center; 
        } 
  
        td { 
            font-weight: lighter; 
        } 
	</style>
	
 </head>
 <body style="background: url('employee.png')">  
    <section>
        <table> 
            <tr>  
                <th>Employee ID</th> 
                <th>Employee name</th> 
                <th>Sales gross</th> 
            </tr> 
            <?php
			    $count=1;
                while($rows=$result->fetch_assoc()) 
                { 
             ?> 
            <tr>
                <td><?php echo $count++;?></td> 
                <td><?php echo $rows['employee_name'];?></td> 
                <td><?php echo $rows['sales_gross'];?></td> 
            </tr> 
            <?php 
                } 
             ?> 
        </table> 
    </section> 

 </body>

</html>