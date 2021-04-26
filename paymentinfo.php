
<!DOCTYPE html>
<html>
<head>
	<title>PAYMENT INFORMATION</title>
	<style >
		.info-table{
			padding-top: 60px;
			text-align: center;
			padding: 0 auto;

		}
	</style>
</head>
<body>
	<?php

        //include 'header.php';
        

     ?>
	
<?php
     include_once('db.php');

     //$query = "SELECT payinfo.paymentId,payinfo.paymentType,cusinfo.customerId,orinfo.orderId,orinfo.orderQuantity, proinfo.productId,proinfo.productPrice FROM paymentinfo payinfo, orderinfo orinfo, customerinfo cusinfo, productinfo proinfo WHERE payinfo.paymentId=orinfo.orderId AND cusinfo.customerId=orinfo.idCustomer AND proinfo.productId=orinfo.idProduct";
     $query = "SELECT orinfo.orderId,orinfo.orderQuantity,payinfo.paymentId,payinfo.paymentType,cusinfo.customerId,proinfo.productId,proinfo.productPrice FROM orderinfo orinfo, paymentinfo payinfo, customerinfo cusinfo, productinfo proinfo WHERE cusinfo.customerId=orinfo.idCustomer AND proinfo.productId=orinfo.idProduct AND payinfo.orderId=orinfo.orderId";
     $result = mysqli_query($conn, $query);



?>
   
    <div class="info-table">

    	   <table align="center" border="1px" style="width:1200px; line-height:40px;">
    	<tr>
    		<th colspan="8"><h2>Customer Payment Details</h2></th>

    	</tr>
    	<t>
    		<th>Payment Id</th>
    		<th>Order Id</th>
    		<th>Order Quantity</th>
    		<th>Customer Id</th>
    		<th>Product Id</th>
    		<th>Product Price</th>
            <th>Total Price</th>
            <th>Payment Type</th>

            
    	</t>

    	<?php
    	   while ($row=mysqli_fetch_assoc($result)) 
    	   {
    	?>
    	   	 <tr>
    	   	   <td> <?php echo $row['paymentId']; ?></td>
    	   	   <td> <?php echo $row['orderId']; ?></td>
    	   	   <td> <?php echo $row['orderQuantity']; ?></td>
    	   	   <td> <?php echo $row['customerId']; ?></td>
    	   	   <td> <?php echo $row['productId']; ?></td>
    	   	   <td> <?php echo $row['productPrice']; ?></td>
               <td> <?php echo $row['orderQuantity']*$row['productPrice'];?></td>
               <td> <?php echo $row['paymentType']; ?></td>
               

    	   	 </tr>
    	<?php
    	   }
    	?>

    	
    </table>

      <p style="font-size: 20px; font-weight: 700; text-align: center; "><a style="text-decoration: none;" href="activities.php">Go Back</a></p>
    	
    </div>

    

</body>
</html>