<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>delete uwo course</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<center>
<?php
	$code=$_GET["id"];
	include 'connectdb.php';
	$EQ='SELECT * FROM equivalentto where westernnum="'.$code.'"';
	//$TRAN='START TRANSACTION';
	$result=mysqli_query($connection,$EQ);
    if (!$result) {
         die("database query failed.");
    }
	
	$row=mysqli_fetch_assoc($result);
	if(empty($row)){
		$DEL='DELETE FROM westerncourse WHERE westernnum="'.$code.'"';
		$result=mysqli_query($connection,$DEL);
		if (!$result) {
			die("database query failed.");
		}
		echo "<h1 style='text-align:center;'>Deleted</h1>";
		$url = "http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
	}
	else{
		echo "<h1 style='text-align:center;'>Are you sure about this, this course is in the equivalantto table</h1>";
		echo "<a href='uwocourse.php'><input type = 'button' value='back'/></a>";
		echo "<a href='ConDel.php?id={$code}'><input type = 'button' value='Confirm delete'/></a>";
	}
	

?>
</center>
<?php
mysqli_close($connection);
?>
</body>
</html>