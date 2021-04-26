<!DOCTYPE html>
<html>
<head>
	<title>EDIT PROFILE</title>
	<style>
		.section{
			padding-top: 50px;
			text-align: center;

		}

		.section ul{
			list-style: none;
			padding-top: 10px;
		}
		.section ul li{

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

	
		<ul><li><a href="viewinfo.php">View Details</a></li></ul>
		<ul><li> <a href="updateinfo.php">Update Information</a> </li></ul>
		<ul><li> <a href="jsvalidation_password.php">Changes Password</a> </li></ul>
		<br>
		<p><a href="profile.php">Go Back</a></p>


	</div>

</body>
</html>