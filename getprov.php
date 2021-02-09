<?php
	$query ="Select DISTINCT prov from university";
	$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database query failed.");
   }

	while($row=mysqli_fetch_assoc($result)){
		 echo "<option value='".$row["prov"]."'>".$row["prov"]."</option>";
	}
	mysqli_free_result($result);
?>