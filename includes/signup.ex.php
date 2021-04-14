 <?php
        //if (isset($_POST['reg-submit'])) 
        //{
        	 $firstname = $_POST['fname'];
       		$lastname = $_POST['lname'];
       		$email = $_POST['email'];
       		$username = $_POST['username'];
       		$gender = $_POST['gender'];
       		$password = $_POST['password'];
       		$confirmpassword = $_POST['cpassword'];

       		require_once 'db.php';
       		require_once 'function.php';

   
       		if (emptyInput($firstname,$lastname,$email,$username,$gender,$password,$confirmpassword) !== false) 
       		{
       			header("location: reg.php?error=emptyInput");
       			exit();
       		}
       		if (invalidUsername($username) !== false) 
       		{
       			header("Location: reg.php?error=invalidUsername");
       			exit();
       		}
       		if (invalidEmail($email) !== false) 
       		{
       			header("Location: reg.php?error=invalidEmailaddress");
       			exit();
       		}
       		if (passwordMatching($password,$confirmpassword) !== false) 
       		{
       			header("Location: reg.php?error=passwordnotmatched");
       			exit();
       		}
       		if (exitUsername($conn,$username,$email) !== false) 
       		{
       			header("Location: reg.php?error=usernamealreadyexit");
       			exit();
       		}

       		if (addUser($conn,$firstname,$lastname,$email,$username,$gender,$password)) 
       		{
       			header("Location: reg.php?error=usernamealreadyexit");
       			exit();
       		}

	
        //}
           

     else
     {
     	header("Location: reg.php");
     	exit();

     }


?>