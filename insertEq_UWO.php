<?php
	$query1="SELECT * FROM westerncourse";
	$result1=mysqli_query($connection,$query1);
	if(!$result1){
		die("databases UWO query failed.");
	}
	while ($row=mysqli_fetch_assoc($result1)){
		echo "<option name ="uwocourse" value='".$row["westernnum"]."'>".$row["westernnum"]."</option>"; 
	}
	mysqli_free_result($result1);
?>
<?php
