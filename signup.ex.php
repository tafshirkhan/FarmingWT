 <?php
        if (isset($_POST["reg-submit"])) 
        {
        	$firstname = $_POST["fname"];
       		$lastname = $_POST["lname"];
       		$email = $_POST["email"];
       		$username = $_POST["username"];
       		
       		$password = $_POST["password"];
       		$confirmpassword = $_POST["cpassword"];

       		require_once 'db.php';
       		require_once 'function.php';

   
       		if (emptyInput($firstname,$lastname,$username,$email,$password,$confirmpassword) !== false) 
       		{
       			header("location: reg.php?error=emptyInput");
       			exit();
       		}

          if (invalidEmail($email) !== false) 
          {
            header("location: reg.php?error=invalidEmailaddress");
            exit();
          }


       		if (invalidUsername($username) !== false) 
       		{
       			header("location: reg.php?error=invalidUsername");
       			exit();
       		}
       		

       		if (passwordMatching($password,$confirmpassword) !== false) 
       		{
       			header("location: reg.php?error=passwordnotmatched");
       			exit();
       		}

       		if (existUsername($conn,$username,$email) !== false) 
       		{
       			header("location: reg.php?error=usernamealreadyexit");
       			exit();
       		}

       		addUser($conn,$firstname,$lastname,$username,$email,$password);
       		/*{
       			header("location: reg.php?error=usernamealreadyexit");
       			exit();
       		}*/

          header("location: login.php");

	
        }
           

     else
     {
     	header("location: reg.php");
     	exit();

     }


?>