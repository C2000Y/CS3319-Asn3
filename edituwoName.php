<?php
    include("connectdb.php");
	$id=$_POST["id"];
	$code=$_POST["change"];
	
	$updatename="update westerncourse set westernname='{$code}' where westernnum='{$id}'";

	$result=mysqli_query($connection,$updatename);
	if (!$result) { die("database query failed.");
	}
	$url = "http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";  
?>