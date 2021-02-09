<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>COURSE DATA--WesternCourse</title>
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
<h1 style="text-align:center;">Western Course</h1>
<p><hr><p>
<h2 style="text-align:center;">
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/index2.php">Home page</a>
<a style="color:cornflowerblue;">--------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uwocourse.php">Western Courses</a>
<a style="color:cornflowerblue;">-------</a>
<a href="http://cs3319.gaul.csd.uwo.ca/vm067/a3cyrus/uni.php">Other universities</a></h2>
<p><hr><p>


<ol>
<h4>Western Course table:</h4>
<p>select a ascending/descending and Code/Name:</p>
<form action="orderUWO.php" method="post">
<body>
<input type="radio" name="sort" id="ass" value="ass"/>ascending</body>
<body>
<input type="radio" name="sort" id="des" value="des"/>descending</body>
<input type="submit" value="Show order">

<table border="1" width=850>
<tr> 
<td>
<input type="radio" name="ws" id="code" value="code"/>Code</td> 
<td style="text-align:center">
<input type="radio" name="ws" id="name"value="name"/>Name</td> 
<td>Weight</td> 
<td>suffix</td> 
</tr>
<?php
include 'getUWO.php';
?>
</table>
</form>
<form action="addUWO.php" method="post">	
<a href='addUWO.php?'><input type = 'button' value='Add new Course'/></a>
</form>
<?php
mysqli_close($connection);
?>
</ol>
</body>
</html>

