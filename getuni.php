<?php
	$query ="Select * from university ORDER BY prov";
	$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database query failed.");
   }

	while($row=mysqli_fetch_assoc($result)){
		echo "<input type='radio' name='uni' id='uni' value='{$row[uniid]}'/>".$row[uniname]."<br>";
	}
	mysqli_free_result($result);
?>