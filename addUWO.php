<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add uwo course</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
	<style>
	.error {color: #FF0000;}
	</style>
	
</head>
<body>
<center>
<h3>Add new Western Course</h3>
<p><span class="error">* Required value</span></p>
<form action="uwoadder.php" method="post">
	<div class="add">Number:<input type="text" name="Code"/><span class="error">*</span></div>
	<div class="add">Name  : <input type="text" name="Name"/><span class="error">*</span></div>
	<div class="add">Weight:<input type="text" name="weight"/><span class="error">* </span></div>
	<div class="add">suffix : <input type="text" name="suffix"/><span class="error">*</span></div>
	<p>submit with incorrect input with refresh the page</p>
<div>
	<input type="submit" value="Confirm"/>
	<a href="uwocourse.php"><input type="button" value="Back" /></a>
</div>
</form>

</center>
</body>
</html>