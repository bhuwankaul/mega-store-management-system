<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "mega-store";
    
	  $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
	  if($conn-> connect_error) {
		  echo "error - 404";
	  }
	  else{
		  echo "Database connected";
	  }
	  
	  $sql="SELECT productid, productname, producttype, productcost FROM product";
	  
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	  
	  
	  
?>