<?php

     function emptyInput($firstname,$lastname,$email,$username,$password,$confirmpassword)
    {
    	$result;
    	if (empty($firstname) && empty($lastname) && empty($email) && empty($username) && empty($password) && empty($confirmpassword)) 
    	{
    		$result =true;
    	}
    	else
    	{
    		$result = false;
    		
    
    	}
    	return $result;

    }


    function invalidUsername($username)
    {
    	$result;
    	if (!preg_match("/^[a-zA-Z0-9]*$/",$username))
    	{
    		$result = true;
    	}
    	else
    	{
    		$result = false;
    	}
    	return $result;
    }


    function invalidEmail($email)
    {
    	$result;
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    	{
    	  $result = true;
    	}
    	else
    	{
    		$result = false;
    	}
    	return false;
    }


    function passwordMatching($password,$confirmpassword)
    {
    	$result;
    	if ($password == $confirmpassword) 
    	{
    		$result = true;    	
    	}
    	else
    	{
    		$result = false;
    	}
    	return $result;
    }



    function existUsername($conn,$username,$email)
    {
    	$sql = "SELECT * FROM deliverylogin WHERE userName = ? OR userEmail = ?;";
    	$statement = mysqli_stmt_init($conn);

    	if (!mysqli_stmt_prepare($statement, $sql)) 
    	{
    		header("location: reg.php?error=failed");
    		exit();
    	}

    	mysqli_stmt_bind_param($statement, "ss", $username, $email);
    	mysqli_stmt_execute($statement);


    	$data = mysqli_stmt_get_result($statement);

    	if ($row = mysqli_fetch_assoc($data)) 
    	{
    		return $row;
    	}
    	else
    	{
    		$result = false;
    		return $result;
    	}

    	mysqli_stmt_close($statement);
    }



    function addUser($conn,$firstname,$lastname,$username,$email,$password)
    {
    	$sql = "INSERT INTO deliverylogin (userFirstName,userLastName,userName,userEmail,userPassword) VALUES (?, ?, ?, ?, ?);";
    	$statement = mysqli_stmt_init($conn);

    	if (!mysqli_stmt_prepare($statement, $sql)) 
    	{
    		header("Location: reg.php?error=failed");
    		exit();
    	}


    	$passwordHash = password_hash($password, PASSWORD_DEFAULT);


    	mysqli_stmt_bind_param($statement, "sssss",$firstname,$lastname,$username,$email,$passwordHash);
    	mysqli_stmt_execute($statement);
    	mysqli_stmt_close($statement);

    	header("Location: reg.php?error=none");
    	exit();
    }



    function emptyLogin($username, $password)
    {
        $result;

        if (empty($username) && empty($password)) 
        {
            $result = true;
        }
        else
        {
            $result = false;
        }
        return $result;
    }

    function loginUser($conn, $username, $password)
    {
        $existUser = existUsername($conn, $username, $username);


        if ($existUser == false) 
        {
            header("location: login.php?error=informationmismatched");
            exit();
        }

        $hashPassword = $existUser["userPassword"];

        $passwordChecked = password_verify($password, $hashPassword);

        if ($passwordChecked == false) 
        {
            header("location: login.php?error=informationmismatched");
            exit();
        }
        else if ($passwordChecked == true) 
        {
            session_start();
            $_SESSION["userid"] = $existUser["userId"];
            $_SESSION["username"] = $existUser["userName"];
            header("location: header.php");
            exit();
        }

    }



?>