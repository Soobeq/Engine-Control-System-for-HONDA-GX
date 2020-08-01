<?php

	$curdate = date('Y/m/d');
	$curtime = date('H:i:s');

	$password = $_GET['code'];
	$id = $_GET['i'];
	$ip = $_GET['ip'];
	$temp = $_GET['t'];
	$speed = $_GET['s'];
	$value = $_GET['v'];
	
	$passcode = "motopower";
	
	if(isset($password) && ($password == $passcode)){
		if(isset($temp)&&isset($speed)&&isset($value)){
			$servername = "localhost";
			$username = "root";
			$dbname = "esp";
			$password = "motopower";

			$conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "UPDATE data_from_engine 
			SET date = '$curdate', 
				time = '$curtime', 
				temp = '$temp', 
				ip = '$ip', 
				speed = '$speed', 
				value = '$value' 
			WHERE id=$id";
			
			if (mysqli_query($conn, $sql)) {
				echo "";
			} else {
				echo "Fail: " . $sql . "<br>" . mysqli_error($conn);
			}
			
			$result = mysqli_query ($conn, "SELECT id,limit_engine 
					        FROM data_from_engine WHERE id=$id");

			while($row = mysqli_fetch_assoc($result)) {
			echo $row["limit_engine"]; }
			mysqli_close($conn);
		}
	}
?>