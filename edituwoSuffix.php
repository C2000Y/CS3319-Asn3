<?php
    include("connectdb.php");
	$id=$_POST["id"];
	$suffix=$_POST["change"];
	
	$updates="update westerncourse set suffix='{$suffix}' where westernnum='{$id}'";
	$result=mysqli_query($connection,$updates);
	if (!$result) { die("database query failed.");
	}
	$url = "http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";  
?>
