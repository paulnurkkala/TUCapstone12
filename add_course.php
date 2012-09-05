<?php 
   $username = "paulnurkkala";
   $password = "7e7s6y0k";
   $hostname = "sql09.freemysql.net";
   $database = "tucapstone12";

   $connection = mysql_connect($hostname,$username,$password);

   if(!$connection)
   {
       die('Could not connect: ' . mysql_error());
   }
   else{
   }

   $mysql_select_db($database, $connection); 

   $query = "INSERT INTO Course ('COS120', 'Introduction to Computer Science')";
   $result = mysql_query($query);
   var_dump($result);

?>   
