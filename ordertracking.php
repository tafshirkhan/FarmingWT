
<!DOCTYPE html>
<html>
<head>
	<title>ORDER TRACKING</title>
	<style >
		.info-table{
			padding-top: 60px;
			text-align: center;
			padding: 0 auto;

		}
     button{
            font-size: 10px;
            font-weight: 700;
            padding: 10px;
            border-radius: 10px;
            color: blue;
        }
        .container{
            text-align: center;
        }
	</style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
            var count = 2;
            $("button").click(function(){
                count = count + 2;
                $("#load-data").load("loaduserorder.php", {
                    newCount: count


                });
            });
        });
  </script>
</head>
<body>
	<?php

        //include 'header.php';
        

    ?>

<div id="load-data">
<?php
     include_once('db.php');
     include_once('action.php');

     $query = "SELECT * FROM orderinfo orinfo, customerinfo cusinfo, productinfo proinfo WHERE cusinfo.customerId=orinfo.idCustomer AND proinfo.productId=orinfo.idProduct ORDER BY orderId ASC LIMIT 2";
     $result = mysqli_query($conn, $query);



?>
   
  <div class="info-table">

    	   <table align="center" border="1px" style="width:1200px; line-height:40px;">
    	<tr>
    		<th colspan="8"><h2>Order Tracking</h2></th>

    	</tr>
    	<t>
    		<th>Order Id</th>
    		<th>Order Quantity</th>
    		<th>Customer Id</th>
    		<th>Product Id</th>
    		<th>Product Price</th>
    	  <th>Total Price</th>
        <th>Status</th>
        <th>Changed Status</th>

            
    	</t>

    	<?php
    	   while ($row=mysqli_fetch_assoc($result)) 
    	   {
    	?>
    	   	 <tr>
    	   	   <td> <?php echo $id= $row['orderId']; ?></td>
    	   	   <td> <?php echo $row['orderQuantity']; ?></td>
    	   	   <td> <?php echo $row['customerId']; ?></td>
    	   	   <td> <?php echo $row['productId']; ?></td>
    	   	   <td> <?php echo $row['productPrice']; ?></td>
               <td> <?php echo $row['orderQuantity']*$row['productPrice'];?></td>
               <td class="status"> <?php echo $status=$row['orderStatus']; ?></td>
               <td>
               	<?php 
               	      echo "<form action='ordertracking.php' method='POST'>

                               <select name='status' onchange='form.submit()'>
                                     <option value='Pending'>Pending</option>
                                     <option value='On Way'>On Way</option>
                                     <option value='Delivered'>Delivered</option>

                               </select>

                               <input type='hidden' name='id' value='$id'/>
               	      

                            </form>";


               	  ?>
               </td>

               

    	   	 </tr>
    	<?php
    	   }
    	?>

    	
    </table>
   	
    </div>
    </div>
    <br>
    <div class="container">
        <button type="button" id="button1">Show More</button>
    </div>
     <p style="font-size: 20px; font-weight: 700; text-align: center; "><a style="text-decoration: none;" href="activities.php">Go Back</a></p>

    

</body>
</html>