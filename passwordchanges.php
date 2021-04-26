<?
  session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>PROFILE EDIT</title>
      <link rel="stylesheet"  href="CSS/changespass.css">
</head>
<body>
   <?php

        include 'header.php';
        

     ?>
    
      <section class="changes-password">
      	  
      	  <div class="password-box">
                  
                  <h1>Changes Password</h1>

      	  	<form action="passwordchanges.ex.php" method="POST">

      	  		<label for="oldpassword">Old Password</label>
      	  		<input type="password" name="oldpassword">

      	  		<label for="newpassword">New Password</label>
      	  		<input type="password" name="newpassword">

      	  		<label for="confirmnewpassword">Confirm Password</label>
      	  		<input type="password" name="confirmnewpassword">

      	  		<input type="submit" name="password-submit" value="Changes">
      	  		

      	  	</form>
            <p><a style="text-decoration: none; font-size: 18px; font-weight: 700;" href="editprofile.php">Go Back</a></p>
      	  	
      	  </div>

           <?php

         if (isset($_GET["error"])) 
         {
               if ($_GET["error"] == "emptypasswordfield") 
               {
                     echo "<p style=color:red;text-align:center;>Fill up the fields correctly!</p>";
               }
               if ($_GET["error"] == "oldpasswordrequired") 
               {
                     echo "<p style=color:red;text-align:center;>Old password required!</p>";
               }
               if ($_GET["error"] == "newpasswordrequired") 
               {
                     echo "<p style=color:red;text-align:center;>New password required!</p>";
               }
               if ($_GET["error"] == "passwordnotmatched") 
               {
                     echo "<p style=color:red;text-align:center;>New and confirm Password does not matched!</p>";
               }
               if ($_GET["error"] == "incorrectpassword") 
               {
                     echo "<p style=color:red;text-align:center;>Incorrect password!</p>";
               }
               if ($_GET["error"] == "success") 
               {
                     echo "<p style=color:red;text-align:center;>Password Successfully Changed!</p>";
               }
         }



      ?>

      </section>


      


</body>
</html>