<?php
  include_once('db.php');
  
  if (isset($_POST['status'])) 
  {
  	$status = htmlspecialchars(mysqli_escape_string($conn, $_POST['status']));
  	$id = htmlspecialchars(mysqli_escape_string($conn, $_POST['id']));
  	$sql = "UPDATE orderinfo SET orderStatus='$status' WHERE orderId='$id'";
  	$result= mysqli_query($conn, $sql);
  	
  }
?>