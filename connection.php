<?php
 
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "motopower";
 $dbname = "esp";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) 
 or die($conn->connect_error);
 
 return $conn;
}
 
?> 

