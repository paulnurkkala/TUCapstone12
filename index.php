<?php 
   $username = "paulnurkkala";
   $password = "7e7s6y0k";
   $hostname = "sql09.freemysql.net";
   $database = "tucapstone12";

   phpinfo();

   $connection = mysql_connect($hostname,$username,$password);

   if(!$connection)
   {
       die('Could not connect: ' . mysql_error());
   }
   else{
       echo '<hr>connection to database established.<hr>';
   }

?>
<html>
	<head>
		<title>TU Capstone Study 2012</title>
	</head>
	<body>
		<p>Welcome to the TU computer science capstone studying website.</p>
		<p><b>Who are you?</b> (Whatever you say here
		will be chached and reported to everyone else)</p>
		<select value="">
		  <option value="">Person 1</option>
		  <option value="">Person 2</option>
		</select>
		<br/>
		<a href="#">Modify Questions</a>
	</body>
</html>