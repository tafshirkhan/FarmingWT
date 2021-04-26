<?php
 session_start();

 if (isset($_SESSION["userid"]) && $_SESSION["username"]) 
 {
 	  require 'function.php';
  	require 'db.php';
 

        	$firstname = $_POST["fname"];
          $lastname = $_POST["lname"];
          $email = $_POST["email"];
          $username = $_POST["username"];


  	if (empty($firstname) || empty($lastname) || empty($email) || empty($userid)) 
  	{
  		header("location: updateinfo.php?error=emptyinput");
     	exit();
  	}

  	else if (empty($newpassword)) 
  	{
  		header("location: passwordchanges.php?error=newpasswordrequired");
     	exit();
  	}

  	else if ($newpassword !== $confirmpassword) 
  	{
  		header("location: passwordchanges.php?error=passwordnotmatched");
     	exit();
  	}
  	else
  	{
  		$oldpassword = $_SESSION['userpassword'];
  		$newpassword = md5($newpassword);
      $passwordHash = password_hash($newpassword, PASSWORD_DEFAULT);
  		$userid = $_SESSION["userid"];

  		$sql = "SELECT userPassword FROM deliverylogin WHERE userId ='$userid' AND userPassword='$oldpassword';";

  		$result = mysqli_query($conn, $sql);
  		if (mysqli_num_rows($result) === 1) 
  		{
  			$sql2 = "UPDATE deliverylogin SET userPassword='$passwordHash' WHERE userId='$userid';";
         mysqli_query($conn, $sql2);

         header("location: passwordchanges.php?error=success");
          exit();
  		}
  		else
  		{
  			header("location: passwordchanges.php?error=incorrectpassword");
     	    exit();

  		}
  	}


  	
  

}


 else
 {
 	header("location: passwordchanges.php");
     	exit();
 }



?>