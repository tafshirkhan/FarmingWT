<!DOCTYPE html>
<html>
<head>
	<title>UPDATE USER INFORMATION</title>
	<link rel="stylesheet" href="CSS/style3.css">
</head>
<body>

	<div class="update-section"> 

	 <div class="update-box"> 
	        <h1>Update Information</h1>    

	    <form action="update.ex.php" method="POST">
		
			<label for="firstname">First Name</label>
			
			<input type="text" name="fname" >
			
			<label for="lname">Last Name</label>
			
			<input type="text" name="lname" >
			
			<label for="username">Username</label>
			
			<input type="text" name="username" >
			
			<label for="email">Email</label>
			
			<input type="email" name="email" >
			
			
			<input type="submit" name="update-submit" value="Update">
			
			<p><a href="editprofile.php">Go Back</a></p>
		

	     </form>

	   </div> 

	 </div>

</body>
</html>