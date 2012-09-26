<?php 
      session_start(); 
      $_SESSION['user'] = $_POST['user'];
      echo $_SESSION['user'];
?>   
