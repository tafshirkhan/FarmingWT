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
			text-decoration: none;
		}
		
		.activities-section p{
			text-align: center;
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
     	
     	<ul><li><p><a href="header.php">Go back</a></p></li></ul>
     	
 
     </div>
     

</body>
</html>