<?php
     session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="CSS/style.css">
</head>
<body>

	<!---Header Section-->
	  <header>
	  	<div class="container">
	  		<!---Logo-->
	  		<div class="logo">
	  			
	  			<img src="images/logo.png" alt="logo">
	  		</div>
	  		<!---Logo-->

	  		<!---Features Menu-->
	  		<div class="menu-features">
	  			<ul>
		             <li><a href="home.php">Home</a></li>
		             <li><a href="index.php">Explore</a></li>
		
		             <li><a href="aboutus.php">About Us</a></li>
		             <li><a href="contact.php">Contact Us</a></li>
		
		            <?php
		                 if (isset($_SESSION["username"])) 
		                 {
			                //echo "<li><a href='view.php'>View Profile</a></li>";
			                echo "<li><a href='profile.php'>Profile</a></li>";
			                echo "<li><a href='logout.php'>Logout</a></li>";

		                 }

		                 else
		                 {
			                echo"<li><a href='jsvalidation_login.php'>Login</a></li>";
		    
		                    echo"<li><a href='jsvalidation_signup.php'>Signup</a></li>";

		                 }

		            ?>
		
                </ul>


	  		</div>
	  		<!---Features Menu-->



	  		
	  	</div>
	  	

	  </header>


	<!---Header Section-->

	

	

</body>
</html>