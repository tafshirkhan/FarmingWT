<?php
  
    $servername = "localhost";
    $usernames = "root";
    $password = "";
    $databasename = "deliverysystem";


    $conn = mysqli_connect($servername, $usernames, $password, $databasename);


    if (!$conn) 
    {
    	die("Connectuin failed: ".mysqli_connect_error());
    }
    else
    {
    	//echo "success";
    }


?>