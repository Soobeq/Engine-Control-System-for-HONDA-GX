<?php

function select(){
   
require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['speed']);
/*$email   = $conn->real_escape_string($_POST['u_email']);
$subj    = $conn->real_escape_string($_POST['subj']);
$message = $conn->real_escape_string($_POST['message']);*/
//$query   = "INSERT into tb_cform (u_name,u_email,subj,message) VALUES('" . $name . "','" . $email . "','" . $subj . "','" . $message . "')";
//$query   = "INSERT into data_out (speed) VALUES('" . $name . "')";
$query = "UPDATE data_out SET speed = '$name' ";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
echo "Thank You For Contacting Us <br>";
 
$conn->close();

}
 
function insert(){
   echo "The insert function is called.";
}


?>