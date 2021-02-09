<?php
	$query ="Select westernnum from westerncourse";
	$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database query failed.");
   }

	while($row=mysqli_fetch_assoc($result)){
		 echo "<option value='".$row["westernnum"]."'>".$row["westernnum"]."</option>";
	}
	mysqli_free_result($result);
?>