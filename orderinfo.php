
<!DOCTYPE html>
<html>
<head>
	<title>ORDER INFORMATION</title>
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
        //document.getElementById("button1").addEventListener('click',loadUsers);

        /*function loadUsers()
        {
          var xhr = new XMLHttpRequest();
          xhr.open('GET','loaduser.php', true);


          xhr.onreadystatechange = function(){
            var count=3;
           
            if (this.readyState == 4 && this.status == 200){
                 //var load = JSON.parse(this.responseText);
                //Console.log(load);
                count = count + 3;
                document.getElementById('load-data').innerHTML = count;

            }
          }
          xhr.send();
        }*/
        $(document).ready(function(){
            var count = 2;
            $("button").click(function(){
                count = count + 2;
                $("#load-data").load("loaduser.php", {
                    newCount: count


                });
            });
        });

    </script>

</head>
<body>
	<?php

        //include 'header.php';
     include_once('db.php');
        

     ?>

<div id="load-data">   
	
<?php
    

     $query = "SELECT orinfo.orderId,orinfo.orderQuantity,cusinfo.*,proinfo.* FROM orderinfo orinfo, customerinfo cusinfo, productinfo proinfo WHERE cusinfo.customerId=orinfo.idCustomer AND proinfo.productId=orinfo.idProduct ORDER BY orinfo.orderId ASC LIMIT 2";
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
    
    
    
    </div>

    </div> 
    <br> 
    <div class="container">
        <button type="button" id="button1">Show More</button>
    </div>
    <p style="font-size: 20px; font-weight: 700; text-align: center; "><a style="text-decoration: none;" href="activities.php">Go Back</a></p>
    



    

</body>
</html>