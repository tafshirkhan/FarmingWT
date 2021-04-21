<!DOCTYPE html>
<html>
<head>
	<title>JAVASCRIPT VALIDATION FOR SIGNUP FORM</title>
	<link rel="stylesheet"  href="CSS/style1.css">
</head>

<body>
	<script src="signup.js"></script>
     <?php

        include 'header.php';
     ?>

   <div class="signup-section">

	    <div class="signup-box"> 
	        <h1>Register Now</h1>    

	    <form id="signup" onsubmit="return validation()" action="reg.php" method="POST">
		
			<label for="firstname">First Name</label>
			
			<input type="text" id="firstname" name="fname" >
			
			<label for="lname">Last Name</label>
			
			<input type="text" id="lastname" name="lname" >
			
			<label for="username">Username</label>
			
			<input type="text" id="username" name="username" >
			
			<label for="email">Email</label>
			
			<input type="email" id="email" name="email" >
			
			<label for="password">Password</label>
			
			<input type="password" id="password" name="password" >
			
			<label for="cpassword">Confirm Password</label>
			
			<input type="password" id="confirmpassword" name="cpassword" >
			
			<input type="submit" name="reg-submit" value="Register">
			
			<p>Alreadt and user? <a href="jsvalidation_login.php">Login</a></p>
		

	     </form>
	   </div> 

	 </div>


	



</body>
</html>