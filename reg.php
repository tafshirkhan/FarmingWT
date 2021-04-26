<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="CSS/style1.css">
</head>

<body>
     <?php

        include 'header.php';
        

     ?>


	
   <div class="signup-section">

	    <div class="signup-box"> 
	        <h1>Register Now</h1>    

	    <form action="signup.ex.php" method="POST">
		
			<label for="firstname">First Name</label>
			
			<input type="text" name="fname" >
			
			<label for="lname">Last Name</label>
			
			<input type="text" name="lname" >
			
			<label for="username">Username</label>
			
			<input type="text" name="username" >
			
			<label for="email">Email</label>
			
			<input type="email" name="email" >
			
			<label for="password">Password</label>
			
			<input type="password" name="password" >
			
			<label for="cpassword">Confirm Password</label>
			
			<input type="password" name="cpassword" >
			
			<input type="submit" name="reg-submit" value="Register">
			
			<p>Alreadt an user? <a href="jsvalidation_login.php">Login</a></p>
		

	     </form>
	   </div> 

	  <?php
   
     if (isset($_GET["error"])) 
     {
     	if ($_GET["error"]=="emptyinput") 
     	{
     		echo "<p style=color:red;text-align:center;>Fill up all the fields!</p>";
     	}
     	elseif ($_GET["error"]=="invalidemailaddress") 
     	{
     		//echo "Invalid email!";
     		echo "<p style=color:red;text-align:center;>Invalid email!</p>";
     	}
     	elseif ($_GET["error"]=="invalidusername") 
     	{
     		//echo "Invalid username!";
     		echo "<p style=color:red;text-align:center;>Invalid username!</p>";
     	}
     	elseif ($_GET["error"]=="passwordnotmatched") 
     	{
     		//echo "Password not matched!";
     		echo "<p style=color:red;text-align:center;>Password not matched!</p>";
     	}
     	elseif ($_GET["error"]=="statementfailed") 
     	{
     		echo "<p style=color:red;text-align:center;>Something went wrong, Try again!</p>";
     	}
     	elseif ($_GET["error"] =="usernamealreadyexit") 
     	{
     		//echo "Username or Email already exist!";
     		echo "<p style=color:red;text-align:center;>Username or Email already exist!</p>";
     	}
     	elseif ($_GET["error"]=="none") 
     	{
     		//echo "You have already logged in!";
     		echo "<p style=color:red;text-align:center;>You have already logged in!</p>";
     	}
     }
            
?>

	 </div>


	



</body>
</html>