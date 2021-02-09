<?php
    include("connectdb.php");
	$id=$_POST["id"];
	$weight=$_POST["change"];
	
	$updatew="update westerncourse set weight='{$weight}' where westernnum='{$id}'";
	$result=mysqli_query($connection,$updatew);
	if (!$result) { die("database query failed.");
	}
	$url = "http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";  
?>


