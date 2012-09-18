<?php 
   include 'db_connect.php';

   $query = "SELECT * FROM Course";
   $result = mysql_query($query);
   $error =  mysql_error();
   if($error){
	die('Error in query: ' . $error);
   }
   

   while($row = mysql_fetch_row($result))
   {
      echo '<br>';
      echo $row[0]; 
      echo $row[1];
   }


   
?>   
