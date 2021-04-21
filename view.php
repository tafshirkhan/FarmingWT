<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <?php
    
      session_start();
      $value1 = $_SESSION['userid'];
      $value2 = $_SESSION['username'];
      
      //$value3 = $_SESSION['userpassword'];
      


      

   
	echo "<p style=text-align:center; >User Id: $value1 </p>";
    
	echo "<p style=text-align:center;>User Name: $value2 </p>";
	
	//echo "<p style=text-align:center;>User Password: $value3 </p>";

    echo "";
    echo "<p style=text-align:center;><a href=profile.php>Go Back</a></p";


?>





</body>
</html>