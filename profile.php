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
            text-align: center;
        }
        .section ul{
            list-style: none;
            padding-top: 10px;
        }
        .section ul li {
            
        }
        .section ul li a{
            font-size: 20px;
            font-weight: 700;
            color: black;
            text-decoration: none;
        }
        .section ul li a:hover{
            color: #ff9800;
        }

        .section p a{
            text-align: center;
            font-size: 18px;
            font-weight: 700;
            color: #3d3df1;
            text-decoration: none;
        }

        .section p a:hover{
            color: red;
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
     	<br>
     	<p><a href="header.php">Go back</a></p>
     	

     </div>

</body>
</html>