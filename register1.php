<?php
   $dbhost = "localhost";
   $dbuser = "root";
   $dbpass = "";
   $db = "login";
   $usernameR = $_REQUEST['username'];
   $passwordR = $_REQUEST['password'];
    
	  $conn = new mysqli ($dbhost, $dbuser, $dbpass, $db);
	  if($conn-> connect_error) {
		  echo "error - 404";
	  }
	  else{
		  echo "Database connected";
	  }
	  $sql=mysqli_query($conn, "CALL insertuser('".$usernameR."', '".$passwordR."')");
	  
	  if($sql === TRUE){
		echo "<br> Data inserted sucessfully";
	  }else{
		 echo "<br> Data not inserted";
	  }
?>