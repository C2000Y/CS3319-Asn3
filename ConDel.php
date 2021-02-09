<?php
    include("connectdb.php");
	$id=$_GET["id"];
	$DEL='DELETE FROM westerncourse WHERE westernnum="'.$id.'"';
		$result=mysqli_query($connection,$DEL);
		if (!$result) {
			die("database query failed.");
		}
		$url = "http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
?>
