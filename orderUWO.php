<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>COURSE DATA--OrderedUWO</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<?php
include 'connectdb.php';
?>
<?php
/*******************
title and categories
********************/?>
<h1 style="text-align:center;">Ordered Table!!</h1>
<p><hr><p>
<h2 style="text-align:center;">
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php">Back to the last page</a></h2>
<p><hr><p>
<?php
	$order=$_POST['sort'];
	$UWOcol=$_POST['ws'];
	include 'connectdb.php';
	$codeDe='SELECT * FROM westerncourse ORDER BY westernnum DESC';
	$codeAs='SELECT * FROM westerncourse ORDER BY westernnum ASC';
	$NameDe='SELECT * FROM westerncourse ORDER BY westernname DESC';
	$NameAs='SELECT * FROM westerncourse ORDER BY westernname ASC';
	$count=0;
	if($UWOcol=="code"){
		if($order=="des"){
		$result=mysqli_query($connection,$codeDe);
		}
		else{
		$result=mysqli_query($connection,$codeAs);
		}
	}else{
		if($order=="des"){
		$result=mysqli_query($connection,$NameDe);
		}
		else{
		$result=mysqli_query($connection,$NameAs);
	}
	}
	if (!$result) {
          die("database query failed.");
	}	
		echo"<body><table border='1' width=700>
			<tr> 
			<td>Code</td> <td>Name</td> <td>Weight</td> <td>suffix</td> </tr>";
	while($row=mysqli_fetch_assoc($result)){
		$count++;
		echo "<tr class='data'>";
		echo "<td style='text-align:center'> ".$row["westernnum"]."</td>
		<td>".$row["westernname"]."</td>
		<td style='text-align:center'>".$row["weight"]."</td>
		<td style='text-align:center'>".$row["suffix"]."</td>
		</tr>";
		}
	echo "</table></body>";
	mysqli_close($connection);
?>
</body>
</html>