<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>University</title>
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
<h1 style="text-align:center;">University</h1>
<p><hr><p>
<h2 style="text-align:center;">
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/index2.php">Home page</a>
<a style="color:cornflowerblue;">--------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php">Western Courses</a>
<a style="color:cornflowerblue;">-------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uni.php">Other universities</a></h2>
<p><hr><p>
<p>Select a university</p>
<form action="uninfo.php" method="post">
<?php
include "getuni.php";
?>
<input type="submit" value="Show Detail"><br>
</form>

<h5>Select a province:</h5>
<form action ="showprov.php" method="post"">
<select name="prov" id="prov">
	<option value="1">Select Here</option>
<?php include 'getprov.php';?>
</select>
<input type="submit" value="Show University">
</form>
<?php
mysqli_close($connection);
?>
</head>
</html>