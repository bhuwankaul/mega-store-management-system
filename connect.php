<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "login";
    
	  $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
	  if($conn-> connect_error) {
		  echo "error - 404";
	  }
	  else{
		  echo "Database connected";
	  }
	  
	  $username = $_POST['username'];
	  $password = $_POST['password'];
	  
	  $sql="SELECT username,password FROM login where username ='".$username."'";
	  $result = $conn->query($sql);
	  $row = $result->fetch_assoc();
	  
	  if($result->num_rows>0 && $password == $row["password"])
	  {
		  header("Location: home-page.html");
	  }
	  else{
		  echo "0 results";
	  }
	  
	  
	$conn->close();

?>