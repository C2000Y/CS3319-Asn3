<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>COURSE DATA--Index</title>
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
<h1 style="text-align:center;">Equivalence</h1>
<p><hr><p>
<h2 style="text-align:center;">
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/index2.php">Home page</a>
<a style="color:cornflowerblue;">--------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php">Western Courses</a>
<a style="color:cornflowerblue;">-------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uni.php">Other universities</a></h2>
<p><hr><p>

<h2>No courses association:</h2>
<?php
include 'getNoEq.php';
?>
<p><hr><p>


<h2>Select an western course:</h2>
<form action ="showUWOcourse.php" method="post">
<select name="uwoc" id="uwoc">
	<option value="1">Select Here</option>
<?php include 'getUWOcourse.php';?>
</select>
<input type="submit" value="Show Detail">
</form>
<p><hr><p>
	
<h2>Select a date:</h2>
<form action ="showbydate.php" method="post">
<select name="year1" id="year1">
	<option value="1980">Select Year</option>
<?php include 'getyear.php';?>
</select>
-
<select name="month1" id="month1">
	<option value="1">Select Month</option>
<?php include 'getmonth.php';?>
</select>
-
<select name="day1" id="day1">
	<option value="1">Select day</option>
<?php include 'getday.php';?>
</select>
<input type="submit" value="Show Detail">
</form>
<p><hr><p>

<h2>Create new equivalence between two courses:</h2>
<ol>
<h5>Select western course:</h5>
<form action ="insertEq.php" method="post">
<select name="uwocourse" id="uwocourse">
	<option value="1">Select Here</option>
<?php include 'insertEq_UWO.php';?>
</select>

<h5>Select an outside course:</h5>
<form action ="inserEq.php" method="post">
<select name="pickauni" id="pickauni">
	<option value="1">Select Here</option>
<?php include 'insertEq_Uni.php';?>
</select>
<input type="submit" value="ADD">
</form>
</ol>
<hr>
<?php
mysqli_close($connection);
?>
</body>
</html>

