<?php 
	session_start(); 

	include 'db_connect.php'; 

	$cid = $_GET['cid'];
	$name = $_GET['name']; 

	$query = "UPDATE Course
	      	 SET cid= '" . $cid . "', name= '" . $name . "' 
		 WHERE cid= '" . $cid . "'"; 

	echo $query;

	$result = mysql_query($query);
   	$error =  mysql_error();
   	if($error){
		die('Error in query: ' . $error);
	}
	header( 'Location: courses.php' ) ;
 ?>