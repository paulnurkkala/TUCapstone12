<?php 
   include 'db_connect.php';

if(!($_POST["courseid"])) return;
 
function getlistOfquestionsForCourse($acourse)
{
$cid =$acourse;

   $query = 'SELECT DISTINCT q.qid, a.cid , q.question, a.answer FROM Question q
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
    $json;
    
   while($row = mysql_fetch_row($result))
   {
	
	$json .= '{"QID":"'.$row[0].'","CID":"'.$row[1].'", "question":"'.$row[2].'", "answer":"'.$row[3].'"}  ,';
   }
    $json = substr($json, 0, -1);  
   echo $json;
   if($json == ""){
	   echo "nada";
	   }
return;
}
      
   getlistOfquestionsForCourse($_POST["courseid"]);
?>   
