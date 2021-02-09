<?php
	$row=1;
	while($row<=31){
		 echo "<option value='".$row."'>".$row."</option>";
		 $row++;
	
	}
	mysqli_free_result($result);
?>