<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="CSS/style2.css">
</head>
<body>

  

   <div class="signin-section">

     <div class="signin-box">

      <h1>Login Here</h1>

      <form action="signin.ex.php" method="POST">
		  

			<label for="username">Username</label>
			
			<input type="text" name="username" >
			
			<label for="password">Password</label>
			
			<input type="password" name="password" >
			
			<input type="submit" name="login-submit" value="Login">
			
			<p>Not an user? <a href="reg.php">Signup</a></p>
		

	  </form>

	  </div>

	</div>


	 <?php

      if (isset($_GET["error"])) 
      {
      	if ($_GET["error"] == "emptyLoginInput") 
      	{
      		//echo "Fill up the fields correctly!";
      		echo "<p style=color:red;text-align:center;>Fill up the fields correctly!</p>";
      	}

      	else if ($_GET["error"] == "informationmismatched") 
      	{
      		//echo "Incorrect information!";
      		echo "<p style=color:red;text-align:center;>Incorrect information!</p>";
      	}
      }
      

   ?>

</body>
</html>