<?php
include_once('db.php');

    $output = '';
    $out ='';
    
    $query = "SELECT orderId FROM orderinfo";
    $result = mysqli_query($conn, $query);

    $totalOrders = mysqli_num_rows($result);

    $query1 = "SELECT orinfo.orderQuantity,proinfo.productName,proinfo.productPrice FROM orderinfo orinfo, productinfo proinfo WHERE proinfo.productId=orinfo.idProduct ORDER BY orinfo.orderId ASC LIMIT 2";
    $res = mysqli_query($conn, $query1);
    while ($row = mysqli_fetch_assoc($res)) 
    {
    	$output = '';
    	$orderid= $row['orderId'];
    	$output.='<tr><td>'.$row['productName'].'</td>';
    	$output.='<td>'.$row['orderQuantity'].'</td>';
    	$output.='<td>'.$row['productPrice'].'</td>';
    	$output.='<tr><td>'.$row['orderQuantity']*$row['productPrice'].'</td></tr>';
    	$out.= '<div class="alert-secondary p-2 rounded-top">
    	 <form method="post">
    	 <strong>ORDER ID:'.$orderid.'</strong>
    	 <input type="hidden" name="orderid" value="'.$row['orderId'].'">
    	 <button type="submit" name="view" class="btn">View Details</button>
    	  </form>
    	</div>

    	<table class="table table-dark">
    	    <tr>
    	       <td class="w-25">Product Name</td>
    	       <td>Quantity</td>
    	       <td>Price</td>
    	       <td>Total Price</td>
    	    </tr>

    	    '.$output.'
    	</table>';


    }

?>