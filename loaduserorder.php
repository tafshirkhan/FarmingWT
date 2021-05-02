<?php
     include_once('db.php');
     include_once('action.php');
     
     $newCount = $_POST['newCount'];

     $query = "SELECT * FROM orderinfo orinfo, customerinfo cusinfo, productinfo proinfo WHERE cusinfo.customerId=orinfo.idCustomer AND proinfo.productId=orinfo.idProduct ORDER BY orderId ASC LIMIT $newCount";
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
                                     <option value='value'></option>
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