<?php
	$row=2020;
	while($row>1979){
		 echo "<option value='".$row."'>".$row."</option>";
		 $row--;
	
	}
	mysqli_free_result($result);
?>