<!DOCTYPE html>
<html>
<head>
	<title>ACTIVITIES</title>
	<style>
		.activities-section{
			padding-top: 50px;
			text-align: center;


		}

		.activities-section ul{
			list-style: none;
			padding-top: 10px;
		}

		.activities-section ul li{}

		.activities-section ul li a{
			font-size: 20px;
			font-weight: 700;
			color: black;
			text-decoration: none;
		}
		.activities-section ul li a:hover{
			color: #ff9800;
			
		}
		
		.activities-section p a{
			text-align: center;
			font-size: 18px;
			font-weight: 700;
			color: #3d3df1;
			text-decoration: none;
		}
		.activities-section p a:hover{
			color: red;
		}
	</style>
</head>
<body>
	<?php

        include 'header.php';
        

     ?>
	  <div class="activities-section">
     	<ul><li> <a href="paymentinfo.php">Payment Details</a></li></ul>
     	<ul><li> <a href="customerinfo.php">Customer Details</a></li></ul>
     	<ul><li><a href="orderinfo.php">Order List</a></li></ul>
     	<ul><li><a href="ordertracking.php">Order Tracking</a></li></ul>
     	<br>

     	<p><a href="header.php">Go back</a></p>
     </div>
     
     

</body>
</html>