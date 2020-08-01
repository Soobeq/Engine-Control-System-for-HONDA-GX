

<?php		
	require 'connection.php';
			$conn    = Connect();
			$id="1";
			$max=0;
			$max1=1000;
			
	if ($_GET['val'] == 0 ){		
		while($id <= 10){

		$result = mysqli_query($conn, "SELECT id, 
			date, time, ip, temp, speed, value, limit_engine 
			FROM data_from_engine WHERE id=$id");
				
		while($row = mysqli_fetch_array($result) ) {

			$speed= $row["speed"];
			echo "<div id=box" ; 
				if ($speed > 1 && $speed < 4500 ){ 
			     echo " style='background-color: #35E560;' " ; } 
				if ($speed > 4500 ){
				 echo " style='background-color: #E54035;' " ; }
				if ($speed == 0 ){ 
				 echo " style='background-color: #FFF;' " ; }

					echo " >";  
					echo "<div id='name' style='text-align:right;'>Silnik <b>$id</b>  </div>";
					echo "<div class='header'> <div class='header_in' style='border-left:0;'>";
						echo "IP: <b>";
						echo $row["ip"];
						echo "</b></div>";
				
						echo "<div class='header_in'>";
                        echo "Data: <b>";
						echo $row["date"];
						echo "</b></div>";

                        echo "<div class='header_in'>";
                        echo "Czas: <b>";
						echo $row["time"];
                        echo "</b></div></br>";

						echo "<div class='header_in' >";
                        echo "Temp: <b>";
						echo $row["temp"]; echo " 'C";
                        echo "</b></div>";

                        echo "<div class='header_in'>";
                        echo "Obroty: <b>";
						echo $row["speed"];
						echo "</b></div>";
						
						echo "</br><div class='header_in'>";
                        echo "Ustawiony limit obortów: <b>";
						echo $row["limit_engine"];
                        echo "</b></div>";

                        echo "<div class='header_in'>";
                        //echo "Wartosc: <b>";
						//echo $row["value"];
                        echo "</b></div>";
						echo "</br>";
                        echo "</div>";//header end
            		} // while($row = mysqli_fetch_array($result) ) END
					
echo "<div class='divarea'> Regulacja limitu obrotów:
,
<button type='button' onclick='set_limit_change(this.id,this.value)' 
id='$id' value='-100' class='set'>&nbsp;&nbsp;-&nbsp;&nbsp;</button>	


<button type='button' onclick='set_limit_change(this.id,this.value)' 
		id='$id' value='100' class='set'>&nbsp;&nbsp;+&nbsp;&nbsp;</button>
	</div> </br></br>
	<button type='button' onclick='set_limit(this.id,this.value)' 
		id='$id' value='0' class='stop'>STOP</button>
	<button type='button' onclick='set_limit(this.id,this.value)' 
		id='$id' value='2000' class='full'>ON</button></br></br>
	<button type='button' onclick='set_limit(this.id,this.value)' 
		id='$id' value='5000' class='full'>SET FULL POWER</button>"; 
echo "</div>";

				$id+=1; //while increment
		
			}//while($id <= 10){ END
		} // if ($_GET['val'] == 0 ){  END
		else {
			$tmp= $_GET['val'];
			$result = mysqli_query($conn, "SELECT id, date, time, ip, temp, speed, value, limit_engine FROM data_from_engine WHERE id=$tmp");	
				while($row = mysqli_fetch_array($result) ) {
					$speed= $row["speed"];
					echo "<div id=box" ; 
						if ($speed > 1 && $speed < 4500 ){ echo " style='background-color: #35E560;' " ; } 
						if ($speed > 4500 ){ echo " style='background-color: #E54035;' " ; }
						if ($speed == 0 ){ echo " style='background-color: #FFF;' " ; }
					echo " >";  
					echo "<div id='name' style='text-align:right;'>Silnik <b>$tmp</b>  </div>";
					echo "<div class='header'> <div class='header_in' style='border-left:0;'>";
						echo "IP: <b>";
						echo $row["ip"];
						echo "</b></div>";
		
						echo "<div class='header_in'>";
                        echo "Data: <b>";
						echo $row["date"];
						echo "</b></div>";

                        echo "<div class='header_in'>";
                        echo "Czas: <b>";
						echo $row["time"];
                        echo "</b></div></br>";

						echo "<div class='header_in' >";
                        echo "Temp: <b>";
						echo $row["temp"]; echo " 'C";
                        echo "</b></div>";

                        echo "<div class='header_in'>";
                        echo "Obroty: <b>";
						echo $row["speed"];
						echo "</b></div>";
						
						echo "</br><div class='header_in'>";
                        echo "Ustawiony limit obortów: <b>";
						echo $row["limit_engine"];
                        echo "</b></div>";

                        echo "<div class='header_in'>";
                        //echo "Wartosc: <b>";
						//echo $row["value"];
                        echo "</b></div>";
						echo "</br>";
                        echo "</div>";//header end
            } // while($row = mysqli_fetch_array($result) ) { END
					
				echo "<div class='divarea'> Regulacja limitu obrotów:
				<button type='button' onclick='set_limit_change(this.id,this.value)' id='$tmp' value='-100' class='set'>&nbsp;&nbsp;-&nbsp;&nbsp;</button>
				<button type='button' onclick='set_limit_change(this.id,this.value)' id='$tmp' value='100' class='set'>&nbsp;&nbsp;+&nbsp;&nbsp;</button>
				</div> </br></br>	
				<button type='button' onclick='set_limit(this.id,this.value)' id='$tmp' value='0' class='stop'>STOP</button>
				<button type='button' onclick='set_limit(this.id,this.value)' id='$tmp' value='2000' class='full'>ON</button></br></br>
				<button type='button' onclick='set_limit(this.id,this.value)' id='$tmp' value='5000' class='full'>SET FULL POWER</button>"; 
				echo "</div>";
		} //else END
			$conn->close();
?>

