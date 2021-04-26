<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="CSS/style2.css">
</head>
<body>
    
    <script src="login.js"></script>
	<?php

        include 'header.php';

     ?>

  

<div class="signin-section">

    <div class="signin-box">

      <h1>Login Here</h1>

        <form id="login" onsubmit="return validation()" action="login.php" method="POST">
		  

			<label for="username">Username</label>
			
			<input type="text" id="username" name="username">
			
			<label for="password">Password</label>
			
			<input type="password" id="password" name="password" >
			
			<input type="submit" name="login-submit" value="Login">
			
			<p>Not an user? <a href="jsvalidation_signup.php">Signup</a></p>
		

	    </form>

	</div>

</div>




</body>
</html>