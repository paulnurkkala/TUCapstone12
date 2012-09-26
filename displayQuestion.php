<?php 
   include 'db_connect.php';
/*
	debugging usefull queries
	INSERT INTO Answer (qid, cid, answer, username) VALUES (1, "COS120", "Answer one for COS120", "eliezer");

*/
$_GET['cid'] = "COS120";
$cid = $_GET["cid"];

   $query = 'SELECT * FROM Question q
   	     INNER JOIN Answer a ON a.qid = q.qid
	     INNER JOIN Course c ON c.cid = a.cid
	     WHERE 1 =1 
	     '.($cid? 'AND c.cid = "'.$cid.'"':'').'
	     ;
	     ';

   $result = mysql_query($query);
   $error =  mysql_error();
   if($error){
	die('Error in query: ' . $error);
   }
   
   echo '<table class="question_table">';
   while($row = mysql_fetch_row($result))
   {
	
	echo '<tr>'; 
	echo '<td>';	
	echo $row[1];
	echo '</td>';	
	echo '<td>';	
	echo $row[0];
	echo '</td>';
	echo '<td>'; 
	echo '<a href="edit_question.php?qid=' . $row[1] . ' ">EDIT</a>';
	echo '</td>';	
   }
   echo '</table>';


   
?>   
