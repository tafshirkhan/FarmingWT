<?php
   
   session_start();

   require 'db.php';
   //require 'function.php';
   

   $select = "SELECT * FROM deliverylogin";
   $query = mysqli_query($conn, $select);
   $value = mysqli_fetch_assoc($query);

   $oldpassword = $value['userPassword'];

   if (isset($_POST['password-submit'])) 
   {
   	 $currentpassword = $_POST['oldpassword'];
   	 $newpassword = $_POST['newpassword'];
   	 $confirmpassword = $_POST['confirmnewpassword'];

   	 $userid = $_SESSION["userid"];


   	 /*if (emptyPasswordField($oldpassword, $newpassword, $confirmpassword)) 
   	 {
   	 	header("location: passwordchanges.php?error=emptypasswordfield");
     	exit();
   	 }*/

   	 if ($currentpassword == $oldpassword) 
   	 {
   	 	if ($newpassword == $confirmpassword) 
   	 	{
   	 		$update = "UPDATE deliverylogin SET userPassword = '$newpassword' WHERE userId = '$userid'";
   	 		$query1 = mysqli_query($conn, $update);
   	 		if ($query1) 
   	 		{
   	 			header("location: passwordchanges.php?error=success");
     	         exit();
   	 		}
   	 	}
   	 	else
   	 	{
   	 		header("location: passwordchanges.php?error=passwordnotmatched");
     	    exit();
   	 	}
   	 }

   	 else
   	 {
   	 	header("location: passwordchanges.php?error=incorrectassword");
     	    exit();
   	 }

   }

  



?>