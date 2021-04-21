<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIEW USER INFORMATION</title>
	<style >
		.info-table{
			padding-top: 60px;

		}
	</style>
</head>
<body>
	
<?php
     include_once('db.php');


     $id = $_SESSION['userid'];

     $query = "SELECT * FROM deliverylogin WHERE userId='$id'";
     $result = mysqli_query($conn, $query);



?>
   
    <div class="info-table">

    	   <table align="center" border="1px" style="width:600px; line-height:40px;">
    	<tr>
    		<th colspan="5"><h2>User Details</h2></th>

    	</tr>
    	<t>
    		<th>User Id</th>
    		<th>First Name</th>
    		<th>Last Name</th>
    		<th>Username</th>
    		<th>Email</th> 
            
    	</t>

    	<?php
    	   while ($row=mysqli_fetch_assoc($result)) 
    	   {
    	?>
    	   	 <tr>
    	   	   <td> <?php echo $row['userId']; ?></td>
    	   	   <td> <?php echo $row['userFirstName']; ?></td>
    	   	   <td> <?php echo $row['userLastName']; ?></td>
    	   	   <td> <?php echo $row['userName']; ?></td>
    	   	   <td> <?php echo $row['userEmail']; ?></td>
               

    	   	 </tr>
    	<?php
    	   }
    	?>

    	
    </table>

      <p style="font-size: 20px; font-weight: 700; text-align: center; "><a style="text-decoration: none;" href="editprofile.php">Go Back</a></p>
    	
    </div>

    

</body>
</html>