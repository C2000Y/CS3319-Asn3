<?php
	$query ="Select * from westerncourse";
	$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database query failed.");
   }

	while($row=mysqli_fetch_assoc($result)){
		echo "<tr class='data'>";
		echo "<td style='text-align:center'>".$row["westernnum"]."</td>
		<td><a href='edituwo.php?id={$row["westernnum"]}|name'>"."_".$row["westernname"]."_"."</a></td>
		<td style='text-align:center'><a href='edituwo.php?id={$row["westernnum"]}|weight'>"."_".$row["weight"]."_"."</a></td>
		<td style='text-align:center'><a href='edituwo.php?id={$row["westernnum"]}|suffix'>"."_".$row["suffix"]."_"."</a></td>
		<td><a href='delUWO.php?id={$row["westernnum"]}'>Delete</a></tr>";
	}
	mysqli_free_result($result);
?>