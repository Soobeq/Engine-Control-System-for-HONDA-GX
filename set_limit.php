<?php

$id = $_POST['id'];
$value = $_POST['val'];
require 'connection.php';
$conn    = Connect();
$query = "UPDATE data_from_engine SET limit_engine = '$value' WHERE id=$id ";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
}
 
// echo "ENGINE SET MAX TO $value ";
 
$conn->close(); 
?>