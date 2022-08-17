<?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $dbname = "sample";
   $con = mysqli_connect($host, $user, $password, $dbname);
   if($con->connect_error){
	   die("connection failed:" .$conn->connect_error);
   }

?>