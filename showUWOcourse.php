<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Western--Detail</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>

<?php
include 'connectdb.php';
	$code=$_POST["uwoc"];
	?>
	<h1 style="text-align:center;">Detail of <?php echo $code; ?></h1>
	<p><hr><p>
	<body>
	<table border='1' width=1400>
	<tr style="font-size:13;">
	<td>Course Name</td>
	<td>Code</td>
	<td>Weight</td>
	<td>equivalent University</td>
	<td>equivalent Course</td>
	<td>equivalent Code</td>
	<td>equivalent weight</td>
	<td>evaluated date</td>
	</tr>
<?php
	$uwo='SELECT westerncourse.westernname as uwoname,westerncourse.westernnum as uwonum,westerncourse.weight as uwoweight,university.uniname as unin,outsidecourse.outsidename as outname,equivalentto.outsidenum as outnum,outsidecourse.weight as outweight,equivalentto.evaluateddate as date FROM westerncourse left JOIN equivalentto using (westernnum) left join outsidecourse using(uniid) left JOIN university using(uniid) WHERE westernnum="'.$code.'" and outsidecourse.outsidenum=equivalentto.outsidenum and equivalentto.uniid=outsidecourse.uniid';
	$result=mysqli_query($connection,$uwo);
	if (!$result) {
          die("database query failed.");
   }
	while($row=mysqli_fetch_assoc($result)){
		echo "<tr>
		<td>".$row["uwoname"]."</td>
		<td>".$row["uwonum"]."</td>
		<td>".$row["uwoweight"]."</td>
		<td>".$row["unin"]."</td>
		<td>".$row["outname"]."</td>
		<td>".$row["outnum"]."</td>
		<td>".$row["outweight"]."</td>
		<td>".$row["date"]."</td>
		</tr>";
	}
?>
</table>
</body>
<a href='index2.php'><input type='button' value='Back' /></a>
<?php
mysqli_close($connection);
?>
</head>
</html>
