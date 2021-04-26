
<!DOCTYPE html>
<html>
<head>
	<title>CUSTOMER INFORMATION</title>
	<style >
		.info-table{
			padding-top: 60px;

		}
		.info-table table{
			text-align: center;
		}
		

	</style>
</head>
<body>
	<?php

        //include 'header.php';
        

     ?>
	
<?php
     include_once('db.php');


     $query = "SELECT * FROM customerinfo";
     $result = mysqli_query($conn, $query);



?>
   
    <div class="info-table">
    	<div class="inner-table">

    	   <table align="center" border="1px" style="width:600px; line-height:40px;">
    	   <tr>
    		<th colspan="4"><h2>Customer Details</h2></th>

    	</tr>
    	<t>
    		<th>User Id</th>
    		<th>Customer Name</th>
    		<th>Customer Phone</th>
    		<th>Customer Address</th>
    		
            
    	</t>

    	<?php
    	   while ($row=mysqli_fetch_assoc($result)) 
    	   {
    	?>
    	   	 <tr>
    	   	   <td> <?php echo $row['customerId']; ?></td>
    	   	   <td> <?php echo $row['customerName']; ?></td>
    	   	   <td> <?php echo $row['customerPhone']; ?></td>
    	   	   <td> <?php echo $row['customerAddress']; ?></td>
    	   	   
               

    	   	 </tr>
    	<?php
    	   }
    	?>

    	
    </table>

      <p style="font-size: 20px; font-weight: 700; text-align: center; "><a style="text-decoration: none;" href="activities.php">Go Back</a></p>
     </div>
    	
    </div>

    

</body>
</html>