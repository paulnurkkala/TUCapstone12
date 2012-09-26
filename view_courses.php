<?php 
   include 'db_connect.php';

   $query = "SELECT * FROM Course";
   $result = mysql_query($query);
   $error =  mysql_error();
   if($error){
	die('Error in query: ' . $error);
   }
   
   echo '<table class="course_table">';
   while($row = mysql_fetch_row($result))
   {
	
	echo '<tr>'; 
	echo '<td>';	
	echo $row[0];
	echo '</td>';	
	echo '<td>';	
	echo $row[1];
	echo '</td>';
	echo '<td>'; 
	echo '<a href="edit_course.php?cid=' . $row[0] . ' ">Edit</a> ||';
	echo '</td>';	
	echo '<td>'; 
	echo '<a href="delete_course.php?cid=' . $row[0] . ' ">Delete</a>';
	echo '</td>';
   }
   echo '</table>';


   
?>   
