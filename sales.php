<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "me";
   
   $productname = $_REQUEST['productname'];
   $quantity = $_REQUEST['quantity'];
   $cost = $_REQUEST['cost'];
   $total = $_REQUEST['total'];
   $employee = $_REQUEST['employee'];
   $customer = $_REQUEST['customer'];
    
	  $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
	  if($conn-> connect_error) {
		  echo "error - 404";
	  }
	  else{
		  echo "Database connected";
	  }
	  
	  
	  $sql="INSERT INTO bill(product_name,quantity, amount,employee, customer, bill_type) values('".$productname."', '".$quantity."', '".$total."', '".$employee."', '".$customer."', 'SALES')";
	  
	  if($conn->query($sql) === TRUE){
		  
		  if($total < 0){
			  $total = $total * -1;
		  }
		  
		  $sql="UPDATE customer Set purchase_gross = purchase_gross +'".$total."' where customer_name = '".$customer."'";
		  $sql1="UPDATE employee Set sales_gross = sales_gross +'".$total."' where employee_name = '".$employee."'";
		  
		  if($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE){
			  header("Location: sales-bill.php");
		  }else{
		 echo "<br> Data not inserted";
	  }
	  
		
	  }else{
		 echo "<br> Data not inserted";
	  }
	  
	  
	$conn->close();

?>