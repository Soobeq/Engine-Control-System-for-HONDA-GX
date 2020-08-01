<?php

$id = $_POST['id'];
$value = $_POST['val'];
require 'connection.php';
$conn    = Connect();


$result = mysqli_query($conn, "SELECT id, date, time, ip, temp, speed, value, limit_engine FROM data_from_engine WHERE id=$id");
$row = mysqli_fetch_array($result);
$tmp = $row["limit_engine"];

if($tmp !=0 ){
    $tmp= $tmp + $value;
}

$query = "UPDATE data_from_engine 
          SET limit_engine = '$tmp' WHERE id=$id ";
$success = $conn->query($query);
 
if (!$success) {
    die("Couldn't enter data: ".$conn->error);
 
}
 
// echo "ENGINE SET MAX TO $value ";
 
$conn->close(); 
?>