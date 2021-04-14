<?php
    
      session_start();
      $value = $_SESSION['username'];

      echo "Hello ". $value;

?>