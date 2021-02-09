<?php
   /*List the names and nicknames of universities 
   that are in our system but do not have any courses 
   associated with them.*/

   $query1="Select uniname,nickname FROM university WHERE uniid NOT IN (SELECT DISTINCT uniid FROM equivalentto)";
   $result=mysqli_query($connection,$query1);
   if (!$result) {
          die("database query failed.");
   }
	echo "<ol>";
	while($row=mysqli_fetch_assoc($result)){
		echo "<li>";
		echo $row["uniname"].$row["nickname"]."</li>";
	}
	mysqli_free_result($result);
	echo "</ol>";
?>
