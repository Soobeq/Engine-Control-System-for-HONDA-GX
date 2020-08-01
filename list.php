<?php	
	require 'connection.php';
	$conn    = Connect();
	$id="1";
	$i=1;
	$max=0;
	$max1=1000;
	
	while($id <= 10){
		$result = mysqli_query($conn, "SELECT id, date, time, ip, temp, speed, value FROM data_from_engine WHERE id=$id");
		$row = mysqli_fetch_array($result);
		$speed[$id]= $row["speed"];
		$id+=1;
	} $conn->close();

?>

<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Zamknij panel</a>
<a href="?val=0" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-circle-o" aria-hidden="true"></i><i class="fa fa-circle-o" aria-hidden="true"></i><i class="fa fa-circle-o" aria-hidden="true"></i>  Wszystkie silniki </a>

<?php 
	while  ($i<11){
		echo "<a href='?val="; 
		echo $i; 
		echo "'class='w3-bar-item w3-button w3-padding'><i style='" ;
	if($speed[$i] < 800) { echo "color: black;"; } 
	else if($speed[$i] > 800 && $speed[$i] < 4999 ) { 
			echo "color: green;"; } 
	else if ($speed[$i] > 4999) { 
		echo "color: red;"; }  
		echo "' class='" ;
	if($speed[$i] < 800) { echo "fa fa-circle-o-notch"; } 
	else { echo "fa fa-circle-o-notch fa-spin fa-2x fa-fw"; } 
		echo "'></i>  Engine ";echo $i; echo" </a>";
			$i=$i+1; 
	}

?>
