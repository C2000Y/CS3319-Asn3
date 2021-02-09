<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>University</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<h1 style="text-align:center;">University info</h1>
<p><hr><p>
<body>
<?php
include 'connectdb.php';
	$unid=$_POST["uni"];
	$query="select * from university join outsidecourse using (uniid) where uniid={$unid}";
	$result=mysqli_query($connection,$query);
	if (!$result) {
          die("database query failed.");
   }
	$row=mysqli_fetch_assoc($result);
?>
	<table border='1' width=1300>
	<tr><td>ID</td> <td>University</td> <td>City</td><td>Province</td> <td>Nick Name</td><td>Course Code</td><td>CourseName</td><td>Year</td><td>Weight</td></tr>
<?php
	while($row=mysqli_fetch_assoc($result)){
	echo "<tr><td>".$row["uniid"]."
	<td>".$row["uniname"]."</td>
	<td>".$row["city"]."</td>
	<td>".$row["prov"]."</td>
	<td>".$row["nickname"]."</td>
	<td>".$row["outsidenum"]."</td>
	<td>".$row["outsidename"]."</td>
	<td>".$row["whichyear"]."</td>
	<td>".$row["weight"]."</td>";
	}
?>
</table>
</body>
<a href='uni.php'><input type='button' value='Back' /></a>
<?php
mysqli_close($connection);
?>
</head>
</html>
