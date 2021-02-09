<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>INSERT-Equivalence</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<?php
include 'connectdb.php';
?>
<h1 style="text-align:center;">add equivalentto</h1>
<p><hr><p>
<h2 style="text-align:center;">
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/index2.php">Home page</a>
<a style="color:cornflowerblue;">--------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php">Western Courses</a>
<a style="color:cornflowerblue;">-------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uni.php">Other universities</a></h2>
<p><hr><p>
<?php
	$value=$_POST['pickauni'];
	$explode=explode("_",$value);
	$UWOCourse=$_POST['uwocourse'];
	$unid=$explode[0];
	$Outcourse=$explode[1];
	include 'connectdb.php';
	$query='SELECT * FROM equivalentto WHERE westernnum="'.$UWOCourse.'" and outsidenum="'.$Outcourse.'" and uniid="'.$unid.'"';
	$result=mysqli_query($connection,$query);
    if (!$result) {
         die("database query failed.");
    }
	$row=mysqli_fetch_assoc($result);
	
    if(empty($row)) {  
		echo "<h4>insert a new equivalence since not exist</h4>";
		$insrt='INSERT INTO equivalentto VALUES("'.$UWOCourse.'","'.$Outcourse.'","'.$unid.'",CURDATE())';
		if (!mysqli_query($connection, $insrt)) {
        die("Error: insert failed" . mysqli_error($connection));}
    }
	else{
		echo "<h4>Update the evaluated date since the equivalence exist</h4>";
		$upd='UPDATE equivalentto SET evaluateddate=CURDATE() WHERE westernnum="'.$UWOCourse.'" AND outsidenum="'.$Outcourse.'" AND uniid="'.$unid.'"';
		if (!mysqli_query($connection, $upd)) {
        die("Error: insert failed" . mysqli_error($connection));}
	}
	$data="SELECT * FROM equivalentto";
	$result3=mysqli_query($connection,$data);
		if (!$result3) { die("getquery failed.");}
		echo "UWOcourse      outCourse    id    date";
		while($row3=mysqli_fetch_assoc($result3)){
		echo "<li>";
		echo $row3["westernnum"]."  ".$row3["outsidenum"]."  ".$row3["uniid"]."  ".$row3["evaluateddate"]."</li>";
	}
	mysqli_close($connection);
?>
</body>
</html>
	
