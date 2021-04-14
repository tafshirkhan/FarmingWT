<?php
    
     if (isset($_POST["login-submit"])) 
     {
     	$username = $_POST["username"];
     	$pasword = $_POST["password"];



     	require_once 'db.php';
     	require_once 'function.php';



     	if (emptyLogin($username, $password) !== false) 
     	{
     		header("location: login.php?error=emptyLoginInput");
     		exit();
     	}

     	loginUser($conn, $username, $password);

     }

     else
     	{
     		header("location: login.php");
     		exit();
     	}



?>