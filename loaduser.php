 
<?php

    include_once('db.php');

    $newCount = $_POST['newCount'];

     $query = "SELECT orinfo.orderId,orinfo.orderQuantity,cusinfo.*,proinfo.* FROM orderinfo orinfo, customerinfo cusinfo, productinfo proinfo WHERE cusinfo.customerId=orinfo.idCustomer AND proinfo.productId=orinfo.idProduct ORDER BY orinfo.orderId ASC LIMIT $newCount";
     $result = mysqli_query($conn, $query);



?>
   
    <div class="info-table">

           <table align="center" border="1px" style="width:1200px; line-height:40px;">
        <tr>
            <th colspan="11"><h2>Order Details</h2></th>

        </tr>
        <t>
            <th>Order Id</th>
            <th>Order Quantity</th>
            <th>Customer Id</th>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Customer Address</th>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Product Category</th> 
            <th>Product Price</th>
            <th>Total Price</th>

            
        </t>

        <?php
        if (mysqli_num_rows($result) > 0) {
            # code...
        
           while ($row=mysqli_fetch_assoc($result)) 
           {
        ?>
             <tr>
               <td> <?php echo $row['orderId']; ?></td>
               <td> <?php echo $row['orderQuantity']; ?></td>
               <td> <?php echo $row['customerId']; ?></td>
               <td> <?php echo $row['customerName']; ?></td>
               <td> <?php echo $row['customerPhone']; ?></td>
               <td> <?php echo $row['customerAddress']; ?></td>
               <td> <?php echo $row['productId']; ?></td>
               <td> <?php echo $row['productName']; ?></td>
               <td> <?php echo $row['productCategory']; ?></td>
               <td> <?php echo $row['productPrice']; ?></td>
               <td> <?php echo $row['orderQuantity']*$row['productPrice'];?></td>
               

             </tr>
        <?php
           }
        }
        else
        {
            echo "There are no more data";
        }
        ?>

        
</table> 
    

      
    

   