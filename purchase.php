<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "me";
   
   $productname = $_REQUEST['productname'];
   $quantity = $_REQUEST['quantity'];
   $cost = $_REQUEST['cost'];
   $total = $_REQUEST['total'];
   $supplier = $_REQUEST['supplier'];
    
	  $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
	  if($conn-> connect_error) {
		  echo "error - 404";
	  }
	  else{
		  echo "Database connected";
	  }
	  
	  
	  $sql="INSERT INTO bill(product_name,quantity, amount,supplier, bill_type) values('".$productname."', '".$quantity."', '".$total."', '".$supplier."', 'PURCHASE')";
	  
	  if($conn->query($sql) === TRUE){
		  header("Location: purchase-bill.php");
		
	  }else{
		 echo "<br> Data not inserted";
	  }
	  
	  
	$conn->close();

?>