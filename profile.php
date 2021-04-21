<?
   session_start();
   
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROFILE VIEW AND EDIT</title>
    <style>
        .section{
            padding-top: 50px;
        }
        .section ul{
            text-align: center;
        }
        .section p{
            text-align: center;
        }
        .section a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php

        include 'header.php';
        

     ?>

      

     <div class="section">
     	<ul> <li> <a href="editprofile.php">Edit Profile</a></li></ul>
     	<ul> <li> <a href="view.php">View Profile</a></li></ul>
     	<ul><li><a href="activities.php">Activities</a></li></ul>
     	<br><br>
     	<p><a href="header.php">Go back</a></p>
     	

     </div>

</body>
</html>